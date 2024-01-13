@extends('layouts.student_layout')

@section('content')
<section class="w-full justify-center mx-auto px-4 lg:px-12">
    <div class="mt-12 flex justify-center text-center">
        <p id="greeting" class="mb-4 text-2xl font-extrabold tracking-tight leading-none text-student-dark md:text-3xl">Selamat Datang</p>
        <p class="mb-4 text-2xl font-extrabold tracking-tight leading-none text-student-dark md:text-3xl">, {{ explode(' ', Auth::user()->name)[0] }}!</p>
    </div>
    <div class="flex flex-col sm:flex-row">
    {{-- siswa card --}}
        <div class="flex w-full p-4 mb-4 sm:mb-0 sm:mr-4 bg-stone-50 shadow-md rounded-2xl justify-between">
            {{-- siswa photo --}}
            <div class="flex">
                <div class="px-2">
                    <div class="flex items-center justify-center w-14 h-14 rounded-full bg-gradient-to-tl from-violet-500 to-orange-500 shadow-soft-2xl">
                        <a href="/student/profile" class="text-stone-50 text-lg font-semibold">
                            {{ substr(Auth::user()->name, 0, 1) }}{{ substr(strrchr(Auth::user()->name, ' '), 1, 1) }}
                        </a>
                    </div>
                </div>
                {{-- siswa info --}}
                <div class="px-2">
                    <a  href="/student/profile">
                    <p class="mb-0 font-semibold leading-normal text-sm">{{ Auth::user()->name }}</p>
                    <p class="mb-0 text-xs">{{ Auth::user()->email }}</p>
                    @if (Auth::user()->is_admin === 0)
                    <p class="mb-0 text-sm">Siswa</p>
                    @else
                    <p class="mb-0 text-sm">Guru</p>
                    @endif
                    </a>
                </div>
            </div>
            {{-- siswa edit profile --}}
            <div class="max-w-full px-2 hidden md:block">
                <a href="/student/profile" class="mb-0 text-xs leading-normal text-student hover:underline">
                    Lihat Profil
                </a>
            </div>
        </div>
        {{-- clock card --}}
        <div class="flex w-full p-4 sm:mb-0 bg-stone-50 shadow-md rounded-2xl">
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
    <div class="p-4 mt-12 bg-student shadow-md rounded-2xl score-card">
        <p class="my-4 text-xl font-extrabold tracking-tight leading-none text-stone-50 md:text-2xl">🏆 Score</p>
        <div class="flex flex-col sm:flex-row w-full mb-6">
            <div class="flex-auto p-4 mb-4 sm:mb-0 sm:mr-4 bg-student-dark rounded-2xl score-card">
                <div class="max-w-full h-16 px-3">
                    <div class="flex items-center justify-between">
                        <p class="mb-0 text-stone-50 font-semibold leading-normal text-sm">Nilai Pre-Test</p>
                        <!-- Button to toggle score visibility -->
                        <div class="relative group">
                            <button class="toggle-score-button" aria-label="Toggle Score Visibility">
                                <p class="text-stone-50 leading-normal text-xs hover:underline">Lihat</p>
                            </button>
                            <div class="tooltip hidden group-hover:block absolute bg-stone-600 shadow-md text-stone-50 p-1 text-xs rounded-md shadow-md">
                                Lihat dan sembunyikan nilai
                            </div>
                        </div>
                    </div>
                    <!-- Score container initially hidden -->
                    <div class="score-container hidden">
                        <p class="mb-0 text-stone-50 font-extrabold text-3xl actual-score">{{ is_null($nilaiPretest) ? '-' : $nilaiPretest }}</p>
                        <p class="mb-0 text-stone-50 font-extrabold text-3xl hidden-score">***</p>
                    </div>
                </div>
            </div>

            <div class="flex-auto p-4 mb-4 sm:mb-0 sm:mr-4 bg-student-dark rounded-2xl score-card">
                <div class="max-w-full h-16 px-3">
                    <div class="flex items-center justify-between">
                        <p class="mb-0 text-stone-50 font-semibold leading-normal text-sm">Nilai Tugas</p>
                        <!-- Button to toggle score visibility -->
                        <div class="relative group">
                            <button class="toggle-score-button" aria-label="Toggle Score Visibility">
                                <p class="text-stone-50 leading-normal text-xs hover:underline">Lihat</p>
                            </button>
                            <div class="tooltip hidden group-hover:block absolute bg-stone-600 shadow-md text-stone-50 p-1 text-xs rounded-md shadow-md">
                                Lihat dan sembunyikan nilai
                            </div>
                        </div>
                    </div>
                    <!-- Score container initially hidden -->
                    <div class="score-container hidden">
                        <p class="mb-0 text-stone-50 font-extrabold text-3xl actual-score">70</p>
                        <p class="mb-0 text-stone-50 font-extrabold text-3xl hidden-score">***</p>
                    </div>
                </div>
            </div>


            <div class="flex-auto p-4 bg-student-dark rounded-2xl score-card">
                <div class="max-w-full h-16 gap-4">
                    <div class="flex items-center justify-between">
                        <p class="mb-0 text-stone-50 font-semibold leading-normal text-sm">Nilai Post-Test</p>
                        <!-- Button to toggle score visibility -->
                        <div class="relative group">
                            <button class="toggle-score-button" aria-label="Toggle Score Visibility">
                                <p class="text-stone-50 leading-normal text-xs hover:underline">Lihat</p>
                            </button>
                            <div class="tooltip hidden group-hover:block absolute bg-stone-600 shadow-md text-stone-50 p-1 text-xs rounded-md shadow-md">
                                Lihat dan sembunyikan nilai
                            </div>
                        </div>
                    </div>
                    <!-- Score container initially hidden -->
                    <div class="score-container hidden">
                        <p class="mb-0 text-stone-50 font-extrabold text-3xl actual-score">{{ is_null($nilaiPosttest) ? '-' : $nilaiPosttest }}</p>
                        <p class="mb-0 text-stone-50 font-extrabold text-3xl hidden-score">***</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- pertemuan --}}
    <div class="p-4 mt-12 bg-stone-50 shadow-md rounded-2xl score-card">
        <div class="justify-between flex">
            <p class="my-4 text-xl font-extrabold tracking-tight leading-none text-student-dark md:text-2xl">👨‍🏫 Pertemuan</p>
            <a href="/student/pertemuan"><p class="my-4 text-xs py-1 px-2 font-extrabold tracking-tight leading-none bg-violet-200 hover:bg-violet-300 rounded-lg shadow-md text-student-dark md:text-sm">Lihat Semua</p></a>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-4 gap-4">
            @forelse ($pertemuans as $pertemuan)
            <!-- individual card -->
            <div class="relative flex flex-col break-words bg-stone-100 border-2 hover:shadow-md rounded-2xl lg:mb-4 mb-0">
                <div class="flex-auto px-1 pt-6">
                    <p class="mb-6 px-2 leading-normal text-xl font-bold overflow-hidden h-24 ...">Pertemuan {{ $pertemuan->pertemuan_ke }}</p>
                    <div class="flex items-center justify-between px-2 pb-4">
                        <a href="/student/pertemuan/{{ $pertemuan->slug }}">
                            <button class="mr-2 text-sm text-student relative inline-flex items-center justify-center px-4 py-2 overflow-hidden font-bold text-stone-900 transition duration-300 ease-out border bg-violet-200 rounded-xl shadow-md hover:bg-violet-300 ">
                                Lihat Pertemuan
                            </button>
                        </a>
                    </div>
                </div>
            </div>
            @empty
            <div class="flex w-full p-4 sm:mb-0 sm:mr-4 bg-stone-100 border-2 shadow-md rounded-2xl score-card">
                <div class="max-w-full px-3 mx-auto text-center">
                    <span class="text-stone-700 text-md tracking-tight leading-none">Tidak ada Tugas</span>
                </div>
            </div>
            @endforelse
        </div>
    </div>

    {{-- tugas --}}
    <div class="p-4 mt-12 bg-stone-50 shadow-md rounded-2xl score-card">
        <p class="my-4 text-xl font-extrabold tracking-tight leading-none text-student-dark md:text-2xl">📝 Tugas</p>
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
            @forelse ($tugass as $tugas)
                <!-- individual card -->
                <div class="relative flex flex-col break-words bg-stone-100 border-2 rounded-2xl hover:shadow-lg">
                    <div class="flex-auto px-1 pt-6">
                        <div>
                            @if ($tugas->submission_status === 'submitted')
                            <div class="justify-between flex items-center mb-2 px-2">
                                <a href="/student/tugas/{{ $tugas->slug }}">
                                    <h2 class="text-xl font-bold">{{ $tugas->name }}</h2>
                                </a>
                                <span class="text-green-500 text-sm font-semibold">Dikerjakan</span>
                            </div>
                            @else
                            <div class="justify-between flex items-center mb-2 px-2">
                                <a href="/student/tugas/{{ $tugas->slug }}">
                                    <h2 class="text-xl font-bold">{{ $tugas->name }}</h2>
                                </a>
                                <span class="text-red-500 text-sm font-semibold">Belum Dikerjakan</span>
                            </div>
                            @endif
                        </div>
                        <p class="mb-6 px-2 leading-normal text-sm overflow-hidden h-24 ...">{{ $tugas->description }}</p>
                        <div class="flex items-center justify-between px-2 pb-4">
                            <a href="/student/tugas/{{ $tugas->slug }}">
                            <button class="mr-2 text-sm text-student relative inline-flex items-center justify-center px-4 py-2 overflow-hidden font-bold text-stone-900 transition duration-300 ease-out border bg-violet-200 rounded-xl shadow-md hover:bg-violet-300 ">
                                Lihat Tugas
                            </button>
                            </a>
                        </div>
                    </div>
                </div>
            @empty
                <div class="flex w-full p-4 sm:mb-0 sm:mr-4 bg-stone-100 border-2 shadow-md rounded-2xl score-card">
                    <div class="max-w-full px-3 mx-auto text-center">
                        <span class="text-stone-700 text-md tracking-tight leading-none">Tidak ada Tugas</span>
                    </div>
                </div>
            @endforelse
            </div>
    </div>

    <div class="p-4 mt-12 bg-stone-50 shadow-md rounded-2xl score-card">
        <div class="justify-between flex">
            <p class="my-4 text-xl font-extrabold tracking-tight leading-none text-student-dark md:text-2xl">📖 Materi</p>
            <a href="/student/materi"><p class="my-4 text-xs py-1 px-2 font-extrabold tracking-tight leading-none hover:bg-violet-300 bg-violet-200 rounded-lg shadow-md text-student-dark md:text-sm">Lihat Semua</p></a>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
            @forelse ($materis as $materi)
                <!-- individual card -->
                <div class="relative flex flex-col break-words bg-stone-100 border-2 rounded-2xl hover:shadow-lg">
                    <div class="relative">
                        <a class="block shadow rounded-2xl">
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
                                <button class="mr-2 text-sm text-student relative inline-flex items-center justify-center px-4 py-2 overflow-hidden font-bold text-stone-900 transition duration-300 ease-out border bg-violet-200 rounded-xl shadow-md hover:bg-violet-300 ">
                                    Lihat Materi
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            @empty
                <div class="flex w-full p-4 sm:mb-0 sm:mr-4 bg-stone-100 border-2 shadow-md rounded-2xl score-card">
                    <div class="max-w-full px-3 mx-auto text-center">
                    <span class="text-stone-700 text-md tracking-tight leading-none">Tidak ada materi</span>
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
            const scoreCard = button.closest('.score-card');
            const scoreContainer = scoreCard.querySelector('.score-container');
            const actualScore = scoreContainer.querySelector('.actual-score');
            const hiddenScore = scoreContainer.querySelector('.hidden-score');

            scoreContainer.classList.toggle('hidden');

            if (!scoreContainer.classList.contains('hidden')) {
                // If score is visible, hide the default score and show the actual score
                actualScore.classList.remove('hidden');
                hiddenScore.classList.add('hidden');
            } else {
                // If score is hidden, hide the actual score and show the default score
                actualScore.classList.add('hidden');
                hiddenScore.classList.remove('hidden');
            }
        });
    });


    // Get the current hour (0-23) from the user's system clock
     const currentHour = new Date().getHours();

    // Find the greeting based on the current hour
    let greeting;
    if (currentHour >= 3 && currentHour < 10) {
        greeting = 'Selamat Pagi';
    } else if (currentHour >= 10 && currentHour < 15) {
        greeting = 'Selamat Siang';
    } else if (currentHour >= 15 && currentHour < 18) {
        greeting = 'Selamat Sore';
    } else {
        greeting = 'Selamat Malam';
    }

    document.getElementById('greeting').textContent = greeting;

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
