<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JenjangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jenjang')->insert([
            ['nama_jenjang' => 'D3'],
            ['nama_jenjang' => 'D4'],
            ['nama_jenjang' => 'S2'],
        ]);
    }
}
