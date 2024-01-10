<?php

namespace App\Http\Controllers;

use App\Models\Materi;
use App\Models\Pertemuan;
use App\Models\Tugas;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PertemuanController extends Controller
{
    public function index()
    {
        $pertemuans = Pertemuan::all();
        return view('dashboard.pertemuan.index',
        [
            "title" => "Pertemuan",
        ], compact('pertemuans'));
    }

    public function create()
    {
        $materis = Materi::all();
        $tugass = Tugas::all();

        return view('dashboard.pertemuan.create',
        [
            "title" => "Tambah Pertemuan",
        ],compact('materis', 'tugass'));
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'pertemuan_ke' => 'required|integer',
            'tanggal' => 'required',
            'tujuan_pembelajaran' => 'required',
            'apersepsi' => 'required'
        ]);

        $slug = Str::slug("pertemuan_ke_{$request->pertemuan_ke}");

        Pertemuan::create([
            'slug' => $slug,
            'pertemuan_ke' => $request->input('pertemuan_ke'),
            'tanggal' => $request->input('tanggal'),
            'tujuan_pembelajaran' => $request->input('tujuan_pembelajaran'),
            'apersepsi' => $request->input('apersepsi'),
        ]);

        return redirect()->route('pertemuan.index')->with('success', 'Pertemuan berhasil dibuat');
    }

    public function edit($id)
    {
        $pertemuan = Pertemuan::findOrFail($id);
        $materis = Materi::all();
        $tugass = Tugas::all();

        return view('dashboard.pertemuan.edit', [
            'title' => 'Edit Pertemuan',
            'pertemuan' => $pertemuan,
        ], compact('materis', 'tugass'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'pertemuan_ke' => 'required|integer',
            'tanggal' => 'required',
            'tujuan_pembelajaran' => 'required',
            'apersepsi' => 'required',
        ]);

        $slug = Str::slug("pertemuan_ke_{$request->pertemuan_ke}");

        Pertemuan::where('id', $id)->update([
            'slug' => $slug,
            'pertemuan_ke' => $request->input('pertemuan_ke'),
            'tanggal' => $request->input('tanggal'),
            'tujuan_pembelajaran' => $request->input('tujuan_pembelajaran'),
            'apersepsi' => $request->input('apersepsi'),
        ]);

        return redirect()->route('pertemuan.index')->with('success', 'Pertemuan berhasil diperbarui');
    }

    public function destroy(Pertemuan $pertemuan)
    {
        $pertemuan->delete();

        return redirect()->route('pertemuan.index')
            ->with('success', 'Pertemuan deleted successfully.');
    }
}
