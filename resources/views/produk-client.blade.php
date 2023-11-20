<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Sederhana</title>
    
    <!-- Tambahkan tautan ke Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
    <!-- Tautan ke file CSS kustom Anda (jika ada) -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
  <style>
    /* CSS untuk card produk */
.card {
    border: none;
    outline: 0;
    padding: 12px;
    color: white;
    background-color: black;
    text-align: center;
    margin-right: 20px;
    margin-top: 20px;
    margin-bottom: 20px;
    cursor: pointer;
    font-size: 18px;
    display: inline-block;
    width: 340px;
}

.card img {
    max-width: 100%;
    height: auto;
}

.card-title {
    font-size: 1.25rem;
    margin-top: 10px;
}

.card-text {
    font-size: 1rem;
}

.btn-primary {
    margin-top: 10px;
}

/* Mengatur ukuran gambar */
.card-body {
    text-align: center;
}

/* CSS untuk footer */
/* CSS untuk body dan konten utama */
body {
    display: flex;
    flex-direction: column;
    min-height: 100vh; /* Mengisi seluruh tinggi viewport */
    margin: 0;
}

/* CSS untuk footer */
.footer {
    background-color: #333;
    color: #fff;
    max-width: 100%;
    padding: 10px 0;
    text-align: center;
    flex-shrink: 0; /* Footer tidak akan menyusut */
}

.navbar {
            overflow: hidden;
            background-color: #333;
        }
        
        /* Style untuk link di navbar */
        .navbar a {
            float: left;
            font-size: 16px;
            color: black;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        /* Style untuk link di navbar saat dihover */
        .navbar a:hover {
            background-color: #ddd;
            color: black;
        }
        
        /* Style untuk teks di pojok kanan */
        .navbar-right {
            float: right;
        }

  </style>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Toko minuman</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Beranda <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Produk</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Keranjang</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Kontak</a>
                </li>
            </ul>
        </div>
        <div class="navbar-right">
            <a href="/login">Login</a>
            <a href="/register">Register</a>
        </div>
    </nav>
    
    <!-- Konten Utama -->
    <div class="container mt-5">
        <h1>Selamat Datang di Toko minuman</h1>
        <p>Temukan berbagai produk berkualitas di toko kami.</p>
        
        <div class="row">
        @foreach($produk as $p)
        <!-- Produk -->
       
            <div class="card">
                <div class="card-body">
                    <img src="img/{{$p->foto}}" alt="" width="200" height="150">
                    <h5 class="card-title">Nama:{{ $p->nama_produk }}</h5>
                    <p class="card-text">Harga: Rp. {{$p->harga_produk}}</p>
                    <a href="#" class="btn btn-primary">Beli</a>
                </div>
            </div>
        
        @endforeach
    </div>
    
    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <p>Hak Cipta &copy; 2023 Nama Anda</p>
        </div>
    </footer>
    
    <!-- Tambahkan tautan ke Bootstrap JS dan jQuery (diperlukan untuk komponen Bootstrap yang berinteraksi) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
