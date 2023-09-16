<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>
<body>  
    <header>
        @include('includes.header')
    </header>
    
    <main class="row z-0">
        @yield('content')
    </main>

    <footer>
        @include('includes.footer')
    </footer>
</body>
</html>
