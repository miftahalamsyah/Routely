<?php

namespace App\Http\Controllers;

use App\Models\HasilKuisSiswa;
use App\Models\HasilTugasSiswa;
use App\Models\Kelompok;
use App\Models\Lencana;
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

    public function leaderboard()
    {
        $lencanas = Lencana::all();
        $profile = Auth::user();
        $users = User::where('is_admin', 0)
            ->orderBy('updated_at', 'asc')
            ->get();

        $totalNilaiTugas = NilaiTugas::groupBy('user_id')
            ->selectRaw('user_id, sum(nilai_tugas) as total_nilaiTugas')
            ->get()
            ->sortByDesc('total_nilaiTugas');

        $totalNilaiPretestPosttest = Nilai::groupBy('user_id')
            ->selectRaw('user_id, sum(total_nilai) as total_nilaiPretestPosttest')
            ->get();

        $totalNilaiKuis = HasilKuisSiswa::groupBy('user_id')
            ->selectRaw('user_id, sum(total) as total_nilaiKuis')
            ->get()
            ->sortByDesc('total_nilaiKuis');

        // Combine the totals for each user
        $totalScore = [];

        // Create an array to store the user IDs
        $userIds = [];

        // Collect user IDs from each dataset
        $userIds = array_merge(
            $totalNilaiTugas->pluck('user_id')->toArray(),
            $totalNilaiPretestPosttest->pluck('user_id')->toArray(),
            $totalNilaiKuis->pluck('user_id')->toArray()
        );

        // Remove duplicate user IDs
        $userIds = array_unique($userIds);

        // Iterate over all user IDs
        foreach ($userIds as $userId) {
            // Get the values from each dataset, set to 0 if null
            $nilaiTugas = $totalNilaiTugas->where('user_id', $userId)->first()->total_nilaiTugas ?? 0;
            $nilaiPretestPosttest = $totalNilaiPretestPosttest->where('user_id', $userId)->first()->total_nilaiPretestPosttest ?? 0;
            $nilaiKuis = $totalNilaiKuis->where('user_id', $userId)->first()->total ?? 0;

            // Calculate total score for the user
            $totalScore[$userId] = $nilaiTugas + $nilaiPretestPosttest + $nilaiKuis;
        }

        // Sort the total score
        arsort($totalScore);

        return view('student.leaderboard',[
            "title" => "Routely League Leaderboard",
            "lencanas" => $lencanas,
        ], compact('users', 'totalNilaiTugas', 'totalNilaiPretestPosttest', 'totalNilaiKuis', 'totalScore'));
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
