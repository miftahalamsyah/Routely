<?php

namespace App\Http\Controllers;

use App\Models\Materi;
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
        $pertemuanCount = Pertemuan::count();
        $userCount = User::where('is_admin', 0)->count();

        if (Auth::check()) {
            return view('dashboard.index', [
                'title' => 'Admin Dashboard',
                'materiCount' => $materiCount,
                'pertemuanCount' => $pertemuanCount,
                'userCount' => $userCount,
                'tugass' => Tugas::all(),
                'materis' => Materi::all(),
                'pertemuans' => Pertemuan::all(),
                'users' => User::where('is_admin', 0)->paginate(10),
            ]);
        } else {
            return view('pages.login', [
                'title' => 'Login',
            ]);
        }
    }
}
