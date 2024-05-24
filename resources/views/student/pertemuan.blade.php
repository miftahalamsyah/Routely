@extends('layouts.student_layout')

@section('content')
<section class="w-full justify-center mx-auto px-4 lg:px-12 min-h-screen">
    <div class="grid grid-cols-1 gap-2">
    @forelse ($pertemuans as $pertemuan)
        <!-- individual card -->
        <div class="relative flex flex-col break-words bg-stone-50 border border-r-4 border-b-4 border-stone-700 shadow-lg rounded-md my-2">
            <div class="flex-auto px-1 pt-6">
                <div class="flex justify-between gap-1">
                    <div>
                        <p class="clashdisplaymedium px-4 leading-normal text-xl text-student overflow-hidden ...">Pertemuan {{ $pertemuan->pertemuan_ke }}</p>
                        <p class="px-4 leading-normal text-xs text-stone-400 overflow-hidden">
                            {{ Carbon\Carbon::parse($pertemuan->tanggal)->format('l, j F Y') }}
                        </p>
                    </div>
                    <!--<div class="px-4">
                        <p class="clashdisplaymedium leading-normal text-lg text-right text-student overflow-hidden ...">Progres: {{ $pertemuan->pertemuan_ke }} / 5</p>
                        <p class="px-4 leading-normal text-xs text-stone-400 overflow-hidden text-right">
                            <div class="w-[11em] bg-stone-200 rounded-xs">
                                <div class="bg-orange-600 text-xs font-medium text-stone-50 text-center p-0.5 leading-none rounded-xs border border-b-4 border-r-4 border-stone-700"
                                    style="width: {{ ($pertemuan->pertemuan_ke / 5) * 100 }}%">
                                    {{ round(($pertemuan->pertemuan_ke / 5) * 100) }}%
                                </div>
                            </div>
                        </p>
                    </div>-->
                </div>
                <div class="relative flex flex-col min-w-0 break-words bg-stone-100 mx-4 bg-stone-100 border border-stone-700 my-4">
                    <div class="flex-auto p-4">
                        <h2 class="text-md font-bold">Tujuan Pembelajaran</h2>
                        <span class="text-sm">{{ $pertemuan->tujuan_pembelajaran }}</span>
                    </div>
                </div>
                <div class="flex items-center justify-between px-4 pb-4">
                    <a href="/student/pertemuan/{{ $pertemuan->slug }}">
                        <button class="mr-2 text-sm relative inline-flex items-center justify-center px-4 py-2 overflow-hidden font-bold text-stone-50 transform hover:translate-y-[-5px] transition-transform duration-300 ease-in-out shadow-md bg-violet-500 hover:bg-violet-600 border border-r-4 border-b-4 border-stone-700">
                            Lihat Pertemuan
                        </button>
                    </a>
                </div>
            </div>
        </div>
    @empty
        <tr>
            <td colspan="3" class="px-6 py-4 whitespace-nowrap text-center">
                <div class="bg-gray-100 text-gray-600 p-2 rounded-xl">
                    Data Pertemuan belum tersedia.
                </div>
            </td>
        </tr>
    @endforelse
    </div>
</section>
@endsection
