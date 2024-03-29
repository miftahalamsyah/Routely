<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Gunakan Routely untuk pengalaman belajar yang baru* Dengan Routely, Anda dapat memahami routing dalam perspektif Computational Thinking, membuka peluang baru untuk pengalaman lebih pada materi routing.">
    <meta name="keywords" content="Routely, berpikir komputasi, computational thinking, pengajuan masalah, problem posing, LMS, routing, network, SMK, Learning Management System, Media Pembelajaran, Learning System, Abad 21, Pengetahuan, Kemampuan, Kemampuan Abad 21">
    <meta name="theme-color" content="#f2f1f4">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://routely.me">
    <meta property="og:title" content="Routely - Pengalaman Belajar yang Baru*">
    <meta property="og:description" content="Gunakan Routely untuk pengalaman belajar yang baru* Dengan Routely, Anda dapat memahami routing dalam perspektif Computational Thinking, membuka peluang baru untuk pengalaman lebih pada materi routing.">
    <meta property="og:image" content="https://routely.me/storage/routely.png">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://routely.me">
    <meta property="twitter:title" content="Routely - Pengalaman Belajar yang Baru*">
    <meta property="twitter:description" content="Gunakan Routely untuk pengalaman belajar yang baru* Dengan Routely, Anda dapat memahami routing dalam perspektif Computational Thinking, membuka peluang baru untuk pengalaman lebih pada materi routing.">
    <meta property="twitter:image" content="https://routely.me/storage/routely.png">

    @vite('resources/css/app.css')
    {{-- <link rel="stylesheet" href="app.css"> --}}
    {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script src="{{ asset('js/loading-bar.js') }}" async></script>
    <script src="{{ asset('js/progress-bar.js')}}" async></script>
    <link rel="manifest" href="{{ asset('manifest.json') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" media="print" onload="this.onload=null;this.removeAttribute('media');" as="style">
    <noscript>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito&display=swap">
    </noscript>

    <title>{{ $title }} | Routely</title>
</head>
<body class="justify-center mx-auto bg-stone-100 ">
    @include('sweetalert::alert')
    <header>
        @include('includes.header')
    </header>

    <main id="main-content" class="justify-center mx-auto transition-margin ease-in-out duration-300">
        <div id="loading-bar" class="loading-bar bg-gradient-to-r from-orange-500 via-purple-500 to-violet-700 z-30"></div>
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
    /* background: linear-gradient(#f2f1f4, #f2f1f4, #fafaf9); */
}


body {
    font-family: 'Nunito', sans-serif;
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

