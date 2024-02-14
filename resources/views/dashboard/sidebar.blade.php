<!-- Sidebar Toggle -->
<div class="sticky top-0 bg-stone-800 inset-x-0 z-1 border-b border-stone-700 px-4 sm:px-6 md:px-8 lg:hidden">
    <div class="flex items-center py-4">
        <!-- Navigation Toggle -->
        <button id="sidebar-toggle" class="text-stone-500 hover:text-stone-400 focus:outline-none focus:text-stone-400" aria-label="Toggle sidebar">
            <span class="sr-only">Toggle Navigation</span>
            <svg class="w-5 h-5" width="16" height="16" fill="#ffffff" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
            </svg>
        </button>
        <!-- End Navigation Toggle -->

        <!-- Breadcrumb -->
        <ol class="ml-3 flex items-center whitespace-nowrap min-w-0" aria-label="Breadcrumb">
            <a href="/dashboard" class="flex items-center text-sm text-stone-100 dark:text-stone-400">
                Dashboard
            </a>
            <svg class="flex-shrink-0 mx-3 overflow-visible h-2.5 w-2.5 text-stone-400 dark:text-stone-100" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M5 1L10.6869 7.16086C10.8637 7.35239 10.8637 7.64761 10.6869 7.83914L5 14" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
            </svg>
            <li class="text-sm font-semibold text-stone-100 truncate" aria-current="page">
                {{ $title }}
            </li>
        </ol>
        <!-- End Breadcrumb -->
    </div>
</div>
<!-- End Sidebar Toggle -->

