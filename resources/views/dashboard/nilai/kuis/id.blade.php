@extends('dashboard.layout')

@section('content')
<section class="p-4 row z-0 max-w-6xl align-center mx-auto">
    <a href="{{ route('nilai.kuis') }}" class="flex m-3">
        <svg fill="#fafafa" xmlns="http://www.w3.org/2000/svg" width="20px" height="25px" viewBox="0 0 52 52" enable-background="new 0 0 52 52" xml:space="preserve">
            <path d="M48.6,23H15.4c-0.9,0-1.3-1.1-0.7-1.7l9.6-9.6c0.6-0.6,0.6-1.5,0-2.1l-2.2-2.2c-0.6-0.6-1.5-0.6-2.1,0 L2.5,25c-0.6,0.6-0.6,1.5,0,2.1L20,44.6c0.6,0.6,1.5,0.6,2.1,0l2.1-2.1c0.6-0.6,0.6-1.5,0-2.1l-9.6-9.6C14,30.1,14.4,29,15.3,29 h33.2c0.8,0,1.5-0.6,1.5-1.4v-3C50,23.8,49.4,23,48.6,23z"/>
        </svg>
        <p class="ml-2 font-semibold text-md text-gray-50">Kembali</p>
    </a>

    <div class="bg-stone-800 text-stone-300 rounded-xl mx-3 my-5 border-2 border-stone-600">
        <div class="row">
            <div class="col-md-12 p-5">
                <h2 class="text-stone-300 text-center p-2 font-semibold"> Kuis Pertemuan ke-{{ $id }}</h2>
                <div class="border-0 shadow-sm">
                    <div class="">
                        <div class="overflow-x-auto">
                            <table class="min-w-full divide-y divide-stone-400 text-stone-300">
                                <thead>
                                    <tr>
                                        <th scope="col" class="px-6 py-3 text-center text-xs font-medium uppercase tracking-wider">
                                            No.
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-center text-xs font-medium uppercase tracking-wider">
                                            Nama Siswa
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
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-stone-500">
                                    @forelse ($hasilKuisSiswa as $nilai)
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap text-center">
                                                {{ $loop->iteration }}
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap hover:bg-stone-600">
                                                <a href="/dashboard/nilai/kuis/siswa_{{ \App\Models\User::where('id', $nilai->user_id)->value('id') }}" class="hover:underline" title="Klik untuk lebih lanjut">
                                                    {{ \App\Models\User::where('id', $nilai->user_id)->value('name') }}
                                                </a>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-center font-bold">
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
                                            <td colspan="7" class="px-6 py-4 whitespace-nowrap text-center">
                                                <div class="mx-auto bg-stone-300 text-gray-600 p-2 rounded-xl">
                                                    Data kuis tidak tersedia.
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
