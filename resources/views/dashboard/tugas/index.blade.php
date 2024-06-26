@extends('dashboard.layout')

@section('content')
<section class="row z-0 p-4 max-w-6xl align-center mx-auto min-h-screen">

    <div class="bg-stone-800 rounded-xl mx-3 border border-stone-600">
        <div class="row">
            <div class="col-md-12 p-5">
                <div class="border-0 shadow-sm">
                    <div class="">
                        <h1 class="text-center text-2xl font-extrabold leading-none tracking-normal text-stone-300 md:tracking-tight">Daftar Tugas</h1>
                        <button class="bg-violet-400 my-2 p-2 rounded-xl hover:bg-violet-300"><a href="{{ route('tugas.create') }}" class="text-md font-semibold p-2">Tambah tugas</a></button>
                        <div class="overflow-x-auto">
                            <table class="min-w-full divide-y divide-stone-500">
                                <thead>
                                    <tr>
                                        <th scope="col" class="px-6 py-3 bg-stone-800 text-left text-xs font-medium text-stone-300 uppercase tracking-wider">
                                            No
                                        </th>
                                        <th scope="col" class="px-6 py-3 bg-stone-800 text-left text-xs font-medium text-stone-300 uppercase tracking-wider">
                                            Pertemuan Ke
                                        </th>
                                        <th scope="col" class="px-6 py-3 bg-stone-800 text-left text-xs font-medium text-stone-300 uppercase tracking-wider">
                                            Nama Tugas
                                        </th>
                                        <th scope="col" class="px-6 py-3 bg-stone-800 text-left text-xs font-medium text-stone-300 uppercase tracking-wider">
                                            Batas Pengumpulan
                                        </th>
                                        <th scope="col" class="px-6 py-3 bg-stone-800"></th>
                                    </tr>
                                </thead>
                                <tbody class="bg-stone-800 text-stone-300 divide-y divide-stone-500">
                                    @forelse ($tugass as $index => $tugas)
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                {{ $index + 1 }}
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                    {{ \App\Models\Pertemuan::where('id', $tugas->pertemuan_id)->value('pertemuan_ke') }}
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <a href="/dashboard/tugas/{{ $tugas->id }}" class="hover:bg-stone-600">
                                                    {{ $tugas->name }}
                                                </a>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                {{ $tugas->due_date }}
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                <div class="flex space-x-2 justify-end"> <!-- Use justify-end to align content to the right -->
                                                    <a href="{{ route('tugas.show', $tugas->id) }}" class="text-stone-300 hover:text-student">
                                                        <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 52 52" enable-background="new 0 0 52 52" xml:space="preserve"><g><path d="M51.8,25.1C47.1,15.6,37.3,9,26,9S4.9,15.6,0.2,25.1c-0.3,0.6-0.3,1.3,0,1.8C4.9,36.4,14.7,43,26,43 s21.1-6.6,25.8-16.1C52.1,26.3,52.1,25.7,51.8,25.1z M26,37c-6.1,0-11-4.9-11-11s4.9-11,11-11s11,4.9,11,11S32.1,37,26,37z"/><path d="M26,19c-3.9,0-7,3.1-7,7s3.1,7,7,7s7-3.1,7-7S29.9,19,26,19z"/></g></svg>
                                                    </a>
                                                    <a href="{{ route('tugas.edit', $tugas->id) }}" class="text-stone-300 hover:text-student">
                                                        <svg fill="currentColor" width="20px" height="20px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M21,12a1,1,0,0,0-1,1v6a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V5A1,1,0,0,1,5,4h6a1,1,0,0,0,0-2H5A3,3,0,0,0,2,5V19a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V13A1,1,0,0,0,21,12ZM6,12.76V17a1,1,0,0,0,1,1h4.24a1,1,0,0,0,.71-.29l6.92-6.93h0L21.71,8a1,1,0,0,0,0-1.42L17.47,2.29a1,1,0,0,0-1.42,0L13.23,5.12h0L6.29,12.05A1,1,0,0,0,6,12.76ZM16.76,4.41l2.83,2.83L18.17,8.66,15.34,5.83ZM8,13.17l5.93-5.93,2.83,2.83L10.83,16H8Z"/></svg>
                                                    </a>
                                                    <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('tugas.destroy', $tugas->id) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="text-stone-300 hover:text-red-800">
                                                            <svg width="20px" height="20px" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path d="M7 4a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v2h4a1 1 0 1 1 0 2h-1.069l-.867 12.142A2 2 0 0 1 17.069 22H6.93a2 2 0 0 1-1.995-1.858L4.07 8H3a1 1 0 0 1 0-2h4V4zm2 2h6V4H9v2zM6.074 8l.857 12H17.07l.857-12H6.074zM10 10a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0v-6a1 1 0 0 1 1-1zm4 0a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0v-6a1 1 0 0 1 1-1z"/></svg>
                                                        </button>
                                                    </form>
                                                </div>
                                            </td>

                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="3" class="px-6 py-4 whitespace-nowrap text-center">
                                                <div class="mx-auto bg-stone-100 text-gray-600 p-2 rounded-xl">
                                                    Data tugas tidak tersedia.
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

    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 m-3 mt-12">
        @foreach ($tugass as $tugas)
            <a href="/dashboard/tugas/{{ $tugas->id }}" class="text-xs h-30 bg-stone-800 hover:bg-stone-600 text-stone-400 p-4 block rounded-xl border-stone-600 border">
                Tugas {{ $tugas->id }}
                @php
                    $tugas_id = $tugas->id;
                    $hasilTugasSiswaCount = \App\Models\HasilTugasSiswa::where('tugas_id', $tugas_id)->count();
                @endphp
                <p class="font-normal text-stone-300 text-sm py-2">{{ $hasilTugasSiswaCount }} dari {{ $userCount }} siswa telah mengerjakan</p>
                <div class="w-full bg-stone-300 rounded-full">
                    <div class="bg-violet-600 text-xs font-medium text-stone-300 text-center p-0.5 leading-none rounded-full"
                        style="width: {{ ($hasilTugasSiswaCount / $userCount) * 100 }}%">
                        {{ round(($hasilTugasSiswaCount / $userCount) * 100) }}%
                    </div>
                </div>
            </a>
        @endforeach
    </div>

    <div class="bg-stone-800 rounded-xl mx-3 border border-stone-600">
        <div class="row">
            <div class="col-md-12 p-5">
                <div class="border-0 shadow-sm">
                    <div class="">
                        <h1 class="text-center text-2xl font-extrabold leading-none tracking-normal text-stone-300 my-2 md:tracking-tight">Daftar Pengerjaan Tugas</h1>
                        <div class="overflow-x-auto">
                            <table class="min-w-full divide-y divide-stone-500">
                                <thead>
                                    <tr>
                                        <th scope="col" class="px-6 py-3 bg-stone-800 text-center text-xs font-medium text-stone-300 uppercase tracking-wider">
                                            No
                                        </th>
                                        <th scope="col" class="px-6 py-3 bg-stone-800 text-center text-xs font-medium text-stone-300 uppercase tracking-wider">
                                            Nama
                                        </th>
                                        <th scope="col" class="px-6 py-3 bg-stone-800 text-center text-xs font-medium text-stone-300 uppercase tracking-wider">
                                            Pengerjaan
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="bg-stone-800 text-stone-300 divide-y divide-stone-500">
                                    @forelse ($users as $index=>$user)
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap text-center">
                                                {{ $index + 1 }}
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                {{ $user->name }}
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-center">
                                            @php
                                                $hasilTugasPerSiswaCount = $hasilTugasSiswa->where('user_id', $user->id)->count();
                                            @endphp
                                            {{ $hasilTugasPerSiswaCount }} dari 3 tugas telah dikerjakan
                                            <div class="w-full bg-stone-300 rounded-full">
                                                <div class="bg-violet-600 text-xs text-stone-300 text-center p-0.5 leading-none rounded-full"
                                                    style="width: {{ ($hasilTugasPerSiswaCount / 3) * 100 }}%">
                                                    {{ round(($hasilTugasPerSiswaCount / 3) * 100) }}%
                                                </div>
                                            </div>
                                        </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="3" class="px-6 py-4 whitespace-nowrap text-center">
                                                <div class="mx-auto bg-stone-100 text-gray-600 p-2 rounded-xl">
                                                    Data tugas tidak tersedia.
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
