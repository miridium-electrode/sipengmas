<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    protected $table;
    public $timestamps;
    protected $primaryKey = 'nip';
    public $incrementing = false;
    protected $keyType = 'string';

    public function pengmas() {
        return $this->belongsToMany(Pengmas::class, 'daftar_pengmas', 'nip', 'pengmas_id')
        ->withPivot('ketua');
    }
}
