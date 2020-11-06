@extends('layouts.admin')

@section('title')
    Obat Masuk
@endsection

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-3 text-gray-800">Data Obat Masuk</h1>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
          <div class="card-header py-3">
              <a href="{{route('obatmasuk.create')}}" class="btn btn-primary"><i class="fas fa-plus mr-2"></i>Tambah Obat Masuk</a>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Kode Trans</th>
                    <th>Obat</th>
                    <th>Satuan</th>
                    <th>Suplaier</th>
                    <th>Tanggal</th>
                    <th>Jumlah</th>
                    <th>Harga Satuan</th>
                    <th>Total</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($items as $item)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$item->kode_trans}}</td>
                        <td>{{$item->obat->nama}}</td>
                        <td>{{$item->satuan->nama}}</td>
                        <td>{{$item->suplaier->nama}}</td>
                        <td>{{$item->tanggal}}</td>
                        <td>{{$item->jumlah}}</td>
                        <td>Rp. {{number_format($item->harga_sat)}}</td>
                        <td>Rp. {{number_format($item->tot_harga)}}</td>
                        <td>
                            {{-- <a href="{{route('obatmasuk.edit', $item->id)}}" class="btn btn-warning btn-sm">Edit</a> --}}
                            <a href="" class="btn btn-danger btn-sm" onclick="return confirm('Yakin Hapus')">
                              <form action="{{route('obatmasuk.destroy', $item->id)}}" method="POST" class="d-inline">
                                @csrf
                                @method('delete')
                                Delete
                              </form>
                            </a>
                        </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>

    </div>
    <!-- /.container-fluid -->
    @include('sweetalert::alert')
@endsection

@push('after-style')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
@endpush

@push('after-script')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $(document).ready( function () {
            $('#dataTable').DataTable();
        } );
    </script>
@endpush