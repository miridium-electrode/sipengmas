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
                'prodi_id' => 2,
                'judul' => "Pengenalan Penggunaan Bluetooth sebagai Media Pembelajaran Jarak Jauh Studi Kasus Belajar Pemrograman Python bagi Siswa SMK di USBJJ Pungging Mojokerto",
                'periode_id' => 1,
                'jurusan_id' => 3,
            ],
            [
                'dana' => 15000.00,
                'prodi_id' => 2,
                'judul' => "Service Learning in Computer Engineering (Slice) Desa Sedayulawas, Kecamatan Brondong Kabupaten Lamongan",
                'periode_id' => 1,
                'jurusan_id' => 3,
            ]
        ]);
    }
}
