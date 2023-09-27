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
        $userCount = User::where('is_admin', 0)->count();
        $materis = Materi::all();
        $users = User::where('is_admin', 0)->paginate(10);
        $tugass = Tugas::all();
        $pertemuans = Pertemuan::all();

        if (Auth::check()) {
            return view('dashboard.index', compact('users', 'materis', 'tugass', 'pertemuans'))->with([
                'title' => 'Admin Dashboard',
                'materiCount' => $materiCount,
                'userCount' => $userCount,
            ]);
        } else {
            return view('pages.login', [
                'title' => 'Login',
            ]);
        }
    }
}
