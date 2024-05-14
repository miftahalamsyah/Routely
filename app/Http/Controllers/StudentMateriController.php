<?php

namespace App\Http\Controllers;

use App\Models\Materi;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class StudentMateriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(): View
    {
        $materis = Materi::orderBy('materis.id')->paginate(10);

        return view('student.materi',
        [
            "title" => "Materi",
        ],
            compact('materis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Materi $materi)
    {
        $user = Auth::user();
        return view('student.materi_slug',
        [
            "title"=> "2. Pemahaman - $materi->title",
            "description" => $materi->description,
            "pdf_file" => $materi->pdf_file,
            "materi" => $materi,
        ]);
    }

    public function dashboard(): View
    {
        $materis = Materi::latest()->paginate(3);

        return view('student.materi',
        [
            "title" => "Materi",
        ],
            compact('materis'));
    }
}
