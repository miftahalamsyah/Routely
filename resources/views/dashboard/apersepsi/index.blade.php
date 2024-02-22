@extends('dashboard.layout')

@section('content')
<section class="row z-0 p-4 max-w-6xl align-center mx-auto min-h-screen">
    <div class="my-8 text-center">
        <h1 class="mb-6 text-3xl font-extrabold leading-none tracking-normal text-stone-50 md:tracking-tight">Daftar Hasil Apersepsi Siswa</h1>
    </div>

    <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 m-3">
        @php
            $uniquePertemuanIds = $apersepsis->unique('pertemuan_id')->pluck('pertemuan_id');
        @endphp
        @foreach ($uniquePertemuanIds as $pertemuan_id)
            <a href="#{{ $pertemuan_id }}" class="text-xs h-30 bg-stone-700 hover:bg-stone-600 text-stone-400 p-4 block rounded-xl border-stone-600 border-2">
                Pertemuan {{ $pertemuan_id }}
                @php
                    $hasilApersepsiSiswaCount = $apersepsis->where('pertemuan_id', $pertemuan_id)->count();
                @endphp
                <p class="font-normal text-stone-300 text-sm py-2">{{ $hasilApersepsiSiswaCount }} dari {{ $userCount }} siswa telah mengerjakan</p>
                <div class="w-full bg-stone-300 rounded-full">
                    <div class="bg-violet-600 text-xs font-medium text-stone-300 text-center p-0.5 leading-none rounded-full"
                        style="width: {{ ($hasilApersepsiSiswaCount / $userCount) * 100 }}%">
                        {{ round(($hasilApersepsiSiswaCount / $userCount) * 100) }}%
                    </div>
                </div>
            </a>
        @endforeach
    </div>

    @foreach ($apersepsis->unique('pertemuan_id') as $uniqueApersepsi)
    <div class="bg-stone-700 border-2 border-stone-600 rounded-xl m-3" id="{{ $loop->iteration }}">
        <div class="row">
            <div class="col-md-12 p-5">
                <div class="border-0 shadow-sm">
                    <div class="overflow-x-auto">
                        <p class="p-3 font-semibold text-center text-stone-300">Pertemuan {{ $loop->iteration }}</p>
                        <div class="text-xs bg-stone-700text-stone-400 p-2 block rounded-xl border-stone-600 border-2">
                            <p class="font-semibold text-left text-stone-300">Apersepsi: </p>
                            <p class="font-normal text-sm text-left text-stone-300">{{ \App\Models\Pertemuan::where('id', $uniqueApersepsi->pertemuan_id)->value('apersepsi') }}</p>
                        </div>
                        <table class="min-w-full divide-y divide-stone-600 text-stone-300">
                            <thead class="text-center">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-xs font-medium uppercase tracking-wider">
                                        Nama Siswa
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-xs font-medium uppercase tracking-wider">
                                        Jawaban
                                    </th>
                                    {{-- <th scope="col" class="px-6 py-3 bg-stone-50"></th> --}}
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-stone-600">
                                @forelse ($apersepsis->where('pertemuan_id', $uniqueApersepsi->pertemuan_id) as $apersepsi)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            {{ $apersepsi->user->name }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap max-w-[150px] overflow-hidden overflow-ellipsis">
                                            {{ $apersepsi->jawaban }}
                                        </td>
                                        {{-- <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                            <div class="flex space-x-2 justify-end">
                                                <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('apersepsi.destroy', $apersepsi->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="text-red-600 hover:text-red-900">
                                                        <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/3000/svg"><path d="M7 4a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v2h4a1 1 0 1 1 0 2h-1.069l-.867 12.142A2 2 0 0 1 17.069 22H6.93a2 2 0 0 1-1.995-1.858L4.07 8H3a1 1 0 0 1 0-2h4V4zm2 2h6V4H9v2zM6.074 8l.857 12H17.07l.857-12H6.074zM10 10a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0v-6a1 1 0 0 1 1-1zm4 0a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0v-6a1 1 0 0 1 1-1z" fill="#0D0D0D"/></svg>
                                                    </button>
                                                </form>
                                            </div>
                                        </td> --}}
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="3" class="px-6 py-4 whitespace-nowrap text-center">
                                            <div class="mx-auto bg-stone-100 text-gray-600 p-2 rounded-xl">
                                                Data apersepsi tidak tersedia.
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
    @endforeach
</section>

<script>
    function toggleContent(sectionId) {
        const section = document.getElementById(sectionId);
        const windowHeight = window.innerHeight;
        const sectionHeight = section.clientHeight;
        const offset = (windowHeight - sectionHeight) / 2;

        window.scrollTo({
            top: section.offsetTop - offset,
            behavior: 'smooth',
            inline: 'center',
        });
    }
</script>
@endsection
