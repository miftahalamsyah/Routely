<?php

namespace App\Http\Controllers;

use App\Models\HasilTugasSiswa;
use App\Models\NilaiTugas;
use App\Models\Tugas;
use App\Models\User;
use App\Models\Pertemuan;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\View\View;

class TugasController extends Controller
{
    public function index()
    {
        // Logika untuk menampilkan daftar tugas
        $tugass = Tugas::all();
        $users = User::where('is_admin', 0)->paginate(10);
        return view('dashboard.tugas.index',
        [
            "title" => "Tugas",
        ], compact('tugass', 'users'));
    }

    public function create()
    {
        // Logika untuk menampilkan formulir pembuatan tugas
        // $users = User::where('is_admin', 0)->paginate(10);
        $pertemuans = Pertemuan::all();
        return view('dashboard.tugas.create',
        [
            "title" => "Tambah Tugas",
        ], compact('pertemuans'));
    }

    public function store(Request $request): RedirectResponse
    {
        $this->validate($request, [
            'pertemuan_id' => 'required',
            'name'     => 'required',
            'due_date' => 'required',
            'tugas_file' => 'nullable|mimes:pdf,doc,docx|max:4096',
        ]);

        $slug = Str::slug($request->name);

        if ($request->hasFile('tugas_file')) {
            $fileName = time() . '.' . $request->tugas_file->extension();
            $request->tugas_file->storeAs('public/tugas', $fileName);
        } else {
            $fileName = null; // Set it to null or any default value as needed.
        }

        // Logika untuk menyimpan tugas yang baru dibuat
        Tugas::create([
            'pertemuan_id' => $request->pertemuan_id,
            'name' => $request->name,
            'slug' => $slug,
            'description' => $request->description,
            'tugas_file' => $fileName,
            'due_date' => $request->due_date,
        ]);

        return redirect()->route('tugas.index')->with('success', 'Tugas berhasil ditambahkan.');
    }

    public function show($tugas_id)
    {
        $hasilTugasSiswa = HasilTugasSiswa::where('tugas_id', $tugas_id)->get();

        if  (!$hasilTugasSiswa) {
            return redirect()->back();
        }

        return view('dashboard.tugas.id',
        [
            "title" => "Hasil Pengerjaan Tugas",
        ],compact('hasilTugasSiswa', 'tugas_id'));
    }

    public function nilai($hasilTugasSiswa_id)
    {
        $hasilTugasSiswa = HasilTugasSiswa::find($hasilTugasSiswa_id);

        if  (!$hasilTugasSiswa) {
            return redirect()->back();
        }

        return view('dashboard.tugas.id.id',
        [
            "title" => "Menilai Tugas",
        ],compact('hasilTugasSiswa'));
    }

    public function edit(string $id): View
    {
        $pertemuans = Pertemuan::all();
        $tugass = Tugas::find($id);

        return view('dashboard.tugas.edit',
        [
            "title" => "Edit Tugas $tugass->name",
        ], compact('tugass', 'pertemuans'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'pertemuan_id' => 'required',
            'name'     => 'required',
            'due_date' => 'required',
            'tugas_file' => 'nullable|mimes:pdf,doc,docx|max:4096',
        ]);

        $tugass = Tugas::find($id);
        $slug = Str::slug($request->name);

        if ($request->hasFile('tugas_file')) {
            $fileName = time() . '.' . $request->tugas_file->extension();
            $request->tugas_file->storeAs('public/tugas', $fileName);
        } else {
            $fileName = null; // Set it to null or any default value as needed.
        }

        // Logika untuk menyimpan tugas yang baru dibuat
        $tugass->update([
            'pertemuan_id' => $request->pertemuan_id,
            'name' => $request->name,
            'slug' => $slug,
            'description' => $request->description,
            'tugas_file' => $fileName,
            'due_date' => $request->due_date,
        ]);

        return redirect()->route('tugas.index')->with('success', 'Tugas berhasil diperbarui.');
    }

    public function destroy($id)
    {
        // Logika untuk menghapus tugas
        $tugass = Tugas::find($id);
        $tugass->delete();
        return redirect()->route('tugas.index')->with('success', 'Tugas berhasil dihapus.');
    }
}
