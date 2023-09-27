<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
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
            'password' => bcrypt('miftah'),
            'is_admin' => true,
        ]);

        User::create([
            'name' => 'Nama Siswa',
            'email' => 'bhoysnesia@gmail.com',
            'password' => bcrypt('bhoysnesia@gmail.com'),
            'is_admin' => false,
        ]);
    }
}
