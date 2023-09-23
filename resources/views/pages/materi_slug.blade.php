@extends('layouts.app')

@section('content')

<main class="mt-20 row z-0 max-w-6xl align-center mx-auto animate-up">
    <div class="rounded-xl mx-3">
        <div class="row">
            <div class="col-md-12 p-5">
                <div class="border-0 shadow-sm">
                    <h4 class="font-semibold text-3xl text-center my-8">{{ $title }}</h4>
                    <p class="font-bold text-md">Deskripsi</p>
                    <p class="text-md">{{ $description }}</p>
                    @if ($pdf_file)
                        <p class="font-semibold text-md mt-4">Materi di atas dapat diunduh dalam bentuk .pdf di bawah ini</p>
                        <iframe src="{{ asset('storage/pdfs/' . $pdf_file) }}" class="rounded-xl my-4" frameborder="0" width="100%" height="600"></iframe>
                    @endif
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
