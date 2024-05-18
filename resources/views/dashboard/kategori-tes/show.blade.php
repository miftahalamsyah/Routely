@extends('dashboard.layout')

@section('content')
<section class="row p-4 z-0 max-w-6xl align-center mx-auto">
    <a href="/dashboard/kategori-tes" class="flex m-3 text-stone-200">
        <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" width="20px" height="25px" viewBox="0 0 52 52" enable-background="new 0 0 52 52" xml:space="preserve">
            <path d="M48.6,23H15.4c-0.9,0-1.3-1.1-0.7-1.7l9.6-9.6c0.6-0.6,0.6-1.5,0-2.1l-2.2-2.2c-0.6-0.6-1.5-0.6-2.1,0 L2.5,25c-0.6,0.6-0.6,1.5,0,2.1L20,44.6c0.6,0.6,1.5,0.6,2.1,0l2.1-2.1c0.6-0.6,0.6-1.5,0-2.1l-9.6-9.6C14,30.1,14.4,29,15.3,29 h33.2c0.8,0,1.5-0.6,1.5-1.4v-3C50,23.8,49.4,23,48.6,23z"/>
        </svg>
        <p class="ml-2 font-semibold text-md text-stone-200">Back</p>
    </a>

    <p class="px-6 py-3 text-stone-200 text-center text-2xl font-bold tracking-wider">{{$kategoriTes->kategori_tes}}</p>
    <div class="bg-stone-700 rounded-xl m-3 border border-stone-600 row col-md-12 p-5 border-0 shadow-sm overflow-x-auto text-stone-300">
        <table class="min-w-full divide-y divide-stone-400 text-stone-300">
            <thead>
                <tr>
                    <th scope="col" class="px-6 py-3 text-center text-xs font-medium uppercase tracking-wider">
                        Nama Siswa
                    </th>
                    @for ($i = 1; $i <= $soalTesCount; $i++)
                        <th scope="col" class="px-6 py-3 text-center text-xs font-medium uppercase tracking-wider">
                            Soal {{ $i }}
                        </th>
                    @endfor
                </tr>
            </thead>
            <tbody class="divide-y divide-stone-500">
                @forelse ($hasilTes as $index => $hasil)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">
                            {{ $hasil->user->name }}
                        </td>
                        @php
                            $jawabanArray = str_split($hasil->jawaban);
                        @endphp
                        @foreach ($jawabanArray as $i => $jawaban)
                            <td class="px-6 py-4 whitespace-nowrap text-center">
                                {{ $jawaban == $soalTes[$i]->kunci_jawaban ? 1 : 0 }}
                            </td>
                        @endforeach
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="px-6 py-4 whitespace-nowrap text-center">
                            <div class="mx-auto bg-stone-300 text-gray-600 p-2 rounded-xl">
                                Data tidak tersedia
                            </div>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</section>
@endsection
