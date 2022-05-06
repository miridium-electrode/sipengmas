<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Prodi extends Model
{
    protected $table = "prodi";
    public $timestamps = false;

    public function departemen()
    {
        return $this->belongsToMany(Departemen::class);
    }
}
