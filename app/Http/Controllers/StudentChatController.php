<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Chat;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;

class StudentChatController extends Controller
{
    public function index(): View
    {
        $users = User::orderBy('updated_at', 'asc')->get();
        $chats = Chat::orderBy('created_at', 'asc')->get();

        return view('student.chat', [
            "title" => "Global Chat",
            "chats" => $chats,  // You may also want to pass the users data to the view
        ],compact('chats'));
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'message' => 'required',
        ]);

        Chat::create([
            'user_id' => Auth::id(),
            'message' => $request->input('message'),
        ]);

        return redirect()->route('chat.index')->with('success', 'Pesan telah terkirim');
    }
}
