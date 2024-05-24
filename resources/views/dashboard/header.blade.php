<div class="top-0 fixed w-full left-0">
    <div class="bg-stone-800 bg-opacity-75 backdrop-blur-sm">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="/" class="flex items-center">
                <svg class="mx-auto" width="20" height="20" fill="#fafafa" viewBox="0 0 512 512"><path d="M512 96c0 50.2-59.1 125.1-84.6 155c-3.8 4.4-9.4 6.1-14.5 5H320c-17.7 0-32 14.3-32 32s14.3 32 32 32h96c53 0 96 43 96 96s-43 96-96 96H139.6c8.7-9.9 19.3-22.6 30-36.8c6.3-8.4 12.8-17.6 19-27.2H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320c-53 0-96-43-96-96s43-96 96-96h39.8c-21-31.5-39.8-67.7-39.8-96c0-53 43-96 96-96s96 43 96 96zM117.1 489.1c-3.8 4.3-7.2 8.1-10.1 11.3l-1.8 2-.2-.2c-6 4.6-14.6 4-20-1.8C59.8 473 0 402.5 0 352c0-53 43-96 96-96s96 43 96 96c0 30-21.1 67-43.5 97.9c-10.7 14.7-21.7 28-30.8 38.5l-.6 .7zM128 352a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zM416 128a32 32 0 1 0 0-64 32 32 0 1 0 0 64z"/></svg>
                <span class="self-center px-2 text-lg font-extrabold whitespace-nowrap text-gray-50">Routely - Guru</span>
            </a>
            <div class="flex md:order-2">
                <div class="relative inline-block text-left">
                    <div class="mr-2">
                        <button type="button" class="inline-flex w-full justify-center gap-x-1.5 rounded-2xl bg-stone-800 border border-stone-600 px-3 py-2 text-sm font-normal text-stone-50 hover:bg-stone-800" id="menu-button" aria-expanded="true" aria-haspopup="true">
                            Hi, {{ explode(' ', Auth::user()->name)[0] }}!
                            <svg class="-mr-1 h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                            </svg>
                        </button>
                    </div>

                    <div class="absolute right-0 z-10 w-56 origin-top-right rounded-xl bg-stone-800 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none hidden border border-stone-600" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                        <div class="py-1" role="none">
                            <a href="/dashboard" class="text-stone-50 block px-4 py-2 text-sm hover:bg-stone-800" role="menuitem" tabindex="-1" id="menu-item-0">Dashboard</a>
                            <a href="/student/profile" class="text-stone-50 block px-4 py-2 text-sm hover:bg-stone-800" role="menuitem" tabindex="-1" id="menu-item-0">Profile</a>
                            <form action="/logout" method="post">
                                @csrf
                                <button type="submit" class="w-full text-left text-stone-50 block px-4 py-2 text-sm hover:bg-stone-800">Keluar</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="navbarmobile hidden">
                    <button id="showBreadcrumbs" class="text-gray-900 font-bold border-gray-350 border hover:bg-stone-800 font-bold rounded-2xl text-sm px-4 py-2 text-center mr-3 md:mr-0"  style="display: none;">
                        <svg height="20px" fill="#fafafa" id="Layer_1" style="enable-background:new 0 0 32 32;" version="1.1" viewBox="0 0 32 32" width="20px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M4,10h24c1.104,0,2-0.896,2-2s-0.896-2-2-2H4C2.896,6,2,6.896,2,8S2.896,10,4,10z M28,14H4c-1.104,0-2,0.896-2,2 s0.896,2,2,2h24c1.104,0,2-0.896,2-2S29.104,14,28,14z M28,22H4c-1.104,0-2,0.896-2,2s0.896,2,2,2h24c1.104,0,2-0.896,2-2 S29.104,22,28,22z"/></svg>
                    </button>
                    <button id="hideBreadcrumbs" class="text-green-900 font-bold border-gray-350 border hover:bg-stone-800 font-bold rounded-2xl text-sm px-4 py-2 text-center mr-3 md:mr-0" style="display: none;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#fafafa" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                    </button>
                </div>
            </div>
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                <ul class="bg-transparent flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg md:flex-row md:space-x-8 md:mt-0 md:border-0">
                    <li>
                        <a class="text-gray-50 nav block relative py-2 pl-3 pr-4 font-bold rounded md:p-0" href="/dashboard">Home</a>
                    </li>
                    <li>
                        <a class="text-gray-50 nav block relative py-2 pl-3 pr-4 font-bold rounded md:p-0" href="/dashboard/pertemuan">Pertemuan</a>
                    </li>
                    <li>
                        <a class="text-gray-50 nav block relative py-2 pl-3 pr-4 font-bold rounded md:p-0" href="/dashboard/materis">Materi</a>
                    </li>
                    <li>
                        <a class="text-gray-50 nav block relative py-2 pl-3 pr-4 font-bold rounded md:p-0" href="/dashboard/tugas">Tugas</a>
                    </li>
                    <li>
                        <a class="text-gray-50 nav block relative py-2 pl-3 pr-4 font-bold rounded md:p-0" href="/dashboard/siswa">Siswa</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumbs for mobile -->
        <div class="navbarmobile hidden">
            <ul class="bg-transparent mx-2 flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg md:flex-row md:space-x-8 md:mt-0 md:border-0">
                <li>
                    <a class="text-gray-50 nav block relative py-2 pl-3 pr-4 font-bold rounded md:p-0" href="/dashboard">Home</a>
                </li>
                <li>
                    <a class="text-gray-50 nav block relative py-2 pl-3 pr-4 font-bold rounded md:p-0" href="/dashboard/siswa">Siswa</a>
                </li>
                <li>
                    <a class="text-gray-50 nav block relative py-2 pl-3 pr-4 font-bold rounded md:p-0" href="/dashboard/pertemuan">Pertemuan</a>
                </li>
                <li>
                    <a class="text-gray-50 nav block relative py-2 pl-3 pr-4 font-bold rounded md:p-0" href="/dashboard/materis">Materi</a>
                </li>
                <li>
                    <a class="text-gray-50 nav block relative py-2 pl-3 pr-4 font-bold rounded md:p-0" href="/dashboard/tugas">Tugas</a>
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
