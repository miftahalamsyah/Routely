@extends('layouts.student_layout')

@section('content')
<section class="w-full justify-center mx-auto px-4 lg:px-12">
    <div class="mt-12 flex justify-center text-center text-stone-700 clashdisplaymedium">
        <p id="greeting" class="mb-4 text-2xl tracking-tight leading-none md:text-3xl">Selamat Datang</p>
        <p class="mb-4 text-2xl tracking-tight leading-none md:text-3xl">, {{ explode(' ', Auth::user()->name)[0] }}!</p>
    </div>
    <div class="flex flex-col sm:flex-row">
    {{-- siswa card --}}
        <div class="flex w-full p-4 mb-4 sm:mb-0 sm:mr-4 bg-stone-50 shadow-md justify-between border border-r-8 border-b-8 border-stone-700 transform hover:translate-y-[-5px] transition-transform duration-300 ease-in-out">
            {{-- siswa photo --}}
            <div class="flex">
                <div class="px-2">
                    <div class="flex items-center justify-center w-14 h-14 rounded-full bg-gradient-to-tl from-violet-500 to-orange-500 shadow-soft-2xl border border-r-4 border-b-4 border-stone-700">
                        <a href="/student/profile" class="text-stone-50 text-lg font-semibold">
                            {{ substr(Auth::user()->name, 0, 1) }}{{ substr(strrchr(Auth::user()->name, ' '), 1, 1) }}
                        </a>
                    </div>
                </div>
                {{-- siswa info --}}
                <div class="px-2">
                    <a href="/student/profile">
                        <p class="mb-0 font-semibold leading-normal text-sm hover:underline">{{ Auth::user()->name }}</p>
                        <p class="mb-0 text-xs hover:underline">{{ Auth::user()->email }}</p>
                        @if (Auth::user()->is_admin === 0)
                        <p class="mb-0 text-sm hover:underline">Siswa</p>
                        @else
                        <p class="mb-0 text-sm hover:underline">Guru</p>
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
        <div class="flex w-full p-4 sm:mb-0 bg-stone-50 shadow-md border border-r-8 border-b-8 border-stone-700 transform hover:translate-y-[-5px] transition-transform duration-300 ease-in-out">
            <div class="flex items-center justify-center">
                <div class="w-16 h-16 bg-gradient-to-tl from-violet-500 to-orange-500 rounded-full flex items-center justify-center border border-r-4 border-b-4 border-stone-700">
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
    <div class="p-4 mt-4 bg-violet-600 shadow-md rounded-md border border-stone-700 score-card ">
        <div class="justify-between flex">
            <p class="my-4 text-xl clashdisplaymedium tracking-tight leading-none text-stone-50 md:text-2xl">🏆 Nilai</p>
            <a href="/student/rapor">
                <p class="my-4 text-xs py-1 px-2 font-bold tracking-tight leading-none bg-violet-200 hover:bg-violet-300 rounded-sm shadow-md text-violet-900 md:text-sm border border-b-4 border-r-4 border-stone-700 transform hover:translate-y-[-5px] transition-transform duration-300 ease-in-out">Lihat Semua</p>
            </a>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3 gap-4 w-full mb-6">
            <div x-data="{ isOpenPretest: false }" class="flex-auto p-4 mb-4 sm:mb-0 bg-lime-200 text-stone-700 border border-r-4 border-b-4 border-stone-700 score-card">
                <div class="max-w-full h-16 px-3">
                    <div class="flex items-center justify-between">
                        <p class="mb-0 font-semibold leading-normal text-sm">Nilai Pre-Test</p>
                        <!-- Button to toggle score visibility -->
                        <div class="relative group">
                            <button @click="isOpenPretest = !isOpenPretest" class="toggle-score-button" aria-label="Toggle Score Visibility">
                                <p class="leading-normal text-xs hover:underline">Lihat</p>
                            </button>
                            <div class="tooltip hidden group-hover:block absolute bg-stone-600 text-stone-50 p-1 text-xs rounded-md shadow-md">
                                Lihat dan sembunyikan nilai
                            </div>
                        </div>
                    </div>
                    <!-- Score container initially hidden -->
                    <div x-show="isOpenPretest">
                        <p class="mb-0 font-extrabold text-3xl">{{ is_null($nilaiPretest) ? '-' : $nilaiPretest }}</p>
                    </div>
                </div>
            </div>

            <div x-data="{ isOpenTugas: false }" class="flex-auto p-4 mb-4 sm:mb-0 bg-sky-200 text-stone-700 border border-r-4 border-b-4 border-stone-700 score-card">
                <div class="max-w-full h-16 px-3">
                    <div class="flex items-center justify-between">
                        <p class="mb-0 font-semibold leading-normal text-sm">Nilai Kuis</p>
                        <!-- Button to toggle score visibility -->
                        <div class="relative group">
                            <button @click="isOpenTugas = !isOpenTugas" class="toggle-score-button" aria-label="Toggle Score Visibility">
                                <p class="leading-normal text-xs hover:underline">Lihat</p>
                            </button>
                            <div class="tooltip hidden group-hover:block absolute bg-stone-600 text-stone-50 p-1 text-xs rounded-md shadow-md">
                                Lihat dan sembunyikan nilai
                            </div>
                        </div>
                    </div>
                    <!-- Score container initially hidden -->
                    <div x-show="isOpenTugas">
                        <div class="grid grid-cols-3 w-full mb-0 font-extrabold text-3xl actual-score flex-shrink-0 overflow-x-auto">
                            @foreach($nilaiTugasRecords as $record)
                            <div class="flex flex-col">
                                <p class="mb-0 font-extrabold text-3xl actual-score mr-2">{{ $record->total }}</p>
                                <p class="mb-0 font-thin text-xs actual-score mr-2">Kuis {{ $record->pertemuan_id }}</p>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            <div x-data="{ isOpenPosttest: false }" class="flex-auto p-4 bg-fuchsia-300 text-stone-700 border border-r-4 border-b-4 border-stone-700 score-card">
                <div class="max-w-full h-16 gap-4">
                    <div class="flex items-center justify-between">
                        <p class="mb-0 font-semibold leading-normal text-sm">Nilai Post-Test</p>
                        <!-- Button to toggle score visibility -->
                        <div class="relative group">
                            <button @click="isOpenPosttest = !isOpenPosttest" class="toggle-score-button" aria-label="Toggle Score Visibility">
                                <p class="leading-normal text-xs hover:underline">Lihat</p>
                            </button>
                            <div class="tooltip hidden group-hover:block absolute bg-stone-600 text-stone-50 p-1 text-xs rounded-md shadow-md">
                                Lihat dan sembunyikan nilai
                            </div>
                        </div>
                    </div>
                    <!-- Score container initially hidden -->
                    <div x-show="isOpenPosttest">
                        <p class="mb-0 font-extrabold text-3xl actual-score">{{ is_null($nilaiPosttest) ? '-' : $nilaiPosttest }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-stone-50 rounded-md border border-r-4 border-b-4 border-stone-700 mt-4 p-4 shadow-md">
        <p class="my-4 text-xl clashdisplaymedium tracking-tight leading-none text-student-dark md:text-2xl">
            👥 Kelompok {{ $kelompokBelajar->no_kelompok ?? 'Belum Tersedia' }}
        </p>
        <table class="min-w-full mt-2">
            <thead>
                <tr>
                    <th class="py-2 px-4">#</th>
                    <th class="py-2 px-4">Nama</th>
                </tr>
            </thead>
            <tbody class="text-stone-700 text-left">
                @forelse ($usersInSameKelompok as $user)
                    <tr class="border-y-2">
                        <td class="py-2 px-4 text-center">{{ $loop->iteration }}</td>
                        <td class="py-2 px-4 text-center">{{ $user->name }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" class="px-6 py-4 whitespace-nowrap text-center">
                            <div class="mx-auto bg-gray-100 text-gray-600 p-2 rounded-xl">
                                Anda belum memiliki kelompok
                            </div>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="p-4 mt-4 bg-stone-50 shadow-md rounded-md border border-r-4 border-b-4 border-stone-700 score-card">
        <div class="justify-between flex">
            <p class="my-4 text-xl clashdisplaymedium tracking-tight leading-none text-student-dark md:text-2xl">✍🏻 Pelajari</p>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-4">
            <div class="relative flex flex-col break-words bg-stone-100 border border-stone-700 lg:mb-4 mb-0">
                <div class="flex-auto px-1 pt-6">
                    <p class="mb-6 px-2 leading-normal text-xl font-bold overflow-hidden h-8 ...">Problem Posing</p>
                    <div class="flex items-center justify-between px-2 pb-4">
                        <a href="/#problem-posing">
                            <button class="mr-2 text-sm relative inline-flex items-center justify-center px-4 py-2 overflow-hidden font-bold text-stone-50 transform hover:translate-y-[-5px] transition-transform duration-300 ease-in-out shadow-md bg-violet-500 hover:bg-violet-600 border border-r-4 border-b-4 border-stone-700">
                                Pelajari
                            </button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="relative flex flex-col break-words bg-stone-100 border border-stone-700 lg:mb-4 mb-0">
                <div class="flex-auto px-1 pt-6">
                    <p class="mb-6 px-2 leading-normal text-xl font-bold overflow-hidden h-8 ...">Berpikir Komputasi</p>
                    <div class="flex items-center justify-between px-2 pb-4">
                        <a href="/#berpikir-komputasi">
                            <button class="mr-2 text-sm relative inline-flex items-center justify-center px-4 py-2 overflow-hidden font-bold text-stone-50 transform hover:translate-y-[-5px] transition-transform duration-300 ease-in-out shadow-md bg-violet-500 hover:bg-violet-600 border border-r-4 border-b-4 border-stone-700">
                                Pelajari
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- pertemuan --}}
    <div class="p-4 mt-4  bg-stone-50 shadow-md rounded-md border border-r-4 border-b-4 border-stone-700 score-card">
        <div class="justify-between flex">
            <p class="my-4 text-xl clashdisplaymedium tracking-tight leading-none text-student-dark md:text-2xl">👨‍🏫 Pertemuan</p>
            <a href="/student/pertemuan">
                <p class="my-4 text-xs py-1 px-2 font-bold tracking-tight leading-none bg-violet-200 hover:bg-violet-300 rounded-sm shadow-md text-violet-900 md:text-sm border border-b-4 border-r-4 border-stone-700 transform hover:translate-y-[-5px] transition-transform duration-300 ease-in-out">Lihat Semua</p>
            </a>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
            @forelse ($pertemuans as $pertemuan)
            <!-- individual card -->
            <div class="relative flex flex-col break-words bg-stone-100 border border-stone-700 hover:shadow-md lg:mb-4 mb-0">
                <div class="flex-auto px-1 pt-6">
                    <p class="mb-6 px-2 leading-normal text-xl font-bold overflow-hidden ...">Pertemuan {{ $pertemuan->pertemuan_ke }}</p>
                    <div class="flex items-center justify-between px-2 pb-4">
                        <a href="/student/pertemuan/{{ $pertemuan->slug }}">
                            <button class="mr-2 text-sm relative inline-flex items-center justify-center px-4 py-2 overflow-hidden font-bold text-stone-50 transform hover:translate-y-[-5px] transition-transform duration-300 ease-in-out shadow-md bg-violet-500 hover:bg-violet-600 border border-r-4 border-b-4 border-stone-700">
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

    <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-2 gap-4">
        {{-- tugas --}}
        <div class="p-4 mt-4 bg-stone-50 shadow-md rounded-md border border-r-4 border-b-4 border-stone-700 score-card overflow-x-auto">
            <div class="flex justify-between my-4 text-xl tracking-tight leading-none text-student-dark md:text-2xl">
                <p class="clashdisplaymedium">📝 Tugas</p>
                <p class="text-xs md:text-md tracking-tight my-auto border border-stone-700 border border-b-4 border-r-4 bg-violet-200 rounded-sm text-student-dark py-1 px-2">{{ $StudentTugasCount }} /  {{ $tugasCount }} tugas dikerjakan</p>
            </div>
            <div class="flex gap-4 w-full overflow-x-auto">
                @forelse ($tugass as $tugas)
                    <!-- individual card -->
                    <div class="relative grid break-words bg-stone-100 border border-stone-700 hover:shadow-lg w-64 h-64 flex-shrink-0">
                        <div class="flex-auto px-1 pt-6">
                            <div class="mx-2">
                                @php
                                    $submission = $submissions[$tugas->id] ?? null;
                                @endphp

                                @if($submission)
                                    <span class="text-green-500 text-right text-xs font-semibold">✅ Sudah Dikerjakan</span>
                                @else
                                    <span class="text-red-500 text-right text-xs font-semibold">❌ Belum Dikerjakan</span>
                                @endif
                                <p class="pt-2 text-xs text-stone-500">Pertemuan ke-{{$tugas->pertemuan_id}}</p>
                                <a href="/student/tugas/{{ $tugas->slug }}">
                                    <h2 class="hover:underline leading-normal text-lg font-bold h-12">{{ $tugas->name }}</h2>
                                </a>
                            </div>
                            <div class="absolute bottom-0 left-0 my-4 px-2">
                                <a href="/student/tugas/{{ $tugas->slug }}">
                                    <button class="mr-2 text-sm relative inline-flex items-center justify-center px-4 py-2 overflow-hidden font-bold text-stone-50 transform hover:translate-y-[-5px] transition-transform duration-300 ease-in-out shadow-md bg-violet-500 hover:bg-violet-600 border border-r-4 border-b-4 border-stone-700">
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

        <div class="p-4 mt-4 bg-stone-50 shadow-md rounded-md border border-r-4 border-b-4 border-stone-700 score-card overflow-x-auto">
            <div class="justify-between flex">
                <p class="my-4 text-xl clashdisplaymedium tracking-tight leading-none text-student-dark md:text-2xl">📖 Materi</p>
                <a href="/student/materi">
                    <p class="my-4 text-xs py-1 px-2 font-bold tracking-tight leading-none bg-violet-200 hover:bg-violet-300 rounded-sm shadow-md text-violet-900 md:text-sm border border-b-4 border-r-4 border-stone-700 transform hover:translate-y-[-5px] transition-transform duration-300 ease-in-out">Lihat Semua</p>
                </a>
            </div>
            <div class="flex gap-4 w-full overflow-x-auto">
                @forelse ($materis as $materi)
                    <!-- individual card -->
                    <div class="relative grid break-words bg-stone-100 border border-stone-700 hover:shadow-lg w-64 h-64 flex-shrink-0">
                        <div class="flex-auto px-2 pt-6">
                            <p class="pt-2 text-xs text-stone-500">Pertemuan ke-{{$materi->pertemuan_id}}</p>
                            <a href="/student/materi/{{ $materi->slug }}">
                                <h2 class="hover:underline leading-normal text-lg font-bold">{{ $materi->title }}</h2>
                            </a>
                            <p class="mb-6 leading-normal text-sm overflow-hidden h-24 ...">{{ $materi->description }}</p>
                            <div class="absolute bottom-0 left-0 my-4 px-2">
                                <a href="/student/materi/{{ $materi->slug }}">
                                    <button class="mr-2 text-sm relative inline-flex items-center justify-center px-4 py-2 overflow-hidden font-bold text-stone-50 transform hover:translate-y-[-5px] transition-transform duration-300 ease-in-out shadow-md bg-violet-500 hover:bg-violet-600 border border-r-4 border-b-4 border-stone-700">
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
    </div>
</section>
<script>
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
