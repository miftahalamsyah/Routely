<?php

namespace App\Http\Controllers;

use App\Models\HasilApersepsiSiswa;
use App\Models\Pertemuan;
use App\Models\User;
use Illuminate\Http\Request;

class ApersepsiController extends Controller
{
    public function index()
    {
        $apersepsis = HasilApersepsiSiswa::all();
        $userCount = User::where('is_admin', 0)->count();
        $users = User::where('is_admin', 0)
            ->orderBy('name', 'asc')
            ->get();

        return view('dashboard.apersepsi.index',
        [
            "title" => "Apersepsi",
        ], compact('apersepsis', 'userCount', 'users'));
    }

    public function show($id)
    {
        $pertemuan = Pertemuan::findOrFail($id);
        $users = User::all();

        $hasilApersepsi = HasilApersepsiSiswa::where('pertemuan_id', $id)->join('users', 'hasil_apersepsi_siswa.user_id', '=', 'users.id')
            ->orderBy('users.name')
            ->get();

        return view('dashboard.apersepsi.show', [
            'title' => 'Apersepsi',
            'users' => $users,
            'pertemuan' => $pertemuan,
            'hasilApersepsi' => $hasilApersepsi,
        ]);
    }

    public function siswa($id)
    {
        $user = User::findOrFail($id);
        $hasilApersepsi = HasilApersepsiSiswa::where('user_id', $id)
            ->get();
        $pertemuans = Pertemuan::all();

        return view('dashboard.apersepsi.siswa', [
            'title' => 'Apersepsi',
            'user' => $user,
            'pertemuans' => $pertemuans,
            'hasilApersepsi' => $hasilApersepsi,
        ]);
    }
}
