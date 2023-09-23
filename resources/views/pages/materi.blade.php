@extends('layouts.app')

@section('content')
<section class="mt-20 max-w-6xl justify-center mx-auto animate-up">
    <!-- Jumbotron -->
    <div class="py-12 pt-20 px-4 mx-auto text-center z-20">
        <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl">Materi Ajar</h1>
        <p class="mb-8 text-xl">Koleksi Materi</p>
    </div>

    <!-- card -->
    <div class="grid md:grid-cols-3 mx-auto flex justify-center">
    @forelse ($materis as $materi)
        <!-- individual card -->
        <div class="relative flex flex-col min-w-0 break-words bg-white border shadow-soft-xl rounded-2xl bg-clip-border mx-2 my-4 hover:bg-gray-100">
            <div class="relative">
                <a class="block shadow-xl rounded-2xl">
                    <img src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-dashboard/assets/img/home-decor-1.jpg" alt="img-blur-shadow" class="max-w-full shadow-soft-2xl rounded-2xl" />
                </a>
            </div>
            <div class="flex-auto px-1 pt-6">
                <a href="/materi/{{ $materi->slug }}">
                    <h2 class="text-xl font-bold p-2">{{ $materi->title }}</h2>
                </a>
                <p class="mb-6 px-2 leading-normal text-sm overflow-hidden h-24 ...">{{ $materi->description }}</p>
                <div class="flex items-center justify-between px-2 pb-4">
                    <a href="/materi/{{ $materi->slug }}">
                    <button class="mr-2 text-sm relative inline-flex items-center justify-center px-4 py-2 overflow-hidden font-bold text-stone-900 transition duration-300 ease-out border border-violet-500 rounded-3xl group">
                        <span class="absolute inset-0 flex items-center justify-center w-full h-full text-stone-50 duration-300 -translate-x-full bg-violet-500 group-hover:translate-x-0 ease">
                            Lihat Materi
                        </span>
                        <span class="absolute flex items-center justify-center w-full h-full text-violet-500 transition-all duration-300 transform group-hover:translate-x-full ease">Lihat Materi</span>
                        <span class="relative invisible">Lihat Materi</span>
                    </button>
                    </a>
                </div>
            </div>
        </div>
    @empty
        <tr>
            <td colspan="3" class="px-6 py-4 whitespace-nowrap text-center">
                <div class="bg-gray-100 text-gray-600 p-2 rounded-xl">
                    Data materi belum tersedia.
                </div>
            </td>
        </tr>
    @endforelse
    </div>


</section>
@endsection