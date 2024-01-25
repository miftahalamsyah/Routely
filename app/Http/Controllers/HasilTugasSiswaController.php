<?php

namespace App\Http\Controllers;

use App\Models\HasilTugasSiswa;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class HasilTugasSiswaController extends Controller
{
    public function store(Request $request)
    {
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
            $topologiFileName = 'Topologi_' . time() . '.' . $request->topologi->extension();
            $request->topologi->storeAs('public/topologi', $topologiFileName);
        }

        if ($request->hasFile('powerpoint')) {
            $powerpointFileName = 'Powerpoint_' . time() . '.' . $request->powerpoint->extension();
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
