<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Penjualan;
use App\Models\Obat;
use App\Models\Suplaier;
use App\Models\ObatMasuk;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $items = Penjualan::with(['obat'])->orderBy('id', 'DESC')->take(5)->get();
        $masuks = ObatMasuk::with(['obat'])->orderBy('id', 'DESC')->take(5)->get();
        return view('pages.admin.dashboard', [
            'pendapatan' => Penjualan::sum('tot_harga'),
            'j_penjualan' => Penjualan::count(),
            'obat' => Obat::count(),
            'suplaier' => Suplaier::count(),
            'items' => $items,
            'masuks' => $masuks,
        ]);
    }
}
