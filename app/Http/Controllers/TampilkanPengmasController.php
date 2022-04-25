<?php

namespace App\Http\Controllers;

use App\Models\Prodi;
use App\Models\Pengmas;

class TampilkanPengmasController extends Controller
{
    public function index() {
        $namaProdi = Prodi::find(1)->nama_prodi; 
        $namaPegawaiYangPunyaPengmas = Pengmas::first();

        return view('daftarpengmas', [
            'prodi' => $namaProdi,
            'pengmas' => $namaPegawaiYangPunyaPengmas,
        ]);
    }
}
