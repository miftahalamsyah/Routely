<nav class="top-0 fixed w-full z-20 left-0 border-b border-gray-200">
    <div class="bg-white bg-opacity-75 backdrop-blur-md">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="/" class="flex items-center">
                <svg class="mx-auto" width="20" height="20" fill="#1c1917" viewBox="0 0 512 512"><path d="M512 96c0 50.2-59.1 125.1-84.6 155c-3.8 4.4-9.4 6.1-14.5 5H320c-17.7 0-32 14.3-32 32s14.3 32 32 32h96c53 0 96 43 96 96s-43 96-96 96H139.6c8.7-9.9 19.3-22.6 30-36.8c6.3-8.4 12.8-17.6 19-27.2H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320c-53 0-96-43-96-96s43-96 96-96h39.8c-21-31.5-39.8-67.7-39.8-96c0-53 43-96 96-96s96 43 96 96zM117.1 489.1c-3.8 4.3-7.2 8.1-10.1 11.3l-1.8 2-.2-.2c-6 4.6-14.6 4-20-1.8C59.8 473 0 402.5 0 352c0-53 43-96 96-96s96 43 96 96c0 30-21.1 67-43.5 97.9c-10.7 14.7-21.7 28-30.8 38.5l-.6 .7zM128 352a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zM416 128a32 32 0 1 0 0-64 32 32 0 1 0 0 64z"/></svg>
                <span class="self-center px-2 text-lg font-extrabold whitespace-nowrap dark:text-white">Routely</span>
            </a>
            <div class="flex md:order-2">
                <a href="/login">
                    <button type="button" class="text-gray-900 font-bold border-gray-350 border hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center mr-3 md:mr-0">Login</button>
                </a>
            </div>
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                    <li>
                        <a href="/" class="block py-2 pl-3 pr-4 font-bold text-gray-900 rounded hover:underline md:hover:bg-transparent md:hover:text-violet-400 md:p-0">Home</a>
                    </li>
                    <li>
                        <a href="/materi" class="block py-2 pl-3 pr-4 font-bold text-gray-900 rounded hover:underline md:hover:bg-transparent md:hover:text-violet-400 md:p-0">Materi</a>
                    </li>
                    <li>
                        <a href="/test" class="block py-2 pl-3 pr-4 font-bold text-gray-900 rounded hover:underline md:hover:bg-transparent md:hover:text-violet-400 md:p-0">Test</a>
                    </li>
                    <li>
                        <a href="/simulasi" class="block py-2 pl-3 pr-4 font-bold text-gray-900 rounded hover:underline md:hover:bg-transparent md:hover:text-violet-400 md:p-0">Simulasi</a>
                    </li>
                    <li>
                        <a href="/bantuan" class="block py-2 pl-3 pr-4 font-bold text-gray-900 rounded hover:underline md:hover:bg-transparent md:hover:text-violet-400 md:p-0">Bantuan</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>


<style>
    @media (max-width: 767px) {
        .navbarmobile {
            justify-content: center;
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
</style>
