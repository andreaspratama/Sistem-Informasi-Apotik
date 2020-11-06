@extends('layouts.admin')

@section('title')
    Tambah Suplaier
@endsection

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-3 text-gray-800 text-center">Tambah Data Suplaier</h1>
        
        <div class="card mr-auto ml-auto" style="width: 50%">
            <h5 class="card-header">Suplaier</h5>
            <div class="card-body">
                <form action="{{route('suplaier.store')}}" method="POST">
                    @csrf
                    <div class="form-group">
                      <label for="nama">Nama Suplaier</label>
                      <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" placeholder="Nama Suplaier..." value="{{old('nama')}}">
                      @error('nama')
                        <div id="validationServer03Feedback" class="invalid-feedback">
                            {{$message}}
                        </div>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="alamat">Alamat Suplaier</label>
                      <input type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" placeholder="Alamat Suplaier..." value="{{old('alamat')}}">
                      @error('alamat')
                        <div id="validationServer03Feedback" class="invalid-feedback">
                            {{$message}}
                        </div>
                      @enderror
                    </div>
                    <div class="form-group">
                        <label for="no_tlpn">No Telepon</label>
                        <input type="text" class="form-control @error('no_tlpn') is-invalid @enderror" name="no_tlpn" placeholder="No Telepon..." value="{{old('no_tlpn')}}">
                        @error('no_tlpn')
                        <div id="validationServer03Feedback" class="invalid-feedback">
                            {{$message}}
                        </div>
                      @enderror
                    </div>
                    <a href="{{route('suplaier.index')}}" class="btn btn-secondary">Batal</a>
                    <button type="submit" class="btn btn-primary float-right">Simpan Suplaier</button>
                </form>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
@endsection