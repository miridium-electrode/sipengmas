<?php

namespace App\Http\Controllers;

use App\Models\Prodi;
use App\Models\Pengmas;

class TampilkanPengmasController extends Controller
{
    public function index() {
        $pengmas = Pengmas::all();
        $prodi = Prodi::all();

        return view('daftarpengmas', [
            'prodi' => $prodi,
            'pengmas' => $pengmas,
        ]);
    }
}
