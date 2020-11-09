<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan Data Obat Masuk</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
    <p align="center" class="mb-3"><b>Laporan Data Obat Masuk</b></p>
    <table class="table">
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

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>