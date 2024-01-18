<?php

namespace App\Http\Controllers;

use App\Models\HasilTesSiswa;
use App\Models\SoalTes;
use Illuminate\Http\Request;

class HasilTesSiswaController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'jawaban' => 'required|array',
            'jawaban.*' => 'in:a,b,c,d,e',
            'kategori_tes_id' => 'required|exists:kategori_tes,id',
        ]);

        // Process the answers
        $jawaban = implode('', $request->input('jawaban'));

        // Calculate benar, salah, kosong based on kunci_jawaban
        $benar = 0;
        $salah = 0;
        $kosong = 0;
        $dekomposisi = 0;
        $abstraksi = 0;
        $pengenalan_pola = 0;
        $algoritma = 0;

        $soal_tes = SoalTes::where('kategori_tes_id', $request->kategori_tes_id)->get();

        foreach ($soal_tes as $index => $soal) {
            $kunci_jawaban = $soal->kunci_jawaban;
            $jawaban_user = $request->input('jawaban.' . $index);

            if ($jawaban_user === null) {
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
        $dekomposisiPercentage = ($dekomposisi / max(1, $benar + $salah)) * 100;
        $abstraksiPercentage = ($abstraksi / max(1, $benar + $salah)) * 100;
        $pengenalanPolaPercentage = ($pengenalan_pola / max(1, $benar + $salah)) * 100;
        $algoritmaPercentage = ($algoritma / max(1, $benar + $salah)) * 100;

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

        return redirect()->route('student.tes.index')->with('success', 'Hasil tes berhasil disimpan.');
    }


}
