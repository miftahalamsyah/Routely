@extends('dashboard.layout')

@section('content')
<section class="row z-0 p-4 max-w-6xl align-center mx-auto">
    <div class="my-8 text-center text-2xl font-bold leading-none tracking-normal text-stone-300 md:tracking-tight">
        <h1 class="text-sm font-normal">Nilai Pretest dan Posttest </h1>
        <h2>{{$user->name}}</h2>
    </div>

    <div class="flex justify-between m-3">
        <a href="/dashboard/nilai" class="flex text-stone-300">
            <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" width="20px" height="25px" viewBox="0 0 52 52" enable-background="new 0 0 52 52" xml:space="preserve">
                <path d="M48.6,23H15.4c-0.9,0-1.3-1.1-0.7-1.7l9.6-9.6c0.6-0.6,0.6-1.5,0-2.1l-2.2-2.2c-0.6-0.6-1.5-0.6-2.1,0 L2.5,25c-0.6,0.6-0.6,1.5,0,2.1L20,44.6c0.6,0.6,1.5,0.6,2.1,0l2.1-2.1c0.6-0.6,0.6-1.5,0-2.1l-9.6-9.6C14,30.1,14.4,29,15.3,29 h33.2c0.8,0,1.5-0.6,1.5-1.4v-3C50,23.8,49.4,23,48.6,23z"/>
            </svg>
            <p class="ml-2 font-semibold text-md">Kembali</p>
        </a>
    </div>

    <div class="bg-stone-800 rounded-xl m-3 border border-stone-600 row col-md-12 p-5 shadow-sm overflow-x-auto text-stone-300">
        <p class="px-6 py-3 text-center text-xs font-medium uppercase tracking-wider">Nilai Total dan Nilai Per Indikator</p>
        <table class="min-w-full divide-y divide-stone-400 text-stone-300">
            <thead>
                <tr>
                    <th scope="col" class="px-6 py-3 text-center text-xs font-medium uppercase tracking-wider">
                        Jenis Tes
                    </th>
                    <th scope="col" class="px-6 py-3 text-center text-xs font-medium uppercase tracking-wider">
                        Total Nilai
                    </th>
                    <th scope="col" class="px-6 py-3 text-center text-xs font-medium uppercase tracking-wider">
                        Dekomposisi
                    </th>
                    <th scope="col" class="px-6 py-3 text-center text-xs font-medium uppercase tracking-wider">
                        Abstraksi
                    </th>
                    <th scope="col" class="px-6 py-3 text-center text-xs font-medium uppercase tracking-wider">
                        Pengenalan Pola
                    </th>
                    <th scope="col" class="px-6 py-3 text-center text-xs font-medium uppercase tracking-wider">
                        Algoritma
                    </th>
                    <th scope="col" class="px-6 py-3"></th>
                </tr>
            </thead>
            <tbody class="divide-y divide-stone-500">
                @forelse ($nilaiPretest as $index=>$nilai)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">
                            Pretest
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-center bg-stone-600">
                            {{ $nilai->total }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-center">
                            {{ $nilai->dekomposisi }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-center">
                            {{ $nilai->abstraksi }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-center">
                            {{ $nilai->pengenalan_pola }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-center">
                            {{ $nilai->algoritma }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">

                        </td>
                    </tr>
                @empty
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">
                            Pretest
                        </td>
                        <td colspan="6" class="px-6 py-4 whitespace-nowrap text-center">
                            <div class="mx-auto bg-stone-300 text-gray-600 p-2 rounded-xl">
                                Data nilai tidak tersedia / Siswa belum mengerjakan Pretest
                            </div>
                        </td>
                    </tr>
                @endforelse

                @forelse ($nilaiPosttest as $index=>$nilai)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">
                            Posttest
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-center bg-stone-600">
                            {{ $nilai->total }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-center">
                            {{ $nilai->dekomposisi }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-center">
                            {{ $nilai->abstraksi }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-center">
                            {{ $nilai->pengenalan_pola }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-center">
                            {{ $nilai->algoritma }}
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">
                            Posttest
                        </td>
                        <td colspan="6" class="px-6 py-4 whitespace-nowrap text-center">
                            <div class="mx-auto bg-stone-600 text-stone-50 p-2 rounded-xl">
                                Data nilai tidak tersedia / Siswa belum mengerjakan Posttest
                            </div>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="bg-stone-800 rounded-xl mx-3 my-6 border border-stone-600 row col-md-12 p-5 shadow-sm overflow-x-auto text-stone-300">
        <p class="px-6 pt-3 text-center text-xs font-medium uppercase tracking-wider">Jawaban Pretest</p>
        <p class="px-6 pb-3 text-center text-xs font-medium uppercase tracking-wider">{{$user->name}}</p>
        <table class="min-w-full divide-y divide-stone-400 text-stone-300">
            <thead>
                <tr>
                    <th scope="col" class="px-6 py-3 text-center text-xs font-medium uppercase tracking-wider">
                        Jenis Tes
                    </th>
                    @for ($i = 1; $i <= $soalPretestCount; $i++)
                        <th scope="col" class="px-6 py-3 text-center text-xs font-medium uppercase tracking-wider">
                            Soal {{ $i }}
                        </th>
                    @endfor
                </tr>
            </thead>
            <tbody class="divide-y divide-stone-500">
                @forelse ($hasilPretest as $index => $hasil)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">
                            Pretest
                        </td>
                        @php
                            $jawabanArray = str_split($hasil->jawaban);
                        @endphp
                        @foreach ($jawabanArray as $i => $jawaban)
                            <td class="px-6 py-4 whitespace-nowrap text-center">
                                {{ $jawaban == $soalPretest[$i]->kunci_jawaban ? 1 : 0 }}
                            </td>
                        @endforeach
                    </tr>
                @empty
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">
                            Pretest
                        </td>
                        <td colspan="{{$soalPretestCount}}" class="px-6 py-4 whitespace-nowrap text-center">
                            <div class="mx-auto bg-stone-600 text-stone-100 p-2 rounded-xl">
                                Data nilai tidak tersedia / Siswa belum mengerjakan Pretest
                            </div>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="bg-stone-800 rounded-xl mx-3 my-6 border border-stone-600 row col-md-12 p-5 border-0 shadow-sm overflow-x-auto text-stone-300">
        <p class="px-6 pt-3 text-center text-xs font-medium uppercase tracking-wider">Jawaban Posttest</p>
        <p class="px-6 pb-3 text-center text-xs font-medium uppercase tracking-wider">{{$user->name}}</p>
        <table class="min-w-full divide-y divide-stone-400 text-stone-300">
            <thead>
                <tr>
                    <th scope="col" class="px-6 py-3 text-center text-xs font-medium uppercase tracking-wider">
                        Jenis Tes
                    </th>
                    @for ($i = 1; $i <= $soalPretestCount; $i++)
                        <th scope="col" class="px-6 py-3 text-center text-xs font-medium uppercase tracking-wider">
                            Soal {{ $i }}
                        </th>
                    @endfor
                </tr>
            </thead>
            <tbody class="divide-y divide-stone-500">
                @forelse ($hasilPosttest as $index => $hasil)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">
                            Posttest
                        </td>
                        @php
                            $jawabanArray = str_split($hasil->jawaban);
                        @endphp
                        @foreach ($jawabanArray as $i => $jawaban)
                            <td class="px-6 py-4 whitespace-nowrap text-center">
                                {{ $jawaban == $soalPosttest[$i]->kunci_jawaban ? 1 : 0 }}
                            </td>
                        @endforeach
                    </tr>
                @empty
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">
                            Posttest
                        </td>
                        <td colspan="{{$soalPosttestCount}}" class="px-6 py-4 whitespace-nowrap text-center">
                            <div class="mx-auto bg-stone-600 text-stone-100 p-2 rounded-xl">
                                Data nilai tidak tersedia / Siswa belum mengerjakan Posttest
                            </div>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</section>
@endsection
