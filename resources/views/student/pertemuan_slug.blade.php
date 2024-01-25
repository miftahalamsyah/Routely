@extends('layouts.student_layout')

@section('content')

<section class="w-full justify-center mx-auto px-4 lg:px-12 min-h-screen">
    <div class="rounded-xl">
        <p class="text-xs">{{ Carbon\Carbon::parse($pertemuan->tanggal)->format('l, j F Y') }}</p>
        <div class="row">
            <div class="col-md-12 py-5 text-gray-900">
                <div class="shadow-sm">
                    <div class="flex items-center">
                        <p class="font-bold text-2xl">Tujuan Pembelajaran</p>
                        <hr class="border-t border-student flex-grow ml-2">
                    </div>
                    <div class="relative flex flex-col min-w-0 break-words bg-stone-50 border shadow-lg rounded-2xl my-4">
                        <div class="flex-auto p-6">
                            <span class="text-md">{{ $pertemuan->tujuan_pembelajaran }}</span>
                        </div>
                    </div>

                    <div class="flex items-center">
                        <p class="font-bold text-2xl">Apersepsi</p>
                        <hr class="border-t border-student flex-grow ml-2">
                    </div>
                    <div class="relative flex flex-col min-w-0 break-words bg-stone-50 border shadow-lg rounded-2xl my-4">
                        <div class="flex-auto p-6">
                            <span class="text-md">{{ $pertemuan->apersepsi }}</span>
                        </div>
                    </div>

                    <div class="flex items-center">
                        <p class="font-bold text-2xl">Materi</p>
                        <hr class="border-t border-student flex-grow ml-2">
                    </div>
                    @forelse ($materi as $materis)
                    <div class="relative flex flex-col min-w-0 break-words bg-stone-50 border shadow-lg rounded-2xl my-4">
                        <div class="relative">
                            <a class="block shadow-xl rounded-2xl">
                                <img src="{{ asset('storage/thumbnails/' . $materis['thumbnail_image']) }}" alt="{{ $materis['title'] }}" class="w-full h-32 object-cover shadow-soft-2xl rounded-2xl" />
                            </a>
                        </div>
                        <div class="flex-auto px-1 pt-6">
                            <a href="/student/materi/{{ $materis['slug'] }}">
                                <h2 class="text-xl font-bold p-2">{{ $materis['title'] }}</h2>
                            </a>
                            <p class="mb-6 px-2 leading-normal text-sm overflow-hidden h-24 ...">{{ $materis['description'] }}</p>
                            <div class="flex items-center justify-between px-2 pb-4">
                                <a href="/student/materi/{{ $materis['slug'] }}">
                                    <button class="mr-2 text-sm text-student relative inline-flex items-center justify-center px-4 py-2 overflow-hidden font-bold text-stone-900 transition duration-300 ease-out border bg-violet-200 rounded-xl shadow-md hover:bg-violet-300">
                                    Lihat Materi
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                    @empty
                    <div class="flex w-full p-4 sm:mb-0 sm:mr-4 bg-stone-50 shadow-md rounded-2xl my-4">
                        <div class="max-w-full px-3 mx-auto text-center">
                            <span class="italic text-stone-700 text-md tracking-tight leading-none">Tidak ada Materi</span>
                        </div>
                    </div>
                    @endforelse

                    <div class="flex items-center">
                        <p class="font-bold text-2xl">Tugas</p>
                        <hr class="border-t border-student flex-grow ml-2">
                    </div>
                    @forelse ($tugas as $tugass)
                    <div class="relative flex flex-col min-w-0 break-words bg-stone-50 border shadow-lg rounded-2xl my-4">
                        <div class="flex-auto px-1 pt-6">
                            <div>
                                <div class="justify-between flex items-center mb-2 px-2">
                                    <a href="/student/tugas/{{ $tugass['slug'] }}">
                                        <h2 class="text-xl font-bold">{{ $tugass['name'] }}</h2>
                                    </a>
                                    @if($submission)
                                        <span class="text-green-500 text-sm font-semibold">✅ Sudah Dikerjakan</span>
                                    @else
                                        <span class="text-red-500 text-sm font-semibold">❌ Belum Dikerjakan</span>
                                    @endif
                                </div>
                            </div>
                            <p class="mb-6 px-2 leading-normal text-sm overflow-hidden h-24 ...">{{ $tugass['description'] }}</p>
                            <div class="flex items-center justify-between px-2 pb-4">
                                <a href="/student/tugas/{{ $tugass['slug'] }}">
                                <button class="mr-2 text-sm text-student relative inline-flex items-center justify-center px-4 py-2 overflow-hidden font-bold text-stone-900 transition duration-300 ease-out border bg-violet-200 rounded-xl shadow-md hover:bg-violet-300 ">
                                    Lihat Tugas
                                </button>
                                </a>
                            </div>
                        </div>
                    </div>
                    @empty
                    <div class="flex w-full p-4 sm:mb-0 sm:mr-4 bg-stone-50 shadow-md rounded-2xl my-4">
                        <div class="max-w-full px-3 mx-auto text-center">
                            <span class="italic text-stone-700 text-md tracking-tight leading-none">Tidak ada Tugas</span>
                        </div>
                    </div>
                    @endforelse

                    <div class="mt-4 flex items-center">
                        <p class="font-bold text-2xl">Lembar Refleksi</p>
                        <hr class="border-t border-student flex-grow ml-2">
                    </div>
                    <div class="relative min-w-0 break-words bg-stone-50 border shadow-lg rounded-2xl my-4">
                        <div class="p-4">
                            <p class="text-sm text-stone-700 pb-2">
                                Lembar Refleksi Siswa adalah tempat di mana Anda dapat mengevaluasi dan merefleksikan pembelajaran Anda. Gunakan lembar ini untuk mencatat pertanyaan, saran, hambatan, dan pemahaman baru yang Anda dapatkan selama proses pembelajaran.
                            </p>
                            <a href="/student/refleksi">
                                <button class="text-sm text-student relative inline-flex items-center justify-center px-4 py-2 overflow-hidden font-bold text-stone-900 transition duration-300 ease-out border bg-violet-200 rounded-xl shadow-md hover:bg-violet-300 ">
                                    Isi Lembar Refleksi
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
