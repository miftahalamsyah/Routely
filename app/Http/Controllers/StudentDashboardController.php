<?php

namespace App\Http\Controllers;

use App\Models\HasilTugasSiswa;
use App\Models\Kelompok;
use App\Models\Materi;
use App\Models\Nilai;
use App\Models\NilaiTugas;
use App\Models\Tugas;
use App\Models\Pertemuan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class StudentDashboardController extends Controller
{
    public function index()
    {
        $materiCount = Materi::count();

        if (Auth::check()) {
            $user = Auth::user();

            $nilaiPretest = round(Nilai::where('user_id', $user->id)->value('pretest'));
            $nilaiPosttest = round(Nilai::where('user_id', $user->id)->value('posttest'));

            $kelompokBelajar = Kelompok::where('user_id', auth()->user()->id)->first();
            $userIdsInSameKelompok = [];
            if ($kelompokBelajar) {
                $userIdsInSameKelompok = Kelompok::where('no_kelompok', $kelompokBelajar->no_kelompok)
                    ->pluck('user_id');
            }
            $usersInSameKelompok = User::whereIn('id', $userIdsInSameKelompok)->get();

            $user = auth()->user();
            $tugass = Tugas::latest('created_at')->get();
            $submissions = HasilTugasSiswa::where('user_id', $user->id)
                ->whereIn('tugas_id', $tugass->pluck('id'))
                ->get()
                ->keyBy('tugas_id');

            $StudentTugasCount = HasilTugasSiswa::where('user_id', $user->id)->count();
            $tugasCount = Tugas::count();

            $nilaiTugasRecords = NilaiTugas::where('user_id', $user->id)->get();

            return view('student.index', [
                'title' => 'Student Dashboard',
                'pertemuans' => Pertemuan::all(),
                'tugass' => $tugass,
                'materis' => Materi::all(),
                'nilaiPretest' => $nilaiPretest,
                'nilaiPosttest' => $nilaiPosttest,
                'kelompokBelajar' => $kelompokBelajar,
                'usersInSameKelompok' => $usersInSameKelompok,
                "submissions" => $submissions,
                'nilaiTugasRecords' => $nilaiTugasRecords,
                'tugasCount' => $tugasCount,
                'StudentTugasCount' => $StudentTugasCount,
            ]);
        } else {
            return view('pages.login', [
                'title' => 'Login',
            ]);
        }
    }

    public function profile()
    {
        $user = Materi::latest()->paginate(3);

        if (Auth::check()) {
            return view('student.profile', [
                'title' => "Student Profile",
                'user' => $user,
        ]);
        } else {
            return view('pages.login'); // Show the login page if not authenticated
        }
    }

    public function problemPosing()
    {
        return view('student.model.problem-posing', [
            'title' => 'Problem Posing',

        ]);
    }

    public function berpikirKomputasi()
    {
        return view('student.model.berpikir-komputasi', [
            'title' => 'Berpikir Komputasi',

        ]);
    }
}
