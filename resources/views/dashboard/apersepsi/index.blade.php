@extends('dashboard.layout')

@section('content')
<section class="row z-0 p-4 max-w-6xl align-center mx-auto min-h-screen">
    <div class="my-8 text-center">
        <h1 class="mb-6 text-3xl font-extrabold leading-none tracking-normal text-stone-300 md:tracking-tight">Daftar Hasil Apersepsi Siswa</h1>
    </div>

    <div class="grid grid-cols-2 lg:grid-cols-3 gap-4 m-3">
        @php
            $uniquePertemuanIds = $apersepsis->unique('pertemuan_id')->pluck('pertemuan_id');
        @endphp
        @foreach ($uniquePertemuanIds as $pertemuan_id)
            <a href="/dashboard/apersepsi/pertemuan_ke_{{ $pertemuan_id }}" class="text-xs h-30 bg-stone-800 hover:bg-stone-600 text-stone-400 p-4 block rounded-xl border-stone-600 border" title="Klik untuk lebih lanjut">
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

    <div class="bg-stone-800 border border-stone-600 rounded-xl m-3">
        <div class="row">
            <div class="col-md-12 p-5">
                <div class="border-0 shadow-sm">
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-stone-600 text-stone-300">
                            <thead class="text-center">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-xs font-medium uppercase tracking-wider text-center">
                                        No.
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-xs font-medium uppercase tracking-wider">
                                        Nama Siswa
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-xs font-medium uppercase tracking-wider">
                                        Pengerjaan
                                    </th>
                                    {{-- <th scope="col" class="px-6 py-3 bg-stone-50"></th> --}}
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-stone-600">
                                @forelse ($users as $index=>$user)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-center">
                                            {{ $loop->iteration }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap hover:underline hover:bg-stone-600">
                                            <a href="/dashboard/apersepsi/siswa_{{ $user->id }}" title="Klik untuk lebih lanjut">
                                                {{ $user->name }}
                                            </a>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-center">
                                            @php
                                                $hasilApersepsiPerSiswaCount = $apersepsis->where('user_id', $user->id)->count();
                                            @endphp
                                            {{ $hasilApersepsiPerSiswaCount }} dari 3 telah dikerjakan
                                            <div class="w-full bg-stone-300 rounded-full">
                                                <div class="bg-violet-600 text-xs font-medium text-stone-300 text-center p-0.5 leading-none rounded-full"
                                                    style="width: {{ ($hasilApersepsiPerSiswaCount / 3) * 100 }}%">
                                                    {{ round(($hasilApersepsiPerSiswaCount / 3) * 100) }}%
                                                </div>
                                            </div>
                                        </td>
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
</section>
@endsection
