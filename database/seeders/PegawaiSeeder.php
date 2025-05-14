<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PegawaiSeeder extends Seeder
{
    public function run()
    {
        DB::table('pegawai')->insert([
            [
                'nama' => 'Budi Santoso',
                'jabatan' => 'Mekanik',
                'no_hp' => '081234567890'
            ],
            [
                'nama' => 'Siti Aminah',
                'jabatan' => 'Kasir',
                'no_hp' => '081298765432'
            ],
            [
                'nama' => 'Agus Wirawan',
                'jabatan' => 'Admin',
                'no_hp' => '081277788899'
            ]
        ]);
    }
}
