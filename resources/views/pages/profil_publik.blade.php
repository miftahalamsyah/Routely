@extends('layouts.app')

@section('content')
<section class="justify-center px-5 text-center min-h-screen">
    <div class="mb-12">
        <div class="mx-auto flex items-center justify-center w-32 h-32 rounded-full bg-gradient-to-tl from-violet-500 to-orange-500 shadow-soft-2xl">
            <h1 class="text-stone-50 text-5xl font-semibold">{{ substr($name, 0, 1) }}{{ substr(strrchr($name, ' '), 1, 1) }}</h1>
        </div>
        <h1 class="mt-8 text-4xl text-stone-700">{{ $name }}</h1>
        <h2 class="mb-8 text-md text-stone-700">{{ $email }}</h2>
        @if (auth()->check() && auth()->user()->email == $email)
        <p class="text-md text-stone-700">Profil Publik Anda dapat diakses melalui</p>
        <p class="text-md text-stone-700">http://127.0.0.1:8000/profil_publik/{{ $slug }}</p>
        @endif
    </div>

    @include('includes.badges')

</section>
@endsection
