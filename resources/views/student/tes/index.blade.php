@extends('layouts.student_layout')

@section('content')
<section class="w-full justify-center mx-auto px-4 lg:px-12 min-h-screen">
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
        @forelse ($kategori_tes as $tes)
        <div class="relative flex flex-col break-words bg-stone-50 border shadow-lg rounded-2xl">
            <div class="flex-auto px-1 pt-6">
                <p class="p-2 leading-normal text-xl font-bold overflow-hidden h-24 ...">{{$tes->kategori_tes}}</p>
                <div class="flex items-center justify-between px-2 pb-4">
                    @if ($tes->status_tes == 0)
                        <button class="mr-2 text-sm text-gray-400 relative inline-flex items-center justify-center px-4 py-2 overflow-hidden font-bold transition duration-300 ease-out border bg-gray-200 rounded-xl shadow-md hover:bg-gray-200" disabled>
                            Belum Dibuka
                        </button>
                    @else
                    <a href="{{ route('student.tes.show', $tes->slug) }}"
                            <button class="mr-2 text-sm text-student relative inline-flex items-center justify-center px-4 py-2 overflow-hidden font-bold transition duration-300 ease-out border bg-violet-200 rounded-xl shadow-md hover:bg-violet-300">
                                Mulai {{ $tes->kategori_tes }}
                            </button>
                        </a>
                    @endif
                </div>
            </div>
        </div>
        @empty
        <div class="px-6 py-4 whitespace-nowrap text-center">
            <div class="bg-gray-100 text-gray-600 p-2 rounded-xl mx-auto">
                Tes belum tersedia.
            </div>
        </div>
    @endforelse
    </div>
</section>
@endsection
