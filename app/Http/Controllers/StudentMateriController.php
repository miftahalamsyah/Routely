<?php

namespace App\Http\Controllers;

use App\Models\Materi;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
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
        $materis = Materi::latest()->paginate(5);

        return view('pages.materi', 
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
        return view('pages.materi_slug',
        [
            "title"=> $materi->title,
            "description" => $materi->description,
            "pdf_file" => $materi->pdf_file,
        ]);
    }
}