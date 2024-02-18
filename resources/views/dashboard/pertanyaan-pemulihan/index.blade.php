@extends('dashboard.layout')

@section('content')
<section class="row z-0 p-4 max-w-6xl align-center mx-auto min-h-screen">
    <div class="my-8 text-center">
        <h1 class="mb-6 text-3xl font-extrabold leading-none tracking-normal text-stone-50 md:tracking-tight">Daftar Pertanyaan Pemulihan</h1>
    </div>
    <div class="bg-stone-700 border-2 border-stone-600 rounded-xl mx-3 text-stone-300">
        <div class="row">
            <div class="col-md-12 p-5">
                <div class="border-0 shadow-sm">
                    <div class="">
                        {{-- <button class="bg-violet-400 my-2 p-2 rounded-xl text-stone-700 hover:bg-violet-300"><a href="{{ route('pertanyaan-pemulihan.create') }}" class="text-md font-semibold p-2">Tambah Pertanyaan</a></button> --}}
                        <div class="overflow-x-auto">
                            <table class="min-w-full divide-y divide-stone-600">
                                <thead>
                                    <tr>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-stone-300 uppercase tracking-wider">
                                            No
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-stone-300 uppercase tracking-wider">
                                            Pertanyaan
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-stone-300 uppercase tracking-wider">
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-stone-600">
                                    @forelse ($pertanyaans as $index => $pertanyaan)
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap text-center">
                                                {{ $index + 1 }}
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                {{ $pertanyaan->pertanyaan }}
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="3" class="px-6 py-4 whitespace-nowrap text-center">
                                                <div class="mx-auto bg-stone-700 text-stone-300 p-2 rounded-xl">
                                                    Data pertanyaan permulihan tidak tersedia.
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
