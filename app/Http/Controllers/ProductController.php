<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('product', compact('products'));
    }

    public function addToCart(Request $request, $id)
    {
        // Jika belum login → redirect ke login
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'Silakan login terlebih dahulu!');
        }

        $product = Product::findOrFail($id);

        // Ambil cart dari session, jika belum ada → buat array kosong
        $cart = session()->get('cart', []);

        if(isset($cart[$id])) {
            $cart[$id]['qty']++;
        } else {
            $cart[$id] = [
                
                "name" => $product->nama_produk,
                "price" => $product->harga,
                "qty" => 1,
                "image" => $product->gambar
            ];
        }

        session()->put('cart', $cart);

        return redirect()->back()->with('success', 'Produk berhasil ditambahkan ke keranjang!');
    }
}