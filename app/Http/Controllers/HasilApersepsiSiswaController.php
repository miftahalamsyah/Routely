<?php

namespace App\Http\Controllers;

use App\Models\HasilApersepsiSiswa;
use App\Models\Pertemuan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\View\View;
use RealRashid\SweetAlert\Facades\Alert;

class HasilApersepsiSiswaController extends Controller
{
    public function create($pertemuan_id)
    {
        $pertemuan = Pertemuan::where('id', $pertemuan_id)->first();

        $user_id = auth()->id();
        $submission = HasilApersepsiSiswa::where('user_id', $user_id)
            ->where('pertemuan_id', $pertemuan_id)
            ->first();

        return view('student.apersepsi.create',
        [
            "title" => "1. Persiapan - Apersepsi Siswa",
            "defaultPertemuanId" => $pertemuan_id,
            "pertemuan" => $pertemuan,
            "submission" => $submission,
        ]);
    }

    public function store(Request $request)
    {
        $user_id = auth()->user()->id;
        $pertemuan_id = $request->pertemuan_id;

        $request->validate([
            'pertemuan_id' => 'required',
            'user_id' => 'required',
            'jawaban' => 'required',
        ]);

        HasilApersepsiSiswa::create([
            'user_id' => $user_id,
            'pertemuan_id' => $pertemuan_id,
            'jawaban' => $request->jawaban,
        ]);

        Alert::success('Success', 'Apersepsi telah dikumpulkan.');
        return redirect()->back();
    }
}
