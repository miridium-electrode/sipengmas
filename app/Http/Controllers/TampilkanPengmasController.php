<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prodi;

class TampilkanPengmasController extends Controller
{
    public function index() {
        $namaProdi = Prodi::find(1)->nama_prodi; 

        return view('daftarpengmas', [
            'prodi' => $namaProdi
        ]);
    }
}
