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
                        <div class="flex justify-between">
                            <p></p>
                            <button type="submit" id="submitBtn" class="bg-student py-2 px-5 font-semibold text-gray-50 rounded-full hover:bg-student-dark shadow-md">Selesaikan Tes</button>
                        </div>

                        <div id="questionNumbers" class="flex my-4 space-x-2 justify-center">
                            @foreach ($soal_tes as $index => $soal)
                                <div class="question-number bg-stone-50 rounded-2xl py-1 px-3 text-center" data-index="{{ $index }}">{{ $index + 1 }}</div>
                            @endforeach
                        </div>


                        @foreach ($soal_tes as $index => $soal)
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
                                        <div class="flex items-center text-sm">
                                            <input type="radio" id="{{ $index }}_{{ $option }}" name="jawaban[{{ $index }}]" value="{{ $option }}">
                                            <label for="{{ $index }}_{{ $option }}" class="ml-2">{{ $soal['jawaban_' . $option] }}</label>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <!-- Add these buttons within your form -->
                        @endforeach
                        <div class="my-2 justify-center flex">
                            <button type="button" id="previousBtn" class="bg-stone-50 py-2 px-4 rounded-2xl border-2 hover:bg-stone-100">Kembali</button>
                            <button type="button" id="nextBtn" class="bg-stone-50 py-2 px-4 rounded-2xl border-2 hover:bg-stone-100">Lanjut</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const submitBtn = document.getElementById('submitBtn');
        const form = document.querySelector('form');
        let isSubmitConfirmed = false;

        submitBtn.addEventListener('click', function () {
            const userConfirmed = window.confirm('Apakah Anda yakin ingin selesaikan tes?');

            if (userConfirmed) {
                isSubmitConfirmed = true; // Set a flag to indicate confirmation
                form.submit(); // Trigger the form submission
            }
        });

        window.addEventListener('beforeunload', function (event) {
            if (!isSubmitConfirmed) {
                localStorage.setItem('soalTesProgress', 'option');
                event.returnValue = 'You have unsaved changes. Are you sure you want to leave?';
            }
        });

        let currentQuestion = 0;

        function showQuestion(index) {
            document.querySelectorAll('.question').forEach((question, i) => {
                question.style.display = i === index ? 'block' : 'none';
            });
            currentQuestion = index;

            // Enable/disable previous and next buttons based on the current question
            previousBtn.disabled = currentQuestion === 0;
            nextBtn.disabled = currentQuestion === {{ count($soal_tes) }} - 1;

            // Change the font color based on the button state
            previousBtn.classList.toggle('text-stone-300', previousBtn.disabled);
            nextBtn.classList.toggle('text-stone-300', nextBtn.disabled);

            // Update question numbers styles
            updateQuestionNumbers(index, answeredCount);
        }

        function previousQuestion() {
            if (currentQuestion > 0) {
                showQuestion(currentQuestion - 1);
            }
        }

        function nextQuestion() {
            if (currentQuestion < {{ count($soal_tes) }} - 1) {
                showQuestion(currentQuestion + 1);
            }
        }

        function updateQuestionNumberColor(index, color) {
            document.querySelector(`.question-number:nth-child(${index + 1})`).classList.remove('bg-stone-50');
            document.querySelector(`.question-number:nth-child(${index + 1})`).classList.add(color);
        }

        function showSoal(index) {
            document.querySelectorAll('.soal').forEach((soal, i) => {
                soal.style.display = i === index ? 'block' : 'none';
            });
        }

        document.getElementById('previousBtn').addEventListener('click', function() {
            previousQuestion();
            updateQuestionNumberColor(currentQuestion, 'bg-stone-50');
            showSoal(currentQuestion);
        });

        document.getElementById('nextBtn').addEventListener('click', function() {
            nextQuestion();
            updateQuestionNumberColor(currentQuestion, 'bg-stone-50');
            showSoal(currentQuestion);
        });

        document.querySelectorAll('.question-number').forEach((questionNumber, index) => {
            questionNumber.addEventListener('click', function() {
                showQuestion(index);
                showSoal(index);
                updateQuestionNumberColor(currentQuestion, 'bg-stone-50');
            });
        });

        document.querySelectorAll('input[type="radio"]').forEach((radio) => {
            radio.addEventListener('change', function() {
                updateQuestionNumberColor(currentQuestion, 'bg-stone-50');
                let option = this.value;
                if (option) {
                    document.querySelector(`.question-number:nth-child(${currentQuestion + 1})`).classList.remove('bg-stone-50');
                    document.querySelector(`.question-number:nth-child(${currentQuestion + 1})`).classList.add('bg-student', 'text-stone-50');
                }
                const value = this.value;
                localStorage.setItem('selectedOption', value);
            });
        });

        showQuestion(currentQuestion);
    });
</script>

@endsection
