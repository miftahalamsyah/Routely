@extends('dashboard.layout')

@section('content')
<section class="row p-4 z-0 max-w-6xl align-center mx-auto min-h-screen">
    <div class="my-8 text-center">
        <h1 class="mb-6 text-3xl font-extrabold leading-none tracking-normal text-stone-100 md:tracking-tight">Daftar Nilai Tugas</h1>
    </div>
    <div class="bg-stone-50 rounded-xl mx-3">
        <div class="row">
            <div class="col-md-12 p-5">
                <div class="border-0 shadow-sm">
                    <div class="">
                        <div class="overflow-x-auto">
                            <table class="min-w-full divide-y divide-stone-200">
                                <thead>
                                    <tr>
                                        <th scope="col" class="px-6 py-3 bg-stone-50 text-center text-xs font-medium text-stone-500 uppercase tracking-wider">
                                            Tugas ID
                                        </th>
                                        <th scope="col" class="px-6 py-3 bg-stone-50 text-center text-xs font-medium text-stone-500 uppercase tracking-wider">
                                            Siswa
                                        </th>
                                        <th scope="col" class="px-6 py-3 bg-stone-50 text-center text-xs font-medium text-stone-500 uppercase tracking-wider">
                                            Nilai
                                        </th>
                                        <th scope="col" class="px-6 py-3 bg-stone-50"></th>
                                    </tr>
                                </thead>
                                <tbody class="bg-stone-50 divide-y divide-stone-200">
                                    @forelse ($nilaiTugas as $nilai)
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap text-center">
                                                <a href="{{ route('tugas.show', $nilai->tugas_id) }}">
                                                    {{ $nilai->tugas_id }}
                                                </a>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                {{ $nilai->user->name }}
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-center">
                                                {{ $nilai->nilai_tugas }}
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                <div class="flex space-x-2 justify-end">
                                                    <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('nilai.tugas.destroy', $nilai->id) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="text-stone-800 hover:text-red-500">
                                                            <svg width="20px" height="20px" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path d="M7 4a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v2h4a1 1 0 1 1 0 2h-1.069l-.867 12.142A2 2 0 0 1 17.069 22H6.93a2 2 0 0 1-1.995-1.858L4.07 8H3a1 1 0 0 1 0-2h4V4zm2 2h6V4H9v2zM6.074 8l.857 12H17.07l.857-12H6.074zM10 10a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0v-6a1 1 0 0 1 1-1zm4 0a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0v-6a1 1 0 0 1 1-1z"/></svg>
                                                        </button>
                                                    </form>
                                                </div>
                                            </td>

                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="3" class="px-6 py-4 whitespace-nowrap text-center">
                                                <div class="mx-auto bg-gray-100 text-gray-600 p-2 rounded-xl">
                                                    Data materi belum tersedia.
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
