<title>Routely</title>

@extends('layouts.app')

@section('content')
<section class="mt-20 max-w-6xl justify-center mx-auto">
    <div class="px-10 py-24 mx-auto animate-up min-h-screen">
        <div class="w-full mx-auto text-center">
            <h1 class="mb-6 text-5xl font-extrabold leading-none max-w-5xl mx-auto tracking-normal text-gray-900 sm:text-xl md:text-5xl lg:text-7xl md:tracking-tight">Gunakan<span class="w-full text-transparent bg-clip-text bg-gradient-to-r from-violet-700 via-purple-500 to-violet-300 lg:inline"> Routely </span>untuk pengalaman belajar yang baru*</h1>
            <p class="px-0 mb-6 text-lg text-gray-600 md:text-xl lg:px-24"> Dengan Routely, Anda dapat memahami routing dalam perspektif Computational Thinking, membuka peluang baru untuk pengalaman lebih pada materi routing. </p>
            <div class="grid gap-3 w-full sm:inline-flex sm:justify-center">
                <a class="inline-block rounded-3xl shadow bg-violet-200 px-12 py-3 text-sm font-medium text-student transition hover:bg-violet-300" href="/login">
                    Pelajari Lebih Lanjut
                </a>
            </div>
        </div>
    </div>
</section>

{{-- Computational Thinking --}}
<section>
    <div class="max-w-screen-xl px-4 py-8 sm:px-6 sm:py-12 lg:px-8 lg:py-16">
        <div class="grid grid-cols-1 gap-y-8 lg:grid-cols-2 lg:items-center lg:gap-x-16">
            <div class="mx-auto max-w-lg text-center lg:mx-0 ltr:lg:text-left rtl:lg:text-right">
                <h2 class="text-stone-800 text-3xl font-bold sm:text-4xl">Berfokus pada Berpikir Komputasi</h2>

                <p class="mt-4 text-stone-700">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut vero
                    aliquid sint distinctio iure ipsum cupiditate? Quis, odit assumenda?
                    Deleniti quasi inventore, libero reiciendis minima aliquid tempora.
                    Obcaecati, autem.
                </p>

                <a href="/login" class="mt-8 inline-block rounded-3xl shadow bg-violet-200 px-12 py-3 text-sm font-medium text-student transition hover:bg-violet-300">
                    Coba Sekarang
                </a>
            </div>

            <div class="grid grid-cols-2 gap-4 sm:grid-cols-2">
                <a class="block rounded-xl bg-stone-50 p-4 shadow hover:shadow-lg" href="/berpikir-komputasi/dekomposisi">
                    <span class="inline-block rounded-lg bg-gray-50 p-3">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                            <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"></path>
                        </svg>
                    </span>
                    <h2 class="mt-2 font-bold">Dekomposisi</h2>
                    <p class="hidden sm:mt-1 sm:block sm:text-sm sm:text-gray-600">
                    Lorem ipsum dolor sit amet consectetur.
                    </p>
                </a>

                <a class="block rounded-xl bg-stone-50 p-4 shadow hover:shadow-lg" href="/berpikir-komputasi/dekomposisi">
                    <span class="inline-block rounded-lg bg-gray-50 p-3">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                            <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"></path>
                        </svg>
                    </span>
                    <h2 class="mt-2 font-bold">Abstraksi</h2>
                    <p class="hidden sm:mt-1 sm:block sm:text-sm sm:text-gray-600">
                    Lorem ipsum dolor sit amet consectetur.
                    </p>
                </a>

                <a class="block rounded-xl bg-stone-50 p-4 shadow hover:shadow-lg" href="/berpikir-komputasi/dekomposisi">
                    <span class="inline-block rounded-lg bg-gray-50 p-3">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                            <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"></path>
                        </svg>
                    </span>
                    <h2 class="mt-2 font-bold">Pengenalan Pola</h2>
                    <p class="hidden sm:mt-1 sm:block sm:text-sm sm:text-gray-600">
                    Lorem ipsum dolor sit amet consectetur.
                    </p>
                </a>

                <a class="block rounded-xl bg-stone-50 p-4 shadow hover:shadow-lg" href="/berpikir-komputasi/dekomposisi">
                    <span class="inline-block rounded-lg bg-gray-50 p-3">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                            <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"></path>
                        </svg>
                    </span>
                    <h2 class="mt-2 font-bold">Algoritma</h2>
                    <p class="hidden sm:mt-1 sm:block sm:text-sm sm:text-gray-600">
                    Lorem ipsum dolor sit amet consectetur.
                    </p>
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
