@extends('layouts.app')
@section('content')
    @php
        $title = "404 Not Found";
    @endphp
    <section class="h-full w-full text-center py-24 px-4 sm:px-6 lg:px-8 items-center justify-center content-center">
        <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl">404</h1>
        <h1 class="block text-2xl font-bold text-white"></h1>
        <p class="mt-3 text-stone-700">Oops, something went wrong.</p>
        <p class="text-stone-700">Sorry, we couldn't find your page.</p>
    </section>
@endsection
