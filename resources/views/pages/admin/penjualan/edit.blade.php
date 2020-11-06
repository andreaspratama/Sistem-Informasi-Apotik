@extends('layouts.admin')

@section('title')
    Edit Obat Masuk
@endsection

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-3 text-gray-800 text-center">Edit Data Obat Masuk</h1>
        
        <div class="card mr-auto ml-auto" style="width: 50%">
            <h5 class="card-header">Obat Masuk</h5>
            <div class="card-body">
                <form action="{{route('obatmasuk.update', $item->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                      <label for="obat_id">Obat</label>
                      <select class="form-control" name="obat_id">
                        <option value="{{$item->obat_id}}">Ubah Bila Perlu</option>
                        @foreach ($obats as $o)
                          <option value="{{$o->id}}">{{$o->nama}}</option>
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
                        <label for="suplaier_id">Suplaier</label>
                        <select class="form-control" name="suplaier_id">
                          <option value="{{$item->suplaier_id}}">Ubah Bila Perlu</option>
                          @foreach ($suplaiers as $s)
                            <option value="{{$s->id}}">{{$s->nama}}</option>
                          @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="tanggal">Tanggal</label>
                        <input type="date" class="form-control" name="tanggal" placeholder="Tanggal Obat..." value="{{$item->tanggal}}">
                    </div>
                    <div class="form-group">
                        <label for="jumlah">Jumlah</label>
                        <input type="text" class="form-control" name="jumlah" placeholder="Jumlah..." value="{{$item->jumlah}}">
                    </div>
                    <div class="form-group">
                        <label for="harga_sat">Harga Satuan</label>
                        <input type="text" class="form-control" name="harga_sat" placeholder="Harga Satuan..." value="{{$item->harga_sat}}">
                    </div>
                    <a href="{{route('obatmasuk.index')}}" class="btn btn-secondary">Batal</a>
                    <button type="submit" class="btn btn-primary float-right">Ubah Data Obat Masuk</button>
                </form>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
@endsection