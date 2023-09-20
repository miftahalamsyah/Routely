@extends('layouts.app')

@section('content')

<main class="mt-20 row z-0 max-w-6xl align-center mx-auto animate-up">
    <a href="/dashboard/materis" class="flex m-3">
        <svg fill="#fafafa" xmlns="http://www.w3.org/2000/svg" width="20px" height="25px" viewBox="0 0 52 52" enable-background="new 0 0 52 52" xml:space="preserve">
            <path d="M48.6,23H15.4c-0.9,0-1.3-1.1-0.7-1.7l9.6-9.6c0.6-0.6,0.6-1.5,0-2.1l-2.2-2.2c-0.6-0.6-1.5-0.6-2.1,0 L2.5,25c-0.6,0.6-0.6,1.5,0,2.1L20,44.6c0.6,0.6,1.5,0.6,2.1,0l2.1-2.1c0.6-0.6,0.6-1.5,0-2.1l-9.6-9.6C14,30.1,14.4,29,15.3,29 h33.2c0.8,0,1.5-0.6,1.5-1.4v-3C50,23.8,49.4,23,48.6,23z"/>
        </svg>
        <p class="ml-2 font-semibold text-md text-gray-50">Back</p>
    </a>
    <div class="rounded-xl mx-3">
        <div class="row">
            <div class="col-md-12 p-5">
                <div class="border-0 shadow-sm">
                    <h4 class="font-semibold text-3xl text-center my-8">{{ $title }}</h4>
                    <p class="font-bold text-md">Deskripsi</p>
                    <p class="text-md">{{ $description }}</p>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
