<?php

namespace App\Http\Controllers;

use App\Models\HasilTesSiswa;
use Illuminate\Http\Request;

class HasilTesSiswaController extends Controller
{
    public function store(Request $request)
{
    // Validate the request data

    // Create a new HasilTesSiswa record
    HasilTesSiswa::create($request->all());

    // Redirect the user
    return redirect()->route('student.tes.index')->with('success', 'Hasil tes berhasil disimpan.');
}
}
