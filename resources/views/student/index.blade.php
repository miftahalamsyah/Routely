@extends('layouts.student_layout')

@section('content')
<section class="max-w-6xl justify-center mx-auto px-5">
    <div class="flex justify-center text-center">
        <p id="greeting" class="mb-4 text-2xl font-extrabold tracking-tight leading-none text-student-dark md:text-3xl">Selamat Datang</p>
        <p class="mb-4 text-2xl font-extrabold tracking-tight leading-none text-student-dark md:text-3xl">, {{ explode(' ', Auth::user()->name)[0] }}!</p>
    </div>
    <div class="flex flex-col sm:flex-row w-full">
    {{-- siswa card --}}
        <div class="flex w-full p-4 mb-4 sm:mb-0 sm:mr-4 bg-stone-50 shadow-md rounded-2xl justify-between">
            {{-- siswa photo --}}
            <div class="flex">
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
                    <p class="mb-0 text-sm">Siswa</p>
                </div>
            </div>
            {{-- siswa edit profile --}}
            <div class="max-w-full px-2">
                <a href="/student/profile" class="mb-0 text-xs leading-normal text-student">
                    Edit Profile
                </a>
            </div>
        </div>
    {{-- clock card --}}
    <div class="flex w-full p-4 sm:mb-0 sm:mr-4 bg-white shadow-md rounded-lg">
        <div class="flex items-center justify-center">
            <div class="w-16 h-16 bg-gradient-to-tl from-violet-500 to-orange-500 rounded-full flex items-center justify-center">
                <p class="text-stone-50 text-3xl font-semibold" id="clockIcon">
                    🕒
                </p>
            </div>
        </div>
        <div class="flex flex-col ml-4">
            <p class="text-stone-700 text-lg font-semibold">Current Time</p>
            <p class="text-student text-3xl font-extrabold" id="clock"></p>
        </div>
    </div>

    </div>

    {{-- score section --}}
    <div class="mt-12">
        <p class="my-4 text-xl font-extrabold tracking-tight leading-none text-student-dark md:text-2xl">🏆 Score</p>
        <div class="flex flex-col sm:flex-row w-full mb-6">
            <div class="flex-auto p-4 mb-4 sm:mb-0 sm:mr-4 bg-stone-50 shadow-md rounded-2xl score-card">
                <div class="max-w-full h-16 px-3">
                    <div class="flex items-center justify-between">
                    <p class="mb-0 text-stone-700 leading-normal text-sm">Nilai Pre-Test</p>
                    <!-- Button to toggle score visibility -->
                    <button class="toggle-score-button" aria-label="Toggle Score Visibility">
                        <p class="text-stone-700 leading-normal text-xs hover:underline">Lihat</p>
                    </button>
                    </div>
                    <!-- Score container initially hidden -->
                    <div class="score-container hidden">
                        <p class="mb-0 text-stone-700 font-extrabold text-3xl actual-score">60</p>
                        <p class="mb-0 text-stone-700 font-extrabold text-3xl hidden-score">***</p>
                    </div>
                </div>
            </div>

            <div class="flex-auto p-4 mb-4 sm:mb-0 sm:mr-4 bg-stone-50 shadow-md rounded-2xl score-card">
                <div class="max-w-full h-16 px-3">
                    <div class="flex items-center justify-between">
                    <p class="mb-0 text-stone-700 leading-normal text-sm">Nilai Tugas</p>
                    <!-- Button to toggle score visibility -->
                    <button class="toggle-score-button" aria-label="Toggle Score Visibility">
                        <p class="text-stone-700 leading-normal text-xs hover:underline">Lihat</p>
                    </button>
                    </div>
                    <!-- Score container initially hidden -->
                    <div class="score-container hidden">
                        <p class="mb-0 text-stone-700 font-extrabold text-3xl actual-score">70</p>
                        <p class="mb-0 text-stone-700 font-extrabold text-3xl hidden-score">***</p>
                    </div>
                </div>
            </div>

            <div class="flex-auto p-4 mb-4 sm:mb-0 sm:mr-4 bg-stone-50 shadow-md rounded-2xl score-card">
                <div class="max-w-full h-16 px-3">
                    <div class="flex items-center justify-between">
                    <p class="mb-0 text-stone-700 leading-normal text-sm">Nilai Post-Test</p>
                    <!-- Button to toggle score visibility -->
                    <button class="toggle-score-button" aria-label="Toggle Score Visibility">
                        <p class="text-stone-700 leading-normal text-xs hover:underline">Lihat</p>
                    </button>
                    </div>
                    <!-- Score container initially hidden -->
                    <div class="score-container hidden">
                        <p class="mb-0 text-stone-700 font-extrabold text-3xl actual-score">80</p>
                        <p class="mb-0 text-stone-700 font-extrabold text-3xl hidden-score">***</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-12">
        <p class="my-4 text-xl font-extrabold tracking-tight leading-none text-student-dark md:text-2xl">👨‍🏫 Pertemuan</p>
        <div class="flex w-full p-4 sm:mb-0 sm:mr-4 bg-stone-50 shadow-md rounded-2xl score-card">
            <div class="max-w-full px-3 mx-auto text-center">
               <span class="text-stone-700 text-lg tracking-tight leading-none">Tidak ada pertemuan</span>
            </div>
        </div>
    </div>

    <div class="mt-12">
        <p class="my-4 text-xl font-extrabold tracking-tight leading-none text-student-dark md:text-2xl">📝 Tugas</p>
        <div class="grid md:grid-cols-3 mx-auto flex justify-center">
            @forelse ($tugas as $tugas)
                <!-- individual card -->
                <div class="relative flex flex-col min-w-0 break-words bg-white border shadow-lg rounded-2xl mx-2 mb-4 hover:bg-gray-100">
                    <div class="flex-auto px-1 pt-6">
                        <a href="/student/tugas/{{ $tugas->name }}">
                            <h2 class="text-xl font-bold p-2">{{ $tugas->name }}</h2>
                        </a>
                        <p class="mb-6 px-2 leading-normal text-sm overflow-hidden h-24 ...">{{ $tugas->description }}</p>
                        <div class="flex items-center justify-between px-2 pb-4">
                            <a href="/student/tugas/{{ $tugas->name }}">
                            <button class="mr-2 text-sm relative inline-flex items-center justify-center px-4 py-2 overflow-hidden font-bold text-stone-900 transition duration-300 ease-out border bg-violet-200 rounded-xl group">
                                <span class="absolute inset-0 flex items-center justify-center w-full h-full text-stone-50 duration-300 -translate-x-full bg-orange-500 group-hover:translate-x-0 ease">
                                    Lihat Tugas
                                </span>
                                <span class="absolute flex items-center justify-center w-full h-full text-student transition-all duration-300 transform group-hover:translate-x-full ease">Lihat Tugas</span>
                                <span class="relative invisible">Lihat Tugas</span>
                            </button>
                            </a>
                        </div>
                    </div>
                </div>
            @empty
                <div class="flex w-full p-4 sm:mb-0 sm:mr-4 bg-stone-50 shadow-md rounded-2xl score-card">
                    <div class="max-w-full px-3 mx-auto text-center">
                    <span class="text-stone-700 text-lg tracking-tight leading-none">Tidak ada Tugas</span>
                    </div>
                </div>
            @endforelse
            </div>
    </div>

    <div class="mt-12">
        <div class="justify-between flex">
            <p class="my-4 text-xl font-extrabold tracking-tight leading-none text-student-dark md:text-2xl">📖 Materi</p>
            <a href="/student/materi"><p class="my-4 text-xs py-1 px-2 font-extrabold tracking-tight leading-none bg-violet-200 rounded-lg shadow-md text-student-dark md:text-sm">Lihat Semua</p></a>
        </div>
        <div class="grid md:grid-cols-3 mx-auto flex justify-center">
            @forelse ($materis as $materi)
                <!-- individual card -->
                <div class="relative flex flex-col min-w-0 break-words bg-white border shadow-lg rounded-2xl mx-2 mb-4 hover:bg-gray-100">
                    <div class="relative">
                        <a class="block shadow-xl rounded-2xl">
                            <img src="{{ asset('storage/thumbnails/' . $materi->thumbnail_image) }}" alt="{{ $materi-> title }}" class="w-full h-32 object-cover shadow-soft-2xl rounded-2xl" />
                        </a>
                    </div>
                    <div class="flex-auto px-1 pt-6">
                        <a href="/student/materi/{{ $materi->slug }}">
                            <h2 class="text-xl font-bold p-2">{{ $materi->title }}</h2>
                        </a>
                        <p class="mb-6 px-2 leading-normal text-sm overflow-hidden h-24 ...">{{ $materi->description }}</p>
                        <div class="flex items-center justify-between px-2 pb-4">
                            <a href="/student/materi/{{ $materi->slug }}">
                            <button class="mr-2 text-sm relative inline-flex items-center justify-center px-4 py-2 overflow-hidden font-bold text-stone-900 transition duration-300 ease-out border bg-violet-200 rounded-xl group">
                                <span class="absolute inset-0 flex items-center justify-center w-full h-full text-stone-50 duration-300 -translate-x-full bg-orange-500 group-hover:translate-x-0 ease">
                                    Lihat Materi
                                </span>
                                <span class="absolute flex items-center justify-center w-full h-full text-student transition-all duration-300 transform group-hover:translate-x-full ease">Lihat Materi</span>
                                <span class="relative invisible">Lihat Materi</span>
                            </button>
                            </a>
                        </div>
                    </div>
                </div>
            @empty
                <div class="flex w-full p-4 sm:mb-0 sm:mr-4 bg-stone-50 shadow-md rounded-2xl score-card">
                    <div class="max-w-full px-3 mx-auto text-center">
                    <span class="text-stone-700 text-lg tracking-tight leading-none">Data Materi Tidak Ada</span>
                    </div>
                </div>
            @endforelse
            </div>
    </div>
</section>
<script>
    const toggleScoreButtons = document.querySelectorAll('.toggle-score-button');

    toggleScoreButtons.forEach(button => {
        button.addEventListener('click', () => {
            const scoreContainer = button.closest('.score-card').querySelector('.score-container');
            const actualScore = scoreContainer.querySelector('.actual-score');
            const hiddenScore = scoreContainer.querySelector('.hidden-score');

            scoreContainer.classList.toggle('hidden');

            if (!scoreContainer.classList.contains('hidden')) {
                // If score is visible, hide the default score and show the actual score
                actualScore.classList.remove('hidden');
                hiddenScore.classList.add('hidden');
            }
        });
    });

   function updateClock() {
      const clockElement = document.getElementById('clock');
      const now = new Date();
      const hours = now.getHours().toString().padStart(2, '0');
      const minutes = now.getMinutes().toString().padStart(2, '0');
      const seconds = now.getSeconds().toString().padStart(2, '0');
      const timeString = `${hours}:${minutes}:${seconds}`;
      clockElement.textContent = timeString;
   }

   // Update the clock every second
   setInterval(updateClock, 1000);

   // Initial update
   updateClock();

</script>
@endsection
