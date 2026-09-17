<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang - Toko Mini Project</title>
    @vite(['resources/css/app.css'])
</head>
<body>
    <div class="container">
        <div class="hero-card">
            <h1>👋 Selamat Datang di Toko Mini Project</h1>
            <p class="hero-subtitle">
                Aplikasi ini dibangun menggunakan Laravel dengan menerapkan konsep 
                <strong>Routes</strong>, <strong>Controller</strong>, dan <strong>View</strong>.
            </p>

            <div class="info-box">
                <p>Saat ini terdapat <strong>{{ $totalProduk }}</strong> produk dalam katalog kami.</p>
            </div>

            <br>
            <a href="{{ route('produk.index') }}" class="btn-primary">
                Lihat Katalog Produk →
            </a>
        </div>
    </div>
</body>
</html>