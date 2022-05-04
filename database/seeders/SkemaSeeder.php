<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SkemaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Skema')->insert([
            ['nama_skema' => 'lokal'],
            ['nama_skema' => 'nasional'],
            ['nama_skema' => 'internasional'],
        ]);
    }
}
