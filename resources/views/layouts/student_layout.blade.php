<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="app.css">
    {{-- <script src="{{ mix('js/app.js') }}" defer></script> --}}
    <script src="{{ asset('js/loading-bar.js') }}" async></script>
    {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <title>{{ $title }} | Routely</title>
</head>
<body class="">
    @include('sweetalert::alert')
    <div id="sidebar-grey" class="hidden transition-all duration-300 transform fixed top-0 left-0 right-0 bottom-0 bg-stone-800 opacity-50 z-40 pointer-events-none"></div>
    {{-- Sidebar --}}
    <div id="logo-sidebar" class="transition-all duration-300 transform fixed top-5 left-5 bottom-5 z-40 w-24 bg-stone-50 border-r pt-7 pb-10 rounded-3xl shadow-md hidden md:block">
        {{-- logo --}}
        <div class="text-center relative group">
            <a class="flex-none text-xl font-extrabold" href="/" aria-label="Brand">
                <svg class="mx-auto" width="24" height="24" fill="#5c578c" viewBox="0 0 512 512"><path d="M512 96c0 50.2-59.1 125.1-84.6 155c-3.8 4.4-9.4 6.1-14.5 5H320c-17.7 0-32 14.3-32 32s14.3 32 32 32h96c53 0 96 43 96 96s-43 96-96 96H139.6c8.7-9.9 19.3-22.6 30-36.8c6.3-8.4 12.8-17.6 19-27.2H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320c-53 0-96-43-96-96s43-96 96-96h39.8c-21-31.5-39.8-67.7-39.8-96c0-53 43-96 96-96s96 43 96 96zM117.1 489.1c-3.8 4.3-7.2 8.1-10.1 11.3l-1.8 2-.2-.2c-6 4.6-14.6 4-20-1.8C59.8 473 0 402.5 0 352c0-53 43-96 96-96s96 43 96 96c0 30-21.1 67-43.5 97.9c-10.7 14.7-21.7 28-30.8 38.5l-.6 .7zM128 352a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zM416 128a32 32 0 1 0 0-64 32 32 0 1 0 0 64z"/></svg>
            </a>
            <div class="tooltip hidden group-hover:block absolute top-0 ml-16 bg-student shadow-md font-semibold text-stone-50 p-1 text-xs rounded-md">Routely</div>
        </div>
        {{-- end logo --}}

        {{-- navigation icon --}}
        <div class="flex flex-col justify-center items-center h-full">
            <ul class="space-y-1.5">
                <li class="relative group">
                    <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm rounded-full border bg-stone-100 text-stone-400   {{ request()->routeIs('student.index') ? 'bg-student text-stone-50' : '' }}" href="/student">
                        <svg class="mx-auto w-5 h-5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5.5h1a.5.5 0 0 1 .5.5z" />
                            <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
                        </svg>
                    </a>
                    <div class="tooltip hidden group-hover:block absolute top-2 ml-12 bg-stone-600 shadow-md text-stone-50 p-1 text-xs rounded-md">
                        Dashboard
                    </div>
                </li>
                <li class="relative group">
                    <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm rounded-full border bg-stone-100 text-stone-400   {{ request()->routeIs('student.materi', 'student.materi.show', 'student.tugas.index', 'student.pertemuan', 'student.pertemuan.show', 'student.tugas.show') ? 'bg-student text-stone-50' : '' }}" href="/student/pertemuan">
                        <svg class="mx-auto w-5 h-5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M11 6.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-5 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z" />
                            <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z" />
                        </svg>
                    </a>
                    <div class="tooltip hidden group-hover:block absolute top-2 ml-12 bg-stone-600 shadow-md text-stone-50 p-1 text-xs rounded-md">
                        Pertemuan
                    </div>
                </li>
                <li class="relative group">
                    <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm rounded-full border bg-stone-100 text-stone-400   {{ request()->routeIs('student.refleksi') ? 'bg-student text-stone-50' : '' }}" href="/student/refleksi">
                        <svg width="20" height="20" fill="currentColor" viewBox="0 0 76 76" xmlns="http://www.w3.org/2000/svg" baseProfile="full" xml:space="preserve">
                            <path d="m21.537 46.008-2.408 10.435L17.5 54H6.863a34.963 34.963 0 0 0 1.738 3H19l.433-.1 9.96-2.298c-1.316-3.96-3.523-7.512-7.856-8.594ZM39 53l30.426-30.426a35.14 35.14 0 0 0-9.859-12.141L31 39v6h8v8ZM29 38 57.839 9.162a34.97 34.97 0 0 0-4.413-2.588L24 36v2h5Z"/>
                        </svg>
                    </a>
                    <div class="tooltip hidden group-hover:block absolute top-2 ml-12 bg-stone-600 shadow-md text-stone-50 p-1 text-xs rounded-md">
                        Lembar Refleksi
                    </div>
                </li>
                <li class="relative group">
                    <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm rounded-full border bg-stone-100 text-stone-400   {{ request()->routeIs('student.tes.index', 'student.tes.show', 'student.tes.confirm') ? 'bg-student text-stone-50' : '' }}" href="/student/tes">
                        <svg class="mx-auto w-5 h-5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 490 490">
                            <path d="M447.5 205h-55V95h-.024c-.001-2.601-.993-5.159-2.905-7.071l-85-85c-1.913-1.912-4.47-2.904-7.071-2.905V0h-255c-5.523 0-10 4.477-10 10v470c0 5.523 4.477 10 10 10h340c5.523 0 10-4.477 10-10V285h55c5.523 0 10-4.477 10-10v-60c0-5.523-4.477-10-10-10zm-140-170.858L358.358 85H307.5V34.142zM372.501 470H52.5V20h235v75c0 5.523 4.477 10 10 10h75v100h-210v.018a9.967 9.967 0 0 0-4.472 1.038l-60 30a10 10 0 0 0 0 17.888l60 30A9.99 9.99 0 0 0 162.5 285h210.001v185zM152.5 231.18v27.64L124.861 245l27.639-13.82zm240 33.82h-220v-10h220v10zm0-30h-220v-10h220v10zm45 30h-25v-40h25v40z"/><path d="M82.5 55h60v20h-60zm0 40h130v20h-130z"/>
                        </svg>
                    </a>
                    <div class="tooltip hidden group-hover:block absolute top-2 ml-12 bg-stone-600 shadow-md text-stone-50 p-1 text-xs rounded-md">
                        Tes
                    </div>
                </li>
                <li class="relative group">
                    <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm rounded-full border bg-stone-100 text-stone-400   {{ request()->routeIs('student.simulasi') ? 'bg-student text-stone-50' : '' }}" href="/student/simulasi">
                        <svg class="mx-auto w-5 h-5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M15 6H9a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V7a1 1 0 0 0-1-1Zm-1 4h-4V8h4Zm3-8H5a1 1 0 0 0-1 1v18a1 1 0 0 0 1 1h12a3 3 0 0 0 3-3V5a3 3 0 0 0-3-3Zm1 17a1 1 0 0 1-1 1H6V4h11a1 1 0 0 1 1 1Z"/>
                        </svg>
                    </a>
                    <div class="tooltip hidden group-hover:block absolute top-2 ml-12 bg-stone-600 shadow-md text-stone-50 p-1 text-xs rounded-md">
                        Simulasi
                    </div>
                </li>
                <li class="relative group">
                    <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm rounded-full border bg-stone-100 text-stone-400   {{ $title === "Profil" ? 'bg-student text-stone-50' : '' }}" href="/student/profile">
                        <svg width="16" height="16" fill="currentColor" class="mx-auto w-5 h-5" viewBox="0 0 35 35" data-name="Layer 2" xmlns="http://www.w3.org/2000/svg"><path d="M17.5 16.383a8.067 8.067 0 1 1 8.067-8.067 8.076 8.076 0 0 1-8.067 8.067Zm0-13.633a5.567 5.567 0 1 0 5.567 5.566A5.573 5.573 0 0 0 17.5 2.75Zm13.977 32a1.25 1.25 0 0 1-1.23-1.037A12.663 12.663 0 0 0 17.5 22.852 12.663 12.663 0 0 0 4.753 33.713a1.25 1.25 0 0 1-2.464-.426A15.1 15.1 0 0 1 17.5 20.352a15.1 15.1 0 0 1 15.211 12.935 1.25 1.25 0 0 1-1.02 1.444 1.2 1.2 0 0 1-.214.019Z"/></svg>
                    </a>
                    <div class="tooltip hidden group-hover:block absolute top-2 ml-12 bg-stone-600 shadow-md text-stone-50 p-1 text-xs rounded-md">
                        Profil
                    </div>
                </li>
                <li class="relative group">
                    <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm rounded-full border bg-stone-100 text-stone-400   {{ $title === "Kelompok" ? 'bg-student text-stone-50' : '' }}" href="/student/kelompok">
                        <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto w-5 h-5" width="16" height="16" viewBox="0 0 1200 1200" fill="currentColor" xml:space="preserve">
                            <path d="M596.847 188.488c-103.344 0-187.12 97.81-187.12 218.465 0 83.678 40.296 156.352 99.468 193.047l-68.617 31.801-182.599 84.688c-17.64 8.821-26.444 23.778-26.444 44.947v201.102c1.451 25.143 16.537 48.577 40.996 48.974h649.62c27.924-2.428 42.05-24.92 42.325-48.974V761.436c0-21.169-8.804-36.126-26.443-44.947l-175.988-84.688-73.138-34.65c56.744-37.521 95.061-108.624 95.061-190.197-.001-120.656-83.778-218.466-187.121-218.466zm-301.824 76.824c-44.473 1.689-79.719 20.933-106.497 51.596-29.62 36.918-44.06 80.75-44.339 124.354 1.819 64.478 30.669 125.518 82.029 157.446L21.163 693.997C7.05 699.289 0 711.636 0 731.041v161.398c1.102 21.405 12.216 39.395 33.055 39.703h136.284V761.436c2.255-45.639 23.687-82.529 62.196-100.531l136.247-64.817c10.584-6.175 20.731-14.568 30.433-25.152-56.176-86.676-63.977-190.491-27.773-281.801-23.547-14.411-50.01-23.672-75.419-23.823zm608.586 0c-29.083.609-55.96 11.319-78.039 26.444 35.217 92.137 25.503 196.016-26.482 276.52 11.467 13.23 23.404 23.377 35.753 30.434l130.965 62.195c39.897 21.881 60.47 59.098 60.866 100.532v170.707h140.235c23.063-1.991 32.893-20.387 33.093-39.704V731.042c0-17.641-7.05-29.987-21.163-37.045l-202.431-96.618c52.498-38.708 78.859-96.72 79.369-156.117-1.396-47.012-15.757-90.664-44.339-124.354-29.866-32.399-66.91-51.253-107.827-51.596z"/>
                        </svg>
                    </a>
                    <div class="tooltip hidden group-hover:block absolute top-2 ml-12 bg-stone-600 shadow-md text-stone-50 p-1 text-xs rounded-md">
                        Kelompok
                    </div>
                </li>
                <li class="relative group">
                    <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm rounded-full border bg-stone-100 text-stone-400   {{ request()->routeIs('chat.index') ? 'bg-student text-stone-50' : '' }}" href="/student/chat">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor" data-name="Line Color" xmlns="http://www.w3.org/2000/svg" class="mx-auto w-5 h-5 icon line-color"><path d="M18.81 16.23 20 21l-4.95-2.48A9.84 9.84 0 0 1 12 19c-5 0-9-3.58-9-8s4-8 9-8 9 3.58 9 8a7.49 7.49 0 0 1-2.19 5.23Z" "/></svg>
                    </a>
                    <div class="tooltip hidden group-hover:block absolute top-2 ml-12 bg-stone-600 shadow-md text-stone-50 p-1 text-xs rounded-md">
                        Chat
                    </div>
                </li>
            </ul>
        </div>
        {{-- end navigation icon --}}
    </div>
    {{-- end sidebar --}}

    @include('includes.navbar')

    <main id="main-content" class="justify-center ml-0 sm:ml-0 md:ml-28 lg:ml-24 pt-5 transition-margin ease-in-out duration-300">
        <header>
            <nav class="flex basis-full items-center mx-auto px-4 lg:px-12 py-3" aria-label="Global">
                <div class="flex">
                    <!-- Navigation Toggle -->
                    <button id="sidebar-toggle" class="text-stone-900 hover:text-gray-800 focus:outline-none focus:text-stone-800 hidden" aria-label="Toggle sidebar">
                        <span class="sr-only">Toggle Navigation</span>
                        <svg class="w-5 h-5" width="16" height="16" fill="#111111" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                        </svg>
                    </button>
                    <!-- End Navigation Toggle -->


                    <span class="self-center text-student text-xl font-extrabold whitespace-nowrap hidden lg:block">{{ $title }}</span>
                </div>


                <div class="w-full flex items-center justify-end ml-auto sm:justify-between sm:gap-x-3 sm:order-3">
                    <div class="hidden sm:block">
                    </div>

                    <div class="flex flex-row items-center justify-end gap-2">
                        <div class="flex w-full p-2 bg-stone-50 text-stone-900 shadow rounded-full text-xs">
                            <form action="{{ route('student.search') }}" method="GET" class="flex">
                                <input type="search" id="search" name="query" class="px-2 w-full bg-stone-50 border-none outline-none" placeholder="Telusuri..." required>
                                <button type="submit">
                                    <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M21.71 20.29 18 16.61A9 9 0 1 0 16.61 18l3.68 3.68a1 1 0 0 0 1.42 0 1 1 0 0 0 0-1.39ZM11 18a7 7 0 1 1 7-7 7 7 0 0 1-7 7Z" />
                                    </svg>
                                </button>
                            </form>
                        </div>

                        {{-- <div x-data="{ isOpen: false }" class="dropdown inline-block relative">
                            <button @click="isOpen = !isOpen" type="button" class="shadow inline-flex flex-shrink-0 justify-center items-center gap-2 h-[2.375rem] w-[2.375rem] rounded-full font-medium bg-stone-50 text-gray-700 border-2 border-stone-100 align-middle hover:bg-stone-100 transition-all text-xs">
                                <svg class="w-3.5 h-3.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#currentColor" viewBox="0 0 16 16">
                                    <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z" />
                                </svg>
                            </button>
                            <ul x-show="isOpen" @click.away="isOpen = false" class="dropdown-menu absolute mr-40 mt-1 bg-stone-50 rounded-2xl hidden text-gray-700 pt-2 w-40 right-0 transform translate-x-full">
                                <li class="text-xs">
                                    <a class="rounded-2xl bg-stone-50 hover:bg-stone-100 p-2 block whitespace-no-wrap shadow-md" href="#">Lorem ipsum dolor amet mo di pam</a>
                                </li>
                            </ul>
                        </div> --}}

                        <div x-data="{ open: false }" class="md:order-2 z-10 dropdown inline-block relative">
                            @auth
                                <button @click="open = !open" type="button" class="shadow inline-flex flex-shrink-0 justify-center items-center gap-2 h-[2.375rem] w-[2.375rem] rounded-full font-medium align-middle transition-all text-xs" aria-expanded="true" aria-haspopup="true">
                                    <div class="flex items-center justify-center w-10 h-10 rounded-full bg-gradient-to-tl from-violet-500 to-orange-500 shadow-soft-2xl text-stone-50 text-md font-semibold border">
                                        {{ substr(Auth::user()->name, 0, 1) }}{{ substr(strrchr(Auth::user()->name, ' '), 1, 1) }}
                                    </div>
                                </button>
                                <ul x-show="open" @click.away="open = false" class="dropdown-menu absolute mr-40 bg-stone-50 mt-1 rounded-2xl hidden text-gray-700 w-40 right-0 transform translate-x-full">
                                    <li class="text-xs rounded-2xl shadow-md">
                                        <a href="/student" class="text-gray-700 block px-4 py-2 text-sm rounded-t-2xl hover:bg-gray-100" role="menuitem" tabindex="-1" id="menu-item-0">Dashboard</a>
                                        <a href="/student/profile" class="text-gray-700 block px-4 py-2 text-sm hover:bg-gray-100" role="menuitem" tabindex="-1" id="menu-item-0">Profil</a>
                                        <form action="/logout" method="post">
                                            @csrf
                                            <button type="submit" class="w-full text-left text-gray-700 rounded-b-2xl block px-4 py-2 text-sm hover:bg-gray-100">Keluar</button>
                                        </form>
                                    </li>
                                </ul>
                            @else
                                <a href="/login">
                                    <button class="mr-2 text-sm bg-violet-200 relative inline-flex items-center justify-center px-4 py-2 overflow-hidden font-semibold text-student transition duration-300 ease-out border border-gray-150 rounded-3xl group">
                                        <span class="bg-violet-300 absolute inset-0 flex items-center justify-center w-full h-full text-student duration-300 -translate-x-full group-hover:translate-x-0 ease">
                                            <svg width="20px" height="20px" viewBox="0 0 16 16" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <rect width="16" height="16" id="icon-bound" fill="none" />
                                                <path d="M14,14l0,-12l-6,0l0,-2l8,0l0,16l-8,0l0,-2l6,0Zm-6.998,-0.998l4.998,-5.002l-5,-5l-1.416,1.416l2.588,2.584l-8.172,0l0,2l8.172,0l-2.586,2.586l1.416,1.416Z" />
                                            </svg>
                                        </span>
                                        <span class="absolute flex items-center justify-center w-full h-full text-student transition-all duration-300 transform group-hover:translate-x-full ease">Login</span>
                                        <span class="relative invisible">Login</span>
                                    </button>
                                </a>
                            @endauth
                        </div>


                    </div>
                </div>
            </nav>
        </header>
        <div id="loading-bar" class="loading-bar bg-gradient-to-r from-orange-500 via-purple-500 to-violet-700 z-30"></div>
        <div id="content-container" loading="lazy">
            @yield('content')
        </div>
        <footer class="py-20 w-full z-20 mx-auto align-center justify-center left-0">
            <a href="/" class="flex items-center mx-auto py-2 justify-center align-center">
                <svg class="" width="20" height="20" fill="#5c578c" viewBox="0 0 512 512"><path d="M512 96c0 50.2-59.1 125.1-84.6 155c-3.8 4.4-9.4 6.1-14.5 5H320c-17.7 0-32 14.3-32 32s14.3 32 32 32h96c53 0 96 43 96 96s-43 96-96 96H139.6c8.7-9.9 19.3-22.6 30-36.8c6.3-8.4 12.8-17.6 19-27.2H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320c-53 0-96-43-96-96s43-96 96-96h39.8c-21-31.5-39.8-67.7-39.8-96c0-53 43-96 96-96s96 43 96 96zM117.1 489.1c-3.8 4.3-7.2 8.1-10.1 11.3l-1.8 2-.2-.2c-6 4.6-14.6 4-20-1.8C59.8 473 0 402.5 0 352c0-53 43-96 96-96s96 43 96 96c0 30-21.1 67-43.5 97.9c-10.7 14.7-21.7 28-30.8 38.5l-.6 .7zM128 352a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zM416 128a32 32 0 1 0 0-64 32 32 0 1 0 0 64z"/></svg>
                <span class="text-student px-2 text-xl font-extrabold whitespace-nowrap">Routely</span>
            </a>
            <span id="copyright" class="copyright block font-semibold text-student text-sm text-center"></span>
        </footer>
    </main>
</body>
</html>
<style>
body {
    background-color: rgba(240, 235, 245, 0.90);
}

:root {
    /* background-image: url('/bg.jpg'); */
    background-size: 100% auto;
}

h1 {
    font-family: 'Athletics-Bold', sans-serif;
}

body {
    font-family: 'Plus Jakarta Sans', sans-serif;
}

.animate-up {
    opacity: 0;
    transform: translateY(20px);
    transition: opacity 1s, transform 2s;
}

.animate-up.animate {
    opacity: 1;
    transform: translateY(0);
}

.dropdown:hover .dropdown-menu {
    display: block;
}
</style>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const elements = document.querySelectorAll('.animate-up');

        elements.forEach((element) => {
            element.classList.add('animate');
        });
    });

    function closePopup() {
        document.querySelector('.fixed').remove();
    }

    const sidebarToggle = document.getElementById('sidebar-toggle');
    const logoSidebar = document.getElementById('logo-sidebar');
    const greySidebar = document.getElementById('sidebar-grey');

    // Function to open the sidebar
    function openSidebar() {
        logoSidebar.classList.remove('hidden');
        greySidebar.classList.remove('hidden');

        // Add an event listener to close the sidebar when clicking outside
        document.addEventListener('click', closeSidebarOutside);
    }

    // Function to close the sidebar
    function closeSidebar() {
        logoSidebar.classList.add('hidden');
        greySidebar.classList.add('hidden');

        // Remove the event listener when closing the sidebar
        document.removeEventListener('click', closeSidebarOutside);
    }

    // Function to toggle the sidebar
    function toggleSidebar() {
        if (logoSidebar.classList.contains('hidden') && greySidebar.classList.contains('hidden')) {
            openSidebar();
        } else {
            closeSidebar();
        }
    }

    // Function to close the sidebar when clicking outside
    function closeSidebarOutside(event) {
        if (!logoSidebar.contains(event.target) && !greySidebar.contains(event.target) && !sidebarToggle.contains(event.target)) {
            closeSidebar();
        }
    }

    // Add a click event listener to the button
    sidebarToggle.addEventListener('click', toggleSidebar);

    function updateCopyrightYear() {
        var currentYear = new Date().getFullYear();
        document.getElementById('copyright').innerText = '© ' + currentYear;
    }

    // Call the function to set the initial value
    updateCopyrightYear();

</script>


