<div id="leaderboardSection" class="w-full p-5 sm:mb-0 sm:mr-4 bg-stone-50 shadow-md rounded-2xl flex justify-center items-center">
    <div class="py-12 mb-12 px-4 mx-auto text-center z-20 animate-up">
        <h1 class="mb-4 text-3xl font-extrabold tracking-tight leading-none text-gray-900 md:text-4xl lg:text-4xl"><span class="w-full text-transparent bg-clip-text bg-gradient-to-r from-violet-700 via-purple-500 to-violet-300 lg:inline"> Routely </span>League</h1>

        {{-- table user leaderboard --}}
        <div class="overflow-x-auto">
            <table class="min-w-full mt-12">
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
                            @if($userId == auth()->id())
                                <td class="py-2 px-4 text-center bg-stone-100 font-bold">{{ $loop->iteration }}</td>
                                <td class="py-2 px-4 text-center bg-stone-100 font-bold">
                                    @if ($user)
                                        {{ $user->name }}
                                    @else
                                        User Not Found
                                    @endif
                                </td>
                                <td class="py-2 px-4 text-center bg-stone-100 font-bold">{{ $totalNilai * 69}}</td>
                            @else
                                <td class="py-2 px-4 text-center">{{ $loop->iteration }}</td>
                                <td class="py-2 px-4 text-center">
                                    @if ($user)
                                        {{ $user->name }}
                                    @else
                                        User Not Found
                                    @endif
                                </td>
                                <td class="py-2 px-4 font-semibold text-center">{{ $totalNilai * 69}}</td>
                            @endif
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3" class="px-6 py-4 whitespace-nowrap text-center">
                                <div class="mx-auto bg-gray-100 text-gray-600 p-2 rounded-xl">
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
