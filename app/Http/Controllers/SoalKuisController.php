<?php

namespace App\Http\Controllers;

use App\Imports\SoalKuisImport;
use App\Models\Pertemuan;
use App\Models\SoalKuis;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class SoalKuisController extends Controller
{
    public function index()
    {
        $soal_kuis = SoalKuis::all();
        return view('dashboard.kuis.index', [
            "title" => "Soal Kuis",
            "soal_kuis" => $soal_kuis,
        ]);
    }

    public function create()
    {
        $pertemuans = Pertemuan::all();
        return view('dashboard.kuis.create', [
            "title" => "Tambah Soal Kuis",
            "pertemuans" => $pertemuans,
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'pertemuan_id' => 'required',
            'indikator' => 'required',
            'pertanyaan' => 'required',
            'gambar' => 'nullable|file|mimes:png,jpg,jpeg|max:2048',
            'jawaban_a' => 'required',
            'jawaban_b' => 'required',
            'jawaban_c' => 'required',
            'jawaban_d' => 'required',
            'jawaban_e' => 'required',
            'kunci_jawaban' => 'required',
            'pembahasan' => 'nullable',
        ]);

        $pertemuan_id = $request->input('pertemuan_id');

        if ($request->hasFile('gambar')) {
            $timestamp = substr(time(), -4);
            $fileName = "Gambar Kuis_Pertemuan {$pertemuan_id}_{$timestamp}." . $request->gambar->extension();
            $request->gambar->storeAs('public/gambar', $fileName);
        } else {
            $fileName = null;
        }

        $soalKuis = new SoalKuis([
            'pertemuan_id' => $request->input('pertemuan_id'),
            'indikator' => $request->input('indikator'),
            'pertanyaan' => $request->input('pertanyaan'),
            'gambar' => $fileName,
            'jawaban_a' => $request->input('jawaban_a'),
            'jawaban_b' => $request->input('jawaban_b'),
            'jawaban_c' => $request->input('jawaban_c'),
            'jawaban_d' => $request->input('jawaban_d'),
            'jawaban_e' => $request->input('jawaban_e'),
            'kunci_jawaban' => $request->input('kunci_jawaban'),
            'pembahasan' => $request->input('pembahasan'),
        ]);

        $soalKuis->save();

        return redirect()->route('kuis.index')->with('status', 'Soal Kuis created successfully!');
    }

    public function edit()
    {

    }

    public function update(Request $request)
    {

    }

    public function import(Request $request)
    {
        if ($request->isMethod('post')) {
            $request->validate([
                'file' => 'required|mimes:xls,xlsx,csv|max:10240', // Adjust max file size as needed
            ]);

            $file = $request->file('file');

            try {
                Excel::import(new SoalKuisImport, $file);
            } catch (\Exception $e) {
                return redirect()->back()->with('error', 'Failed to import data. Make sure the file format is correct.');
            }

            return redirect()->route('kuis.index')->with('success', 'Data imported successfully');
        }

        return view('dashboard.kuis.import', [
            "title" => "Impor Soal Kuis",
        ]);
    }

    public function destroy($id)
    {
        $soalKuis = SoalKuis::findOrFail($id);
        $soalKuis->delete();

        return redirect()->route('kuis.index')->with('status', 'Soal Kuis deleted successfully!');
    }
}
