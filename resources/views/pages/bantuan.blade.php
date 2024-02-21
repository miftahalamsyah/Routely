@extends('layouts.app')

@section('content')
<section class="mt-20 max-w-6xl justify-center mx-auto px-5">
    <div class="py-24 max-w-3xl px-4 text-center z-20 mx-auto">
        <h1 class="mb-2 text-5xl clashdisplaymedium tracking-tight leading-none text-stone-900 sm:text-5xl md:text-5xl lg:text-5xl xl:text-6xl">Bantuan</h1>
        <p class="mb-8 text-xl">Koleksi sumber bantuan.</p>
    </div>

    <div x-data="{ bantuan1: false }" class="max-w-4xl mx-auto bg-stone-50 p-5 rounded-lg hover:shadow-md border border-r-4 border-b-4 border-stone-700 my-4">
        <button @click="bantuan1 = !bantuan1" class="flex justify-between w-full">
            <h2 class="text-lg clashdisplaymedium">Membuat Akun</h2>
            <svg x-bind:class="{ 'rotate-180': bantuan1 }" xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 justify-end transition-transform transform" viewBox="0 0 20 20" fill="currentColor" >
                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
            </svg>
        </button>
        <div x-show="bantuan1" class="text-stone-800 mt-4 text-md">
            <h3 class="font-semibold">Membuat Akun</h3>
            <p>1. Klik button <em>login</em> pada <em>navigation bar</em>.</p>
            <img src="https://routely-image-storage.vercel.app/images/1.png" title="Membuat Akun 1" class="max-w-md rounded-lg border border-r-4 border-b-4 border-stone-800 my-2" loading="lazy"/>
            <p>2. Klik "Daftar dengan <em>email</em>" jika anda memilih membuat akun menggunakan <em>email</em>. Jika ingin menggunakan akun Github maka "klik Login dengan Github" yang secara otomatis akan dibuatkan akun.</p>
            <img src="https://routely-image-storage.vercel.app/images/2.png" title="Membuat Akun 2" class="max-w-md rounded-lg border border-r-4 border-b-4 border-stone-800 my-2" loading="lazy"/>
            <p>3. Isi data diri anda dan klik daftar.</p>

            <h3 class="font-semibold mt-4">Masuk ke Student Dashboard</h3>
            <p>4. Selesai, anda sudah memiliki akun Routely. Lalu anda bisa <em>Login</em> dengan akun yang telah dibuat,</p>
            <img src="https://routely-image-storage.vercel.app/images/3.png" title="Membuat Akun 3" class="max-w-md rounded-lg border border-r-4 border-b-4 border-stone-800 my-2" loading="lazy"/>
        </div>
    </div>

    <div x-data="{ bantuan2: false }" class="max-w-4xl mx-auto bg-stone-50 p-5 rounded-lg hover:shadow-md border border-r-4 border-b-4 border-stone-700 my-4">
        <button @click="bantuan2 = !bantuan2" class="flex justify-between w-full">
            <h2 class="text-lg clashdisplaymedium">Melakukan Tes (Pretest & Posttest)</h2>
            <svg x-bind:class="{ 'rotate-180': bantuan2 }" xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 justify-end transition-transform transform" viewBox="0 0 20 20" fill="currentColor" >
                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
            </svg>
        </button>
        <div x-show="bantuan2" class="text-stone-800 mt-4 text-md">
            <h3 class="font-semibold">Memgerjakan Tes (Pretest)</h3>
            <p>1. Pada <em>sidebar</em> navigasi klik ikon tes</p>
            <img src="https://routely-image-storage.vercel.app/images/4.png" title="Melakukan Tes 1" class="max-w-md rounded-lg border border-r-4 border-b-4 border-stone-800 my-2" loading="lazy"/>
            <p>2. Pilih <em>Pretest</em> yang akan dikerjakan</p>
            <img src="https://routely-image-storage.vercel.app/images/5.png" title="Melakukan Tes 2" class="max-w-md rounded-lg border border-r-4 border-b-4 border-stone-800 my-2" loading="lazy"/>
            <p>3. Masukan <em>Passcode</em> yang telah diberikan di kelas.</p>
            <img src="https://routely-image-storage.vercel.app/images/6.png" title="Melakukan Tes 3" class="max-w-md rounded-lg border border-r-4 border-b-4 border-stone-800 my-2" loading="lazy"/>
            <p>4. Kerjakan soal yang diberikan.</p>
            <img src="https://routely-image-storage.vercel.app/images/7.png" title="Melakukan Tes 4" class="max-w-md rounded-lg border border-r-4 border-b-4 border-stone-800 my-2" loading="lazy"/>
            <p>5. Setelah seluruh soal telah dikerjakan, klik selesaikan tes untuk mengumpulkan jawaban.</p>
            <img src="https://routely-image-storage.vercel.app/images/9.png" title="Melakukan Tes 5" class="max-w-md rounded-lg border border-r-4 border-b-4 border-stone-800 my-2" loading="lazy"/>
            <p>6. Selesai, anda telah menyelesaikan tes. Nilai dapat langsung dilihat</p>
            <img src="https://routely-image-storage.vercel.app/images/11.png" title="Melakukan Tes 6" class="max-w-md rounded-lg border border-r-4 border-b-4 border-stone-800 my-2" loading="lazy"/>
        </div>
    </div>

    {{-- <div x-data="{ bantuan3: false }" class="max-w-4xl mx-auto bg-stone-50 p-5 rounded-lg hover:shadow-md border border-r-4 border-b-4 border-stone-700 my-4">
        <button @click="bantuan3 = !bantuan3" class="flex justify-between w-full">
            <h2 class="text-lg clashdisplaymedium">Mengakses Pertemuan</h2>
            <svg x-bind:class="{ 'rotate-180': bantuan3 }" xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 justify-end transition-transform transform" viewBox="0 0 20 20" fill="currentColor" >
                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
            </svg>
        </button>
        <div x-show="bantuan3" class="text-stone-800 mt-4 text-md">
            <p>This is some additional information that can be toggled on and off.</p>
        </div>
    </div> --}}

    <div x-data="{ bantuan4: false }" class="max-w-4xl mx-auto bg-stone-50 p-5 rounded-lg hover:shadow-md border border-r-4 border-b-4 border-stone-700 my-4">
        <button @click="bantuan4 = !bantuan4" class="flex justify-between w-full transition duration-300 group">
            <h2 class="text-lg clashdisplaymedium">Mengisi Lembar Apersepsi</h2>
            <svg x-bind:class="{ 'rotate-180': bantuan4 }" xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 justify-end transition-transform transform" viewBox="0 0 20 20" fill="currentColor" >
                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
            </svg>
        </button>
        <div x-show="bantuan4" class="text-stone-800 mt-4 text-md">
            <p>1. Pada laman pertemuan klik Persiapan untuk menemukan bagian "Tujuan Pembelajaran dan Lembar Apersepsi"</p>
            <img src="https://routely-image-storage.vercel.app/images/Apersepsi-1.png" title="Mengisi Lembar Apersepsi 1" class="max-w-md rounded-lg border border-r-4 border-b-4 border-stone-800 my-2" loading="lazy"/>
            <p>2. Isi lembar apersepsi sesuai dengan pertanyaan yang diberikan. Perlu diingat bahwa pada lembar apersepsi anda tidak dapat mengubah jawaban lembar apersepsi.</p>
            <img src="https://routely-image-storage.vercel.app/images/Apersepsi-2.png" title="Mengisi Lembar Apersepsi 2" class="max-w-md rounded-lg border border-r-4 border-b-4 border-stone-800 my-2" loading="lazy"/>
            <p>3. Setelah mengirim lembar apersepsi, anda dapat melihat hasilnya.</p>
            <img src="https://routely-image-storage.vercel.app/images/Apersepsi-3.png" title="Mengisi Lembar Apersepsi 3" class="max-w-md rounded-lg border border-r-4 border-b-4 border-stone-800 my-2" loading="lazy"/>
        </div>
    </div>

    {{-- <div x-data="{ bantuan5: false }" class="max-w-4xl mx-auto bg-stone-50 p-5 rounded-lg hover:shadow-md border border-r-4 border-b-4 border-stone-700 my-4">
        <button @click="bantuan5 = !bantuan5" class="flex justify-between w-full transition duration-300 group">
            <h2 class="text-lg clashdisplaymedium">Mengakses Materi (Pemahaman)</h2>
            <svg x-bind:class="{ 'rotate-180': bantuan5 }" xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 justify-end transition-transform transform" viewBox="0 0 20 20" fill="currentColor" >
                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
            </svg>
        </button>
        <div x-show="bantuan5" class="text-stone-800 mt-4 text-md">
            <p>This is some additional information that can be toggled on and off.</p>
        </div>
    </div> --}}

    <div x-data="{ bantuan6: false }" class="max-w-4xl mx-auto bg-stone-50 p-5 rounded-lg hover:shadow-md border border-r-4 border-b-4 border-stone-700 my-4">
        <button @click="bantuan6 = !bantuan6" class="flex justify-between w-full transition duration-300 group">
            <h2 class="text-lg clashdisplaymedium">Pengajuan Masalah (Soal)</h2>
            <svg x-bind:class="{ 'rotate-180': bantuan6 }" xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 justify-end transition-transform transform" viewBox="0 0 20 20" fill="currentColor" >
                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
            </svg>
        </button>
        <div x-show="bantuan6" class="text-stone-800 mt-4 text-md">
            <h3 class="font-semibold">Mengirim Soal (Pengajuan Masalah)</h3>
            <p>1. Pada laman pertemuan scroll ke bawah untuk menemukan bagian "Pengajuan Masalah (Soal)"</p>
            <img src="https://routely-image-storage.vercel.app/images/Pengajuan-Masalah-1.png" title="Pengajuan Masalah (Soal) 1" class="max-w-md rounded-lg border border-r-4 border-b-4 border-stone-800 my-2" loading="lazy"/>
            <p>2. Isi semua kolom, setelah itu klik "Kirim Soal" untuk mengirimkan soal yang ingin diajukan</p>
            <img src="https://routely-image-storage.vercel.app/images/Pengajuan-Masalah-2.png" title="Pengajuan Masalah (Soal) 2" class="max-w-md rounded-lg border border-r-4 border-b-4 border-stone-800 my-2" loading="lazy"/>
            <h3 class="font-semibold">Mengunduh soal dari kelompok lain</h3>
            <p>1. Setelah mengirim soal, anda dapat melihat hasilnya dan mengunduh soal dari kelompok lain. *Setiap kelompok akan menampilkan satu file terbaru.</p>
            <img src="https://routely-image-storage.vercel.app/images/Pengajuan-Masalah-3.png" title="Pengajuan Masalah (Soal) 3" class="max-w-md rounded-lg border border-r-4 border-b-4 border-stone-800 my-2" loading="lazy"/>
        </div>
    </div>

    <div x-data="{ bantuan7: false }" class="max-w-4xl mx-auto bg-stone-50 p-5 rounded-lg hover:shadow-md border border-r-4 border-b-4 border-stone-700 my-4">
        <button @click="bantuan7 = !bantuan7" class="flex justify-between w-full transition duration-300 group">
            <h2 class="text-lg clashdisplaymedium">Pemecahan Masalah (Pengumpulan Tugas)</h2>
            <svg x-bind:class="{ 'rotate-180': bantuan7 }" xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 justify-end transition-transform transform" viewBox="0 0 20 20" fill="currentColor" >
                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
            </svg>
        </button>
        <div x-show="bantuan7" class="text-stone-800 mt-4 text-md">
            <h3 class="font-semibold">Mengumpulkan Tugas (pemecahan masalah)</h3>
            <p>1. Pada laman pertemuan scroll ke bawah untuk menemukan bagian "Pemecahan Masalah (Pengumpulan Tugas)".</p>
            <img src="https://routely-image-storage.vercel.app/images/Pemecahan-Masalah-1.png" title="Pemecahan Masalah (Pengumpulan Tugas) 1" class="max-w-md rounded-lg border border-r-4 border-b-4 border-stone-800 my-2" loading="lazy"/>
            <p>2. Klik "Kirim Tugas" untuk mengunggah tugas yang telah dikerjakan.</p>
            <img src="https://routely-image-storage.vercel.app/images/Pemecahan-Masalah-2.png" title="Pemecahan Masalah (Pengumpulan Tugas) 2" class="max-w-md rounded-lg border border-r-4 border-b-4 border-stone-800 my-2" loading="lazy"/>
            <p>3. Selesai, tugas telah diunggah dan dapat dilihat oleh kelompok lain jika akan mengunduhnya saat presentasi di kelas.</p>
            <img src="https://routely-image-storage.vercel.app/images/Pemecahan-Masalah-3.png" title="Pemecahan Masalah (Pengumpulan Tugas) 3" class="max-w-md rounded-lg border border-r-4 border-b-4 border-stone-800 my-2" loading="lazy"/>
            <p>4. Nilai akan diberikan setelah pertemuan selesai.
        </div>
    </div>

    <div x-data="{ bantuan8: false }" class="max-w-4xl mx-auto bg-stone-50 p-5 rounded-lg hover:shadow-md border border-r-4 border-b-4 border-stone-700 my-4">
        <button @click="bantuan8 = !bantuan8" class="flex justify-between w-full transition duration-300 group">
            <h2 class="text-lg clashdisplaymedium">Mengerjakan Verifikasi (Kuis)</h2>
            <svg x-bind:class="{ 'rotate-180': bantuan8 }" xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 justify-end transition-transform transform" viewBox="0 0 20 20" fill="currentColor" >
                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
            </svg>
        </button>
        <div x-show="bantuan8" class="text-stone-800 mt-4 text-md">
            <h3 class="font-semibold">Mengerjakan Verifikasi (Kuis)</h3>
            <p>1. Pada laman pertemuan scroll ke bawah untuk menemukan bagian "Verifikasi (Kuis)"</p>
            <img src="https://routely-image-storage.vercel.app/images/Kuis-1.png" title="Mengerjakan Verifikasi (Kuis) 1" class="max-w-md rounded-lg border border-r-4 border-b-4 border-stone-800 my-2" loading="lazy"/>
            <p>2. Kerjakan soal yang diberikan lalu klik "Selesaikan Kuis" untuk mengumpulkan jawaban</p>
            <img src="https://routely-image-storage.vercel.app/images/Kuis-2.png" title="Mengerjakan Verifikasi (Kuis) 2" class="max-w-md rounded-lg border border-r-4 border-b-4 border-stone-800 my-2" loading="lazy"/>
            <h3 class="font-semibold mt-4">Mengulas (review) hasil Verifikasi (Kuis)</h3>
            <p>1. Setelah anda menyelesaikan kuis. Nilai dapat langsung dilihat dan direview. Klik "Review Hasil Kuis" untuk melihat nilai, jawaban benar atau salah, dan pembasahannya.</p>
            <img src="https://routely-image-storage.vercel.app/images/Kuis-3.png" title="Mengerjakan Verifikasi (Kuis) 3" class="max-w-md rounded-lg border border-r-4 border-b-4 border-stone-800 my-2" loading="lazy"/>
            <p>2. Dapat dilihat hasil kuis yang telah dikerjakan beserta benar atau salah serta pembahasannya (jika ada)</p>
            <img src="https://routely-image-storage.vercel.app/images/Kuis-4.png" title="Mengerjakan Verifikasi (Kuis) 4" class="max-w-md rounded-lg border border-r-4 border-b-4 border-stone-800 my-2" loading="lazy"/>
        </div>
    </div>

    <div x-data="{ bantuan9: false }" class="max-w-4xl mx-auto bg-stone-50 p-5 rounded-lg hover:shadow-md border border-r-4 border-b-4 border-stone-700 my-4">
        <button @click="bantuan9 = !bantuan9" class="flex justify-between w-full transition duration-300 group">
            <h2 class="text-lg clashdisplaymedium">Mengisi Lembar Refleksi</h2>
            <svg x-bind:class="{ 'rotate-180': bantuan9 }" xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 justify-end transition-transform transform" viewBox="0 0 20 20" fill="currentColor" >
                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
            </svg>
        </button>
        <div x-show="bantuan9" class="text-stone-800 mt-4 text-md">
            <p>1. Pada laman pertemuan scroll ke bawah untuk menemukan bagian "Lembar Refleksi"</p>
            <img src="https://routely-image-storage.vercel.app/images/lembarrefleksi-1.png" title="Mengisi Lembar Refleksi 1" class="max-w-md rounded-lg border border-r-4 border-b-4 border-stone-800 my-2" loading="lazy"/>
            <p>2. Isi lembar refleksi sesuai dengan pertanyaan yang diberikan</p>
            <img src="https://routely-image-storage.vercel.app/images/lembarrefleksi-2.png" title="Mengisi Lembar Refleksi 2" class="max-w-md rounded-lg border border-r-4 border-b-4 border-stone-800 my-2" loading="lazy"/>
            <p>3. Klik "Kirim" untuk menyimpan refleksi yang telah diisi</p>
            <img src="https://routely-image-storage.vercel.app/images/lembarrefleksi-3.png" title="Mengisi Lembar Refleksi 3" class="max-w-md rounded-lg border border-r-4 border-b-4 border-stone-800 my-2" loading="lazy"/>
        </div>
    </div>

    <div x-data="{ bantuan10: false }" class="max-w-4xl mx-auto bg-stone-50 p-5 rounded-lg hover:shadow-md border border-r-4 border-b-4 border-stone-700 my-4">
        <button @click="bantuan10 = !bantuan10" class="flex justify-between w-full transition duration-300 group">
            <h2 class="text-lg clashdisplaymedium">Mengubah Kata Sandi dengan Pemulihan Akun</h2>
            <svg x-bind:class="{ 'rotate-180': bantuan10 }" xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 justify-end transition-transform transform" viewBox="0 0 20 20" fill="currentColor" >
                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
            </svg>
        </button>
        <div x-show="bantuan10" class="text-stone-800 mt-4 text-md">
            <h3 class="font-semibold">Mengatur Pertanyaan dan Jawaban Pemulihan Akun</h3>
            <p>1. Pergi ke laman Profil, ada 3 (tiga) cara untuk mengaksesnya melalui laman <em>Dashboard Student</em>.</p>
            <img src="https://routely-image-storage.vercel.app/images/Pemulihan-Password-1.png" title="Mengubah Kata Sandi dengan Pemulihan Akun 1" class="max-w-md rounded-lg border border-r-4 border-b-4 border-stone-800 my-2" loading="lazy"/>
            <p>2. Scroll ke bawah untuk menemukan bagian Pertanyaan Pemulihan Kata Sandi.</p>
            <img src="https://routely-image-storage.vercel.app/images/Pemulihan-Password-2.png" title="Mengubah Kata Sandi dengan Pemulihan Akun 2" class="max-w-md rounded-lg border border-r-4 border-b-4 border-stone-800 my-2" loading="lazy"/>
            <p>3. Pilih pertanyaan pemulihan kata sandi. Ada 10 pertanyaan yang dapat anda pilih.</p>
            <img src="https://routely-image-storage.vercel.app/images/Pemulihan-Password-3.png" title="Mengubah Kata Sandi dengan Pemulihan Akun 3" class="max-w-md rounded-lg border border-r-4 border-b-4 border-stone-800 my-2" loading="lazy"/>
            <p>4. Isi jawaban pertanyaan pemulihan kata sandi. Jawaban ini <em>case sensitive</em> artinya setiap huruf besar, huruf kecil, spasi, angka, dan simbol lainnya akan sangat berpengaruh. Gunakan jawaban yang sangat tidak mungkin untuk diketahui oleh orang lain.</p>
            <img src="https://routely-image-storage.vercel.app/images/Pemulihan-Password-4.png" title="Mengubah Kata Sandi dengan Pemulihan Akun 4" class="max-w-md rounded-lg border border-r-4 border-b-4 border-stone-800 my-2" loading="lazy"/>
            <p>5. Klik <em>Simpan Perubahan</em> untuk menyimpan perubahan.</p>
            <img src="https://routely-image-storage.vercel.app/images/Pemulihan-Password-5.png" title="Mengubah Kata Sandi dengan Pemulihan Akun 5" class="max-w-md rounded-lg border border-r-4 border-b-4 border-stone-800 my-2" loading="lazy"/>
            <p> Anda dapat mengisi lebih dari satu untuk pertanyaan dan pemulihan kata sandi</p>
            <h3 class="font-semibold mt-4">Mengubah kata sandi dengan pemulihan kata sandi</h3>
            <p>1. Jika anda lupa dengan kata sandi anda, anda dapat mengubahnya melalui laman lupa sandi, dengan syarat anda telah mengisi pertanyaan dan jawaban pemulihan kata sandi. Pada laman <em>Login</em> klik "Lupa sandi?"</p>
            <img src="https://routely-image-storage.vercel.app/images/Pemulihan-Password-6.png" title="Mengubah Kata Sandi dengan Pemulihan Akun 6" class="max-w-md rounded-lg border border-r-4 border-b-4 border-stone-800 my-2" loading="lazy"/>
            <p>2. Masukan <em>email</em>, pertanyaan serta jawaban pemulihan, dan kata sandi baru yang akan dibuat</p>
            <img src="https://routely-image-storage.vercel.app/images/Pemulihan-Password-7.png" title="Mengubah Kata Sandi dengan Pemulihan Akun 7" class="max-w-md rounded-lg border border-r-4 border-b-4 border-stone-800 my-2" loading="lazy"/>
            <p>3. Klik <em>Ubah Kata Sandi</em> untuk menyimpan perubahan.</p>
            <img src="https://routely-image-storage.vercel.app/images/Pemulihan-Password-8.png" title="Mengubah Kata Sandi dengan Pemulihan Akun 8" class="max-w-md rounded-lg border border-r-4 border-b-4 border-stone-800 my-2" loading="lazy"/>
            <p>4. Maka kata sandi baru telah dibuat dan dapat digunakan untuk mengakses akun anda</p>
        </div>
    </div>

</section>
@endsection
