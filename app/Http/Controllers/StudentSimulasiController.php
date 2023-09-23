<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;

class StudentSimulasiController extends Controller
{
    public function index(): View
    {
        return view('student.simulasi', 
        [
            "title" => "Simulasi",
        ]);
    }
}
