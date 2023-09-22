<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            return view('pages.welcome', [
                'title' => "Welcome"
        ]);
        } else {
            return view('pages.login'); // Show the login page if not authenticated
        }
    }
}
