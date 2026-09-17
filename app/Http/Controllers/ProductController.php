<?php
namespace App\Http\Controllers;

class ProductController extends Controller
{
    public function index()
    {
        // Data dummy produk
        $products = [
            ['nama' => 'Laptop', 'harga' => 'Rp 10.000.000'],
            ['nama' => 'Mouse', 'harga' => 'Rp 150.000'],
            ['nama' => 'Keyboard', 'harga' => 'Rp 300.000'],
        ];

        // Mengirim data ke view 'produk.index'
        return view('index', compact('products'));
    }
}