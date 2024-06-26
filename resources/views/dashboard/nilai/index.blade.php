@extends('dashboard.layout')

@section('content')
<section class="row z-0 p-4 max-w-6xl align-center mx-auto min-h-screen">
    <div class="my-8 text-center">
        <h1 class="mb-6 text-2xl font-extrabold leading-none tracking-normal text-stone-300 md:tracking-tight">Nilai Tugas dan Kuis</h1>
    </div>
    <div class="m-3 mb-8 grid grid-cols-2 gap-4">
        <a href="/dashboard/nilai/tugas" class="text-sm">
            <div class="w-full h-24 bg-stone-800 text-stone-300 p-4 block rounded-xl border-stone-600 border hover:bg-stone-600">
                Nilai Tugas
                <p class="font-bold text-2xl py-2">{{ $CountNilaiTugas }}/{{ $CountHasilTugasSiswa }} <span class="font-normal text-sm">telah dinilai</span></p>
            </div>
        </a>
        <a href="/dashboard/nilai/kuis" class="text-sm">
            <div class="w-full h-24 bg-stone-800 text-stone-300 p-4 block rounded-xl border-stone-600 border hover:bg-stone-600">
                Nilai Kuis
                <p class="font-bold text-2xl py-2">{{ $CountHasilKuisSiswa }}/{{ $CountKuisSiswa }}</p>
            </div>
        </a>
    </div>
    <hr class="border-1 border-stone-600 m-3"/>


    <div class="my-8 text-center">
        <h1 class="mb-6 text-2xl font-extrabold leading-none tracking-normal text-stone-300 md:tracking-tight">Nilai Pretest dan Posttest</h1>
    </div>
    <div class="m-3 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
        <a href="/dashboard/kategori-tes/1" class="text-sm">
            <div class="w-full h-24 bg-stone-800 text-stone-300 p-4 block rounded-xl border-stone-600 border hover:bg-stone-600">
                Pretest
                <p class="font-bold text-2xl py-2">{{ $CountPretest }}/{{ $CountStudent }}</p>
            </div>
        </a>
        <a href="/dashboard/nilai/pretest" class="text-sm">
            <div class="w-full h-24 bg-stone-800 text-stone-300 p-4 block rounded-xl border-stone-600 border hover:bg-stone-600">
                Rata-rata Pretest
                <p class="font-bold text-2xl py-2">{{ $averagePretest }}</p>
            </div>
        </a>
        <a href="/dashboard/kategori-tes/2" class="text-sm">
            <div class="w-full h-24 bg-stone-800 text-stone-300 p-4 block rounded-xl border-stone-600 border hover:bg-stone-600">
                Posttest
                <p class="font-bold text-2xl py-2">{{ $CountPosttest }}/{{ $CountStudent }}</p>
            </div>
        </a>
        <a href="/dashboard/nilai/posttest" class="text-sm">
            <div class="w-full h-24 bg-stone-800 text-stone-300 p-4 block rounded-xl border-stone-600 border hover:bg-stone-600">
                Rata-rata Posttest
                <p class="font-bold text-2xl py-2">{{ $averagePosttest }}</p>
            </div>
        </a>
    </div>

    <div class="bg-stone-800 rounded-xl mx-3 border border-stone-600">
        <div class="row">
            <div class="col-md-12 p-5">
                <div class="border-0 shadow-sm">
                    <div class="">
                        <div class="overflow-x-auto">
                            <table class="min-w-full divide-y divide-stone-400 w-full">
                                <thead>
                                    <tr>
                                        <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-stone-300 uppercase tracking-wider">
                                            No.
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-stone-300 uppercase tracking-wider">
                                            Nama Siswa
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-stone-300 uppercase tracking-wider">
                                            Nilai PreTest
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-stone-300 uppercase tracking-wider">
                                            Nilai PostTest
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-stone-300 uppercase tracking-wider">
                                            Keterangan
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="text-stone-300 divide-y divide-stone-500">
                                    @php
                                        $groupedNilaiPretestPosttest = $nilaiPretestPosttest->groupBy('user_id');
                                    @endphp
                                    @forelse ($groupedNilaiPretestPosttest as $user_id => $groupedNilai)
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap text-center">
                                                {{ $loop->iteration }}
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap hover:bg-stone-600 hover:underline">
                                                <a href="/dashboard/nilai/{{ \App\Models\User::where('id', $user_id)->value('id') }}">
                                                    {{ \App\Models\User::where('id', $user_id)->value('name') }}
                                                </a>
                                            </td>
                                            @foreach([1, 2] as $kategori_tes_id)
                                                <td class="px-6 py-4 text-center">
                                                    @foreach($groupedNilai->where('kategori_tes_id', $kategori_tes_id) as $nilai)
                                                        {{ $nilai->total }}
                                                    @endforeach
                                                </td>
                                            @endforeach
                                            <td class="px-6 py-4 whitespace-nowrap text-center">
                                                <span class="text-sm text-violet-400 font-semibold">
                                                    @if($groupedNilai->where('kategori_tes_id', 1)->first() && $groupedNilai->where('kategori_tes_id', 2)->first() && $groupedNilai->where('kategori_tes_id', 1)->first()->total > $groupedNilai->where('kategori_tes_id', 2)->first()->total)
                                                        Tidak Naik
                                                    @elseif($groupedNilai->where('kategori_tes_id', 1)->first() && $groupedNilai->where('kategori_tes_id', 2)->first() && $groupedNilai->where('kategori_tes_id', 1)->first()->total < $groupedNilai->where('kategori_tes_id', 2)->first()->total)
                                                        Naik
                                                    @endif
                                                </span>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="5" class="px-6 py-4 whitespace-nowrap text-center">
                                                <div class="mx-auto text-stone-300 p-2 rounded-xl">
                                                    Data nilai tidak tersedia.
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

