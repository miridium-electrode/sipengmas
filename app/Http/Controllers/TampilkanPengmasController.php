<?php

namespace App\Http\Controllers;

use App\Models\Prodi;
use App\Models\Pengmas;
use App\Models\Periode;
use Inertia\Inertia;

class TampilkanPengmasController extends Controller
{
    public function index() {
        // $pengmas = Pengmas::all();
        $prodi = Prodi::all();
        $periode = Periode::all();

        return Inertia::render('Pengmas', [
            'prodi' => $prodi->map(function($p) {
                return [
                    'nama' => $p->nama_prodi
                ];
            }),
            'periode' => $periode->map(function($p) {
                return [
                    'tahun' => $p->tahun,
                ];
            }),
        ]);
    }
}
