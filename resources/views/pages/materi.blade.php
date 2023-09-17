@extends('layouts.app')

@section('content')
<section class="mt-20 max-w-6xl justify-center mx-auto">
    <!-- Jumbotron -->
    <div class="py-12 pt-20 px-4 mx-auto text-center z-20">
        <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl">Materi Ajar</h1>
        <p class="mb-8 text-xl">Koleksi Materi</p>
    </div>

    <!-- card -->
    <div class="grid md:grid-cols-3 mx-auto flex justify-center">
        <a href="#" class="gradient-border m-5 block max-w-sm p-6 bg-white border-4 rounded-full transform hover:scale-105 transition-transform">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Noteworthy technology acquisitions 2021</h5>
            <p class="font-normal text-gray-700">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
        </a>
    </div>


</section>
@endsection

<style>

.gradient-border {
    border: 4px solid transparent;
    border-image: linear-gradient(45deg, #EE82EE, #34d399 );
    border-image-slice: 1;
    position: relative;
    overflow: hidden;
}

</style>