@extends('layouts.student_layout')

@section('content')
<section class="w-full justify-center mx-auto px-2 lg:px-12">
    <!-- Content -->
    <div class="flex flex-cols-2 py-12 grid-rows-1 gap-2">
        <div class="bg-gray-50 w-1/3 shadow-md rounded-3xl p-5">
            <div class="flex w-full p-2 my-2 bg-stone-100 text-stone-900 shadow border rounded-3xl text-xs">
                <input type="search" id="search" name="search" class="w-full bg-stone-100 border-none outline-none" placeholder="Cari Pesan...">
            </div>
            @forelse ($users as $index => $user)
                <div class="flex h-14 items-center">
                    <div class="flex items-center justify-center w-10 h-10 rounded-full bg-gradient-to-tl from-violet-500 to-orange-500 shadow-soft-2xl text-stone-50 text-md font-semibold border">
                        {{ substr($user->name, 0, 1) }}{{ substr(strrchr($user->name, ' '), 1, 1) }}
                    </div>
                    <div class="py-2 px-2 text-xs text-inline ">
                        {{ $user-> name}}
                    </div>
                </div>
            @empty
                <tr>
                    <td colspan="3" class="px-6 py-4 whitespace-nowrap text-center">
                        <div class="mx-auto bg-gray-100 text-gray-600 p-2 rounded-xl">
                            Data leaderboard tidak tersedia.
                        </div>
                    </td>
                </tr>
            @endforelse
        </div>
    <div class="bg-gray-50 w-full w-3/4 shadow-md rounded-3xl">2</div>
</div>


</section>

@endsection
