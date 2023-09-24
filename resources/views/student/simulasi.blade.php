@extends('layouts.student_layout')

@section('content')
<section class="mt-12 max-w-6xl justify-center mx-auto px-5">

    <nav class="flex my-2" aria-label="Breadcrumb">
    <ol class="inline-flex items-center space-x-1 md:space-x-3">
        <li class="inline-flex items-center">
        <a href="/student" class="inline-flex items-center text-sm font-medium text-stone-700 hover:text-student">
            <svg class="w-3 h-3 mr-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z"/>
                <path d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z"/>
            </svg>
            Dashboard
        </a>
        </li>
        <li aria-current="page">
        <div class="flex items-center">
            <svg class="w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
            </svg>
            <span class="ml-1 text-sm font-medium text-gray-500 md:ml-2 dark:text-gray-400">Simulasi</span>
        </div>
        </li>
    </ol>
    </nav>

    <h2 class="mb-4 text-2xl font-extrabold tracking-tight leading-none text-student md:text-3xl">Simulasi</h2>
    <!-- Content -->
    <div class="py-12 mb-12 px-4 mx-auto text-center z-20 animate-up w-full">
        <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl">Simulasi</h1>
        <p class="mb-8 text-xl">Koleksi sumber bantuan</p>
        <iframe src="https://networksimulator.vercel.app/" class="rounded-2xl my-4 shadow-md h-screen border border-gray-100" frameborder="0" width="100%"></iframe>
    </div>
</section>
@endsection
