@extends('layouts.student_layout')

@section('content')

<section class="w-full justify-center mx-auto px-4 lg:px-12">
    <div class="rounded-xl">
        <div class="row">
            <div class="col-md-12 py-5">
                <div class="border-0">
                    <div class="overflow-x-auto bg-stone-50 shadow-md rounded-2xl mb-12">
                        <table class="min-w-full my-4">
                            <thead class="text-xs font-medium uppercase tracking-wider">
                                <tr>
                                    <th class="py-2 px-4" colspan="4">Indikator</th>
                                    <th class="py-2 px-4" rowspan="2">Total Nilai</th>
                                </tr>
                                <tr>
                                    <th class="py-2 px-4">Dekomposisi</th>
                                    <th class="py-2 px-4">Abstraksi</th>
                                    <th class="py-2 px-4">Pengenalan Pola</th>
                                    <th class="py-2 px-4">Algoritma</th>
                                </tr>
                            </thead>
                            <tbody class="text-stone-700 text-left">
                                <tr class="border-t-2 text-center">
                                    <td class="py-2 px-4">{{ $answers->dekomposisi }}</td>
                                    <td class="py-2 px-4">{{ $answers->abstraksi }}</td>
                                    <td class="py-2 px-4">{{ $answers->pengenalan_pola }}</td>
                                    <td class="py-2 px-4">{{ $answers->algoritma }}</td>
                                    <td class="py-2 px-4 font-bold">{{ $answers->total }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <p class="bg-stone-50 rounded-2xl py-2 px-5 shadow-md my-2">Jumlah jawaban benar: {{ $answers->benar }}, Jumlah jawaban salah: {{ $answers->salah }}</p>

                    @foreach ($soal_kuis as $index => $soal)
                        <div class="my-2 bg-gray-50 rounded-2xl w-full p-5 border-2 border-gray-200 question">
                            <div class="flex">
                                <p class="font-semibold text-md text-student mr-2">No. {{ $index + 1 }}</p>
                                <p class="font-semibold text-md text-gray-400">- {{ $soal->indikator }}</p>
                            </div>
                            <p class="text-gray-800 text-md my-2">{{ $soal->pertanyaan }}</p>
                            @if ($soal->gambar)
                            <div class="my-4 rounded-2xl overflow-hidden" style="max-width: 400px; max-height: 300px;">
                                <img src="{{ asset('storage/gambar/' . $soal->gambar) }}" alt="Gambar Soal" class="w-full h-full object-cover">
                            </div>
                            @endif

                            {{-- Opsi jawaban a, b, c, d, e --}}
                            <div class="grid grid-cols-1 gap-4">
                                @foreach(['a', 'b', 'c', 'd', 'e'] as $option)
                                    @php
                                        $optionValue = $soal['jawaban_' . $option];
                                        $optionLabel = $option; // Convert 'a', 'b', 'c', 'd', 'e' to 'A', 'B', 'C', 'D', 'E'
                                    @endphp
                                    <div class="flex items-center text-sm">
                                        <input type="radio" id="{{ $index }}_{{ $option }}" name="jawaban[{{ $index }}]" value="{{ $option }}"
                                            {{ $answers && $answers['jawaban'][$index] === $option ? 'checked' : '' }}
                                            {{ $answersSubmitted ? 'disabled' : '' }}>
                                            <label for="{{ $index }}_{{ $option }}" class="ml-2">{{ $optionLabel }}. {{ $optionValue }}</label>
                                    </div>
                                @endforeach
                                @if ($answersSubmitted)
                                    @if ($answers['jawaban'][$index] === $correctAnswers[$soal->id])
                                        <span class="ml-2 text-green-500 font-bold">
                                            Jawaban benar
                                        </span>
                                    @else
                                        <span class="ml-2 text-red-500 font-bold">
                                            Jawaban salah, jawaban yang benar adalah: {{ $correctAnswers[$soal->id] }}
                                        </span>
                                    @endif
                                @endif
                            </div>
                            @if ($soal->pembahasan)
                                <div class="bg-stone-100 rounded-2xl px-4 py-2 border-2">
                                    {{ $soal->pembahasan }}
                                </div>
                            @endif

                        </div>
                        <!-- Add these buttons within your form -->
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

<script>

</script>

@endsection