{{-- <section class="row z-0 p-4 max-w-6xl align-center mx-auto">
    <div class="my-8 text-center">
        <h1 class="mb-6 text-3xl font-extrabold leading-none tracking-normal text-stone-300 md:tracking-tight">Daftar Nilai</h1>
    </div>
    <div class="bg-stone-50 rounded-xl mx-3">
        <div class="row">
            <div class="col-md-12 p-5">
                <div class="border-0 shadow-sm">
                    <div class="">
                        <button class="bg-violet-400 my-2 p-2 rounded-xl hover:bg-violet-300"><a href="{{ route('nilai.create') }}" class="text-md font-semibold p-2">Tambah Nilai</a></button>
                        <div class="overflow-x-auto">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead>
                                    <tr>
                                        <th scope="col" class="px-6 py-3 bg-stone-50 text-center text-xs font-medium text-stone-3000 uppercase tracking-wider">
                                            Nama Siswa
                                        </th>
                                        <th scope="col" class="px-6 py-3 bg-stone-50 text-center text-xs font-medium text-stone-3000 uppercase tracking-wider">
                                            Nilai Pre Test
                                        </th>
                                        <th scope="col" class="px-6 py-3 bg-stone-50 text-center text-xs font-medium text-stone-3000 uppercase tracking-wider">
                                            Nilai Post Test
                                        </th>
                                        <th scope="col" class="px-6 py-3 bg-stone-50"></th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    @forelse ($nilais as $nilai)
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                {{ \App\Models\User::where('id', $nilai->user_id)->value('name') }}
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap" style="color: {{ is_null($nilai->pretest) ? 'purple': 'inherit'; }}; font-style: {{ is_null($nilai->pretest) ? 'italic' : 'normal' }}">
                                                {{ is_null($nilai->pretest) ? 'Tidak Tersedia' : $nilai->pretest }}
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap" style="color: {{ is_null($nilai->posttest) ? 'purple': 'inherit' }}; font-style: {{ is_null($nilai->posttest) ? 'italic' : 'normal' }}">
                                                {{ is_null($nilai->posttest) ? 'Tidak Tersedia' : $nilai->posttest }}
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                <div class="flex space-x-2 justify-end">
                                                    <a href="{{ route('nilai.edit', $nilai->id) }}" class="text-blue-600 hover:text-blue-900">
                                                        <svg fill="#262626" width="20px" height="20px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M21,12a1,1,0,0,0-1,1v6a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V5A1,1,0,0,1,5,4h6a1,1,0,0,0,0-2H5A3,3,0,0,0,2,5V19a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V13A1,1,0,0,0,21,12ZM6,12.76V17a1,1,0,0,0,1,1h4.24a1,1,0,0,0,.71-.29l6.92-6.93h0L21.71,8a1,1,0,0,0,0-1.42L17.47,2.29a1,1,0,0,0-1.42,0L13.23,5.12h0L6.29,12.05A1,1,0,0,0,6,12.76ZM16.76,4.41l2.83,2.83L18.17,8.66,15.34,5.83ZM8,13.17l5.93-5.93,2.83,2.83L10.83,16H8Z"/></svg>
                                                    </a>
                                                    <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('nilai.destroy', $nilai->id) }}" method="POST">
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
                                            <td colspan="4" class="px-6 py-4 whitespace-nowrap text-center">
                                                <div class="mx-auto text-stone-300 p-2 rounded-xl">
                                                    Data nilai tidak tersedia.
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
</section> --}}
@endsection
