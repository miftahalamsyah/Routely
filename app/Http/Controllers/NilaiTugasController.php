<?php

namespace App\Http\Controllers;

use App\Models\HasilTugasSiswa;
use App\Models\NilaiTugas;
use App\Models\Nilai;
use App\Models\Tugas;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\View\View;

class NilaiTugasController extends Controller
{
    public function index()
    {
        $tugass = Tugas::all();
        $hasilTugasSiswas = HasilTugasSiswa::all();

        $users = User::where('is_admin', 0);
        $userCount = User::where('is_admin', 0)->count();
        $nilaiTugas = NilaiTugas::join('users', 'nilai_tugas.user_id', '=', 'users.id')
            ->orderBy('users.name')
            ->get(['nilai_tugas.*']);

        return view('dashboard.nilai.tugas.index',
        [
            "title" => "Nilai Tugas",
        ], compact('tugass', 'users', 'hasilTugasSiswas', 'nilaiTugas', 'userCount'));
    }

    public function create($tugas_id, $user_id, $hasil_tugas_siswas_id)
    {
        $tugass = Tugas::all();
        $hasilTugasSiswa = HasilTugasSiswa::all();
        $users = User::where('is_admin', 0)->get();

        $hasilSiswa = HasilTugasSiswa::findOrFail($hasil_tugas_siswas_id);

        return view('dashboard.nilai.tugas.create', [
            "title" => "Isi Nilai Tugas",
            "defaultTugasId" => $tugas_id,
            "defaultUserId" => $user_id,
            "defaultHasilTugasSiswaId" => $hasil_tugas_siswas_id,
        ], compact('tugass', 'users', 'hasilTugasSiswa', 'tugas_id', 'hasilSiswa'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'tugas_id' => 'required|exists:tugas,id',
            'user_id' => 'required|exists:users,id',
            'hasil_tugas_siswas_id' => 'required|exists:hasil_tugas_siswas,id',
            'nilai_tugas' => 'required|numeric|min:0|max:100',
        ]);

        NilaiTugas::create([
            'tugas_id' => $request->tugas_id,
            'user_id' => $request->user_id,
            'hasil_tugas_siswa_id' => $request->hasil_tugas_siswas_id,
            'nilai_tugas' => $request->nilai_tugas,
        ]);

        return redirect()->route('tugas.index')->with('success', 'Nilai telah ditambahkan.');
    }

    public function edit($hasil_tugas_siswas_id): View
    {
        // $nilaiTugas = NilaiTugas::findOrFail($id);
        $nilaiTugas = NilaiTugas::where('hasil_tugas_siswa_id', $hasil_tugas_siswas_id)->first();
        $hasilTugasSiswa = HasilTugasSiswa::findOrFail($hasil_tugas_siswas_id);
        $hasilSiswa = HasilTugasSiswa::findOrFail($hasil_tugas_siswas_id);

        $tugass = Tugas::all();
        $hasilTugasSiswa = HasilTugasSiswa::all();
        $users = User::where('is_admin', 0)->get();

        return view('dashboard.nilai.tugas.edit', [
            'title' => 'Edit Nilai Tugas',
            'nilaiTugas' => $nilaiTugas,
        ], compact('tugass', 'users', 'hasilTugasSiswa', 'hasilSiswa'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nilai_tugas' => 'required|numeric|min:0|max:100',
        ]);

        $nilaiTugas = NilaiTugas::findOrFail($id);

        $nilaiTugas->update([
            'nilai_tugas' => $request->nilai_tugas,
        ]);

        return redirect()->route('tugas.index')->with('success', 'Nilai telah diperbarui.');
    }

    protected function updateJumlahNilaiTugas($tugasId)
    {
        // Calculate and update jumlah_nilai_tugas in nilai table
        // Example: Assuming you have a model for nilai
        $nilaiModel = new Nilai();
        $jumlahNilaiTugas = $nilaiModel->calculateJumlahNilaiTugas($tugasId);

        $nilaiModel->updateJumlahNilaiTugas($tugasId, $jumlahNilaiTugas);
    }

    public function destroy($id)
    {
        $nilaiTugas = NilaiTugas::findOrFail($id);
        $nilaiTugas->delete();

        return redirect()->route('nilai.tugas.index')->with('success', 'Nilai berhasil dihapus.');
    }
}
