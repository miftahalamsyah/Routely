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
                Simulasi
            </div>
            <div class="w-full h-24 bg-stone-700 text-gray-50 p-4 max-w-sm block rounded-xl border border-stone-600 border-2 mb-2">
                Tes
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