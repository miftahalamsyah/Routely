<?php

namespace App\Http\Controllers;

use App\Models\HasilKuisSiswa;
use App\Models\HasilTesSiswa;
use App\Models\HasilTugasSiswa;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;

class StudentRaporController extends Controller
{
    public function index(): View
    {
        $HasilKuisSiswa = HasilKuisSiswa::where('user_id', auth()->id())->get();
        $HasilPretestSiswa = HasilTesSiswa::where('user_id', auth()->id())
            ->where('kategori_tes_id', 1)->get();
        $HasilPosttestSiswa = HasilTesSiswa::where('user_id', auth()->id())
            ->where('kategori_tes_id', 2)->get();

        return view('student.rapor.index',
        [
            "title" => "Nilai Rapor",
        ],
            compact('HasilKuisSiswa', 'HasilPretestSiswa', 'HasilPosttestSiswa'));
    }
}

