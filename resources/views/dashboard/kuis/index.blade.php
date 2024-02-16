@extends('dashboard.layout')

@section('content')
<section class="row z-0 p-4 max-w-6xl align-center mx-auto min-h-screen">
    <div class="my-8 text-center">
        <h1 class="mb-6 text-3xl font-extrabold leading-none tracking-normal text-stone-50 md:tracking-tight">Daftar Soal Kuis</h1>
    </div>

    <div class="justify-end m-2">
        <button class="bg-violet-400 m-2 p-2 rounded-xl hover:bg-violet-300"><a href="{{ route('kuis.create') }}" class="text-md font-semibold p-2">Tambah Soal kuis</a></button>
        <button class="bg-student m-2 p-2 rounded-xl text-stone-50"><a href="{{ route('kuis.import') }}" class="text-md font-semibold p-2">Import Spreadsheets</a></button>
    </div>

    <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 m-3">
        @php
            $uniquePertemuanIds = $soal_kuis->unique('pertemuan_id')->pluck('pertemuan_id');
        @endphp
        @foreach ($uniquePertemuanIds as $pertemuan_id)
            <a href="#{{ $pertemuan_id }}" class="text-xs h-30 bg-stone-700 hover:bg-stone-600 text-stone-400 p-4 block rounded-xl border-stone-600 border-2">
                Pertemuan {{ $pertemuan_id }}
                @php
                    $soalKuisCount = $soal_kuis->where('pertemuan_id', $pertemuan_id)->count();
                @endphp
                <p class="font-semibold text-stone-300 text-lg">{{ $soalKuisCount }} <span class="text-sm">soal<span></p>
            </a>
        @endforeach
    </div>

    @foreach ($soal_kuis->unique('pertemuan_id') as $uniqueKuis)
    <div class="bg-stone-700 border-2 border-stone-600 rounded-xl mx-3 mb-8 text-stone-300" id="{{ $loop->iteration }}">
        <p class="px-3 pt-3 text-center font-semibold text-lg">Kuis Pertemuan-{{ $loop->iteration }}</p>
        <div class="row">
            <div class="col-md-12 px-5">
                <div class="border-0 shadow-sm">
                    <div class="">
                        <div class="overflow-x-auto">
                            <table class="min-w-full divide-y divide-stone-200">
                                <thead>
                                    <tr>
                                        <th scope="col" class="px-6 py-3 text-center text-xs font-medium uppercase tracking-wider">
                                            No
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-center text-xs font-medium uppercase tracking-wider">
                                            Indikator
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-center text-xs font-medium uppercase tracking-wider">
                                            Pertanyaan
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-center text-xs font-medium uppercase tracking-wider">
                                            Pilihan A
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-center text-xs font-medium uppercase tracking-wider">
                                            Pilihan B
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-center text-xs font-medium uppercase tracking-wider">
                                            Pilihan C
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-center text-xs font-medium uppercase tracking-wider">
                                            Pilihan D
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-center text-xs font-medium uppercase tracking-wider">
                                            Pilihan E
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-center text-xs font-medium uppercase tracking-wider">
                                            Kunci Jawaban
                                        </th>
                                        <th scope="col" class="px-6 py-3"></th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-stone-600">
                                    @forelse ($soal_kuis->where('pertemuan_id', $uniqueKuis->pertemuan_id) as $soal)
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap text-center">
                                                {{ $loop->iteration }}
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                {{ $soal->indikator }}
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                {{ $soal->pertanyaan }}
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                {{ $soal->jawaban_a }}
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                {{ $soal->jawaban_b }}
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                {{ $soal->jawaban_c }}
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                {{ $soal->jawaban_d }}
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                {{ $soal->jawaban_e }}
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                {{ $soal->kunci_jawaban }}
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                <div class="flex space-x-2 justify-end">
                                                    <a href="{{ route('kuis.edit', $soal->id) }}" class="text-blue-600 hover:text-blue-900">
                                                        <svg fill="#262626" width="20px" height="20px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M21,12a1,1,0,0,0-1,1v6a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V5A1,1,0,0,1,5,4h6a1,1,0,0,0,0-2H5A3,3,0,0,0,2,5V19a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V13A1,1,0,0,0,21,12ZM6,12.76V17a1,1,0,0,0,1,1h4.24a1,1,0,0,0,.71-.29l6.92-6.93h0L21.71,8a1,1,0,0,0,0-1.42L17.47,2.29a1,1,0,0,0-1.42,0L13.23,5.12h0L6.29,12.05A1,1,0,0,0,6,12.76ZM16.76,4.41l2.83,2.83L18.17,8.66,15.34,5.83ZM8,13.17l5.93-5.93,2.83,2.83L10.83,16H8Z"/></svg>
                                                    </a>
                                                    <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('kuis.destroy', $soal->id) }}" method="POST">
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
                                            <td colspan="3" class="px-6 py-4 whitespace-nowrap text-center">
                                                <div class="bg-stone-700 text-stone-300 p-2 rounded-xl">
                                                    Data soal kuis tidak tersedia.
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
    @endforeach

</section>
@endsection
