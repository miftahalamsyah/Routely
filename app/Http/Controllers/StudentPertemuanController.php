<?php

namespace App\Http\Controllers;

use App\Models\Pertemuan;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;

class StudentPertemuanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(): View
    {
        $pertemuans = Pertemuan::latest()->paginate(10);

        return view('student.pertemuan',
        [
            "title" => "Pertemuan",
        ],
            compact('pertemuans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Pertemuan $pertemuan)
    {
        return view('student.pertemuan_slug',
        [
            "title"=> $pertemuan->title,
            "description" => $pertemuan->description,
            "pdf_file" => $pertemuan->pdf_file,
        ]);
    }

}

