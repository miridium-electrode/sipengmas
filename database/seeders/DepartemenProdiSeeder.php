<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartemenProdiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('departemen_prodi')->insert([
            [
                'departemen_id' => 1,
                'prodi_id' => 1,
            ],
            [
                'departemen_id' => 1,
                'prodi_id' => 2,
            ],
            [
                'departemen_id' => 1,
                'prodi_id' => 3,
            ],
            [
                'departemen_id' => 2,
                'prodi_id' => 4,
            ],
            [
                'departemen_id' => 2,
                'prodi_id' => 5,
            ],
            [
                'departemen_id' => 2,
                'prodi_id' => 6,
            ],
            [
                'departemen_id' => 3,
                'prodi_id' => 7,
            ],
            [
                'departemen_id' => 3,
                'prodi_id' => 8,
            ],
            [
                'departemen_id' => 4,
                'prodi_id' => 9,
            ],
            [
                'departemen_id' => 4,
                'prodi_id' => 10,
            ],
        ]);
    }
}
