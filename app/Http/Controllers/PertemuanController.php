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
        $request->validate([
            'pertemuan_ke' => 'required|integer',
            'tanggal' => 'required',
        ]);

        $pertemuan = Pertemuan::create([
            'pertemuan_ke' => $request->input('pertemuan_ke'),
            'tanggal' => $request->input('tanggal'),
            // Tambahkan kolom-kolom lain yang sesuai
        ]);

        $pertemuan->materi()->sync($request->input('materi'));
        $pertemuan->tugas()->sync($request->input('tugas'));

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
        $request->validate([
            'pertemuan_ke' => 'required|integer',
            'materi_id' => 'required|array',
            'materi_id.*' => 'exists:materis,id',
            'tugas_id' => 'required|array',
            'tugas_id.*' => 'exists:tugass,id',
        ]);

        $pertemuan = Pertemuan::create([
            'pertemuan_ke' => $request->input('pertemuan_ke'),
        ]);

        $pertemuan->materis()->sync($request->input('materi_id'));
        $pertemuan->tugass()->sync($request->input('tugas_id'));

        return redirect()->route('pertemuan.index')
            ->with('success', 'Pertemuan created successfully.');
    }

    public function destroy(Pertemuan $pertemuan)
    {
        $pertemuan->delete();

        return redirect()->route('pertemuan.index')
            ->with('success', 'Pertemuan deleted successfully.');
    }
}
