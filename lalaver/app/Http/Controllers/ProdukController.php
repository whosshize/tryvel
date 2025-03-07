<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class ProdukController extends Controller
{
    public function index()
    {
        $produk = [
            ['id' => 1, 'nama' => 'Laptop', 'harga' => 10000000],
            ['id' => 2, 'nama' => 'Mouse', 'harga' => 100000],
            ['id' => 3, 'nama' => 'Keyboard', 'harga' => 200000],
        ];

        return view('produk.index', compact('produk'));
    }
}
