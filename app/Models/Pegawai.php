<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Model;

class Pegawai extends Model
{
    protected $fillable = [
        'nip',
        'nama',
        'gelar_dpn',
        'gelar_blk',
        'username',
        'password',
        'agama_id',
        'jurusan_id',
        'staff_id'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
}
