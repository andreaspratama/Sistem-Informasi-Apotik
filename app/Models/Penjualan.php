<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function obat()
    {
        return $this->belongsTo('App\Models\Obat');
    }

    public function kategori()
    {
        return $this->belongsTo('App\Models\Kategori');
    }

    public function satuan()
    {
        return $this->belongsTo('App\Models\Satuan');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
