@extends('layouts.admin')

@section('title')
    Tambah Penjualan
@endsection

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-3 text-gray-800 text-center">Tambah Data Penjualan</h1>
        
        <div class="card mr-auto ml-auto" style="width: 50%">
            <h5 class="card-header">Penjualan</h5>
            <div class="card-body">
                <form action="{{route('penjualan.store')}}" method="POST">
                    @csrf
                    <div class="form-group">
                      <label for="obat_id">Obat</label>
                      <select class="form-control @error('obat_id') is-invalid @enderror" name="obat_id">
                        <option>Pilih Obat...</option>
                        @foreach ($obats as $o)
                          <option value="{{$o->id}}">{{$o->nama}}</option>
                        @endforeach
                      </select>
                      @error('obat_id')
                        <div id="validationServer03Feedback" class="invalid-feedback">
                            {{$message}}
                        </div>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="satuan_id">Satuan</label>
                      <select class="form-control @error('satuan_id') is-invalid @enderror" name="satuan_id">
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
                        <label for="kategori_id">Kategori</label>
                        <select class="form-control @error('kategori_id') is-invalid @enderror" name="kategori_id">
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
                        <label for="tanggal">Tanggal</label>
                        <input type="date" class="form-control @error('tanggal') is-invalid @enderror" name="tanggal" placeholder="Tanggal Pembelian...">
                        @error('tanggal')
                          <div id="validationServer03Feedback" class="invalid-feedback">
                              {{$message}}
                          </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="jumlah">Jumlah</label>
                        <input type="text" class="form-control @error('jumlah') is-invalid @enderror" name="jumlah" placeholder="Jumlah...">
                        @error('jumlah')
                          <div id="validationServer03Feedback" class="invalid-feedback">
                              {{$message}}
                          </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="harga_sat">Harga Satuan</label>
                        <input type="text" class="form-control @error('harga_sat') is-invalid @enderror" name="harga_sat" placeholder="Harga Satuan...">
                        @error('harga_sat')
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
    @include('sweetalert::alert')
@endsection