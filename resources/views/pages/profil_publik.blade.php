@extends('layouts.student_layout')

@section('content')
<section class="mt-12 justify-center px-5 text-center min-h-screen">
    <div class="mx-auto flex items-center justify-center w-16 h-16 rounded-full bg-gradient-to-tl from-violet-500 to-orange-500 shadow-soft-2xl">
        <p class="text-stone-50 text-3xl font-semibold">{{ substr(Auth::user()->name, 0, 1) }}{{ substr(strrchr(Auth::user()->name, ' '), 1, 1) }}</p>
    </div>
    <h1 class="mt-8 text-4xl text-stone-700">{{ $name }}</h1>
    <h2 class="mb-8 text-md text-stone-700">{{ $email }}</h2>
    <p class="text-md text-stone-700">Profil Publik anda dapat diakses melalui</p>
    <p class="text-md text-stone-700">http://127.0.0.1:8000/profil_publik/{{ $name }}</p>

    <!--badges-->
    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 mt-12">
        <!--badges card-->
        <div class="py-4 px-8 relative flex flex-col break-words bg-stone-50 border border-stone-300 rounded-2xl">
            <span class="tracking-normal leading-none font-bold text-xl py-2 w-full text-transparent bg-clip-text bg-gradient-to-r from-violet-700 via-purple-500 to-violet-300 lg:inline">Routely</span>
            <p class="my-2 font-semibold text-md text-stone-700">Berpikir Komputasi : Menguasai Dekomposisi</p>
            <div class="flex justify-between items-center">
                <hr class="flex-grow border-t border-stone-300 mx-4"></hr>
                <svg class="mx-auto" width="20" height="20" fill="blue" viewBox="0 0 56 56" xmlns="http://www.w3.org/2000/svg">
                    <path d="M23.664 52.398c2.953 2.977 5.695 2.954 8.649 0l3.609-3.586c.375-.351.703-.492 1.195-.492h5.063c4.195 0 6.14-1.922 6.14-6.14v-5.063c0-.492.141-.82.492-1.195l3.563-3.61c3-2.953 2.976-5.695 0-8.648l-3.563-3.61c-.351-.35-.492-.702-.492-1.171v-5.086c0-4.172-1.922-6.14-6.14-6.14h-5.063c-.492 0-.82-.118-1.195-.47l-3.61-3.585c-2.953-2.977-5.695-2.954-8.648 0l-3.61 3.586c-.35.351-.702.468-1.171.468h-5.086c-4.195 0-6.14 1.922-6.14 6.14v5.087c0 .469-.118.82-.47 1.172l-3.585 3.61c-2.977 2.952-2.954 5.694 0 8.648l3.586 3.609c.351.375.468.703.468 1.195v5.063c0 4.195 1.946 6.14 6.14 6.14h5.087c.469 0 .82.141 1.172.492Zm.375-12.609c-.726 0-1.195-.234-1.547-.633l-7.828-8.695a2.027 2.027 0 0 1-.515-1.336c0-1.102.843-1.922 2.039-1.922.632 0 1.101.211 1.523.656l6.21 6.868 12.071-16.993c.469-.68.938-.96 1.758-.96 1.148 0 1.969.843 1.969 1.945 0 .398-.164.867-.422 1.242L25.633 39.063c-.352.445-.89.726-1.594.726Z"/>
                </svg>
                <hr class="flex-grow border-t border-stone-300 mx-4"></hr>
            </div>
            <p class="mt-2 text-xs text-stone-400 font-semibold">COMPLETION BADGE</p>
        </div>
        <!--badges card end-->
        <div class="py-4 px-8 relative flex flex-col break-words bg-stone-50 border border-stone-300 rounded-2xl">
            <span class="tracking-normal leading-none font-bold text-xl py-2 w-full text-transparent bg-clip-text bg-gradient-to-r from-violet-700 via-purple-500 to-violet-300 lg:inline">Routely</span>
            <p class="my-2 font-semibold text-md text-stone-700">Berpikir Komputasi : Menguasai Abstraksi</p>
            <div class="flex justify-between items-center">
                <hr class="flex-grow border-t border-stone-300 mx-4"></hr>
                <svg class="mx-auto" width="20" height="20" fill="blue" viewBox="0 0 56 56" xmlns="http://www.w3.org/2000/svg">
                    <path d="M23.664 52.398c2.953 2.977 5.695 2.954 8.649 0l3.609-3.586c.375-.351.703-.492 1.195-.492h5.063c4.195 0 6.14-1.922 6.14-6.14v-5.063c0-.492.141-.82.492-1.195l3.563-3.61c3-2.953 2.976-5.695 0-8.648l-3.563-3.61c-.351-.35-.492-.702-.492-1.171v-5.086c0-4.172-1.922-6.14-6.14-6.14h-5.063c-.492 0-.82-.118-1.195-.47l-3.61-3.585c-2.953-2.977-5.695-2.954-8.648 0l-3.61 3.586c-.35.351-.702.468-1.171.468h-5.086c-4.195 0-6.14 1.922-6.14 6.14v5.087c0 .469-.118.82-.47 1.172l-3.585 3.61c-2.977 2.952-2.954 5.694 0 8.648l3.586 3.609c.351.375.468.703.468 1.195v5.063c0 4.195 1.946 6.14 6.14 6.14h5.087c.469 0 .82.141 1.172.492Zm.375-12.609c-.726 0-1.195-.234-1.547-.633l-7.828-8.695a2.027 2.027 0 0 1-.515-1.336c0-1.102.843-1.922 2.039-1.922.632 0 1.101.211 1.523.656l6.21 6.868 12.071-16.993c.469-.68.938-.96 1.758-.96 1.148 0 1.969.843 1.969 1.945 0 .398-.164.867-.422 1.242L25.633 39.063c-.352.445-.89.726-1.594.726Z"/>
                </svg>
                <hr class="flex-grow border-t border-stone-300 mx-4"></hr>
            </div>
            <p class="mt-2 text-xs text-stone-400 font-semibold">COMPLETION BADGE</p>
        </div>
        <div class="py-4 px-8 relative flex flex-col break-words bg-stone-50 border border-stone-300 rounded-2xl">
            <span class="tracking-normal leading-none font-bold text-xl py-2 w-full text-transparent bg-clip-text bg-gradient-to-r from-violet-700 via-purple-500 to-violet-300 lg:inline">Routely</span>
            <p class="my-2 font-semibold text-md text-stone-700">Berpikir Komputasi : Menguasai Pengenalan Pola</p>
            <div class="flex justify-between items-center">
                <hr class="flex-grow border-t border-stone-300 mx-4"></hr>
                <svg class="mx-auto" width="20" height="20" fill="blue" viewBox="0 0 56 56" xmlns="http://www.w3.org/2000/svg">
                    <path d="M23.664 52.398c2.953 2.977 5.695 2.954 8.649 0l3.609-3.586c.375-.351.703-.492 1.195-.492h5.063c4.195 0 6.14-1.922 6.14-6.14v-5.063c0-.492.141-.82.492-1.195l3.563-3.61c3-2.953 2.976-5.695 0-8.648l-3.563-3.61c-.351-.35-.492-.702-.492-1.171v-5.086c0-4.172-1.922-6.14-6.14-6.14h-5.063c-.492 0-.82-.118-1.195-.47l-3.61-3.585c-2.953-2.977-5.695-2.954-8.648 0l-3.61 3.586c-.35.351-.702.468-1.171.468h-5.086c-4.195 0-6.14 1.922-6.14 6.14v5.087c0 .469-.118.82-.47 1.172l-3.585 3.61c-2.977 2.952-2.954 5.694 0 8.648l3.586 3.609c.351.375.468.703.468 1.195v5.063c0 4.195 1.946 6.14 6.14 6.14h5.087c.469 0 .82.141 1.172.492Zm.375-12.609c-.726 0-1.195-.234-1.547-.633l-7.828-8.695a2.027 2.027 0 0 1-.515-1.336c0-1.102.843-1.922 2.039-1.922.632 0 1.101.211 1.523.656l6.21 6.868 12.071-16.993c.469-.68.938-.96 1.758-.96 1.148 0 1.969.843 1.969 1.945 0 .398-.164.867-.422 1.242L25.633 39.063c-.352.445-.89.726-1.594.726Z"/>
                </svg>
                <hr class="flex-grow border-t border-stone-300 mx-4"></hr>
            </div>
            <p class="mt-2 text-xs text-stone-400 font-semibold">COMPLETION BADGE</p>
        </div>
    </div>

</section>
@endsection
