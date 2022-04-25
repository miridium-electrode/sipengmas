<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('prodi')->insert([
            ['nama_prodi' => 'D3 Teknik Informatika'],
            ['nama_prodi' => 'D4 Teknik Informatika'],
            ['nama_prodi' => 'D3 Teknik Komputer'],
            ['nama_prodi' => 'D4 Teknik Komputer']
        ]);
    }
}
