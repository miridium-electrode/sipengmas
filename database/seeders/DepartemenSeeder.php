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
                'nama_departemen' => 'Departemen Komputer dan Informatika'
            ],
            [
                'nama_departemen' => 'Departemen Elektro'
            ],
        ]);
    }
}
