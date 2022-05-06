<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

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
            ['nama_prodi' => 'Teknik Informatika'],
            ['nama_prodi' => 'Teknik Komputer'],
            ['nama_prodi' => 'Teknik Elektronika'],
            ['nama_prodi' => 'Teknik Elektro Industri'],
            ['nama_prodi' => 'Teknik Telekomunikasi'],
            ['nama_prodi' => 'Sistem Pembangkit Energi'],
            ['nama_prodi' => 'Teknologi Game'],
            ['nama_prodi' => 'Teknologi Multimedia Broadcasting'],
        ]);
    }
}
