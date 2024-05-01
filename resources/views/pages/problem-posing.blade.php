@extends('layouts.app')

@section('content')
<section class="justify-center mx-auto px-5 bg-violet-200">
    <div class="py-56 max-w-3xl px-4 text-center z-20 mx-auto">
        <h1 class="mb-2 text-5xl clashdisplaymedium tracking-tight leading-none text-stone-900 sm:text-5xl md:text-5xl lg:text-5xl xl:text-6xl">Problem Posing</h1>
        <p class="mb-8 text-xl">Dengan problem posing, individu atau tim dapat secara kreatif mengeksplorasi aspek-aspek baru dari ilmu komputer, merangsang inovasi, dan meningkatkan pemahaman dalam bidang ini.</p>
    </div>
</section>

<hr class="py-12 bg-stone-50"/>

<section class="justify-center mx-auto px-5 bg-stone-50">
    <h2 class="pb-12 text-center max-w-2xl mx-auto text-2xl clashdisplaymedium leading-none text-stone-900 sm:text-2xl lg:text-4xl">Bagaimana Langkah-langkah Pembelajaran <span class="bg-violet-200 italic px-2 outlined-text">Problem Posing</span> ?</h2>
    <div class="max-w-5xl mx-auto justify-center grid grid-cols-1 sm:grid-cols-1 lg:grid-cols-2 xl:grid-cols-2 gap-4">
        <div id="pengenalan" class="w-full mx-auto p-5">
            <div class="flex justify-between w-full">
                {{-- rotate to the left 10 degrees --}}
                <h2 class="clashdisplaymedium px-2 rotate-2 text-2xl sm:text-2xl md:text-2xl lg:text-4xl bg-lime-300 transform hover:translate-x-[-25px] transition-transform duration-300 ease-in-out">01 - Pengenalan</h2>
                <hr/>
            </div>

            <div class="text-md sm:text-md md:text-md lg:text-lg">
                <p class="p-3">Mengungkap tujuan belajar dan memahami pengetahuan awal siswa adalah kunci penting dalam belajar. Dengan langkah-langkah ini, guru bisa memastikan semua siswa mencapai tujuan pembelajaran.</p>
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
                <h2 class="clashdisplaymedium px-2 -rotate-1 text-2xl sm:text-2xl md:text-2xl lg:text-4xl bg-lime-300 transform hover:translate-x-[25px] transition-transform duration-300 ease-in-out">02 - Pemahaman</h2>
                <hr/>
            </div>

            <div class="text-md sm:text-md md:text-md lg:text-lg">
                <p class="p-3">Guru menjelaskan materi secara singkat untuk membantu siswa memahami dasar-dasar konsep, membangkitkan minat belajar, dan menyiapkan mereka untuk belajar lebih lanjut.</p>
            </div>
        </div>

        <div id="situasi-masalah" class="w-full mx-auto p-5">
            <div class="flex justify-between w-full">
                <h2 class="clashdisplaymedium px-2 rotate-1 text-2xl sm:text-2xl md:text-2xl lg:text-4xl bg-lime-300 transform hover:translate-x-[-25px] transition-transform duration-300 ease-in-out">03 - Situasi Masalah</h2>
                <hr/>
            </div>

            <div class="text-md sm:text-md md:text-md lg:text-lg">
                <p class="p-3">Situasi masalah bisa berupa studi kasus atau informasi terbuka dalam bentuk teks dan gambar. Ini mendorong siswa untuk meningkatkan kemampuan memecahkan masalah, memahami informasi, dan membuat pertanyaan atau masalah yang sesuai.</p>
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
                <h2 class="clashdisplaymedium px-2 -rotate-2 text-2xl sm:text-2xl md:text-2xl lg:text-4xl bg-lime-300 transform hover:translate-x-[25px] transition-transform duration-300 ease-in-out">04 - Pengajuan Masalah</h2>
                <hr/>
            </div>

            <div class="text-md sm:text-md md:text-md lg:text-lg">
                <p class="p-3">Siswa diajak untuk aktif belajar, mengeksplorasi berbagai aspek materi, dan meningkatkan keterampilan bertanya. Dengan mengajukan pertanyaan, mereka dapat memperdalam pemahaman materi dan meningkatkan kemampuan berpikir kritis serta kreatif dalam menghadapi tantangan pembelajaran.</p>
            </div>
        </div>

        <div id="pemecahan-masalah" class="w-full mx-auto p-5">
            <div class="flex justify-between w-full">
                <h2 class="clashdisplaymedium px-2 rotate-1 text-2xl sm:text-2xl md:text-2xl lg:text-4xl bg-lime-300 transform hover:translate-x-[-25px] transition-transform duration-300 ease-in-out">05 - Pemecahan Masalah</h2>
                <hr/>
            </div>

            <div class="text-md sm:text-md md:text-md lg:text-lg">
                <p class="p-3">Siswa aktif menjawab pertanyaan dari teman sekelas, menciptakan kerja sama, dan memperkuat pemahaman melalui diskusi dan presentasi.</p>
            </div>
        </div>

        <div>
            {{-- empty div --}}
        </div>

        <div>
            {{-- empty div --}}
        </div>

        <div id="verifikasi" class="w-full mx-auto p-5 pb-24">
            <div class="flex justify-between w-full">
                <h2 class="clashdisplaymedium px-2 -rotate-2 text-2xl sm:text-2xl md:text-2xl lg:text-4xl bg-lime-300 transform hover:translate-x-[25px] transition-transform duration-300 ease-in-out">06 - Verifikasi</h2>
                <hr/>
            </div>

            <div class="text-md sm:text-md md:text-md lg:text-lg">
                <p class="p-3">Verifikasi melibatkan penilaian pemahaman, penerapan pengetahuan, dan keterampilan siswa. Tujuannya adalah memastikan pemahaman materi dan kemampuan aplikasinya.</p>
            </div>
        </div>
    </div>
