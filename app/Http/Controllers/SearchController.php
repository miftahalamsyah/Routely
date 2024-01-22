<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Materi;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('query');

        $results = Materi::where('title', 'like', '%' . $query . '%')
                    ->orWhere('description', 'like', '%' . $query . '%')
                    ->get();

        return view('student.hasil-pencarian', [
            'results' => $results,
            'query' => $query,
            'title' => 'Hasil Pencarian'
        ]);
    }
}
