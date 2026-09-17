<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Produk Toko</title>
    <!-- Memanggil file CSS eksternal -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="container">
        <h1>📦 Daftar Produk Toko</h1>
        <div class="product-grid">
            @foreach ($products as $item)
                <div class="product-card">
                    <h2 class="product-name">{{ $item['nama'] }}</h2>
                    <div class="product-price">{{ $item['harga'] }}</div>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>