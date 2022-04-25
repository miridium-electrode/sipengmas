<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pegawai')->insert([
            ['nip' => '218049380' ,'nama_lengkap' => 'Sutedjo'],
            ['nip' => '890890212', 'nama_lengkap' => 'Epyk Sunarno'],
            ['nip' => '567688711', 'nama_lengkap' => 'Irianto'],
            ['nip' => '779809801', 'nama_lengkap' => 'Gigih Prabowo']
        ]);
    }
}
