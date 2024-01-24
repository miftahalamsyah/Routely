@extends('layouts.student_layout')

@section('content')
<section class="w-full justify-center mx-auto px-4 lg:px-12 min-h-screen">
    <div class="bg-gray-50 rounded-xl mt-12 p-4 shadow-md">
        <h1 class="my-4 text-xl text-center font-extrabold tracking-tight leading-none text-student-dark md:text-2xl">
            👥 Kelompok {{ $kelompokBelajar->no_kelompok ?? 'Belum Tersedia' }}
        </h1>
        <table class="min-w-full mt-2">
            <thead>
                <tr>
                    <th class="py-2 px-4">#</th>
                    <th class="py-2 px-4">Nama</th>
                </tr>
            </thead>
            <tbody class="text-stone-700 text-left">
                @forelse ($usersInSameKelompok as $user)
                    <tr class="border-y-2">
                        <td class="py-2 px-4 text-center">{{ $loop->iteration }}</td>
                        <td class="py-2 px-4 text-center">{{ $user->name }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" class="px-6 py-4 whitespace-nowrap text-center">
                            <div class="mx-auto bg-gray-100 text-gray-600 p-2 rounded-xl">
                                Data kelompok belum tersedia.
                            </div>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</section>
@endsection
