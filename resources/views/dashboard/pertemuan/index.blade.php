@extends('dashboard.layout')

@section('content')
<section class="row p-4 z-0 max-w-6xl align-center mx-auto min-h-screen">
    <div class="my-8 text-center">
        <h1 class="mb-6 text-5xl font-extrabold leading-none tracking-normal text-stone-300 md:tracking-tight">Daftar Pertemuan</h1>
    </div>
    <div class="bg-stone-700 border-2 border-stone-600 rounded-xl mx-3">
        <div class="row">
            <div class="col-md-12 p-5">
                <div class="border-0 shadow-sm">
                    <div class="">
                        <button class="bg-violet-400 my-2 p-2 rounded-xl hover:bg-violet-300"><a href="{{ route('pertemuan.create') }}" class="text-md font-semibold p-2">Tambah pertemuan</a></button>
                        <div class="overflow-x-auto">
                            <table class="min-w-full divide-y divide-stone-600 text-stone-300">
                                <thead>
                                    <tr>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">
                                            Pertemuan Ke
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">
                                            Tanggal
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">
                                            Tujuan Pembelajaran
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">
                                            Apersepsi
                                        </th>
                                        <th scope="col" class="px-6 py-3"></th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-stone-600">
                                    @forelse ($pertemuans as $pertemuan)
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                {{ $pertemuan->pertemuan_ke }}
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                {{ $pertemuan->tanggal }}
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                {{ Illuminate\Support\Str::words($pertemuan->tujuan_pembelajaran, 3, '...') }}
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                {{ Illuminate\Support\Str::words($pertemuan->apersepsi, 3, '...') }}
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                <div class="flex space-x-2 justify-end"> <!-- Use justify-end to align content to the right -->
                                                    <a href="{{ route('pertemuan.edit', $pertemuan->id) }}" class="text-stone-300 hover:text-violet-500">
                                                        <svg fill="currentColor" width="20px" height="20px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M21,12a1,1,0,0,0-1,1v6a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V5A1,1,0,0,1,5,4h6a1,1,0,0,0,0-2H5A3,3,0,0,0,2,5V19a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V13A1,1,0,0,0,21,12ZM6,12.76V17a1,1,0,0,0,1,1h4.24a1,1,0,0,0,.71-.29l6.92-6.93h0L21.71,8a1,1,0,0,0,0-1.42L17.47,2.29a1,1,0,0,0-1.42,0L13.23,5.12h0L6.29,12.05A1,1,0,0,0,6,12.76ZM16.76,4.41l2.83,2.83L18.17,8.66,15.34,5.83ZM8,13.17l5.93-5.93,2.83,2.83L10.83,16H8Z"/></svg>
                                                    </a>
                                                    <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('pertemuan.destroy', $pertemuan->id) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="text-stone-300 hover:text-red-900">
                                                            <svg width="20px" height="20px" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path d="M7 4a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v2h4a1 1 0 1 1 0 2h-1.069l-.867 12.142A2 2 0 0 1 17.069 22H6.93a2 2 0 0 1-1.995-1.858L4.07 8H3a1 1 0 0 1 0-2h4V4zm2 2h6V4H9v2zM6.074 8l.857 12H17.07l.857-12H6.074zM10 10a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0v-6a1 1 0 0 1 1-1zm4 0a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0v-6a1 1 0 0 1 1-1z"/></svg>
                                                        </button>
                                                    </form>
                                                </div>
                                            </td>

                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="3" class="px-6 py-4 whitespace-nowrap text-center">
                                                <div class="mx-auto bg-stone-700 text-stone-300 p-2 rounded-xl">
                                                    Data pertemuan tidak tersedia.
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
