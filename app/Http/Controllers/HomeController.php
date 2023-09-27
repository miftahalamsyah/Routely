<?php

namespace App\Http\Controllers;

use App\Models\Materi;
use App\Models\Tugas;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    public function index()
    {
        $materis = Materi::latest()->paginate(3);
        $tugass = Tugas::all();
        if (Auth::check()) {
            return view('student.index', [
                'title' => "Student Dashboard",
                'materis' => $materis,
                'tugass' => $tugass,
        ]);
        } else {
            return view('pages.login'); // Show the login page if not authenticated
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
