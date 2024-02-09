@extends('layouts.student_layout')

@section('content')
<section class="w-full justify-center mx-auto px-4 lg:px-12 min-h-screen">
    <div class="grid grid-cols-1 gap-2">
    @forelse ($pertemuans as $pertemuan)
        <!-- individual card -->
        <div class="relative flex flex-col break-words bg-stone-50 border shadow-lg rounded-2xl my-2">
            <div class="flex-auto px-1 pt-6">
                <p class="px-4 leading-normal text-xl text-student font-bold overflow-hidden ...">Pertemuan {{ $pertemuan->pertemuan_ke }}</p>
                <p class="px-4 leading-normal text-xs text-stone-400 overflow-hidden">
                    {{ Carbon\Carbon::parse($pertemuan->tanggal)->format('l, j F Y') }}
                </p>
                <div class="relative flex flex-col min-w-0 break-words bg-stone-100 mx-4 border rounded-2xl my-4">
                    <div class="flex-auto p-4">
                        <h2 class="text-md font-bold">Tujuan Pembelajaran</h2>
                        <span class="text-sm">{{ $pertemuan->tujuan_pembelajaran }}</span>
                    </div>
                </div>
                <div class="flex items-center justify-between px-4 pb-4">
                    <a href="/student/pertemuan/{{ $pertemuan->slug }}">
                        <button class="mr-2 text-sm text-student relative inline-flex items-center justify-center px-4 py-2 overflow-hidden font-bold text-stone-900 transition duration-300 ease-out border bg-violet-200 rounded-xl shadow-md hover:bg-violet-300">
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
