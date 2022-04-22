<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Pengmas extends Model
{
    public $timestamps = false;

    public function getProdi() {
        return DB::table('prodi')->get();
    }

    public function getPengmasTest() {
        return DB::table('pengmas')->get();
    }
}
