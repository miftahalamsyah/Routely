@extends('dashboard.layout')

@section('content')
<section class="p-4 row z-0 max-w-6xl align-center mx-auto">
    <a href="{{ url()->previous() }}" class="flex m-3">
        <svg fill="#fafafa" xmlns="http://www.w3.org/2000/svg" width="20px" height="25px" viewBox="0 0 52 52" enable-background="new 0 0 52 52" xml:space="preserve">
            <path d="M48.6,23H15.4c-0.9,0-1.3-1.1-0.7-1.7l9.6-9.6c0.6-0.6,0.6-1.5,0-2.1l-2.2-2.2c-0.6-0.6-1.5-0.6-2.1,0 L2.5,25c-0.6,0.6-0.6,1.5,0,2.1L20,44.6c0.6,0.6,1.5,0.6,2.1,0l2.1-2.1c0.6-0.6,0.6-1.5,0-2.1l-9.6-9.6C14,30.1,14.4,29,15.3,29 h33.2c0.8,0,1.5-0.6,1.5-1.4v-3C50,23.8,49.4,23,48.6,23z"/>
        </svg>
        <p class="ml-2 font-semibold text-md text-gray-50">Back</p>
    </a>
    <div class="bg-gray-50 rounded-xl mx-3">
        <div class="row">
            <div class="col-md-12 p-5">
                <h1 class="font-semibold text-4xl text-center my-8  ">Isi Nilai Tugas</h1>
                <div class="border-0 shadow-sm">
                    <form action="{{ route('nilai.tugas.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="tugas_id" value="{{ $defaultTugasId }}">
                        <input type="hidden" name="user_id" value="{{ $defaultUserId }}">
                        <input type="hidden" name="hasil_tugas_siswas_id" value="{{ $defaultHasilTugasSiswaId }}">

                        <div class="mb-4">
                            <label for="tugas_id" class="block text-md font-semibold text-gray-800">Tugas ID</label>
                            <select id="tugas_id" name="tugas_id" class="w-full px-4 py-2 border rounded-lg focus:ring-violet-400 focus:border-violet-400 @error('tugas_id') border-red-500 @enderror" disabled>
                                @foreach ($tugass as $tugas)
                                    <option value="{{ $tugas->id }}" {{ $tugas->id == $defaultTugasId ? 'selected' : '' }}>Tugas ke-{{ $tugas->id }}</option>
                                @endforeach
                            </select>
                            @error('tugas_id')
                                <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="user_id" class="block text-md font-semibold text-gray-800">Nama Siswa</label>
                            <select id="user_id" name="user_id" class="w-full px-4 py-2 border rounded-lg focus:ring-violet-400 focus:border-violet-400 @error('user_id') border-red-500 @enderror" disabled>
                                @foreach ($users as $user)
                                    <option value="{{ $user->id }}" {{ $user->id == $defaultUserId ? 'selected' : '' }}>{{ $user->name }}</option>
                                @endforeach
                            </select>
                            @error('user_id')
                                <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
                            @enderror
                        </div>

                        <div>
                            <p class="block text-md font-semibold text-stone-800">Kelompok</p>
                            <div class="mb-4 w-full px-4 py-2 border rounded-lg focus:ring-violet-400 focus:border-violet-400 bg-stone-100">
                                <p class="text-student">{{ \App\Models\Kelompok::where('user_id', $hasilSiswa->user_id)->value('no_kelompok') }}</p>
                            </div>
                        </div>

                        <div class="mb-4">
                            <label for="hasil_tugas_siswa_id" class="block text-md font-semibold text-gray-800">Hasil Tugas Siswa</label>
                            <select id="hasil_tugas_siswa_id" name="hasil_tugas_siswa_id" class="w-full px-4 py-2 border rounded-lg focus:ring-violet-400 focus:border-violet-400 @error('hasil_tugas_siswa_id') border-red-500 @enderror" disabled>
                                @foreach ($hasilTugasSiswa as $hasil)
                                    <option value="{{ $hasil->id }}" {{ $hasil->id == $defaultHasilTugasSiswaId ? 'selected' : '' }}>{{ $hasil->id }}</option>
                                @endforeach
                            </select>
                            @error('hasil_tugas_siswa_id')
                                <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
                            @enderror
                        </div>

                        <p class="block text-md font-semibold text-stone-800">Topologi</p>
                        <a href="{{ asset('storage/topologi/' . $hasilSiswa->topologi) }}" target="_blank">
                            <div class="mb-4 w-full px-4 py-2 border rounded-lg focus:ring-violet-400 focus:border-violet-400 bg-stone-100">
                                <p class="text-student">{{ $hasilSiswa->topologi }}</p>
                            </div>
                        </a>

                        <p class="block text-md font-semibold text-stone-800">File Presentasi</p>
                        <a href="{{ asset('storage/powerpoint/' . $hasilSiswa->powerpoint) }}" target="_blank">
                            <div class="mb-4 w-full px-4 py-2 border rounded-lg focus:ring-violet-400 focus:border-violet-400 bg-stone-100">
                                <p class="text-student">{{ $hasilSiswa->powerpoint }}</p>
                            </div>
                        </a>

                        <div class="mb-4">
                            <label for="nilai_tugas" class="block text-md font-semibold text-gray-800">Nilai</label>
                            <input type="number" id="nilai_tugas" name="nilai_tugas" value="{{ old('nilai_tugas') }}" placeholder="Masukkan Nilai Tugas"
                                class="w-full px-4 py-2 border rounded-lg focus:ring-violet-400 focus:border-violet-400" min="0" max="100">
                            </input>
                            @error('nilai_tugas')
                                <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="my-3">
                            <button type="submit" class="bg-violet-400 hover:bg-violet-300 rounded-xl p-2 mr-2 font-semibold">Simpan</button>
                            <button type="reset" class="bg-gray-50 hover:bg-gray-100 border border-gray-350 rounded-xl p-2 font-semibold">Reset</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
