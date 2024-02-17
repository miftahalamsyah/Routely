@extends('layouts.app')

@section('content')
<section class="justify-center px-5 text-center min-h-screen my-24">
    <div class="">
        <div class="mx-auto flex items-center justify-center w-32 h-32 rounded-full bg-gradient-to-tl from-violet-500 to-orange-500 shadow-soft-2xl">
            <h1 class="text-stone-50 text-5xl font-semibold">{{ substr($name, 0, 1) }}{{ substr(strrchr($name, ' '), 1, 1) }}</h1>
        </div>
        <h1 class="clashdisplaymedium mt-8 text-4xl text-stone-700">{{ $name }}</h1>
        <h2 class="mb-8 text-md text-stone-700">{{ $email }}</h2>
        @if (auth()->check() && auth()->user()->email == $email)
        <p class="text-md text-stone-700">Profil Publik Anda dapat diakses melalui</p>
        <p class="text-md text-stone-700">https://routely.me/profil_publik/{{ $slug }}</p>
        @endif
    </div>

    <div class="my-8">
        <p class="text-2xl tracking-tight leading-none text-stone-700"><span class="w-full text-transparent bg-clip-text bg-gradient-to-r from-violet-800 via-violet-600 to-violet-400 lg:inline"> Routely </span>League</p>
        <p class="text-md font-semibold text-stone-700">{{ $totalScore * 69 }} points</p>
    </div>
</section>
@endsection
