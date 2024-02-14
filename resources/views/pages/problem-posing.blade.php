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
                <h2 class="clashdisplaymedium px-2 rotate-2 text-2xl sm:text-2xl md:text-2xl lg:text-4xl bg-lime-300">01 - Pengenalan</h2>
                <hr/>
            </div>

            <div class="text-md sm:text-md md:text-md lg:text-lg">
                <p class="p-3">Menyampaikan tujuan pembelajaran dan menggali pengetahuan awal siswa adalah dua langkah penting dalam proses pembelajaran. Dengan melakukan dua langkah ini, guru dapat memastikan bahwa semua siswa dapat mencapai tujuan pembelajaran yang telah ditetapkan.</p>
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
                <p class="p-3">Pada tahap ini guru memberikan penjelasan singkat tentang materi yang akan dipelajari oleh siswa. Penjelasan ini bertujuan untuk membantu siswa memahami konsep-konsep dasar materi, membangkitkan rasa ingin tahu mereka, dan mempersiapkan mereka untuk mempelajari materi lebih lanjut.</p>
            </div>
        </div>

        <div id="situasi-masalah" class="w-full mx-auto p-5">
            <div class="flex justify-between w-full">
                <h2 class="clashdisplaymedium px-2 rotate-1 text-2xl sm:text-2xl md:text-2xl lg:text-4xl bg-lime-300">03 - Situasi Masalah</h2>
                <hr/>
            </div>

            <div class="text-md sm:text-md md:text-md lg:text-lg">
                <p class="p-3">Situasi masalah dapat berupa studi kasus yang memerlukan analisis mendalam atau informasi terbuka dalam bentuk teks dan gambar. Dengan cara ini, siswa didorong untuk mengembangkan kemampuan problem posing mereka, mengonstruksi penafsiran terhadap informasi yang diberikan, dan merumuskan pertanyaan atau masalah yang relevan. </p>
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
                <p class="p-3">Proses ini mendorong siswa untuk aktif terlibat dalam pembelajaran, mengeksplorasi berbagai aspek dari materi, dan mengembangkan keterampilan problem posing. Dengan berperan sebagai inisiator pertanyaan, siswa dapat memperdalam pemahaman mereka terhadap konten pembelajaran dan mengasah kemampuan kritis serta kreatif dalam menanggapi tantangan pembelajaran.</p>
            </div>
        </div>

        <div id="pemecahan-masalah" class="w-full mx-auto p-5">
            <div class="flex justify-between w-full">
                <h2 class="clashdisplaymedium px-2 rotate-1 text-2xl sm:text-2xl md:text-2xl lg:text-4xl bg-lime-300">05 - Pemecahan Masalah</h2>
                <hr/>
            </div>

            <div class="text-md sm:text-md md:text-md lg:text-lg">
                <p class="p-3">Siswa berperan aktif dalam memberikan jawaban atau penyelesaian terhadap pertanyaan yang diajukan oleh siswa lainnya. Proses ini menciptakan dinamika kolaboratif di antara siswa, memungkinkan mereka saling berbagi pengetahuan dan keterampilan. Selain itu dapat memperkuat pemahaman mereka melalui penyajian konsep atau solusi. </p>
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
                <h2 class="clashdisplaymedium px-2 -rotate-2 text-2xl sm:text-2xl md:text-2xl lg:text-4xl bg-lime-300">06 - Verifikasi</h2>
                <hr/>
            </div>

            <div class="text-md sm:text-md md:text-md lg:text-lg">
                <p class="p-3">Proses ini melibatkan evaluasi terhadap pemahaman konsep, kemampuan menerapkan pengetahuan, dan keterampilan yang diperoleh oleh siswa selama pembelajaran. Verifikasi bertujuan untuk memastikan bahwa siswa telah memahami dengan baik materi tersebut dan dapat mengaplikasikannya dengan tepat.</p>
            </div>
        </div>
    </div>
</section>

<section class="justify-center mx-auto px-5 bg-striped border-y-4 border-stone-800 -rotate-1">
    <h2 class="py-12 text-center max-w-2xl mx-auto text-2xl rotate-1 clashdisplaymedium leading-none text-stone-50 sm:text-2xl lg:text-4xl">Apa Saja Klasifikasi Pembelajaran <em>Problem Posing</em> ?</h2>
    <div class="grid grid-cols-1 gap-4 sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-3 rotate-1 pb-24 max-w-5xl mx-auto">
        <div class="block bg-lime-300 p-4 rounded-lg hover:shadow-lg border border-r-4 border-b-4 border-stone-700">
            <h2 class="clashdisplaymedium text-lg"><em>Free Problem Posing</em></h2>
            <p class="sm:mt-1 text-xs sm:text-xs md:text-sm sm:text-stone-700">
                (Pengajuan masalah terbuka). Siswa diminta membuat soal dari situasi atau informasi terbuka, memungkinkan mereka mengembangkan kreativitas dan pemahaman terhadap kehidupan sehari-hari.
            </p>
        </div>
        <div class="block bg-lime-300 p-4 rounded-lg hover:shadow-lg border border-r-4 border-b-4 border-stone-700">
            <h2 class="clashdisplaymedium text-lg"><em>Semi-structured Problem Posing</em></h2>
            <p class="sm:mt-1 text-xs sm:text-xs md:text-sm sm:text-stone-700">
                (Pengajuan masalah semi terstruktur). Siswa diminta untuk mengembangkannya dengan menambahkan informasi atau perspektif baru, menggunakan deskripsi berbentuk pengajuan soal sebagai alat pemahaman.
            </p>
        </div>
        <div class="block bg-lime-300 p-4 rounded-lg hover:shadow-lg border border-r-4 border-b-4 border-stone-700">
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
                <p class="py-5 text-sm">(Pengajuan pre-solusi). Siswa diminta untuk membuat pertanyaan atau masalah dari suatu situasi atau informasi yang disediakan, dengan harapan dapat mengaitkan pertanyaan yang mereka buat dengan pertanyaan sebelumnya.</p>
            </div>
            <div>
                <h3 class="clashdisplaymedium text-lg sm:text-lg lg:text-xl"><em>Within-solution Posing</em></h3>
                <p class="py-5 text-sm">(Pengajuan dalam solusi). Siswa diminta untuk merumuskan kembali suatu pertanyaan atau masalah yang sedang diselesaikan menjadi sub-sub pertanyaan baru, mengikuti urutan penyelesaian seperti yang telah dilakukan sebelumnya. Siswa diharapkan dapat membuat sub-sub pertanyaan baru berdasarkan pertanyaan yang sudah ada.</p>
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

