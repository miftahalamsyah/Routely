@extends('layouts.student_layout')

@section('content')

<section class="w-full justify-center mx-auto px-4 lg:px-12 min-h-screen">
    <div class="rounded-xl">
        <p class="text-xs">{{ Carbon\Carbon::parse($pertemuan->tanggal)->format('l, j F Y') }}</p>
        <div class="row py-5 text-stone-700">

            {{-- 1 persiapan --}}
            <div x-data="{ persiapan: false}" class="w-full mx-auto bg-stone-50 p-5 rounded-sm border border-b-4 border-r-4 border-stone-700 my-4">
                <button @click="persiapan = !persiapan" class="flex justify-between w-full">
                    <p class="font-bold text-lg">1. Persiapan</p>
                    <svg x-bind:class="{ 'rotate-180': persiapan }" xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 justify-end transition-transform transform" viewBox="0 0 20 20" fill="currentColor" >
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </button>
                <div x-show="persiapan" class="relative flex flex-col break-words">
                    <div class="flex-auto p-4 my-2 bg-stone-100 border border-stone-700 rounded-sm">
                        <p class="text-md font-semibold">Tujuan Pembelajaran</p>
                        <span class="text-sm">{{ $pertemuan->tujuan_pembelajaran }}</span>
                    </div>
                    <a href="/student/pertemuan/pertemuan-ke-{{ $pertemuan->id }}/apersepsi" class="p-4 my-2 bg-stone-100 border border-stone-700 rounded-sm">
                        <p class="text-md font-semibold hover:underline">Apersepsi</p>
                        <p class="text-sm py-1 hover:underline">{{ $pertemuan->apersepsi }}</p>
                        <button class="mr-2 text-sm relative inline-flex items-center justify-center px-4 py-2 overflow-hidden font-bold text-stone-50 transform hover:translate-y-[-5px] transition-transform duration-300 ease-in-out shadow-md bg-violet-500 hover:bg-violet-600 border border-r-4 border-b-4 border-stone-700">
                            Isi Lembar Apersepsi
                        </button>
                    </a>
                </div>
            </div>

            {{-- 2 pemahaman --}}
            <div x-data="{ pemahaman: false}" class="w-full mx-auto bg-stone-50 p-5 rounded-sm border border-b-4 border-r-4 border-stone-700 my-4">
                <button @click="pemahaman = !pemahaman" class="flex justify-between w-full">
                    <p class="font-bold text-lg">2. Pemahaman</p>
                    <svg x-bind:class="{ 'rotate-180': pemahaman }" xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 justify-end transition-transform transform" viewBox="0 0 20 20" fill="currentColor" >
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </button>
                <div x-show="pemahaman" class="relative flex flex-col break-words">
                    @forelse ($materi as $materis)
                        <div class="flex-auto p-4 my-2 bg-stone-100 border border-stone-700 rounded-sm">
                            <a href="/student/materi/{{ $materis['slug'] }}">
                                <h2 class="text-md font-semibold hover:underline">Materi - {{ $materis['title'] }}</h2>
                            </a>
                            <div class="flex items-center justify-between mt-2">
                                <a href="/student/materi/{{ $materis['slug'] }}">
                                    <button class="mr-2 text-sm relative inline-flex items-center justify-center px-4 py-2 overflow-hidden font-bold text-stone-50 transform hover:translate-y-[-5px] transition-transform duration-300 ease-in-out shadow-md bg-violet-500 hover:bg-violet-600 border border-r-4 border-b-4 border-stone-700">
                                    Lihat Materi
                                    </button>
                                </a>
                            </div>
                        </div>
                    @empty
                        <div class="flex w-full p-4 sm:mb-0 sm:mr-4 bg-stone-100 shadow-md rounded-2xl my-4">
                            <div class="max-w-full px-3 mx-auto text-center">
                                <span class="italic text-stone-700 text-md tracking-tight leading-none">Tidak ada Materi</span>
                            </div>
                        </div>
                    @endforelse
                </div>
            </div>

            {{-- 3 Situasi Masalah --}}
            <div x-data="{ situasiMasalah: false}" class="w-full mx-auto bg-stone-50 p-5 rounded-sm border border-b-4 border-r-4 border-stone-700 my-4">
                <button @click="situasiMasalah = !situasiMasalah" class="flex justify-between w-full">
                    <p class="font-bold text-lg">3. Situasi Masalah</p>
                    <svg x-bind:class="{ 'rotate-180': situasiMasalah }" xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 justify-end transition-transform transform" viewBox="0 0 20 20" fill="currentColor" >
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </button>
                <div x-show="situasiMasalah" class="relative flex flex-col break-words">
                    <div class="flex-auto p-4 my-2 bg-stone-100 border border-stone-700 rounded-sm">
                        <p class="text-md font-semibold">Lembar Kerja Peserta Didik (LKPD)</p>
                        @forelse ($tugas as $tugasItem)
                            <a href="{{ asset('storage/tugas/' . $tugasItem['tugas_file']) }}" target="_blank" class="mr-2 text-sm relative inline-flex items-center justify-center px-4 py-2 overflow-hidden font-bold text-stone-50 transform hover:translate-y-[-5px] transition-transform duration-300 ease-in-out shadow-md bg-violet-500 hover:bg-violet-600 border border-r-4 border-b-4 border-stone-700 my-2">
                                <span class="text-md font-semibold">{{ $tugasItem['tugas_file'] }}</span>
                            </a>
                        @empty
                            <span class="text-md">Tidak ada Tugas</span>
                        @endforelse
                    </div>
                </div>
            </div>

            {{-- 4 Pengajuan Masalah --}}
            <div x-data="{ pengajuanMasalah: false}" class="w-full mx-auto bg-stone-50 p-5 rounded-sm border border-b-4 border-r-4 border-stone-700 my-4">
                <button @click="pengajuanMasalah = !pengajuanMasalah" class="flex justify-between w-full">
                    <p class="font-bold text-lg">4. Pengajuan Masalah</p>
                    <svg x-bind:class="{ 'rotate-180': pengajuanMasalah }" xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 justify-end transition-transform transform" viewBox="0 0 20 20" fill="currentColor" >
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </button>
                <div x-show="pengajuanMasalah" class="relative flex flex-col break-words">
                    <div class="flex-auto p-4 my-2 bg-stone-100 border border-stone-700 rounded-sm">
                        <p class="text-md font-semibold">Ajukan Masalah</p>
                        <p class="text-sm font-normal">Ajukan masalah berupa soal (topologi) yang telah dibuat berdasarkan Lembar Kerja Peserta Didik (LKPD). File (.pkt atau .json) dikumpulkan pada form topologi berikut untuk dibagikan dengan kelompok lain.</p>
                        <a href="/student/pengajuan-masalah">
                            <button class="mr-2 my-2 text-sm relative inline-flex items-center justify-center px-4 py-2 overflow-hidden font-bold text-stone-50 transform hover:translate-y-[-5px] transition-transform duration-300 ease-in-out shadow-md bg-violet-500 hover:bg-violet-600 border border-r-4 border-b-4 border-stone-700">
                                Kumpulkan Soal
                            </button>
                        </a>
                    </div>
                </div>
            </div>

            {{-- 5 Pemecahan Masalah --}}
            <div x-data="{ pemecahanMasalah: false}" class="w-full mx-auto bg-stone-50 p-5 rounded-sm border border-b-4 border-r-4 border-stone-700 my-4">
                <button @click="pemecahanMasalah = !pemecahanMasalah" class="flex justify-between w-full">
                    <p class="font-bold text-lg">5. Pemecahan Masalah</p>
                    <svg x-bind:class="{ 'rotate-180': pemecahanMasalah }" xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 justify-end transition-transform transform" viewBox="0 0 20 20" fill="currentColor" >
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </button>
                <div x-show="pemecahanMasalah" class="relative flex flex-col break-words">
                    @forelse ($tugas as $tugass)
                        <div class="flex-auto p-4 my-2 bg-stone-100 border border-stone-700 rounded-sm ">
                            <a href="/student/tugas/{{ $tugass['slug'] }}">
                                <h2 class="text-md font-semibold">Tugas - {{ $tugass['name'] }}</h2>
                            </a>
                            <div class="flex items-center justify-between mt-2">
                                <a href="/student/tugas/{{ $tugass['slug'] }}">
                                    <button class="mr-2 my-2 text-sm relative inline-flex items-center justify-center px-4 py-2 overflow-hidden font-bold text-stone-50 transform hover:translate-y-[-5px] transition-transform duration-300 ease-in-out shadow-md bg-violet-500 hover:bg-violet-600 border border-r-4 border-b-4 border-stone-700" title="Lihat Tugas">
                                        Lihat Tugas
                                    </button>
                                </a>
                            </div>
                        </div>
                    @empty
                        <span class="text-md">Tidak ada Tugas</span>
                    @endforelse
                </div>
            </div>

            {{-- 6 Verifikasi --}}
            <div x-data="{ verifikasi: false}" class="w-full mx-auto bg-stone-50 p-5 rounded-sm border border-b-4 border-r-4 border-stone-700 my-4">
                <button @click="verifikasi = !verifikasi" class="flex justify-between w-full">
                    <p class="font-bold text-lg">6. Verifikasi</p>
                    <svg x-bind:class="{ 'rotate-180': verifikasi }" xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 justify-end transition-transform transform" viewBox="0 0 20 20" fill="currentColor" >
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </button>
                <div x-show="verifikasi" class="relative flex flex-col break-words">
                    @if ($userHasSubmitted)
                        <div class="p-4 my-2 bg-stone-100 border border-stone-700 rounded-sm">
                            <p class="text-md font-semibold">Kuis - Pertemuan {{ $pertemuan_ke }} Telah Dikerjakan ✅</p>
                            <p class="text-sm">Nilai:</p>
                            <p class="text-lg font-semibold mb-2">{{ $nilaiKuis }}</p>
                            <a href="/student/pertemuan/pertemuan-ke-{{ $pertemuan->id }}/kuis/review" class="mr-2 text-sm relative inline-flex items-center justify-center px-4 py-2 overflow-hidden font-bold text-stone-50 transform hover:translate-y-[-5px] transition-transform duration-300 ease-in-out shadow-md bg-violet-500 hover:bg-violet-600 border border-r-4 border-b-4 border-stone-700">
                                Review Hasil Kuis
                            </a>
                        </div>
                    @else
                        <a href="/student/pertemuan/pertemuan-ke-{{ $pertemuan->id }}/kuis" class="flex-auto p-4 my-2 bg-stone-100 border border-stone-700 rounded-sm ">
                            <div class="">
                                <p class="text-md font-semibold">Kuis - Pertemuan {{ $pertemuan_ke }}</p>
                                <button class="mr-2 text-sm relative inline-flex items-center justify-center px-4 py-2 overflow-hidden font-bold text-stone-50 transform hover:translate-y-[-5px] transition-transform duration-300 ease-in-out shadow-md bg-violet-500 hover:bg-violet-600 border border-r-4 border-b-4 border-stone-700">
                                    Mulai Kuis
                                </button>
                            </div>
                        </a>
                    @endif
                </div>
            </div>

            <div class="mt-12 flex items-center">
                <hr class="border-t border-student flex-grow mr-2">
                <p class="font-bold text-lg">Lembar Refleksi</p>
                <hr class="border-t border-student flex-grow ml-2">
            </div>
            <div class="relative min-w-0 break-words bg-stone-50 rounded-md border border-b-4 border-r-4 border-stone-700 my-4">
                <div class="p-4">
                    <p class="text-sm text-stone-700 pb-2">
                        Lembar Refleksi Siswa adalah tempat di mana Anda dapat mengevaluasi dan merefleksikan pembelajaran Anda. Gunakan lembar ini untuk mencatat pertanyaan, saran, hambatan, dan pemahaman baru yang Anda dapatkan selama proses pembelajaran.
                    </p>
                    <a href="/student/refleksi">
                        <button class="mr-2 text-sm relative inline-flex items-center justify-center px-4 py-2 overflow-hidden font-bold text-stone-50 transform hover:translate-y-[-5px] transition-transform duration-300 ease-in-out shadow-md bg-violet-500 hover:bg-violet-600 border border-r-4 border-b-4 border-stone-700">
                            Isi Lembar Refleksi
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
