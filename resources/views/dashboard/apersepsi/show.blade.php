@extends('dashboard.layout')

@section('content')
<section class="row z-0 p-4 max-w-6xl align-center mx-auto">
    <div class="my-8 text-center text-2xl font-bold leading-none tracking-normal text-stone-300 md:tracking-tight">
        <h1 class="text-sm font-normal">Apersepsi</h1>
        <h2>Pertemuan ke-{{$pertemuan->pertemuan_ke}}</h2>
    </div>

    <div class="flex justify-between m-3">
        <a href="/dashboard/apersepsi" class="flex text-stone-300">
            <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" width="20px" height="25px" viewBox="0 0 52 52" enable-background="new 0 0 52 52" xml:space="preserve">
                <path d="M48.6,23H15.4c-0.9,0-1.3-1.1-0.7-1.7l9.6-9.6c0.6-0.6,0.6-1.5,0-2.1l-2.2-2.2c-0.6-0.6-1.5-0.6-2.1,0 L2.5,25c-0.6,0.6-0.6,1.5,0,2.1L20,44.6c0.6,0.6,1.5,0.6,2.1,0l2.1-2.1c0.6-0.6,0.6-1.5,0-2.1l-9.6-9.6C14,30.1,14.4,29,15.3,29 h33.2c0.8,0,1.5-0.6,1.5-1.4v-3C50,23.8,49.4,23,48.6,23z"/>
            </svg>
            <p class="ml-2 font-semibold text-md">Kembali</p>
        </a>
    </div>

    <div class="bg-stone-800 rounded-xl m-3 border border-stone-600 row col-md-12 p-5 shadow-sm overflow-x-auto text-stone-300">
        <p class="px-6 pt-3 text-center text-xs font-medium uppercase tracking-wider">Pertemuan ke-{{$pertemuan->pertemuan_ke}}</p>
        <p class="px-6 pt-2 pb-3 text-center text-xs">{!! $pertemuan->apersepsi !!}</p>
        <table class="min-w-full divide-y divide-stone-400 text-stone-300">
            <thead>
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap text-center">
                        No.
                    </td>
                    <th scope="col" class="px-6 py-3 text-center text-xs font-medium uppercase tracking-wider">
                        Nama Siswa
                    </th>
                    <th scope="col" class="px-6 py-3 text-center text-xs font-medium uppercase tracking-wider">
                        Jawaban
                    </th>
                    <th scope="col" class="px-6 py-3"></th>
                </tr>
            </thead>
            <tbody class="divide-y divide-stone-500">
                @forelse ($hasilApersepsi as $index=>$apersepsi)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-center">
                            {{ $loop->iteration }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap hover:underline hover:bg-stone-600">
                            <a href="/dashboard/apersepsi/siswa_{{ $apersepsi->user->id }}" title="Klik untuk lebih lanjut">
                                {{ $apersepsi->user->name }}
                            </a>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-left">
                            {{ $apersepsi->jawaban }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">

                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="px-6 py-4 whitespace-nowrap text-center">
                            <div class="mx-auto bg-stone-300 text-gray-600 p-2 rounded-xl">
                                Data apersepsi tidak tersedia
                            </div>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</section>
@endsection
