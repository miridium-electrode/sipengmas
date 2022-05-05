<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Departemen extends Model
{
    protected $table = "departemen";
    public $timestamps = false;

    public function prodi()
    {
        return $this->belongsToMany(Prodi::class);
    }
}
