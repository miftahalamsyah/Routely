@extends('layouts.app')

@section('content')
<section class="max-w-6xl justify-center mx-auto h-screen">
    <div class="px-10 py-48 mx-auto animate-up">
        <div class="w-full mx-auto text-center">
            <h1 class="clashdisplaymedium mb-6 text-4xl leading-none max-w-3xl mx-auto tracking-normal text-stone-800 sm:text-4xl md:text-5xl lg:text-5xl xl:text-5xl md:tracking-tight">Gunakan<span class="w-full text-transparent bg-clip-text bg-gradient-to-r from-violet-800 via-violet-600 to-violet-400 lg:inline"> Routely </span>untuk pengalaman belajar yang baru*</h1>
            <p class="px-0 mb-6 text-md text-stone-600 sm:text-md md:text-lg lg:text-lg lg:px-24"> Dengan Routely, Anda dapat memahami routing dalam perspektif Computational Thinking, membuka peluang baru untuk pengalaman lebih pada materi routing. </p>
            <div class="grid gap-3 w-full sm:inline-flex sm:justify-center">
                <a href="/login" class="clashdisplaymedium inline-block border border-r-4 border-b-4 border-stone-700 shadow bg-violet-300 px-12 py-3 text-sm font-medium transition hover:border-1 hover:translate-x-1 hover:translate-y-1">
                    Pelajari Lebih Lanjut
                </a>
            </div>
        </div>
    </div>
</section>

{{-- Computational Thinking --}}
<section class="mb-20 bg-violet-600 mx-0 sm:mx-0 md:mx-0 lg:mx-5 border-2 border-stone-700">
    <div class="max-w-6xl justify-center mx-auto px-4 py-8 sm:px-6 sm:py-12 lg:px-8 lg:py-16">
        <div class="grid grid-cols-1 gap-y-8 lg:grid-cols-2 lg:items-center lg:gap-x-16">
            <div class="mx-auto py-12 max-w-lg text-center lg:mx-0 ltr:lg:text-left rtl:lg:text-right lg:border-r-2 border-stone-700">
                <h1 class="clashdisplaymedium text-stone-50 text-3xl sm:text-3xl md:text-4xl lg:text-4xl">Berfokus pada Berpikir Komputasi</h1>

                <p class="my-4 text-stone-50">
                    Memahami, merumuskan, dan menyelesaikan masalah dengan pendekatan komputasional.
                </p>

                <a href="/berpikir-komputasi" class="clashdisplaymedium inline-block border border-r-4 border-b-4 border-stone-700 shadow bg-orange-300 px-12 py-3 text-sm font-medium transition hover:border-1 hover:translate-x-1 hover:translate-y-1">
                    Selengkapnya
                </a>
            </div>

            <div class="grid grid-cols-2 gap-4 sm:grid-cols-2">
                <a class="block bg-stone-50 p-4 shadow hover:shadow-lg border border-r-4 border-b-4 border-stone-700" href="/berpikir-komputasi/#dekomposisi">
                    <span class="inline-block rounded-lg bg-stone-50">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                            <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"></path>
                        </svg>
                    </span>
                    <h2 class="clashdisplaymedium mt-2 text-lg">Dekomposisi</h2>
                    <p class="sm:mt-1 text-xs sm:text-xs md:text-sm sm:text-stone-600">
                    Lorem ipsum dolor sit amet consectetur.
                    </p>
                </a>

                <a class="block bg-stone-50 p-4 shadow hover:shadow-lg border border-r-4 border-b-4 border-stone-700" href="/berpikir-komputasi/#abstraksi">
                    <span class="inline-block rounded-lg bg-stone-50">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                            <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"></path>
                        </svg>
                    </span>
                    <h2 class="clashdisplaymedium mt-2 text-lg">Abstraksi</h2>
                    <p class="sm:mt-1 text-xs sm:text-xs md:text-sm sm:text-stone-600">
                    Lorem ipsum dolor sit amet consectetur.
                    </p>
                </a>

                <a class="block bg-stone-50 p-4 shadow hover:shadow-lg border border-r-4 border-b-4 border-stone-700" href="/berpikir-komputasi/#pengenalan-pola">
                    <span class="inline-block rounded-lg bg-stone-50">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                            <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"></path>
                        </svg>
                    </span>
                    <h2 class="clashdisplaymedium mt-2 text-lg">Pengenalan Pola</h2>
                    <p class="sm:mt-1 text-xs sm:text-xs md:text-sm sm:text-stone-600">
                    Lorem ipsum dolor sit amet consectetur.
                    </p>
                </a>

                <a class="block bg-stone-50 p-4 shadow hover:shadow-lg border border-r-4 border-b-4 border-stone-700" href="/berpikir-komputasi/#algoritma">
                    <span class="inline-block rounded-lg bg-stone-50">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                            <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"></path>
                        </svg>
                    </span>
                    <h2 class="clashdisplaymedium mt-2 text-lg">Algoritma</h2>
                    <p class="sm:mt-1 text-xs sm:text-xs md:text-sm sm:text-stone-600">
                    Lorem ipsum dolor sit amet consectetur.
                    </p>
                </a>
            </div>
        </div>
    </div>
