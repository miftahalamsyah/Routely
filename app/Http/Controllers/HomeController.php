<?php

namespace App\Http\Controllers;

use App\Models\Materi;
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

        if (Auth::check()) {
            return view('student.index', [
                'title' => "Student Dashboard",
                'materis' => $materis,
        ]);
        } else {
            return view('pages.login'); // Show the login page if not authenticated
        }
    }
}
