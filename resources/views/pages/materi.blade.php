@extends('layouts.app')

@section('content')
<section class="mt-20 max-w-6xl justify-center mx-auto">
    <!-- Jumbotron -->
    <div class="py-12 pt-20 px-4 mx-auto text-center z-20 animate-up">
        <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl">Materi Ajar</h1>
        <p class="mb-8 text-xl">Koleksi Materi</p>
    </div>

    <!-- card -->
    <div class="grid md:grid-cols-3 mx-auto flex justify-center">
    @forelse ($materis as $materi)
            <a href="/materi/{{ $materi->slug }}" class="m-5 max-w-sm block flex flex-col items-center justify-center sm:flex-row">
                <div class="flex flex-col overflow-hidden transition duration-250 ease-in-out transform bg-gray-50 rounded-xl border border-gray-100 hover:scale-105 hover:border-violet-400 hover:border-2">
                    <img class="h-56 rounded-t-lg" alt="article image"
                        src="https://images.unsplash.com/photo-1472437774355-71ab6752b434?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=967&amp;q=80">
                    <div class="px-6 pt-4 text-xl font-bold">
                        <span>{{ $materi->title }}</span>
                    </div>
                    <div class="px-6 py-4">
                        <div class="overflow-hidden h-24 ...">{{ $materi->description }}</div>
                    </div>
                </div>
            </a>
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
