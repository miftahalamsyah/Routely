<?php

namespace App\Http\Controllers;

use App\Models\HasilTesSiswa;
use App\Models\Nilai;
use App\Models\SoalTes;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class HasilTesSiswaController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'jawaban' => 'required|array',
            'jawaban.*' => 'in:a,b,c,d,e,N',
            'kategori_tes_id' => 'required|exists:kategori_tes,id',
        ]);

        // Process the answers
        $jawaban = implode('', $request->input('jawaban'));

        // Calculate benar, salah, kosong based on kunci_jawaban
        $benar = 0;
        $salah = 0;
        $kosong = 0;

        // Initialize category counters
        $dekomposisi = 0;
        $abstraksi = 0;
        $pengenalan_pola = 0;
        $algoritma = 0;

        // Initialize category question counts
        $totalDekomposisi = 0;
        $totalAbstraksi = 0;
        $totalPengenalanPola = 0;
        $totalAlgoritma = 0;

        $soal_tes = SoalTes::where('kategori_tes_id', $request->kategori_tes_id)->get();

        foreach ($soal_tes as $index => $soal) {
            $kunci_jawaban = $soal->kunci_jawaban;
            $jawaban_user = $request->input('jawaban.' . $index, 'N');

            // Increment category question counts based on the indikator
            if ($soal->indikator === 'Dekomposisi') {
                $totalDekomposisi++;
            } elseif ($soal->indikator === 'Abstraksi') {
                $totalAbstraksi++;
            } elseif ($soal->indikator === 'Pengenalan Pola') {
                $totalPengenalanPola++;
            } elseif ($soal->indikator === 'Algoritma') {
                $totalAlgoritma++;
            }

            if ($jawaban_user === 'N') {
                $kosong++;
            } elseif ($jawaban_user === $kunci_jawaban) {
                $benar++;

                // Increment category scores based on the indikator
                if ($soal->indikator === 'Dekomposisi') {
                    $dekomposisi++;
                } elseif ($soal->indikator === 'Abstraksi') {
                    $abstraksi++;
                } elseif ($soal->indikator === 'Pengenalan Pola') {
                    $pengenalan_pola++;
                } elseif ($soal->indikator === 'Algoritma') {
                    $algoritma++;
                }
            } else {
                $salah++;
            }
        }

        // Calculate percentages
        $totalQuestions = count($soal_tes);
        $totalScore = ($benar / $totalQuestions) * 100;

        // Calculate percentages for each category
        $dekomposisiPercentage = ($dekomposisi / max(1, $totalDekomposisi)) * 100;
        $abstraksiPercentage = ($abstraksi / max(1, $totalAbstraksi)) * 100;
        $pengenalanPolaPercentage = ($pengenalan_pola / max(1, $totalPengenalanPola)) * 100;
        $algoritmaPercentage = ($algoritma / max(1, $totalAlgoritma)) * 100;

        // Store the result in the database
        HasilTesSiswa::create([
            'user_id' => $request->user_id,
            'jawaban' => $jawaban,
            'dekomposisi' => $dekomposisiPercentage,
            'abstraksi' => $abstraksiPercentage,
            'pengenalan_pola' => $pengenalanPolaPercentage,
            'algoritma' => $algoritmaPercentage,
            'total' => $totalScore,
            'benar' => $benar,
            'salah' => $salah,
            'kosong' => $kosong,
            'kategori_tes_id' => $request->kategori_tes_id,
        ]);

        // Store total column data in the appropriate column in the nilai table
        if ($request->kategori_tes_id == 1) {
            // Kategori Tes with id 1 corresponds to pretest
            Nilai::updateOrCreate(
                ['user_id' => $request->user_id],
                ['pretest' => $totalScore]
            );
        } elseif ($request->kategori_tes_id == 2) {
            // Kategori Tes with id 2 corresponds to posttest
            Nilai::updateOrCreate(
                ['user_id' => $request->user_id],
                ['posttest' => $totalScore]
            );
        }

        Alert::success('Success', 'Anda telah menyelesaikan Tes.');
        return redirect()->route('student.tes.index');
    }


}
