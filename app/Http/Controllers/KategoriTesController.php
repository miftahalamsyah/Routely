<?php

namespace App\Http\Controllers;

use App\Models\HasilTesSiswa;
use App\Models\KategoriTes;
use App\Models\SoalTes;
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
        $this->validate($request,[
            'kategori_tes' => 'required',
            'waktu_tes' => 'required|string',
            'status_tes' => 'required',
        ]);

        $slug = Str::slug($request->kategori_tes);
        $passcode = mt_rand(100000, 999999);

        KategoriTes::create([
            'kategori_tes' => $request->input('kategori_tes'),
            'waktu_tes' => $request->input('waktu_tes'),
            'status_tes' => $request->input('status_tes'),
            'slug' => $slug,
            'passcode' => $passcode,
        ]);

        return redirect()->route('kategori-tes.index')->with('status', 'Kategori Tes created successfully!');
    }

    /**
     * edit
     *
     * @param  mixed $id
     * @return void
     */
    public function edit($id)
    {
        $kategoriTes = KategoriTes::findOrFail($id);

        return view('dashboard.kategori-tes.edit',
        [
            "title" => "Edit Kategori Tes",
            'kategoriTes' => $kategoriTes,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'kategori_tes' => 'required',
            'waktu_tes' => 'required',
            'status_tes' => 'required'
        ]);

        $passcode = mt_rand(100000, 999999);
        $slug = Str::slug($request->kategori_tes);

        KategoriTes::where('id', $id)->update([
            'slug' => $slug,
            'kategori_tes' => $request->input('kategori_tes'),
            'waktu_tes' => $request->input('waktu_tes'),
            'status_tes' => $request->input('status_tes'),
            'passcode' => $passcode,
        ]);

        return redirect()->route('kategori-tes.index')->with('status', 'Kategori Tes updated successfully!');
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


    public function show($id)
    {
        $kategoriTes = KategoriTes::findOrFail($id);
        $soalTes = SoalTes::where('kategori_tes_id', $id)->get();
        $soalTesCount = $soalTes->count();
        $hasilTes = HasilTesSiswa::where('kategori_tes_id', $id)->get();

        return view('dashboard.kategori-tes.show', [
            "title" => "Kategori Tes",
            'hasilTes' => $hasilTes,
            'kategoriTes' => $kategoriTes,
            'soalTes' => $soalTes,
            'soalTesCount' => $soalTesCount,
        ]);
    }

}
