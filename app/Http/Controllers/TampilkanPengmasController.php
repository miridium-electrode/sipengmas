<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TampilkanPengmasController extends Controller
{
    public function index() {
        return view('daftarpengmas');
    }
}
