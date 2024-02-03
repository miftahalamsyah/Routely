@extends('dashboard.layout')

@section('content')
<section class="p-4 row z-0 max-w-6xl align-center mx-auto">
    <!-- Back Button -->
    <a href="/dashboard/siswa" class="flex m-3">
        <svg fill="#fafafa" xmlns="http://www.w3.org/2000/svg" width="20px" height="25px" viewBox="0 0 52 52" enable-background="new 0 0 52 52" xml:space="preserve">
            <path d="M48.6,23H15.4c-0.9,0-1.3-1.1-0.7-1.7l9.6-9.6c0.6-0.6,0.6-1.5,0-2.1l-2.2-2.2c-0.6-0.6-1.5-0.6-2.1,0 L2.5,25c-0.6,0.6-0.6,1.5,0,2.1L20,44.6c0.6,0.6,1.5,0.6,2.1,0l2.1-2.1c0.6-0.6,0.6-1.5,0-2.1l-9.6-9.6C14,30.1,14.4,29,15.3,29 h33.2c0.8,0,1.5-0.6,1.5-1.4v-3C50,23.8,49.4,23,48.6,23z"/>
        </svg>
        <p class="ml-2 font-semibold text-md text-gray-50">Back</p>
    </a>

    <!-- Edit Form -->
    <div class="bg-gray-50 rounded-xl mx-3">
        <div class="row">
            <div class="col-md-12 p-5">
                <h1 class="font-semibold text-4xl text-center my-8">Edit Siswa</h1>
                <div class="border-0 shadow-sm">
                    <form action="{{ route('siswa.update', $user->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <!-- Your Form Fields with User Data -->

                        <div class="mb-4">
                            <label for="name" class="block text-md font-semibold text-gray-800">Nama</label>
                            <input type="text" id="name" name="name" value="{{ $user->name }}" placeholder="Masukkan Nama Lengkap" class="w-full px-4 py-2 border rounded-lg focus:ring-violet-400 focus:border-violet-400">
                            @error('name')
                                <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="email" class="block text-md font-semibold text-gray-800">E-Mail</label>
                            <input type="text" id="email" name="email" value="{{ $user->email }}" placeholder="Masukkan E-Mail Lengkap"
                                class="w-full px-4 py-2 border rounded-lg focus:ring-violet-400 focus:border-violet-400 @error('email') border-red-500 @enderror">
                            @error('email')
                                <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="password" class="block text-md font-semibold text-gray-800">Password</label>
                            <input
                                type="password"
                                id="password"
                                name="password"
                                placeholder="Enter Password"
                                class="w-full px-4 py-2 border rounded-lg focus:ring-violet-400 focus:border-violet-400 @error('password') border-red-500 @enderror"
                            >
                            @error('password')
                                <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="password_confirmation" class="block text-md font-semibold text-gray-800">Confirm Password</label>
                            <input
                                type="password"
                                id="password_confirmation"
                                name="password_confirmation"
                                placeholder="Confirm Password"
                                class="w-full px-4 py-2 border rounded-lg focus:ring-violet-400 focus:border-violet-400"
                            >
                        </div>

                        <div class="my-3">
                            <button type="submit" class="bg-violet-400 hover:bg-violet-300 rounded-xl p-2 mr-2 font-semibold">Simpan</button>
                            <button type="reset" class="bg-gray-50 hover:bg-gray-100 border border-gray-350 rounded-xl p-2 font-semibold">Reset</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
