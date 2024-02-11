<?php
namespace App\Http\Controllers;

use App\Models\Materi;
use App\Models\Pertemuan;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class MateriController extends Controller
{
    /**
     * index
     *
     * @return View
     */
    public function index(): View
    {
        $materis = Materi::latest()->paginate(10);

        return view('dashboard.materi.index',
        [
            "title" => "Materi",
        ], compact('materis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(): View
    {
        $pertemuans = Pertemuan::all();
        return view('dashboard.materi.create',
        [
            "title" => "Tambah Materi",
        ], compact('pertemuans'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request): RedirectResponse
    {
        $this->validate($request, [
            'pertemuan_id' => 'required',
            'title'     => 'required|min:5',
            'description'   => 'required|min:10',
            'pdf_file' => 'nullable|mimes:pdf|max:10000',
            'thumbnail_image' => 'nullable|image|max:2048'
        ]);

        $materiTitle = $request->title;
        $slug = Str::slug($request->title);

        if ($request->hasFile('pdf_file')) {
            $fileName = "Materi_{$materiTitle}_" . time() . '.' . $request->pdf_file->extension();
            $request->pdf_file->storeAs('public/pdfs', $fileName);
        } else {
            $fileName = null; // Set it to null or any default value as needed.
        }

        if ($request->hasFile('thumbnail_image')) {
            $thumbnailName = "Foto_{$materiTitle}_" . time() . '.' . $request->thumbnail_image->extension();
            $request->thumbnail_image->storeAs('public/thumbnails', $thumbnailName);
        } else {
            $thumbnailName = null; // Set it to null or any default value as needed.
        }

        Materi::create([
            'pertemuan_id' => $request->pertemuan_id,
            'title' => $request->title,
            'slug' => $slug,
            'description' => $request->description,
            'pdf_file' => $fileName,
            'thumbnail_image' => $thumbnailName
        ]);

        return redirect()->route('materis.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    /**
     * show
     *
     * @param  mixed $id
     * @return View
     */
    public function show(string $id): View
    {
        $materi = Materi::findOrFail($id);

        return view('dashboard.materi.show',
        [
            "title" => "Materi",
        ],compact('materi'));
    }

    /**
     * edit
     *
     * @param  mixed $id
     * @return void
     */
    public function edit(string $id): View
    {
        $materi = Materi::findOrFail($id);

        return view('dashboard.materi.edit',
        [
            "title" => "Materi",
        ], compact('materi'));
    }

    /**
     * update
     *
     * @param  mixed $request
     * @param  mixed $id
     * @return RedirectResponse
     */
    public function update(Request $request, $id): RedirectResponse
    {
        //validate form
        $this->validate($request, [
            'title'     => 'required|min:5',
            'description'   => 'required|min:10',
            'pdf_file' => 'nullable|mimes:pdf|max:10000',
            'thumbnail_image' => 'nullable|image|max:2048'
        ]);

        $materiTitle = $request->title;
        $materi = Materi::findOrFail($id);
        $slug = Str::slug($request->title);

        if ($request->hasFile('pdf_file')) {
            $fileName = "Materi_{$materiTitle}_" . time() . '.' . $request->pdf_file->extension();
            $request->pdf_file->storeAs('public/pdfs', $fileName);
        } else {
            $fileName = null; // Set it to null or any default value as needed.
        }

        if ($request->hasFile('thumbnail_image')) {
            $thumbnailName = "Foto_{$materiTitle}_" . time() . '.' . $request->thumbnail_image->extension();
            $request->thumbnail_image->storeAs('public/thumbnails', $thumbnailName);
        } else {
            $thumbnailName = null; // Set it to null or any default value as needed.
        }

        $materi->update([
            'title' => $request->title,
            'slug' => $slug,
            'description' => $request->description,
            'pdf_file' => $fileName,
            'thumbnail_image' => $thumbnailName
        ]);

        return redirect()->route('materis.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    /**
     * destroy
     *
     * @param  mixed $materi
     * @return void
     */
    public function destroy($id): RedirectResponse
    {
        $materi = Materi::findOrFail($id);

        $materi->delete();

        //redirect to index
        return redirect()->route('materis.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
