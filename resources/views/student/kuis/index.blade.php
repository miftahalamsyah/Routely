@extends('layouts.student_layout')

@section('content')

<section class="w-full justify-center mx-auto px-4 lg:px-12">
    <div class="rounded-xl">
        <div class="row">
            <div class="col-md-12 py-5">
                <div class="border-0">
                    <form method="POST" action="{{ route('hasil_kuis_siswa.store') }}">
                        @csrf

                        <input type="hidden" name="user_id" value="{{ auth()->id() }}">
                        <input type="hidden" name="pertemuan_id" value="{{ $pertemuan }}">

                        <div class="flex justify-between">
                            <p></p>
                            <button type="submit" id="submitBtn" class="mb-4 px-4 py-2 text-sm text-stone-800 bg-orange-400 rounded-sm border border-r-4 border-b-4 border-stone-700 hover:bg-orange-500 transform hover:translate-y-[-5px] transition-transform duration-300 ease-in-out focus:outline-none focus:bg-orange-600 font-extrabold">Selesaikan Kuis</button>
                        </div>

                        <div class="w-full flex gap-4">
                            <div class="w-full sm:w-full lg:w-3/4">
                                @foreach ($soal_kuis as $index => $soal)
                                    <div class="my-2 bg-stone-50 rounded-sm w-full p-5 border border-b-4 border-r-4 border-stone-700 question">
                                        <div class="flex">
                                            <p class="font-semibold text-md text-student mr-2">No. {{ $index + 1 }}</p>
                                            <p class="font-semibold text-md text-gray-400">- {{ $soal->indikator }}</p>
                                        </div>
                                        <p class="text-gray-800 text-md my-2">{{ $soal->pertanyaan }}</p>
                                        @if ($soal->gambar)
                                        <div class="my-4 rounded-sm border border-r-4 border-b-4 border-stone-700 overflow-hidden" style="max-width: 400px; max-height: 300px;">
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
                                <div class="my-2 justify-center flex gap-4">
                                    <button type="button" id="previousBtn" class="bg-stone-50 py-2 px-4 rounded-sm border border-b-4 border-r-4 border-stone-700 hover:bg-stone-100">Kembali</button>
                                    <button type="button" id="nextBtn" class="bg-stone-50 py-2 px-4 rounded-sm border border-b-4 border-r-4 border-stone-700 hover:bg-stone-100">Lanjut</button>
                                </div>
                            </div>
                            <div class="w-1/4 sm:hidden lg:block p-2 my-2 bg-stone-50 border border-b-4 border-r-4 border-stone-700 h-full">
                                <p class="font-semibold text-md text-student mr-2">Soal</p>
                                <div id="questionNumbers" class="grid grid-cols-5 my-2 gap-2 justify-center">

                                    @foreach ($soal_kuis as $index => $soal)
                                        <div class="question-number bg-stone-50 border border-b-4 border-r-4 mb-2 border-stone-700 py-1 px-3 text-center" data-index="{{ $index }}" title="Soal Nomor {{ $index +1 }}">{{ $index + 1 }}</div>
                                    @endforeach
                                </div>
                            </div>
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
            const userConfirmed = window.confirm('Apakah Anda yakin ingin selesaikan kuis?');

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
            nextBtn.disabled = currentQuestion === {{ count($soal_kuis) }} - 1;

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
            if (currentQuestion < {{ count($soal_kuis) }} - 1) {
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
                    document.querySelector(`.question-number:nth-child(${currentQuestion + 1})`).classList.add('bg-violet-500', 'text-stone-50');
                }
                const value = this.value;
                localStorage.setItem('selectedOption', value);
            });
        });

        showQuestion(currentQuestion);
    });
</script>

@endsection
