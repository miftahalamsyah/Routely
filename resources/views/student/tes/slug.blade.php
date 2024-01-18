@extends('layouts.student_layout')

@section('content')

<section class="w-full justify-center mx-auto px-4 lg:px-12">
    <div class="rounded-xl">
        <div class="row">
            <div class="col-md-12 py-5">
                <div class="border-0">
                    <form method="POST" action="{{ route('hasil_tes_siswa.store') }}">
                        @csrf

                        <input type="hidden" name="user_id" value="{{ auth()->id() }}">
                        <input type="hidden" name="kategori_tes_id" value="{{ $kategori_tes->id }}">

                        @foreach ($soal_tes as $index=>$soal)
                            <div class="mb-8 bg-gray-50 rounded-2xl w-full p-5 border-2 border-gray-200">
                                <div class="flex justify-between items-center">
                                    <p class="font-semibold text-md text-student">No. {{ $index + 1 }}</p>
                                    <p class="font-semibold text-xs text-gray-300">{{ $soal->indikator }}</p>
                                </div>
                                <p class="text-gray-800 text-md my-2">{{ $soal->pertanyaan }}</p>
                                @if ($soal->gambar)
                                <div class="my-4 rounded-2xl overflow-hidden" style="max-width: 400px; max-height: 300px;">
                                    <img src="{{ asset('storage/gambar/' . $soal->gambar) }}" alt="Gambar Soal" class="w-full h-full object-cover">
                                </div>
                                @endif

                                {{-- Opsi jawaban a, b, c, d, e --}}
                                <div class="grid grid-cols-2 gap-4">
                                    @foreach(['a', 'b', 'c', 'd', 'e'] as $option)
                                        <div class="flex items-center text-sm">
                                            <input type="radio" id="{{ $index }}_{{ $option }}" name="jawaban[{{ $index }}]" value="{{ $option }}">
                                            <label for="{{ $index }}_{{ $option }}" class="ml-2">{{ $soal['jawaban_' . $option] }}</label>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endforeach

                        <button type="submit" class="bg-student py-2 px-5 font-semibold text-gray-50 rounded-2xl hover:bg-student-dark shadow-md">Kirim Jawaban</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- <script>
    document.addEventListener("DOMContentLoaded", function() {
        // Check if there's any progress in local storage
        let savedProgress = localStorage.getItem('soalTesProgress');

        if (savedProgress) {
            // Show a warning if there's unsaved progress
            window.onbeforeunload = function() {
                return "You have unsaved progress. Are you sure you want to leave?";
            };
        }

        // Save progress when the user leaves the page
        window.addEventListener('beforeunload', function() {
            localStorage.setItem('soalTesProgress', 'your_progress_data_here');
        });
    });
</script> --}}
@endsection
