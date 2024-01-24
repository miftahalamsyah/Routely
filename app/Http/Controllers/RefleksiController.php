<?php

namespace App\Http\Controllers;

use App\Models\Refleksi;
use Illuminate\Http\Request;

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

    public function destroy(Refleksi $refleksi)
    {
        $refleksi->delete();

        return redirect()->route('refleksi.index')
            ->with('success', 'Refleksi deleted successfully.');
    }
}
