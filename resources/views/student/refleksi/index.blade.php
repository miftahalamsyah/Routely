@extends('layouts.student_layout')

@section('content')
<section class="w-full justify-center mx-auto px-4 lg:px-12 min-h-screen mt-2">
    <div class="grid grid-cols-1 sm:grid-cols-1 gap-4">
        <div class="relative flex flex-col break-words bg-stone-50 border border border-b-4 border-r-4 border-stone-700 shadow-sm rounded-sm">
            <p class="clashdisplaymedium text-stone-700 text-xl text-center p-5">Daftar Lembar Refleksi</p>
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
                                            <td class="px-6 py-4 whitespace-nowrap max-w-[150px] overflow-hidden overflow-ellipsis">
                                                {{ $refleksi->seberapa_paham }}
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap max-w-[150px] overflow-hidden overflow-ellipsis">
                                                {{ $refleksi->seberapa_baik }}
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap max-w-[150px] overflow-hidden overflow-ellipsis">
                                                {{ $refleksi->seberapa_sulit }}
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap max-w-[150px] overflow-hidden overflow-ellipsis">
                                                {{ $refleksi->hambatan }}
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap max-w-[150px] overflow-hidden overflow-ellipsis">
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

        <div class="relative flex flex-col break-words bg-stone-50 border shadow-sm rounded-sm border-b-4 border-r-4 border-stone-700">
            <div class="row">
                <div class="col-md-12 p-7">
                    <p class="clashdisplaymedium text-stone-800 text-xl text-center">Isi Lembar Refleksi</p>

                    <form action="{{ route('student.refleksi.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-4">
                            <label for="pertemuan_id" class="block text-md font-semibold text-gray-800">Pertemuan ke berapa</label>
                            <select id="pertemuan_id" name="pertemuan_id" class="w-full px-3 py-2 text-sm leading-tight text-stone-700 border border-b-4 border-r-4 border-stone-300 rounded-sm shadow-xs appearance-none focus:outline-none focus:shadow-outline-violet focus:border-violet-300  @error('pertemuan_id') border-red-500 @enderror">
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
                            <label for="seberapa_paham" class="block text-md font-semibold text-gray-800">Apakah Anda merasa paham dengan materi yang telah diajarkan?</label>
                            <input type="text" id="seberapa_paham" name="seberapa_paham" rows="5"
                                class="w-full px-3 py-2 text-sm leading-tight text-stone-700 border border-b-4 border-r-4 border-stone-300 rounded-sm shadow-xs appearance-none focus:outline-none focus:shadow-outline-violet focus:border-violet-300  @error('seberapa_paham') border-red-500 @enderror">{{ old('seberapa_paham') }}</input>
                            @error('seberapa_paham')
                                <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="seberapa_baik" class="block text-md font-semibold text-gray-800">Bagaimana penilaian Anda terhadap kualitas pembelajaran ini?</label>
                            <input type="text" id="seberapa_baik" name="seberapa_baik" rows="5"
                                class="w-full px-3 py-2 text-sm leading-tight text-stone-700 border border-b-4 border-r-4 border-stone-300 rounded-sm shadow-xs appearance-none focus:outline-none focus:shadow-outline-violet focus:border-violet-300  @error('seberapa_baik') border-red-500 @enderror">{{ old('seberapa_baik') }}</input>
                            @error('seberapa_baik')
                                <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="seberapa_sulit" class="block text-md font-semibold text-gray-800">Adakah bagian tertentu yang menurut Anda sulit diatasi?</label>
                            <input type="text" id="seberapa_sulit" name="seberapa_sulit" rows="5"
                                class="w-full px-3 py-2 text-sm leading-tight text-stone-700 border border-b-4 border-r-4 border-stone-300 rounded-sm shadow-xs appearance-none focus:outline-none focus:shadow-outline-violet focus:border-violet-300  @error('seberapa_sulit') border-red-500 @enderror">{{ old('seberapa_sulit') }}</input>
                            @error('seberapa_sulit')
                                <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="hambatan" class="block text-md font-semibold text-gray-800">Apakah ada hambatan atau kesulitan yang Anda alami selama pembelajaran?</label>
                            <input type="text" id="hambatan" name="hambatan" rows="5"
                                class="w-full px-3 py-2 text-sm leading-tight text-stone-700 border border-b-4 border-r-4 border-stone-300 rounded-sm shadow-xs appearance-none focus:outline-none focus:shadow-outline-violet focus:border-violet-300  @error('hambatan') border-red-500 @enderror">{{ old('hambatan') }}</input>
                            @error('hambatan')
                                <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="saran" class="block text-md font-semibold text-gray-800">Apakah ada saran yang dapat Anda berikan untuk meningkatkan cara pembelajaran?</label>
                            <input type="text" id="saran" name="saran" rows="5"
                                class="w-full px-3 py-2 text-sm leading-tight text-stone-700 border border-b-4 border-r-4 border-stone-300 rounded-sm shadow-xs appearance-none focus:outline-none focus:shadow-outline-violet focus:border-violet-300  @error('saran') border-red-500 @enderror">{{ old('saran') }}</input>
                            @error('saran')
                                <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="my-3">
                            <button type="submit" class="px-4 py-2 text-sm font-medium text-stone-800 bg-orange-400 rounded-md border border-r-4 border-b-4 border-stone-700 hover:bg-orange-500 transform hover:translate-y-[-5px] transition-transform duration-300 ease-in-out focus:outline-none focus:bg-orange-600">Kirim</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
