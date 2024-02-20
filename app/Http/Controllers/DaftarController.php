<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class DaftarController extends Controller
{
    public function index()
    {
        return view('pages.daftar',[
            'title' => 'Daftar'
        ]);
    }

    public function store(Request $request)
    {
        // Validation rules
        $rules = [
            'name' => 'required|max:255',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:8|max:255',
            'password_confirmation' => 'required|same:password',
        ];

        // Custom error messages
        $messages = [
            'password_confirmation.same' => 'The password confirmation does not match.',
        ];

        // Validate the request
        $validatedData = $request->validate($rules, $messages);

        // Hash the password
        $password = Hash::make($validatedData['password']);

        // Generate a UUID for the 'slug' column
        $slug = (string) Str::uuid();

        // Create the user with the validated data and manually set the 'slug'
        User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => $password,
            'slug' => $slug, // Assign the generated slug
        ]);

        Alert::success('Success', 'Registrasi Berhasil. Silahkan Masuk')->persistent(true);
        return redirect('/login')->with('success', 'Registrasi Berhasil, Silahkan Masuk');
    }
}
