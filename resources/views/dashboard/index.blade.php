@extends('dashboard.layout')

@section('content')
<section class="flex-1 p-4 mt-10 max-w-6xl mx-auto items-center animate-up transition-margin ease-in-out duration-300">
    <div class="mb-16 text-center">
        <h1 class="mb-6 text-3xl font-extrabold leading-none max-w-5xl mx-auto tracking-normal text-gray-50 sm:text-3xl md:text-4xl lg:text-5xl md:tracking-tight"><span class="w-full text-transparent bg-clip-text bg-gradient-to-r from-violet-700 via-purple-500 to-violet-300 lg:inline">Routely</span>&nbsp;Dashboard Guru</h1>
    </div>

    <!-- quick dashboard monitor card for number of materis and users-->
    <div class="mx-2 flex flex-col sm:flex-row ">
        <div class="w-full h-24 bg-stone-700 text-gray-50 p-4 max-w-sm block rounded-xl border border-stone-600 border-2 mr-2 mb-2">
            Siswa
            <p class="font-bold text-3xl py-2" id="userCount">Loading...</p>
        </div>
        <div class="w-full h-24 bg-stone-700 text-gray-50 p-4 max-w-sm block rounded-xl border border-stone-600 border-2 mr-2 mb-2">
            Materi
            <p class="font-bold text-3xl py-2" id="materiCount">Loading...</p>
        </div>
        <div class="w-full h-24 bg-stone-700 text-gray-50 p-4 max-w-sm block rounded-xl border border-stone-600 border-2 mr-2 mb-2">
            Ditugaskan
        </div>
        <div class="w-full h-24 bg-stone-700 text-gray-50 p-4 max-w-sm block rounded-xl border border-stone-600 border-2 mb-2">
            Diselesaikan
        </div>
    </div>

                    <!-- Daftar Tugas -->
    <div class="my-5 mx-2 block rounded-xl border border-stone-600 p-8 bg-stone-700">
        <h1 class="mb-6 text-2xl font-extrabold leading-none max-w-5xl tracking-normal text-gray-50 sm:text-2xl md:text-3xl lg:text-4xl md:tracking-tight">Daftar Pertemuan</h1>
        <table class="min-w-full divide-y divide-gray-200 text-gray-50">
            <thead>
                <tr>
                    <th scope="col" class="px-3 py-3 text-left text-xs font-medium uppercase tracking-wider">
                        Pertemuan Ke
                    </th>
                    <th scope="col" class="px-3 py-3 text-left text-xs font-medium uppercase tracking-wider">
                        Materi
                    </th>
                    <th scope="col" class="px-3 py-3 text-left text-xs font-medium uppercase tracking-wider">
                        Tugas
                    </th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
            @forelse ($pertemuans as $pertemuan)
                <tr>
                    <td class="px-3 py-4 whitespace-nowrap">
                        {{ $pertemuan->pertemuan_ke }}
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

            <!-- Daftar Pertemuan -->
    <div class="my-5 mx-2 block rounded-xl border border-stone-600 border p-8 bg-stone-700" style="max-height: 400px; overflow-y: auto;">
        <h1 class="mb-6 text-2xl font-extrabold leading-none max-w-5xl tracking-normal text-gray-50 sm:text-2xl md:text-3xl lg:text-4xl md:tracking-tight">Daftar Tugas</h1>
        <table class="min-w-full divide-y divide-gray-200 text-gray-50">
            <thead>
                <tr>
                    <th scope="col" class="px-3 py-3 text-left text-xs font-medium uppercase tracking-wider">
                        No
                    </th>
                    <th scope="col" class="px-3 py-3 text-left text-xs font-medium uppercase tracking-wider">
                        Nama Tugas
                    </th>
                    <th scope="col" class="px-3 py-3 text-left text-xs font-medium uppercase tracking-wider">
                        Deskripsi
                    </th>
                    <th scope="col" class="px-3 py-3 text-left text-xs font-medium uppercase tracking-wider">
                        Batas Pengumpulan
                    </th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
            @forelse ($tugass as $index => $tugas)
                <tr>
                    <td class="px-3 py-4 whitespace-nowrap">
                        {{ $index + 1 }}
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
    <div class="my-5 mx-2 block rounded-xl border border-stone-600 border p-8 bg-stone-700" style="max-height: 400px; overflow-y: auto; scrollbar-width: none;">
        <h1 class="mb-6 text-2xl font-extrabold leading-none max-w-5xl tracking-normal text-gray-50 sm:text-2xl md:text-3xl lg:text-4xl md:tracking-tight">Daftar Materi</h1>
        <table class="min-w-full divide-y divide-gray-200 text-gray-50 my-4">
            <thead>
                <tr>
                    <th scope="col" class="px-3 py-3 text-left text-xs font-medium uppercase tracking-wider">
                        No
                    </th>
                    <th scope="col" class="px-3 py-3 text-left text-xs font-medium uppercase tracking-wider">
                        Title
                    </th>
                    <th scope="col" class="px-3 py-3 text-left text-xs font-medium uppercase tracking-wider">
                        PDF File
                    </th>
                    <th scope="col" class="px-3 py-3 text-left text-xs font-medium uppercase tracking-wider">
                        Description
                    </th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
            @forelse ($materis as $index => $materi)
                <tr>
                    <td class="px-3 py-4 whitespace-nowrap">
                        {{ $index + 1 }}
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
        <a href="/dashboard/materis" class="bg-violet-400 my-2 p-2 rounded-xl hover:bg-violet-300 font-semibold text-stone-800">Selengkapnya</a>
    </div>

    <!-- Daftar Siswa -->
    <div class="my-5 mx-2 block rounded-xl border border-stone-600 border p-8 bg-stone-700" style="max-height: 400px; overflow-y: auto;">
        <h1 class="mb-6 text-2xl font-extrabold leading-none max-w-5xl tracking-normal text-gray-50 sm:text-2xl md:text-3xl lg:text-4xl md:tracking-tight">Daftar Siswa</h1>
        <table class="min-w-full divide-y divide-gray-200 text-gray-50">
            <thead>
                <tr>
                    <th scope="col" class="px-3 py-3 text-left text-xs font-medium uppercase tracking-wider">
                        No
                    </th>
                    <th scope="col" class="px-3 py-3 text-left text-xs font-medium uppercase tracking-wider">
                        Nama
                    </th>
                    <th scope="col" class="px-3 py-3 text-left text-xs font-medium uppercase tracking-wider">
                        Email
                    </th>
                    <th scope="col" class="px-3 py-3 text-left text-xs font-medium uppercase tracking-wider">
                        Status
                    </th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
            @forelse ($users as $index => $user)
                <tr>
                    <td class="px-3 py-4 whitespace-nowrap">
                        {{ $index + 1 }}
                    </td>
                    <td class="px-3 py-4 whitespace-nowrap">
                        {{ $user->name }}
                    </td>
                    <td class="px-3 py-4 whitespace-nowrap">
                        {{ $user->email }}
                    </td>
                    <td class="px-3 py-4 whitespace-nowrap">
                        <p class="text-yellow-500">Belum</p>
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
        {{ $users->links() }}
    </div>
</section>
@endsection
