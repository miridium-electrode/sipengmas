<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use App\Models\Periode;
use App\Models\Prodi;
use App\Models\Pegawai;
use App\Models\Pengmas;

class TampilkanPengmasController extends Controller
{
    public function index() {
        $jurusan = Jurusan::all();
        $periode = Periode::all();
        $prodi = Prodi::all();
        $pengmas = Pengmas::with(['jurusan', 'periode', 
        'prodi', 'ketua', 'anggota'])->get();

        return view('data', [
            'jurusan' => $jurusan,
            'periode' => $periode,
            'prodi' => $prodi,
            'pengmas' => $pengmas,
        ]);
    }
}
