<?php

namespace App\Http\Controllers;

use App\Models\HasilTugasSiswa;
use App\Models\Kelompok;
use App\Models\NilaiTugas;
use App\Models\Tugas;
use Illuminate\Http\Request;

class StudentTugasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Tugas $tugas)
    {
        $user = auth()->user();

        $submission = HasilTugasSiswa::where('user_id', $user->id)
            ->where('tugas_id', $tugas->id)
            ->first();

        $nilaiTugas = NilaiTugas::where('user_id', $user->id)
        ->where('tugas_id', $tugas->id)
        ->first();

        $hasilTugasSiswas = HasilTugasSiswa::where('tugas_id', $tugas->id)
            ->get();

        return view('student.tugas_slug',
        [
            "pertemuan" => $tugas,
            "title" => "5. Pemecahan Masalah - $tugas->name",
            "name"=> $tugas->name,
            "description" => $tugas->description,
            "tugas_file" => $tugas->tugas_file,
            "due_date" => $tugas->due_date,
            "submission" => $submission,
            "nilaiTugas" => $nilaiTugas,
            "tugas" => $tugas,
            "hasilTugasSiswas" => $hasilTugasSiswas,
        ],compact('tugas'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tugas $tugas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tugas $tugas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tugas $tugas)
    {
        //
    }
}
