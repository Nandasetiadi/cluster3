<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h3>Data produk</h3>
    <a href="/produk">kembali</a>
    <br/>
    <br/>

    <form action="/produk/storetambah"method="post">
        {{csrf_field()}}
        Kode: <br>
        <input type="text" name="kode_produk" required="required"><br/>
        Nama: <br>
        <input type="text" name="nama_produk" required="required"><br/>
        Tipe: <br>
        <input type="text" name="tipe_produk" required="required"><br/>
        Harga: <br>
        <input type="number" name="harga_produk" required="required"><br/>
        Stok: <br>
        <input type="number" name="stok_produk" required="required"><br/>
        <input type="submit" value="Simpan Data">
    </form>
</body>
</html>