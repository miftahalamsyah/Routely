<?php

namespace App\Http\Controllers;

use App\Models\Absensi;
use App\Models\Pertemuan;
use App\Models\User;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use Illuminate\View\View;

class AbsensiController extends Controller
{
    public function index(): View
    {
        // Retrieve distinct pertemuan_id values
        $pertemuanIds = Absensi::distinct()->pluck('pertemuan_id');

        // Fetch the related pertemuan records
        $pertemuans = Pertemuan::whereIn('id', $pertemuanIds)->get();

        $absensis = Absensi::all();

        return view('dashboard.absensi.index', [
            "title" => "Absensi",
        ], compact('pertemuans', 'absensis'));
    }

    public function create(): View
    {
        $pertemuans = Pertemuan::all();
        $users = User::where('is_admin', 0)->get();
        return view('dashboard.absensi.create',
        [
            "title" => "Catat Absensi",
        ], compact('pertemuans', 'users'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'pertemuan_id' => 'required|exists:pertemuans,id',
            'users' => 'required|array',
            'users.*.hadir' => 'nullable|boolean',
            'users.*.keterangan' => 'nullable|string',
        ]);

        foreach ($request->users as $user_id => $data) {
            $absensi = Absensi::create([
                'pertemuan_id' => $request->pertemuan_id,
                'user_id' => $user_id,
                'hadir' => isset($data['hadir']) ? 1 : 0,
                'keterangan' => $data['keterangan'] ?? null,
            ]);
        }

        return redirect()->route('absensi.index')->with('success', 'Absensi berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $pertemuans = Pertemuan::all();
        $users = User::where('is_admin', 0)->get();
        $absensi = Absensi::findOrFail($id);
        return view('dashboard.absensi.edit',
        [
            "title" => "Ubah Absensi",
        ], compact('pertemuans', 'users', 'absensi'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'pertemuan_id' => 'required|exists:pertemuans,id',
        ]);

        $pertemuan = Pertemuan::findOrFail($request->pertemuan_id);
        $users = User::where('is_admin', 0)->get();

        foreach ($users as $user) {
            $hadir = $request->has('hadir.' . $user->id);

            Absensi::where('id', $id)->update([
                'user_id' => $user->id,
                'pertemuan_id' => $pertemuan->id,
                'hadir' => $hadir,
            ]);
        }

        return redirect()->route('absensi.index')->with('success', 'Absensi berhasil diubah.');
    }

    public function destroy(Request $request): RedirectResponse
    {
        $request->validate([
            'pertemuan_id' => 'required|exists:pertemuans,id',
        ]);

        $pertemuanId = $request->pertemuan_id;

        // Delete Absensi records with the specified pertemuan_id
        Absensi::where('pertemuan_id', $pertemuanId)->delete();

        return redirect()->route('absensi.index')->with('success', 'Absensi berhasil dihapus.');
    }
}
