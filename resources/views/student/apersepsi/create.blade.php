@extends('layouts.student_layout')

@section('content')

<section class="w-full justify-center mx-auto px-4 lg:px-12 text-stone-700">
    <div class="rounded-xl">
        <div class="row">
            <div class="col-md-12 py-5">
                <div class="border-0">
                    <a href="/student/pertemuan/pertemuan-ke-{{ $defaultPertemuanId }}" class="flex m-3 text-stone-700">
                        <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" width="20px" height="25px" viewBox="0 0 52 52" enable-background="new 0 0 52 52" xml:space="preserve">
                            <path d="M48.6,23H15.4c-0.9,0-1.3-1.1-0.7-1.7l9.6-9.6c0.6-0.6,0.6-1.5,0-2.1l-2.2-2.2c-0.6-0.6-1.5-0.6-2.1,0 L2.5,25c-0.6,0.6-0.6,1.5,0,2.1L20,44.6c0.6,0.6,1.5,0.6,2.1,0l2.1-2.1c0.6-0.6,0.6-1.5,0-2.1l-9.6-9.6C14,30.1,14.4,29,15.3,29 h33.2c0.8,0,1.5-0.6,1.5-1.4v-3C50,23.8,49.4,23,48.6,23z"/>
                        </svg>
                        <p class="ml-2 font-semibold text-md">Kembali</p>
                    </a>
                    <div class="rounded-2xl bg-stone-50 p-5 my-4 shadow-md">
                        <p class="font-bold text-lg text-center">Lembar Apersepsi Pertemuan ke-{{ $defaultPertemuanId }}</p>
                        <div class="bg-stone-100 py-2 px-4 my-4 rounded-2xl border-2 hover:shadow">
                            <p class="font-bold text-md">Apersepsi</p>
                            <p class="text-md">{{ $pertemuan->apersepsi }}</p>
                        </div>
                    </div>
                    @if ($submission)
                        <div class="rounded-2xl bg-stone-50 p-5 my-4 shadow-md">
                            <div class="font-stone-800 my-4">
                                <div class="mb-4">
                                    <p class="block text-md font-semibold text-stone-800">Jawaban <span class="font-normal text-xs text-center">(Apersepsi Telah Terkirim ✅)</span></p>
                                    <p class="bg-stone-100 h-12 w-full px-4 py-2 border-2 rounded-2xl focus:ring-violet-400 focus:border-violet-400">{{ $submission->jawaban }}</p>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="rounded-2xl bg-stone-50 p-5 my-4 shadow-md">
                            <form method="POST" action="{{ route('hasil_apersepsi_siswa.store') }}" enctype="multipart/form-data">
                                @csrf

                                <input type="hidden" name="user_id" value="{{ auth()->id() }}">
                                <input type="hidden" name="pertemuan_id" value="{{ $defaultPertemuanId }}">

                                <div class="mb-4">
                                    <label for="jawaban" class="block text-md font-semibold text-stone-800">Jawaban: </label>
                                    <textarea type="text" id="jawaban" name="jawaban" rows="5"
                                        class="w-full px-4 py-2 text-stone-800 border-2 rounded-2xl focus:ring-violet-400 focus:border-violet-400 @error('jawaban') border-red-500 @enderror">{{ old('jawaban') }}</textarea>
                                    @error('jawaban')
                                        <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="my-3">
                                    <button type="submit" class="bg-student hover:bg-student-dark text-stone-50 rounded-xl p-2 mr-2 font-semibold">Kirim</button>
                                </div>
                            </form>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
