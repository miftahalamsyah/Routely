<?php

namespace App\Http\Controllers;

use App\Exports\HasilTestSiswaPretestExport;
use App\Exports\HasilTestSiswaPosttestExport;
use App\Models\Nilai;
use App\Models\HasilTesSiswa;
use App\Models\HasilTugasSiswa;
use App\Models\NilaiTugas;
use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class NilaiController extends Controller
{
    public function index(): View
    {
        $nilais = Nilai::whereHas('user', function ($query) {
            $query->where('is_admin', 0);
        })->get();

        $nilaiPretestPosttest = HasilTesSiswa::join('users', 'hasil_tes_siswas.user_id', '=', 'users.id')
            ->orderBy('users.name')
            ->select('hasil_tes_siswas.*', 'users.name as user_name')
            ->get();

        $CountPretest = HasilTesSiswa::where('kategori_tes_id', 1)->count();
        $CountPosttest = HasilTesSiswa::where('kategori_tes_id', 2)->count();
        $CountStudent = User::where('is_admin', 0)->count();
        $meanPretest = HasilTesSiswa::where('kategori_tes_id', 1)->avg('total');
        $meanPosttest = HasilTesSiswa::where('kategori_tes_id', 2)->avg('total');
        $averagePretest = (int) $meanPretest;
        $averagePosttest = (int) $meanPosttest;

        $CountNilaiTugas = NilaiTugas::count();
        $CountHasilTugasSiswa = HasilTugasSiswa::count();

        return view('dashboard.nilai.index',
        [
            "title" => "Nilai",
        ],compact('nilais','nilaiPretestPosttest', 'CountPretest', 'CountPosttest', 'CountStudent', 'averagePosttest', 'averagePretest', 'CountNilaiTugas', 'CountHasilTugasSiswa'));
    }

    public function pretest(): View
    {
        $nilaiPretest = HasilTesSiswa::where('kategori_tes_id', 1)
            ->join('users', 'hasil_tes_siswas.user_id', '=', 'users.id')
            ->orderBy('users.name')
            ->select('hasil_tes_siswas.*', 'users.name as user_name')
            ->get();

        $averagePretest = HasilTesSiswa::where('kategori_tes_id', 1)->avg('total');
        $averageDekomposisi = HasilTesSiswa::where('kategori_tes_id', 1)->avg('dekomposisi');
        $averageAbstraksi = HasilTesSiswa::where('kategori_tes_id', 1)->avg('abstraksi');
        $averagePengenalanPola = HasilTesSiswa::where('kategori_tes_id', 1)->avg('pengenalan_pola');
        $averageAlgoritma = HasilTesSiswa::where('kategori_tes_id', 1)->avg('algoritma');

        return view('dashboard.nilai.pretest',
        [
            "title" => "Nilai Pretest",
        ],compact('nilaiPretest', 'averagePretest','averageDekomposisi', 'averageAbstraksi', 'averagePengenalanPola', 'averageAlgoritma'));
    }

    public function exportPretest()
    {
        return Excel::download(new HasilTestSiswaPretestExport, 'Nilai Hasil Pretest.xlsx');
    }

    public function exportPosttest()
    {
        return Excel::download(new HasilTestSiswaPosttestExport, 'Nilai Hasil Posttest.xlsx');
    }

    public function posttest(): View
    {
        $nilaiPosttest = HasilTesSiswa::where('kategori_tes_id', 2)
            ->join('users', 'hasil_tes_siswas.user_id', '=', 'users.id')
            ->orderBy('users.name')
            ->select('hasil_tes_siswas.*', 'users.name as user_name')
            ->get();

        $averagePosttest = HasilTesSiswa::where('kategori_tes_id', 2)->avg('total');
        $averageDekomposisi = HasilTesSiswa::where('kategori_tes_id', 2)->avg('dekomposisi');
        $averageAbstraksi = HasilTesSiswa::where('kategori_tes_id', 2)->avg('abstraksi');
        $averagePengenalanPola = HasilTesSiswa::where('kategori_tes_id', 2)->avg('pengenalan_pola');
        $averageAlgoritma = HasilTesSiswa::where('kategori_tes_id', 2)->avg('algoritma');

        return view('dashboard.nilai.posttest',
        [
            "title" => "Nilai Posttest",
        ],compact('nilaiPosttest', 'averagePosttest','averageDekomposisi', 'averageAbstraksi', 'averagePengenalanPola', 'averageAlgoritma'));
    }

    public function create()
    {
        $users = User::where('is_admin', 0)->get();

        return view('dashboard.nilai.create', [
            'title' => 'Tambah Nilai',
            'users' => $users,
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'pretest' => 'nullable|numeric|min:0|max:100',
            'posttest' => 'nullable|numeric|min:0|max:100',
        ]);

        Nilai::create([
            'user_id' => $request->user_id,
            'pretest' => $request->pretest,
            'posttest' => $request->posttest,
        ]);

        return redirect()->route('nilai.index')->with('status', 'Nilai created successfully!');
    }

    public function edit($id)
    {
        $nilai = Nilai::findOrFail($id);
        $users = User::where('is_admin', 0)->get();

        return view('dashboard.nilai.edit', [
            'title' => 'Edit Nilai',
            'nilai' => $nilai,
            'users' => $users,
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'pretest' => 'nullable|numeric|min:0|max:100',
            'posttest' => 'nullable|numeric|min:0|max:100',
        ]);

        $nilai = Nilai::findOrFail($id);

        $nilai->update([
            'user_id' => $request->user_id,
            'pretest' => $request->pretest,
            'posttest' => $request->posttest,
        ]);

        return redirect()->route('nilai.index')->with('status', 'Nilai updated successfully!');
    }

    public function show($id)
    {
        $user = User::findOrFail($id);
        $nilaiPretest = HasilTesSiswa::where('user_id', $id)
            ->where('kategori_tes_id', 1)
            ->get();

        $nilaiPosttest = HasilTesSiswa::where('user_id', $id)
            ->where('kategori_tes_id', 2)
            ->get();

        return view('dashboard.nilai.show', [
            'title' => 'Nilai Siswa',
            'user' => $user,
            'nilaiPretest' => $nilaiPretest,
            'nilaiPosttest' => $nilaiPosttest,
        ]);
    }
}
