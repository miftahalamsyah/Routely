@extends('dashboard.layout')

@section('content')
<section class="row p-4 z-0 max-w-6xl align-center mx-auto">
    <a href="/dashboard/absensi" class="flex m-3">
        <svg fill="#fafafa" xmlns="http://www.w3.org/2000/svg" width="20px" height="25px" viewBox="0 0 52 52" enable-background="new 0 0 52 52" xml:space="preserve">
            <path d="M48.6,23H15.4c-0.9,0-1.3-1.1-0.7-1.7l9.6-9.6c0.6-0.6,0.6-1.5,0-2.1l-2.2-2.2c-0.6-0.6-1.5-0.6-2.1,0 L2.5,25c-0.6,0.6-0.6,1.5,0,2.1L20,44.6c0.6,0.6,1.5,0.6,2.1,0l2.1-2.1c0.6-0.6,0.6-1.5,0-2.1l-9.6-9.6C14,30.1,14.4,29,15.3,29 h33.2c0.8,0,1.5-0.6,1.5-1.4v-3C50,23.8,49.4,23,48.6,23z"/>
        </svg>
        <p class="ml-2 font-semibold text-md text-gray-50">Back</p>
    </a>
    <div class="bg-gray-50 rounded-xl mx-3">
        <div class="row">
            <div class="col-md-12 p-5">
                <h1 class="font-semibold text-4xl text-center my-8  ">Catat Absensi</h1>
                <div class="border-0 shadow-sm">
                    <form action="{{ route('absensi.update', $absensi->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="mb-4">
                            <label for="pertemuan_id" class="block text-md font-semibold text-gray-800">Pertemuan ke berapa</label>
                            <select id="pertemuan_id" name="pertemuan_id" class="w-full px-4 py-2 border rounded-lg focus:ring-violet-400 focus:border-violet-400 @error('pertemuan_id') border-red-500 @enderror">
                                @foreach ($pertemuans as $pertemuan)
                                    <option value="{{ $pertemuan->id }}" {{ $absensi->pertemuan_id == $pertemuan->id ? 'selected' : '' }}>Pertemuan ke-{{ $pertemuan->pertemuan_ke }}</option>
                                @endforeach
                            </select>
                            @error('pertemuan_id')
                                <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label class="block text-md font-semibold text-gray-800">Pilih Kehadiran</label>
                            @foreach ($users as $user)
                                <div class="flex items-center">
                                    <input type="checkbox" name="hadir[{{ $user->id }}]" id="hadir_{{ $user->id }}" value="1" class="mr-2" {{ in_array($user->id, $absensi->hadir) ? 'checked' : '' }}>
                                    <label for="hadir_{{ $user->id }}">{{ $user->name }}</label>
                                </div>
                            @endforeach
                        </div>

                        <button type="submit" class="btn btn-primary">Update</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
