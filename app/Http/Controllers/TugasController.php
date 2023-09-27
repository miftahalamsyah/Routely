<?php

namespace App\Http\Controllers;

use App\Models\Tugas;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TugasController extends Controller
{
    public function index()
    {
        // Logika untuk menampilkan daftar tugas
        $tugass = Tugas::all();
        $users = User::where('is_admin', 0)->paginate(10);
        return view('dashboard.tugas.index', compact('tugass', 'users'));
    }

    public function create()
    {
        // Logika untuk menampilkan formulir pembuatan tugas
        $users = User::where('is_admin', 0)->paginate(10);
        return view('dashboard.tugas.create', compact('users'));
    }

    public function store(Request $request)
    {
        $slug = Str::slug($request->name);
        // Logika untuk menyimpan tugas yang baru dibuat
        $assignment = new Tugas;
        $assignment->name = $request->name;
        $assignment->slug = $slug;
        $assignment->description = $request->description;
        $assignment->due_date = $request->due_date;
        $assignment->maximum_score = $request->maximum_score;

        // Periksa nilai 'assign_to'
        if ($request->assign_to == 'all') {
            // Memberikan tugas kepada semua pengguna
            $users = User::all();
            foreach ($users as $user) {
                $user->tugas()->save($assignment);
            }
        } else {
            // Memberikan tugas kepada pengguna tertentu
            $user = User::find($request->assign_to);
            $user->tugas()->save($assignment);
        }

        return redirect()->route('tugas.index')->with('success', 'Tugas berhasil ditambahkan.');
    }

    public function show($id)
    {
        // Logika untuk menampilkan detail tugas
        $tugass = Tugas::find($id);
        return view('dashboard.tugas.show', compact('assignment'));
    }

    public function edit($id)
    {
        // Logika untuk menampilkan formulir pengeditan tugas
        $tugass = Tugas::find($id);
        return view('dashboard.tugas.edit', compact('assignment'));
    }

    public function update(Request $request, $id)
    {
        // Logika untuk mengupdate tugas yang sudah ada
        $tugass = Tugas::find($id);
        $tugass->update($request->all());
        return redirect()->route('tugas.index')->with('success', 'Tugas berhasil diperbarui.');
    }

    public function destroy($id)
    {
        // Logika untuk menghapus tugas
        $tugass = Tugas::find($id);
        $tugass->delete();
        return redirect()->route('tugas.index')->with('success', 'Tugas berhasil dihapus.');
    }
}
