<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Data Penjualan</title>
  </head>
  <body>
    {{-- <img src="{{url('foto/bunayya.png')}}" alt=""> --}}
    <h3 class="text-center mb-3">Laporan Data Penjualan</h3>
    <table class="table table-striped table-bordered text-center table-sm">
      <thead>
        <tr>
          <th>No</th>
          <th>Kode Trans</th>
          <th>Obat</th>
          <th>Satuan</th>
          <th>Kategori</th>
          <th>Tanggal</th>
          <th>Jumlah</th>
          <th>Harga Satuan</th>
          <th>Total</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($cetakitem as $item)
          <tr>
              <td>{{$loop->iteration}}</td>
              <td>{{$item->kode_trans}}</td>
              <td>{{$item->obat->nama}}</td>
              <td>{{$item->satuan->nama}}</td>
              <td>{{$item->kategori->nama}}</td>
              <td>{{$item->tanggal}}</td>
              <td>{{$item->jumlah}}</td>
              <td>Rp. {{number_format($item->harga_sat)}}</td>
              <td>Rp. {{number_format($item->tot_harga)}}</td>
          </tr>
        @endforeach
      </tbody>
    </table>   
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>


{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan Data Obat Masuk</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
    <div class="container">
      <p align="center" class="mb-3"><b>Laporan Data Obat Masuk</b></p>
      <table class="table table-bordered text-center table-sm">
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
              </tr>
          </thead>
          <tbody>
              @foreach ($cetakitem as $item)
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
                </tr>
              @endforeach
          </tbody>
      </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html> --}}