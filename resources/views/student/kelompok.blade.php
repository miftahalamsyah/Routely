@extends('layouts.student_layout')

@section('content')
<section class="w-full justify-center mx-auto px-4 lg:px-12 min-h-screen">
    @foreach ($kelompoks->unique('no_kelompok') as $uniqueKelompok)
        <div class="bg-stone-50 border border-r-4 border-b-4 border-stone-700 mt-4 p-2 shadow-md transform hover:translate-y-[-5px] transition-transform duration-300 ease-in-out ">
            <h1 class="clashdisplaymedium my-2 text-lg text-center tracking-tight leading-none text-student-dark md:text-xl">
                Kelompok {{ $loop->iteration }}
            </h1>
            <table class="min-w-full mt-2">
                <thead class="uppercase tracking-wider text-xs">
                    <tr>
                        <th class="py-2 px-4">#</th>
                        <th class="py-2 px-4">Nama</th>
                    </tr>
                </thead>
                <tbody class="text-stone-700 text-left">
                    @forelse ($kelompoks->where('no_kelompok', $uniqueKelompok->no_kelompok) as $kelompok)
                        <tr class="border-y">
                            @if (\App\Models\User::where('id', $kelompok->user_id)->value('id') == auth()->id())
                                <td class="py-2 px-4 text-center bg-violet-100">{{ $loop->iteration }}</td>
                                <td class="py-2 px-4 text-center bg-violet-100 font-bold">{{ \App\Models\User::where('id', $kelompok->user_id)->value('name') }}</td>
                            @else
                                <td class="py-2 px-4 text-center">{{ $loop->iteration }}</td>
                                <td class="py-2 px-4 text-center">{{ \App\Models\User::where('id', $kelompok->user_id)->value('name') }}</td>
                            @endif
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3" class="px-4 py-2 whitespace-nowrap text-center">
                                <div class="mx-auto bg-stone-100 text-stone-600 p-2 rounded-xl">
                                    Data kelompok tidak tersedia.
                                </div>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    @endforeach
</section>
@endsection
