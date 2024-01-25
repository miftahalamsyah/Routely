@extends('layouts.student_layout')

@section('content')

<section class="w-full justify-center mx-auto px-4 lg:px-12">
    <div class="rounded-xl">
        <div class="row">
            <div class="col-md-12 py-5">
                <div class="border-0">
                    <div class="rounded-2xl bg-stone-50 p-5 my-4 shadow-md">
                        <div class="bg-stone-100 py-2 px-4 my-4 rounded-2xl border-2 hover:shadow">
                            <p class="font-bold text-md">Deskripsi</p>
                            <p class="text-md">{{ $description }}</p>
                        </div>
                        @if ($tugas_file)
                        <div class="bg-stone-100 py-2 px-4  my-4 rounded-2xl border-2 hover:shadow">
                            <p class="font-semibold text-md">File LKPD dapat diunduh dalam bentuk .pdf di bawah ini</p>
                            <a href="{{ asset('storage/tugas/' . $tugas_file) }}" target="_blank" class="rounded-xl my-2 bg-student text-stone-50 px-4 py-2 inline-block hover:bg-student-dark">
                                {{ $tugas_file }}
                            </a>
                        </div>
                        @endif
                    </div>

                    @if ($submission)
                        {{-- Display submitted data --}}
                        <div class="bg-stone-50 font-stone-800 p-5 my-4 rounded-2xl shadow-md">
                            <p class="font-bold text-lg text-center">Tugas Telah Terkirim ✅</p>
                            <div class="mb-4">
                                <p class="mb-2 block text-md font-semibold text-stone-800">File Topologi <span class="text-xs font-normal">(.pkt/.json)</span></p>
                                <a href="{{ asset('storage/topologi/' . $submission->topologi) }}" target="_blank" class="bg-stone-100 w-full px-4 py-2 border-2 rounded-2xl hover:bg-stone-200 focus:ring-violet-400 focus:border-violet-400">{{ $submission->topologi }}</a>
                            </div>
                            <div class="mb-4">
                                <p class="mb-2 block text-md font-semibold text-stone-800">File Powerpoint <span class="text-xs font-normal">(.pptx, .ppt, .pdf, .odp)</span></p>
                                <a href="{{ asset('storage/powerpoint/' . $submission->powerpoint) }}" target="_blank" class="bg-stone-100 w-full px-4 py-2 border-2 rounded-2xl hover:bg-stone-200 focus:ring-violet-400 focus:border-violet-400">{{ $submission->powerpoint }}</a>
                            </div>
                            <div class="mb-4">
                                <p class="block text-md font-semibold text-stone-800">Keterangan <span class="text-xs font-normal">(opsional)</span></p>
                                <p class="bg-stone-100 h-12 w-full px-4 py-2 border-2 rounded-2xl focus:ring-violet-400 focus:border-violet-400">{{ $submission->penjelasan }}</p>
                            </div>
                        </div>
                    @else
                        <div class="bg-stone-50 font-stone-800 p-5 my-4 rounded-2xl shadow-md">
                            <form method="POST" action="{{ route('hasil_tugas_siswa.store') }}" enctype="multipart/form-data">
                                @csrf

                                <input type="hidden" name="user_id" value="{{ auth()->id() }}">
                                <input type="hidden" name="tugas_id" value="{{ $tugas->id }}">

                                <p class="font-bold text-lg text-center">Form Pengumpulan Tugas</p>
                                <div class="mb-4">
                                    <label for="topologi" class="block text-md font-semibold text-stone-800">File Topologi <span class="text-xs font-normal">(.pkt/.json)</span></label>
                                    <input type="file" id="topologi" name="topologi" accept=".pkt,.json" value="{{ old('topologi') }}"
                                        class="w-full px-4 py-2 border-2 rounded-2xl focus:ring-violet-400 focus:border-violet-400 @error('topologi') border-red-500 @enderror">
                                    @error('topologi')
                                        <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
                                    @enderror
                                    </input>
                                </div>

                                <div class="mb-4">
                                    <label for="powerpoint" class="block text-md font-semibold text-stone-800">File Powerpoint <span class="text-xs font-normal">(.pptx, .ppt, .pdf, .odp)</span></label></label>
                                    <input type="file" id="powerpoint" name="powerpoint" accept=".pptx,.ppt,.pdf,.odp" value="{{ old('powerpoint') }}"
                                        class="w-full px-4 py-2 border-2 rounded-2xl focus:ring-violet-400 focus:border-violet-400 @error('powerpoint') border-red-500 @enderror">
                                    @error('powerpoint')
                                        <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-4">
                                    <label for="penjelasan" class="block text-md font-semibold text-stone-800">Keterangan <span class="text-xs font-normal">(opsional)</span></label>
                                    <textarea type="text" id="penjelasan" name="penjelasan" rows="5"
                                        class="w-full px-4 py-2 text-stone-800 border-2 rounded-2xl focus:ring-violet-400 focus:border-violet-400 @error('penjelasan') border-red-500 @enderror">{{ old('penjelasan') }}</textarea>
                                    @error('penjelasan')
                                        <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="my-3">
                                    <button type="submit" class="bg-violet-400 hover:bg-violet-300 rounded-xl p-2 mr-2 font-semibold">Kirim</button>
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
