@extends('layouts.student_layout')

@section('content')
<section class="max-w-3xl justify-center min-h-screen mx-auto mt-2 px-2 lg:px-12">
    <!-- Chat Content -->
    <div id="chatContainer" class="max-h-[70vh] bg-gray-50 min-h-[70vh] overflow-y-auto mb-2 p-2 rounded-3xl">
        <!-- Chat Content -->
        @forelse($chats as $chat)
            <div class="flex mb-2">
                @if($chat->user_id == auth()->id())
                    <div class="flex-shrink-0"></div>
                    <div class="my-1 max-w-3xl mx-auto py-2 px-4 shadow-md rounded-3xl bg-gradient-to-r from-violet-200 to-violet-100 text-right w-full">
                        <span class="font-semibold text-xs text-gray-700">{{ $chat->user->name }}</span>
                        <br>
                        <span class="text-gray-800 text-sm">{{ $chat->message }}</span>
                        <br>
                        <span class="text-xs text-gray-500">{{ $chat->created_at->translatedFormat('H:i, l j F Y') }}</span>
                    </div>
                @else
                    <div class="my-1 max-w-3xl mx-auto py-2 px-4 shadow-md rounded-3xl bg-gradient-to-r from-gray-100 to-gray-50 text-left w-full">
                        <span class="font-semibold text-xs text-gray-700">{{ $chat->user->name }}</span>
                        <br>
                        <span class="text-gray-800 text-sm">{{ $chat->message }}</span>
                        <br>
                        <span class="text-xs text-gray-500">{{ $chat->created_at->translatedFormat('H:i, l j F Y') }}</span>
                    </div>
                    <div class="flex-shrink-0"></div>
                @endif
            </div>
        @empty
            <div class="flex mb-2 justify-center mt-[35vh]">
                <span class="font-semibold text-xs text-gray-700">Tidak ada percakapan</span>
            </div>
        @endforelse

    </div>


    <!-- Chat Input Form -->
    <div class="max-w-3xl mx-auto">
        <form action="{{ route('chat.store') }}" method="POST">
            @csrf
            <div class="flex items-center py-2 px-3 bg-gray-50 rounded-3xl shadow-md">
                <input type="message" name="message" id="message" class="block mx-4 p-2.5 w-full text-sm text-gray-900 bg-white rounded-3xl border border-gray-300 focus:ring-violet-500 focus:border-violet-500" placeholder="Type your message...">
                <button type="submit" class="inline-flex justify-center p-2 text-student rounded-full cursor-pointer hover:bg-violet-100">
                    <svg class="w-6 h-6 rotate-90" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10.894 2.553a1 1 0 00-1.788 0l-7 14a1 1 0 001.169 1.409l5-1.429A1 1 0 009 15.571V11a1 1 0 112 0v4.571a1 1 0 00.725.962l5 1.428a1 1 0 001.17-1.408l-7-14z"></path></svg>
                </button>
            </div>
            @if (session('status'))
                <!-- Success Message -->
                <div id="successMessage" class="fixed items-center top-5 left-0 right-0 flex flex-col sm:flex-row justify-center bg-stone-50 max-w-sm shadow rounded-2xl mx-auto py-5 pl-6 pr-8 sm:pr-6 z-50">
                    <!-- ... (same as your code) ... -->
                </div>
            @endif
            @if (session('error'))
                <!-- Error Message -->
                <div id="errorMessage" class="fixed items-center top-5 left-0 right-0 flex flex-col sm:flex-row justify-center bg-red-100 dark:bg-red-700 dark:text-white max-w-sm shadow rounded-2xl mx-auto py-5 pl-6 pr-8 sm:pr-6 z-50">
                    <!-- ... (same as your code) ... -->
                </div>
            @endif
        </form>
    </div>

    <script>
        var chatContainer = document.getElementById('chatContainer');
        chatContainer.scrollTop = chatContainer.scrollHeight;
    </script>
</section>


@endsection
