@extends('layouts.admin')

@section('title')
    Edit Kategori
@endsection

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-3 text-gray-800 text-center">Edit Data Kategori</h1>
        
        <div class="card mr-auto ml-auto" style="width: 50%">
            <h5 class="card-header">Kategori</h5>
            <div class="card-body">
                <form action="{{route('kategori.update', $item->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                      <label for="kode">Kode Kategori</label>
                      <input type="text" class="form-control" name="kode" placeholder="Kode Kategori..." value="{{$item->kode}}">
                    </div>
                    <div class="form-group">
                      <label for="nama">Nama Kategori</label>
                      <input type="text" class="form-control" name="nama" placeholder="Nama Kategori..." value="{{$item->nama}}">
                    </div>
                    <a href="{{route('kategori.index')}}" class="btn btn-secondary">Batal</a>
                    <button type="submit" class="btn btn-primary float-right">Ubah Kategori</button>
                </form>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
@endsection