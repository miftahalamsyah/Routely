<!-- Sidebar Toggle -->
<div class="sticky top-0 mx-auto bg-opacity-75 backdrop-blur-md inset-x-0 z-10 border-b px-4 sm:px-6 md:px-8">
    <div class="flex items-center py-4">
        <!-- Navigation Toggle -->
        <button id="sidebar-toggle" class="text-stone-900 hover:text-gray-800 focus:outline-none focus:text-stone-800" aria-label="Toggle sidebar">
            <span class="sr-only">Toggle Navigation</span>
            <svg class="w-5 h-5" width="16" height="16" fill="#111111" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
            </svg>
        </button>
        <!-- End Navigation Toggle -->

        <!-- Breadcrumb -->
        <ol class="mx-3 flex items-center leading-none whitespace-nowrap" aria-label="Breadcrumb">
            <a href="/dashboard" class="flex items-center text-sm text-stone-900 font-semibold">
                Dashboard
            </a>
            <svg class="flex-shrink-0 mx-3 overflow-visible h-2.5 w-2.5 text-stone-900 " width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M5 1L10.6869 7.16086C10.8637 7.35239 10.8637 7.64761 10.6869 7.83914L5 14" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
            </svg>
            <li class="text-sm font-semibold text-stone-400 truncate" aria-current="page">
                {{ $title }}
            </li>
        </ol>
        <!-- End Breadcrumb -->
    </div>
</div>
<!-- End Sidebar Toggle -->

<!-- Sidebar -->
<div id="sidebar-grey" class="-translate-x-full transition-all duration-300 transform fixed top-0 left-0 right-0 bottom-0 bg-stone-800 opacity-50 z-40 pointer-events-none transition-opacity duration-300"></div>
<div id="logo-sidebar" class="-translate-x-full transition-all duration-300 transform fixed top-1 left-1 bottom-1 z-40 w-64 bg-stone-50 border-r pt-7 pb-10 overflow-y-auto scrollbar-y rounded-3xl shadow-md">
    <div class="px-6 text-center">
        <a class="flex-none text-xl font-semibold" href="/" aria-label="Brand"><span class="w-full text-transparent bg-clip-text bg-gradient-to-r from-violet-700 via-purple-500 to-violet-300 lg:inline">Routely</span></a>
    </div>

    <nav class="hs-accordion-group p-6 w-full flex flex-col flex-wrap">
        <ul class="space-y-1.5">
            <li>
                <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm rounded-lg text-stone-900 hover:bg-stone-100 {{ request()->routeIs('student.index') ? 'bg-violet-700 text-stone-50 hover:bg-violet-700' : '' }}" href="/student">
                    <svg class="w-3.5 h-3.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
                    <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
                    </svg>
                    Dashboard
                </a>
            </li>

            <details class="group [&_summary::-webkit-details-marker]:hidden">
                <summary class="flex cursor-pointer items-center justify-between rounded-lg px-2.5 py-2 text-stone-900 hover:bg-stone-100 {{ in_array($title, ['Pertemuan', 'Tugas', 'Materi']) ? 'bg-violet-700 text-stone-900 hover:bg-violet-700' : '' }}">
                    <div class="flex gap-x-3.5">
                        <svg class="w-3.5 h-3.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M11 6.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-5 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z" />
                            <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z" />
                        </svg>
                    <span class="text-sm font-medium">Pertemuan</span>
                    </div>
                    <span class="shrink-0 transition duration-300 group-open:-rotate-180">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" >
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </span>
                </summary>

                <ul class="mt-2 space-y-1 px-4">
                    <li>
                        <a href="/student/pertemuan" class="block rounded-lg px-6 py-2 text-sm font-medium text-stone-900 hover:bg-stone-100 {{ $title === 'Pertemuan' ? 'bg-violet-700 text-stone-900 hover:bg-violet-700' : '' }}">
                        Pertemuan
                        </a>
                    </li>
                    <li>
                        <a href="/student/materi" class="block rounded-lg px-6 py-2 text-sm font-medium text-stone-900 hover:bg-stone-100 {{ $title === 'Materi' ? 'bg-violet-700 text-stone-900 hover:bg-violet-700' : '' }}">
                        Materi
                        </a>
                    </li>
                    <li>
                        <a href="/student/tugas" class="block rounded-lg px-6 py-2 text-sm font-medium text-stone-900 hover:bg-stone-100 {{ $title === 'Tugas' ? 'bg-violet-700 text-stone-900 hover:bg-violet-700' : '' }}">
                        Tugas
                        </a>
                    </li>
                </ul>
            </details>


            <details class="group [&_summary::-webkit-details-marker]:hidden">
                <summary class="flex cursor-pointer items-center justify-between rounded-lg px-2.5 py-2 text-stone-900 hover:bg-stone-100">
                    <div class="flex gap-x-3.5">
                        <svg class="flex-shrink-0 w-3.5 h-3.5 transition duration-75" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 490 490">
                        <path d="M447.5 205h-55V95h-.024c-.001-2.601-.993-5.159-2.905-7.071l-85-85c-1.913-1.912-4.47-2.904-7.071-2.905V0h-255c-5.523 0-10 4.477-10 10v470c0 5.523 4.477 10 10 10h340c5.523 0 10-4.477 10-10V285h55c5.523 0 10-4.477 10-10v-60c0-5.523-4.477-10-10-10zm-140-170.858L358.358 85H307.5V34.142zM372.501 470H52.5V20h235v75c0 5.523 4.477 10 10 10h75v100h-210v.018a9.967 9.967 0 0 0-4.472 1.038l-60 30a10 10 0 0 0 0 17.888l60 30A9.99 9.99 0 0 0 162.5 285h210.001v185zM152.5 231.18v27.64L124.861 245l27.639-13.82zm240 33.82h-220v-10h220v10zm0-30h-220v-10h220v10zm45 30h-25v-40h25v40z"/><path d="M82.5 55h60v20h-60zm0 40h130v20h-130z"/>
                        </svg>
                        <span class="text-sm font-medium">Tes</span>
                    </div>
                    <span class="shrink-0 transition duration-300 group-open:-rotate-180">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" >
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </span>
                </summary>

                <ul class="mt-2 space-y-1 px-4">
                    <li>
                        <a href="/student/#" class="block rounded-lg px-6 py-2 text-sm font-medium text-stone-900 hover:bg-stone-100">
                        Pre-Test
                        </a>
                    </li>
                    <li>
                        <a href="/student/#" class="block rounded-lg px-6 py-2 text-sm font-medium text-stone-900 hover:bg-stone-100">
                        Harian
                        </a>
                    </li>
                    <li>
                        <a href="/student/#" class="block rounded-lg px-6 py-2 text-sm font-medium text-stone-900 hover:bg-stone-100">
                        Post-Test
                        </a>
                    </li>
                </ul>
            </details>

            <li>
                <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-stone-900 rounded-md hover:bg-stone-100 dark:hover:bg-gray-900 dark:text-slate-400 dark:hover:text-slate-300" href="/student/simulasi">
                    <svg class="flex-shrink-0 w-3.5 h-3.5 transition duration-75" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M15 6H9a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V7a1 1 0 0 0-1-1Zm-1 4h-4V8h4Zm3-8H5a1 1 0 0 0-1 1v18a1 1 0 0 0 1 1h12a3 3 0 0 0 3-3V5a3 3 0 0 0-3-3Zm1 17a1 1 0 0 1-1 1H6V4h11a1 1 0 0 1 1 1Z"/>
                    </svg>
                    Simulasi
                </a>
            </li>

            <li>
                <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-stone-900 hover:bg-stone-100 rounded-lg {{ $title === 'Profil' ? 'bg-violet-700 hover:bg-violet-700' : '' }}" href="/student/profile">
                    <svg class="w-3.5 h-3.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275zM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z"></path>
                    </svg>
                    Profil
                </a>
            </li>

            <form action="/logout" method="post">
                @csrf
                <button type="submit" class="flex w-full items-center gap-x-3.5 py-2 px-2.5 text-sm text-stone-900 rounded-md hover:bg-stone-100">
                    <svg class="flex-shrink-0 w-3.5 h-3.5 transition duration-75" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 8h11m0 0L8 4m4 4-4 4m4-11h3a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-3"/>
                    </svg>
                    Keluar
                </button>
            </form>
        </ul>
    </nav>
