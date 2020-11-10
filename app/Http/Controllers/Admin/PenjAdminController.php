<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PenjualanRequest;
use App\Models\Penjualan;
use App\Models\Obat;
use App\Models\Satuan;
use App\Models\Kategori;
use Carbon\Carbon;
use PDF;
use Illuminate\Http\Request;

class PenjAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Penjualan::with(['satuan', 'kategori', 'obat'])->orderBy('id', 'DESC')->get();

        return view('pages.admin.penjAdmin.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $obats = Obat::all();
        // $satuans = Satuan::all();
        // $kategoris = Kategori::all();
        // return view('pages.admin.penjualan.create', compact('satuans', 'kategoris', 'obats'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PenjualanRequest $request)
    {
        // $tanggal = Carbon::now();

        // $obatm = new Penjualan;
        // $obatm->user_id = 1;
        // $obatm->kode_trans = 'TRX' . mt_rand(1000,9999) . mt_rand(100,999);
        // $obatm->obat_id = $request->obat_id;
        // $obatm->satuan_id = $request->satuan_id;
        // $obatm->kategori_id = $request->kategori_id;
        // $obatm->jumlah = $request->jumlah;
        // $obatm->tanggal = $tanggal;
        // $obatm->harga_sat = $request->harga_sat;
        // $obatm->tot_harga = $request->jumlah * $request->harga_sat;
        // $obatm->save();

        // $obat = Obat::findOrFail($request->obat_id);
        // $obat->stok -= $request->jumlah;
        // $obat->save();

        // return redirect()->route('penjualan.index')->with('success', 'Data Berhasil Ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $item = Penjualan::findOrFail($id);
        // $obats = Obat::all();
        // $satuans = Satuan::all();
        // $kategoris = Kategori::all();

        // return view('pages.admin.penjualan.edit', compact('item', 'satuans', 'kategoris', 'obats'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // $tanggal = Carbon::now();

        // $obatm = Penjualan::find($id);
        // $obatm->obat_id = $request->obat_id;
        // $obatm->satuan_id = $request->satuan_id;
        // $obatm->kategori_id = $request->kategori_id;
        // $obatm->jumlah = $request->jumlah;
        // $obatm->tanggal = $tanggal;
        // $obatm->harga_sat = $request->harga_sat;
        // $obatm->tot_harga = $request->jumlah * $request->harga_sat;
        // $obatm->save();

        // $obat = Obat::findOrFail($request->obat_id);
        // $obat->stok -= $request->jumlah;
        // $obat->save();

        // return redirect()->route('penjualan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $item = Penjualan::findOrFail($id);
        // $item->delete();

        // return redirect()->route('penjualan.index');
    }

    public function cetakForm()
    {
        return view('pages.admin.penjAdmin.cetakMasukForm');
    }

    public function cetakPenjualanPertanggal($tglawal, $tglakhir)
    {
        // dd(["Tanggal Awal : ".$tglawal, "Tanggal Akhir : ".$tglakhir]);
        $cetakitem = Penjualan::with(['satuan', 'kategori', 'obat'])->whereBetween('tanggal', [$tglawal, $tglakhir])->get();
        
        $pdf = PDF::loadview('export.penjualanpertanggalpdf', compact('cetakitem'));
        return $pdf->download('laporan-penjualan.pdf');
    }
}
