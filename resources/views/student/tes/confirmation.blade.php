@extends('layouts.student_layout')

@section('content')
<section class="w-full justify-center mx-auto px-4 lg:px-12 min-h-screen">
    <div class="flex items-center justify-center h-full">
        <div class="max-w-md w-full mt-24 space-y-8 p-8 bg-stone-50 shadow-md rounded-sm border border-b-4 border-r-4 border-stone-700">
            <h2 class="text-3xl clashdisplaymedium text-gray-900">Konfirmasi</h2>
            <form method="POST" action="{{ route('student.tes.validatePasscode', $kategori_tes->slug) }}">
                @csrf
                <div class="mb-1">
                    <label for="passcode" class="block text-sm font-medium text-gray-700">Passcode</label>
                    <input type="text" name="passcode" id="passcode" autocomplete="off" value="116375"
                        class="mt-1 p-2 border border-r-4 border-b-4 border-stone-300 focus:ring-violet-500 focus:border-violet-500 block w-full shadow-sm sm:text-sm rounded-sm">
                </div>
                <p class="mb-4 text-xs italic font-thin text-right">
                    *Passcode diberikan oleh Guru
                </p>
                <div class="flex justify-end">
                    <button type="submit"
                        class="mr-2 text-sm relative inline-flex items-center justify-center px-4 py-2 overflow-hidden font-bold text-stone-50 transform hover:translate-y-[-5px] transition-transform duration-300 ease-in-out shadow-md bg-violet-500 hover:bg-violet-600 border border-r-4 border-b-4 border-stone-700">
                        Konfirmasi
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection
