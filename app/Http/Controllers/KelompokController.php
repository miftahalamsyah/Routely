<?php

namespace App\Http\Controllers;

use App\Models\Kelompok;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class KelompokController extends Controller
{
    public function index(): View
    {
        $kelompoks = Kelompok::orderBy('no_kelompok')->paginate(10);

        return view('dashboard.kelompok.index',
        [
            "title" => "Kelompok",
        ],compact('kelompoks'));
    }

    public function create()
    {
        $siswaUsers = User::where('is_admin', 0)->get();

        return view('dashboard.kelompok.create', [
            'title' => 'Tambah Kelompok',
            'siswaUsers' => $siswaUsers,
        ]);
    }

    public function store(Request $request)
{
    $this->validate($request, [
        'user_id' => 'required',
        'no_kelompok' => 'required',
        'name' => 'required',
        'description' => 'required',
    ]);

    $kelompok = Kelompok::create([
        'user_id' => $request->input('user_id'),
        'no_kelompok' => $request->input('no_kelompok'),
        'name' => $request->input('name'),
        'description' => $request->input('description'),
    ]);

    return redirect()->route('kelompok.index')->with('status', 'Kelompok created successfully!');
}



    public function edit(string $id): View
    {
        $kelompok = Kelompok::findOrFail($id);

        return view('dashboard.kelompok.edit', compact('kelompok'));
    }

    public function update(Request $request, $id): RedirectResponse
    {
        $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
        ]);

        $kelompok =Kelompok::create($request->all());

        return redirect()->route('kelompok.index')
            ->with('success', 'Kelompok updated successfully.');
    }

    public function destroy($id): RedirectResponse
    {
        $kelompok = Kelompok::findOrFail($id);

        $kelompok->delete();

        //redirect to index
        return redirect()->route('kelompok.index')
            ->with('success', 'Kelompok deleted successfully.');
    }

}
