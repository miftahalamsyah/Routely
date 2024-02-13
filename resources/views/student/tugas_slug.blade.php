@extends('layouts.student_layout')

@section('content')

<section class="w-full justify-center mx-auto px-4 lg:px-12 text-stone-700">
    <div class="rounded-xl">
        <div class="row">
            <div class="col-md-12 py-5">
                <div class="border-0">
                    <a href="{{ url()->previous() }}" class="flex m-3 text-stone-700">
                        <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" width="20px" height="25px" viewBox="0 0 52 52" enable-background="new 0 0 52 52" xml:space="preserve">
                            <path d="M48.6,23H15.4c-0.9,0-1.3-1.1-0.7-1.7l9.6-9.6c0.6-0.6,0.6-1.5,0-2.1l-2.2-2.2c-0.6-0.6-1.5-0.6-2.1,0 L2.5,25c-0.6,0.6-0.6,1.5,0,2.1L20,44.6c0.6,0.6,1.5,0.6,2.1,0l2.1-2.1c0.6-0.6,0.6-1.5,0-2.1l-9.6-9.6C14,30.1,14.4,29,15.3,29 h33.2c0.8,0,1.5-0.6,1.5-1.4v-3C50,23.8,49.4,23,48.6,23z"/>
                        </svg>
                        <p class="ml-2 font-semibold text-md">Kembali</p>
                    </a>
                    <div class="rounded-2xl bg-stone-50 p-5 my-4 shadow-md">
                        <div class="bg-stone-100 py-2 px-4 my-4 rounded-2xl border-2 hover:shadow">
                            <p class="font-bold text-md">Deskripsi</p>
                            <p class="text-md">{{ $description }}</p>
                        </div>
                        @if ($tugas_file)
                        <div class="bg-stone-100 py-2 px-4  my-4 rounded-2xl border-2 hover:shadow">
                            <p class="font-semibold text-md">File LKPD dapat diunduh dalam bentuk .pdf di bawah ini</p>
                            <a href="{{ asset('storage/tugas/' . $tugas_file) }}" target="_blank" class="rounded-xl my-2 bg-violet-200 text-student px-4 py-2 inline-block hover:bg-violet-300">
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
                                <p class="mb-2 block text-md font-semibold text-stone-800">File Tugas (Laporan) <span class="text-xs font-normal">(.pptx, .ppt, .pdf, .odp)</span></p>
                                <a href="{{ asset('storage/powerpoint/' . $submission->powerpoint) }}" target="_blank" class="bg-stone-100 w-full px-4 py-2 border-2 rounded-2xl hover:bg-stone-200 focus:ring-violet-400 focus:border-violet-400">{{ $submission->powerpoint }}</a>
                            </div>
                            <div class="mb-4">
                                <p class="block text-md font-semibold text-stone-800">Keterangan <span class="text-xs font-normal">(opsional)</span></p>
                                <p class="bg-stone-100 h-12 w-full px-4 py-2 border-2 rounded-2xl focus:ring-violet-400 focus:border-violet-400">{{ $submission->penjelasan }}</p>
                            </div>
                            <div class="mb-4">
                                <p class="block text-md font-semibold text-stone-800">Nilai</p>
                                @if ($nilaiTugas)
                                    <p class="bg-stone-100 h-12 w-full px-4 py-2 border-2 rounded-2xl focus:ring-violet-400 focus:border-violet-400">{{ $nilaiTugas->nilai_tugas }}</p>
                                @else
                                    <p class="bg-stone-100 h-12 w-full px-4 py-2 border-2 rounded-2xl focus:ring-violet-400 focus:border-violet-400 italic font-thin text-stone-500">Belum Dinilai</p>
                                @endif
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
                                    <label for="powerpoint" class="block text-md font-semibold text-stone-800">File Tugas (Laporan) <span class="text-xs font-normal">(.pptx, .ppt, .pdf, .odp)</span></label></label>
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
                                    <button type="submit" class="bg-student hover:bg-student-dark text-stone-50 rounded-xl p-2 mr-2 font-semibold">Kirim</button>
                                </div>
                            </form>
                        </div>
                    @endif

                    <div class="mt-12 flex items-center">
                        <hr class="border-t border-student flex-grow mr-2">
                        <p class="font-bold text-lg">Hasil Tugas Kelompok Lain</p>
                        <hr class="border-t border-student flex-grow ml-2">
                    </div>

                    <div class="rounded-2xl bg-stone-50 p-5 my-4 shadow-md">
                        <div class="row col-md-12 border-0 overflow-x-auto">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    <tr>
                                        <th scope="col" class="px-6 py-3">
                                            Kelompok
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Nama Siswa
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            File Laporan
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Aksi
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200">
                                    @php
                                        $seenNoKelompok = [];
                                    @endphp

                                    @forelse ($hasilTugasSiswas as $hasilTugas)
                                        @php
                                            $noKelompok = \DB::table('kelompoks')
                                                ->where('user_id', $hasilTugas->user_id)
                                                ->pluck('no_kelompok')
                                                ->first();

                                            // Check if the no_kelompok has been seen before
                                            if (!in_array($noKelompok, $seenNoKelompok)) {
                                                // If not, add it to the seen array and display the row
                                                $seenNoKelompok[] = $noKelompok;
                                        @endphp
                                                <tr>
                                                    <td class="px-6 py-4 whitespace-nowrap text-center">
                                                        {{ $noKelompok }}
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap max-w-[150px] overflow-hidden overflow-ellipsis">
                                                        {{ $hasilTugas->user->name }}
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap max-w-[150px] overflow-hidden overflow-ellipsis hover:bg-stone-100">
                                                        <a href="{{ asset('storage/powerpoint/' . $hasilTugas->powerpoint) }}" target="_blank" title="Buka di tab baru">
                                                            {{ $hasilTugas->powerpoint }}
                                                        </a>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap justify-center text-sm font-medium flex text-center">
                                                        <a href="{{ asset('storage/powerpoint/' . $hasilTugas->powerpoint) }}" download="{{ $hasilTugas->powerpoint }}" class="py-0 text-stone-700 hover:text-violet-500" title="Unduh">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor" viewBox="0 0 1200 1200" xml:space="preserve"><path d="M600 0C268.63 0 0 268.63 0 600s268.63 600 600 600c331.369 0 600-268.631 600-600C1200 268.63 931.369 0 600 0zm0 1069.565c-259.37 0-469.565-210.261-469.565-469.565S340.63 130.435 600 130.435c259.369 0 469.565 210.261 469.565 469.565S859.369 1069.565 600 1069.565zm117.392-720.652H482.608v266.739H335.87L600 864.13l264.13-248.478H717.391l.001-266.739z"/></svg>
                                                        </a>
                                                    </td>
                                                </tr>
                                        @php
                                            }
                                        @endphp
                                    @empty
                                        <tr>
                                            <td colspan="7" class="px-6 py-4 whitespace-nowrap text-center">
                                                <div class="italic mx-auto bg-stone-100 text-gray-600 p-2 rounded-xl font-thin">
                                                    Belum tersedia.
                                                </div>
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                        <p class="italic text-xs text-right mt-4">*hanya menampilkan perwakilan satu file tugas per satu kelompok</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
