<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="app.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <title>Daftar Materi | Routely Admin</title>
</head>

<body class="bg-stone-800">
    <header>
        @include('dashboard.header')
    </header>

    <main class="mt-40 row z-0 max-w-6xl align-center mx-auto">
        <div class="bg-gray-50 rounded-xl mx-3">
            <div class="row">
                <div class="col-md-12 p-5">
                    <div>
                        <h1 class="font-semibold text-4xl text-center my-8">Daftar Materi</h3>
                    </div>
                    <div class="border-0 shadow-sm">
                        <div class="">
                            <button class="bg-violet-400 my-2 p-2 rounded-xl hover:bg-violet-300"><a href="{{ route('materis.create') }}" class="text-md font-semibold p-2">Tambah Materi</a></button>
                            <div class="overflow-x-auto">
                                <table class="min-w-full divide-y divide-gray-200">
                                    <thead>
                                        <tr>
                                            <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Title
                                            </th>
                                            <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Description
                                            </th>
                                            <th scope="col" class="px-6 py-3 bg-gray-50"></th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200">
                                        @forelse ($materis as $materi)
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    {{ Illuminate\Support\Str::words($materi->title, 5, '...') }}
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    {{ Illuminate\Support\Str::words($materi->description, 5, '...') }}
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                    <div class="flex space-x-2 justify-end"> <!-- Use justify-end to align content to the right -->
                                                        <a href="{{ route('materis.show', $materi->id) }}" class="text-indigo-600 hover:text-indigo-900">
                                                            <svg fill="#000000" xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 52 52" enable-background="new 0 0 52 52" xml:space="preserve"><g><path d="M51.8,25.1C47.1,15.6,37.3,9,26,9S4.9,15.6,0.2,25.1c-0.3,0.6-0.3,1.3,0,1.8C4.9,36.4,14.7,43,26,43 s21.1-6.6,25.8-16.1C52.1,26.3,52.1,25.7,51.8,25.1z M26,37c-6.1,0-11-4.9-11-11s4.9-11,11-11s11,4.9,11,11S32.1,37,26,37z"/><path d="M26,19c-3.9,0-7,3.1-7,7s3.1,7,7,7s7-3.1,7-7S29.9,19,26,19z"/></g></svg>
                                                        </a>
                                                        <a href="{{ route('materis.edit', $materi->id) }}" class="text-blue-600 hover:text-blue-900">
                                                            <svg fill="#262626" width="20px" height="20px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M21,12a1,1,0,0,0-1,1v6a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V5A1,1,0,0,1,5,4h6a1,1,0,0,0,0-2H5A3,3,0,0,0,2,5V19a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V13A1,1,0,0,0,21,12ZM6,12.76V17a1,1,0,0,0,1,1h4.24a1,1,0,0,0,.71-.29l6.92-6.93h0L21.71,8a1,1,0,0,0,0-1.42L17.47,2.29a1,1,0,0,0-1.42,0L13.23,5.12h0L6.29,12.05A1,1,0,0,0,6,12.76ZM16.76,4.41l2.83,2.83L18.17,8.66,15.34,5.83ZM8,13.17l5.93-5.93,2.83,2.83L10.83,16H8Z"/></svg>
                                                        </a>
                                                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('materis.destroy', $materi->id) }}" method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="text-red-600 hover:text-red-900">
                                                                <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M7 4a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v2h4a1 1 0 1 1 0 2h-1.069l-.867 12.142A2 2 0 0 1 17.069 22H6.93a2 2 0 0 1-1.995-1.858L4.07 8H3a1 1 0 0 1 0-2h4V4zm2 2h6V4H9v2zM6.074 8l.857 12H17.07l.857-12H6.074zM10 10a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0v-6a1 1 0 0 1 1-1zm4 0a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0v-6a1 1 0 0 1 1-1z" fill="#0D0D0D"/></svg>
                                                            </button>
                                                        </form>
                                                    </div>
                                                </td>

                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="3" class="px-6 py-4 whitespace-nowrap text-center">
                                                    <div class="bg-gray-100 text-gray-600 p-2 rounded-xl">
                                                        Data materi belum tersedia.
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>

                            {{ $materis->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer>
        @include('dashboard.footer')
    </footer>
</body>

</html>

<style>
    h1 {
        font-family: 'Athletics-Bold', sans-serif;
    }
    body {
        font-family: 'Inter', sans-serif;
    }
</style>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
        //message with toastr
        @if(session()->has('success'))
        
            toastr.success('{{ session('success') }}', 'BERHASIL!'); 

        @elseif(session()->has('error'))

            toastr.error('{{ session('error') }}', 'GAGAL!'); 
            
        @endif
    </script>