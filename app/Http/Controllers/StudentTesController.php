<?php

namespace App\Http\Controllers;

use App\Models\HasilTesSiswa;
use App\Models\KategoriTes;
use App\Models\Nilai;
use App\Models\SoalTes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use RealRashid\SweetAlert\Facades\Alert;


class StudentTesController extends Controller
{
    public function index(): View
    {
        $kategori_tes = KategoriTes::all();

        return view('student.tes.index',
        [
            "title" => "Tes",
            "kategori_tes" => $kategori_tes,
        ]);
    }


    public function confirm(Request $request, $slug)
    {
        $kategori_tes = KategoriTes::where('slug', $slug)->firstOrFail();

        return view('student.tes.confirmation', [
            "title" => "Tes",
            'kategori_tes' => $kategori_tes,
        ]);
    }

    public function validatePasscode(Request $request, $slug)
    {
        $request->validate([
            'passcode' => 'required',
        ]);

        $kategori_tes = KategoriTes::where('slug', $slug)
            ->where('passcode', $request->passcode)
            ->first();

        if ($kategori_tes) {
            // Passcode is correct, set the session variable
            $request->session()->put('passcode_validated', true);

            // Redirect to the test page
            return redirect()->route('student.tes.show', $slug);
        } else {
            // Passcode is incorrect, redirect back with an error message
            Alert::error('Maaf', 'Passcode yang kamu masukan salah!.');
            return redirect()->back();
        }
    }

    public function show($slug, Request $request)
    {
        $kategori_tes = KategoriTes::where('slug', $slug)->firstOrFail();

        // Check if the status_tes is 0, redirect with an alert
        if ($kategori_tes->status_tes == 0) {
            Alert::error('Maaf', 'Tes ini belum tersedia.');
            return redirect()->route('student.tes.index');
        }

        // Check if the user has already submitted the exam
        $userHasSubmitted = HasilTesSiswa::where('user_id', auth()->id())
            ->where('kategori_tes_id', $kategori_tes->id)
            ->exists();

        // Redirect to the index page with an alert if the user has already submitted
        if ($userHasSubmitted) {
            Alert::error('Maaf', 'Kamu telah mengikuti tes ini.');
            return redirect()->route('student.tes.index');
        }

        // Check if the student has validated the passcode
        if (!$request->session()->has('passcode_validated')) {
            // Redirect to the confirmation page if the passcode hasn't been validated
            return redirect()->route('student.tes.confirm', $slug);
        }

        $soal_tes = SoalTes::where('kategori_tes_id', $kategori_tes->id)->get();

        return view('student.tes.slug', [
            'title' => "Tes - $kategori_tes->kategori_tes",
            'kategori_tes' => $kategori_tes,
            'soal_tes' => $soal_tes,
        ]);
    }

}
