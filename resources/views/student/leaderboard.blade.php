@extends('layouts.student_layout')

@section('content')
<section class="max-w-6xl justify-center min-h-screen mx-auto mt-2 px-2 lg:px-12">
    <div id="leaderboardSection" class="bg-stone-50 overflow-y-auto mb-2 p-2 rounded-3xl shadow-md">
        <div class="py-12 px-4 mx-auto text-center z-20">
            <h1 class="mb-4 text-3xl font-extrabold tracking-tight leading-none text-stone-700 md:text-4xl lg:text-4xl"><span class="w-full text-transparent bg-clip-text bg-gradient-to-r from-violet-700 via-purple-500 to-violet-300 lg:inline"> Routely </span>League</h1>
            {{-- table user leaderboard --}}
            <div class="overflow-x-auto">
                <table class="min-w-full mt-4">
                    <thead>
                        <tr>
                            <th class="py-2 px-4">#</th>
                            <th class="py-2 px-4">Nama</th>
                            <th class="py-2 px-4 font-semibold">Total Skor</th>
                        </tr>
                    </thead>
                    <tbody class="text-stone-700 text-left">
                        @forelse($totalScore as $userId => $totalNilai)
                            @php
                                $user = \App\Models\User::find($userId);
                            @endphp
                            <tr class="border-y-2">
                                <td class="py-2 px-4 text-center">{{ $loop->iteration }}</td>
                                <td class="py-2 px-4 text-center">
                                    @if ($user)
                                        {{ $user->name }}
                                    @else
                                        User Not Found
                                    @endif
                                </td>
                                <td class="py-2 px-4 font-semibold text-center">{{ $totalNilai * 69}}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="3" class="px-6 py-4 whitespace-nowrap text-center">
                                    <div class="mx-auto bg-stone-100 text-stone-600 p-2 rounded-xl">
                                        Data leaderboard tidak tersedia.
                                    </div>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
@endsection
