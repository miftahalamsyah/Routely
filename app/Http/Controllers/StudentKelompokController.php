<?php

namespace App\Http\Controllers;

use App\Models\Kelompok;
use App\Models\User;
use Illuminate\Http\Request;

class StudentKelompokController extends Controller
{
    public function index()
    {

        $kelompoks = Kelompok::orderBy('no_kelompok')->get();

        // Show auth user kelompok
        $kelompokBelajar = Kelompok::where('user_id', auth()->user()->id)->first();

        // Get all user IDs with the same no_kelompok as the authenticated user
        $userIdsInSameKelompok = [];

        if ($kelompokBelajar) {
            $userIdsInSameKelompok = Kelompok::where('no_kelompok', $kelompokBelajar->no_kelompok)
                ->pluck('user_id');
        }

        // Fetch user data based on the retrieved user IDs
        $usersInSameKelompok = User::whereIn('id', $userIdsInSameKelompok)->get();

        return view('student.kelompok', [
            'title' => 'Kelompok',
            'active' => 'kelompok',
            'kelompokBelajar' => $kelompokBelajar,
            'usersInSameKelompok' => $usersInSameKelompok,
            'kelompoks' => $kelompoks,
        ]);
    }

}
