@extends('layouts.student_layout')

@section('content')
<section class="w-full justify-center min-h-screen mx-auto mt-2 px-2 lg:px-12">
    <div class="bg-stone-50 overflow-y-auto my-4 p-2 rounded-md border border-r-4 border-b-4 border-stone-700 shadow-md">
        <div class="p-4 mx-auto text-center z-20">
            <div class="overflow-x-auto">
                <table class="min-w-full mt-4 divide-y divide-stone-200">
                    <h1 class="clashdisplaymedium mb-4 text-lg tracking-tight leading-none text-stone-700 md:text-2xl lg:text-2xl">Rapor Tes dan Kuis</h1>
                    <thead class="text-stone-400">
                        <tr>
                            <th class="px-6 py-3 text-center text-xs font-medium uppercase tracking-wider">
                                Jenis Tes atau Kuis
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
                            <th scope="col" class="bg-violet-100 px-6 py-3 text-center text-xs font-medium uppercase tracking-wider">
                                Total Nilai
                            </th>
                        </tr>
                    </thead>
                    <tbody class="text-stone-700 text-left">
                        @forelse ($HasilPretestSiswa ?? [] as $hasilTes)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-center">
                                    {{ $hasilTes->kategori_tes->kategori_tes }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-center">
                                    {{ $hasilTes->dekomposisi }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-center">
                                    {{ $hasilTes->abstraksi }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-center">
                                    {{ $hasilTes->pengenalan_pola }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-center">
                                    {{ $hasilTes->algoritma }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-center bg-violet-100">
                                    {{ $hasilTes->total }}
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="px-6 py-4 whitespace-nowrap text-center">
                                    <div class="mx-auto bg-stone-100 border border-stone-700 text-stone-500 italic font-thin p-2 rounded-xl">
                                        Anda belum mengerjakan Pretest
                                    </div>
                                </td>
                            </tr>
                        @endforelse

                        @foreach ($HasilKuisSiswa ?? [] as $hasilKuis)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-center">
                                    Kuis ke-{{ $hasilKuis->pertemuan_id }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-center">
                                    {{ $hasilKuis->dekomposisi }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-center">
                                    {{ $hasilKuis->abstraksi }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-center">
                                    {{ $hasilKuis->pengenalan_pola }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-center">
                                    {{ $hasilKuis->algoritma }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-center bg-violet-100">
                                    {{ $hasilKuis->total }}
                                </td>
                            </tr>
                        @endforeach

                        @foreach ($HasilPosttestSiswa ?? [] as $hasilTes)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-center">
                                    {{ $hasilTes->kategori_tes->kategori_tes }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-center">
                                    {{ $hasilTes->dekomposisi }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-center">
                                    {{ $hasilTes->abstraksi }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-center">
                                    {{ $hasilTes->pengenalan_pola }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-center">
                                    {{ $hasilTes->algoritma }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-center bg-violet-100">
                                    {{ $hasilTes->total }}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
@endsection
