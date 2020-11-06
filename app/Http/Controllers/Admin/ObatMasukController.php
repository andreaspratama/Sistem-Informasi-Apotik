<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ObatMasukRequest;
use App\Models\ObatMasuk;
use App\Models\Obat;
use App\Models\Satuan;
use App\Models\Suplaier;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ObatMasukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = ObatMasuk::with(['satuan', 'suplaier', 'obat'])->orderBy('id', 'DESC')->get();

        return view('pages.admin.obatmasuk.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $obats = Obat::all();
        $satuans = Satuan::all();
        $suplaiers = Suplaier::all();
        return view('pages.admin.obatmasuk.create', compact('satuans', 'suplaiers', 'obats'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ObatMasukRequest $request)
    {
        $tanggal = Carbon::now();

        $obatm = new ObatMasuk;
        $obatm->kode_trans = 'OBM' . mt_rand(1000,9999) . mt_rand(100,999);
        $obatm->obat_id = $request->obat_id;
        $obatm->satuan_id = $request->satuan_id;
        $obatm->suplaier_id = $request->suplaier_id;
        $obatm->jumlah = $request->jumlah;
        $obatm->tanggal = $tanggal;
        $obatm->harga_sat = $request->harga_sat;
        $obatm->tot_harga = $request->jumlah * $request->harga_sat;
        $obatm->save();

        $obat = Obat::findOrFail($request->obat_id);
        $obat->stok += $request->jumlah;
        $obat->save();

        return redirect()->route('obatmasuk.index')->with('success', 'Data Berhasil Ditambah');
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
        $item = ObatMasuk::findOrFail($id);
        $obats = Obat::all();
        $satuans = Satuan::all();
        $suplaiers = Suplaier::all();

        return view('pages.admin.obatmasuk.edit', compact('item', 'satuans', 'suplaiers', 'obats'));
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

        // $obatm = ObatMasuk::find($id);
        // $obatm->obat_id = $request->obat_id;
        // $obatm->satuan_id = $request->satuan_id;
        // $obatm->suplaier_id = $request->suplaier_id;
        // $obatm->jumlah = $request->jumlah;
        // $obatm->tanggal = $tanggal;
        // $obatm->harga_sat = $request->harga_sat;
        // $obatm->tot_harga = $request->jumlah * $request->harga_sat;
        // $obatm->save();

        // $obat = Obat::findOrFail($request->obat_id);
        // $obat->stok -= $request->jumlah;
        // $obat->save();

        // return redirect()->route('obatmasuk.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = ObatMasuk::findOrFail($id);
        $item->delete();

        return redirect()->route('obatmasuk.index');
    }
}
