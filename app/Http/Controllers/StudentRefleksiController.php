<?php

namespace App\Http\Controllers;

use App\Models\HasilTesSiswa;
use App\Models\Pertemuan;
use App\Models\Refleksi;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class StudentRefleksiController extends Controller
{
    public function index()
    {
        $userHasPretest = HasilTesSiswa::where('user_id', auth()->id())
            ->where('kategori_tes_id', 1)
            ->exists();

        if (!$userHasPretest) {
            Alert::error('Maaf', 'Anda harus mengerjakan Pretest terlebih dahulu.');
            return redirect()->back();
        }

        $user = auth()->user();
        $refleksis = $user->refleksis;
        $pertemuans = Pertemuan::all();

        return view('student.refleksi.index', [
            "title" => "Refleksi",
            "user" => $user,
        ], compact('refleksis','pertemuans'));
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'pertemuan_id' => 'required',
            'seberapa_paham' => 'nullable',
            'seberapa_baik' => 'nullable',
            'seberapa_sulit' => 'nullable',
            'hambatan' => 'nullable',
            'saran' => 'nullable'
        ]);

        Refleksi::create([
            'pertemuan_id' => $request->pertemuan_id,
            'user_id' => auth()->user()->id,
            'seberapa_paham' => $request->seberapa_paham,
            'seberapa_baik' => $request->seberapa_baik,
            'seberapa_sulit' => $request->seberapa_sulit,
            'hambatan' => $request->hambatan,
            'saran' => $request->saran,
        ]);

        Alert::success('Success', 'Lembar refleksi telah diisi.');
        return redirect()->route('student.refleksi');
    }
}
