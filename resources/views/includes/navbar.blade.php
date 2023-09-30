{{-- desktop navbar --}}
<div class="md:block hidden">
    <div class="justify-center mx-auto bg-opacity-75 backdrop-blur-sm px-2">
        <div class="flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="/" class="flex items-center">
                <svg class="mx-auto" width="20" height="20" fill="#5c578c" viewBox="0 0 512 512"><path d="M512 96c0 50.2-59.1 125.1-84.6 155c-3.8 4.4-9.4 6.1-14.5 5H320c-17.7 0-32 14.3-32 32s14.3 32 32 32h96c53 0 96 43 96 96s-43 96-96 96H139.6c8.7-9.9 19.3-22.6 30-36.8c6.3-8.4 12.8-17.6 19-27.2H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320c-53 0-96-43-96-96s43-96 96-96h39.8c-21-31.5-39.8-67.7-39.8-96c0-53 43-96 96-96s96 43 96 96zM117.1 489.1c-3.8 4.3-7.2 8.1-10.1 11.3l-1.8 2-.2-.2c-6 4.6-14.6 4-20-1.8C59.8 473 0 402.5 0 352c0-53 43-96 96-96s96 43 96 96c0 30-21.1 67-43.5 97.9c-10.7 14.7-21.7 28-30.8 38.5l-.6 .7zM128 352a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zM416 128a32 32 0 1 0 0-64 32 32 0 1 0 0 64z"/></svg>
                <span class="self-center text-student px-2 text-xl font-extrabold whitespace-nowrap">Routely</span>
            </a>
            <div class="flex md:order-2">
            @auth
                <div class="relative inline-block text-left">
                    <div class="mr-2">
                        <button type="button" class="inline-flex w-full justify-center rounded-lg bg-violet-200 px-2 py-1 text-sm font-semibold text-student border hover:bg-violet-300" id="menu-button" aria-expanded="true" aria-haspopup="true">
                            <p class="my-auto">
                                Hi, {{ explode(' ', Auth::user()->name)[0] }}!
                            </p>
                            <svg class="-mr-1 h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                            </svg>
                        </button>
                    </div>
                    <div class="absolute right-0 z-10 w-56 origin-top-right rounded-xl bg-gray-50 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none hidden" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                        <div class="py-1" role="none">
                            <a href="/student" class="text-gray-700 block px-4 py-2 text-sm hover:bg-gray-100" role="menuitem" tabindex="-1" id="menu-item-0">Dashboard</a>
                            <a href="/student/profile" class="text-gray-700 block px-4 py-2 text-sm hover:bg-gray-100" role="menuitem" tabindex="-1" id="menu-item-0">Profile</a>
                            <form action="/logout" method="post">
                                @csrf
                                <button type="submit" class="w-full text-left text-gray-700 block px-4 py-2 text-sm hover:bg-gray-100">Keluar</button>
                            </form>
                        </div>
                    </div>
                </div>

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
                <div class="navbarmobile hidden">
                    <button id="showBreadcrumbs" class="bg-gray-50 text-gray-900 font-semibold border-gray-350 border hover:bg-gray-100 font-semibold rounded-lg text-sm px-2 py-1 text-center mr-3 md:mr-0"  style="display: none;">
                        <svg height="20px" id="Layer_1" style="enable-background:new 0 0 32 32;" version="1.1" viewBox="0 0 32 32" width="20px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M4,10h24c1.104,0,2-0.896,2-2s-0.896-2-2-2H4C2.896,6,2,6.896,2,8S2.896,10,4,10z M28,14H4c-1.104,0-2,0.896-2,2 s0.896,2,2,2h24c1.104,0,2-0.896,2-2S29.104,14,28,14z M28,22H4c-1.104,0-2,0.896-2,2s0.896,2,2,2h24c1.104,0,2-0.896,2-2 S29.104,22,28,22z"/></svg>
                    </button>
                    <button id="hideBreadcrumbs" class="bg-gray-50 text-green-900 font-semibold border-gray-350 border hover:bg-gray-100 font-semibold rounded-lg text-sm px-2 py-1 text-center mr-3 md:mr-0" style="display: none;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                    </button>
                </div>
            </div>
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                <ul class="bg-transparent flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg md:flex-row md:space-x-8 md:mt-0 md:border-0">
                    <li>
                        @active('student.index')
                            <a class="nav block relative py-2 pl-3 pr-4 font-semibold rounded md:p-0 active text-gray-900" href="/student">Dashboard<div class="absolute inset-x-0 bottom-0 h-1 bg-student"></div></a>
                        @else
                            <a class="nav block relative py-2 pl-3 pr-4 font-semibold rounded md:p-0 text-gray-900" href="/student">Dashboard</a>
                        @endactive
                    </li>
                    <li>
                        @active('student.pertemuan')
                            <a class="nav block relative py-2 pl-3 pr-4 font-semibold rounded md:p-0 active text-gray-900" href="/student/pertemuan">Pertemuan<div class="absolute inset-x-0 bottom-0 h-1 bg-student"></div></a>
                        @else
                            <a class="nav block relative py-2 pl-3 pr-4 font-semibold rounded md:p-0 text-gray-900" href="/student/pertemuan">Pertemuan</a>
                        @endactive
                    </li>
                    <li>
                        @active('student.simulasi')
                            <a class="nav block relative py-2 pl-3 pr-4 font-semibold rounded md:p-0 active text-gray-900" href="/student/simulasi">Simulasi<div class="absolute inset-x-0 bottom-0 h-1 bg-student"></div></a>
                        @else
                            <a class="nav block relative py-2 pl-3 pr-4 font-semibold rounded md:p-0 text-gray-900" href="/student/simulasi">Simulasi</a>
                        @endactive
                    </li>
                    <li>
                        @active('student.tes')
                            <a class="nav block relative py-2 pl-3 pr-4 font-semibold rounded md:p-0 active text-gray-900" href="/student/tes">Tes<div class="absolute inset-x-0 bottom-0 h-1 bg-student"></div></a>
                        @else
                            <a class="nav block relative py-2 pl-3 pr-4 font-semibold rounded md:p-0 text-gray-900" href="/student/tes">Tes</a>
                        @endactive
                    </li>
                    <li>
                        @active('pages.bantuan')
                            <a class="nav block relative py-2 pl-3 pr-4 font-semibold rounded md:p-0 active text-gray-900" href="/bantuan">Bantuan<div class="absolute inset-x-0 bottom-0 h-1 bg-student"></div></a>
                        @else
                            <a class="nav block relative py-2 pl-3 pr-4 font-semibold rounded md:p-0 text-gray-900" href="/bantuan">Bantuan</a>
                        @endactive
                    </li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumbs for mobile -->
        <div class="navbarmobile hidden">
            <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-stone-50 md:hidden">
                <li>
                    @active('student.index')
                        <a class="nav block relative py-2 pl-3 pr-4 font-semibold rounded md:p-0 active text-gray-900" href="/student">Dashboard<div class="absolute inset-x-0 bottom-0 h-1 bg-student"></div></a>
                    @else
                        <a class="nav block relative py-2 pl-3 pr-4 font-semibold rounded md:p-0 text-gray-900" href="/student">Dashboard</a>
                    @endactive
                </li>
                <li>
                    @active('student.pertemuan')
                        <a class="nav block relative py-2 pl-3 pr-4 font-semibold rounded md:p-0 active text-gray-900" href="/student/pertemuan">Pertemuan<div class="absolute inset-x-0 bottom-0 h-1 bg-student"></div></a>
                    @else
                        <a class="nav block relative py-2 pl-3 pr-4 font-semibold rounded md:p-0 text-gray-900" href="/student/pertemuan">Pertemuan</a>
                    @endactive
                </li>
                <li>
                    @active('student.simulasi')
                        <a class="nav block relative py-2 pl-3 pr-4 font-semibold rounded md:p-0 active text-gray-900" href="/student/simulasi">Simulasi<div class="absolute inset-x-0 bottom-0 h-1 bg-student"></div></a>
                    @else
                        <a class="nav block relative py-2 pl-3 pr-4 font-semibold rounded md:p-0 text-gray-900" href="/student/simulasi">Simulasi</a>
                    @endactive
                </li>
                <li>
                    @active('student.tes')
                        <a class="nav block relative py-2 pl-3 pr-4 font-semibold rounded md:p-0 active text-gray-900" href="/student/tes">Tes<div class="absolute inset-x-0 bottom-0 h-1 bg-student"></div></a>
                    @else
                        <a class="nav block relative py-2 pl-3 pr-4 font-semibold rounded md:p-0 text-gray-900" href="/student/tes">Tes</a>
                    @endactive
                </li>
                <li>
                    @active('pages.bantuan')
                        <a class="nav block relative py-2 pl-3 pr-4 font-semibold rounded md:p-0 active text-gray-900" href="/bantuan">Bantuan<div class="absolute inset-x-0 bottom-0 h-1 bg-student"></div></a>
                    @else
                        <a class="nav block relative py-2 pl-3 pr-4 font-semibold rounded md:p-0 text-gray-900" href="/bantuan">Bantuan</a>
                    @endactive
                </li>
            </ul>
        </div>
    </div>
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
        background-color: lightgray; /* Gray-300 */
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
</script>
