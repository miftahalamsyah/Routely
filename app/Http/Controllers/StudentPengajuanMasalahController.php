<?php

namespace App\Http\Controllers;

use App\Models\Kelompok;
use App\Models\Pertemuan;
use App\Models\PengajuanMasalah;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class StudentPengajuanMasalahController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $pertemuans = Pertemuan::all();
        $pengajuanMasalah = PengajuanMasalah::all()->sortByDesc('created_at')->sortBy('kelompok')->sortByDesc('pertemuan_id');

        $pengajuanMasalahUser = $user->pengajuanMasalahUser;

        $noKelompok = Kelompok::where('user_id', $user->id)->value('no_kelompok');

        return view('student.pengajuan-masalah.index', [
            'title' => '4. Pengajuan Masalah',
            'user' => $user,
            'noKelompok' => $noKelompok,
            'pertemuans' => $pertemuans,
            'pengajuanMasalah' => $pengajuanMasalah,
        ], compact('pengajuanMasalahUser'));
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'pertemuan_id' => 'required',
            'soal' => 'required|mimes:pkt,json|max:10240',
            'kelompok' => 'required',
            'keterangan' => 'nullable'
        ]);

        $noKelompok = Kelompok::where('user_id', auth()->user()->id)->value('no_kelompok');
        $pertemuan_id = $request->pertemuan_id;

        $soalFileName = null;
        if ($request->hasFile('soal')) {
            $timestamp = substr(time(), -4); // Extract the last 4 digits of the current timestamp
            $soalFileName = "Soal PM_Pertemuan {$pertemuan_id}_Kelompok {$noKelompok}_{$timestamp}." . $request->soal->extension();
            $request->soal->storeAs('public/pengajuan-masalah', $soalFileName);
        }

        PengajuanMasalah::create([
            'pertemuan_id' => $request->pertemuan_id,
            'user_id' => auth()->user()->id,
            'soal' => $soalFileName,
            'kelompok' => $request->kelompok,
            'keterangan' => $request->keterangan,
        ]);

        Alert::success('Success', 'Pengajuan masalah telah dikirim.');
        return redirect()->route('student.pengajuan-masalah');
    }

    public function destroy($id)
    {
        $pengajuanMasalah = PengajuanMasalah::findOrFail($id);

        // Check if the authenticated user owns this record
        if ($pengajuanMasalah->user_id == auth()->user()->id) {
            $pengajuanMasalah->delete();
            Alert::success('Success', 'Pengajuan masalah telah dihapus.');
        } else {
            Alert::error('Error', 'Anda tidak memiliki izin untuk menghapus pengajuan masalah ini.');
        }

        return redirect()->route('student.pengajuan-masalah');
    }

}
