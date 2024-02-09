@extends('layouts.student_layout')

@section('content')

<section class="w-full justify-center mx-auto px-4 lg:px-12">
    <div class="row col-md-12 rounded-2xl bg-stone-50 p-5 my-4 shadow-md">

    </div>

    <table class="row bg-stone-50 p-5 overflow-x-auto border-0 shadow-md col-md-12 min-w-full divide-y divide-stone-200 rounded-2xl">
        <thead class="text-center text-xs font-medium text-stone-500 uppercase tracking-wider">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Pertemuan
                </th>
                <th scope="col" class="px-6 py-3">
                    Kelompok
                </th>
                <th scope="col" class="px-6 py-3">
                    Soal
                </th>
                <th scope="col" class="px-6 py-3">
                    Keterangan*
                </th>
                <th scope="col" class="px-6 py-3"></th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            {{-- @forelse ($refleksis ?? [] as $refleksi)
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap text-center">
                        {{ $refleksi->pertemuan_id }}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap max-w-[150px] overflow-hidden overflow-ellipsis">
                        {{ $refleksi->seberapa_paham }}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap max-w-[150px] overflow-hidden overflow-ellipsis">
                        {{ $refleksi->seberapa_baik }}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap max-w-[150px] overflow-hidden overflow-ellipsis">
                        {{ $refleksi->seberapa_sulit }}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap max-w-[150px] overflow-hidden overflow-ellipsis">
                        {{ $refleksi->hambatan }}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap max-w-[150px] overflow-hidden overflow-ellipsis">
                        {{ $refleksi->saran }}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                        <div class="flex space-x-2 justify-end">
                            <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('refleksi.destroy', $refleksi->id) }}" method="POST">
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
                    <td colspan="7" class="px-6 py-4 whitespace-nowrap text-center">
                        <div class="mx-auto bg-stone-100 text-gray-600 p-2 rounded-xl">
                            Data refleksi tidak tersedia.
                        </div>
                    </td>
                </tr>
            @endforelse --}}
        </tbody>
    </table>
</section>

@endsection
