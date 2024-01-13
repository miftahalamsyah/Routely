@extends('layouts.student_layout')

@section('content')
<section class="w-full min-h-screen justify-center mx-auto px-4 lg:px-12">
    <div class="flex flex-col sm:flex-row items-center my-5 gap-x-10 justify-center">
        <div class="flex items-center justify-center w-32 h-32 rounded-full bg-gradient-to-tl from-violet-500 to-orange-500 shadow-soft-2xl">
            <p class="text-stone-50 text-5xl font-semibold">{{ substr($name, 0, 1) }}{{ substr(strrchr($name, ' '), 1, 1) }}</p>
        </div>
        <div class="my-auto mt-4 lg:mt-0">
            <h1 class="text-4xl text-stone-700 mx-5">{{ $name }}</h1>
            <h2 class="text-md text-stone-700 mx-5">{{ $email }}</h2>
            <p class="pt-2 text-md text-stone-700 mx-5">Profil Publik Anda dapat diakses melalui</p>
            <a href="http://127.0.0.1:8000/profil_publik/{{ $slug }}" class="mx-5 text-md text-student">http://127.0.0.1:8000/profil_publik/{{ $slug }}</a>
        </div>
    </div>

    <div class="flex items-center justify-center">
        <span class="inline-flex w-full items-center justify-center -space-x-px overflow-hidden rounded-2xl border shadow-md my-5 bg-stone-50 ">
            <button id="editButton" class="border-r w-full inline-block px-4 py-2 text-sm font-medium text-gray-700 hover:bg-stone-100 focus:relative">
                <svg class="mx-auto" fill="currentColor" width="20" height="20" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M21 12a1 1 0 0 0-1 1v6a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V5a1 1 0 0 1 1-1h6a1 1 0 0 0 0-2H5a3 3 0 0 0-3 3v14a3 3 0 0 0 3 3h14a3 3 0 0 0 3-3v-6a1 1 0 0 0-1-1Zm-15 .76V17a1 1 0 0 0 1 1h4.24a1 1 0 0 0 .71-.29l6.92-6.93L21.71 8a1 1 0 0 0 0-1.42l-4.24-4.29a1 1 0 0 0-1.42 0l-2.82 2.83-6.94 6.93a1 1 0 0 0-.29.71Zm10.76-8.35 2.83 2.83-1.42 1.42-2.83-2.83ZM8 13.17l5.93-5.93 2.83 2.83L10.83 16H8Z"/></svg>
                Edit
            </button>
            <button id="leaderboardButton" class="border-l w-full inline-block px-4 py-2 text-sm font-medium text-gray-700 hover:bg-stone-100 focus:relative">
                <svg class="mx-auto" fill="currentColor" width="20" height="20" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M22 7h-5.667V4a1 1 0 0 0-1-1H8.667a1 1 0 0 0-1 1v7H2a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h20a1 1 0 0 0 1-1V8a1 1 0 0 0-1-1ZM7.667 19H3v-6h4.667Zm6.666 0H9.667V5h4.666ZM21 19h-4.667V9H21Z"/></svg>
                Leaderboard
            </button>
            <button id="badgesButton" class="border-l w-full inline-block px-4 py-2 text-sm font-medium text-gray-700 hover:bg-stone-100 focus:relative">
                <svg class="mx-auto" fill="currentColor" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 487.9 487.9" style="enable-background:new 0 0 487.9 487.9" xml:space="preserve"><path d="m470.491 284.1-1.3-2c-8.3-12.7-16.8-25.9-25.4-38.8 7.4-11.2 14.8-22.6 21.9-33.6l4.1-6.4c7.5-11.7 9.6-24.3 5.8-35.6s-13.1-20.2-26.1-25c-8.1-3-16.4-6.1-24.3-9.1-6.5-2.5-13.2-5-19.8-7.5-.5-10.3-1-20.6-1.6-30.6-.3-6-.7-12-1-18-1.2-22.5-17-38.3-38.5-38.3-3.9 0-7.9.5-11.9 1.6l-3.5.9c-14.3 3.8-29 7.7-43.5 11.9-6.5-8.1-13.1-16.2-19.5-24.1-3.7-4.5-7.3-9-11-13.5-8.4-10.3-19.5-16-31.3-16s-23 5.7-31.4 16.1l-4.8 5.9c-8.4 10.4-17.2 21.2-25.6 32-11.5-3.2-23-6.3-32.5-8.8-3.5-.9-6.9-1.8-9.9-2.6-.1 0-.2-.1-.4-.1-5.4-1.3-10.5-1.9-15.3-1.9-22.5 0-37.5 14.1-39.2 36.8-1.3 17.9-2 35.4-2.5 49.4-15.9 6-31.3 11.9-45.9 17.7-12.1 4.8-20.7 13.5-24.2 24.6-3.6 11.1-1.6 23.3 5.4 34.3 8.5 13.2 17.6 27.1 26.8 41-9.5 14.4-18.6 28.5-27.2 42.2-6.5 10.3-8.2 22.5-4.6 33.3 3.6 10.9 12.3 19.7 23.8 24.2l4.3 1.7c13.8 5.3 28 10.8 42.2 16.1.3 4.8.6 9.6.9 14.3.8 10.9 1.5 21.2 1.4 31.6-.1 11.1 4.2 21.9 11.8 29.5 7.3 7.4 17.1 11.4 27.6 11.4 4.5 0 9-.7 13.5-2.1 9.8-3.1 20.1-5.8 30.1-8.4 4.8-1.3 9.8-2.6 14.8-3.9 10.3 12.9 20.7 25.6 30.5 37.6 8.5 10.3 19.6 16 31.3 16 11.8 0 22.9-5.7 31.3-16.1 11.3-13.9 20.9-25.8 30.3-37.8 12.3 3.4 24.8 6.7 36.9 9.9l10.3 2.7c3.9 1 7.8 1.5 11.6 1.5 21.2 0 37.5-15.9 38.6-37.9.3-5.5.6-11 .9-16.6.6-10.7 1.2-21.7 1.6-32.6 14.1-5.3 28.2-10.8 42-16.2l3.3-1.3c12.3-4.8 21.1-13.6 24.7-24.8 3.6-11.4 1.7-23.6-5.5-34.6zm-20.2 26.1c-1.1 3.4-4.2 6.2-8.8 8l-3.3 1.3c-14.7 5.7-29.9 11.6-44.9 17.3-9 3.4-13.8 9.8-14.1 19.1-.4 12-1.1 24.2-1.8 36.1-.3 5.6-.6 11.1-.9 16.7-.4 7.7-4.7 12.3-11.6 12.3-1.5 0-3-.2-4.6-.6l-10.3-2.7c-13.4-3.5-27.2-7.2-40.8-11-2.1-.6-4.1-.9-6-.9-6.1 0-11.3 2.7-15.6 8-10.2 12.9-20.5 25.7-32.7 40.8-3.2 4-6.9 6.1-10.3 6.1-3.5 0-7.2-2.2-10.5-6.2-10.6-12.9-21.9-26.7-32.9-40.6-5.2-6.5-11.3-7.9-15.4-7.9-2 0-4 .3-6.2.9-6.1 1.7-12.4 3.4-18.5 5-10.3 2.7-20.9 5.5-31.3 8.8-5.7 1.8-10.5.9-13.9-2.5-2.6-2.6-4-6.3-4-10.3.1-11.4-.7-22.7-1.4-33.7-.4-5.8-.8-11.8-1.1-17.6-.5-11.6-7.7-16.6-13.7-18.8-15.2-5.6-30.6-11.5-45.6-17.3l-4.3-1.7c-4-1.5-6.8-4.2-7.9-7.5-1.1-3.2-.4-6.9 1.8-10.4 9.1-14.4 18.8-29.5 28.9-44.7 5.2-7.8 5.2-16 0-23.8-9.8-14.6-19.6-29.6-28.6-43.7-2.6-4.1-3.5-8.1-2.4-11.4 1-3.2 4-6 8.4-7.7 15.6-6.2 32.2-12.5 49.3-19 8.5-3.2 13.2-9.7 13.5-18.9.5-14.3 1.2-33.3 2.6-52.5.6-8.4 4-11.7 12.2-11.7 2.6 0 5.6.4 8.9 1.2 3 .8 6.3 1.7 9.8 2.6 10.6 2.8 22.6 6 34.7 9.5 2.6.7 4.9 1.1 7.2 1.1 6.7 0 12.4-3 17-8.9 8.8-11.4 18.1-22.8 27-33.9l4.8-5.9c3.2-3.9 6.9-6.1 10.4-6.1s7.2 2.1 10.3 6c3.7 4.5 7.3 9 11 13.5 7.1 8.7 14.5 17.8 21.6 26.7 4.4 5.5 9.8 8.3 16 8.3 2.1 0 4.3-.3 6.6-1 15.5-4.5 31.4-8.7 46.8-12.8l3.5-.9c1.7-.5 3.4-.7 4.9-.7 9.9 0 11.4 8.9 11.6 12.7.3 6 .6 12 1 18.1.6 11.2 1.3 22.8 1.8 34.2.4 9.1 5.2 15.8 13.6 18.9 7.8 2.9 15.7 5.9 23.4 8.8 8 3 16.3 6.2 24.6 9.2 5.2 1.9 8.7 4.9 9.9 8.3 1.1 3.4.1 7.8-2.9 12.4l-4.1 6.4c-7.7 12-15.7 24.4-23.7 36.4-6.6 9.9-3.7 18.4 0 23.8 9.3 13.7 18.4 27.9 27.3 41.6l1.3 2.1c2.6 3.7 3.5 7.8 2.4 11.1z"/><path d="m297.091 190.2-78.6 78.6-27.8-27.8c-5.3-5.3-13.8-5.3-19.1 0-5.3 5.3-5.3 13.8 0 19.1l37.3 37.3c.3.3.7.6 1 .9 2.5 2 5.5 3 8.5 3 3.5 0 6.9-1.3 9.5-4l88.2-88.2c5.3-5.3 5.3-13.8 0-19.1-5.2-5.1-13.7-5.1-19 .2z"/></svg>
                Lencana
            </button>
        </span>
    </div>

    <!-- Edit -->
    <div id="editSection" class="w-full p-5 sm:mb-0 sm:mr-4 bg-stone-50 shadow-md rounded-2xl">
        {{-- Edit profile form --}}
        <div class="px-2">
            <form action="{{ route('student.profile.update') }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-4">
                    <label for="name" class="block mb-2 font-semibold text-sm text-gray-700 dark:text-gray-400">Nama</label>
                    <input type="text" name="name" id="name" value="{{ old('name', Auth::user()->name) }}" class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded-xl shadow appearance-none focus:outline-none focus:shadow-outline-violet focus:border-violet-300">
                    @error('name')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="email" class="block mb-2 font-semibold text-sm text-gray-700 dark:text-gray-400">Email</label>
                    <input type="email" name="email" id="email" value="{{ old('email', Auth::user()->email) }}" class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded-xl shadow appearance-none focus:outline-none focus:shadow-outline-violet focus:border-violet-300">
                    @error('email')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="password" class="block mb-2 font-semibold text-sm text-gray-700 dark:text-gray-400">Password</label>
                    <input type="password" name="password" id="password" class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded-xl shadow appearance-none focus:outline-none focus:shadow-outline-violet focus:border-violet-300">
                    @error('password')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="password_confirmation" class="block mb-2 font-semibold text-sm text-gray-700 dark:text-gray-400">Konfirmasi Password</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded-xl shadow appearance-none focus:outline-none focus:shadow-outline-violet focus:border-violet-300">
                    @error('password_confirmation')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex justify-end">
                    <button type="submit" class="px-4 py-2 text-sm font-medium text-white bg-student rounded-xl hover:bg-violet-900 focus:outline-none focus:bg-violet-900">Simpan Perubahan</button>
                </div>
                @if (session('status'))
                    <div id="successMessage" class="fixed items-center top-5 left-0 right-0 flex flex-col sm:flex-row justify-center bg-stone-50 max-w-sm shadow rounded-2xl mx-auto py-5 pl-6 pr-8 sm:pr-6 z-50">
                        <div class="flex flex-row items-center border-b sm:border-b-0 w-full sm:w-auto pb-4 sm:pb-0">
                            <div class="text-green-500">
                                <svg class="w-6 sm:w-5 h-6 sm:h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            </div>
                            <div class="text-sm font-medium ml-3">Sukses</div>
                        </div>
                        <div class="text-sm tracking-wide text-gray-500 mt-4 sm:mt-0 sm:ml-4">{{ session('status') }}</div>
                    </div>
                @endif
                @if (session('error'))
                    <div id="errorMessage" class="fixed items-center top-5 left-0 right-0 flex flex-col sm:flex-row justify-center bg-red-100 dark:bg-red-700 dark:text-white max-w-sm shadow rounded-2xl mx-auto py-5 pl-6 pr-8 sm:pr-6 z-50">
                        <div class="flex flex-row items-center border-b sm:border-b-0 w-full sm:w-auto pb-4 sm:pb-0">
                            <div class="text-red-500">
                                <svg class="w-6 sm:w-5 h-6 sm:h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                            </div>
                            <div class="text-sm font-medium ml-3">Error</div>
                        </div>
                        <div class="text-sm tracking-wide text-gray-500 mt-4 sm:mt-0 sm:ml-4">
                            {{ session('error') }}
                        </div>
                    </div>
                @endif
            </form>
        </div>
    </div>

    {{-- leaderboard section --}}
    @include('includes.leaderboard')

    <!--badges section-->
    @include('includes.badges')
