@extends('layouts.app')

@section('content')
<section class="my-24 mx-auto justify-center items-center max-w-lg">
    <main class="flex justify-center px-8 py-8 sm:px-12 bg-stone-50 mx-2 border border-r-4 border-b-4 border-stone-700">
        <div class="py-4 w-full">
            <svg class="mx-auto w-10 h-10 mb-5 text-violet-500" fill="currentColor" viewBox="0 0 512 512"><path d="M512 96c0 50.2-59.1 125.1-84.6 155c-3.8 4.4-9.4 6.1-14.5 5H320c-17.7 0-32 14.3-32 32s14.3 32 32 32h96c53 0 96 43 96 96s-43 96-96 96H139.6c8.7-9.9 19.3-22.6 30-36.8c6.3-8.4 12.8-17.6 19-27.2H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320c-53 0-96-43-96-96s43-96 96-96h39.8c-21-31.5-39.8-67.7-39.8-96c0-53 43-96 96-96s96 43 96 96zM117.1 489.1c-3.8 4.3-7.2 8.1-10.1 11.3l-1.8 2-.2-.2c-6 4.6-14.6 4-20-1.8C59.8 473 0 402.5 0 352c0-53 43-96 96-96s96 43 96 96c0 30-21.1 67-43.5 97.9c-10.7 14.7-21.7 28-30.8 38.5l-.6 .7zM128 352a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zM416 128a32 32 0 1 0 0-64 32 32 0 1 0 0 64z"/></svg>
            <h1 class="clashdisplaymedium text-center my-2 text-2xl text-stone-900 sm:text-2xl md:text-3xl">Pemulihan akun</h1>
            <p class="text-xs text-stone-700 text-center mb-12">Pertanyaan Pemulihan yang telah anda buat pada menu profil</p>

            @if(session()->has('success'))
            <div role="alert" class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 my-3 rounded relative" role="alert">
                {{ session('success') }}
                <button type="button" class="absolute top-0 bottom-0 right-0 px-4 py-3" data-dismiss="alert" aria-label="Close">
                    <svg class="fill-current h-6 w-6 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M6.293 6.293a1 1 0 0 1 1.414 0L10 8.586l2.293-2.293a1 1 0 1 1 1.414 1.414L11.414 10l2.293 2.293a1 1 0 1 1-1.414 1.414L10 11.414l-2.293 2.293a1 1 0 0 1-1.414-1.414L8.586 10 6.293 7.707a1 1 0 0 1 0-1.414z"/></svg>
                </button>
            </div>
            @endif

            @if(session()->has('loginError'))
            <div role="alert" class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 my-3 rounded-2xl relative" role="alert">
                {{ session('loginError') }}
            </div>
            @endif

            <form method="POST" action="{{ route('lupa-sandi.store') }}">
                @csrf
                @method('PUT')
                
                <div class="col-span-6">
                    <label for="Email" class="block text-sm font-medium text-stone-700">
                        Email
                    </label>
                    <input type="email" id="input-email" name="email" class="border border-stone-700 my-2 p-2 rounded-lg w-full" required>
                    @error('email')
                        <div class="text-red-500">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-span-6">
                    <label class="block text-sm font-medium text-stone-700">Pertanyaan Pemulihan</label>
                    <select id="pertanyaan_pemulihan_id" name="pertanyaan_pemulihan_id" class="w-full p-2 my-2 border border-stone-700 bg-stone-50 rounded-lg focus:ring-violet-400 focus:border-violet-400 @error('pertanyaan_pemulihan_id') border-red-500 @enderror">
                        @foreach($pertanyaanPemulihan as $pertanyaan)
                            <option value="{{ $pertanyaan->id }}">{{ $pertanyaan->pertanyaan }}</option>
                        @endforeach
                    </select>
                    @error('pertanyaan_pemulihan_id')
                        <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-span-6">
                    <input type="jawaban" id="jawaban" name="jawaban" placeholder="Jawaban pertanyaan pemulihan (*case sensitive)" class="border border-stone-700 my-2 p-2 rounded-lg w-full" required>
                    @error('jawaban')
                        <div class="text-red-500">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-span-6 sm:col-span-3">
                    <label for="Password" class="block text-sm font-medium text-stone-700">
                        Kata Sandi Baru
                    </label>
                    <input type="password" id="input-password" name="password" class="border border-stone-700 my-2 p-2 rounded-lg w-full" required>
                    @error('password')
                        <div class="text-red-500">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-actions mt-2 mb-6">
                    <button type="submit" class="clashdisplaymedium w-full relative inline-flex items-center justify-center p-4 px-6 py-3 overflow-hidden text-stone-50 bg-violet-500 transition duration-300 ease-out border border-r-4 border-b-4 border-stone-700 group">
                        <span class="absolute inset-0 flex items-center justify-center w-full h-full text-stone-50 duration-300 -translate-x-full bg-violet-500 group-hover:translate-x-0 ease">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                        </span>
                        <span class="absolute flex items-center justify-center w-full h-full text-stone-50 transition-all duration-300 transform group-hover:translate-x-full ease">Ubah Sandi</span>
                        <span class="relative invisible">Masuk</span>
                    </button>
                </div>
            </form>
        </div>
    </main>
</section>

@endsection
