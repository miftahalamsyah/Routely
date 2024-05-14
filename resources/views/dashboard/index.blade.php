@extends('dashboard.layout')

@section('content')
<section class="flex-1 p-4 mt-8 max-w-6xl mx-auto items-center transition-margin ease-in-out duration-300">
    <div class="mb-8 text-center">
        <h1 class="mb-6 text-xl font-extrabold leading-none max-w-5xl mx-auto tracking-normal text-stone-300 sm:text-3xl md:text-2xl lg:text-3xl md:tracking-tight"><span class="w-full text-transparent bg-clip-text bg-gradient-to-r from-violet-700 via-purple-500 to-violet-300 lg:inline">Routely</span>&nbsp;Dashboard Guru</h1>
    </div>

    <div class="mx-2 grid grid-cols-1 sm:grid-cols-3 md:grid-cols-3 lg:grid-cols-5 gap-2 my-5">
        <a href="/dashboard/siswa">
            <div class="w-full h-24 bg-stone-700 text-stone-300 p-4 block rounded-xl border-stone-600 border-2 hover:bg-stone-600">
                Siswa
                <p class="font-bold text-3xl py-2">{{ $userCount }}</p>
            </div>
        </a>
        <a href="/dashboard/kelompok">
            <div class="w-full h-24 bg-stone-700 text-stone-300 p-4 block rounded-xl border-stone-600 border-2 hover:bg-stone-600">
                Kelompok
                <p class="font-bold text-3xl py-2">{{ $kelompokCount }}</p>
            </div>
        </a>
        <a href="/dashboard/pertemuan">
            <div class="w-full h-24 bg-stone-700 text-stone-300 p-4 block rounded-xl border-stone-600 border-2 hover:bg-stone-600">
                Pertemuan
                <p class="font-bold text-3xl py-2">{{ $pertemuanCount }}</p>
            </div>
        </a>
        <a href="/dashboard/materi">
            <div class="w-full h-24 bg-stone-700 text-stone-300 p-4 block rounded-xl border-stone-600 border-2 hover:bg-stone-600">
                Materi
                <p class="font-bold text-3xl py-2">{{ $materiCount }}</p>
            </div>
        </a>
        <a href="/dashboard/tugas">
            <div class="w-full h-24 bg-stone-700 text-stone-300 p-4 block rounded-xl border-stone-600 border-2 hover:bg-stone-600">
                Tugas
                <p class="font-bold text-3xl py-2">{{ $tugasCount }}</p>
            </div>
        </a>
    </div>

    <div class="mx-2 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-2 my-5">
        <a href="/dashboard/nilai/pretest" class="text-sm">
            <div class="w-full h-full bg-stone-700 text-stone-300 p-4 block rounded-xl border-stone-600 border-2 hover:bg-stone-600">
                Pretest
                <p class="font-bold text-2xl py-2">{{ $CountPretest }}/{{ $userCount }}</p>
                <div class="w-full bg-stone-300 rounded-full">
                    <div class="bg-violet-600 text-xs font-medium text-stone-300 text-center p-0.5 leading-none rounded-full"
                        style="width: {{ ($CountPretest / $userCount) * 100 }}%">
                        {{ round(($CountPretest / $userCount) * 100) }}%
                    </div>
                </div>
            </div>
        </a>
        <a href="/dashboard/nilai/pretest" class="text-sm">
            <div class="w-full h-full bg-stone-700 text-stone-300 p-4 block rounded-xl border-stone-600 border-2 hover:bg-stone-600">
                Rata-rata Pretest
                <p class="font-bold text-2xl py-2">{{ $averagePretest }}</p>
            </div>
        </a>
        <a href="/dashboard/nilai/posttest" class="text-sm">
            <div class="w-full h-full bg-stone-700 text-stone-300 p-4 block rounded-xl border-stone-600 border-2 hover:bg-stone-600">
                Posttest
                <p class="font-bold text-2xl py-2">{{ $CountPosttest }}/{{ $userCount }}</p>
                <div class="w-full bg-stone-300 rounded-full">
                    <div class="bg-violet-600 text-xs font-medium text-stone-300 text-center p-0.5 leading-none rounded-full"
                        style="width: {{ ($CountPosttest / $userCount) * 100 }}%">
                        {{ round(($CountPosttest / $userCount) * 100) }}%
                    </div>
                </div>
            </div>
        </a>
        <a href="/dashboard/nilai/posttest" class="text-sm">
            <div class="w-full h-full bg-stone-700 text-stone-300 p-4 block rounded-xl border-stone-600 border-2 hover:bg-stone-600">
                Rata-rata Posttest
                <p class="font-bold text-2xl py-2">{{ $averagePosttest }}</p>
            </div>
        </a>
    </div>

    {{-- Pengerjaan tugas --}}
    <div class="my-5 mx-2 block rounded-xl border-stone-600 border p-8 bg-stone-700">
        <h2 class="mb-6 text-2xl font-extrabold leading-none max-w-5xl tracking-normal text-stone-300 sm:text-2xl md:text-3xl lg:text-4xl md:tracking-tight">Pengerjaan Tugas</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            @forelse ($tugass as $tugas)
                <a href="/dashboard/tugas/{{ $tugas->id }}" class="text-xs h-30 bg-stone-700 hover:bg-stone-600 text-stone-400 p-4 block rounded-xl border-stone-600 border-2">
                    Tugas {{ $tugas->id }}
                    @php
                        $tugas_id = $tugas->id;
                        $hasilTugasSiswaCount = \App\Models\HasilTugasSiswa::where('tugas_id', $tugas_id)->count();
                    @endphp
                    <p class="font-normal text-stone-300 text-sm py-2">{{ $hasilTugasSiswaCount }} dari {{ $userCount }} siswa telah mengerjakan</p>
                    <div class="w-full bg-stone-300 rounded-full">
                        <div class="bg-violet-600 text-xs font-medium text-stone-300 text-center p-0.5 leading-none rounded-full"
                            style="width: {{ ($hasilTugasSiswaCount / $userCount) * 100 }}%">
                            {{ round(($hasilTugasSiswaCount / $userCount) * 100) }}%
                        </div>
                    </div>
                </a>
            @empty
                <div class="text-center">
                    <div class="mx-auto bg-stone-700 text-stone-300 p-2 rounded-xl">
                        Data tugas tidak tersedia.
                    </div>
                </div>
            @endforelse
        </div>
    </div>

    {{-- Pengerjaan kuis --}}
    <div class="my-5 mx-2 block rounded-xl border-stone-600 border p-8 bg-stone-700">
        <h2 class="mb-6 text-2xl font-extrabold leading-none max-w-5xl tracking-normal text-stone-300 sm:text-2xl md:text-3xl lg:text-4xl md:tracking-tight">Pengerjaan Kuis</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 text-stone-300">
            @foreach ($hasilKuisSiswa->unique('pertemuan_id') as $uniqueHasilKuisSiswa)
                @php
                    $pertemuan_id = $uniqueHasilKuisSiswa->pertemuan_id;
                    $hasilKuisSiswaCount = \App\Models\HasilKuisSiswa::where('pertemuan_id', $pertemuan_id)->count();
                @endphp
                <a href="/dashboard/nilai/kuis#{{ $loop->iteration }}" class="text-xs h-30 bg-stone-700 hover:bg-stone-600 text-stone-400 p-4 block rounded-xl border-stone-600 border-2">
                    Kuis Pertemuan {{ $loop->iteration }}
                    <p class="font-normal text-stone-300 text-sm py-2">{{ $hasilKuisSiswaCount }} dari {{ $userCount }} siswa telah mengerjakan</p>
                    <div class="w-full bg-stone-300 rounded-full">
                        <div class="bg-violet-600 text-xs font-medium text-stone-300 text-center p-0.5 leading-none rounded-full"
                            style="width: {{ ($hasilKuisSiswaCount / $userCount) * 100 }}%">
                            {{ round(($hasilKuisSiswaCount / $userCount) * 100) }}%
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>

    <!-- Daftar Pertemuan -->
    <div class="my-5 mx-2 block rounded-xl border-stone-600 border p-8 bg-stone-700" style="max-height: 400px; overflow-y: auto;">
        <h2 class="mb-6 text-2xl font-extrabold leading-none max-w-5xl tracking-normal text-stone-300 sm:text-2xl md:text-3xl lg:text-4xl md:tracking-tight">Daftar Pertemuan</h2>
        <table class="min-w-full divide-y divide-stone-500 text-stone-300">
            <thead>
                <tr>
                    <th scope="col" class="px-3 py-3 text-center text-xs font-medium uppercase tracking-wider">
                        Pertemuan Ke
                    </th>
                    <th scope="col" class="px-3 py-3 text-center text-xs font-medium uppercase tracking-wider">
                        Tanggal
                    </th>
                    <th scope="col" class="px-3 py-3 text-center text-xs font-medium uppercase tracking-wider">
                        Materi
                    </th>
                    <th scope="col" class="px-3 py-3 text-center text-xs font-medium uppercase tracking-wider">
                        Tugas
                    </th>
                </tr>
            </thead>
            <tbody class="divide-y divide-stone-500">
            @forelse ($pertemuans as $pertemuan)
                <tr>
                    <td class="px-3 py-4 whitespace-nowrap text-center">
                        {{ $pertemuan->pertemuan_ke }}
                    </td>
                    <td class="px-3 py-4 whitespace-nowrap">
                        {{ $pertemuan->tanggal }}
                    </td>
                    <td class="px-3 py-4 whitespace-nowrap">
                        @foreach ($pertemuan->materi as $materi)
                            {{ $materi->title }}
                            {{-- Add a separator if there are more than one Materi --}}
                            @if (!$loop->last)
                                ,
                            @endif
                        @endforeach
                    </td>
                    <td class="px-3 py-4 whitespace-nowrap">
                        @foreach ($pertemuan->tugas as $tugas)
                            {{ $tugas->name }}
                            {{-- Add a separator if there are more than one Materi --}}
                            @if (!$loop->last)
                                ,
                            @endif
                        @endforeach
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="3" class="px-6 py-4 whitespace-nowrap text-center">
                        <div class="mx-auto bg-gray-100 text-gray-600 p-2 rounded-xl">
                            Data pertemuan tidak tersedia.
                        </div>
                    </td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>

    <!-- Daftar Tugas -->
    <div class="my-5 mx-2 block rounded-xl border-stone-600 border p-8 bg-stone-700" style="max-height: 400px; overflow-y: auto;">
        <h2 class="mb-6 text-2xl font-extrabold leading-none max-w-5xl tracking-normal text-stone-300 sm:text-2xl md:text-3xl lg:text-4xl md:tracking-tight">Daftar Tugas</h2>
        <table class="min-w-full divide-y divide-stone-500 text-stone-300">
            <thead>
                <tr>
                    <th scope="col" class="px-3 py-3 text-center text-xs font-medium uppercase tracking-wider">
                        No
                    </th>
                    <th scope="col" class="px-3 py-3 text-center text-xs font-medium uppercase tracking-wider">
                        Nama Tugas
                    </th>
                    <th scope="col" class="px-3 py-3 text-center text-xs font-medium uppercase tracking-wider">
                        Deskripsi
                    </th>
                    <th scope="col" class="px-3 py-3 text-center text-xs font-medium uppercase tracking-wider">
                        Batas Pengumpulan
                    </th>
                </tr>
            </thead>
            <tbody class="divide-y divide-stone-500">
            @forelse ($tugass as $index => $tugas)
                <tr>
                    <td class="px-3 py-4 whitespace-nowrap text-center">
                        {{ $loop->iteration }}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        {{ $tugas->name }}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        {{ $tugas->description }}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        {{ $tugas->due_date }}
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="3" class="px-6 py-4 whitespace-nowrap text-center">
                        <div class="mx-auto bg-gray-100 text-gray-600 p-2 rounded-xl">
                            Data users tidak tersedia.
                        </div>
                    </td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>

    <!-- Daftar Materi -->
    <div class="my-5 mx-2 block rounded-xl border border-stone-600 p-8 bg-stone-700 overflow-x-auto">
        <h2 class="mb-6 text-2xl font-extrabold leading-none max-w-5xl tracking-normal text-stone-300 sm:text-2xl md:text-3xl lg:text-4xl md:tracking-tight">Daftar Materi</h2>
        <table class="min-w-full divide-y divide-stone-500 text-stone-300 my-4">
            <thead>
                <tr>
                    <th scope="col" class="px-3 py-3 text-center text-xs font-medium uppercase tracking-wider">
                        No
                    </th>
                    <th scope="col" class="px-3 py-3 text-center text-xs font-medium uppercase tracking-wider">
                        Title
                    </th>
                    <th scope="col" class="px-3 py-3 text-center text-xs font-medium uppercase tracking-wider">
                        PDF File
                    </th>
                    <th scope="col" class="px-3 py-3 text-center text-xs font-medium uppercase tracking-wider">
                        Description
                    </th>
                </tr>
            </thead>
            <tbody class="divide-y divide-stone-500">
            @forelse ($materis as $index => $materi)
                <tr>
                    <td class="px-3 py-4 whitespace-nowrap text-center">
                        {{ $loop->iteration }}
                    </td>
                    <td class="px-3 py-4 whitespace-nowrap">
                        {{ Illuminate\Support\Str::words($materi->title, 5, '...') }}
                    </td>
                    <td class="px-3 py-4 whitespace-nowrap">
                        {{ $materi->pdf_file }}
                    </td>
                    <td class="px-3 py-4 whitespace-nowrap">
                        {{ Illuminate\Support\Str::words($materi->description, 5, '...') }}
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="3" class="px-6 py-4 whitespace-nowrap text-center">
                        <div class="mx-auto bg-gray-100 text-gray-600 p-2 rounded-xl">
                            Data Materi tidak tersedia.
                        </div>
                    </td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>

    {{-- Daftar Siswa --}}
    <div class="my-5 mx-2 block rounded-xl border border-stone-600 p-8 bg-stone-700" style="max-height: 400px; overflow-y: auto;">
        <h2 class="mb-6 text-2xl font-extrabold leading-none max-w-5xl tracking-normal text-stone-300 sm:text-2xl md:text-3xl lg:text-4xl md:tracking-tight">Daftar Siswa</h2>
        <table class="min-w-full divide-y divide-stone-500 text-stone-300">
            <thead>
                <tr>
                    <th scope="col" class="px-3 py-3 text-center text-xs font-medium uppercase tracking-wider">
                        No
                    </th>
                    <th scope="col" class="px-3 py-3 text-center text-xs font-medium uppercase tracking-wider">
                        Nama
                    </th>
                    <th scope="col" class="px-3 py-3 text-center text-xs font-medium uppercase tracking-wider">
                        Email
                    </th>
                </tr>
            </thead>
            <tbody class="divide-y divide-stone-500">
            @forelse ($users as $user)
                <tr>
                    <td class="px-3 py-4 whitespace-nowrap text-center">
                        {{ $loop->iteration }}
                    </td>
                    <td class="px-3 py-4 whitespace-nowrap">
                        {{ $user->name }}
                    </td>
                    <td class="px-3 py-4 whitespace-nowrap">
                        {{ $user->email }}
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="3" class="px-6 py-4 whitespace-nowrap text-center">
                        <div class="mx-auto bg-stone-100 text-gray-600 p-2 rounded-xl">
                            Data users tidak tersedia.
                        </div>
                    </td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>

    {{-- Leaderboard --}}
    <div class="my-5 mx-2 block rounded-xl border border-stone-600 p-8 bg-stone-700" style="max-height: 400px; overflow-y: auto;">
        <div class="p-4 mx-auto text-center">
            <h2 class="text-2xl font-extrabold tracking-tight leading-none text-stone-300 sm:text-2xl md:text-3xl lg:text-4xl"><span class="w-full text-transparent bg-clip-text bg-gradient-to-r from-violet-700 via-purple-500 to-violet-300 lg:inline"> Routely </span>League</h2>
            {{-- table user leaderboard --}}
            <div class="overflow-x-auto">
                <table class="w-full mt-8">
                    <thead class="text-stone-300">
                        <tr>
                            <th class="py-2 px-4">#</th>
                            <th class="py-2 px-4">Nama</th>
                            <th class="py-2 px-4 font-semibold">Total Score</th>
                        </tr>
                    </thead>
                    <tbody class="text-stone-300">
                        @php $index = 0; @endphp
                        @forelse ($users->sortByDesc(function($user) {
                            return $user->nilai->sum('total_nilai');
                        }) as $user)
                            @php $index++; @endphp
                            <tr class="border-y border-stone-500">
                                <td class="py-2 px-4 text-center">{{ $index }}</td>
                                <td class="py-2 px-4 text-center">{{ $user->name }}</td>
                                <td class="py-2 px-4 font-semibold text-center">{{ $user->nilai->sum('total_nilai') * 69 }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="3" class="px-6 py-4 whitespace-nowrap text-center">
                                    <div class="mx-auto bg-gray-100 text-gray-600 p-2 rounded-xl">
                                        Data leaderboard tidak tersedia.
                                    </div>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</section>
@endsection
