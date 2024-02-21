@extends('dashboard.layout')

@section('content')
<section class="row z-0 p-4 max-w-6xl align-center mx-auto min-h-screen">
    <div class="my-8 text-center">
        <h1 class="mb-6 text-3xl font-extrabold leading-none tracking-normal text-stone-300 md:tracking-tight">Daftar Kelompok</h1>
    </div>
    <button class="bg-violet-400 p-2 mx-5 rounded-xl hover:bg-violet-300"><a href="{{ route('kelompok.create') }}" class="text-md font-semibold p-2">Tambah Kelompok</a></button>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 m-5 text-stone-300">
        @foreach ($clusters as $key => $cluster)
            <div class="bg-stone-700 border-2 border-stone-600 rounded-2xl shadow-md px-6 py-3">
                <table class="w-full">
                    <thead>
                        <tr>
                            <th class="font-semibold" colspan="2">Kluster {{ $key + 1 }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th class="font-semibold">Nilai Pretest</th>
                            <th class="font-semibold">Nama</th>
                        </tr>
                        @foreach ($cluster as $item)
                        <tr class="border-y border-stone-600">
                            <td class="text-center">{{ $item->pretest }}</td>
                            <td class="text-center">{{ $item->user->name }} </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endforeach
    </div>

    @foreach ($kelompoks->unique('no_kelompok') as $uniqueKelompok)
    <div class="bg-stone-700 border-2 border-stone-600 rounded-xl m-5 text-stone-300 text-center p-2">
        <p class="p-3 font-semibold">Kelompok {{ $loop->iteration }}</p>
        <div class="row">
            <div class="col-md-12">
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-stone-600">
                        <thead class="text-center text-xs font-medium text-stone-300 uppercase tracking-wider">
                            <tr>
                                <th scope="col" class="px-6 py-3 bg-stone-700">
                                    No.
                                </th>
                                <th scope="col" class="px-6 py-3 bg-stone-700">
                                    Nama Anggota
                                </th>
                                <th scope="col" class="px-6 py-3 bg-stone-700">
                                    Nilai Pretest
                                </th>
                                <th scope="col" class="px-6 py-3 bg-stone-700">
                                    Nilai Posttest
                                </th>
                                <th scope="col" class="px-6 py-3 bg-stone-700"></th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-stone-600">
                            @forelse ($kelompoks->where('no_kelompok', $uniqueKelompok->no_kelompok) as $kelompok)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-center">
                                        {{ $loop->iteration }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        {{ \App\Models\User::where('id', $kelompok->user_id)->value('name') }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-center">
                                        {{ \App\Models\Nilai::where('user_id', $kelompok->user_id)->value('pretest') }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-center">
                                        {{ \App\Models\Nilai::where('user_id', $kelompok->user_id)->value('posttest') }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                        <div class="flex space-x-2 justify-end">
                                            <a href="{{ route('kelompok.edit', $kelompok->id) }}" class="text-stone-300 hover:text-violet-500">
                                                <svg fill="currentColor" width="20px" height="20px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M21,12a1,1,0,0,0-1,1v6a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V5A1,1,0,0,1,5,4h6a1,1,0,0,0,0-2H5A3,3,0,0,0,2,5V19a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V13A1,1,0,0,0,21,12ZM6,12.76V17a1,1,0,0,0,1,1h4.24a1,1,0,0,0,.71-.29l6.92-6.93h0L21.71,8a1,1,0,0,0,0-1.42L17.47,2.29a1,1,0,0,0-1.42,0L13.23,5.12h0L6.29,12.05A1,1,0,0,0,6,12.76ZM16.76,4.41l2.83,2.83L18.17,8.66,15.34,5.83ZM8,13.17l5.93-5.93,2.83,2.83L10.83,16H8Z"/></svg>
                                            </a>
                                            <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('kelompok.destroy', $kelompok->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-stone-300 hover:text-red-500">
                                                    <svg width="20px" height="20px" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path d="M7 4a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v2h4a1 1 0 1 1 0 2h-1.069l-.867 12.142A2 2 0 0 1 17.069 22H6.93a2 2 0 0 1-1.995-1.858L4.07 8H3a1 1 0 0 1 0-2h4V4zm2 2h6V4H9v2zM6.074 8l.857 12H17.07l.857-12H6.074zM10 10a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0v-6a1 1 0 0 1 1-1zm4 0a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0v-6a1 1 0 0 1 1-1z"/></svg>
                                                </button>
                                            </form>
                                        </div>
                                    </td>

                                </tr>
                            @empty
                                <tr>
                                    <td colspan="3" class="px-6 py-4 whitespace-nowrap text-center">
                                        <div class="mx-auto bg-stone-100 text-stone-600 p-2 rounded-xl">
                                            Data kelompok tidak tersedia.
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
    @endforeach

</section>
@endsection
