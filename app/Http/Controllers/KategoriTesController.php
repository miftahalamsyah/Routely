<?php

namespace App\Http\Controllers;

use App\Models\KategoriTes;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Str;

class KategoriTesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $kategoriTests = KategoriTes::all();

        return view('dashboard.kategori-tes.index',
        [
            "title" => "Kategori Tes",
        ],compact('kategoriTests'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.kategori-tes.create',
        [
            "title" => "Tambah Kategori Tes",
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'kategori_tes' => 'required',
            'waktu_tes' => 'required|string',
        ]);

        $status_tes = $request->has('status_tess');
        $slug = Str::slug($request->kategori_tes);
        $passcode = Str::random(6);

        $kategoriTest = KategoriTes::create([
            'kategori_tes' => $request->input('kategori_tes'),
            'waktu_tes' => $request->input('waktu_tes'),
            'status_tes' => $status_tes,
            'slug' => $slug,
            'passcode' => $passcode,
        ]);

        return redirect()->route('kategori-tes.index')->with('status', 'Kategori Tes created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(KategoriTes $kategoriTes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(KategoriTes $kategoriTes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, KategoriTes $kategoriTes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id): RedirectResponse
    {
        $kategoriTes = KategoriTes::findOrFail($id);
        $kategoriTes->delete();

        return redirect()->route('kategori-tes.index')
            ->with('success', 'Kategori Tes deleted successfully.');
    }
}
