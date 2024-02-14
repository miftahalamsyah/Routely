@extends('layouts.app')

@section('content')
<section class="mt-20 max-w-6xl justify-center mx-auto px-5">
    <div class="py-24 max-w-3xl px-4 text-center z-20 mx-auto">
        <h1 class="mb-2 text-5xl clashdisplaymedium tracking-tight leading-none text-stone-900 sm:text-5xl md:text-5xl lg:text-5xl xl:text-6xl">Bantuan</h1>
        <p class="mb-8 text-xl">Koleksi sumber bantuan.</p>
    </div>

    <div x-data="{ bantuan1: false }" class="max-w-4xl mx-auto bg-stone-50 p-5 rounded-lg hover:shadow-md border border-r-4 border-b-4 border-stone-700 my-4">
        <button @click="bantuan1 = !bantuan1" class="flex justify-between w-full">
            <h2 class="text-lg clashdisplaymedium">Membuat Akun</h2>
            <svg x-bind:class="{ 'rotate-180': bantuan1 }" xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 justify-end transition-transform transform" viewBox="0 0 20 20" fill="currentColor" >
                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
            </svg>
        </button>
        <div x-show="bantuan1" class="text-stone-800 mt-4 text-md">
            <p>This is some additional information that can be toggled on and off.</p>
            <!-- Add more content as needed -->
        </div>
    </div>

    <div x-data="{ bantuan2: false }" class="max-w-4xl mx-auto bg-stone-50 p-5 rounded-lg hover:shadow-md border border-r-4 border-b-4 border-stone-700 my-4">
        <button @click="bantuan2 = !bantuan2" class="flex justify-between w-full">
            <h2 class="text-lg clashdisplaymedium">Melakukan Tes (Pretest & Posttest)</h2>
            <svg x-bind:class="{ 'rotate-180': bantuan2 }" xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 justify-end transition-transform transform" viewBox="0 0 20 20" fill="currentColor" >
                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
            </svg>
        </button>
        <div x-show="bantuan2" class="text-stone-800 mt-4 text-md">
            <p>This is some additional information that can be toggled on and off.</p>
            <!-- Add more content as needed -->
        </div>
    </div>

    <div x-data="{ bantuan3: false }" class="max-w-4xl mx-auto bg-stone-50 p-5 rounded-lg hover:shadow-md border border-r-4 border-b-4 border-stone-700 my-4">
        <button @click="bantuan3 = !bantuan3" class="flex justify-between w-full">
            <h2 class="text-lg clashdisplaymedium">Mengakses Pertemuan</h2>
            <svg x-bind:class="{ 'rotate-180': bantuan3 }" xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 justify-end transition-transform transform" viewBox="0 0 20 20" fill="currentColor" >
                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
            </svg>
        </button>
        <div x-show="bantuan3" class="text-stone-800 mt-4 text-md">
            <p>This is some additional information that can be toggled on and off.</p>
            <!-- Add more content as needed -->
        </div>
    </div>

    <div x-data="{ bantuan4: false }" class="max-w-4xl mx-auto bg-stone-50 p-5 rounded-lg hover:shadow-md border border-r-4 border-b-4 border-stone-700 my-4">
        <button @click="bantuan4 = !bantuan4" class="flex justify-between w-full transition duration-300 group">
            <h2 class="text-lg clashdisplaymedium">Mengisi Lembar Apersepsi</h2>
            <svg x-bind:class="{ 'rotate-180': bantuan4 }" xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 justify-end transition-transform transform" viewBox="0 0 20 20" fill="currentColor" >
                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
            </svg>
        </button>
        <div x-show="bantuan4" class="text-stone-800 mt-4 text-md">
            <p>This is some additional information that can be toggled on and off.</p>
            <!-- Add more content as needed -->
        </div>
    </div>

    <div x-data="{ bantuan5: false }" class="max-w-4xl mx-auto bg-stone-50 p-5 rounded-lg hover:shadow-md border border-r-4 border-b-4 border-stone-700 my-4">
        <button @click="bantuan5 = !bantuan5" class="flex justify-between w-full transition duration-300 group">
            <h2 class="text-lg clashdisplaymedium">Pengajuan Masalah (Soal)</h2>
            <svg x-bind:class="{ 'rotate-180': bantuan5 }" xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 justify-end transition-transform transform" viewBox="0 0 20 20" fill="currentColor" >
                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
            </svg>
        </button>
        <div x-show="bantuan5" class="text-stone-800 mt-4 text-md">
            <p>This is some additional information that can be toggled on and off.</p>
            <!-- Add more content as needed -->
        </div>
    </div>

    <div x-data="{ bantuan6: false }" class="max-w-4xl mx-auto bg-stone-50 p-5 rounded-lg hover:shadow-md border border-r-4 border-b-4 border-stone-700 my-4">
        <button @click="bantuan6 = !bantuan6" class="flex justify-between w-full transition duration-300 group">
            <h2 class="text-lg clashdisplaymedium">Pemecahan Masalah (Pengumpulan Tugas)</h2>
            <svg x-bind:class="{ 'rotate-180': bantuan6 }" xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 justify-end transition-transform transform" viewBox="0 0 20 20" fill="currentColor" >
                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
            </svg>
        </button>
        <div x-show="bantuan6" class="text-stone-800 mt-4 text-md">
            <p>This is some additional information that can be toggled on and off.</p>
            <!-- Add more content as needed -->
        </div>
    </div>

    <div x-data="{ bantuan7: false }" class="max-w-4xl mx-auto bg-stone-50 p-5 rounded-lg hover:shadow-md border border-r-4 border-b-4 border-stone-700 my-4">
        <button @click="bantuan7 = !bantuan7" class="flex justify-between w-full transition duration-300 group">
            <h2 class="text-lg clashdisplaymedium">Mengerjakan Verifikasi (Kuis)</h2>
            <svg x-bind:class="{ 'rotate-180': bantuan7 }" xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 justify-end transition-transform transform" viewBox="0 0 20 20" fill="currentColor" >
                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
            </svg>
        </button>
        <div x-show="bantuan7" class="text-stone-800 mt-4 text-md">
            <p>This is some additional information that can be toggled on and off.</p>
            <!-- Add more content as needed -->
        </div>
    </div>
</section>
@endsection
