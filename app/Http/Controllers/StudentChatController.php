<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;

class StudentChatController extends Controller
{
    public function index(): View
    {
        $users = User::orderBy('updated_at', 'asc')->get();

        return view('student.chat', [
            "title" => "Chat",
            "users" => $users,  // You may also want to pass the users data to the view
        ]);
    }
}
