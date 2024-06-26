@extends('layouts.student_layout')

@section('content')
<section class="w-full justify-center mx-auto px-4 lg:px-12 min-h-screen">
    <div class="grid md:grid-cols-3 mx-auto flex justify-center">
    @forelse ($materis as $materi)
        <!-- individual card -->
        <div class="relative flex flex-col min-w-0 break-words bg-stone-50 border border-r-4 border-b-4 border-stone-700 shadow-sm rounded-sm mx-2 my-4">
            <div class="relative">
                <a class="block shadow-sm">
                    <img src="{{ asset('storage/thumbnails/' . $materi->thumbnail_image) }}" alt="{{ $materi-> title }}" class="w-full h-32 object-cover rounded-xs" />
                </a>
            </div>
            <div class="flex-auto px-1 pt-6">
                <a href="/student/materi/{{ $materi->slug }}" class="hover:underline">
                    <p class="pt-2 px-2 text-xs text-stone-500">Pertemuan ke-{{$materi->pertemuan_id}}</p>
                    <h2 class="text-xl font-bold p-2">{{ $materi->title }}</h2>
                </a>
                <p class="mb-6 px-2 leading-normal text-sm overflow-hidden h-24 ...">{{ $materi->description }}</p>
                <div class="absolute bottom-0 left-0 my-4 px-2">
                    <a href="/student/materi/{{ $materi->slug }}">
                        <button class="mr-2 text-sm relative inline-flex items-center justify-center px-4 py-2 overflow-hidden font-bold text-stone-50 transform hover:translate-y-[-5px] transition-transform duration-300 ease-in-out shadow-md bg-violet-500 hover:bg-violet-600 border border-r-4 border-b-4 border-stone-700">
                            Lihat Materi
                        </button>
                    </a>
                </div>
            </div>
        </div>
    @empty
        <div class="px-6 py-4 whitespace-nowrap text-center">
            <div class="bg-gray-100 text-gray-600 p-2 rounded-xl mx-auto">
                Data materi belum tersedia.
            </div>
        </div>
    @endforelse
    </div>
</section>
@endsection
