@extends('dashboard.layout')

@section('content')
<section class="row z-0 p-4 max-w-6xl align-center mx-auto min-h-screen">
    <div class="my-8 text-center">
        <h1 class="mb-6 text-3xl font-extrabold leading-none tracking-normal text-gray-50 md:tracking-tight">Tambah Lencana</h1>
    </div>
    <div class="bg-gray-50 rounded-xl mx-3">
        <div class="row">
            <div class="col-md-12 p-5">
                <form action="{{ route('lencana.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-4">
                        <label for="nama_lencana" class="block text-md font-semibold text-gray-800">Nama Lencana</label>
                        <input type="text" id="nama_lencana" name="nama_lencana" class="w-full px-4 py-2 border rounded-lg focus:ring-violet-400 focus:border-violet-400 @error('nama_lencana') border-red-500 @enderror" value="{{ old('nama_lencana') }}">
                        @error('nama_lencana')
                            <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="gambar_lencana" class="block text-md font-semibold text-gray-800">Gambar Lencana</label>
                        <input type="file" id="gambar_lencana" name="gambar_lencana" class="w-full px-4 py-2 border rounded-lg focus:ring-violet-400 focus:border-violet-400 @error('gambar_lencana') border-red-500 @enderror">
                        @error('gambar_lencana')
                            <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="my-3">
                        <button type="submit" class="bg-violet-400 hover:bg-violet-300 rounded-xl p-2 mr-2 font-semibold">Simpan</button>
                        <button type="reset" class="bg-gray-50 hover:bg-gray-100 border border-gray-350 rounded-xl p-2 font-semibold">Reset</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
