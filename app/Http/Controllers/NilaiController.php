<?php

namespace App\Http\Controllers;

use App\Models\Nilai;
use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\Request;

class NilaiController extends Controller
{
    public function index(): View
    {
        $nilais = Nilai::whereHas('user', function ($query) {
            $query->where('is_admin', 0);
        })->get();

        return view('dashboard.nilai.index',
        [
            "title" => "Nilai",
        ],compact('nilais'));
    }

    public function create()
    {
        $users = User::where('is_admin', 0)->get();

        return view('dashboard.nilai.create', [
            'title' => 'Tambah Nilai',
            'users' => $users,
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'pretest' => 'nullable|numeric|min:0|max:100',
            'posttest' => 'nullable|numeric|min:0|max:100',
        ]);

        Nilai::create([
            'user_id' => $request->user_id,
            'pretest' => $request->pretest,
            'posttest' => $request->posttest,
        ]);

        return redirect()->route('nilai.index')->with('status', 'Nilai created successfully!');
    }

    public function edit($id)
    {
        $nilai = Nilai::findOrFail($id);
        $users = User::where('is_admin', 0)->get();

        return view('dashboard.nilai.edit', [
            'title' => 'Edit Nilai',
            'nilai' => $nilai,
            'users' => $users,
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'pretest' => 'nullable|numeric|min:0|max:100',
            'posttest' => 'nullable|numeric|min:0|max:100',
        ]);

        $nilai = Nilai::findOrFail($id);

        $nilai->update([
            'user_id' => $request->user_id,
            'pretest' => $request->pretest,
            'posttest' => $request->posttest,
        ]);

        return redirect()->route('nilai.index')->with('status', 'Nilai updated successfully!');
    }

}
