<?php

namespace App\Http\Controllers;

use App\Models\HasilKuisSiswa;
use App\Models\User;
use App\Models\Nilai;
use App\Models\NilaiTugas;
use App\Models\Lencana;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use RealRashid\SweetAlert\Facades\Alert;

class ProfileController extends Controller
{
    /**
     * Show the user's profile page.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(): View
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

        return view('student.profile.index', [
            "title" => "Profil",
            "name" => $profile->name,
            "slug" => $profile->slug,
            "email" => $profile->email,
            "lencanas" => $lencanas,
        ], compact('users', 'totalNilaiTugas', 'totalNilaiPretestPosttest', 'totalNilaiKuis', 'totalScore'));

    }

    /**
     * Update the user's profile information.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request): RedirectResponse
    {
        $user = Auth::user();

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique('users')->ignore($user->id),
            ],
            'password' => 'nullable|string|min:8',
            'password_confirmation' => 'nullable|string|min:8|same:password',
        ]);

        $user->name = $request->name;
        $user->email = $request->email;

        if ($request->password) {
            $user->password = bcrypt($request->password);
        }

        if ($user instanceof User && $user->save()) {
            Alert::success('Success', 'Profil berhasil diperbaharui.');
            return redirect()->back();
        } else {
            Alert::error('Error', 'Profile gagal diperbaharui. Terjadi kesalahan.');
            return redirect()->back();
        }
    }
}
