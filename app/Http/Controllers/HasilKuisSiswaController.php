<?php

namespace App\Http\Controllers;

use App\Models\HasilKuisSiswa;
use App\Models\User;
use Illuminate\Http\Request;

class HasilKuisSiswaController extends Controller
{
    public function index(){

        $siswaCount = User::where('is_admin', 0)->count();
        $hasilKuisSiswa = HasilKuisSiswa::all()
            ->sortBy(function ($result) {
                // Assuming there's a 'user' relationship in HasilKuisSiswa
                return optional($result->user)->name;
            });

        $users = User::where('is_admin', 0)->get();

        return view('dashboard.nilai.kuis.index', [
            "title" => "Nilai Kuis",
            "hasilKuisSiswa" => $hasilKuisSiswa,
            "siswaCount" => $siswaCount,
            "users" => $users
        ]);
    }

    public function show($id)
    {
        $user = User::findOrFail($id);

        $nilaiKuis = HasilKuisSiswa::where('user_id', $id)
            ->get();

        return view('dashboard.nilai.kuis.show', [
            'title' => 'Nilai Kuis Siswa',
            'user' => $user,
            'nilaiKuis' => $nilaiKuis,
        ]);
    }

    public function id($id)
    {
        $hasilKuisSiswa = HasilKuisSiswa::where('pertemuan_id', $id)
            ->get()
            ->sortBy(function ($result) {
                // Assuming there's a 'user' relationship in HasilKuisSiswa
                return optional($result->user)->name;
            });

        $users = User::where('is_admin', 0)->get();

        return view('dashboard.nilai.kuis.id', [
            "title" => "Nilai Kuis",
            "hasilKuisSiswa" => $hasilKuisSiswa,
            "users" => $users,
            "id" => $id,
        ]);
    }
}
