{{-- desktop navbar --}}
<div class="fixed inset-x-0 top-2 bg-stone-50 px-5 mx-auto w-full sm:max-w-4xl md:max-w-4xl lg:max-w-5xl xl:max-w-6xl rounded-[1.7em] border border-r-4 border-b-4 border-stone-700 z-50">
    <div class="justify-center w-full mx-auto top-2 py-2 px-1 sm:px-1 md:px-8 z-20">
        <div class="flex flex-wrap items-center justify-between mx-auto">
            <a href="/" class="flex items-center text-stone-700">
                <svg class="mx-auto" width="20" height="20" fill="currentColor" viewBox="0 0 512 512"><path d="M512 96c0 50.2-59.1 125.1-84.6 155c-3.8 4.4-9.4 6.1-14.5 5H320c-17.7 0-32 14.3-32 32s14.3 32 32 32h96c53 0 96 43 96 96s-43 96-96 96H139.6c8.7-9.9 19.3-22.6 30-36.8c6.3-8.4 12.8-17.6 19-27.2H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320c-53 0-96-43-96-96s43-96 96-96h39.8c-21-31.5-39.8-67.7-39.8-96c0-53 43-96 96-96s96 43 96 96zM117.1 489.1c-3.8 4.3-7.2 8.1-10.1 11.3l-1.8 2-.2-.2c-6 4.6-14.6 4-20-1.8C59.8 473 0 402.5 0 352c0-53 43-96 96-96s96 43 96 96c0 30-21.1 67-43.5 97.9c-10.7 14.7-21.7 28-30.8 38.5l-.6 .7zM128 352a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zM416 128a32 32 0 1 0 0-64 32 32 0 1 0 0 64z"/></svg>
                <span class="self-center px-2 text-xl font-extrabold whitespace-nowrap">Routely</span>
            </a>
            <div class="flex md:order-2 z-10">
            @auth
                <div class="relative inline-block text-left">
                    <div class="mr-2">
                        <button type="button" class="inline-flex w-full justify-center" id="menu-button" aria-expanded="true" aria-haspopup="true" title="Klik untuk Navigasi">
                            <div class="flex items-center justify-center w-9 h-9 rounded-full bg-gradient-to-tl from-violet-500 to-orange-500 shadow-soft-2xl text-stone-50 text-xs font-semibold hover:shadow-md  border border-b-4 border-r-4 border-stone-700">
                                {{ substr(Auth::user()->name, 0, 1) }}{{ substr(strrchr(Auth::user()->name, ' '), 1, 1) }}
                            </div>
                        </button>
                    </div>
                    <div class="absolute clashdisplaymedium mt-6 right-0 w-56 origin-top-right rounded-xl bg-stone-50 shadow-lg focus:outline-none hidden border border-b-4 border-r-4 border-stone-700" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                        <div class="py-1" role="none">
                            <a href="/student" class="text-stone-700 block px-4 py-2 text-sm hover:bg-violet-100" role="menuitem" tabindex="-1" id="menu-item-0">Dashboard</a>
                            <a href="/student/profile" class="text-stone-700 block px-4 py-2 text-sm hover:bg-violet-100" role="menuitem" tabindex="-1" id="menu-item-0">Profil</a>
                            <form action="/logout" method="post">
                                @csrf
                                <button type="submit" class="w-full text-left text-stone-700 block px-4 py-2 text-sm hover:bg-violet-100">Keluar</button>
                            </form>
                        </div>
                    </div>
                </div>

            @else
                <a href="/login">
                    <button class="clashdisplaymedium mr-2 text-sm bg-violet-500 relative inline-flex items-center justify-center px-4 py-2 overflow-hidden font-semibold text-stone-50 transition duration-300 ease-out border rounded-2xl group border-b-4 border-r-4 border-stone-700">
                        <span class="bg-violet-500 absolute inset-0 flex items-center justify-center w-full h-full text-stone-50 duration-300 -translate-x-full group-hover:translate-x-0 ease">
                            <svg width="20px" height="20px" fill="currentColor" viewBox="0 0 16 16" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <rect width="16" height="16" id="icon-bound" fill="none" />
                                <path d="M14,14l0,-12l-6,0l0,-2l8,0l0,16l-8,0l0,-2l6,0Zm-6.998,-0.998l4.998,-5.002l-5,-5l-1.416,1.416l2.588,2.584l-8.172,0l0,2l8.172,0l-2.586,2.586l1.416,1.416Z" />
                            </svg>
                        </span>
                        <span class="absolute flex items-center justify-center w-full h-full text-stone-50 transition-all duration-300 transform group-hover:translate-x-full ease">Login</span>
                        <span class="relative invisible">Login</span>
                    </button>
                </a>
            @endauth
                <div class="navbarmobile hidden">
                    <button id="showBreadcrumbs" class="bg-stone-50 text-stone-900 border-stone-350 border hover:bg-stone-100 font-semibold rounded-lg text-sm px-2 py-1 text-center mr-3 md:mr-0"  style="display: none;">
                        <svg height="20px" id="Layer_1" style="enable-background:new 0 0 32 32;" version="1.1" viewBox="0 0 32 32" width="20px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M4,10h24c1.104,0,2-0.896,2-2s-0.896-2-2-2H4C2.896,6,2,6.896,2,8S2.896,10,4,10z M28,14H4c-1.104,0-2,0.896-2,2 s0.896,2,2,2h24c1.104,0,2-0.896,2-2S29.104,14,28,14z M28,22H4c-1.104,0-2,0.896-2,2s0.896,2,2,2h24c1.104,0,2-0.896,2-2 S29.104,22,28,22z"/></svg>
                    </button>
                    <button id="hideBreadcrumbs" class="bg-stone-50 text-green-900 border-stone-350 border hover:bg-stone-100 font-semibold rounded-lg text-sm px-2 py-1 text-center mr-3 md:mr-0" style="display: none;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                    </button>
                </div>
            </div>
            <div class="clashdisplaymedium items-center justify-between hidden w-full lg:flex lg:w-auto lg:order-1" id="navbar-sticky">
                <ul class="bg-transparent flex flex-col p-4 md:p-0 mt-4 font-medium border border-stone-100 rounded-lg md:flex-row md:space-x-8 md:mt-0 md:border-0">
                    <li>
                        @active('pages.home')
                            <a class="nav block relative py-2 pl-3 pr-4 rounded md:p-0 active text-stone-900" href="/">Home<div class="absolute inset-x-0 bottom-0 h-1 bg-violet-500"></div></a>
                        @else
                            <a class="nav block relative py-2 pl-3 pr-4 rounded md:p-0 text-stone-900" href="/">Home</a>
                        @endactive
                    </li>
                    <li>
                        @active('pages.berpikir-komputasi')
                            <a class="nav block relative py-2 pl-3 pr-4 rounded md:p-0 active text-stone-900" href="#berpikir-komputasi">Berpikir Komputasi<div class="absolute inset-x-0 bottom-0 h-1 bg-violet-500"></div></a>
                        @else
                            <a class="nav block relative py-2 pl-3 pr-4 rounded md:p-0 text-stone-900" href="/#berpikir-komputasi">Berpikir Komputasi</a>
                        @endactive
                    </li>
                    <li>
                        @active('pages.problem-posing')
                            <a class="nav block relative py-2 pl-3 pr-4 rounded md:p-0 active text-stone-900" href="#problem-posing">Problem Posing<div class="absolute inset-x-0 bottom-0 h-1 bg-violet-500"></div></a>
                        @else
                            <a class="nav block relative py-2 pl-3 pr-4 rounded md:p-0 text-stone-900" href="/#problem-posing">Problem Posing</a>
                        @endactive
                    </li>
                    {{-- <li>
                        @active('pages.routing')
                            <a class="nav block relative py-2 pl-3 pr-4 rounded md:p-0 active text-stone-900" href="/routing">Routing<div class="absolute inset-x-0 bottom-0 h-1 bg-violet-500"></div></a>
                        @else
                            <a class="nav block relative py-2 pl-3 pr-4 rounded md:p-0 text-stone-900" href="/routing">Routing</a>
                        @endactive
                    </li> --}}
                    <li>
                        @active('pages.bantuan')
                            <a class="nav block relative py-2 pl-3 pr-4 rounded md:p-0 active text-stone-900" href="/bantuan">Bantuan<div class="absolute inset-x-0 bottom-0 h-1 bg-violet-500"></div></a>
                        @else
                            <a class="nav block relative py-2 pl-3 pr-4 rounded md:p-0 text-stone-900" href="/bantuan">Bantuan</a>
                        @endactive
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div id="scroll-progress" class="left-0 h-1 bg-orange-500"></div>
</div>