</section>

{{-- Problem Posing --}}
<section class="mb-20">
    <div class="max-w-6xl justify-center mx-auto px-4 py-8 sm:px-6 sm:py-12 lg:px-8 lg:py-16">
        <div class="mx-auto max-w-3xl text-left lg:mx-0 my-4">
            <h1 class="clashdisplaymedium text-stone-700 text-3xl sm:text-3xl md:text-4xl lg:text-4xl">Dengan Menerapkan Problem Posing</h1>
            <p class="mt-4 text-stone-600">
                Mengembangkan kreativitas dan pemikiran analitis dengan merumuskan masalah-masalah yang dapat diselesaikan melalui pendekatan komputasional.
            </p>
        </div>

        <div class="grid grid-cols-2 gap-4 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3">
            <a class="block bg-stone-50 p-4 shadow hover:shadow-lg border border-r-4 border-b-4 border-stone-700" href="/problem-posing">
                <span class="inline-block rounded-lg bg-stone-50">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                        <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"></path>
                    </svg>
                </span>
                <h2 class="clashdisplaymedium mt-2 text-lg">Pengenalan</h2>
                <p class="sm:mt-1 text-xs sm:text-xs md:text-sm sm:text-stone-600">
                Tujuan pembelajaran dan menggali pengetahuan awal
                </p>
            </a>

            <a class="block bg-stone-50 p-4 shadow hover:shadow-lg border border-r-4 border-b-4 border-stone-700" href="/problem-posing">
                <span class="inline-block rounded-lg bg-stone-50">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                        <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"></path>
                    </svg>
                </span>
                <h2 class="clashdisplaymedium mt-2 text-lg">Pemahaman</h2>
                <p class="sm:mt-1 text-xs sm:text-xs md:text-sm sm:text-stone-600">
                Pemaparan materi secara singkat
                </p>
            </a>

            <a class="block bg-stone-50 p-4 shadow hover:shadow-lg border border-r-4 border-b-4 border-stone-700" href="/problem-posing">
                <span class="inline-block rounded-lg bg-stone-50">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                        <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"></path>
                    </svg>
                </span>
                <h2 class="clashdisplaymedium mt-2 text-lg">Situasi Masalah</h2>
                <p class="sm:mt-1 text-xs sm:text-xs md:text-sm sm:text-stone-600">
                Pemberian situasi masalah atau informasi terbuka
                </p>
            </a>

            <a class="block bg-stone-50 p-4 shadow hover:shadow-lg border border-r-4 border-b-4 border-stone-700" href="/problem-posing">
                <span class="inline-block rounded-lg bg-stone-50">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                        <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"></path>
                    </svg>
                </span>
                <h2 class="clashdisplaymedium mt-2 text-lg">Pengajuan Masalah</h2>
                <p class="sm:mt-1 text-xs sm:text-xs md:text-sm sm:text-stone-600">
                Pengajuan pertanyaan dari situasi masalah
                </p>
            </a>

            <a class="block bg-stone-50 p-4 shadow hover:shadow-lg border border-r-4 border-b-4 border-stone-700" href="/problem-posing">
                <span class="inline-block rounded-lg bg-stone-50">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                        <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"></path>
                    </svg>
                </span>
                <h2 class="clashdisplaymedium mt-2 text-lg">Pemecahan Masalah</h2>
                <p class="sm:mt-1 text-xs sm:text-xs md:text-sm sm:text-stone-600">
                Penyelesaian soal dari pertanyaan yang diajukan
                </p>
            </a>

            <a class="block bg-stone-50 p-4 shadow hover:shadow-lg border border-r-4 border-b-4 border-stone-700" href="/problem-posing">
                <span class="inline-block rounded-lg bg-stone-50">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                        <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"></path>
                    </svg>
                </span>
                <h2 class="clashdisplaymedium mt-2 text-lg">Verifikasi</h2>
                <p class="sm:mt-1 text-xs sm:text-xs md:text-sm sm:text-stone-600">
                Pengecekan pemahaman
                </p>
            </a>
        </div>
    </div>
</section>
@endsection
