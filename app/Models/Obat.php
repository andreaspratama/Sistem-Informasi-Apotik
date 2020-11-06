<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Obat extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function satuan()
    {
        return $this->belongsTo('App\Models\Satuan');
    }

    public function kategori()
    {
        return $this->belongsTo('App\Models\Kategori');
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
