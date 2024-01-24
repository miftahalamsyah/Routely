<?php

namespace App\Http\Controllers;

use App\Exports\LembarRefleksiExport;
use App\Models\Refleksi;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class RefleksiController extends Controller
{
    public function index()
    {
        $refleksis = Refleksi::whereHas('user', function ($query) {
            $query->where('is_admin', 0);
        })->get();

        return view('dashboard.refleksi.index',
        [
            "title" => "Refleksi",
        ], compact('refleksis'));
    }

    public function export()
    {
        return Excel::download(new LembarRefleksiExport, 'Hasil Lembar Refleksi.xlsx');
    }

    public function destroy(Refleksi $refleksi)
    {
        $refleksi->delete();

        return redirect()->route('refleksi.index')
            ->with('success', 'Refleksi deleted successfully.');
    }
}
