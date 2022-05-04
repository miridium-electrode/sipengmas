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
        ]);
    }
}
