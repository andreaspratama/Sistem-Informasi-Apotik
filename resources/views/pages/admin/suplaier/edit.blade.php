@extends('layouts.admin')

@section('title')
    Edit Suplaier
@endsection

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-3 text-gray-800 text-center">Edit Data Suplaier</h1>
        
        <div class="card mr-auto ml-auto" style="width: 50%">
            <h5 class="card-header">Suplaier</h5>
            <div class="card-body">
                <form action="{{route('suplaier.update', $item->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="nama">Nama Suplaier</label>
                        <input type="text" class="form-control" name="nama" placeholder="Nama Suplaier..." value="{{$item->nama}}">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat Suplaier</label>
                        <input type="text" class="form-control" name="alamat" placeholder="Alamat Suplaier..." value="{{$item->alamat}}">
                    </div>
                    <div class="form-group">
                          <label for="no_tlpn">No Telepon</label>
                          <input type="text" class="form-control" name="no_tlpn" placeholder="No Telepon..." value="{{$item->no_tlpn}}">
                    </div>
                    <a href="{{route('suplaier.index')}}" class="btn btn-secondary">Batal</a>
                    <button type="submit" class="btn btn-primary float-right">Ubah Suplaier</button>
                </form>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
@endsection