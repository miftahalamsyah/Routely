@extends('layouts.student_layout')

@section('content')
<section class="w-full justify-center mx-auto px-4 lg:px-12 min-h-screen">
    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
    @forelse ($pertemuans as $pertemuan)
        <!-- individual card -->
        <div class="relative flex flex-col break-words bg-stone-50 border shadow-lg rounded-2xl">
            <div class="flex-auto px-1 pt-6">
                <p class="mb-6 px-2 leading-normal text-xl font-bold overflow-hidden h-24 ...">Pertemuan {{ $pertemuan->pertemuan_ke }}</p>
                <div class="flex items-center justify-between px-2 pb-4">
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
