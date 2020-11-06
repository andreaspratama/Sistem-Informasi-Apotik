@extends('layouts.admin')

@section('title')
    Tambah Satuan
@endsection

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-3 text-gray-800 text-center">Tambah Data Satuan</h1>
        
        <div class="card mr-auto ml-auto" style="width: 50%">
            <h5 class="card-header">Satuan</h5>
            <div class="card-body">
                <form action="{{route('satuan.store')}}" method="POST">
                    @csrf
                    <div class="form-group">
                      <label for="nama">Nama Satuan</label>
                      <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" placeholder="Nama Satuan..." value="{{old('nama')}}">
                      @error('nama')
                        <div id="validationServer03Feedback" class="invalid-feedback">
                            {{$message}}
                        </div>
                      @enderror
                    </div>
                    <a href="{{route('satuan.index')}}" class="btn btn-secondary">Batal</a>
                    <button type="submit" class="btn btn-primary float-right">Simpan Satuan</button>
                </form>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
@endsection