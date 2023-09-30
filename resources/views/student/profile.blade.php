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
            <span class="ml-1 text-sm font-medium text-gray-500 md:ml-2 dark:text-gray-400">Profile</span>
        </div>
        </li>
    </ol>
    </nav>

    <h2 class="mb-4 text-2xl font-extrabold tracking-tight leading-none text-student md:text-3xl">Profile</h2>
    <!-- Content -->
    <div class="w-full p-4 sm:mb-0 sm:mr-4 bg-white shadow-md rounded-xl">
        <div class="flex mb-12">
            <div class="px-2">
                <div class="flex items-center justify-center w-14 h-14 rounded-full bg-gradient-to-tl from-violet-500 to-orange-500 shadow-soft-2xl">
                    <p class="text-stone-50 text-lg font-semibold">
                        {{ substr(Auth::user()->name, 0, 1) }}
                        {{ substr(strrchr(Auth::user()->name, ' '), 1, 1) }}
                    </p>
                </div>
            </div>
            {{-- siswa info --}}
            <div class="px-2">
                <p class="mb-0 font-semibold leading-normal text-sm">{{ Auth::user()->name }}</p>
                <p class="mb-0 text-xs">{{ Auth::user()->email }}</p>
                @if (Auth::user()->is_admin === 0)
                    <p class="mb-0 text-sm">Siswa</p>
                @else
                    <p class="mb-0 text-sm">Guru</p>
                @endif
            </div>
        </div>
        {{-- Edit profile form --}}
        <div class="px-2">
            <form action="{{ route('student.profile.update') }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-4">
                    <label for="name" class="block mb-2 font-semibold text-sm text-gray-700 dark:text-gray-400">Name</label>
                    <input type="text" name="name" id="name" value="{{ Auth::user()->name }}" class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded-xl shadow appearance-none focus:outline-none focus:shadow-outline-violet focus:border-violet-300 ">
                </div>
                <div class="mb-4">
                    <label for="email" class="block mb-2 font-semibold text-sm text-gray-700 dark:text-gray-400">Email</label>
                    <input type="email" name="email" id="email" value="{{ Auth::user()->email }}" class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded-xl shadow appearance-none focus:outline-none focus:shadow-outline-violet focus:border-violet-300 ">
                </div>
                <div class="mb-4">
                    <label for="password" class="block mb-2 font-semibold text-sm text-gray-700 dark:text-gray-400">Password</label>
                    <input type="password" name="password" id="password" class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded-xl shadow appearance-none focus:outline-none focus:shadow-outline-violet focus:border-violet-300 ">
                </div>
                <div class="mb-4">
                    <label for="password_confirmation" class="block mb-2 font-semibold text-sm text-gray-700 dark:text-gray-400">Confirm Password</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded-xl shadow appearance-none focus:outline-none focus:shadow-outline-violet focus:border-violet-300 ">
                </div>
                <div class="flex justify-end">
                    <button type="submit" class="px-4 py-2 text-sm font-medium text-white bg-student-dark rounded-md hover:bg-violet-900 focus:outline-none focus:bg-violet-900">Save Changes</button>
                </div>
                @if (session('status'))
                <div class="fixed inset-0 z-50 flex items-center justify-center">
                    <div class="absolute inset-0 bg-gray-900 opacity-50"></div>
                    <div class="relative bg-white rounded-lg shadow-lg p-4">
                        <div class="mb-4">
                            <p class="text-lg font-semibold text-gray-800">{{ session('status') }}</p>
                        </div>
                        <div class="flex justify-end">
                            <button type="button" class="px-4 py-2 text-sm font-medium text-white bg-student-dark hover:bg-student rounded-md hover:bg-student-dark focus:outline-none focus:bg-student-dark" onclick="closePopup()">Close</button>
                        </div>
                    </div>
                </div>
                @endif
            </form>
        </div>
    </div>
</section>
@endsection
