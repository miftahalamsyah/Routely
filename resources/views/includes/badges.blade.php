<!-- badges -->
<div id="badgesSection" class="grid grid-cols-1 lg:grid-cols-3 gap-4">
    @foreach ($kelompoks->unique('no_kelompok') as $uniqueKelompok)
        <div class="bg-stone-50 rounded-xl mt-4 p-2 shadow-md">
            <h1 class="my-2 text-md text-center font-extrabold tracking-tight leading-none text-student-dark">
                Kelompok {{ $loop->iteration }}
            </h1>
            <table class="min-w-full mt-2">
                <tbody class="text-stone-700 text-left">
                    @forelse ($kelompoks->where('no_kelompok', $uniqueKelompok->no_kelompok) as $kelompok)
                        <tr class="border-y">
                            @if (\App\Models\User::where('id', $kelompok->user_id)->value('id') == auth()->id())
                                <td class="py-2 px-4 text-center bg-stone-100 font-bold">{{ \App\Models\User::where('id', $kelompok->user_id)->value('name') }}</td>
                            @else
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
</div>
