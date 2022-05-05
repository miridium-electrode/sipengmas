<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pengmas extends Model
{
    protected $table = 'pengmas';
    public $timestamps = false;
    
    public function jenjang()
    {
        return $this->belongsTo(Jenjang::class);
    }

    public function periode()
    {
        return $this->belongsTo(Periode::class);
    }

    public function prodi() {
        return $this->belongsTo(Prodi::class);
    }

    public function departemen() {
        return $this->belongsTo(Departemen::class);
    }

    public function skema()
    {
        return $this->belongsTo(Skema::class);
    }

    public function ketua() {
        return $this->belongsToMany(Pegawai::class, 
        'daftar_pengmas', 'pengmas_id', 'nip')
        ->wherePivot('ketua', 1);
    }

    public function anggota() {
        return $this->belongsToMany(Pegawai::class, 
        'daftar_pengmas', 'pengmas_id', 'nip')
        ->wherePivot('ketua', 0);
    }
}
