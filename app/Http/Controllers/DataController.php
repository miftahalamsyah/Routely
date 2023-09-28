<?php
// app/Http/Controllers/DataController.php

namespace App\Http\Controllers;

use App\Models\Materi;
use App\Models\User;
use Illuminate\Http\Request;

class DataController extends Controller
{
    public function index()
    {
        $userCount = User::where('is_admin', 0)->count();
        $materiCount = Materi::count();

        $data = [
            'userCount' => $userCount,// Logic to get user count,
            'materiCount' => $materiCount// Logic to get materi count,
            // Other data you want to send
        ];

        return response()->json($data);
    }
}
