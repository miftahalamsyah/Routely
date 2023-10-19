<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class ProfileController extends Controller
{
    /**
     * Show the user's profile page.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(): View
    {
        $profile = Auth::user();
        $users = User::where('is_admin', 0)
                    ->orderBy('updated_at', 'asc')
                    ->get();

        return view('student.profile.index', [
            "title" => "Profil",
            "name" => $profile->name,
            "slug" => $profile->slug,
            "email" => $profile->email,
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
            $user->password = Hash::make($request->password);
        }

        if ($user->save()) {
            return redirect()->back()->with('status', 'Profil berhasil diperbaharui.');
        } else {
            return redirect()->back()->with('error', 'Profile gagal diperbaharui. Konfirmasi password tidak sesuai.');
        }
    }


    public function leaderboard()
    {
        $users = User::where('is_admin', 0)
                    ->orderBy('name')
                    ->paginate(10);

        return view('includes.leaderboard', [
            "title" => "Leaderboard",
        ], compact('users'));
    }
}
