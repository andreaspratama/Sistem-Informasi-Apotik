<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suplaier extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function obatMasuk()
    {
        return $this->hasMany('App\Models\ObatMasuk');
    }
}
