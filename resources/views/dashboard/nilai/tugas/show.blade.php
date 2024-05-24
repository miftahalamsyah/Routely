@extends('dashboard.layout')

@section('content')
<section class="p-4 row z-0 max-w-6xl align-center mx-auto">
    <a href="{{ url()->previous() }}" class="flex m-3">
        <svg fill="#fafafa" xmlns="http://www.w3.org/2000/svg" width="20px" height="25px" viewBox="0 0 52 52" enable-background="new 0 0 52 52" xml:space="preserve">
            <path d="M48.6,23H15.4c-0.9,0-1.3-1.1-0.7-1.7l9.6-9.6c0.6-0.6,0.6-1.5,0-2.1l-2.2-2.2c-0.6-0.6-1.5-0.6-2.1,0 L2.5,25c-0.6,0.6-0.6,1.5,0,2.1L20,44.6c0.6,0.6,1.5,0.6,2.1,0l2.1-2.1c0.6-0.6,0.6-1.5,0-2.1l-9.6-9.6C14,30.1,14.4,29,15.3,29 h33.2c0.8,0,1.5-0.6,1.5-1.4v-3C50,23.8,49.4,23,48.6,23z"/>
        </svg>
        <p class="ml-2 font-semibold text-md text-gray-50">Back</p>
    </a>
    <div class="bg-stone-50 rounded-xl mx-3">
        <div class="row">
            <div class="col-md-12 p-5">
                <h1 class="font-semibold text-4xl text-center my-8">Hasil Tugas</h1>
                <div class="border-0 shadow-sm">
                        <p class="block text-md font-semibold text-gray-800">Tugas ID</p>
                        <div class="mb-4 w-full px-4 py-2 border rounded-lg focus:ring-violet-400 focus:border-violet-400">
                            <p>Tugas ke-{{ $hasilTugasSiswa->tugas_id }}</p>
                        </div>

                        <p class="block text-md font-semibold text-gray-800">Nama Siswa</p>
                        <div class="mb-4 w-full px-4 py-2 border rounded-lg focus:ring-violet-400 focus:border-violet-400">
                            <p>{{ $hasilTugasSiswa->user->name }}</p>
                        </div>

                        <p class="block text-md font-semibold text-gray-800">Topologi</p>
                        <div class="mb-4 w-full px-4 py-2 border rounded-lg focus:ring-violet-400 focus:border-violet-400">
                            <p>{{ $hasilTugasSiswa->topologi }}</p>
                        </div>

                        <p class="block text-md font-semibold text-gray-800">File Presentasi</p>
                        <div class="mb-4 w-full px-4 py-2 border rounded-lg focus:ring-violet-400 focus:border-violet-400">
                            <p>{{ $hasilTugasSiswa->powerpoint }}</p>
                        </div>

                        <p class="block text-md font-semibold text-gray-800">Nilai</p>
                        <div class="mb-4 w-full px-4 py-2 border rounded-lg focus:ring-violet-400 focus:border-violet-400">
                            {{ $nilaiTugas }}
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
