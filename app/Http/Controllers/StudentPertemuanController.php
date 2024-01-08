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
        $pertemuans = Pertemuan::paginate(10);

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
        // $pertemuan = Pertemuan::findOrFail($pertemuan);
        $materis = [];
        foreach ($pertemuan->materi as $materi) {
            $materis[] = [
                "title" => $materi->title,
                "slug" => $materi->slug,
                "description" => $materi->description,
                "thumbnail_image" => $materi->thumbnail_image,
            ];
        }

        $tugass = [];
        foreach ($pertemuan->tugas as $tugas) {
            $tugass[] = [
                "name" => $tugas->name,
                "slug" => $tugas->slug,
                "description" => $tugas->description,
                "submission_status" => $tugas->submission_status,
            ];
        }

        return view('student.pertemuan_slug',
        [
            "pertemuan" => $pertemuan,
            "title" => "Pertemuan Ke-$pertemuan->pertemuan_ke",
            "pertemuan_ke"=> $pertemuan->pertemuan_ke,
            "tanggal" => $pertemuan->tanggal,
            "materi" => $materis,
            "tugas" => $tugass,
        ]);
    }

}

