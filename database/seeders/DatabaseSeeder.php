<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Periode;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $ps = New ProdiSeeder();
        $pers = new PeriodeSeeder();
        $pes = new PegawaiSeeder();
        $pens = new PengmasSeeder();
        $dps = new DaftarPengmasSeeder();

        $ps->run();
        $pers->run();
        $pes->run();
        $pens->run();
        $dps->run();
    }
}
