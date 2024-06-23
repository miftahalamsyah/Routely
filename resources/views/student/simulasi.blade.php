@extends('layouts.student_layout')

@section('content')
<section class="w-full justify-center mx-auto px-4 lg:px-12 min-h-screen">

    {{-- Berbagi Soal --}}
    <!--<div class="rounded-2xl bg-stone-50 p-5 my-4 shadow-md">
    </div>-->

    <!-- Content -->
    <div class="py-12 mb-12 px-4 mx-auto text-right z-20 animate-up w-full">
        <a href="javascript:void(0);" class="px-4 py-2 text-sm font-medium text-white bg-student rounded-xl focus:outline-none focus:bg-violet-900" id="fullscreenLink">Open in Fullscreen</a>
        <iframe src="https://networksimulator.vercel.app/" id="fullscreenIframe" class="rounded-2xl h-screen my-4 shadow-md border border-gray-100" frameborder="0" width="100%"></iframe>
    </div>
</section>

<script>
    // Function to open the iframe in fullscreen mode
    function openIframeFullscreen(iframe) {
        if (iframe.requestFullscreen) {
            iframe.requestFullscreen();
        } else if (iframe.mozRequestFullScreen) { // Firefox
            iframe.mozRequestFullScreen();
        } else if (iframe.webkitRequestFullscreen) { // Chrome, Safari, and Opera
            iframe.webkitRequestFullscreen();
        } else if (iframe.msRequestFullscreen) { // IE/Edge
            iframe.msRequestFullscreen();
        }
    }

    const fullscreenLink = document.getElementById('fullscreenLink');
    const fullscreenIframe = document.getElementById('fullscreenIframe');

    // Add a click event listener to the link
    fullscreenLink.addEventListener('click', function() {
        openIframeFullscreen(fullscreenIframe);
    });
</script>

@endsection
