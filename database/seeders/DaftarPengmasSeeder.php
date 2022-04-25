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
                'nip' => '218049380',
                'pengmas_id' => 1,
                'ketua' => 1,
            ],
            [
                'nip' => '890890212',
                'pengmas_id' => 1,
                'ketua' => 0,
            ],
            [
                'nip' => '567688711',
                'pengmas_id' => 2,
                'ketua' => 1,
            ],
            [
                'nip' => '779809801',
                'pengmas_id' => 2,
                'ketua' => 0,
            ],
        ]);
    }
}
