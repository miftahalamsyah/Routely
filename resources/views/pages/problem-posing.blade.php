@extends('layouts.app')

@section('content')
<section class="justify-center mx-auto px-5 bg-sky-100">
    <div class="py-56 max-w-3xl px-4 text-center z-20 mx-auto">
        <h1 class="mb-2 text-5xl clashdisplaymedium tracking-tight leading-none text-stone-900 sm:text-5xl md:text-5xl lg:text-5xl xl:text-6xl">Problem Posing</h1>
        <p class="mb-8 text-xl">Dengan problem posing, individu atau tim dapat secara kreatif mengeksplorasi aspek-aspek baru dari ilmu komputer, merangsang inovasi, dan meningkatkan pemahaman dalam bidang ini.</p>
    </div>
</section>

<hr class="py-12 bg-stone-50"/>

<section class="justify-center mx-auto px-5 bg-stone-50">
    <h2 class="pb-12 text-center max-w-2xl mx-auto text-2xl clashdisplaymedium leading-none text-stone-900 sm:text-2xl lg:text-4xl">Bagaimana Langkah-langkah Pembelajaran <em>Problem Posing</em>?</h2>
    <div class="max-w-5xl mx-auto justify-center grid grid-cols-1 sm:grid-cols-1 lg:grid-cols-2 xl:grid-cols-2 gap-4">
        <div id="pengenalan" class="w-full mx-auto p-5">
            <div class="flex justify-between w-full">
                {{-- rotate to the left 10 degrees --}}
                <h2 class="clashdisplaymedium px-2 rotate-2 text-2xl sm:text-2xl md:text-2xl lg:text-4xl bg-lime-300">01 - Pengenalan</h2>
                <hr/>
            </div>

            <div class="text-md sm:text-md md:text-md lg:text-lg">
                <p class="p-3">Dekomposisi merupakan salah satu langkah penting dalam <em>computational thinking</em>. <em>Computational thinking</em> sendiri adalah cara berpikir yang sistematis dan terstruktur untuk menyelesaikan masalah kompleks dengan menggunakan konsep-konsep ilmu komputer. Dekomposisi berperan dalam <em>computational thinking</em> dengan membantu kita memecah masalah besar dan rumit menjadi bagian-bagian kecil yang lebih mudah dipahami dan diselesaikan secara individual.</p>
            </div>
        </div>

        <div>
            {{-- empty div --}}
        </div>

        <div>
            {{-- empty div --}}
        </div>

        <div id="pemahaman" class="w-full mx-auto p-5">
            <div class="flex justify-between w-full">
                <h2 class="clashdisplaymedium px-2 -rotate-1 text-2xl sm:text-2xl md:text-2xl lg:text-4xl bg-lime-300">02 - Pemahaman</h2>
                <hr/>
            </div>

            <div class="text-md sm:text-md md:text-md lg:text-lg">
                <p class="p-3">Abstraksi adalah proses mengidentifikasi dan memusatkan perhatian pada aspek-aspek penting dari suatu masalah, sambil mengabaikan detail yang tidak relevan. Dalam <em>computational thinking</em>, abstraksi membantu kita untuk:</p>
            </div>
        </div>

        <div id="situasi-masalah" class="w-full mx-auto p-5">
            <div class="flex justify-between w-full">
                <h2 class="clashdisplaymedium px-2 rotate-1 text-2xl sm:text-2xl md:text-2xl lg:text-4xl bg-lime-300">03 - Situasi Masalah</h2>
                <hr/>
            </div>

            <div class="text-md sm:text-md md:text-md lg:text-lg">
                <p class="p-3">Pengenalan pola, atau <em>pattern recognition</em>, merupakan salah satu pilar penting dalam computational thinking. Kemampuan ini memungkinkan kita untuk mengidentifikasi persamaan dan perbedaan pola dalam berbagai situasi. </p>
            </div>
        </div>

        <div>
            {{-- empty div --}}
        </div>

        <div>
            {{-- empty div --}}
        </div>

        <div id="pengajuan-masalah" class="w-full mx-auto p-5">
            <div class="flex justify-between w-full">
                <h2 class="clashdisplaymedium px-2 -rotate-2 text-2xl sm:text-2xl md:text-2xl lg:text-4xl bg-lime-300">04 - Pengajuan Masalah</h2>
                <hr/>
            </div>

            <div class="text-md sm:text-md md:text-md lg:text-lg">
                <p class="p-3">Algoritma adalah serangkaian langkah-langkah logis dan terstruktur yang digunakan untuk menyelesaikan suatu masalah</p>
            </div>
        </div>

        <div id="pemecahan-masalah" class="w-full mx-auto p-5">
            <div class="flex justify-between w-full">
                <h2 class="clashdisplaymedium px-2 rotate-1 text-2xl sm:text-2xl md:text-2xl lg:text-4xl bg-lime-300">05 - Pemecahan Masalah</h2>
                <hr/>
            </div>

            <div class="text-md sm:text-md md:text-md lg:text-lg">
                <p class="p-3">Pengenalan pola, atau <em>pattern recognition</em>, merupakan salah satu pilar penting dalam computational thinking. Kemampuan ini memungkinkan kita untuk mengidentifikasi persamaan dan perbedaan pola dalam berbagai situasi. </p>
            </div>
        </div>

        <div>
            {{-- empty div --}}
        </div>

        <div>
            {{-- empty div --}}
        </div>

        <div id="verifikasi" class="w-full mx-auto p-5 pb-12">
            <div class="flex justify-between w-full">
                <h2 class="clashdisplaymedium px-2 -rotate-2 text-2xl sm:text-2xl md:text-2xl lg:text-4xl bg-lime-300">06 - Verifikasi</h2>
                <hr/>
            </div>

            <div class="text-md sm:text-md md:text-md lg:text-lg">
                <p class="p-3">Algoritma adalah serangkaian langkah-langkah logis dan terstruktur yang digunakan untuk menyelesaikan suatu masalah</p>
            </div>
        </div>
    </div>

</section>

<hr class="border-2 border-orange-300">

<script>
    function toggleContent(sectionId) {
        const section = document.getElementById(sectionId);
        const windowHeight = window.innerHeight;
        const sectionHeight = section.clientHeight;
        const offset = (windowHeight - sectionHeight) / 2;

        window.scrollTo({
            top: section.offsetTop - offset,
            behavior: 'smooth',
            inline: 'center',
        });
    }
</script>

@endsection

