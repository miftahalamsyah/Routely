<?php

namespace App\Http\Controllers;

use App\Models\PertanyaanPemulihan;
use Illuminate\Http\Request;

class PertanyaanPermulihanController extends Controller
{
    public function index()
    {
        $pertanyaans = PertanyaanPemulihan::all();

        return view('dashboard.pertanyaan-pemulihan.index',
        [
            "title" => "Pertanyaan Pemulihan",
            "pertanyaans" => $pertanyaans,
        ]);
    }

    public function create()
    {

    }

    public function store(Request $request)
    {

    }
}
