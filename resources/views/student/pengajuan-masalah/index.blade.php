@extends('layouts.student_layout')

@section('content')

<section class="w-full justify-center mx-auto px-4 lg:px-12">
    <a href="{{ url()->previous() }}" class="flex m-3 text-stone-700">
        <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" width="20px" height="25px" viewBox="0 0 52 52" enable-background="new 0 0 52 52" xml:space="preserve">
            <path d="M48.6,23H15.4c-0.9,0-1.3-1.1-0.7-1.7l9.6-9.6c0.6-0.6,0.6-1.5,0-2.1l-2.2-2.2c-0.6-0.6-1.5-0.6-2.1,0 L2.5,25c-0.6,0.6-0.6,1.5,0,2.1L20,44.6c0.6,0.6,1.5,0.6,2.1,0l2.1-2.1c0.6-0.6,0.6-1.5,0-2.1l-9.6-9.6C14,30.1,14.4,29,15.3,29 h33.2c0.8,0,1.5-0.6,1.5-1.4v-3C50,23.8,49.4,23,48.6,23z"/>
        </svg>
        <p class="ml-2 font-semibold text-md">Kembali</p>
    </a>
    <div class="row col-md-12 rounded-2xl bg-stone-50 p-5 my-4 shadow-md">
        <form action="{{ route('student.pengajuan-masalah.store') }}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="mb-4">
                <label for="pertemuan_id" class="block text-md font-semibold text-gray-800">Pertemuan</label>
                <select id="pertemuan_id" name="pertemuan_id" class="w-full bg-stone-50 px-4 py-2 border-2 rounded-2xl focus:ring-violet-400 focus:border-violet-400 @error('pertemuan_id') border-red-500 @enderror">
                    @foreach ($pertemuans as $pertemuan)
                        @if (!$user->pengajuanMasalahUser || !$user->pengajuanMasalahUser->contains('pertemuan_id', $pertemuan->id))
                            <option value="{{ $pertemuan->id }}">Pertemuan ke-{{ $pertemuan->pertemuan_ke }}</option>
                        @endif
                    @endforeach
                </select>
                @error('pertemuan_id')
                    <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="kelompok" class="block text-md font-semibold text-stone-800">Kelompok</label>
                <input type="text" id="kelompok" name="kelompok" rows="5"
                    class="w-full bg-stone-100 px-4 py-2 text-stone-800 border-2 rounded-2xl focus:ring-violet-400 focus:border-violet-400 @error('kelompok') border-red-500 @enderror"
                    value="{{ old('kelompok', $noKelompok) }}"
                    readonly>
                </input>
                @error('kelompok')
                    <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="soal" class="block text-md font-semibold text-stone-800">Pengajuan Masalah (Soal) <span class="text-xs font-normal">(.pkt, .json)</span></label>
                <input type="file" id="soal" name="soal" accept=".pkt,.json" value="{{ old('soal') }}"
                    class="w-full px-4 py-2 border-2 rounded-2xl focus:ring-violet-400 focus:border-violet-400 @error('soal') border-red-500 @enderror">
                @error('soal')
                    <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="keterangan" class="block text-md font-semibold text-gray-800">Keterangan* <span class="text-xs font-normal">(opsional)</span></label>
                <input type="text" id="keterangan" name="keterangan" rows="5"
                    class="w-full px-4 py-2 border-2 rounded-2xl focus:ring-violet-400 focus:border-violet-400 @error('keterangan') border-red-500 @enderror">{{ old('keterangan') }}</input>
                @error('keterangan')
                    <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
                @enderror
            </div>
            <div class="my-3">
                <button type="submit" class="bg-violet-400 hover:bg-violet-300 rounded-xl p-2 mr-2 font-semibold">Kirim</button>
            </div>
        </form>
    </div>


    <div class="rounded-2xl bg-stone-50 p-5 my-4 shadow-md">
        <div class="row col-md-12 border-0 overflow-x-auto">
            <table class="row bg-stone-50 p-5 overflow-x-auto border-0 shadow-md col-md-12 min-w-full divide-y divide-stone-200 rounded-2xl">
                <thead class="text-center text-xs font-medium text-stone-500 uppercase tracking-wider">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Pertemuan
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Kelompok
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Soal
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Keterangan*
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Aksi
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-stone-50 divide-y divide-gray-200">
                    @php
                        $seenCombination = [];
                    @endphp

                    @forelse ($pengajuanMasalah as $masalah)
                        @php
                            $combination = $masalah->kelompok . '-' . $masalah->pertemuan_id;

                            // Check if the combination has been seen before
                            if (!in_array($combination, $seenCombination)) {
                                // If not, add it to the seen array and display the row
                                $seenCombination[] = $combination;
                        @endphp
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-center">
                                        {{ $masalah->pertemuan_id }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-center">
                                        {{ $masalah->kelompok }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-center hover:bg-stone-100">
                                        <a href="{{ asset('storage/pengajuan-masalah/' . $masalah->soal) }}" download="{{ $masalah->soal }}" title="Unduh">
                                            {{ $masalah->soal }}
                                        </a>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-center">
                                        {{ $masalah->keterangan }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap justify-center text-sm font-medium flex text-center">
                                        <a href="{{ asset('storage/pengajuan-masalah/' . $masalah->soal) }}" download="{{ $masalah->soal }}" class="mx-1 text-stone-700 hover:text-violet-500" title="Unduh">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor" viewBox="0 0 1200 1200" xml:space="preserve">
                                                <path d="M600 0C268.63 0 0 268.63 0 600s268.63 600 600 600c331.369 0 600-268.631 600-600C1200 268.63 931.369 0 600 0zm0 1069.565c-259.37 0-469.565-210.261-469.565-469.565S340.63 130.435 600 130.435c259.369 0 469.565 210.261 469.565 469.565S859.369 1069.565 600 1069.565zm117.392-720.652H482.608v266.739H335.87L600 864.13l264.13-248.478H717.391l.001-266.739z"/>
                                            </svg>
                                        </a>
                                        <div class="flex space-x-2 justify-end">
                                            @if ($masalah->user_id == auth()->user()->id)
                                                <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('student.pengajuan-masalah.destroy', $masalah->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="mx-1 text-stone-700 hover:text-red-600" title="Hapus">
                                                        <svg width="20px" height="20px" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M7 4a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v2h4a1 1 0 1 1 0 2h-1.069l-.867 12.142A2 2 0 0 1 17.069 22H6.93a2 2 0 0 1-1.995-1.858L4.07 8H3a1 1 0 0 1 0-2h4V4zm2 2h6V4H9v2zM6.074 8l.857 12H17.07l.857-12H6.074zM10 10a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0v-6a1 1 0 0 1 1-1zm4 0a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0v-6a1 1 0 0 1 1-1z"/>
                                                        </svg>
                                                    </button>
                                                </form>
                                            @endif
                                        </div>
                                    </td>
                                </tr>
                        @php
                            }
                        @endphp
                    @empty
                        <tr>
                            <td colspan="7" class="px-6 py-4 whitespace-nowrap text-center">
                                <div class="mx-auto bg-stone-100 text-gray-600 p-2 rounded-xl">
                                    Data pengajuan masalah belum tersedia.
                                </div>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</section>

@endsection
