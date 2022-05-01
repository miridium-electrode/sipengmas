<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pengmas extends Model
{
    public $timestamps = false;
    
    public function jurusan()
    {
        return $this->hasMany(Jurusan::class);
    }

    public function periode()
    {
        return $this->hasMany(Periode::class);
    }

    public function prodi() {
        return $this->hasMany(Prodi::class);
    }

    public function pegawai()
    {
        return $this->belongsToMany(Pegawai::class, 
        'daftar_pengmas', 'pengmas_id', 'nip')->withPivot('ketua');
    }
}
