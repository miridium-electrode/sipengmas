<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengmas;

class TampilkanPengmasController extends Controller
{
    public function index() {
        $met = new Pengmas();
        
        return view('daftarpengmas', [
            'prodi' => $met->getProdi(),
            'pengmas' => $met->getPengmasTest()
        ]);
    }
}
