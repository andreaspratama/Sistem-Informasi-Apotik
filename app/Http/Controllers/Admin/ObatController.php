<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ObatRequest;
use App\Models\Obat;
use App\Models\Satuan;
use App\Models\Kategori;
use Illuminate\Http\Request;

class ObatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Obat::with(['satuan', 'kategori'])->orderBy('id', 'DESC')->get();

        return view('pages.admin.obat.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $satuans = Satuan::all();
        $kategoris = Kategori::all();
        return view('pages.admin.obat.create', compact('satuans', 'kategoris'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ObatRequest $request)
    {
        $data = $request->all();

        Obat::create($data);

        return redirect()->route('obat.index')->with('success', 'Data Berhasil Ditambah');
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
        $item = Obat::findOrFail($id);
        $satuans = Satuan::all();
        $kategoris = Kategori::all();

        return view('pages.admin.obat.edit', compact('item', 'satuans', 'kategoris'));
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
        $data = $request->all();

        $item = Obat::findOrFail($id);
        $item->update($data);

        return redirect()->route('obat.index')->with('success', 'Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Obat::findOrFail($id);
        $item->delete();

        return redirect()->route('obat.index');
    }
}