<!-- Sidebar -->
<div id="logo-sidebar" class="-translate-x-full transition-all duration-300 transform fixed top-0 left-0 bottom-0 z-10 w-64 bg-stone-800 border-r border-stone-700 pt-7 pb-10 overflow-y-auto scrollbar-y lg:block lg:translate-x-0 lg:right-auto lg:bottom-0">
    <div class="px-6 text-center">
        <a class="flex-none text-xl font-semibold" href="/" aria-label="Brand"><span class="w-full text-transparent bg-clip-text bg-gradient-to-r from-violet-700 via-purple-500 to-violet-300 lg:inline">Routely</span></a>
    </div>

    <nav class="hs-accordion-group p-6 w-full flex flex-col flex-wrap">
        <ul class="space-y-1.5">
            <li>
                <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm rounded-md text-stone-100 hover:bg-stone-700 {{ request()->routeIs('dashboard.index') ? 'bg-violet-700 text-stone-100 hover:bg-violet-700' : '' }}" href="/dashboard">
                    <svg class="w-3.5 h-3.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
                    <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
                    </svg>
                    Dashboard
                </a>
            </li>

            <details class="group [&_summary::-webkit-details-marker]:hidden">
                <summary class="flex cursor-pointer items-center justify-between rounded-lg px-2.5 py-2 text-stone-100 hover:bg-stone-700 {{ in_array($title, ['Pertemuan', 'Tugas', 'Materi', 'Refleksi', 'Hasil Pengerjaan Tugas', 'Apersepsi']) ? 'bg-violet-700 text-stone-100 hover:bg-violet-700' : '' }}">
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
                        <a href="/dashboard/pertemuan" class="block rounded-lg px-6 py-2 text-sm font-medium text-stone-100 hover:bg-stone-700 {{ $title === 'Pertemuan' ? 'bg-violet-700 text-stone-100 hover:bg-violet-700' : '' }}">
                        Pertemuan
                        </a>
                    </li>
                    <li>
                        <a href="/dashboard/materis" class="block rounded-lg px-6 py-2 text-sm font-medium text-stone-100 hover:bg-stone-700 {{ $title === 'Materi' ? 'bg-violet-700 text-stone-100 hover:bg-violet-700' : '' }}">
                        Materi
                        </a>
                    </li>
                    <li>
                        <a href="/dashboard/tugas" class="block rounded-lg px-6 py-2 text-sm font-medium text-stone-100 hover:bg-stone-700 {{ in_array($title, ['Tugas', 'Hasil Pengerjaan Tugas', 'Tambah Tugas']) ? 'bg-violet-700 text-stone-100 hover:bg-violet-700' : '' }}">
                        Tugas
                        </a>
                    </li>
                    <li>
                        <a href="/dashboard/apersepsi" class="block rounded-lg px-6 py-2 text-sm font-medium text-stone-100 hover:bg-stone-700 {{ $title === 'Apersepsi' ? 'bg-violet-700 text-stone-100 hover:bg-violet-700' : '' }}">
                        Apersepsi
                        </a>
                    </li>
                    <li>
                        <a href="/dashboard/refleksi" class="block rounded-lg px-6 py-2 text-sm font-medium text-stone-100 hover:bg-stone-700 {{ $title === 'Refleksi' ? 'bg-violet-700 text-stone-100 hover:bg-violet-700' : '' }}">
                        Refleksi
                        </a>
                    </li>
                </ul>
            </details>


            <details class="group [&_summary::-webkit-details-marker]:hidden">
                <summary class="flex cursor-pointer items-center justify-between rounded-lg px-2.5 py-2 text-stone-100 hover:bg-stone-700 {{ in_array($title, ['Kategori Tes', 'Tambah Kategori Tes', 'PreTest', 'Tambah Soal Pretest', 'Tambah Soal Posttest', 'Tes Harian', 'PostTest', 'Edit Soal Pretest', 'Edit Soal Posttest', 'Import Soal Pretest', 'Import Soal Posttest']) ? 'bg-violet-700 text-stone-100 hover:bg-violet-700' : '' }}">
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
                        <a href="/dashboard/kategori-tes" class="block rounded-lg px-6 py-2 text-sm font-medium text-stone-100 hover:bg-stone-700 {{ in_array($title, ['Kategori Tes', 'Tambah Kategori Tes', 'Edit Kategori Tes']) ? 'bg-violet-700 text-stone-100 hover:bg-violet-700' : '' }}">
                        Kategori Tes
                        </a>
                    </li>
                    <li>
                        <a href="/dashboard/pretest" class="block rounded-lg px-6 py-2 text-sm font-medium text-stone-100 hover:bg-stone-700  {{ in_array($title, ['PreTest', 'Tambah Soal Pretest', 'Edit Soal Pretest', 'Import Soal Pretest']) ? 'bg-violet-700 text-stone-100 hover:bg-violet-700' : '' }}">
                        PreTest
                        </a>
                    </li>
                    <li>
                        <a href="/dashboard/posttest" class="block rounded-lg px-6 py-2 text-sm font-medium text-stone-100 hover:bg-stone-700 {{ in_array($title, ['PostTest', 'Tambah Soal Posttest', 'Edit Soal Posttest']) ? 'bg-violet-700 text-stone-100 hover:bg-violet-700' : '' }}">
                        PostTest
                        </a>
                    </li>
                    <li>
                        <a href="/dashboard/#" class="block rounded-lg px-6 py-2 text-sm font-medium text-stone-100 hover:bg-stone-700">
                        Harian
                        </a>
                    </li>
                </ul>
            </details>

            <li>
                <a class="rounded-xl flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-stone-100 hover:bg-stone-700 dark:hover:bg-gray-900 dark:text-slate-400 dark:hover:text-slate-300" href="javascript:;">
                    <svg class="flex-shrink-0 w-3.5 h-3.5 transition duration-75" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M15 6H9a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V7a1 1 0 0 0-1-1Zm-1 4h-4V8h4Zm3-8H5a1 1 0 0 0-1 1v18a1 1 0 0 0 1 1h12a3 3 0 0 0 3-3V5a3 3 0 0 0-3-3Zm1 17a1 1 0 0 1-1 1H6V4h11a1 1 0 0 1 1 1Z"/>
                    </svg>
                    Simulasi
                </a>
            </li>

            <hr class="border-y border-stone-600 flex-grow">

            <li>
                <a class="rounded-xl flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-stone-100 hover:bg-stone-700 {{ in_array($title, ['Siswa', 'Tambah Siswa', 'Edit Siswa']) ? 'bg-violet-700 text-stone-100 hover:bg-violet-700' : '' }}" href="/dashboard/siswa">
                    <svg width="16" height="16" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg" stroke-width="5" stroke="currentColor" fill="none">
                        <path d="M48.61 56.07A16.61 16.61 0 0 0 32 39.45a16.61 16.61 0 0 0-16.61 16.62ZM39.41 28a8.11 8.11 0 0 1-8.25 8.1 8.28 8.28 0 0 1-7.95-8.37V16.45a.06.06 0 0 1 .05-.06 60.56 60.56 0 0 1 8.27-.68 54.93 54.93 0 0 1 7.91.68.06.06 0 0 1 .06.06Z"/><path d="m23.21 20.14-8.27-3.8a.08.08 0 0 1 0-.13l16.38-7.82h.06l16.33 7.74a.07.07 0 0 1 0 .12l-8.21 3.89m-16.29 4.21h-2.32s-2 0-2 3.1c0 2.86 2 2.86 2 2.86h2.72m15.8-5.6h2.32s2 0 2 3.09c0 2.86-2 2.86-2 2.86H39m7.85 2.49V16.72"/><circle cx="46.85" cy="35.28" r="2.13"/><path d="M39.5 23a42.89 42.89 0 0 0-7.95-.69 40.85 40.85 0 0 0-8.34.69"/>
                    </svg>
                    Siswa
                </a>
            </li>

            <li>
                <a class="rounded-xl flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-stone-100 hover:bg-stone-700 {{ $title === 'Kelompok' ? 'bg-violet-700 text-stone-100 hover:bg-violet-700' : '' }}" href="/dashboard/kelompok">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 1200 1200" fill="currentColor" xml:space="preserve" class="">
                        <path d="M596.847 188.488c-103.344 0-187.12 97.81-187.12 218.465 0 83.678 40.296 156.352 99.468 193.047l-68.617 31.801-182.599 84.688c-17.64 8.821-26.444 23.778-26.444 44.947v201.102c1.451 25.143 16.537 48.577 40.996 48.974h649.62c27.924-2.428 42.05-24.92 42.325-48.974V761.436c0-21.169-8.804-36.126-26.443-44.947l-175.988-84.688-73.138-34.65c56.744-37.521 95.061-108.624 95.061-190.197-.001-120.656-83.778-218.466-187.121-218.466zm-301.824 76.824c-44.473 1.689-79.719 20.933-106.497 51.596-29.62 36.918-44.06 80.75-44.339 124.354 1.819 64.478 30.669 125.518 82.029 157.446L21.163 693.997C7.05 699.289 0 711.636 0 731.041v161.398c1.102 21.405 12.216 39.395 33.055 39.703h136.284V761.436c2.255-45.639 23.687-82.529 62.196-100.531l136.247-64.817c10.584-6.175 20.731-14.568 30.433-25.152-56.176-86.676-63.977-190.491-27.773-281.801-23.547-14.411-50.01-23.672-75.419-23.823zm608.586 0c-29.083.609-55.96 11.319-78.039 26.444 35.217 92.137 25.503 196.016-26.482 276.52 11.467 13.23 23.404 23.377 35.753 30.434l130.965 62.195c39.897 21.881 60.47 59.098 60.866 100.532v170.707h140.235c23.063-1.991 32.893-20.387 33.093-39.704V731.042c0-17.641-7.05-29.987-21.163-37.045l-202.431-96.618c52.498-38.708 78.859-96.72 79.369-156.117-1.396-47.012-15.757-90.664-44.339-124.354-29.866-32.399-66.91-51.253-107.827-51.596z"/>
                    </svg>
                    Kelompok
                </a>
            </li>

            <hr class="border-y border-stone-600 flex-grow">

            <li>
                <a class="rounded-xl flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-stone-100 hover:bg-stone-700 {{ in_array($title, ['Nilai', 'Nilai Pretest', 'Nilai Posttest', 'Isi Nilai Tugas', 'Edit Nilai Tugas', 'Nilai Tugas']) ? 'bg-violet-700 text-stone-100 hover:bg-violet-700' : '' }}"" href="/dashboard/nilai">
                    <svg width="16" height="16" viewBox="0 0 1024 1024" class="icon" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M905.92 237.76a32 32 0 0 0-52.48 36.48A416 416 0 1 1 96 512a418.56 418.56 0 0 1 297.28-398.72 32 32 0 1 0-18.24-61.44A480 480 0 1 0 992 512a477.12 477.12 0 0 0-86.08-274.24z" fill="currentColor"/><path d="M630.72 113.28a413.76 413.76 0 0 1 137.28 72 32 32 0 0 0 39.68-50.24 476.8 476.8 0 0 0-160-83.2 32 32 0 0 0-18.24 61.44zM489.28 86.72a36.8 36.8 0 0 0 10.56 6.72 30.08 30.08 0 0 0 24.32 0 37.12 37.12 0 0 0 10.56-6.72A32 32 0 0 0 544 64a33.6 33.6 0 0 0-9.28-22.72A32 32 0 0 0 505.6 32a20.8 20.8 0 0 0-5.76 1.92 23.68 23.68 0 0 0-5.76 2.88l-4.8 3.84a32 32 0 0 0-6.72 10.56A32 32 0 0 0 480 64a32 32 0 0 0 2.56 12.16 37.12 37.12 0 0 0 6.72 10.56zM355.84 313.6a36.8 36.8 0 0 0-13.12 18.56L235.2 645.12a37.44 37.44 0 0 0 2.56 35.52 32 32 0 0 0 24.96 10.56 27.84 27.84 0 0 0 17.28-5.76A43.84 43.84 0 0 0 290.56 672a100.16 100.16 0 0 0 7.04-15.36l4.8-12.8 17.6-49.92h118.72l24.96 69.76a45.76 45.76 0 0 0 10.88 19.2 28.8 28.8 0 0 0 20.48 8.32h2.24a27.52 27.52 0 0 0 27.84-15.68 41.28 41.28 0 0 0 0-29.44l-107.84-313.6a36.8 36.8 0 0 0-13.44-19.2 44.16 44.16 0 0 0-48 .32zm24.32 96 41.6 125.44h-83.2zM594.88 544a66.56 66.56 0 0 0 25.6 4.16h62.4v78.72a29.12 29.12 0 0 0 32 32 26.24 26.24 0 0 0 27.2-16.32 73.28 73.28 0 0 0 4.16-26.24v-66.88h73.6a27.84 27.84 0 0 0 29.44-32 26.56 26.56 0 0 0-16-27.2 64 64 0 0 0-23.04-4.16h-64v-75.84a28.16 28.16 0 0 0-32-30.08 26.56 26.56 0 0 0-27.2 15.68 64 64 0 0 0-4.16 24v66.88h-62.72a69.44 69.44 0 0 0-25.6 4.16 26.56 26.56 0 0 0-15.68 27.2 25.92 25.92 0 0 0 16 25.92z"/>
                    </svg>
                    Nilai
                </a>
            </li>

            <li>
                <a class="rounded-xl flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-stone-100 hover:bg-stone-700 {{ in_array($title, ['Lencana', 'Tambah Lencana', 'Edit Lencana']) ? 'bg-violet-700 text-stone-100 hover:bg-violet-700' : '' }}" href="/dashboard/lencana">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18.5 8.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M8.5 14v8l3.818-3 3.182 3v-8" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    Lencana
                </a>
            </li>

            <form action="/logout" method="post">
                @csrf
                <button type="submit" class="flex w-full items-center gap-x-3.5 py-2 px-2.5 text-sm text-stone-100 rounded-md hover:bg-stone-700">
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
    // Function to open the sidebar
    function openSidebar() {
        logoSidebar.classList.remove('-translate-x-full');
        // sidebarToggle.classList.add('hidden');

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
