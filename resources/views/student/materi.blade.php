@extends('layouts.student_layout')

@section('content')
<section class="mt-12 max-w-6xl justify-center mx-auto px-5 min-h-screen">

    <nav class="flex my-2" aria-label="Breadcrumb">
    <ol class="inline-flex items-center space-x-1 md:space-x-3">
        <li class="inline-flex items-center">
        <a href="/student" class="inline-flex items-center text-sm font-medium text-stone-700 hover:text-student">
            <svg class="w-3 h-3 mr-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z"/>
                <path d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z"/>
            </svg>
            Dashboard
        </a>
        </li>
        <li aria-current="page">
        <div class="flex items-center">
            <svg class="w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
            </svg>
            <span class="ml-1 text-sm font-medium text-gray-500 md:ml-2 dark:text-gray-400">Materi</span>
        </div>
        </li>
    </ol>
    </nav>

    <h2 class="mb-4 text-2xl font-extrabold tracking-tight leading-none text-student md:text-3xl">Materi</h2>

    <div class="grid md:grid-cols-3 mx-auto flex justify-center">
    @forelse ($materis as $materi)
        <!-- individual card -->
        <div class="relative flex flex-col min-w-0 break-words bg-white border shadow-lg rounded-2xl mx-2 my-4 hover:bg-gray-100">
            <div class="relative">
                <a class="block shadow-xl rounded-2xl">
                    <img src="{{ asset('storage/thumbnails/' . $materi->thumbnail_image) }}" alt="{{ $materi-> title }}" class="w-full h-32 object-cover shadow-soft-2xl rounded-2xl" />
                </a>
            </div>
            <div class="flex-auto px-1 pt-6">
                <a href="/student/materi/{{ $materi->slug }}">
                    <h2 class="text-xl font-bold p-2">{{ $materi->title }}</h2>
                </a>
                <p class="mb-6 px-2 leading-normal text-sm overflow-hidden h-24 ...">{{ $materi->description }}</p>
                <div class="flex items-center justify-between px-2 pb-4">
                    <a href="/student/materi/{{ $materi->slug }}">
                    <button class="mr-2 text-sm relative inline-flex items-center justify-center px-4 py-2 overflow-hidden font-bold text-stone-900 transition duration-300 ease-out border bg-violet-200 rounded-xl group">
                        <span class="absolute inset-0 flex items-center justify-center w-full h-full text-stone-50 duration-300 -translate-x-full bg-orange-500 group-hover:translate-x-0 ease">
                            Lihat Materi
                        </span>
                        <span class="absolute flex items-center justify-center w-full h-full text-student transition-all duration-300 transform group-hover:translate-x-full ease">Lihat Materi</span>
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
