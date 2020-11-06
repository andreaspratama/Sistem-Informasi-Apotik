@extends('layouts.admin')

@section('title')
    Edit Satuan
@endsection

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-3 text-gray-800 text-center">Edit Data Satuan</h1>
        
        <div class="card mr-auto ml-auto" style="width: 50%">
            <h5 class="card-header">Satuan</h5>
            <div class="card-body">
                <form action="{{route('satuan.update', $item->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                      <label for="nama">Nama Satuan</label>
                      <input type="text" class="form-control" name="nama" placeholder="Nama Satuan..." value="{{$item->nama}}">
                    </div>
                    <a href="{{route('satuan.index')}}" class="btn btn-secondary">Batal</a>
                    <button type="submit" class="btn btn-primary float-right">Ubah Satuan</button>
                </form>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
@endsection