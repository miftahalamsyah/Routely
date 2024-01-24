<?php

namespace App\Http\Controllers;

use App\Models\HasilTesSiswa;
use App\Models\Kelompok;
use App\Models\Materi;
use App\Models\Nilai;
use App\Models\Pertemuan;
use App\Models\Tugas;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;


class DashboardController extends Controller
{
    public function index()
    {
        $materiCount = Materi::count();
        $kelompokCount = Kelompok::distinct('no_kelompok')->count();
        $tugasCount = Tugas::count();
        $pertemuanCount = Pertemuan::count();
        $userCount = User::where('is_admin', 0)->count();
        $CountPretest = HasilTesSiswa::where('kategori_tes_id', 1)->count();
        $meanPretest = HasilTesSiswa::where('kategori_tes_id', 1)->avg('total');
        $CountPosttest = HasilTesSiswa::where('kategori_tes_id', 2)->count();
        $meanPosttest = HasilTesSiswa::where('kategori_tes_id', 2)->avg('total');
        $averagePretest = (int) $meanPretest;
        $averagePosttest = (int) $meanPosttest;

        $users = User::where('is_admin', 0)
                    ->orderBy('updated_at', 'asc')
                    ->get();
        $nilais = Nilai::whereHas('user', function ($query) {
            $query->where('is_admin', 0);
        })->get();

        $kelompoks = Kelompok::all();

        if (Auth::check()) {
            return view('dashboard.index', [
                'title' => 'Admin Dashboard',
                'materiCount' => $materiCount,
                'tugasCount' => $tugasCount,
                'kelompokCount' => $kelompokCount,
                'pertemuanCount' => $pertemuanCount,
                'userCount' => $userCount,
                'tugass' => Tugas::all(),
                'materis' => Materi::all(),
                'pertemuans' => Pertemuan::all(),
                'users' => User::where('is_admin', 0)->paginate(10),
                'CountPretest' => $CountPretest,
                'CountPosttest' => $CountPosttest,
                'averagePretest' => $averagePretest,
                'averagePosttest' => $averagePosttest,
                'users' => $users,
                'nilais' => $nilais,
                'kelompoks' => $kelompoks,
            ]);
        } else {
            return view('pages.home', [
                'title' => 'Routely',
            ]);
        }
    }
}
