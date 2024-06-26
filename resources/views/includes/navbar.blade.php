<!-- Sidebar Toggle -->
<div class="sticky top-2 rounded-3xl mx-2 bg-stone-50 shadow-md inset-x-0 z-30 border-b px-4 sm:px-6 md:px-8 md:hidden lg:hidden border border-r-4 border-b-4 border-stone-700 ">
    <div class="flex items-center py-4">
    <!-- Navigation Toggle -->
    <button id="sidebar-toggle" class="text-stone-700 hover:text-stone-600 focus:outline-none focus:text-stone-700" aria-label="Toggle sidebar">
        <span class="sr-only">Toggle Navigation</span>
        <svg class="w-5 h-5" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
        </svg>
    </button>
        <!-- End Navigation Toggle -->

        <!-- Breadcrumb -->
        <ol class="mx-3 flex items-center leading-none whitespace-nowrap" aria-label="Breadcrumb">
            <li class="clashdisplaymedium text-sm text-violet-500 truncate" aria-current="page">
                {{ $title }}
            </li>
        </ol>
        <!-- End Breadcrumb -->
    </div>
</div>
<!-- End Sidebar Toggle -->
