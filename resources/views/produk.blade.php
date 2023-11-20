@extends('index')
@section('judul','produk')
@section('konten')
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Sederhana</title>    
    <!-- Tautan ke file CSS kustom Anda (jika ada) -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
<!-- <h2>Data Pproduk</h2> -->
<table class="table table-striped table-hover">
  <thead>
    <tr>
      <th>Kode</th>
      <th>Nama</th>
      <th>Tipe</th>
      <th>Harga</th>
      <th>Stok</th>
      <th>foto</th>
    </tr>
  </thead>
  <tbody>
@foreach($produk as $t)
<tr>
  <td> {{$t->kode_produk}} </td>
  <td> {{$t->nama_produk}} </td>
  <td> {{$t->tipe_produk}} </td>
  <td> {{$t->harga_produk}} </td>
  <td> {{$t->stok_produk}} </td>
  <td> {{$t->foto}} </td>
</tr>
</tbody>
</table>
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="/storetambah" method="post">
                @csrf
                 <div class="mb-3">
                   <label for="kode_produk" class="form-label">Kode Barang</label>
                   <input type="number" class="form-control" name="kode_produk" >
                 </div>
                  <div class="mb-3">
                    <label for="nama_produk" class="form-label">Nama Produk</label>
                    <input type="text" class="form-control" name="nama_produk" >
                  </div>
                  <div class="mb-3">
                    <label for="tipe_produk" class="form-label">Tipe Produk</label>
                    <input type="text" class="form-control" name="tipe_produk" >
                  </div>
                  <div class="mb-3">
                    <label for="harga_produk" class="form-label">Harga</label>
                    <input type="text" class="form-control" name="harga_produk" >
                  </div>
                  <div class="mb-3">
                    <label for="stok_produk" class="form-label">Stok</label>
                    <input type="text" class="form-control" name="stok_produk" >
                  </div>
                <input type="submit"value="Simpan Data">
            </form>   
        </div>
    </div>
    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <p>Hak Cipta &copy; 2023 Nama Anda</p>
        </div>
    </footer>
    @endforeach
      </div>
    </div>
  </div>
</body>
@endsection