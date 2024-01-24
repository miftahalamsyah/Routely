@extends('layouts.student_layout')

@section('content')

<section class="w-full justify-center mx-auto px-4 lg:px-12">
    <div class="rounded-xl">
        <div class="row">
            <div class="col-md-12 py-5">
                <div class="border-0">
                    <div class="bg-stone-50 p-5 my-4 rounded-2xl shadow-md">
                        <p class="font-bold text-md">Deskripsi</p>
                        <p class="text-md">{{ $description }}</p>
                    </div>
                    @if ($tugas_file)
                    <div class="bg-stone-50 p-5 my-4 rounded-2xl shadow-md">
                        <p class="font-semibold text-md mt-4">File LKPD dapat diunduh dalam bentuk .pdf di bawah ini</p>
                        <a href="{{ asset('storage/tugas/' . $tugas_file) }}" target="_blank" class="rounded-xl my-4 bg-student text-stone-50 px-4 py-2 inline-block hover:bg-student-dark">
                            {{ $tugas_file }}
                        </a>
                    </div>
                    @endif
                    <div class="bg-stone-50 p-5 my-4 rounded-2xl shadow-md">
                        <p class="font-bold text-md">Deskripsi</p>
                        <p class="text-md">{{ $description }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
