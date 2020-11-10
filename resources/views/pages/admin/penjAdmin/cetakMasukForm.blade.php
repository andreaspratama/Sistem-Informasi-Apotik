@extends('layouts.admin')

@section('title')
    Cetak Penjualan
@endsection

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-3 text-gray-800 text-center">Cetak Data Penjualan</h1>
        
        <div class="card mr-auto ml-auto" style="width: 50%">
            <h5 class="card-header">Cetak Penjualan</h5>
            <div class="card-body">
                <form action="#" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="tanggal">Tanggal Awal</label>
                        <input type="date" class="form-control" name="tglawal" id="tglawal" placeholder="Tanggal Obat...">
                    </div>
                    <div class="form-group">
                        <label for="tanggal">Tanggal Akhir</label>
                        <input type="date" class="form-control" name="tglakhir" id="tglakhir" placeholder="Tanggal Obat...">
                    </div>
                    <a href="{{route('dashboardAdmin')}}" class="btn btn-secondary">Batal</a>
                    <a href="#" onclick="this.href='cetakDataPertanggalPenjualan/'+ document.getElementById('tglawal').value + '/' + document.getElementById('tglakhir').value" target="_blank" class="btn btn-success float-right">Cetak <i class="fas fa-print ml-2"></i></a>
                </form>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
@endsection