<?php

namespace App\Http\Controllers;

use App\Models\Materi;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str; 


class DashboardController extends Controller
{
    public function index()
    {
        $materiCount = Materi::count();
        $userCount = User::count();
        $materis = Materi::latest()->paginate(3);
        $users = User::paginate(10);

        return view('dashboard.index', compact('users','materis'))->with([
            'title' => 'Admin Dashboard',
            'materiCount' => $materiCount,
            'userCount' => $userCount,
        ]);
    }
}
