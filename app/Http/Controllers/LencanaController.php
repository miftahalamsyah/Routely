<?php

namespace App\Http\Controllers;

use App\Models\Lencana;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class LencanaController extends Controller
{
    public function index(): View
    {
        $lencanas = Lencana::all();
        return view('dashboard.lencana.index',
        [
            "title" => "Lencana",
        ],compact('lencanas'));
    }

    public function create()
    {
        return view('dashboard.lencana.create',
        [
            "title" => "Tambah Lencana",
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_lencana' => 'required|min:5',
            'gambar_lencana' => 'nullable|image|max:2048'
        ]);

        if ($request->hasFile('gambar_lencana')) {
            $lencanaName = time() . '.' . $request->gambar_lencana->extension();
            $request->gambar_lencana->storeAs('public/lencana', $lencanaName);
        } else {
            $lencanaName = null; // Set it to null or any default value as needed.
        }

        Lencana::create([
            'nama_lencana' => $request->nama_lencana,
            'gambar_lencana' => $lencanaName,
        ]);

        return redirect()->route('lencana.index')->with('status', 'Lencana created successfully!');
    }

    public function destroy($id): RedirectResponse
    {
        $lencana = Lencana::findOrFail($id);

        $lencana->delete();

        //redirect to index
        return redirect()->route('lencana.index')->with(['success' => 'Lencana Berhasil Dihapus!']);
    }
}
