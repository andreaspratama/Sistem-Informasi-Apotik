@extends('layouts.admin')

@section('title')
    Tambah Obat
@endsection

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-3 text-gray-800 text-center">Tambah Data Obat</h1>
        
        <div class="card mr-auto ml-auto" style="width: 50%">
            <h5 class="card-header">Obat</h5>
            <div class="card-body">
                <form action="{{route('obat.store')}}" method="POST">
                    @csrf
                    <div class="form-group">
                      <label for="kode">Kode Obat</label>
                      <input type="text" class="form-control @error('kode') is-invalid @enderror" name="kode" placeholder="Kode Obat..." value={{old('kode')}}>
                      @error('kode')
                        <div id="validationServer03Feedback" class="invalid-feedback">
                            {{$message}}
                        </div>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="nama">Nama Obat</label>
                      <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" placeholder="Nama Obat..." value={{old('nama')}}>
                      @error('nama')
                        <div id="validationServer03Feedback" class="invalid-feedback">
                            {{$message}}
                        </div>
                      @enderror
                    </div>
                    <div class="form-group">
                        <label for="kategori_id">Kategori</label>
                        <select class="form-control @error('kategori_id') is-invalid @enderror" name="kategori_id" value={{old('kategori_id')}}>
                          <option>Pilih Kategori...</option>
                          @foreach ($kategoris as $k)
                            <option value="{{$k->id}}">{{$k->nama}}</option>
                          @endforeach
                        </select>
                        @error('kategori_id')
                          <div id="validationServer03Feedback" class="invalid-feedback">
                              {{$message}}
                          </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="satuan_id">Satuan</label>
                        <select class="form-control @error('satuan_id') is-invalid @enderror" name="satuan_id" value={{old('satuan_id')}}>
                          <option>Pilih Satuan...</option>
                          @foreach ($satuans as $s)
                            <option value="{{$s->id}}">{{$s->nama}}</option>
                          @endforeach
                        </select>
                        @error('satuan_id')
                          <div id="validationServer03Feedback" class="invalid-feedback">
                              {{$message}}
                          </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="harga">Harga Obat</label>
                        <input type="text" class="form-control @error('harga') is-invalid @enderror" name="harga" placeholder="Harga Obat..." value={{old('harga')}}>
                        @error('harga')
                          <div id="validationServer03Feedback" class="invalid-feedback">
                              {{$message}}
                          </div>
                        @enderror
                    </div>
                    <a href="{{route('obat.index')}}" class="btn btn-secondary">Batal</a>
                    <button type="submit" class="btn btn-primary float-right">Simpan Data Obat</button>
                </form>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
@endsection