</section>

<style>
.hide-success {
    animation: fadeOut 1s ease 2s 1 normal forwards;
}

@keyframes fadeOut {
    0% {
        opacity: 1;
    }
    100% {
        opacity: 0;
        display: none;
    }
}

</style>

<script>
    const successMessage = document.getElementById('successMessage');
    function hideSuccessMessage() {
        successMessage.classList.add('hide-success');
    }
    setTimeout(hideSuccessMessage, 2000);


    // JavaScript to toggle sections and change button colors
    const editButton = document.getElementById('editButton');
    const badgesButton = document.getElementById('badgesButton');
    const leaderboardButton = document.getElementById('leaderboardButton');
    const editSection = document.getElementById('editSection');
    const badgesSection = document.getElementById('badgesSection');
    const leaderboardSection = document.getElementById('leaderboardSection');

    // Set the default view to Edit
    editButton.classList.add('text-student', 'bg-stone-100');
    editSection.style.display = 'block';
    leaderboardSection.style.display = 'none';
    badgesSection.style.display = 'none';

    editButton.addEventListener('click', () => {
        editSection.style.display = 'block';
        leaderboardSection.style.display = 'none';
        badgesSection.style.display = 'none';

        // Change button colors
        editButton.classList.add('text-student', 'bg-stone-100');
        leaderboardButton.classList.remove('text-student', 'bg-stone-100');
        badgesButton.classList.remove('text-student', 'bg-stone-100')
    });

    leaderboardButton.addEventListener('click', () => {
        leaderboardSection.style.display = 'block';
        editSection.style.display = 'none';
        badgesSection.style.display = 'none';

        // Change button colors
        leaderboardButton.classList.add('text-student', 'bg-stone-100');
        editButton.classList.remove('text-student', 'bg-stone-100');
        badgesButton.classList.remove('text-student', 'bg-stone-100');
    });

    badgesButton.addEventListener('click', () => {
        badgesSection.style.display = 'grid';
        editSection.style.display = 'none';
        leaderboardSection.style.display = 'none';

        // Change button colors
        badgesButton.classList.add('text-student', 'bg-stone-100');
        editButton.classList.remove('text-student', 'bg-stone-100');
        leaderboardButton.classList.remove('text-student', 'bg-stone-100');
    });
</script>

<style>
    /* Initially hide the badges section */
    #badgesSection {
        display: none;
    }
</style>
@endsection
