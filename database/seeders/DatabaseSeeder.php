<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $ps = new ProdiSeeder();
        $j = new JurusanSeeder();
        $pes = new PegawaiSeeder();
        $pens = new PengmasSeeder();
        $dps = new DaftarPengmasSeeder();

        $ps->run();
        $j->run();
        $pes->run();
        $pens->run();
        $dps->run();
    }
}
