<?php

namespace App\Http\Controllers;

use App\Models\HasilTugasSiswa;
use App\Models\Kelompok;
use App\Models\Tugas;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class HasilTugasSiswaController extends Controller
{
    public function store(Request $request)
    {
        $user_id = auth()->user()->id;
        $tugas_id = $request->tugas_id;
        $kelompok_id = Kelompok::where('user_id', $user_id)->first()->no_kelompok;

        $this->validate($request, [
            'tugas_id' => 'required',
            'user_id' => 'required',
            'topologi' => 'required|mimetypes:application/octet-stream,application/json|max:10240',
            'powerpoint' => 'required|mimes:pptx,ppt,pdf,odp|max:10240',
            'penjelasan' => 'nullable',
        ]);

        $topologiFileName = null;
        $powerpointFileName = null;

        if ($request->hasFile('topologi')) {
            $file = $request->file('topologi');
            // Use date function to get the current time in hours.minutes.seconds format
            $timestamp = date('mdHis');

            $originalExtension = $file->getClientOriginalExtension();
            // Change extension to .pkt if it's .bin
            if ($originalExtension === 'bin') {
                $originalExtension = 'pkt';
            }

            $topologiFileName = "Topologi_Kel-{$kelompok_id}_Tugas- {$tugas_id}_U{$user_id}_{$timestamp}.{$originalExtension}";
            $request->topologi->storeAs('public/topologi', $topologiFileName);
        }


        if ($request->hasFile('powerpoint')) {
            $timestamp = date('mdHis');

            $powerpointFileName = "PemecahanMasalah_Kel-{$kelompok_id}_Tugas-{$tugas_id}_U{$user_id}_{$timestamp}". $request->powerpoint->extension();
            $request->powerpoint->storeAs('public/powerpoint', $powerpointFileName);
        }

        HasilTugasSiswa::create([
            'tugas_id' => $request->tugas_id,
            'user_id' => $request->user_id,
            'topologi' => $topologiFileName,
            'powerpoint' => $powerpointFileName,
            'penjelasan' => $request->penjelasan,
        ]);

        Alert::success('Success', 'Tugas telah dikumpulkan.');
        return redirect()->back();
    }

    public function destroy($id)
    {
        $tugass = HasilTugasSiswa::findOrFail($id);

        // Check if the authenticated user owns this record
        if ($tugass->user_id == auth()->user()->id) {
            $tugass->delete();
            Alert::success('Success', 'Pengajuan masalah telah dihapus.');
        } else {
            Alert::error('Error', 'Anda tidak memiliki izin untuk menghapus pengajuan masalah ini.');
        }

        return redirect()->back();
    }
}
