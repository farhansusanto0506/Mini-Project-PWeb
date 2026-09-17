<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Produk - {{ $product['nama'] }}</title>
    @vite(['resources/css/app.css'])
</head>
<body>
    <div class="container">
        <div class="detail-card">
            <span class="badge">ID Produk: #{{ $id }}</span>
            <h1 class="detail-title">{{ $product['nama'] }}</h1>
            <div class="detail-price">{{ $product['harga'] }}</div>
            
            <div class="detail-section">
                <h3>Deskripsi Produk</h3>
                <p class="product-desc">{{ $product['deskripsi'] }}</p>
            </div>

            <div class="action-buttons">
                <a href="{{ route('produk.index') }}" class="btn-back">← Kembali ke Daftar Produk</a>
            </div>
        </div>
    </div>
</body>
</html>