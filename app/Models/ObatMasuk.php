<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ObatMasuk extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function obat()
    {
        return $this->belongsTo('App\Models\Obat');
    }

    public function satuan()
    {
        return $this->belongsTo('App\Models\Satuan');
    }

    public function suplaier()
    {
        return $this->belongsTo('App\Models\Suplaier');
    }
}
