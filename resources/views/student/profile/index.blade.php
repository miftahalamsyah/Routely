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
            <a href="https://routely.me/profil_publik/{{ $slug }}" class="mx-5 text-md text-student">https://routely.me/profil_publik/{{ $slug }}</a>
        </div>
    </div>

    <div class="flex items-center justify-center">
        <span class="inline-flex w-full items-center justify-center -space-x-px overflow-hidden rounded-2xl border shadow-md my-5 bg-stone-50 ">
            <button id="editButton" class="border-r w-full inline-block px-4 py-2 text-sm font-medium text-stone-700 hover:bg-stone-100 focus:relative">
                <svg class="mx-auto" fill="currentColor" width="20" height="20" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M21 12a1 1 0 0 0-1 1v6a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V5a1 1 0 0 1 1-1h6a1 1 0 0 0 0-2H5a3 3 0 0 0-3 3v14a3 3 0 0 0 3 3h14a3 3 0 0 0 3-3v-6a1 1 0 0 0-1-1Zm-15 .76V17a1 1 0 0 0 1 1h4.24a1 1 0 0 0 .71-.29l6.92-6.93L21.71 8a1 1 0 0 0 0-1.42l-4.24-4.29a1 1 0 0 0-1.42 0l-2.82 2.83-6.94 6.93a1 1 0 0 0-.29.71Zm10.76-8.35 2.83 2.83-1.42 1.42-2.83-2.83ZM8 13.17l5.93-5.93 2.83 2.83L10.83 16H8Z"/></svg>
                Edit
            </button>
            <button id="badgesButton" class="border-l w-full inline-block px-4 py-2 text-sm font-medium text-stone-700 hover:bg-stone-100 focus:relative">
                <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto" fill="currentColor" width="20" height="20" viewBox="0 0 1200 1200" xml:space="preserve">
                    <path d="M596.847 188.488c-103.344 0-187.12 97.81-187.12 218.465 0 83.678 40.296 156.352 99.468 193.047l-68.617 31.801-182.599 84.688c-17.64 8.821-26.444 23.778-26.444 44.947v201.102c1.451 25.143 16.537 48.577 40.996 48.974h649.62c27.924-2.428 42.05-24.92 42.325-48.974V761.436c0-21.169-8.804-36.126-26.443-44.947l-175.988-84.688-73.138-34.65c56.744-37.521 95.061-108.624 95.061-190.197-.001-120.656-83.778-218.466-187.121-218.466zm-301.824 76.824c-44.473 1.689-79.719 20.933-106.497 51.596-29.62 36.918-44.06 80.75-44.339 124.354 1.819 64.478 30.669 125.518 82.029 157.446L21.163 693.997C7.05 699.289 0 711.636 0 731.041v161.398c1.102 21.405 12.216 39.395 33.055 39.703h136.284V761.436c2.255-45.639 23.687-82.529 62.196-100.531l136.247-64.817c10.584-6.175 20.731-14.568 30.433-25.152-56.176-86.676-63.977-190.491-27.773-281.801-23.547-14.411-50.01-23.672-75.419-23.823zm608.586 0c-29.083.609-55.96 11.319-78.039 26.444 35.217 92.137 25.503 196.016-26.482 276.52 11.467 13.23 23.404 23.377 35.753 30.434l130.965 62.195c39.897 21.881 60.47 59.098 60.866 100.532v170.707h140.235c23.063-1.991 32.893-20.387 33.093-39.704V731.042c0-17.641-7.05-29.987-21.163-37.045l-202.431-96.618c52.498-38.708 78.859-96.72 79.369-156.117-1.396-47.012-15.757-90.664-44.339-124.354-29.866-32.399-66.91-51.253-107.827-51.596z"/>
                </svg>
                Kelompok
            </button>
            <button id="leaderboardButton" class="border-l w-full inline-block px-4 py-2 text-sm font-medium text-stone-700 hover:bg-stone-100 focus:relative">
                <svg class="mx-auto" fill="currentColor" width="20" height="20" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M22 7h-5.667V4a1 1 0 0 0-1-1H8.667a1 1 0 0 0-1 1v7H2a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h20a1 1 0 0 0 1-1V8a1 1 0 0 0-1-1ZM7.667 19H3v-6h4.667Zm6.666 0H9.667V5h4.666ZM21 19h-4.667V9H21Z"/></svg>
                Leaderboard
            </button>
        </span>
    </div>

    <!-- Edit -->
    <div id="editSection">
        {{-- Edit profile form --}}
        <div class="w-full p-5 sm:mb-0 sm:mr-4 bg-stone-50 shadow-md rounded-2xl">
            <form action="{{ route('student.profile.update') }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-4">
                    <label for="name" class="block mb-2 font-semibold text-sm text-stone-700 dark:text-stone-400">Nama</label>
                    <input type="text" name="name" id="name" value="{{ old('name', Auth::user()->name) }}" class="w-full px-3 py-2 text-sm leading-tight text-stone-700 border-2 rounded-xl shadow appearance-none focus:outline-none focus:shadow-outline-violet focus:border-violet-300">
                    @error('name')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="email" class="block mb-2 font-semibold text-sm text-stone-700 dark:text-stone-400">Email</label>
                    <input type="email" name="email" id="email" value="{{ old('email', Auth::user()->email) }}" class="w-full px-3 py-2 text-sm leading-tight text-stone-700 border-2 rounded-xl shadow appearance-none focus:outline-none focus:shadow-outline-violet focus:border-violet-300">
                    @error('email')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="password" class="block mb-2 font-semibold text-sm text-stone-700 dark:text-stone-400">Password</label>
                    <input type="password" name="password" id="password" class="w-full px-3 py-2 text-sm leading-tight text-stone-700 border-2 rounded-xl shadow appearance-none focus:outline-none focus:shadow-outline-violet focus:border-violet-300">
                    @error('password')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="password_confirmation" class="block mb-2 font-semibold text-sm text-stone-700 dark:text-stone-400">Konfirmasi Password</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" class="w-full px-3 py-2 text-sm leading-tight text-stone-700 border-2 rounded-xl shadow appearance-none focus:outline-none focus:shadow-outline-violet focus:border-violet-300">
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
                        <div class="text-sm tracking-wide text-stone-500 mt-4 sm:mt-0 sm:ml-4">{{ session('status') }}</div>
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
                        <div class="text-sm tracking-wide text-stone-500 mt-4 sm:mt-0 sm:ml-4">
                            {{ session('error') }}
                        </div>
                    </div>
                @endif
            </form>
        </div>

        <div class="w-full p-5 my-5 sm:mb-0 sm:mr-4 bg-stone-50 shadow-md rounded-2xl">
            <form method="POST" action="{{ route('student.profile.pertanyaan-pemulihan') }}">
                @csrf

                <div class="mb-4">
                    <label class="block font-semibold text-sm text-stone-700 dark:text-stone-400">Pertanyaan Pemulihan Kata Sandi</label>
                    <select id="pertanyaan_pemulihan_id" name="pertanyaan_pemulihan_id" class="w-full p-2 my-2 bg-stone-50 rounded-lg border-2 leading-tight shadow appearance-none focus:outline-none focus:shadow-outline-violet focus:border-violet-300 @error('pertanyaan_pemulihan_id') border-red-500 @enderror">
                        @foreach($pertanyaanPemulihan as $pertanyaan)
                            <option value="{{ $pertanyaan->id }}">{{ $pertanyaan->pertanyaan }}</option>
                        @endforeach
                    </select>
                    @error('pertanyaan_pemulihan_id')
                        <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label class="block font-semibold text-sm text-stone-700 dark:text-stone-400">Jawaban</label>
                    <input type="text" id="jawaban" name="jawaban" placeholder="Jawaban pertanyaan pemulihan (*case sensitive)" class="w-full p-2 my-2 bg-stone-50 rounded-lg border-2 leading-tight shadow appearance-none focus:outline-none focus:shadow-outline-violet focus:border-violet-300 @error('jawaban') border-red-500 @enderror">
                    @error('jawaban')
                        <div class="text-red-500">{{ $message }}</div>
                    @enderror
                </div>

                <div class="flex justify-end">
                    <button type="submit" class="px-4 py-2 text-sm font-medium text-white bg-student rounded-xl hover:bg-violet-900 focus:outline-none focus:bg-violet-900">Simpan Perubahan</button>
                </div>
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
