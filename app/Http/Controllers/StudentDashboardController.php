<?php

namespace App\Http\Controllers;

use App\Models\Materi;
use App\Models\Tugas;
use App\Models\Pertemuan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class StudentDashboardController extends Controller
{
    public function index()
    {
        $materiCount = Materi::count();

        if (Auth::check()) {
            return view('student.index', [
                'title' => 'Student Dashboard',
                'pertemuans' => Pertemuan::all(),
                'tugass' => Tugas::all(),
                'materis' => Materi::all(),
            ]);
        } else {
            return view('pages.login', [
                'title' => 'Login',
            ]);
        }
    }

    public function profile()
    {
        $user = Materi::latest()->paginate(3);

        if (Auth::check()) {
            return view('student.profile', [
                'title' => "Student Profile",
                'user' => $user,
        ]);
        } else {
            return view('pages.login'); // Show the login page if not authenticated
        }
    }
}