<style>
    @media (max-width: 767px) {
        .navbarmobile {
            display: block;
        }

        .navbarmobile .max-w-screen-xl {
            flex-direction: column;
            align-items: center;
        }

        .navbarmobile .max-w-screen-xl .hidden,
        .navbarmobile .max-w-screen-xl .md:block {
            display: block;
        }

        .navbarmobile .max-w-screen-xl .md:w-auto {
            width: 100%;
        }

        .navbarmobile .max-w-screen-xl .font-medium {
            flex-direction: column;
        }

        .navbarmobile .max-w-screen-xl .font-medium li {
            margin: 10px 0;
        }
    }

    .nav:hover::after {
        content: '';
        display: block;
        position: absolute;
        left: 0;
        bottom: 0;
        width: 100%;
        height: 4px; /* Line height */
        background-color: lightstone; /* stone-300 */
    }
</style>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const showButton = document.getElementById("showBreadcrumbs");
        const hideButton = document.getElementById("hideBreadcrumbs");
        const breadcrumbsContainer = document.querySelector(".navbarmobile ul");

        // Function to check if the screen is mobile
        function isMobile() {
            return window.innerWidth <= 767; // Adjust the breakpoint as needed
        }

        // Function to show breadcrumbs
        function showBreadcrumbs() {
            breadcrumbsContainer.style.display = "block";
            showButton.style.display = "none";
            hideButton.style.display = "block";
        }

        // Function to hide breadcrumbs
        function hideBreadcrumbs() {
            breadcrumbsContainer.style.display = "none";
            showButton.style.display = "block";
            hideButton.style.display = "none";
        }

        // Initially hide breadcrumbs on page load for mobile screens
        if (isMobile()) {
            hideBreadcrumbs();
        }

        // Show Breadcrumbs button click event
        showButton.addEventListener("click", showBreadcrumbs);

        // Hide Breadcrumbs button click event
        hideButton.addEventListener("click", hideBreadcrumbs);

        // Update toggle when the window is resized
        window.addEventListener("resize", function() {
            if (isMobile()) {
                showBreadcrumbs(); // Automatically show on mobile
            } else {
                hideBreadcrumbs(); // Automatically hide on larger screens
            }
        });
    });

    const menuButton = document.getElementById('menu-button');
    const dropdownMenu = document.querySelector('.absolute');

    menuButton.addEventListener('click', () => {
        dropdownMenu.classList.toggle('hidden');
    });

    // Close the dropdown when clicking outside
    document.addEventListener('click', (event) => {
        if (!menuButton.contains(event.target) && !dropdownMenu.contains(event.target)) {
        dropdownMenu.classList.add('hidden');
        }
    });

    function toggleContent(sectionId) {
        const section = document.getElementById(sectionId);
        const windowHeight = window.innerHeight;
        const sectionHeight = section.clientHeight;
        const offset = (windowHeight - sectionHeight) / 2;

        window.scrollTo({
            top: section.offsetTop - offset,
            behavior: 'smooth',
            inline: 'center',
        });
    }
</script>
