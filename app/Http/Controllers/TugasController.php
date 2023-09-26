<?php

namespace App\Http\Controllers;

use App\Models\Tugas;
use App\Models\User;
use Illuminate\Http\Request;

class TugasController extends Controller
{
    public function index()
    {
        // Logika untuk menampilkan daftar tugas
        $tugas = Tugas::all();
        $users = User::where('is_admin', 0)->paginate(10);
        return view('dashboard.tugas.index', compact('tugas', 'users'));
    }

    public function create()
    {
        // Logika untuk menampilkan formulir pembuatan tugas
        $users = User::where('is_admin', 0)->paginate(10);
        return view('dashboard.tugas.create', compact('users'));
    }

    public function store(Request $request)
    {
        // Logika untuk menyimpan tugas yang baru dibuat
        $tugas = new Tugas;
        $tugas->name = $request->name;
        $tugas->description = $request->description;
        $tugas->due_date = $request->due_date;
        $tugas->maximum_score = $request->maximum_score;

        // Periksa nilai 'assign_to'
        if ($request->assign_to == 'all') {
            // Memberikan tugas kepada semua pengguna
            $users = User::all();
            foreach ($users as $user) {
                $user->tugas()->save($tugas);
            }
        } else {
            // Memberikan tugas kepada pengguna tertentu
            $user = User::find($request->assign_to);
            $user->tugas()->save($tugas);
        }

        return redirect()->route('tugas.index')->with('success', 'Tugas berhasil ditambahkan.');
    }

    public function show($id)
    {
        // Logika untuk menampilkan detail tugas
        $tugas = Tugas::find($id);
        return view('dashboard.tugas.show', compact('tugas'));
    }

    public function edit($id)
    {
        // Logika untuk menampilkan formulir pengeditan tugas
        $tugas = Tugas::find($id);
        return view('dashboard.tugas.edit', compact('tugas'));
    }

    public function update(Request $request, $id)
    {
        // Logika untuk mengupdate tugas yang sudah ada
        $tugas = Tugas::find($id);
        $tugas->update($request->all());
        return redirect()->route('tugas.index')->with('success', 'Tugas berhasil diperbarui.');
    }

    public function destroy($id)
    {
        // Logika untuk menghapus tugas
        $tugas = Tugas::find($id);
        $tugas->delete();
        return redirect()->route('tugas.index')->with('success', 'Tugas berhasil dihapus.');
    }
}
