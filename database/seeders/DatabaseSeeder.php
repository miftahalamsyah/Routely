<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Pertemuan;
use App\Models\KategoriTes;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        User::create([
            'name' => 'Miftah Rizky Alamsyah',
            'email' => 'miftahrizkyalamsyah@upi.edu',
            'slug' => (string) Str::uuid(),
            'password' => bcrypt('miftah'),
            'is_admin' => true,
        ]);

        User::create([
            'name' => 'Siswa Satu',
            'email' => 'bhoysnesia@gmail.com',
            'slug' => (string) Str::uuid(),
            'password' => bcrypt('bhoysnesia@gmail.com'),
            'is_admin' => false,
        ]);

        User::create([
            'name' => 'Siswa Dua',
            'email' => 'miftahrizkyalamsyah@protonmail.com',
            'slug' => (string) Str::uuid(),
            'password' => bcrypt('miftahrizkyalamsyah@protonmail.com'),
            'is_admin' => false,
        ]);


        Pertemuan::create([
            'slug' => 'pertemuan-ke-1',
            'pertemuan_ke' => '1',
            'tanggal' => '2024-08-05',
            'tujuan_pembelajaran' => 'Siswa dapat ',
            'apersepsi' => 'Siswa dapat',
        ]);

        Pertemuan::create([
            'slug' => 'pertemuan-ke-2',
            'pertemuan_ke' => '2',
            'tanggal' => '2024-08-06',
            'tujuan_pembelajaran' => 'Siswa dapat ',
            'apersepsi' => 'Siswa dapat',
        ]);

        Pertemuan::create([
            'slug' => 'pertemuan-ke-3',
            'pertemuan_ke' => '3',
            'tanggal' => '2024-08-07',
            'tujuan_pembelajaran' => 'Siswa dapat ',
            'apersepsi' => 'Siswa dapat',
        ]);

        KategoriTes::create([
            'kategori_tes' => 'Pretest',
            'slug' => 'pretest',
            'waktu_tes' => '60',
            'status_tes' => '1',
            'passcode' => mt_rand(100000, 999999)
        ]);

        KategoriTes::create([
            'kategori_tes' => 'Posttest',
            'slug' => 'posttest',
            'waktu_tes' => '60',
            'status_tes' => '0',
            'passcode' => mt_rand(100000, 999999)
        ]);
    }
}
