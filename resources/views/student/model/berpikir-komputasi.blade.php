@extends('layouts.student_layout')

@section('content')
<section class="w-full justify-center mx-auto px-4 lg:px-12 min-h-screen mt-2 text-stone-600">

    <div x-data="{ berpikirKomputasi2: false }" class="w-full mx-auto bg-stone-50 p-5 rounded-sm border border-r-4 border-b-4 border-stone-700 shadow-md my-4">
        <button @click="berpikirKomputasi2 = !berpikirKomputasi2" class="flex justify-between w-full">
            <h2 class="text-lg font-semibold">Dekomposisi</h2>
            <svg x-bind:class="{ 'rotate-180': berpikirKomputasi2 }" xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 justify-end transition-transform transform" viewBox="0 0 20 20" fill="currentColor" >
                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
            </svg>
        </button>
        <div x-show="berpikirKomputasi2" class="text-stone-800 mt-4 text-md">
            <p>This is some additional information that can be toggled on and off.</p>
            <!-- Add more content as needed -->
        </div>
    </div>

    <div x-data="{ berpikirKomputasi1: false }" class="w-full mx-auto bg-stone-50 p-5 rounded-sm border border-r-4 border-b-4 border-stone-700 shadow-md my-4">
        <button @click="berpikirKomputasi1 = !berpikirKomputasi1" class="flex justify-between w-full">
            <h2 class="text-lg font-semibold">Abstraksi</h2>
            <svg x-bind:class="{ 'rotate-180': berpikirKomputasi1 }" xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 justify-end transition-transform transform" viewBox="0 0 20 20" fill="currentColor" >
                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
            </svg>
        </button>
        <div x-show="berpikirKomputasi1" class="text-stone-800 mt-4 text-md">
            <p>This is some additional information that can be toggled on and off.</p>
            <!-- Add more content as needed -->
        </div>
    </div>

    <div x-data="{ berpikirKomputasi3: false }" class="w-full mx-auto bg-stone-50 p-5 rounded-sm border border-r-4 border-b-4 border-stone-700 shadow-md my-4">
        <button @click="berpikirKomputasi3 = !berpikirKomputasi3" class="flex justify-between w-full">
            <h2 class="text-lg font-semibold">Pengenalan Pola</h2>
            <svg x-bind:class="{ 'rotate-180': berpikirKomputasi3 }" xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 justify-end transition-transform transform" viewBox="0 0 20 20" fill="currentColor" >
                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
            </svg>
        </button>
        <div x-show="berpikirKomputasi3" class="text-stone-800 mt-4 text-md">
            <p>This is some additional information that can be toggled on and off.</p>
            <!-- Add more content as needed -->
        </div>
    </div>

    <div x-data="{ berpikirKomputasi4: false }" class="w-full mx-auto bg-stone-50 p-5 rounded-sm border border-r-4 border-b-4 border-stone-700 shadow-md my-4">
        <button @click="berpikirKomputasi4 = !berpikirKomputasi4" class="flex justify-between w-full">
            <h2 class="text-lg font-semibold">Algoritma</h2>
            <svg x-bind:class="{ 'rotate-180': berpikirKomputasi4 }" xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 justify-end transition-transform transform" viewBox="0 0 20 20" fill="currentColor" >
                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
            </svg>
        </button>
        <div x-show="berpikirKomputasi4" class="text-stone-800 mt-4 text-md">
            <p>This is some additional information that can be toggled on and off.</p>
            <!-- Add more content as needed -->
        </div>
    </div>

</section>
@endsection
