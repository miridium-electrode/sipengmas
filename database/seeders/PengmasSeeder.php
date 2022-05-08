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
                'judul' => "Workshop Perancangan dan Pemasangan Panel Surya di Gresik",
                'prodi_id' => 3,
                'departemen_id' => 1,
                'periode_id' => 1,
                'skema_id' => 1,
                'jenjang_id' => 2,
            ],
            [
                'dana' => 15000.00,
                'judul' => "Pelatihan Analisa aliran daya menggunakan ETAP untuk guru SMK Probolinggo",
                'prodi_id' => 3,
                'departemen_id' => 1,
                'periode_id' => 1,
                'skema_id' => 1,
                'jenjang_id' => 2,
            ],
            [
                'dana' => 15000.00,
                'judul' => "pengenalan SMT pada rangkaian elekronika 2 layer pcb untuk meningkatkan daya saing SMK probolinggo",
                'prodi_id' => 1,
                'departemen_id' => 1,
                'periode_id' => 1,
                'skema_id' => 1,
                'jenjang_id' => 2,
            ],
            [
                'dana' => 15000.00,
                'judul' => "pelatihan motion capture studio game untuk komunitas GADAS surabaya",
                'prodi_id' => 9,
                'departemen_id' => 4,
                'periode_id' => 1,
                'skema_id' => 1,
                'jenjang_id' => 2,
            ],
            [
                'dana' => 15000.00,
                'judul' => "pengenalan big blue button untuk pjj smk mojokerto",
                'prodi_id' => 4,
                'departemen_id' => 2,
                'periode_id' => 1,
                'skema_id' => 1,
                'jenjang_id' => 2,
            ],
        ]);
    }
}
