@extends('dashboard.layout')

@section('content')
<section class="p-4 row z-0 max-w-6xl align-center mx-auto">
    <a href="/dashboard/pertemuan" class="flex m-3">
        <svg fill="#fafafa" xmlns="http://www.w3.org/2000/svg" width="20px" height="25px" viewBox="0 0 52 52" enable-background="new 0 0 52 52" xml:space="preserve">
            <path d="M48.6,23H15.4c-0.9,0-1.3-1.1-0.7-1.7l9.6-9.6c0.6-0.6,0.6-1.5,0-2.1l-2.2-2.2c-0.6-0.6-1.5-0.6-2.1,0 L2.5,25c-0.6,0.6-0.6,1.5,0,2.1L20,44.6c0.6,0.6,1.5,0.6,2.1,0l2.1-2.1c0.6-0.6,0.6-1.5,0-2.1l-9.6-9.6C14,30.1,14.4,29,15.3,29 h33.2c0.8,0,1.5-0.6,1.5-1.4v-3C50,23.8,49.4,23,48.6,23z"/>
        </svg>
        <p class="ml-2 font-semibold text-md text-gray-50">Back</p>
    </a>
    <div class="bg-gray-50 rounded-xl mx-3">
        <div class="row">
            <div class="col-md-12 p-5">
                <h1 class="font-semibold text-4xl text-center my-8  ">Edit Pertemuan</h1>
                <div class="border-0 shadow-sm">

                    <form action="{{ route('pertemuan.update', $pertemuan->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="mb-4">
                            <label for="pertemuan_ke" class="block text-md font-semibold text-gray-800">Pertemuan ke berapa</label>
                            <input type="number" id="pertemuan_ke" name="pertemuan_ke" value="{{ old('pertemuan_ke', $pertemuan->pertemuan_ke) }}" placeholder="Masukkan Pertemuan ke berapa"
                                class="w-full px-4 py-2 border rounded-lg focus:ring-violet-400 focus:border-violet-400 @error('pertemuan_ke') border-red-500 @enderror">
                            @error('pertemuan_ke')
                                <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="tanggal" class="block text-md font-semibold text-gray-800">Tanggal</label>
                            <input type="date" id="tanggal" name="tanggal" value="{{ old('tanggal', $pertemuan->tanggal) }}" placeholder="Masukkan Pertemuan ke berapa"
                                class="w-full px-4 py-2 border rounded-lg focus:ring-violet-400 focus:border-violet-400 @error('tanggal') border-red-500 @enderror">
                            @error('tanggal')
                                <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="tujuan_pembelajaran" class="block text-md font-semibold text-gray-800">Tujuan Pembelajaran</label>
                            <textarea id="tujuan_pembelajaran" name="tujuan_pembelajaran" placeholder="Masukkan tujuan Pembelajarannya" class="w-full px-4 py-2 border rounded-lg focus:ring-violet-400 focus:border-violet-400">{{ old('tujuan_pembelajaran', $pertemuan->tujuan_pembelajaran) }}</textarea>
                            @error('tujuan_pembelajaran')
                                <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="apersepsi" class="block text-md font-semibold text-gray-800">Apersepsi</label>
                            <textarea id="apersepsi" name="apersepsi" placeholder="Masukkan apersepsinya" class="w-full px-4 py-2 border rounded-lg focus:ring-violet-400 focus:border-violet-400">{{ old('apersepsi', $pertemuan->apersepsi) }}</textarea>
                            @error('apersepsi')
                                <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="flex justify-end">
                            <button type="submit"
                                class="bg-violet-500 text-white px-4 py-2 rounded-md hover:bg-violet-600 focus:outline-none focus:bg-violet-600">
                                Update Pertemuan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
