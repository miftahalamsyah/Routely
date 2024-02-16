<?php

namespace App\Http\Controllers;

use App\Models\HasilKuisSiswa;
use Illuminate\Http\Request;

class HasilKuisSiswaController extends Controller
{
    public function index(){
        $hasilKuisSiswa = HasilKuisSiswa::all()
            ->sortBy(function ($result) {
                // Assuming there's a 'user' relationship in HasilKuisSiswa
                return optional($result->user)->name;
            });

        return view('dashboard.nilai.kuis', [
            "title" => "Nilai Kuis",
            "hasilKuisSiswa" => $hasilKuisSiswa,
        ]);
    }
}
