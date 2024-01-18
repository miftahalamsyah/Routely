<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Nilai;
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
        $nilais = Nilai::whereHas('user', function ($query) {
            $query->where('is_admin', 0);
        })->get();

        return view('student.profile.index', [
            "title" => "Profil",
            "name" => $profile->name,
            "slug" => $profile->slug,
            "email" => $profile->email,
            "lencanas" => $lencanas,
            "nilais" => $nilais,
        ], compact('users'));

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
