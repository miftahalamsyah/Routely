<?php

namespace App\Http\Controllers;

use App\Models\JawabanPertanyaanPemulihan;
use App\Models\PertanyaanPemulihan;
use App\Models\User;
use AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class LoginController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            return redirect('/student');
        } else {
            return view('pages.masuk',[
                'title'=>"Login"
            ]);
        }
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // Add the 'remember' key to the $credentials array
        // $credentials['remember'] = $request->filled('remember');

        if (Auth::attempt($credentials, $request->filled('remember'))) {
            $request->session()->regenerate();

            if (auth()->user()->is_admin) {
                return redirect()->intended('/dashboard');
            } else {
                return redirect()->intended('/student');
            }
        }

        return back()->with('loginError', 'Gagal untuk Masuk');
    }

    public function logout()
    {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/login');
    }

    public function lupaSandi()
    {
        $pertanyaanPemulihan = PertanyaanPemulihan::all();

        return view('pages.lupa-sandi',[
            'title'=>"Lupa Sandi"
        ], compact('pertanyaanPemulihan'));
    }

    public function lupaSandiStore(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'pertanyaan_pemulihan_id' => 'required',
            'jawaban' => 'required',
            'password' => 'required|min:8|confirmed',
        ]);

        // Retrieve the user by email
        $user = User::where('email', $request->email)->first();

        if ($user) {
            // Check if the user has the provided security question
            $pertanyaan = JawabanPertanyaanPemulihan::find($request->pertanyaan_pemulihan_id);

            if ($user->pertanyaanPemulihan->contains($pertanyaan)) {
                // Check if the provided answer matches
                if ($user->jawabanPertanyaanPemulihan->where('pertanyaan_pemulihan_id', $pertanyaan->id)->pluck('jawaban')->first() == $request->jawaban) {
                    // Update the user's password
                    $user->update([
                        'password' => bcrypt($request->password),
                    ]);

                    return redirect()->route('login')->with('success', 'Password has been reset successfully.');
                } else {
                    return back()->withErrors(['jawaban' => 'The answer to the security question is incorrect.']);
                }
            } else {
                return back()->withErrors(['pertanyaan_pemulihan_id' => 'Invalid security question selected.']);
            }
        } else {
            return back()->withErrors(['email' => 'No user found with this email address.']);
        }
    }
}
