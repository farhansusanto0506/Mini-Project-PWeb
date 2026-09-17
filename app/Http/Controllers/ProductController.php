<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    private $products = [
        1 => ['nama' => 'Laptop', 'harga' => 'Rp 10.000.000', 'deskripsi' => 'Laptop berkemampuan tinggi cocok untuk perkuliahan, desain, dan coding.'],
        2 => ['nama' => 'Mouse', 'harga' => 'Rp 150.000', 'deskripsi' => 'Mouse nirkabel (wireless) ergonomis, presisi tinggi, dan responsif.'],
        3 => ['nama' => 'Keyboard', 'harga' => 'Rp 300.000', 'deskripsi' => 'Keyboard mekanik dengan switch tactile dan backlight RGB.'],
    ];

    public function home()
    {
        $totalProduk = count($this->products);
        return view('home', compact('totalProduk'));
    }

    public function produk()
    {
        return view('index', ['products' => $this->products]);
    }

    public function show($id)
    {
        if (!isset($this->products[$id])) {
            abort(404, 'Produk tidak ditemukan');
        }

        $product = $this->products[$id];

        return view('show', compact('product', 'id'));
    }
}