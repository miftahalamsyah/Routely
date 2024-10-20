@extends('layouts.student_layout')

@section('content')

<section class="w-full justify-center min-h-screen mx-auto px-4 lg:px-12">
    <div class="row col-md-12 py-5 m-3">
        <div class="border-0">
            <a href="{{ url()->previous() }}" class="flex my-3 text-stone-50 mr-2 text-sm relative inline-flex items-center justify-center px-4 py-2 overflow-hidden font-bold text-stone-50 transform hover:translate-y-[-5px] transition-transform duration-300 ease-in-out shadow-md bg-violet-500 hover:bg-violet-600 border border-r-4 border-b-4 border-stone-700">
                <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" width="20px" height="25px" viewBox="0 0 52 52" enable-background="new 0 0 52 52" xml:space="preserve">
                    <path d="M48.6,23H15.4c-0.9,0-1.3-1.1-0.7-1.7l9.6-9.6c0.6-0.6,0.6-1.5,0-2.1l-2.2-2.2c-0.6-0.6-1.5-0.6-2.1,0 L2.5,25c-0.6,0.6-0.6,1.5,0,2.1L20,44.6c0.6,0.6,1.5,0.6,2.1,0l2.1-2.1c0.6-0.6,0.6-1.5,0-2.1l-9.6-9.6C14,30.1,14.4,29,15.3,29 h33.2c0.8,0,1.5-0.6,1.5-1.4v-3C50,23.8,49.4,23,48.6,23z"/>
                </svg>
                <p class="ml-2 font-semibold text-md">Kembali</p>
            </a>

            <div x-data="{ persiapan: false}" class="w-full mx-auto bg-stone-50 p-5 rounded-sm border border-b-4 border-r-4 border-stone-700 my-4">
                <button @click="persiapan = !persiapan" class="flex justify-between w-full">
                    <p class="font-bold text-lg">a. Deskripsi</p>
                    <svg x-bind:class="{ 'rotate-180': persiapan }" xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 justify-end transition-transform transform" viewBox="0 0 20 20" fill="currentColor" >
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </button>
                <div x-show="persiapan" class="relative flex flex-col break-words">
                    <p class="text-md mt-2">{{ $description }}</p>
                </div>
            </div>

            <div x-data="{ materi_pdf: false}" class="w-full mx-auto bg-stone-50 p-5 rounded-sm border border-b-4 border-r-4 border-stone-700 my-4">
                <button @click="materi_pdf = !materi_pdf" class="flex justify-between w-full">
                    <p class="font-bold text-lg">b. Materi</p>
                    <svg x-bind:class="{ 'rotate-180': materi_pdf }" xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 justify-end transition-transform transform" viewBox="0 0 20 20" fill="currentColor" >
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </button>
                <div x-show="materi_pdf" class="relative flex flex-col break-words">
                    @if ($pdf_file)
                        <p class="font-thin italic text-sm mt-4">Materi dapat diunduh dalam bentuk .pdf di bawah ini</p>
                        <iframe src="{{ asset('storage/pdfs/' . $pdf_file) }}" class="rounded-sm border border-r-4 border-b-4 border-stone-700 my-4" frameborder="0" width="100%" height="400"></iframe>
                    @endif
                </div>
            </div>

            <!--<div class="grid grid-cols-2 gap-4">
            <div x-data="{ dekomposisi: false}" class="w-full mx-auto bg-stone-50 p-5 rounded-sm border border-b-4 border-r-4 border-stone-700 my-4">
                <button @click="dekomposisi = !dekomposisi" class="flex justify-between w-full">
                    <p class="font-bold text-lg">c. Berpikir Komputasi (Dekomposisi)</p>
                    <svg x-bind:class="{ 'rotate-180': dekomposisi }" xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 justify-end transition-transform transform" viewBox="0 0 20 20" fill="currentColor" >
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </button>
                <div x-show="dekomposisi" class="relative flex flex-col break-words">
                    <p class="text-md">{{ $description }}</p>
                </div>
            </div>

            <div x-data="{ pengenalanpola: false}" class="w-full mx-auto bg-stone-50 p-5 rounded-sm border border-b-4 border-r-4 border-stone-700 my-4">
                <button @click="pengenalanpola = !pengenalanpola" class="flex justify-between w-full">
                    <p class="font-bold text-lg">d. Berpikir Komputasi (Pengenalan Pola)</p>
                    <svg x-bind:class="{ 'rotate-180': pengenalanpola }" xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 justify-end transition-transform transform" viewBox="0 0 20 20" fill="currentColor" >
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </button>
                <div x-show="pengenalanpola" class="relative flex flex-col break-words">
                    <p class="text-md">{{ $description }}</p>
                </div>
            </div>

            <div x-data="{ abstraksi: false}" class="w-full mx-auto bg-stone-50 p-5 rounded-sm border border-b-4 border-r-4 border-stone-700 my-4">
                <button @click="abstraksi = !abstraksi" class="flex justify-between w-full">
                    <p class="font-bold text-lg">e. Berpikir Komputasi (Abstraksi)</p>
                    <svg x-bind:class="{ 'rotate-180': abstraksi }" xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 justify-end transition-transform transform" viewBox="0 0 20 20" fill="currentColor" >
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </button>
                <div x-show="abstraksi" class="relative flex flex-col break-words">
                    <p class="text-md">{{ $description }}</p>
                </div>
            </div>

            <div x-data="{ algoritma: false}" class="w-full mx-auto bg-stone-50 p-5 rounded-sm border border-b-4 border-r-4 border-stone-700 my-4">
                <button @click="algoritma = !algoritma" class="flex justify-between w-full">
                    <p class="font-bold text-lg">f. Berpikir Komputasi (Algoritma)</p>
                    <svg x-bind:class="{ 'rotate-180': algoritma }" xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 justify-end transition-transform transform" viewBox="0 0 20 20" fill="currentColor" >
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </button>
                <div x-show="algoritma" class="relative flex flex-col break-words">
                    <p class="text-md">{{ $description }}</p>
                </div>
            </div>
            </div>-->

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
