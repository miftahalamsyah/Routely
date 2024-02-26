<?php

namespace App\Http\Controllers;

use App\Models\HasilKuisSiswa;
use App\Models\Pertemuan;
use App\Models\SoalKuis;
use App\Models\SoalTes;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class StudentKuisController extends Controller
{
    public function create($pertemuan_id)
    {
        // Check if the user has already submitted the exam
        $userHasSubmitted = HasilKuisSiswa::where('user_id', auth()->id())
            ->where('pertemuan_id', $pertemuan_id)
            ->exists();

        // Redirect to the index page with an alert if the user has already submitted
        if ($userHasSubmitted) {
            Alert::error('Maaf', 'Kamu telah mengikuti kuis ini.');
            return redirect('/student/pertemuan/pertemuan-ke-' . $pertemuan_id);
        }

        // Check if there are SoalKuis records for the given pertemuan_id
        $soalKuisExist = SoalKuis::where('pertemuan_id', $pertemuan_id)->exists();

        // Redirect back with an error alert if there are no SoalKuis records
        if (!$soalKuisExist) {
            Alert::error('Maaf', 'Kuis ini belum tersedia.');
            return redirect()->back();
        }

        $pertemuan = $pertemuan_id;
        $user = auth()->user();

        $soal_kuis = SoalKuis::where('pertemuan_id', $pertemuan_id)->get();

        return view('student.kuis.index', [
            "title" => "6. Verifikasi - Kuis",
            "user" => $user,
        ], compact('pertemuan', 'soal_kuis', 'pertemuan'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'jawaban' => 'required|array',
            'jawaban.*' => 'in:a,b,c,d,e',
            'pertemuan_id' => 'required|exists:pertemuans,id',
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

        $soal_tes = SoalKuis::where('pertemuan_id', $request->pertemuan_id)->get();

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
        HasilKuisSiswa::create([
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
            'pertemuan_id' => $request->pertemuan_id,
        ]);

        Alert::success('Success', 'Anda telah menyelesaikan Kuis.');
        return redirect('/student/pertemuan/pertemuan-ke-' . $request->pertemuan_id);
    }

    public function show($pertemuan_id){
        $answers = HasilKuisSiswa::where('user_id', auth()->id())
            ->where('pertemuan_id', $pertemuan_id)
            ->first();

        // Retrieve correct answers for the pertemuan_id
        $correctAnswers = SoalKuis::where('pertemuan_id', $pertemuan_id)
            ->pluck('kunci_jawaban', 'id')
            ->toArray();

        // Check if the user has already submitted the exam
        $userHasSubmitted = HasilKuisSiswa::where('user_id', auth()->id())
            ->where('pertemuan_id', $pertemuan_id)
            ->exists();

        // Redirect to the index page with an alert if the user has already submitted
        if (!$userHasSubmitted) {
            Alert::error('Maaf', 'Kamu belum mengikuti kuis ini.');
            return redirect('/student/pertemuan/pertemuan-ke-' . $pertemuan_id);
        }

        // Check if there are SoalKuis records for the given pertemuan_id
        $soalKuisExist = SoalKuis::where('pertemuan_id', $pertemuan_id)->exists();

        // Redirect back with an error alert if there are no SoalKuis records
        if (!$soalKuisExist) {
            Alert::error('Maaf', 'Kuis ini belum tersedia.');
            return redirect()->back();
        }

        // Set the $answersSubmitted variable based on your logic
        $answersSubmitted = true; // For example, set it to true if the form is submitted

        $pertemuan = $pertemuan_id;
        $user = auth()->user();

        $soal_kuis = SoalKuis::where('pertemuan_id', $pertemuan_id)->get();

        return view('student.kuis.review', [
            "title" => "Review Kuis Pertemuan ke-$pertemuan_id",
            "user" => $user,
            "answers" => $answers, // Pass the $answers variable to the view
            "answersSubmitted" => $answersSubmitted, // Pass the $answersSubmitted variable to the view
            "correctAnswers" => $correctAnswers,
        ], compact('pertemuan', 'soal_kuis', 'pertemuan', 'answers'));
    }

}
