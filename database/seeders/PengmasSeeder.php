<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PengmasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pengmas')->insert([
            [
                'dana' => 15000.00,
                'id_prodi' => 1,
                'judul' => "Pengenalan Penggunaan Bluetooth sebagai Media Pembelajaran Jarak Jauh Studi Kasus Belajar Pemrograman Python bagi Siswa SMK di USBJJ Pungging Mojokerto",
                'periode' => '2019',
            ],
            [
                'dana' => 15000.00,
                'id_prodi' => 3,
                'judul' => "Service Learning in Computer Engineering (Slice) Desa Sedayulawas, Kecamatan Brondong Kabupaten Lamongan",
                'periode' => '2019',
            ]
        ]);
    }
}
