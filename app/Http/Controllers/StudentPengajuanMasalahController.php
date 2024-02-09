<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentPengajuanMasalahController extends Controller
{
    public function index()
    {
        return view('student.pengajuan-masalah.index',
        [
            'title' => 'Pengajuan Masalah',
        ]);
    }
}
