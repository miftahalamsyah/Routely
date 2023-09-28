<?php

namespace App\Http\Controllers;

use App\Models\Tugas;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
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

    public function store(Request $request): RedirectResponse
    {
        $this->validate($request, [
            'pertemuan_id' => 'required',
            'name'     => 'required',
            'description'   => 'required',
            'due_date' => 'required',
            'maximum_score' => 'required',
        ]);

        $slug = Str::slug($request->name);
        // Logika untuk menyimpan tugas yang baru dibuat
        Tugas::create([
            'pertemuan_id' => $request->pertemuan_id,
            'name' => $request->name,
            'slug' => $slug,
            'description' => $request->description,
            'due_date' => $request->due_date,
            'maximum_score' => $request->maximum_score,
        ]);

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
