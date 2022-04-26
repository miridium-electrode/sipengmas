<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class JurusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jurusan')->insert([
            ['nama_jurusan' => 'Teknik Informatika'],
            ['nama_jurusan' => 'Teknik Komputer'],
            ['nama_jurusan' => 'Teknik Elektronika'],
            ['nama_jurusan' => 'Teknik Elektro Industri'],
            ['nama_jurusan' => 'Teknik Telekomunikasi'],
            ['nama_jurusan' => 'Sistem Pembangkit Energi'],
            ['nama_jurusan' => 'Teknologi Game'],
            ['nama_jurusan' => 'Teknologi Multimedia Broadcasting'],
        ]);
    }
}