</div>
  <!-- End Sidebar -->
<script>
    const sidebarToggle = document.getElementById('sidebar-toggle');
    const logoSidebar = document.getElementById('logo-sidebar');
    const greySidebar = document.getElementById('sidebar-grey');
    // Function to open the sidebar
    function openSidebar() {
        logoSidebar.classList.remove('-translate-x-full');
        greySidebar.classList.remove('-translate-x-full');
        // sidebarToggle.classList.add('hidden');

        // Add an event listener to close the sidebar when clicking outside
        document.addEventListener('click', closeSidebarOutside);
    }
    // Function to close the sidebar
    function closeSidebar() {
        logoSidebar.classList.add('-translate-x-full');
        greySidebar.classList.add('-translate-x-full');
        sidebarToggle.classList.remove('hidden');

        // Remove the event listener when closing the sidebar
        document.removeEventListener('click', closeSidebarOutside);
    }
    // Function to toggle the sidebar and button class
    function toggleSidebar() {
        if (logoSidebar.classList.contains('-translate-x-full') && greySidebar.classList.contains('-translate-x-full')) {
            openSidebar();
        } else {
            closeSidebar();
        }
    }
    // Function to close the sidebar when clicking outside
    function closeSidebarOutside(event) {
        if (!logoSidebar.contains(event.target) && !greySidebar.contains(event.target) && !sidebarToggle.contains(event.target)) {
            closeSidebar();
        }
    }
    // Add a click event listener to the button
    sidebarToggle.addEventListener('click', toggleSidebar);
</script>
