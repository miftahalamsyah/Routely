<?php

namespace App\Http\Controllers;

use App\Models\HasilKuisSiswa;
use App\Models\HasilTesSiswa;
use App\Models\HasilTugasSiswa;
use App\Models\Pertemuan;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class StudentPertemuanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userHasPretest = HasilTesSiswa::where('user_id', auth()->id())
            ->where('kategori_tes_id', 1)
            ->exists();

        if (!$userHasPretest) {
            Alert::error('Maaf', 'Anda harus mengerjakan Pretest terlebih dahulu.');
            return redirect()->back();
        }

        $pertemuans = Pertemuan::all();

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
        $user = auth()->user();
        $pertemuan_id = $pertemuan->pertemuan_ke;
        $pengajuanMasalah = $pertemuan_id;

        $userHasPretest = HasilTesSiswa::where('user_id', auth()->id())
            ->where('kategori_tes_id', 1)
            ->exists();

        if (!$userHasPretest) {
            Alert::error('Maaf', 'Anda harus mengerjakan Pretest terlebih dahulu.');
            return redirect()->back();
        }

        // Check if the user has already submitted the exam
        $userHasSubmitted = HasilKuisSiswa::where('user_id', auth()->id())
            ->where('pertemuan_id', $pertemuan_id)
            ->exists();

        $nilaiKuis = HasilKuisSiswa::where('user_id', $user->id)
            ->where('pertemuan_id', $pertemuan_id)
            ->value('total');

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
                "tugas_file" => $tugas->tugas_file,
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
            "nilaiKuis" => $nilaiKuis,
            "userHasSubmitted" => $userHasSubmitted,
            "pengajuanMasalah" => $pengajuanMasalah,
        ]);
    }

}

