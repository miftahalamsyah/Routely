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

        Alert::error('Error', 'Data yang dimasukan tidak benar.')->persistent(true);
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
            'password' => 'required|min:8',
        ]);

        // Retrieve the user by email
        $user = User::where('email', $request->email)->first();

        if (!$user) {
            Alert::error('Error', 'Tidak ada user dengan email tersebut.')->persistent(true);
            return back()->withErrors(['email' => 'Tidak ada user dengan email tersebut.']);
        }

        // Retrieve the user's security questions and answers
        $userPertanyaanPemulihan = $user->jawabanPertanyaanPemulihan;

        // Check if the user has provided security questions
        if ($userPertanyaanPemulihan->isEmpty()) {
            Alert::error('Error', 'Pengguna belum mengatur pertanyaan pemulihan.')->persistent(true);
            return back()->withErrors(['pertanyaan_pemulihan_id' => 'Pengguna belum mengatur pertanyaan pemulihan.']);
        }

        // Check if the provided security question ID is valid
        $userPertanyaanPemulihanIds = $user->jawabanPertanyaanPemulihan->pluck('pertanyaan_pemulihan_id');

        if (!$userPertanyaanPemulihanIds->contains($request->pertanyaan_pemulihan_id)) {
            Alert::error('Error', 'Data yang input tidak benar.')->persistent(true);
            return back()->withErrors(['pertanyaan_pemulihan_id' => 'Data yang input tidak benar.']);
        }

        // Check if the provided answer matches
        $matchingAnswer = $userPertanyaanPemulihan
            ->where('pertanyaan_pemulihan_id', $request->pertanyaan_pemulihan_id)
            ->where('jawaban', $request->jawaban)
            ->first();

        if (!$matchingAnswer) {
            Alert::error('Error', 'Data yang input tidak benar.')->persistent(true);
            return back()->withErrors(['jawaban' => 'Data yang input tidak benar.']);
        }

        // Update the user's password
        $user->update([
            'password' => bcrypt($request->password),
        ]);

        Alert::success('Success', 'Password berhasil diperbaharui.')->persistent(true);
        return redirect()->route('login');
    }
}
