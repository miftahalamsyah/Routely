@extends('dashboard.layout')

@section('content')
<section class="p-4 row z-0 max-w-6xl align-center mx-auto">
    <a href="/dashboard/kuis" class="flex m-3">
        <svg fill="#fafafa" xmlns="http://www.w3.org/2000/svg" width="20px" height="25px" viewBox="0 0 52 52" enable-background="new 0 0 52 52" xml:space="preserve">
            <path d="M48.6,23H15.4c-0.9,0-1.3-1.1-0.7-1.7l9.6-9.6c0.6-0.6,0.6-1.5,0-2.1l-2.2-2.2c-0.6-0.6-1.5-0.6-2.1,0 L2.5,25c-0.6,0.6-0.6,1.5,0,2.1L20,44.6c0.6,0.6,1.5,0.6,2.1,0l2.1-2.1c0.6-0.6,0.6-1.5,0-2.1l-9.6-9.6C14,30.1,14.4,29,15.3,29 h33.2c0.8,0,1.5-0.6,1.5-1.4v-3C50,23.8,49.4,23,48.6,23z"/>
        </svg>
        <p class="ml-2 font-semibold text-md text-stone-50">Back</p>
    </a>
    <div class="bg-stone-50 rounded-xl mx-3">
        <div class="row">
            <div class="col-md-12 p-5">
                <h1 class="font-semibold text-stone-800 text-4xl text-center my-8">Tambah Soal Kuis</h1>
                <div class="border-0 shadow-sm">

                    <form action="{{ route('kuis.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-4">
                            <label for="indikator" class="block text-md font-semibold text-stone-800">Indikator</label>
                            <select id="indikator" name="indikator" class="w-full px-4 py-2 border rounded-lg focus:ring-violet-400 focus:border-violet-400">
                                <option value="Dekomposisi" {{ old('indikator') == 'Dekomposisi' ? 'selected' : '' }}>Dekomposisi</option>
                                <option value="Abstraksi" {{ old('indikator') == 'Abstraksi' ? 'selected' : '' }}>Abstraksi</option>
                                <option value="Pengenalan Pola" {{ old('indikator') == 'Pengenalan Pola' ? 'selected' : '' }}>Pengenalan Pola</option>
                                <option value="Algoritma" {{ old('indikator') == 'Algoritma' ? 'selected' : '' }}>Algoritma</option>
                            </select>
                            @error('indikator')
                                <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="pertemuan_id" class="block text-md font-semibold text-gray-800">Pertemuan ke berapa</label>
                            <select id="pertemuan_id" name="pertemuan_id" class="w-full px-4 py-2 border rounded-lg focus:ring-violet-400 focus:border-violet-400 @error('pertemuan_id') border-red-500 @enderror">
                                @foreach ($pertemuans as $pertemuan)
                                    <option value="{{ $pertemuan->id }}">Pertemuan ke-{{ $pertemuan->pertemuan_ke }}</option>
                                @endforeach
                            </select>
                            @error('pertemuan_id')
                                <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="pertanyaan" class="block text-md font-semibold text-stone-800">Pertanyaan</label>
                            <textarea id="pertanyaan" name="pertanyaan" rows="2"
                                placeholder="Masukkan Pertanyaan"
                                class="w-full px-4 py-2 border rounded-lg focus:ring-violet-400 focus:border-violet-400 @error('pertanyaan') border-red-500 @enderror">{{ old('pertanyaan') }}</textarea>
                            @error('pertanyaan')
                                <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="gambar" class="block text-md font-semibold text-stone-800">Gambar (Opsional)</label>
                            <input type="file" id="gambar" name="gambar" value="{{ old('gambar') }}" placeholder="Masukkan Judul Materi"
                                class="w-full px-4 py-2 border rounded-lg focus:ring-violet-400 focus:border-violet-400 @error('gambar') border-red-500 @enderror">
                            @error('gambar')
                                <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
                            @enderror
                            </input>
                        </div>

                        <div class="mb-4">
                            <label for="jawaban_a" class="block text-md font-semibold text-stone-800">Opsi A</label>
                            <textarea id="jawaban_a" name="jawaban_a" rows="1"
                                placeholder="Masukkan Pilihan A"
                                class="w-full px-4 py-2 border rounded-lg focus:ring-violet-400 focus:border-violet-400 @error('jawaban_a') border-red-500 @enderror">{{ old('jawaban_a') }}</textarea>
                            @error('jawaban_a')
                                <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="jawaban_b" class="block text-md font-semibold text-stone-800">Opsi B</label>
                            <textarea id="jawaban_a" name="jawaban_b" rows="1"
                                placeholder="Masukkan Pilihan B"
                                class="w-full px-4 py-2 border rounded-lg focus:ring-violet-400 focus:border-violet-400 @error('jawaban_b') border-red-500 @enderror">{{ old('jawaban_b') }}</textarea>
                            @error('jawaban_b')
                                <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="jawaban_c" class="block text-md font-semibold text-stone-800">Opsi C</label>
                            <textarea id="jawaban_a" name="jawaban_c" rows="1"
                                placeholder="Masukkan Pilihan C"
                                class="w-full px-4 py-2 border rounded-lg focus:ring-violet-400 focus:border-violet-400 @error('jawaban_c') border-red-500 @enderror">{{ old('jawaban_c') }}</textarea>
                            @error('jawaban_c')
                                <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="jawaban_d" class="block text-md font-semibold text-stone-800">Opsi D</label>
                            <textarea id="jawaban_d" name="jawaban_d" rows="1"
                                placeholder="Masukkan Pilihan D"
                                class="w-full px-4 py-2 border rounded-lg focus:ring-violet-400 focus:border-violet-400 @error('jawaban_d') border-red-500 @enderror">{{ old('jawaban_d') }}</textarea>
                            @error('jawaban_d')
                                <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="jawaban_e" class="block text-md font-semibold text-stone-800">Opsi E</label>
                            <textarea id="jawaban_a" name="jawaban_e" rows="1"
                                placeholder="Masukkan Pilihan E"
                                class="w-full px-4 py-2 border rounded-lg focus:ring-violet-400 focus:border-violet-400 @error('jawaban_e') border-red-500 @enderror">{{ old('jawaban_e') }}</textarea>
                            @error('jawaban_e')
                                <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="kunci_jawaban" class="block text-md font-semibold text-stone-800">Kunci Jawaban</label>
                            <select id="kunci_jawaban" name="kunci_jawaban" class="w-full px-4 py-2 border rounded-lg focus:ring-violet-400 focus:border-violet-400">
                                <option value="a" {{ old('a') == 'a' ? 'selected' : '' }}>A</option>
                                <option value="b" {{ old('b') == 'b' ? 'selected' : '' }}>B</option>
                                <option value="c" {{ old('c') == 'c' ? 'selected' : '' }}>C</option>
                                <option value="d" {{ old('d') == 'd' ? 'selected' : '' }}>D</option>
                                <option value="e" {{ old('e') == 'e' ? 'selected' : '' }}>E</option>
                            </select>
                            @error('kunci_jawaban')
                                <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="pembahasan" class="block text-md font-semibold text-stone-800">Pembahasan (Opsional)</label>
                            <textarea id="pembahasan" name="pembahasan" rows="3"
                                placeholder="Masukkan Pembahasan Soal"
                                class="w-full px-4 py-2 border rounded-lg focus:ring-violet-400 focus:border-violet-400 @error('pembahasan') border-red-500 @enderror">{{ old('pembahasan') }}</textarea>
                            @error('pembahasan')
                                <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="flex justify-end">
                            <button type="submit"
                                class="bg-violet-500 text-white px-4 py-2 rounded-md hover:bg-violet-600 focus:outline-none focus:bg-violet-600">
                                Tambah Soal Kuis
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
  CKEDITOR.replace('pertanyaan');
</script>
@endsection
