<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Lencana;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfilPublikController extends Controller
{
    public function index (string $id): View
    {
        $users = User::where('is_admin', 0)
        ->orderBy('name')
        ->paginate(10);

        return view('dashboard.siswa.index',
        [
        "title" => "Siswa",
        ], compact('users'));
    }

    public function show (User $user)
    {
        $lencanas = Lencana::all();

        return view('pages.profil_publik', [
            "title" => "$user->name",
            "name" => "$user->name",
            "slug" => "$user->slug",
            "email" => "$user->email",
            "is_admin" => "$user->is_admin",
            "lencanas" => $lencanas,
        ]);
    }
}
