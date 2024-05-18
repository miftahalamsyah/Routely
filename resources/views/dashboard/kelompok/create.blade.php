@extends('dashboard.layout')

@section('content')
<section class="row p-4 z-0 max-w-6xl align-center mx-auto">
    <a href="/dashboard/kelompok" class="flex m-3">
        <svg fill="#fafafa" xmlns="http://www.w3.org/2000/svg" width="20px" height="25px" viewBox="0 0 52 52" enable-background="new 0 0 52 52" xml:space="preserve">
            <path d="M48.6,23H15.4c-0.9,0-1.3-1.1-0.7-1.7l9.6-9.6c0.6-0.6,0.6-1.5,0-2.1l-2.2-2.2c-0.6-0.6-1.5-0.6-2.1,0 L2.5,25c-0.6,0.6-0.6,1.5,0,2.1L20,44.6c0.6,0.6,1.5,0.6,2.1,0l2.1-2.1c0.6-0.6,0.6-1.5,0-2.1l-9.6-9.6C14,30.1,14.4,29,15.3,29 h33.2c0.8,0,1.5-0.6,1.5-1.4v-3C50,23.8,49.4,23,48.6,23z"/>
        </svg>
        <p class="ml-2 font-semibold text-md text-gray-50">Back</p>
    </a>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 m-5 text-stone-300">
       @foreach ($clusters as $key => $cluster)
            <div class="bg-stone-700 border-2 border-stone-600 rounded-2xl shadow-md px-6 py-3">
                <table class="w-full">
                    <thead>
                        <tr>
                            <th class="font-semibold" colspan="2">Kluster {{ $loop->iteration }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th class="font-semibold">Nilai Pretest</th>
                            <th class="font-semibold">Nama</th>
                        </tr>
                        @php
                            $clusterCollection = collect($cluster); // Convert to collection
                            if ($key == 0) {
                                $clusterSorted = $clusterCollection->sortByDesc('total');
                            } else {
                                $clusterSorted = $clusterCollection->sortBy('total');
                            }
                        @endphp
                        @foreach ($clusterSorted as $item)
                            @php
                                $isInKelompok = \App\Models\Kelompok::where('user_id', $item->user->id)->exists();
                            @endphp
                            <tr class="border-y border-stone-600 {{ $isInKelompok ? ' bg-stone-600 text-green-500' : '' }}">
                                <td class="text-center">{{ $item->total }}</td>
                                <td class="text-center">{{ $item->user->name }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endforeach
    </div>

    <div class="bg-gray-50 rounded-xl mx-3">
        <div class="row">
            <div class="col-md-12 p-5">
                <h1 class="font-semibold text-stone-700 text-4xl text-center my-8  ">Tambah Kelompok</h1>
                <div class="border-0 shadow-sm">

                    <form action="{{ route('kelompok.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-4">
                            <label for="no_kelompok" class="block text-md font-semibold text-gray-800">Nomor Kelompok</label>
                            <input type="number" id="no_kelompok" name="no_kelompok" value="{{ old('no_kelompok') }}" placeholder="Nomor Kelompok"
                                class="w-full px-4 py-2 border rounded-lg focus:ring-violet-400 focus:border-violet-400 @error('no_kelompok') border-red-500 @enderror">
                            @error('no_kelompok')
                                <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="name" class="block text-md font-semibold text-gray-800">Nama Kelompok</label>
                            <input type="text" id="name" name="name" value="{{ old('name') }}" placeholder="Masukkan Nama Kelompok"
                                class="w-full px-4 py-2 border rounded-lg focus:ring-violet-400 focus:border-violet-400">
                            </input>
                            @error('name')
                                <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="description" class="block text-md font-semibold text-gray-800">Deskripsi</label>
                            <textarea id="description" name="description" rows="5"
                                placeholder="Masukkan Deskripsi Kelompok"
                                class="w-full px-4 py-2 border rounded-lg focus:ring-violet-400 focus:border-violet-400 @error('description') border-red-500 @enderror">{{ old('description') }}</textarea>
                            @error('description')
                                <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
                            @enderror
                            </input>
                        </div>

                        @php
                            // Sort the $siswaUsers collection by name in ascending order
                            $sortedUsers = $siswaUsers->sortBy('name');
                        @endphp
                        <div class="mb-4">
                            <label class="block text-md font-semibold text-gray-800">Pilih Anggota Kelompok</label>
                            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 mt-2 border rounded-lg px-4 py-2">
                                @foreach($sortedUsers as $user)
                                    <label class="inline-flex items-center">
                                        <input type="checkbox" name="user_id[]" value="{{ $user->id }}" class="form-checkbox h-5 w-5 text-violet-600">
                                        <span class="ml-2">{{ $user->name }}</span>
                                    </label>
                                @endforeach
                            </div>

                            @error('user_id')
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
    </div>
</section>
@endsection
