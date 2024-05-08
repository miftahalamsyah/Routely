@extends('layouts.student_layout')

@section('content')
<section class="w-full justify-center mx-auto px-4 lg:px-12 min-h-screen">
    <div class="grid grid-cols-1 sm:grid-cols-1 gap-4">
        @forelse ($kategori_tes as $tes)
            @php
                $user = auth()->user();
                $submission = \App\Models\HasilTesSiswa::where('user_id', $user->id)
                    ->where('kategori_tes_id', $tes->id)
                    ->first();
                $nilaiTes = round(\App\Models\HasilTesSiswa::where('user_id', $user->id)
                    ->where('kategori_tes_id', $tes->id)->value('total'));
            @endphp

            @if ($submission)
                <div class="relative flex flex-col break-words bg-stone-50 rounded-sm border border-b-4 border-r-4 border-stone-700">
                    <div class="flex-auto px-1 pt-6">
                        <p class="p-2 leading-normal text-xl font-bold overflow-hidden h-12 ...">{{$tes->kategori_tes}} - <span class="text-sm">Telah Dikerjakan ✅</span></p>
                        <div class="flex items-center justify-between px-2 pb-4">
                            <div class="bg-stone-100 rounded-sm border-b-4 border-r-4 border-stone-300 px-4 py-2 border">
                                <p class="text-sm">Nilai:</p>
                                <p class="text-lg font-semibold">{{ $nilaiTes }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            @else
                <div class="relative flex flex-col break-words bg-stone-50 rounded-sm border border-b-4 border-r-4 border-stone-700">
                    <div class="flex-auto px-1 pt-6">
                        <p class="p-2 leading-normal text-xl font-bold overflow-hidden h-12 ...">{{$tes->kategori_tes}}</p>
                        <div class="flex items-center justify-between px-2 pb-4">
                            @if ($tes->status_tes == 0)
                                <button class="mr-2 text-sm text-stone-400 relative inline-flex items-center justify-center px-4 py-2 overflow-hidden font-bold transition duration-300 ease-out border border-b-4 border-r-4 border-stone-300 bg-stone-200 rounded shadow-md hover:bg-stone-200" disabled>
                                    Belum Dibuka
                                </button>
                            @else
                                <a href="{{ route('student.tes.show', $tes->slug) }}">
                                    <button class="mr-2 text-sm relative inline-flex items-center justify-center px-4 py-2 overflow-hidden font-bold text-stone-50 transform hover:translate-y-[-5px] transition-transform duration-300 ease-in-out shadow-md bg-violet-500 hover:bg-violet-600 border border-r-4 border-b-4 border-stone-700">
                                        Mulai {{ $tes->kategori_tes }}
                                    </button>
                                </a>
                            @endif
                        </div>
                    </div>
                </div>
            @endif
        @empty
        <div class="px-6 py-4 whitespace-nowrap text-center">
            <div class="bg-stone-100 text-stone-600 p-2 rounded-xl mx-auto">
                Tes belum tersedia.
            </div>
        </div>
    @endforelse
    </div>
</section>
@endsection
