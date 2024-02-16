<?php

namespace App\Http\Controllers;

use App\Models\HasilApersepsiSiswa;
use App\Models\User;
use Illuminate\Http\Request;

class ApersepsiController extends Controller
{
    public function index()
    {
        $apersepsis = HasilApersepsiSiswa::all();
        $userCount = User::where('is_admin', 0)->count();

        return view('dashboard.apersepsi.index',
        [
            "title" => "Apersepsi",
        ], compact('apersepsis', 'userCount'));
    }
}
