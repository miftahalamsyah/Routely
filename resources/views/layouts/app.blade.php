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
<body>  
    <header>
        @include('includes.header')
    </header>
    
    <main class="row z-0 w-full">
        
        <div class="container mx-auto items-center">
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
h1 {
    font-family: 'Athletics-Bold', sans-serif;
}
body {
    font-family: 'Inter', sans-serif;
}
</style>
