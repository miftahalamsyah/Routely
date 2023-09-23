<?php
namespace App\Http\Controllers;

use App\Models\Materi;
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

        return view('dashboard.materi.index', compact('materis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(): View
    {
        return view('dashboard.materi.create');
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
            'title'     => 'required|min:5',
            'description'   => 'required|min:10',
            'pdf_file' => 'nullable|mimes:pdf|max:10000'
        ]);

        $slug = Str::slug($request->title);
        if ($request->hasFile('pdf_file')) {
            $fileName = time() . '.' . $request->pdf_file->extension();
            $request->pdf_file->storeAs('public/pdfs', $fileName);
        } else {
            $fileName = null; // Set it to null or any default value as needed.
        }

        Materi::create([
            'title' => $request->title,
            'slug' => $slug,
            'description' => $request->description,
            'pdf_file' => $fileName
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

        return view('dashboard.materi.show', compact('materi'));
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

        return view('dashboard.materi.edit', compact('materi'));
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
            'pdf_file' => 'nullable|mimes:pdf|max:10000'
        ]);

        $materi = Materi::findOrFail($id);
        $slug = Str::slug($request->title);
        if ($request->hasFile('pdf_file')) {
            $fileName = time() . '.' . $request->pdf_file->extension();
            $request->pdf_file->storeAs('public/pdfs', $fileName);
        } else {
            $fileName = null; // Set it to null or any default value as needed.
        }
        
        $materi->update([
            'title' => $request->title,
            'slug' => $slug,
            'description' => $request->description,
            'pdf_file' => $fileName
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
