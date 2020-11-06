@extends('layouts.admin')

@section('title')
    Edit Obat
@endsection

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-3 text-gray-800 text-center">Edit Data Obat</h1>
        
        <div class="card mr-auto ml-auto" style="width: 50%">
            <h5 class="card-header">Obat</h5>
            <div class="card-body">
                <form action="{{route('obat.update', $item->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="kode">Kode Obat</label>
                        <input type="text" class="form-control" name="kode" placeholder="Kode Obat..." value="{{$item->kode}}">
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama Obat</label>
                        <input type="text" class="form-control" name="nama" placeholder="Nama Obat..." value="{{$item->nama}}">
                    </div>
                    <div class="form-group">
                          <label for="kategori_id">Kategori</label>
                          <select class="form-control" name="kategori_id">
                            <option value="{{$item->kategori_id}}">Ubah Bila Perlu</option>
                            @foreach ($kategoris as $k)
                              <option value="{{$k->id}}">{{$k->nama}}</option>
                            @endforeach
                          </select>
                    </div>
                    <div class="form-group">
                          <label for="satuan_id">Satuan</label>
                          <select class="form-control" name="satuan_id">
                            <option value="{{$item->satuan_id}}">Ubah Bila Perlu</option>
                            @foreach ($satuans as $s)
                              <option value="{{$s->id}}">{{$s->nama}}</option>
                            @endforeach
                          </select>
                    </div>
                    <div class="form-group">
                          <label for="harga">Harga Obat</label>
                          <input type="text" class="form-control" name="harga" placeholder="Harga Obat..." value="{{$item->harga}}">
                    </div>
                    <a href="{{route('obat.index')}}" class="btn btn-secondary">Batal</a>
                    <button type="submit" class="btn btn-primary float-right">Ubah Obat</button>
                </form>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
@endsection