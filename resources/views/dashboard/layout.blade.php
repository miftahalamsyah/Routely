<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite('resources/css/app.css')
        <link rel="stylesheet" href="app.css">
        <script src="{{ asset('js/loading-bar.js') }}" async></script>

        <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
        <title>{{ $title }} | Routely</title>
    </head>

    <body class="bg-stone-800">
        <header>
            <nav class="flex basis-full items-center w-full mx-auto px-4 sm:px-6 md:px-8 py-3" aria-label="Global">
                <div class="mr-5 lg:mr-0 lg:hidden">
                    <a class="flex-none text-xl font-semibold dark:text-white" href="/" aria-label="Brand"><span class="w-full text-transparent bg-clip-text bg-gradient-to-r from-violet-700 via-purple-500 to-violet-300 lg:inline">Routely</span></a>
                </div>

                <div class="w-full flex items-center justify-end ml-auto sm:justify-between sm:gap-x-3 sm:order-3">
                    <div class="hidden sm:block">
                    </div>

                    <div class="flex flex-row items-center justify-end gap-2">
                        <button type="button" class="inline-flex flex-shrink-0 justify-center items-center gap-2 h-[2.375rem] w-[2.375rem] rounded-full font-medium bg-stone-700 text-gray-700 border-2 border-stone-600 align-middle hover:bg-stone-600 focus:outline-none focus:ring-2 transition-all text-xs">
                            <svg class="w-3.5 h-3.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#fafafa" viewBox="0 0 16 16">
                            <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z" />
                            </svg>
                        </button>

                        <div x-data="{ open: false }" class="md:order-2 z-10 dropdown inline-block relative">
                            @auth
                                <button @click="open = !open" type="button" class="shadow inline-flex flex-shrink-0 justify-center items-center gap-2 h-[2.375rem] w-[2.375rem] rounded-full font-medium align-middle transition-all text-xs" aria-expanded="true" aria-haspopup="true">
                                    <div class="flex items-center justify-center w-10 h-10 rounded-full bg-gradient-to-tl from-violet-500 to-orange-500 shadow-soft-2xl text-stone-50 text-md font-semibold border">
                                        {{ substr(Auth::user()->name, 0, 1) }}{{ substr(strrchr(Auth::user()->name, ' '), 1, 1) }}
                                    </div>
                                </button>
                                <ul x-show="open" @click.away="open = false" class="dropdown-menu absolute mr-40 bg-stone-700 border border-stone-600 rounded-2xl hidden text-gray-700 w-40 right-0 transform translate-x-full">
                                    <li class="text-xs rounded-2xl shadow-md">
                                        <a href="/student" class="text-gray-50 block px-4 py-2 text-sm rounded-t-2xl hover:bg-stone-500" role="menuitem" tabindex="-1" id="menu-item-0">Dashboard</a>
                                        <a href="/student/profile" class="text-gray-50 block px-4 py-2 text-sm hover:bg-stone-500" role="menuitem" tabindex="-1" id="menu-item-0">Profil</a>
                                        <form action="/logout" method="post">
                                            @csrf
                                            <button type="submit" class="w-full text-left text-gray-50 rounded-b-2xl block px-4 py-2 text-sm hover:bg-stone-500">Keluar</button>
                                        </form>
                                    </li>
                                </ul>
                            @else
                                <a href="/login">
                                    <button class="mr-2 text-sm bg-violet-200 relative inline-flex items-center justify-center px-4 py-2 overflow-hidden font-semibold text-student transition duration-300 ease-out border border-gray-150 rounded-3xl group">
                                        <span class="bg-violet-300 absolute inset-0 flex items-center justify-center w-full h-full text-student duration-300 -translate-x-full group-hover:translate-x-0 ease">
                                            <svg width="20px" height="20px" viewBox="0 0 16 16" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <rect width="16" height="16" id="icon-bound" fill="none" />
                                                <path d="M14,14l0,-12l-6,0l0,-2l8,0l0,16l-8,0l0,-2l6,0Zm-6.998,-0.998l4.998,-5.002l-5,-5l-1.416,1.416l2.588,2.584l-8.172,0l0,2l8.172,0l-2.586,2.586l1.416,1.416Z" />
                                            </svg>
                                        </span>
                                        <span class="absolute flex items-center justify-center w-full h-full text-student transition-all duration-300 transform group-hover:translate-x-full ease">Login</span>
                                        <span class="relative invisible">Login</span>
                                    </button>
                                </a>
                            @endauth
                        </div>
                    </div>
                </div>
            </nav>
        </header>
        @include('dashboard.sidebar')
        <div id="loading-bar" class="loading-bar bg-gradient-to-r from-orange-500 via-purple-500 to-violet-700 z-30"></div>
        <div class="content-container ml-0 lg:ml-64 z-0">
            @yield('content')
        </div>

        <footer class="ml-0 md:ml-64">
            @include('dashboard.footer')
        </footer>
    </body>
</html>


<style>
    h1 {
        font-family: 'Athletics-Bold', sans-serif;
    }
    body {
        font-family: 'Plus Jakarta Sans', sans-serif;
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

    .dropdown:hover .dropdown-menu {
    display: block;
    }

     ::-webkit-scrollbar {
    width: 0.4rem;
    background-color: transparent;
    }

    ::-webkit-scrollbar-thumb {
        background-color: #5c578c;
        border-radius: 12px;
    }

    ::-webkit-scrollbar-track {
        background-color: transparent;
    }

    * {
        scrollbar-width: thin;
    }

    *::-webkit-scrollbar {
        width: 0.4rem;
        background-color: transparent;
    }

    *::-webkit-scrollbar-thumb {
        background-color: #5c578c;
        border-radius: 12px;
    }

    *::-webkit-scrollbar-track {
        background-color: transparent;
    }

</style>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const elements = document.querySelectorAll('.animate-up');

        elements.forEach((element) => {
            element.classList.add('animate');
        });

        function updateElementContent(elementId, data) {
            const element = document.getElementById(elementId);
            if (element) {
                element.textContent = data;
            }
        }

        // Function to fetch and update data
        function fetchData() {
            $.ajax({
                url: '/fetch-data', // Replace with the actual route that fetches the data
                method: 'GET',
                dataType: 'json',
                cache: false,
                success: function(data) {
                    // Update the content with the fetched data
                    updateElementContent('userCount', data.userCount);
                    updateElementContent('materiCount', data.materiCount);
                    // Add similar code for other data as needed
                },
                error: function(xhr, status, error) {
                    console.error(error);
                }
            });
        }

        // Call the fetchData function every 5 seconds (adjust the interval as needed)
        setInterval(fetchData, 5000); // 5000 milliseconds = 5 seconds

        // Initial data load
        fetchData();
    });
    //message with toastr
    @if(session()->has('success'))

        toastr.success('{{ session('success') }}', 'BERHASIL!');

    @elseif(session()->has('error'))

        toastr.error('{{ session('error') }}', 'GAGAL!');

    @endif
</script>
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/alpinejs@2.x.x/dist/alpine.min.js" defer></script>

