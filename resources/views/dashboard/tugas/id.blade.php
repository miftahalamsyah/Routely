@extends('dashboard.layout')

@section('content')
<section class="row z-0 p-4 max-w-6xl align-center mx-auto">
    <div class="my-8 text-center">
        <h1 class="mb-6 text-3xl font-extrabold leading-none tracking-normal text-stone-100 md:tracking-tight">Hasil Pengerjaan Tugas {{ $tugas_id }}</h1>
    </div>
    <a href="/dashboard/tugas" class="flex m-3">
        <svg fill="#fafafa" xmlns="http://www.w3.org/2000/svg" width="20px" height="25px" viewBox="0 0 52 52" enable-background="new 0 0 52 52" xml:space="preserve">
            <path d="M48.6,23H15.4c-0.9,0-1.3-1.1-0.7-1.7l9.6-9.6c0.6-0.6,0.6-1.5,0-2.1l-2.2-2.2c-0.6-0.6-1.5-0.6-2.1,0 L2.5,25c-0.6,0.6-0.6,1.5,0,2.1L20,44.6c0.6,0.6,1.5,0.6,2.1,0l2.1-2.1c0.6-0.6,0.6-1.5,0-2.1l-9.6-9.6C14,30.1,14.4,29,15.3,29 h33.2c0.8,0,1.5-0.6,1.5-1.4v-3C50,23.8,49.4,23,48.6,23z"/>
        </svg>
        <p class="ml-2 font-semibold text-md text-gray-50">Back</p>
    </a>
    <div class="bg-stone-50 rounded-xl mx-3">
        <div class="row">
            <div class="col-md-12 p-2">
                <div class="border-0 shadow-sm">
                    <div class="">
                        <div class="overflow-x-auto">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead>
                                    <tr>
                                        <th scope="col" class="px-6 py-3 bg-stone-50 text-center text-xs font-medium text-stone-3000 uppercase tracking-wider">
                                            ID Tugas
                                        </th>
                                        <th scope="col" class="px-6 py-3 bg-stone-50 text-center text-xs font-medium text-stone-3000 uppercase tracking-wider">
                                            Kelompok
                                        </th>
                                        <th scope="col" class="px-6 py-3 bg-stone-50 text-center text-xs font-medium text-stone-3000 uppercase tracking-wider">
                                            Nama Siswa
                                        </th>
                                        <th scope="col" class="px-6 py-3 bg-stone-50 text-center text-xs font-medium text-stone-3000 uppercase tracking-wider">
                                            Topologi
                                        </th>
                                        <th scope="col" class="px-6 py-3 bg-stone-50 text-center text-xs font-medium text-stone-3000 uppercase tracking-wider">
                                            Powerpoint
                                        </th>
                                        <th scope="col" class="px-6 py-3 bg-stone-50 text-center text-xs font-medium text-stone-3000 uppercase tracking-wider">
                                            Penjelasan
                                        </th>
                                        <th scope="col" class="px-6 py-3 bg-stone-50 text-center text-xs font-medium text-stone-3000 uppercase tracking-wider">
                                            Nilai
                                        </th>
                                        <th scope="col" class="px-6 py-3 bg-stone-50 text-center text-xs font-medium text-stone-3000 uppercase tracking-wider">
                                            Aksi
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="bg-stone-50 divide-y divide-gray-200">
                                    @forelse ($hasilTugasSiswa as $item)
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap text-center">
                                                {{ $item->tugas_id }}
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-center">
                                                {{ \App\Models\Kelompok::where('user_id', $item->user_id)->value('no_kelompok') }}
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                {{ $item->user->name }}
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap max-w-[150px] overflow-hidden overflow-ellipsis text-student">
                                                <a href="{{ asset('storage/topologi/' . $item->topologi) }}" target="_blank">
                                                    {{ $item->topologi }}
                                                </a>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap max-w-[150px] overflow-hidden overflow-ellipsis text-student">
                                                <a href="{{ asset('storage/powerpoint/' . $item->powerpoint) }}" target="_blank">
                                                    {{ $item->powerpoint }}
                                                </a>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                {{ $item->penjelasan }}
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-center">
                                                @php
                                                    $nilaiTugas = \App\Models\NilaiTugas::where('hasil_tugas_siswa_id', $item->id)->first();
                                                @endphp
                                                {{ $nilaiTugas ? $nilaiTugas->nilai_tugas : '-' }}
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-center">
                                                <div class="flex space-x-2 justify-center">
                                                    @unless(\App\Models\NilaiTugas::where('hasil_tugas_siswa_id', $item->id)->exists())
                                                        <a href="{{ route('nilai.tugas.create', [
                                                                'user_id' => $item->user_id,
                                                                'tugas_id' => $item->tugas_id,
                                                                'hasil_tugas_siswas_id' => $item->id
                                                            ]) }}" class="text-stone-800 hover:text-student">
                                                            <svg height="20" width="20" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" xml:space="preserve"><path d="M13 11V8h-2v3H8v2h3v3h2v-3h3v-2z"/><path d="M21 4V3h-1V2H4v1H3v1H2v16h1v1h1v1h16v-1h1v-1h1V4h-1zm-1 14h-1v1h-1v1H6v-1H5v-1H4V6h1V5h1V4h12v1h1v1h1v12z"/></svg>
                                                        </a>
                                                    @else
                                                        <p class="text-xs text-student italic">-</p>
                                                    @endunless
                                                    @if(\App\Models\NilaiTugas::where('hasil_tugas_siswa_id', $item->id)->exists())
                                                        <a href="{{ route('nilai.tugas.edit', $item->id) }}" class="text-stone-800 hover:text-student">
                                                            <svg fill="currentColor" width="20px" height="20px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M21,12a1,1,0,0,0-1,1v6a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V5A1,1,0,0,1,5,4h6a1,1,0,0,0,0-2H5A3,3,0,0,0,2,5V19a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V13A1,1,0,0,0,21,12ZM6,12.76V17a1,1,0,0,0,1,1h4.24a1,1,0,0,0,.71-.29l6.92-6.93h0L21.71,8a1,1,0,0,0,0-1.42L17.47,2.29a1,1,0,0,0-1.42,0L13.23,5.12h0L6.29,12.05A1,1,0,0,0,6,12.76ZM16.76,4.41l2.83,2.83L18.17,8.66,15.34,5.83ZM8,13.17l5.93-5.93,2.83,2.83L10.83,16H8Z"/></svg>
                                                        </a>
                                                    @else
                                                        <p class="text-xs text-student italic">-</p>
                                                    @endif
                                                </div>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="3" class="px-6 py-4 whitespace-nowrap text-center">
                                                <div class="mx-auto bg-gray-100 text-gray-600 p-2 rounded-xl">
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
@endsection
