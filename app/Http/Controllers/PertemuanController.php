<?php

namespace App\Http\Controllers;

use App\Models\Pertemuan;
use App\Models\Materi;
use App\Models\Tugas;
use Illuminate\Http\Request;

class PertemuanController extends Controller
{
    public function index()
    {
        $pertemuans = Pertemuan::all();
        return view('dashboard.pertemuan.index', compact('pertemuans'));
    }

    public function create()
    {
        $materis = Materi::all();
        $tugass = Tugas::all();

        return view('dashboard.pertemuan.create', compact('materis', 'tugass'));
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'pertemuan_ke' => 'required|integer',
            'tanggal' => 'required',
        ]);

        $slug = Str::slug($request->title);

        Pertemuan::create([
            'slug' => $slug,
            'pertemuan_ke' => $request->input('pertemuan_ke'),
            'tanggal' => $request->input('tanggal'),
            // Tambahkan kolom-kolom lain yang sesuai
        ]);

        return redirect()->route('pertemuan.index')->with('success', 'Pertemuan berhasil dibuat');
    }

    public function edit(Pertemuan $pertemuan)
    {
        $materis = Materi::all();
        $tugass = Tugas::all();
        return view('dashboard.pertemuan.edit', compact('pertemuan', 'materis', 'tugass'));
    }

    public function update(Request $request, Pertemuan $pertemuan)
    {
        $this->validate($request,[
            'pertemuan_ke' => 'required|integer',
            'tanggal' => 'required',
        ]);

        $slug = Str::slug($request->title);

        Pertemuan::create([
            'slug' => $slug,
            'pertemuan_ke' => $request->input('pertemuan_ke'),
            'tanggal' => $request->input('tanggal'),
            // Tambahkan kolom-kolom lain yang sesuai
        ]);

        return redirect()->route('pertemuan.index')->with('success', 'Pertemuan berhasil dibuat');
    }

    public function destroy(Pertemuan $pertemuan)
    {
        $pertemuan->delete();

        return redirect()->route('pertemuan.index')
            ->with('success', 'Pertemuan deleted successfully.');
    }
}
