@extends('layouts.student_layout')

@section('content')
<section class="w-full justify-center mx-auto px-4 lg:px-12 min-h-screen">
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
        <div class="relative flex flex-col break-words bg-stone-50 border shadow-lg rounded-2xl">
            <div class="flex-auto px-1 pt-6">
                <p class="p-2 leading-normal text-xl font-bold overflow-hidden h-24 ...">Pre Test</p>
                <div class="flex items-center justify-between px-2 pb-4">
                    <a href="/student/tes/pretest">
                        <button class="mr-2 text-sm text-student relative inline-flex items-center justify-center px-4 py-2 overflow-hidden font-bold transition duration-300 ease-out border bg-violet-200 rounded-xl shadow-md hover:bg-violet-300">
                            Mulai Pretest
                        </button>
                    </a>
                </div>
            </div>
        </div>

        <div class="relative flex flex-col break-words bg-stone-50 border shadow-lg rounded-2xl">
            <div class="flex-auto px-1 pt-6">
                <p class="p-2 leading-normal text-xl font-bold overflow-hidden h-24 ...">Post Test</p>
                <div class="flex items-center justify-between px-2 pb-4">
                    <a href="/student/tes/posttest">
                        <button class="mr-2 text-sm text-gray-400 relative inline-flex items-center justify-center px-4 py-2 overflow-hidden font-bold transition duration-300 ease-out border bg-gray-200 rounded-xl shadow-md hover:bg-gray-200" disabled>
                            Mulai Posttest
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
