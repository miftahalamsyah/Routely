@extends('layouts.student_layout')

@section('content')
<section class="w-full mt-12 justify-center mx-auto px-4 lg:px-12 min-h-screen">
    <div class="grid grid-cols-1 sm:grid-cols-1 gap-4">
        <div class="relative flex flex-col break-words bg-stone-50 border shadow-lg rounded-2xl">
            <div class="row">
                <div class="col-md-12 p-5">
                    <p class="font-semibold text-stone-800 text-xl text-center">Isi Lembar Refleksi</p>
                    <div class="border-0 shadow-sm">

                        <form action="{{ route('student.refleksi.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="mb-4">
                                <label for="pertemuan_id" class="block text-md font-semibold text-gray-800">Pertemuan ke berapa</label>
                                <select id="pertemuan_id" name="pertemuan_id" class="w-full px-4 py-2 border rounded-lg focus:ring-violet-400 focus:border-violet-400 @error('pertemuan_id') border-red-500 @enderror">
                                    @foreach ($pertemuans as $pertemuan)
                                        @if (!$user->refleksis || !$user->refleksis->contains('pertemuan_id', $pertemuan->id))
                                            <option value="{{ $pertemuan->id }}">Pertemuan ke-{{ $pertemuan->pertemuan_ke }}</option>
                                        @endif
                                    @endforeach
                                </select>
                                @error('pertemuan_id')
                                    <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="seberapa_paham" class="block text-md font-semibold text-gray-800">Seberapa Paham</label>
                                <input type="text" id="seberapa_paham" name="seberapa_paham" rows="5"
                                    class="w-full px-4 py-2 border rounded-lg focus:ring-violet-400 focus:border-violet-400 @error('seberapa_paham') border-red-500 @enderror">{{ old('seberapa_paham') }}</input>
                                @error('seberapa_paham')
                                    <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="seberapa_baik" class="block text-md font-semibold text-gray-800">Seberapa Baik</label>
                                <input type="text" id="seberapa_baik" name="seberapa_baik" rows="5"
                                    class="w-full px-4 py-2 border rounded-lg focus:ring-violet-400 focus:border-violet-400 @error('seberapa_baik') border-red-500 @enderror">{{ old('seberapa_baik') }}</input>
                                @error('seberapa_baik')
                                    <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="seberapa_sulit" class="block text-md font-semibold text-gray-800">Seberapa sulit</label>
                                <input type="text" id="seberapa_sulit" name="seberapa_sulit" rows="5"
                                    class="w-full px-4 py-2 border rounded-lg focus:ring-violet-400 focus:border-violet-400 @error('seberapa_sulit') border-red-500 @enderror">{{ old('seberapa_sulit') }}</input>
                                @error('seberapa_sulit')
                                    <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="hambatan" class="block text-md font-semibold text-gray-800">Hambatan</label>
                                <input type="text" id="hambatan" name="hambatan" rows="5"
                                    class="w-full px-4 py-2 border rounded-lg focus:ring-violet-400 focus:border-violet-400 @error('hambatan') border-red-500 @enderror">{{ old('hambatan') }}</input>
                                @error('hambatan')
                                    <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="saran" class="block text-md font-semibold text-gray-800">Saran</label>
                                <input type="text" id="saran" name="saran" rows="5"
                                    class="w-full px-4 py-2 border rounded-lg focus:ring-violet-400 focus:border-violet-400 @error('saran') border-red-500 @enderror">{{ old('saran') }}</input>
                                @error('saran')
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

        <div class="relative flex flex-col break-words bg-stone-50 border shadow-lg rounded-2xl mt-12">
            <p class="font-semibold text-stone-800 text-xl text-center p-5">Daftar Lembar Refleksi</p>
            <div class="row">
                <div class="col-md-12 p-5">
                    <div class="border-0 shadow-sm">
                        <div class="overflow-x-auto">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead>
                                    <tr>
                                        <th scope="col" class="px-6 py-3 bg-stone-50 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Pertemuan
                                        </th>
                                        <th scope="col" class="px-6 py-3 bg-stone-50 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Seberapa Paham
                                        </th>
                                        <th scope="col" class="px-6 py-3 bg-stone-50 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Seberapa Baik
                                        </th>
                                        <th scope="col" class="px-6 py-3 bg-stone-50 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Seberapa Sulit
                                        </th>
                                        <th scope="col" class="px-6 py-3 bg-stone-50 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Hambatan
                                        </th>
                                        <th scope="col" class="px-6 py-3 bg-stone-50 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Saran
                                        </th>
                                        <th scope="col" class="px-6 py-3 bg-stone-50"></th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    @forelse ($refleksis ?? [] as $refleksi)
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap text-center">
                                                {{ $refleksi->pertemuan_id }}
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                {{ $refleksi->seberapa_paham }}
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                {{ $refleksi->seberapa_baik }}
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                {{ $refleksi->seberapa_sulit }}
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                {{ $refleksi->hambatan }}
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                {{ $refleksi->saran }}
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                <div class="flex space-x-2 justify-end">
                                                    <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('refleksi.destroy', $refleksi->id) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="text-red-600 hover:text-red-900">
                                                            <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M7 4a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v2h4a1 1 0 1 1 0 2h-1.069l-.867 12.142A2 2 0 0 1 17.069 22H6.93a2 2 0 0 1-1.995-1.858L4.07 8H3a1 1 0 0 1 0-2h4V4zm2 2h6V4H9v2zM6.074 8l.857 12H17.07l.857-12H6.074zM10 10a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0v-6a1 1 0 0 1 1-1zm4 0a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0v-6a1 1 0 0 1 1-1z" fill="#0D0D0D"/></svg>
                                                        </button>
                                                    </form>
                                                </div>
                                            </td>

                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="7" class="px-6 py-4 whitespace-nowrap text-center">
                                                <div class="mx-auto bg-stone-100 text-gray-600 p-2 rounded-xl">
                                                    Data refleksi tidak tersedia.
                                                </div>
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
