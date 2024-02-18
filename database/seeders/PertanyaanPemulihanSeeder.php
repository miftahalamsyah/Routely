<?php

namespace Database\Seeders;

use App\Models\PertanyaanPemulihan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PertanyaanPemulihanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        PertanyaanPemulihan::create([
            'pertanyaan' => 'Apa destinasi liburan impian Anda yang belum pernah tercapai?',
        ]);

        PertanyaanPemulihan::create([
            'pertanyaan' => 'Apa nama makanan khas daerah kelahiran Anda yang jarang diketahui orang?',
        ]);

        PertanyaanPemulihan::create([
            'pertanyaan' => 'Siapa penyanyi atau band favorit Anda yang tidak terlalu populer?',
        ]);

        PertanyaanPemulihan::create([
            'pertanyaan' => 'Apa aktivitas yang paling Anda nikmati di akhir pekan?',
        ]);

        PertanyaanPemulihan::create([
            'pertanyaan' => 'Apakah nama panggilan atau nama kecil yang hanya digunakan oleh orang-orang terdekat Anda?',
        ]);

        PertanyaanPemulihan::create([
            'pertanyaan' => 'Apa hobi atau kegiatan yang Anda lakukan secara rahasia?',
        ]);

        PertanyaanPemulihan::create([
            'pertanyaan' => 'Apa kota atau tempat yang paling berkesan bagi Anda yang tidak banyak orang ketahui?',
        ]);

        PertanyaanPemulihan::create([
            'pertanyaan' => 'Apakah sesuatu yang pernah Anda lakukan yang membuat Anda merasa sangat bangga, tetapi tidak banyak orang mengetahuinya?',
        ]);

        PertanyaanPemulihan::create([
            'pertanyaan' => 'Apa film atau acara TV yang jarang diketahui orang tetapi menjadi favorit Anda?',
        ]);

        PertanyaanPemulihan::create([
            'pertanyaan' => 'Apakah nama pahlawan atau tokoh inspiratif yang tidak populer tetapi memiliki dampak besar pada hidup Anda?',
        ]);
    }
}
