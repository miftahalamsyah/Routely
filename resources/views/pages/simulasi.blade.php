@extends('layouts.app')

@section('content')
<section class="mt-20 max-w-6xl justify-center mx-auto px-5">
<div class="py-12 mb-12 px-4 mx-auto text-center z-20 animate-up">
   <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl">Simulasi</h1>
   <p class="mb-8 text-xl">Koleksi sumber bantuan</p>
   <iframe src="https://networksimulator.vercel.app/" class="rounded-3xl shadow-md my-4 h-screen border border-gray-100" frameborder="0" width="100%"></iframe>
</div>
</section>
@endsection