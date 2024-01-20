<?php

namespace App\Http\Controllers;

use App\Imports\SoalTesImport;
use App\Models\SoalTes;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Maatwebsite\Excel\Facades\Excel;

class SoalTesController extends Controller
{
    public function pretestindex()
    {
        $soal_tes = SoalTes::where('kategori_tes_id', 1)->paginate(20);

        return view('dashboard.pretest.index', [
            "title" => "PreTest",
            "soal_tes" => $soal_tes,
        ]);
    }

    public function pretestcreate()
    {
        return view('dashboard.pretest.create',
        [
            "title" => "Tambah Soal Pretest",
        ]);
    }

    public function preteststore(Request $request)
    {
        $this->validate($request, [
            'indikator' => 'required',
            'pertanyaan' => 'required',
            'gambar' => 'nullable|file|mimes:png,jpg,jpeg|max:2048',
            'jawaban_a' => 'required',
            'jawaban_b' => 'required',
            'jawaban_c' => 'required',
            'jawaban_d' => 'required',
            'jawaban_e' => 'required',
            'kunci_jawaban' => 'required',
            'pembahasan' => 'nullable',
        ]);

        if ($request->hasFile('gambar')) {
            $fileName = time() . '.' . $request->gambar->extension();
            $request->gambar->storeAs('public/gambar', $fileName);
        } else {
            $fileName = null;
        }

        $kategoriTesId = 1;

        $soalTes = new SoalTes([
            'kategori_tes_id' => $kategoriTesId,
            'indikator' => $request->input('indikator'),
            'pertanyaan' => $request->input('pertanyaan'),
            'gambar' => $fileName,
            'jawaban_a' => $request->input('jawaban_a'),
            'jawaban_b' => $request->input('jawaban_b'),
            'jawaban_c' => $request->input('jawaban_c'),
            'jawaban_d' => $request->input('jawaban_d'),
            'jawaban_e' => $request->input('jawaban_e'),
            'kunci_jawaban' => $request->input('kunci_jawaban'),
            'pembahasan' => $request->input('pembahasan'),
        ]);

        $soalTes->save();

        return redirect()->route('pretest.index')->with('status', 'Soal Pretest created successfully!');
    }

    public function pretestedit(SoalTes $soalTes)
    {
        //
    }

    public function pretestdestroy($id): RedirectResponse
    {
        $soalTes = SoalTes::findOrFail($id);
        $soalTes->delete();

        return redirect()->route('pretest.index')->with('status', 'Soal Pretest deleted successfully!');
    }

    public function pretestimport(Request $request)
    {
        if ($request->isMethod('post')) {
            $request->validate([
                'file' => 'required|mimes:xls,xlsx,csv|max:10240', // Adjust max file size as needed
            ]);

            $file = $request->file('file');

            try {
                Excel::import(new SoalTesImport, $file);
            } catch (\Exception $e) {
                return redirect()->back()->with('error', 'Failed to import data. Make sure the file format is correct.');
            }

            return redirect()->route('pretest.index')->with('success', 'Data imported successfully');
        }

        return view('dashboard.pretest.import', [
            "title" => "Import Soal Pretest",
        ]);
    }


    //posttest function

    public function posttestindex()
    {
        $soal_tes = SoalTes::where('kategori_tes_id', 2)->get();

        return view('dashboard.posttest.index', [
            "title" => "PostTest",
            "soal_tes" => $soal_tes,
        ]);
    }

    public function posttestcreate()
    {
        return view('dashboard.posttest.create',
        [
            "title" => "Tambah Soal Posttest",
        ]);
    }

    public function postteststore(Request $request)
    {
        $this->validate($request, [
            'indikator' => 'required',
            'pertanyaan' => 'required',
            'gambar' => 'nullable|file|mimes:jpg,png,jpeg|max:2048',
            'jawaban_a' => 'required',
            'jawaban_b' => 'required',
            'jawaban_c' => 'required',
            'jawaban_d' => 'required',
            'jawaban_e' => 'required',
            'kunci_jawaban' => 'required',
            'pembahasan' => 'nullable',
        ]);

        if ($request->hasFile('gambar')) {
            $fileName = time() . '.' . $request->gambar->extension();
            $request->gambar->storeAs('public/gambar', $fileName);
        } else {
            $fileName = null;
        }

        $kategoriTesId = 2;

        $soalTes = new SoalTes([
            'kategori_tes_id' => $kategoriTesId,
            'indikator' => $request->input('indikator'),
            'pertanyaan' => $request->input('pertanyaan'),
            'gambar' => $fileName,
            'jawaban_a' => $request->input('jawaban_a'),
            'jawaban_b' => $request->input('jawaban_b'),
            'jawaban_c' => $request->input('jawaban_c'),
            'jawaban_d' => $request->input('jawaban_d'),
            'jawaban_e' => $request->input('jawaban_e'),
            'kunci_jawaban' => $request->input('kunci_jawaban'),
            'pembahasan' => $request->input('pembahasan'),
        ]);

        $soalTes->save();

        return redirect()->route('posttest.index')->with('status', 'Soal Posttest created successfully!');
    }

    public function posttestdestroy($id): RedirectResponse
    {
        $soalTes = SoalTes::findOrFail($id);
        $soalTes->delete();

        return redirect()->route('posttest.index')->with('status', 'Soal Posttest deleted successfully!');
    }

    public function posttestimport(Request $request)
    {
        if ($request->isMethod('post')) {
            $request->validate([
                'file' => 'required|mimes:xls,xlsx,csv|max:10240', // Adjust max file size as needed
            ]);

            $file = $request->file('file');

            try {
                Excel::import(new SoalTesImport, $file);
            } catch (\Exception $e) {
                return redirect()->back()->with('error', 'Failed to import data. Make sure the file format is correct.');
            }

            return redirect()->route('posttest.index')->with('success', 'Data imported successfully');
        }

        return view('dashboard.posttest.import', [
            "title" => "Import Soal Posttest",
        ]);
    }
}
