<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    protected $table = 'pegawai';
    protected $primaryKey = 'nip';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;

    public function pengmas() {
        return $this->belongsToMany(Pengmas::class)->using(DaftarPengmas::class);
    }
}
