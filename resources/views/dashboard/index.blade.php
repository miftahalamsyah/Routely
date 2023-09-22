<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="app.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <title>{{ $title }} | Routely</title>
</head>

<body class="bg-stone-800">
    <header>
        @include('dashboard.header')
    </header>

    <main class="mt-40 max-w-6xl mx-auto items-center animate-up">
        <div class="mb-16 text-center">
            <h1 class="mb-6 text-5xl font-extrabold leading-none max-w-5xl mx-auto tracking-normal text-gray-50 sm:text-6xl md:text-6xl lg:text-7xl md:tracking-tight"><span class="w-full text-transparent bg-clip-text bg-gradient-to-r from-violet-700 via-purple-500 to-violet-300 lg:inline">Routely</span>&nbsp;Admin Dashboard</h1>
        </div>

        <!-- quick dashboard monitor card for number of materis and users-->
        <div class="mx-2 block flex flex-col sm:flex-row ">
            <div class="w-full h-24 bg-stone-700 text-gray-50 p-4 max-w-sm block rounded-xl border border-stone-600 border-2 mr-2 mb-2">
                Siswa
                <p class="font-bold text-3xl py-2">{{ $userCount }}</p>
            </div>
            <div class="w-full h-24 bg-stone-700 text-gray-50 p-4 max-w-sm block rounded-xl border border-stone-600 border-2 mr-2 mb-2">
                Materi
                <p class="font-bold text-3xl py-2">{{ $materiCount }}</p>
            </div>
            <div class="w-full h-24 bg-stone-700 text-gray-50 p-4 max-w-sm block rounded-xl border border-stone-600 border-2 mr-2 mb-2">
                Ditugaskan
            </div>
            <div class="w-full h-24 bg-stone-700 text-gray-50 p-4 max-w-sm block rounded-xl border border-stone-600 border-2 mb-2">
                Diselesaikan
            </div>
        </div>


        <!-- Daftar Siswa -->
        <div class="my-5 mx-2 block rounded-xl border border-stone-600 border p-8 bg-stone-700" style="max-height: 400px; overflow-y: auto;">
            <h1 class="mb-6 text-2xl font-extrabold leading-none max-w-5xl tracking-normal text-gray-50 sm:text-2xl md:text-3xl lg:text-4xl md:tracking-tight">Daftar Siswa</h1>
            <table class="min-w-full divide-y divide-gray-200 text-gray-50">
                <thead>
                    <tr>
                        <th scope="col" class="px-3 py-3 text-left text-xs font-medium uppercase tracking-wider">
                            No
                        </th>
                        <th scope="col" class="px-3 py-3 text-left text-xs font-medium uppercase tracking-wider">
                            Nama                        
                        </th>
                        <th scope="col" class="px-3 py-3 text-left text-xs font-medium uppercase tracking-wider">
                            Email
                        </th>
                        <th scope="col" class="px-3 py-3 text-left text-xs font-medium uppercase tracking-wider">
                            Status
                        </th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                @forelse ($users as $index => $user)
                    <tr>
                        <td class="px-3 py-4 whitespace-nowrap">
                            {{ $index + 1 }}
                        </td>
                        <td class="px-3 py-4 whitespace-nowrap">
                            {{ $user->name }}
                        </td>
                        <td class="px-3 py-4 whitespace-nowrap">
                            {{ $user->email }}
                        </td>
                        <td class="px-3 py-4 whitespace-nowrap">
                            <p class="text-yellow-500">Belum</p>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" class="px-6 py-4 whitespace-nowrap text-center">
                            <div class="mx-auto bg-gray-100 text-gray-600 p-2 rounded-xl">
                                Data users tidak tersedia.
                            </div>
                        </td>
                    </tr>
                @endforelse
                </tbody>
            </table>
            {{ $users->links() }}
        </div>

        <!-- Daftar Materi -->
        <div class="my-5 mx-2 block rounded-xl border border-stone-600 border p-8 bg-stone-700" style="max-height: 400px; overflow-y: auto; scrollbar-width: none;">
            <h1 class="mb-6 text-2xl font-extrabold leading-none max-w-5xl tracking-normal text-gray-50 sm:text-2xl md:text-3xl lg:text-4xl md:tracking-tight">Daftar Materi</h1>
            <table class="min-w-full divide-y divide-gray-200 text-gray-50">
                <thead>
                    <tr>
                        <th scope="col" class="px-3 py-3 text-left text-xs font-medium uppercase tracking-wider">
                            No
                        </th>
                        <th scope="col" class="px-3 py-3 text-left text-xs font-medium uppercase tracking-wider">
                            Title                   
                        </th>
                        <th scope="col" class="px-3 py-3 text-left text-xs font-medium uppercase tracking-wider">
                            PDF File
                        </th>
                        <th scope="col" class="px-3 py-3 text-left text-xs font-medium uppercase tracking-wider">
                            Description
                        </th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                @forelse ($materis as $index => $materi)
                    <tr>
                        <td class="px-3 py-4 whitespace-nowrap">
                            {{ $index + 1 }}
                        </td>
                        <td class="px-3 py-4 whitespace-nowrap">
                            {{ Illuminate\Support\Str::words($materi->title, 5, '...') }}
                        </td>
                        <td class="px-3 py-4 whitespace-nowrap">
                            {{ $materi->pdf_file }}
                        </td>
                        <td class="px-3 py-4 whitespace-nowrap">
                            {{ Illuminate\Support\Str::words($materi->description, 5, '...') }}
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" class="px-6 py-4 whitespace-nowrap text-center">
                            <div class="mx-auto bg-gray-100 text-gray-600 p-2 rounded-xl">
                                Data Materi tidak tersedia.
                            </div>
                        </td>
                    </tr>
                @endforelse
                </tbody>
            </table>
            <a href="/dashboard/materis">Selengkapnya</a>
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
    .animate-up {
        opacity: 0;
        transform: translateY(20px);
        transition: opacity 2s, transform 2s;
    }

    .animate-up.animate {
        opacity: 1;
        transform: translateY(0);
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const elements = document.querySelectorAll('.animate-up');
        
        elements.forEach((element) => {
            element.classList.add('animate');
        });
    });
</script>