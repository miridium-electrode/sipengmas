<?php

namespace App\Http\Controllers;

use App\Models\Prodi;
use App\Models\Pengmas;
use App\Models\Periode;

class TampilkanPengmasController extends Controller
{
    public function index() {
        $pengmas = Pengmas::all();
        $prodi = Prodi::all();
        $periode = Periode::all();

        return view('daftarpengmas', [
            'prodi' => $prodi,
            'pengmas' => $pengmas,
            'periode' => $periode,
        ]);
    }
}
