@extends('layouts.student_layout')

@section('content')
<section class="w-full justify-center mx-auto px-4 lg:px-12 min-h-screen mt-2 text-stone-600">

    <div x-data="{ problemPosing1: false }" class="w-full mx-auto bg-stone-50 p-5 rounded-sm border border-r-4 border-b-4 border-stone-700 shadow-md my-4">
        <button @click="problemPosing1 = !problemPosing1" class="flex justify-between w-full">
            <h2 class="text-lg font-semibold">Persiapan</h2>
            <svg x-bind:class="{ 'rotate-180': problemPosing1 }" xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 justify-end transition-transform transform" viewBox="0 0 20 20" fill="currentColor" >
                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
            </svg>
        </button>
        <div x-show="problemPosing1" class="text-stone-800 mt-4 text-md">
            <p>Guru menyampaikan tujuan pembelajaran dan menggali pengetahuan awal siswa tentang materi.</p>
            <!-- Add more content as needed -->
        </div>
    </div>

    <div x-data="{ problemPosing2: false }" class="w-full mx-auto bg-stone-50 p-5 rounded-sm border border-r-4 border-b-4 border-stone-700 shadow-md my-4">
        <button @click="problemPosing2 = !problemPosing2" class="flex justify-between w-full">
            <h2 class="text-lg font-semibold">Pemahaman</h2>
            <svg x-bind:class="{ 'rotate-180': problemPosing2 }" xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 justify-end transition-transform transform" viewBox="0 0 20 20" fill="currentColor" >
                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
            </svg>
        </button>
        <div x-show="problemPosing2" class="text-stone-800 mt-4 text-md">
            <p>Penjelasan singkat guru tentang materi yang akan dipelajari oleh siswa</p>
            <!-- Add more content as needed -->
        </div>
    </div>

    <div x-data="{ problemPosing3: false }" class="w-full mx-auto bg-stone-50 p-5 rounded-sm border border-r-4 border-b-4 border-stone-700 shadow-md my-4">
        <button @click="problemPosing3 = !problemPosing3" class="flex justify-between w-full">
            <h2 class="text-lg font-semibold">Situasi Masalah</h2>
            <svg x-bind:class="{ 'rotate-180': problemPosing3 }" xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 justify-end transition-transform transform" viewBox="0 0 20 20" fill="currentColor" >
                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
            </svg>
        </button>
        <div x-show="problemPosing3" class="text-stone-800 mt-4 text-md">
            <p>Pemberian situasi masalah atau informasi terbuka kepada siswa, situasi masalah dapat berupa studi kasus atau informasi terbuka berupa teks dan gambar.</p>
            <!-- Add more content as needed -->
        </div>
    </div>

    <div x-data="{ problemPosing4: false }" class="w-full mx-auto bg-stone-50 p-5 rounded-sm border border-r-4 border-b-4 border-stone-700 shadow-md my-4">
        <button @click="problemPosing4 = !problemPosing4" class="flex justify-between w-full">
            <h2 class="text-lg font-semibold">Pengajuan Masalah</h2>
            <svg x-bind:class="{ 'rotate-180': problemPosing4 }" xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 justify-end transition-transform transform" viewBox="0 0 20 20" fill="currentColor" >
                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
            </svg>
        </button>
        <div x-show="problemPosing4" class="text-stone-800 mt-4 text-md">
            <p>Siswa mengajukan pertanyaan dari situasi masalah atau informasi terbuka yang diberikan oleh guru</p>
            <!-- Add more content as needed -->
        </div>
    </div>

    <div x-data="{ problemPosing5: false }" class="w-full mx-auto bg-stone-50 p-5 rounded-sm border border-r-4 border-b-4 border-stone-700 shadow-md my-4">
        <button @click="problemPosing5 = !problemPosing5" class="flex justify-between w-full">
            <h2 class="text-lg font-semibold">Pemecahan Masalah</h2>
            <svg x-bind:class="{ 'rotate-180': problemPosing5 }" xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 justify-end transition-transform transform" viewBox="0 0 20 20" fill="currentColor" >
                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
            </svg>
        </button>
        <div x-show="problemPosing5" class="text-stone-800 mt-4 text-md">
            <p>Siswa memberikan jawaban atau penyelesaian soal dari pertanyaan yang telah diajukan oleh siswa lainnya</p>
            <!-- Add more content as needed -->
        </div>
    </div>

    <div x-data="{ problemPosing6: false }" class="w-full mx-auto bg-stone-50 p-5 rounded-sm border border-r-4 border-b-4 border-stone-700 shadow-md my-4">
        <button @click="problemPosing6 = !problemPosing6" class="flex justify-between w-full">
            <h2 class="text-lg font-semibold">Verifikasi</h2>
            <svg x-bind:class="{ 'rotate-180': problemPosing6 }" xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 justify-end transition-transform transform" viewBox="0 0 20 20" fill="currentColor" >
                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
            </svg>
        </button>
        <div x-show="problemPosing6" class="text-stone-800 mt-4 text-md">
            <p>Guru mengecek pemahaman siswa terhadap materi yang dipelajari.</p>
            <!-- Add more content as needed -->
        </div>
    </div>
</section>
@endsection
