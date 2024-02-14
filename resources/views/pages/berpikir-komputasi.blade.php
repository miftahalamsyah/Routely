@extends('layouts.app')

@section('content')
<section class="justify-center mx-auto px-5 bg-lime-300">
    <div class="py-56 mx-2 md:ml-24 lg:ml-24 px-4 text-left z-20 max-w-xl">
        <h1 class="mb-2 text-5xl font-semibold clashdisplaymedium tracking-tight leading-none text-stone-900 sm:text-5xl md:text-5xl lg:text-5xl xl:text-6xl">Berpikir</h1>
        <h1 class="mb-4 outlined-text font-semibold text-5xl clashdisplaymedium tracking-tight leading-none text-stone-100 sm:text-5xl md:text-5xl lg:text-5xl xl:text-6xl">Komputasi</h1>
        <p class="mb-8 text-xl">Pendekatan sistematis dalam merancang dan menyelesaikan masalah kompleks, menggunakan pemikiran dan teknik yang umumnya digunakan dalam komputasi, yang dapat tidak hanya dapat diterapkan dalam konteks komputer tetapi juga pada berbagai aspek kehidupan.</p>
    </div>
</section>

<section class="bg-stone-800 py-2">

</section>

<section class="py-1 justify-center mx-auto px-5 bg-stone-50">
    <div class="overflow-x-auto w-full">
        <div class="w-full pt-12 max-w-5xl mx-auto bg-stone-50 grid grid-cols-2 lg:grid-cols-4 text-center text-md text-stone-900 m-5">
            <a href="#dekomposisi" class="border border-stone-700 p-2 hover:bg-stone-900 hover:text-stone-100 hover:underline">
                Dekomposisi
            </a>
            <a href="#abstraksi" class="border border-stone-700 p-2 hover:bg-stone-900 hover:text-stone-100 hover:underline">
                Abstraksi
            </a>
            <a href="#pengenalan-pola" class="border border-stone-700 p-2 hover:bg-stone-900 hover:text-stone-100 hover:underline">
                Pengenalan Pola
            </a>
            <a href="#algoritma" class="border border-stone-700 p-2 hover:bg-stone-900 hover:text-stone-100 hover:underline">
                Algoritma
            </a>
        </div>
    </div>

    <div class="max-w-5xl mx-auto justify-center">
        <div id="dekomposisi" class="w-full mx-auto p-5 pt-24">
            <div class="flex justify-between w-full">
                {{-- rotate to the left 10 degrees --}}
                <h2 class="clashdisplaymedium px-2 rotate-2 text-2xl sm:text-2xl md:text-2xl lg:text-4xl bg-violet-300">01 - Dekomposisi</h2>
                <hr/>
            </div>

            <div class="text-md sm:text-md md:text-md lg:text-lg">
                <p class="p-3">Dekomposisi merupakan salah satu langkah penting dalam <em>computational thinking</em>. <em>Computational thinking</em> sendiri adalah cara berpikir yang sistematis dan terstruktur untuk menyelesaikan masalah kompleks dengan menggunakan konsep-konsep ilmu komputer. Dekomposisi berperan dalam <em>computational thinking</em> dengan membantu kita memecah masalah besar dan rumit menjadi bagian-bagian kecil yang lebih mudah dipahami dan diselesaikan secara individual.</p>
                <p class="p-3">Proses dekomposisi dimulai dengan mengidentifikasi masalah utama dan kemudian membaginya menjadi sub-masalah yang lebih kecil. Sub-masalah ini kemudian dapat dianalisis dan dipecahkan secara terpisah. Dengan memecah masalah menjadi bagian-bagian kecil, dekomposisi membantu kita untuk:</p>
                    <p class="pl-12 p-3">1. <strong>Memahami masalah dengan lebih baik:</strong> Ketika kita memecah masalah menjadi bagian-bagian kecil, kita dapat melihat hubungan antar bagian dan bagaimana mereka berkontribusi pada masalah keseluruhan. Hal ini membantu kita untuk memahami akar masalah dan bagaimana menyelesaikannya.</p>
                    <p class="pl-12 p-3">2. <strong>Membuat solusi yang lebih efektif:</strong> Dengan memecah masalah menjadi bagian-bagian kecil, kita dapat menemukan solusi yang lebih efektif untuk setiap bagian. Hal ini memungkinkan kita untuk mengoptimalkan solusi secara keseluruhan dan menghindari pemborosan waktu dan sumber daya.</p>
                    <p class="pl-12 p-3">3. <strong>Kemampuan problem solving:</strong> Dekomposisi membantu kita untuk mengembangkan kemampuan problem solving yang lebih baik. Dengan memecahkan masalah kecil secara berulang, kita dapat belajar bagaimana mengidentifikasi pola dan menerapkan solusi yang serupa untuk masalah lain di masa depan.</p>
            </div>
            <ul class="text-sm p-3">
                <li><strong>Sumber: </strong></li>
                <li><strong> - Computational Thinking: A Literature Review</strong>&nbsp;by A.&nbsp;A.&nbsp;Diwan,&nbsp;2017.</li>
                <li><strong> - Teaching Computational Thinking: A Review of the Literature</strong>&nbsp;by J.&nbsp;C.&nbsp;Wing,&nbsp;2010.</li>
                <li><strong> - Dekomposisi: Prinsip Dasar Computational Thinking</strong>&nbsp;by Dicoding,&nbsp;2023.</li>
            </ul>
        </div>

        <div id="abstraksi" class="w-full mx-auto p-5 pt-24">
            <div class="flex justify-between w-full">
                <h2 class="clashdisplaymedium px-2 -rotate-1 text-2xl sm:text-2xl md:text-2xl lg:text-4xl bg-violet-300">02 - Abstraksi</h2>
                <hr/>
            </div>

            <div class="text-md sm:text-md md:text-md lg:text-lg">
                <p class="p-3">Abstraksi adalah proses mengidentifikasi dan memusatkan perhatian pada aspek-aspek penting dari suatu masalah, sambil mengabaikan detail yang tidak relevan. Dalam <em>computational thinking</em>, abstraksi membantu kita untuk:</p>
                    <p class="pl-12 p-3">1. <strong>Menyederhanakan Masalah:</strong> Abstraksi membantu kita untuk melihat gambaran besar dari suatu masalah dan mengabaikan detail yang tidak penting. Hal ini memungkinkan kita untuk fokus pada aspek-aspek yang paling penting dan menemukan solusi yang lebih mudah.</p>
                    <p class="pl-12 p-3">2. <strong>Membuat model:</strong> Abstraksi memungkinkan kita untuk membuat model yang mewakili masalah yang ingin diselesaikan. Model ini dapat berupa diagram, flowchart, atau representasi lain yang menyederhanakan masalah dan membantu kita untuk memahami dan menganalisanya.</p>
            </div>
            <ul class="text-sm p-3">
                <li><strong>Sumber: </strong></li>
                <li><strong> - Computational Thinking: A Literature Review</strong>&nbsp;by A.&nbsp;A.&nbsp;Diwan,&nbsp;2017.</li>
                <li><strong> - Teaching Computational Thinking: A Review of the Literature</strong>&nbsp;by J.&nbsp;C.&nbsp;Wing,&nbsp;2010.</li>
                <li><strong> - Abstraction in Computational Thinking</strong>&nbsp;by DThe International Society for the Learning Sciences,&nbsp;2018.</li>
                <li><strong> - Abstraksi: Membangun Fondasi Computational Thinking</strong>&nbsp;by DQLab, &nbsp;2023.</li>
            </ul>
        </div>

        <div id="pengenalan-pola" class="w-full mx-auto p-5 pt-24">
            <div class="flex justify-between w-full">
                <h2 class="clashdisplaymedium px-2 rotate-1 text-2xl sm:text-2xl md:text-2xl lg:text-4xl bg-violet-300">03 - Pengenalan Pola</h2>
                <hr/>
            </div>

            <div class="text-md sm:text-md md:text-md lg:text-lg">
                <p class="p-3">Pengenalan pola, atau <em>pattern recognition</em>, merupakan salah satu pilar penting dalam computational thinking. Kemampuan ini memungkinkan kita untuk mengidentifikasi persamaan dan perbedaan pola dalam berbagai situasi. </p>
            </div>
            <ul class="text-sm p-3">
                <li><strong>Sumber: </strong></li>
                <li><strong> - Computational Thinking: A Literature Review</strong>&nbsp;by A.&nbsp;A.&nbsp;Diwan,&nbsp;2017.</li>
                <li><strong> - Teaching Computational Thinking: A Review of the Literature</strong>&nbsp;by J.&nbsp;C.&nbsp;Wing,&nbsp;2010.</li>
            </ul>
        </div>

        <div id="algoritma" class="w-full mx-auto p-5 py-24">
            <div class="flex justify-between w-full">
                <h2 class="clashdisplaymedium px-2 -rotate-2 text-2xl sm:text-2xl md:text-2xl lg:text-4xl bg-violet-300">04 - Algoritma</h2>
                <hr/>
            </div>

            <div class="text-md sm:text-md md:text-md lg:text-lg">
                <p class="p-3">Algoritma adalah serangkaian langkah-langkah logis dan terstruktur yang digunakan untuk menyelesaikan suatu masalah</p>
            </div>
            <ul class="text-sm p-3">
                <li><strong>Sumber: </strong></li>
                <li><strong> - Computational Thinking: A Literature Review</strong>&nbsp;by A.&nbsp;A.&nbsp;Diwan,&nbsp;2017.</li>
                <li><strong> - Teaching Computational Thinking: A Review of the Literature</strong>&nbsp;by J.&nbsp;C.&nbsp;Wing,&nbsp;2010.</li>
            </ul>
        </div>
    </div>

</section>

<hr class="border-2 border-lime-300">

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

