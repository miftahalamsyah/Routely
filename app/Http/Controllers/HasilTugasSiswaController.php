<?php

namespace App\Http\Controllers;

use App\Models\HasilTugasSiswa;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class HasilTugasSiswaController extends Controller
{
    public function store(Request $request)
    {
        $user_id = auth()->user()->id;
        $tugas_id = $request->tugas_id;

        $this->validate($request, [
            'tugas_id' => 'required',
            'user_id' => 'required',
            'topologi' => 'required|mimes:pkt,json|max:10240',
            'powerpoint' => 'required|mimes:pptx,ppt,pdf,odp|max:10240',
            'penjelasan' => 'nullable',
        ]);

        $topologiFileName = null;
        $powerpointFileName = null;

        if ($request->hasFile('topologi')) {
            $topologiFileName = "Topologi_S{$user_id}_T{$tugas_id}_" . time() . '.' . $request->topologi->extension();
            $request->topologi->storeAs('public/topologi', $topologiFileName);
        }

        if ($request->hasFile('powerpoint')) {
            $powerpointFileName = "Presentasi_S{$user_id}_T{$tugas_id}_" . time() . '.' . $request->powerpoint->extension();
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
}