</section>

<section class="justify-center mx-auto px-5 bg-striped border-y-4 border-stone-800 -rotate-1">
    <h2 class="py-12 text-center max-w-2xl mx-auto text-2xl rotate-1 clashdisplaymedium leading-none text-stone-50 sm:text-2xl lg:text-4xl">Apa Saja Klasifikasi Pembelajaran <em>Problem Posing</em> ?</h2>
    <div class="grid grid-cols-1 gap-4 sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-3 rotate-1 pb-24 max-w-5xl mx-auto">
        <div class="block bg-lime-300 p-4 rounded-lg hover:shadow-lg border border-r-4 border-b-4 border-stone-700 transform hover:translate-y-[-25px] transition-transform duration-300 ease-in-out">
            <h2 class="clashdisplaymedium text-lg"><em>Free Problem Posing</em></h2>
            <p class="sm:mt-1 text-xs sm:text-xs md:text-sm sm:text-stone-700">
                (Pengajuan masalah terbuka). Siswa diminta membuat soal dari situasi atau informasi terbuka, memungkinkan mereka mengembangkan kreativitas dan pemahaman terhadap kehidupan sehari-hari.
            </p>
        </div>
        <div class="block bg-lime-300 p-4 rounded-lg hover:shadow-lg border border-r-4 border-b-4 border-stone-700 transform hover:translate-y-[-25px] transition-transform duration-300 ease-in-out">
            <h2 class="clashdisplaymedium text-lg"><em>Semi-structured Problem Posing</em></h2>
            <p class="sm:mt-1 text-xs sm:text-xs md:text-sm sm:text-stone-700">
                (Pengajuan masalah semi terstruktur). Siswa diminta untuk mengembangkannya dengan menambahkan informasi atau perspektif baru, menggunakan deskripsi berbentuk pengajuan soal sebagai alat pemahaman.
            </p>
        </div>
        <div class="block bg-lime-300 p-4 rounded-lg hover:shadow-lg border border-r-4 border-b-4 border-stone-700 transform hover:translate-y-[-25px] transition-transform duration-300 ease-in-out">
            <h2 class="clashdisplaymedium text-lg"><em>Structured Problem Posing</em></h2>
            <p class="sm:mt-1 text-xs sm:text-xs md:text-sm sm:text-stone-700">
                (Pengajuan masalah terstruktur). Siswa merumuskan ulang soal yang telah diselesaikan atau memodifikasi dan memvariasikan pertanyaan dari masalah yang telah diberikan.
            </p>
        </div>
    </div>
</section>

<section class="justify-center mx-auto px-5 py-24">
    <div class="max-w-6xl mx-auto justify-center grid grid-cols-1 sm:grid-cols-1 lg:grid-cols-2 xl:grid-cols-2 gap-4 bg-violet-200 rounded-2xl p-8 sm:p-8 lg:p-24 -rotate-1 shadow-md">
        <div class="rotate-1">
            <h2 class="py-2 text-left max-w-2xl mx-auto text-2xl rotate-1 clashdisplaymedium leading-none text-stone-900 sm:text-2xl lg:text-4xl"><em>Problem posing</em> dapat diaplikasikan dalam tiga bentuk aktifitas yang berbeda.</h2>
            <p class="py-2 text-left text-lg">Problem posing dapat diterapkan dalam tiga bentuk aktivitas yang berbeda. Ini melibatkan siswa dalam berbagai cara untuk mengembangkan keterampilan problem posing mereka.</p>
        </div>
        <div class="text-stone-700 rotate-1">
            <div>
                <h3 class="clashdisplaymedium text-lg sm:text-lg lg:text-xl"><em>Pre-solution Posing</em></h3>
                <p class="py-5 text-sm">(Pengajuan pre-solusi). Siswa diminta membuat pertanyaan dari situasi atau informasi yang diberikan, dengan tujuan menghubungkan pertanyaan mereka dengan yang sebelumnya.</p>
            </div>
            <div>
                <h3 class="clashdisplaymedium text-lg sm:text-lg lg:text-xl"><em>Within-solution Posing</em></h3>
                <p class="py-5 text-sm">(Pengajuan dalam solusi). Siswa diminta untuk merumuskan kembali pertanyaan atau masalah yang sedang dipecahkan menjadi sub-pertanyaan baru, mengikuti urutan penyelesaian sebelumnya. Mereka diharapkan mampu membuat sub-pertanyaan baru berdasarkan pertanyaan yang telah ada sebelumnya.</p>
            </div>
            <div>
                <h3 class="clashdisplaymedium text-lg sm:text-lg lg:text-xl"><em>Post-solution Posing</h3>
                <p class="py-5 text-sm">(Pengajuan setelah solusi). Siswa diminta untuk mengubah tujuan-tujuan atau kondisi-kondisi dari masalah yang telah diselesaikan, dengan tujuan membuat soal baru atau sejenisnya.</p>
            </div>
        </div>
    </div>
</section>

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

