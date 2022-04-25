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
        $ps = New ProdiSeeder();
        $pes = new PegawaiSeeder();
        $pens = new PengmasSeeder();
        $dps = new DaftarPengmasSeeder();

        $ps->run();
        $pes->run();
        $pens->run();
        $dps->run();
    }
}
