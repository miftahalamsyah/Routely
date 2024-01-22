@extends('layouts.student_layout')

@section('content')
<section class="min-h-screen mx-auto mt-2 px-2 lg:px-12">
    <p class="font-normal text-sm text-stone-700">Menunjukkan {{ $results->count() }} hasil pencarian untuk</p>
    <p class="font-semibold text-lg text-stone-900">{{ $query }}</p>

    @if($results->isEmpty())
    <div class="bg-gray-100 text-gray-600 p-2 rounded-xl text-center mt-12">
        Hasil pencarian tidak tersedia.
    </div>
    @else
        <ul class="mt-4">
            @foreach($results as $result)
                <div class="relative break-words bg-stone-50 border shadow-lg rounded-2xl my-2 p-5">
                    <div class="flex-none">
                        <h2 class="text-stone-300 font-normal text-md text-right ">Materi</h2>
                        <a href="{{ route('student.materi.show', $result->slug) }}" class="text-stone-900 font-semibold text-lg">
                            {{ $result->title }}
                        </a>
                        <p class="text-stone-800 text-sm">
                            {{ $result->description }}
                        </p>
                    </div>
                </div>
            @endforeach
        </ul>
    @endif
</section>


@endsection
