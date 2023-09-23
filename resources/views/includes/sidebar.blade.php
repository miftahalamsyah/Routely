<button id="sidebar-toggle" class="fixed top-6 right-5 z-50 px-4 py-2 bg-stone-50 text-violet-800 rounded-full">
    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
    </svg>
</button>

<aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen shadow-3xl xl:shadow-none transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidebar">
    <div class="h-full pl-3 py-5 overflow-y-auto bg-violet-800">
        <a href="/" class="flex items-center my-5 mx-auto text-center justify-center">
            <svg class="" width="20" height="20" fill="#fafafa" viewBox="0 0 512 512"><path d="M512 96c0 50.2-59.1 125.1-84.6 155c-3.8 4.4-9.4 6.1-14.5 5H320c-17.7 0-32 14.3-32 32s14.3 32 32 32h96c53 0 96 43 96 96s-43 96-96 96H139.6c8.7-9.9 19.3-22.6 30-36.8c6.3-8.4 12.8-17.6 19-27.2H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320c-53 0-96-43-96-96s43-96 96-96h39.8c-21-31.5-39.8-67.7-39.8-96c0-53 43-96 96-96s96 43 96 96zM117.1 489.1c-3.8 4.3-7.2 8.1-10.1 11.3l-1.8 2-.2-.2c-6 4.6-14.6 4-20-1.8C59.8 473 0 402.5 0 352c0-53 43-96 96-96s96 43 96 96c0 30-21.1 67-43.5 97.9c-10.7 14.7-21.7 28-30.8 38.5l-.6 .7zM128 352a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zM416 128a32 32 0 1 0 0-64 32 32 0 1 0 0 64z"/></svg>
            <span class="ml-2 self-center text-2xl text-stone-50 font-extrabold whitespace-nowrap">Routely</span>
        </a>
        <ul class="space-y-2 font-medium">
            <li>
                <a href="/student" class="flex items-center p-2 text-stone-100 hover:text-violet-800
                    @active('student.index')
                        bg-gray-100 text-violet-800
                    @endactive
                    rounded-l-3xl hover:bg-gray-100 group">
                    <svg class="w-5 h-5 transition duration-75" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 21">
                        <path d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z"/>
                        <path d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z"/>
                    </svg>
                    <span class="font-bold ml-3">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="/student/materi" class="flex items-center p-2 text-stone-100 hover:text-violet-800
                    @active('student.materi')
                        bg-gray-100 text-violet-800
                    @endactive
                    rounded-l-3xl hover:bg-gray-100 group">
                    <svg class="flex-shrink-0 w-5 h-5 transition duration-75" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M15 6H9a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V7a1 1 0 0 0-1-1Zm-1 4h-4V8h4Zm3-8H5a1 1 0 0 0-1 1v18a1 1 0 0 0 1 1h12a3 3 0 0 0 3-3V5a3 3 0 0 0-3-3Zm1 17a1 1 0 0 1-1 1H6V4h11a1 1 0 0 1 1 1Z"/>
                    </svg>
                    <span class="font-bold flex-1 ml-3 whitespace-nowrap">Materi</span>
                </a>
            </li>
            <li>
                <a href="/student/simulasi" class="flex items-center p-2 text-stone-100 hover:text-violet-800
                    @active('student.simulasi')
                        bg-gray-100 text-violet-800
                    @endactive
                    rounded-l-3xl hover:bg-gray-100 group">
                    <svg class="flex-shrink-0 w-5 h-5 transition duration-75" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M9 2h6v6H9zm7 14h6v6h-6zM2 16h6v6H2zm10-8v4m0 0H5v4m7-4h7v4"/>
                    </svg>
                    <span class="font-bold flex-1 ml-3 whitespace-nowrap">Simulasi</span>
                </a>
            </li>
            <li>
                <a href="/student/test" class="flex items-center p-2 text-stone-100 hover:text-violet-800 rounded-l-3xl hover:bg-gray-100 group">
                    <svg class="flex-shrink-0 w-5 h-5 transition duration-75" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 490 490">
                        <path d="M447.5 205h-55V95h-.024c-.001-2.601-.993-5.159-2.905-7.071l-85-85c-1.913-1.912-4.47-2.904-7.071-2.905V0h-255c-5.523 0-10 4.477-10 10v470c0 5.523 4.477 10 10 10h340c5.523 0 10-4.477 10-10V285h55c5.523 0 10-4.477 10-10v-60c0-5.523-4.477-10-10-10zm-140-170.858L358.358 85H307.5V34.142zM372.501 470H52.5V20h235v75c0 5.523 4.477 10 10 10h75v100h-210v.018a9.967 9.967 0 0 0-4.472 1.038l-60 30a10 10 0 0 0 0 17.888l60 30A9.99 9.99 0 0 0 162.5 285h210.001v185zM152.5 231.18v27.64L124.861 245l27.639-13.82zm240 33.82h-220v-10h220v10zm0-30h-220v-10h220v10zm45 30h-25v-40h25v40z"/><path d="M82.5 55h60v20h-60zm0 40h130v20h-130z"/>
                    </svg>
                    <span class="font-bold flex-1 ml-3 whitespace-nowrap">Test</span>
                </a>
            </li>
            <li>
                <a href="/student" class="flex items-center p-2 text-stone-100 hover:text-violet-800 rounded-l-3xl hover:bg-gray-100 group">
                    <svg class="flex-shrink-0 w-5 h-5 transition duration-75" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 52 52">
                        <path d="M26 4C12.7 4 2.1 13.8 2.1 25.9c0 3.8 1.1 7.4 2.9 10.6.3.5.4 1.1.2 1.7l-3.1 8.5c-.3.8.5 1.5 1.3 1.3l8.6-3.3c.5-.2 1.1-.1 1.7.2 3.6 2 7.9 3.2 12.5 3.2C39.3 48 50 38.3 50 26.1 49.9 13.8 39.2 4 26 4zM14 30c-2.2 0-4-1.8-4-4s1.8-4 4-4 4 1.8 4 4-1.8 4-4 4zm12 0c-2.2 0-4-1.8-4-4s1.8-4 4-4 4 1.8 4 4-1.8 4-4 4zm12 0c-2.2 0-4-1.8-4-4s1.8-4 4-4 4 1.8 4 4-1.8 4-4 4z"/>
                    </svg>
                    <span class="font-bold flex-1 ml-3 whitespace-nowrap">Chat</span>
                </a>
            </li>
            <li>
                <form action="/logout" method="post">
                    @csrf
                    <button type="submit" class="flex items-center p-2 text-stone-100 hover:text-violet-800 rounded-l-3xl hover:bg-gray-100 group w-full text-left">
                            <svg class="flex-shrink-0 w-5 h-5 transition duration-75" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 8h11m0 0L8 4m4 4-4 4m4-11h3a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-3"/>
                            </svg>
                        <span class="font-bold flex-1 ml-3 whitespace-nowrap">Keluar</span>
                    </button>
                </form>
            </li>
        </ul>
    </div>
</aside>
<script>
    const sidebarToggle = document.getElementById('sidebar-toggle');
    const logoSidebar = document.getElementById('logo-sidebar');

    // Function to open the sidebar
    function openSidebar() {
        logoSidebar.classList.remove('-translate-x-full');
        sidebarToggle.classList.add('hidden');
        
        // Add an event listener to close the sidebar when clicking outside
        document.addEventListener('click', closeSidebarOutside);
    }

    // Function to close the sidebar
    function closeSidebar() {
        logoSidebar.classList.add('-translate-x-full');
        sidebarToggle.classList.remove('hidden');
        
        // Remove the event listener when closing the sidebar
        document.removeEventListener('click', closeSidebarOutside);
    }

    // Function to toggle the sidebar and button class
    function toggleSidebar() {
        if (logoSidebar.classList.contains('-translate-x-full')) {
            openSidebar();
        } else {
            closeSidebar();
        }
    }

    // Function to close the sidebar when clicking outside
    function closeSidebarOutside(event) {
        if (!logoSidebar.contains(event.target) && !sidebarToggle.contains(event.target)) {
            closeSidebar();
        }
    }

    // Add a click event listener to the button
    sidebarToggle.addEventListener('click', toggleSidebar);
</script>