<?php

namespace App\Http\Controllers;

use App\Models\Kelompok;
use App\Models\Pertemuan;
use App\Models\PengajuanMasalah;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class StudentPengajuanMasalahController extends Controller
{
    public function index($pertemuan_id)
    {
        $user = auth()->user();
        $pertemuans = Pertemuan::all();

        $pengajuanMasalahPertemuan = PengajuanMasalah::where('pertemuan_id', $pertemuan_id)
            ->orderBy('kelompok')
            ->orderByDesc('created_at')
            ->orderByDesc('pertemuan_id')
            ->get();

        $pengajuanMasalahUser = $user->pengajuanMasalahUser;
        $noKelompok = Kelompok::where('user_id', $user->id)->value('no_kelompok');

        // Check if the user has already submitted a pengajuan_masalah for the given pertemuan_id
        $alreadySubmitted = $pengajuanMasalahUser->contains('pertemuan_id', $pertemuan_id);

        return view('student.pengajuan-masalah.index', [
            'title' => '4. Pengajuan Masalah',
            'user' => $user,
            'noKelompok' => $noKelompok,
            'pertemuans' => $pertemuans,
            'pengajuanMasalahPertemuan' => $pengajuanMasalahPertemuan,
            'pengajuanMasalahUser' => $pengajuanMasalahUser,
            'alreadySubmitted' => $alreadySubmitted,
        ]);
    }


    public function store(Request $request)
    {
        $this->validate($request,[
            'pertemuan_id' => 'required',
            'soal' => 'required|mimetypes:application/octet-stream,application/json|max:10240',
            'kelompok' => 'required',
            'keterangan' => 'nullable'
        ]);

        $noKelompok = Kelompok::where('user_id', auth()->user()->id)->value('no_kelompok');
        $pertemuan_id = $request->pertemuan_id;

        $soalFileName = null;
        if ($request->hasFile('soal')) {
            $file = $request->file('soal');
            $timestamp = substr(time(), -4); // Extract the last 4 digits of the current timestamp

            $originalExtension = $file->getClientOriginalExtension();
            // Change extension to .pkt if it's .bin
            if ($originalExtension === 'bin') {
                $originalExtension = 'pkt';
            }

            $soalFileName = "Soal PM_Pertemuan {$pertemuan_id}_Kelompok {$noKelompok}_{$timestamp}.{$originalExtension}";
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
        return redirect()->route('student.pengajuan-masalah', ['pertemuan_id' => $pertemuan_id]);

    }

    public function destroy($id)
    {
        $pengajuanMasalah = PengajuanMasalah::findOrFail($id);
        $pertemuan_id = $pengajuanMasalah->pertemuan_id;

        // Check if the authenticated user owns this record
        if ($pengajuanMasalah->user_id == auth()->user()->id) {
            $pengajuanMasalah->delete();
            Alert::success('Success', 'Pengajuan masalah telah dihapus.');
        } else {
            Alert::error('Error', 'Anda tidak memiliki izin untuk menghapus pengajuan masalah ini.');
        }

        return redirect()->route('student.pengajuan-masalah', ['pertemuan_id' => $pertemuan_id]);
    }

}
