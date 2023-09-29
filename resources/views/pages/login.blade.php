@extends('layouts.app')

@section('content')
<section class="mt-20 max-w-6xl justify-center mx-auto px-5 animate-up">
    <!-- login dengan auth provider -->
    <div class="pt-10 pb-5">
        <h1 class="text-3xl text-gray-900 font-semibold">Auth Providers</h1>
        <p class="pt-2">Login dengan auth provider. Jika anda belum memiliki akun maka akan dibuatkan untuk anda.</p>
    </div>
    <div class="flex flex-row justify-center items-center grid-cols-1 font-semibold">
        <a href="{{ route('auth.github') }}" class="bg-stone-50 w-full h-14 max-w-2xl text-gray-900 flex items-center justify-center mr-3 rounded-xl border border-gray-700 border-4 hover:underline mb-4">
        <svg viewBox="0 0 256 250" width="1.2em" height="1.2em" class="m-3"><!-- HTML_TAG_START --><path fill="#161614" d="M128.001 0C57.317 0 0 57.307 0 128.001c0 56.554 36.676 104.535 87.535 121.46c6.397 1.185 8.746-2.777 8.746-6.158c0-3.052-.12-13.135-.174-23.83c-35.61 7.742-43.124-15.103-43.124-15.103c-5.823-14.795-14.213-18.73-14.213-18.73c-11.613-7.944.876-7.78.876-7.78c12.853.902 19.621 13.19 19.621 13.19c11.417 19.568 29.945 13.911 37.249 10.64c1.149-8.272 4.466-13.92 8.127-17.116c-28.431-3.236-58.318-14.212-58.318-63.258c0-13.975 5-25.394 13.188-34.358c-1.329-3.224-5.71-16.242 1.24-33.874c0 0 10.749-3.44 35.21 13.121c10.21-2.836 21.16-4.258 32.038-4.307c10.878.049 21.837 1.47 32.066 4.307c24.431-16.56 35.165-13.12 35.165-13.12c6.967 17.63 2.584 30.65 1.255 33.873c8.207 8.964 13.173 20.383 13.173 34.358c0 49.163-29.944 59.988-58.447 63.157c4.591 3.972 8.682 11.762 8.682 23.704c0 17.126-.148 30.91-.148 35.126c0 3.407 2.304 7.398 8.792 6.14C219.37 232.5 256 184.537 256 128.002C256 57.307 198.691 0 128.001 0Zm-80.06 182.34c-.282.636-1.283.827-2.194.39c-.929-.417-1.45-1.284-1.15-1.922c.276-.655 1.279-.838 2.205-.399c.93.418 1.46 1.293 1.139 1.931Zm6.296 5.618c-.61.566-1.804.303-2.614-.591c-.837-.892-.994-2.086-.375-2.66c.63-.566 1.787-.301 2.626.591c.838.903 1 2.088.363 2.66Zm4.32 7.188c-.785.545-2.067.034-2.86-1.104c-.784-1.138-.784-2.503.017-3.05c.795-.547 2.058-.055 2.861 1.075c.782 1.157.782 2.522-.019 3.08Zm7.304 8.325c-.701.774-2.196.566-3.29-.49c-1.119-1.032-1.43-2.496-.726-3.27c.71-.776 2.213-.558 3.315.49c1.11 1.03 1.45 2.505.701 3.27Zm9.442 2.81c-.31 1.003-1.75 1.459-3.199 1.033c-1.448-.439-2.395-1.613-2.103-2.626c.301-1.01 1.747-1.484 3.207-1.028c1.446.436 2.396 1.602 2.095 2.622Zm10.744 1.193c.036 1.055-1.193 1.93-2.715 1.95c-1.53.034-2.769-.82-2.786-1.86c0-1.065 1.202-1.932 2.733-1.958c1.522-.03 2.768.818 2.768 1.868Zm10.555-.405c.182 1.03-.875 2.088-2.387 2.37c-1.485.271-2.861-.365-3.05-1.386c-.184-1.056.893-2.114 2.376-2.387c1.514-.263 2.868.356 3.061 1.403Z"/><!-- HTML_TAG_END --></svg>
            Github
        </a>
    </div>

    <!-- separator -->
    <div class="my-16 flex">
        <svg class="mx-auto" width="40" height="40" fill="#1c1917" viewBox="0 0 512 512"><path d="M512 96c0 50.2-59.1 125.1-84.6 155c-3.8 4.4-9.4 6.1-14.5 5H320c-17.7 0-32 14.3-32 32s14.3 32 32 32h96c53 0 96 43 96 96s-43 96-96 96H139.6c8.7-9.9 19.3-22.6 30-36.8c6.3-8.4 12.8-17.6 19-27.2H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320c-53 0-96-43-96-96s43-96 96-96h39.8c-21-31.5-39.8-67.7-39.8-96c0-53 43-96 96-96s96 43 96 96zM117.1 489.1c-3.8 4.3-7.2 8.1-10.1 11.3l-1.8 2-.2-.2c-6 4.6-14.6 4-20-1.8C59.8 473 0 402.5 0 352c0-53 43-96 96-96s96 43 96 96c0 30-21.1 67-43.5 97.9c-10.7 14.7-21.7 28-30.8 38.5l-.6 .7zM128 352a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zM416 128a32 32 0 1 0 0-64 32 32 0 1 0 0 64z"/></svg>
    </div>

    <!-- login dan register -->
    <div class="md:flex md:flex-row pb-20">
        <!-- login dengan email -->
        <div class="py-5 flex-col flex md:w-1/2">
            <h1 class="text-3xl text-gray-900 font-semibold mb-5">Login dengan email</h1>
            @if(session()->has('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                {{ session('success') }}
                <button type="button" class="absolute top-0 bottom-0 right-0 px-4 py-3" data-dismiss="alert" aria-label="Close">
                    <svg class="fill-current h-6 w-6 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M6.293 6.293a1 1 0 0 1 1.414 0L10 8.586l2.293-2.293a1 1 0 1 1 1.414 1.414L11.414 10l2.293 2.293a1 1 0 1 1-1.414 1.414L10 11.414l-2.293 2.293a1 1 0 0 1-1.414-1.414L8.586 10 6.293 7.707a1 1 0 0 1 0-1.414z"/></svg>
                </button>
            </div>
            @endif

            @if(session()->has('loginError'))
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded rounded-xl relative" role="alert">
                {{ session('loginError') }}
                <button type="button" class="absolute top-0 bottom-0 right-0 px-4 py-3" data-dismiss="alert" aria-label="Close">
                    <svg class="fill-current h-6 w-6 text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M14.293 5.293a1 1 0 0 1 1.414 1.414L11.414 10l4.293 4.293a1 1 0 1 1-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 1 1-1.414-1.414L8.586 10 4.293 5.293a1 1 0 1 1 1.414-1.414L10 8.586l4.293-4.293a1 1 0 0 1 1.414 0z"/></svg>
                </button>
            </div>
            @endif
            <form action="/login" method="post" class="flex flex-col">
                @csrf
                <input type="email" placeholder="Alamat email" id="input-email" name="email" class="mt-5 p-5 h-14 border-4 border-stone-900 rounded-xl bg-stone-50" value="" required>
                <input type="password" placeholder="Kata sandi" id="input-password" name="password" class="my-5 p-5 h-14 border-4 border-stone-900 rounded-xl bg-stone-50" value="" required>
                <button type="submit" class="w-1/4 relative inline-flex items-center justify-center p-4 px-6 py-3 overflow-hidden font-semibold text-stone-900 transition duration-300 ease-out border-4 border-violet-300 rounded-3xl group">
                    <span class="absolute inset-0 flex items-center justify-center w-full h-full text-stone-900 duration-300 -translate-x-full bg-violet-300 group-hover:translate-x-0 ease">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                    </span>
                    <span class="absolute flex items-center justify-center w-full h-full text-stone-900 transition-all duration-300 transform group-hover:translate-x-full ease bg-stone-50">Login</span>
                    <span class="relative invisible">Login</span>
                </button>
            </form>
        </div>

        <!-- register -->
        <div class="py-5 flex flex-col md:w-1/2 md:ml-20">
            <h1 class="mb-5 text-3xl text-gray-900 font-semibold">Pengguna baru?</h1>
            <p class="py-5">Selamat datang! Daftar dengan cepat dan mudah.</p>
            <a href="/daftar" class="w-5">
                <button class="relative inline-flex items-center justify-center p-4 px-6 py-3 overflow-hidden font-semibold text-stone-900 transition duration-300 ease-out border-4 border-violet-300 rounded-3xl group">
                    <span class="absolute inset-0 flex items-center justify-center w-full h-full text-stone-900 duration-300 -translate-x-full bg-violet-300 group-hover:translate-x-0 ease">
                    <svg fill="#000000" width="20px" height="20px" viewBox="0 0 16 16" id="register-16px" xmlns="http://www.w3.org/2000/svg">
                        <path id="Path_184" data-name="Path 184" d="M57.5,41a.5.5,0,0,0-.5.5V43H47V31h2v.5a.5.5,0,0,0,.5.5h5a.5.5,0,0,0,.5-.5V31h2v.5a.5.5,0,0,0,1,0v-1a.5.5,0,0,0-.5-.5H55v-.5A1.5,1.5,0,0,0,53.5,28h-3A1.5,1.5,0,0,0,49,29.5V30H46.5a.5.5,0,0,0-.5.5v13a.5.5,0,0,0,.5.5h11a.5.5,0,0,0,.5-.5v-2A.5.5,0,0,0,57.5,41ZM50,29.5a.5.5,0,0,1,.5-.5h3a.5.5,0,0,1,.5.5V31H50Zm11.854,4.646-2-2a.5.5,0,0,0-.708,0l-6,6A.5.5,0,0,0,53,38.5v2a.5.5,0,0,0,.5.5h2a.5.5,0,0,0,.354-.146l6-6A.5.5,0,0,0,61.854,34.146ZM54,40V38.707l5.5-5.5L60.793,34.5l-5.5,5.5Zm-2,.5a.5.5,0,0,1-.5.5h-2a.5.5,0,0,1,0-1h2A.5.5,0,0,1,52,40.5Zm0-3a.5.5,0,0,1-.5.5h-2a.5.5,0,0,1,0-1h2A.5.5,0,0,1,52,37.5ZM54.5,35h-5a.5.5,0,0,1,0-1h5a.5.5,0,0,1,0,1Z" transform="translate(-46 -28)"/>
                    </svg>
                    </span>
                    <span class="absolute flex items-center justify-center w-full h-full text-stone-900 transition-all duration-300 transform group-hover:translate-x-full ease bg-stone-50">Daftar</span>
                    <span class="relative invisible">Daftar</span>
                </button>
            </a>
        </div>
    </div>
</section>
@endsection
