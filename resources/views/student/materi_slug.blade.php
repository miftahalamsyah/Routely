@extends('layouts.student_layout')

@section('content')

<section class="w-full justify-center min-h-screen mx-auto px-4 lg:px-12">
    <div class="row col-md-12 py-5 m-3">
        <div class="border-0">
            <a href="{{ url()->previous() }}" class="flex my-3 text-stone-700">
                <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" width="20px" height="25px" viewBox="0 0 52 52" enable-background="new 0 0 52 52" xml:space="preserve">
                    <path d="M48.6,23H15.4c-0.9,0-1.3-1.1-0.7-1.7l9.6-9.6c0.6-0.6,0.6-1.5,0-2.1l-2.2-2.2c-0.6-0.6-1.5-0.6-2.1,0 L2.5,25c-0.6,0.6-0.6,1.5,0,2.1L20,44.6c0.6,0.6,1.5,0.6,2.1,0l2.1-2.1c0.6-0.6,0.6-1.5,0-2.1l-9.6-9.6C14,30.1,14.4,29,15.3,29 h33.2c0.8,0,1.5-0.6,1.5-1.4v-3C50,23.8,49.4,23,48.6,23z"/>
                </svg>
                <p class="ml-2 font-semibold text-md">Kembali</p>
            </a>
            <div class="bg-stone-50 rounded-2xl shadow-md p-5">
                <p class="font-bold text-md">Deskripsi</p>
                <p class="text-md">{{ $description }}</p>
            </div>
            @if ($pdf_file)
                <p class="font-thin italic text-sm mt-4">Materi dapat diunduh dalam bentuk .pdf di bawah ini</p>
                <iframe src="{{ asset('storage/pdfs/' . $pdf_file) }}" class="rounded-xl my-4" frameborder="0" width="100%" height="600"></iframe>
            @endif

            <div class="flex gap-4 my-8">
                {{-- <form method="POST" action="{{ route('student.materi.show', $materi->slug) }}">
                    @csrf
                    <button type="submit" name="selesai" class="bg-student rounded-2xl text-gray-50 font-semibold shadow-md py-2 px-4 hover:bg-student-dark">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor" data-name="Livello 1" xmlns="http://www.w3.org/2000/svg" class="mx-auto"><path data-name="done circle" d="M12 0a12 12 0 1 0 12 12A12 12 0 0 0 12 0Zm-.48 17L6 12.79l1.83-2.37L11.14 13l4.51-5.08 2.24 2Z"/></svg>
                        Tandai sudah selesai</button>
                </form> --}}
                {{-- <a href="/student/chat" class="bg-gray-50 text-student rounded-2xl font-semibold py-2 px-4 shadow-md hover:bg-gray-100">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor" data-name="Line Color" xmlns="http://www.w3.org/2000/svg" class="mx-auto"><path d="M18.81 16.23 20 21l-4.95-2.48A9.84 9.84 0 0 1 12 19c-5 0-9-3.58-9-8s4-8 9-8 9 3.58 9 8a7.49 7.49 0 0 1-2.19 5.23Z" "/></svg>
                    Tanyakan pada global chat</a> --}}
            </div>
        </div>
    </div>
</section>
@endsection
