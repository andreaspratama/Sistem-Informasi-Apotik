@extends('layouts.admin')

@section('title')
    Tambah Kategori
@endsection

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-3 text-gray-800 text-center">Tambah Data Kategori</h1>
        
        <div class="card mr-auto ml-auto" style="width: 50%">
            <h5 class="card-header">Kategori</h5>
            <div class="card-body">
                <form action="{{route('kategori.store')}}" method="POST">
                    @csrf
                    <div class="form-group">
                      <label for="kode">Kode Kategori</label>
                      <input type="text" class="form-control @error('kode') is-invalid @enderror" name="kode" placeholder="Kode Kategori..." value="{{old('kode')}}">
                      @error('kode')
                        <div id="validationServer03Feedback" class="invalid-feedback">
                            {{$message}}
                        </div>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="nama">Nama Kategori</label>
                      <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" placeholder="Nama Kategori..." value="{{old('nama')}}">
                      @error('nama')
                        <div id="validationServer03Feedback" class="invalid-feedback">
                            {{$message}}
                        </div>
                      @enderror
                    </div>
                    <a href="{{route('kategori.index')}}" class="btn btn-secondary">Batal</a>
                    <button type="submit" class="btn btn-primary float-right">Simpan Kategori</button>
                </form>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
@endsection