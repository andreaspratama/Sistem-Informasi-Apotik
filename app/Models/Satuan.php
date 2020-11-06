<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Satuan extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function obat()
    {
        return $this->hasMany('App\Models\Obat');
    }

    public function obatMasuk()
    {
        return $this->hasMany('App\Models\ObatMasuk');
    }

    public function penjualan()
    {
        return $this->hasMany('App\Models\Penjualan');
    }
}
