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

    <main id="main-content" class="max-w-5xl justify-center mx-auto mt-12 transition-margin ease-in-out duration-300">

        <div class="content-container">
            @yield('content')
        </div>

    </div>
    </main>

    <footer>
        @include('includes.footer')
    </footer>
</body>
</html>
<style>
:root {
    /* bg-gray-50 */
    background-color: #f2f1f4;
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
</script>

