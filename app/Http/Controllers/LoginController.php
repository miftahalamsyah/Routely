<?php

namespace App\Http\Controllers;

use AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
}
