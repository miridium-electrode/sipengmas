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
            ['nip' => '10001' ,'nama_lengkap' => 'Lucky'],
            ['nip' => '10002', 'nama_lengkap' => 'Epyk Sunarno'],
            ['nip' => '10003', 'nama_lengkap' => 'Irianto'],
            ['nip' => '10004', 'nama_lengkap' => 'Gigih Prabowo'],
            ['nip' => '10005', 'nama_lengkap' => 'Ony'],
            ['nip' => '10006', 'nama_lengkap' => 'Sutedjo'],
            ['nip' => '10007', 'nama_lengkap' => 'Endro'],
            ['nip' => '10008', 'nama_lengkap' => 'Ali'],
            ['nip' => '10009', 'nama_lengkap' => 'Zainal'],
            ['nip' => '10010', 'nama_lengkap' => 'Elizabeth'],
            ['nip' => '10011', 'nama_lengkap' => 'Rika'],
            ['nip' => '10012', 'nama_lengkap' => 'Artiarini'],
            ['nip' => '10013', 'nama_lengkap' => 'Achmad Basuki'],
            ['nip' => '10014', 'nama_lengkap' => 'Safrodin'],
            ['nip' => '10015', 'nama_lengkap' => 'Hero'],
            ['nip' => '10016', 'nama_lengkap' => 'Udin'],
            ['nip' => '10017', 'nama_lengkap' => 'Rengga'],
        ]);
    }
}
