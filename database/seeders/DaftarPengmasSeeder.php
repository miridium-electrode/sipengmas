<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DaftarPengmasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('daftar_pengmas')->insert([
            [
                'nip' => '10001',
                'pengmas_id' => 1,
                'ketua' => 1,
            ],
            [
                'nip' => '10006',
                'pengmas_id' => 1,
                'ketua' => 0,
            ],
            [
                'nip' => '10003',
                'pengmas_id' => 1,
                'ketua' => 0,
            ],
            [
                'nip' => '10004',
                'pengmas_id' => 1,
                'ketua' => 0,
            ],
            [
                'nip' => '10005',
                'pengmas_id' => 2,
                'ketua' => 1,
            ],
            [
                'nip' => '10006',
                'pengmas_id' => 2,
                'ketua' => 0,
            ],
            [
                'nip' => '10007',
                'pengmas_id' => 2,
                'ketua' => 0,
            ],
            [
                'nip' => '10008',
                'pengmas_id' => 3,
                'ketua' => 1,
            ],
            [
                'nip' => '10009',
                'pengmas_id' => 3,
                'ketua' => 0,
            ],
            [
                'nip' => '10010',
                'pengmas_id' => 3,
                'ketua' => 0,
            ],
            [
                'nip' => '10011',
                'pengmas_id' => 3,
                'ketua' => 0,
            ],
            [
                'nip' => '10012',
                'pengmas_id' => 4,
                'ketua' => 1,
            ],
            [
                'nip' => '10013',
                'pengmas_id' => 4,
                'ketua' => 0,
            ],
            [
                'nip' => '10014',
                'pengmas_id' => 4,
                'ketua' => 0,
            ],
            [
                'nip' => '10014',
                'pengmas_id' => 4,
                'ketua' => 0,
            ],
            [
                'nip' => '10015',
                'pengmas_id' => 5,
                'ketua' => 1,
            ],
            [
                'nip' => '10016',
                'pengmas_id' => 5,
                'ketua' => 0,
            ],
            [
                'nip' => '10017',
                'pengmas_id' => 5,
                'ketua' => 0,
            ],
        ]);
    }
}
