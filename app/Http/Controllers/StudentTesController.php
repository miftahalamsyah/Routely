<?php

namespace App\Http\Controllers;

use App\Models\HasilTesSiswa;
use App\Models\KategoriTes;
use App\Models\SoalTes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class StudentTesController extends Controller
{
    public function index(): View
    {
        $kategori_tes = KategoriTes::all();
        return view('student.tes.index',
        [
            "title" => "Tes",
            "kategori_tes" => $kategori_tes,
        ]);
    }

    public function show($slug)
    {
        $kategori_tes = KategoriTes::where('slug', $slug)->firstOrFail();
        $soal_tes = SoalTes::where('kategori_tes_id', $kategori_tes->id)->get();

        return view('student.tes.slug', [
            'title' => $kategori_tes->kategori_tes,
            'kategori_tes' => $kategori_tes,
            'soal_tes' => $soal_tes,
        ]);
    }

}
