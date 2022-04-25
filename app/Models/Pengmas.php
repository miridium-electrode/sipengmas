<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Pengmas extends Model
{
    protected $table = 'pengmas';
    public $timestamps = false;

    public function prodi() {
        return $this->hasMany(Prodi::class);
    }

    public function pegawai() {
        return $this
        ->belongsToMany(Pegawai::class, 'daftar_pengmas',
         'pengmas_id', 'nip')
         ->withPivot(['ketua']);
    }
}
