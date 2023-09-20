<?php

namespace App\Http\Controllers;

use App\Models\Materi;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
{
    $materiCount = Materi::count(); // Count the number of "materi" records
    $userCount = User::count();

    return view('dashboard.index')->with([
        'title' => 'Admin Dashboard',
        'materiCount' => $materiCount, // Pass the count to the view
        'userCount' => $userCount,
    ]);
}
}
