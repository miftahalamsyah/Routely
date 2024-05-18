<?php

namespace App\Http\Controllers;

use App\Models\HasilTesSiswa;
use App\Models\Kelompok;
use App\Models\Nilai;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class KelompokController extends Controller
{
    public function index(): View
    {
        $kelompoks = Kelompok::orderBy('no_kelompok')->get();

        // Ambil data nilai siswa dari model (sesuaikan dengan model Anda)
        $data = HasilTesSiswa::with('user')
        ->where('kategori_tes_id', 1)
        ->orderBy('total') // Urutkan dari yang terbesar ke yang terkecil
        ->get(['total', 'user_id']);

        // Bagi menjadi dua grup atau kluster 50% terbesar dan 50% terkecil
        $halfIndex = ceil($data->count() / 2);
        $clusters = [
            'cluster_1' => $data->slice(0, $halfIndex),
            'cluster_2' => $data->slice($halfIndex)
        ];

        return view('dashboard.kelompok.index',
        [
            "title" => "Kelompok",
        ],compact('kelompoks', 'clusters'));
    }


    public function create()
    {
        $siswaUsers = User::where('is_admin', 0)
            ->whereNotIn('id', function ($query) {
                $query->select('user_id')
                    ->from('kelompoks');
            })
            ->get();

        $kelompoks = Kelompok::orderBy('no_kelompok')->get();

        // Ambil data nilai siswa dari model (sesuaikan dengan model Anda)
        $data = HasilTesSiswa::with('user')
        ->where('kategori_tes_id', 1)
        ->orderBy('total') // Urutkan dari yang terbesar ke yang terkecil
        ->get(['total', 'user_id']);

        // Bagi menjadi dua grup atau kluster 50% terbesar dan 50% terkecil
        $halfIndex = ceil($data->count() / 2);
        $clusters = [
            'cluster_1' => $data->slice(0, $halfIndex),
            'cluster_2' => $data->slice($halfIndex)
        ];

        return view('dashboard.kelompok.create', [
            'title' => 'Tambah Kelompok',
            'siswaUsers' => $siswaUsers,
        ],compact('kelompoks', 'clusters'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'user_id' => 'required|array',
            'user_id.*' => 'exists:users,id',
            'no_kelompok' => 'required',
            'name' => 'nullable',
            'description' => 'nullable',
        ]);

        foreach ($request->input('user_id') as $userId) {
            Kelompok::create([
                'user_id' => $userId,
                'no_kelompok' => $request->input('no_kelompok'),
                'name' => $request->input('name'),
                'description' => $request->input('description'),
            ]);
        }

        return redirect()->route('kelompok.index')->with('status', 'Kelompok(s) created successfully!');
    }


    public function edit(string $id): View
    {
        $kelompok = Kelompok::findOrFail($id);
        $siswaUsers = User::where('is_admin', 0)->get();

        return view('dashboard.kelompok.edit', [
            'title' => 'Edit Kelompok',
            'kelompok' => $kelompok,
            'siswaUsers' => $siswaUsers,
        ]);
    }

    public function update(Request $request, $id): RedirectResponse
    {
        $this->validate($request, [
            'user_id' => 'required|exists:users,id',
            'no_kelompok' => 'required',
            'name' => 'nullable',
            'description' => 'nullable',
        ]);

        Kelompok::where('id', $id)
            ->update([
                'user_id' => $request->input('user_id'),
                'no_kelompok' => $request->input('no_kelompok'),
                'name' => $request->input('name'),
                'description' => $request->input('description'),
            ]);

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
