<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use App\Models\User;


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
    }
}
