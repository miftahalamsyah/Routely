@extends('layouts.student_layout')

@section('content')

<section class="w-full justify-center mx-auto px-4 lg:px-12">
    <div class="rounded-xl">
        <div class="row">
            <div class="col-md-12 py-5">
                <div class="border-0">
                    <p class="font-bold text-md">Deskripsi</p>
                    <p class="text-md">{{ $description }}</p>
                    @if ($tugas_file)
                        <p class="font-semibold text-md mt-4">File LKPD dapat diunduh dalam bentuk .pdf di bawah ini</p>
                        <iframe src="{{ asset('storage/tugas/' . $tugas_file) }}" class="rounded-xl my-4" frameborder="0" width="100%" height="600"></iframe>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
