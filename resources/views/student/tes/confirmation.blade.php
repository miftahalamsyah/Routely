@extends('layouts.student_layout')

@section('content')
<section class="w-full justify-center mx-auto px-4 lg:px-12 min-h-screen">
    <div class="flex items-center justify-center h-full">
        <div class="max-w-md w-full mt-24 space-y-8 p-8 bg-white shadow-lg rounded-xl">
            <h2 class="text-3xl font-extrabold text-gray-900">Konfirmasi</h2>
            <form method="POST" action="{{ route('student.tes.validatePasscode', $kategori_tes->slug) }}">
                @csrf
                <div class="mb-4">
                    <label for="passcode" class="block text-sm font-medium text-gray-700">Passcode</label>
                    <input type="text" name="passcode" id="passcode" autocomplete="off"
                        class="mt-1 p-2 border focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>
                <div class="flex justify-end">
                    <button type="submit"
                        class="mr-2 text-sm text-student relative inline-flex items-center justify-center px-4 py-2 overflow-hidden font-bold transition duration-300 ease-out border bg-violet-200 rounded-xl shadow-md hover:bg-violet-300">
                        Konfirmasi
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection
