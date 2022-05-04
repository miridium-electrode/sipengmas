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
        $p = new ProdiSeeder();
        $d = new DepartemenSeeder();
        $dp = new DepartemenProdiSeeder();
        $j = new JenjangSeeder();
        $pers = new PeriodeSeeder();
        $s = new SkemaSeeder();
        $pes = new PegawaiSeeder();
        $pens = new PengmasSeeder();
        $dps = new DaftarPengmasSeeder();

        $p->run();
        $d->run();
        $dp->run();
        $j->run();
        $pers->run();
        $s->run();
        $pes->run();
        $pens->run();
        $dps->run();
    }
}
