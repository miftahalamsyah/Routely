<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Pertemuan;


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
            'name' => 'Nama Siswa',
            'email' => 'bhoysnesia@gmail.com',
            'slug' => (string) Str::uuid(),
            'password' => bcrypt('bhoysnesia@gmail.com'),
            'is_admin' => false,
        ]);

        User::create([
            'name' => 'Sosok Keluarbiasaan',
            'email' => 'miftahrizkyalamsyah@protonmail.com',
            'slug' => (string) Str::uuid(),
            'password' => bcrypt('miftahrizkyalamsyah@protonmail.com'),
            'is_admin' => false,
        ]);


        Pertemuan::create([
            'slug' => 'pertemuan-ke-1',
            'pertemuan_ke' => '1',
            'tanggal' => '2024-05-11',
            'tujuan_pembelajaran' => 'Siswa dapat ',
            'apersepsi' => 'Siswa dapat',
        ]);

        Pertemuan::create([
            'slug' => 'pertemuan-ke-2',
            'pertemuan_ke' => '2',
            'tanggal' => '2024-05-18',
            'tujuan_pembelajaran' => 'Siswa dapat ',
            'apersepsi' => 'Siswa dapat',
        ]);

        Pertemuan::create([
            'slug' => 'pertemuan-ke-3',
            'pertemuan_ke' => '3',
            'tanggal' => '2024-05-23',
            'tujuan_pembelajaran' => 'Siswa dapat ',
            'apersepsi' => 'Siswa dapat',
        ]);

        Pertemuan::create([
            'slug' => 'pertemuan-ke-4',
            'pertemuan_ke' => '4',
            'tanggal' => '2024-05-30',
            'tujuan_pembelajaran' => 'Siswa dapat ',
            'apersepsi' => 'Siswa dapat',
        ]);
    }
}
