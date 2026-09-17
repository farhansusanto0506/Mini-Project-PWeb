<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Produk Toko</title>
    @vite(['resources/css/app.css'])
</head>
<body>
    <div class="container">
        <a href="{{ route('home') }}" class="btn-back">← Kembali ke Home</a>
        <h1 style="margin-top: 15px;">📦 Daftar Produk Toko</h1>
        
        <div class="product-grid">
            @foreach ($products as $id => $item)
                <div class="product-card">
                    <h2 class="product-name">{{ $item['nama'] }}</h2>
                    <div class="product-price">{{ $item['harga'] }}</div>
                    <a href="{{ route('produk.show', $id) }}" class="btn-detail">Lihat Detail</a>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>