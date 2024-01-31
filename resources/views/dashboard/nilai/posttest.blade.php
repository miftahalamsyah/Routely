@extends('dashboard.layout')

@section('content')
<section class="row z-0 p-4 max-w-6xl align-center mx-auto">
    <h1 class="my-8 text-center text-3xl font-extrabold leading-none tracking-normal text-stone-300 md:tracking-tight">Nilai Posttest</h1>
    <div class="flex justify-between m-3">
        <a href="/dashboard/nilai" class="flex text-stone-300">
            <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" width="20px" height="25px" viewBox="0 0 52 52" enable-background="new 0 0 52 52" xml:space="preserve">
                <path d="M48.6,23H15.4c-0.9,0-1.3-1.1-0.7-1.7l9.6-9.6c0.6-0.6,0.6-1.5,0-2.1l-2.2-2.2c-0.6-0.6-1.5-0.6-2.1,0 L2.5,25c-0.6,0.6-0.6,1.5,0,2.1L20,44.6c0.6,0.6,1.5,0.6,2.1,0l2.1-2.1c0.6-0.6,0.6-1.5,0-2.1l-9.6-9.6C14,30.1,14.4,29,15.3,29 h33.2c0.8,0,1.5-0.6,1.5-1.4v-3C50,23.8,49.4,23,48.6,23z"/>
            </svg>
            <p class="ml-2 font-semibold text-md">Kembali</p>
        </a>
        <button class="bg-student p-2 rounded-xl text-stone-300"><a href="{{ route('nilai.posttest.export') }}" class="text-md font-semibold p-2">Ekspor ke Spreadsheets</a></button>
    </div>
    <div class="bg-stone-700 rounded-xl mx-3 border border-stone-600">
        <div class="row">
            <div class="col-md-12 p-5">
                <div class="border-0 shadow-sm">
                    <div class="">
                        <div class="overflow-x-auto">
                            <table class="min-w-full divide-y divide-stone-400">
                                <thead>
                                    <tr>
                                        <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-stone-300 uppercase tracking-wider">
                                            No.
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-stone-300 uppercase tracking-wider">
                                            Nama Siswa
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-stone-300 uppercase tracking-wider">
                                            Total Nilai
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-stone-300 uppercase tracking-wider">
                                            Dekomposisi
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-stone-300 uppercase tracking-wider">
                                            Abstraksi
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-stone-300 uppercase tracking-wider">
                                            Pengenalan Pola
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-stone-300 uppercase tracking-wider">
                                            Algoritma
                                        </th>
                                        <th scope="col" class="px-6 py-3 "></th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-stone-500 text-stone-300">
                                    @forelse ($nilaiPosttest as $index=>$nilai)
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap text-center">
                                                {{ $index + 1 }}
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                {{ \App\Models\User::where('id', $nilai->user_id)->value('name') }}
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-center">
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
                                            <td colspan="3" class="px-6 py-4 whitespace-nowrap text-center">
                                                <div class="mx-auto bg-stone-300 text-gray-600 p-2 rounded-xl">
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
