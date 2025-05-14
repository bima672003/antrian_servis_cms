<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Panggil seeder lain di sini
        $this->call([
            PegawaiSeeder::class,
        ]);
    }
}

