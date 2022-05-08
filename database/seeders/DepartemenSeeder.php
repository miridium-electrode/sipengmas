<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartemenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('departemen')->insert([
            [
                'nama_departemen' => 'Departemen Teknik Elektro'
            ],
            [
                'nama_departemen' => 'Departemen Teknik Informatika dan Komputer'
            ],
            [
                'nama_departemen' => 'Departemen Teknik Mekanika dan Energi'
            ],
            [
                'nama_departemen' => 'Departemen Teknologi Multimedia Kreatif'
            ],
        ]);
    }
}
