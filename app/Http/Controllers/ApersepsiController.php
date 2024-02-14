<?php

namespace App\Http\Controllers;

use App\Models\HasilApersepsiSiswa;
use Illuminate\Http\Request;

class ApersepsiController extends Controller
{
    public function index()
    {
        $apersepsis = HasilApersepsiSiswa::all();

        return view('dashboard.apersepsi.index',
        [
            "title" => "Apersepsi",
        ], compact('apersepsis'));
    }
}
