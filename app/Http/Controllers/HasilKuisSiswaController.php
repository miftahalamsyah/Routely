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

        return view('dashboard.nilai.kuis', [
            "title" => "Nilai Kuis",
            "hasilKuisSiswa" => $hasilKuisSiswa,
            "siswaCount" => $siswaCount,
            "users" => $users
        ]);
    }
}
