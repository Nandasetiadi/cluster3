@extends('index')
@section('judul','gallery')
@section('konten')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Gallery Tohsaka Rin</title>
</head>
<body>
    <div class="gallery">
        <div class="gallery-item">
            <img src="/img/Featured-Image-11.avif" alt="Tohsaka Rin 1" width="390" height="300"> 
        </div>
        <div class="gallery-item">
            <img src="gambar2.jpg" alt="Tohsaka Rin 2">
        </div>
        <div class="gallery-item">
            <img src="gambar3.jpg" alt="Tohsaka Rin 3">
        </div>
        <!-- Tambahkan gambar-gambar lainnya di sini -->
    </div>
</body>
</html>
@endsection