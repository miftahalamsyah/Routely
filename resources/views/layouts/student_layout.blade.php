<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="app.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <title>{{ $title }} | Routely</title>
</head>
<body>
    <header>
        @include('includes.navbar')
    </header>
        @include('includes.sidebar')
    <main id="main-content" class="max-w-5xl justify-center mx-auto mt-12 transition-margin ease-in-out duration-300">
        <div class="content-container">
            @yield('content')
        </div>
        <footer class="py-20 w-full z-20 mx-auto align-center justify-center left-0">
            <a href="/" class="flex items-center mx-auto py-2 justify-center align-center">
                <svg class="" width="20" height="20" fill="#5c578c" viewBox="0 0 512 512"><path d="M512 96c0 50.2-59.1 125.1-84.6 155c-3.8 4.4-9.4 6.1-14.5 5H320c-17.7 0-32 14.3-32 32s14.3 32 32 32h96c53 0 96 43 96 96s-43 96-96 96H139.6c8.7-9.9 19.3-22.6 30-36.8c6.3-8.4 12.8-17.6 19-27.2H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320c-53 0-96-43-96-96s43-96 96-96h39.8c-21-31.5-39.8-67.7-39.8-96c0-53 43-96 96-96s96 43 96 96zM117.1 489.1c-3.8 4.3-7.2 8.1-10.1 11.3l-1.8 2-.2-.2c-6 4.6-14.6 4-20-1.8C59.8 473 0 402.5 0 352c0-53 43-96 96-96s96 43 96 96c0 30-21.1 67-43.5 97.9c-10.7 14.7-21.7 28-30.8 38.5l-.6 .7zM128 352a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zM416 128a32 32 0 1 0 0-64 32 32 0 1 0 0 64z"/></svg>
                <span class="text-student px-2 text-xl font-extrabold whitespace-nowrap">Routely</span>
            </a>
            <span class="copyright block text-sm text-stone-800 text-center">2023 <a href="https://miftahalamsyah.tech/" class="hover:underline">Miftah Alamsyah</a></span>
        </footer>
    </main>
</body>
</html>
<style>
:root {
    background: linear-gradient(#f2f1f4, #f2f1f4, #fafaf9 );
}

h1 {
    font-family: 'Athletics-Bold', sans-serif;
}

body {
    font-family: 'Inter', sans-serif;
}

.animate-up {
    opacity: 0;
    transform: translateY(20px);
    transition: opacity 1s, transform 2s;
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

     // Get the current hour (0-23) from the user's system clock
     const currentHour = new Date().getHours();

    // Find the greeting based on the current hour
    let greeting;
    if (currentHour >= 3 && currentHour < 10) {
        greeting = 'Selamat Pagi';
    } else if (currentHour >= 10 && currentHour < 15) {
        greeting = 'Selamat Siang';
    } else if (currentHour >= 15 && currentHour < 18) {
        greeting = 'Selamat Sore';
    } else {
        greeting = 'Selamat Malam';
    }

    document.getElementById('greeting').textContent = greeting;

    function closePopup() {
        document.querySelector('.fixed').remove();
    }
</script>

