<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;
use App\Models\OrderItem;

class CartController extends Controller
{
    public function index()
    {
        if(!Auth::check()){
            return redirect()->route('login')->with('error', 'Silakan login terlebih dahulu!');
        }

        $cart = session()->get('cart', []);
        return view('cart', compact('cart'));
    }

    public function remove($id)
    {
        $cart = session()->get('cart', []);
        if(isset($cart[$id])){
            unset($cart[$id]);
            session()->put('cart', $cart);
        }
        return redirect()->back()->with('success', 'Produk berhasil dihapus dari keranjang!');
    }

    public function update(Request $request, $id)
    {
        $cart = session()->get('cart', []);
        if(isset($cart[$id])){
            $cart[$id]['qty'] = $request->qty;
            session()->put('cart', $cart);
        }
        return redirect()->back()->with('success', 'Jumlah produk diperbarui!');
    }

    public function checkout(Request $request)
{
    // Pastikan user login
    if(!Auth::check()){
        return redirect()->route('login')->with('error', 'Silakan login terlebih dahulu!');
    }

    $cart = session()->get('cart', []);

    if(empty($cart)){
        return redirect()->back()->with('error','Keranjang kosong!');
    }

    $user = Auth::user();
    

    // Buat cart siap untuk database
    $checkoutCart = [];
    $subtotal = 0;

    foreach($cart as $productId => $item){
        $qty = (int) $item['qty'];
        $price = (int) $item['price'];
        $total = $qty * $price;

        $checkoutCart[] = [
            'product_id' => $productId,
            'name' => $item['name'],
            'price' => $price,
            'qty' => $qty,
            'total' => $total,
            'image' => $item['image'] ?? null
        ];

        $subtotal += $total;
    }

    // Simpan order
    $order = Order::create([
        'user_id' => Auth::id(),
        
        'status' => 'Pending',
        'total' => $subtotal,
    ]);

    // Simpan item
    foreach($checkoutCart as $item){
        OrderItem::create([
            'order_id' => $order->id,
            'product_name' => $item['name'],
            'qty' => $item['qty'],
            'price' => $item['price'],
            'total' => $item['total'],
        ]);
    }

    // Kirim WA otomatis
    $wa_number = '6281234567890'; // nomor WA admin
    $message = "Pesanan baru dari {$user->name}%0A";
    foreach($checkoutCart as $item){
        $message .= "{$item['name']} x {$item['qty']} = Rp{$item['total']}%0A";
    }
    $message .= "Total: Rp" . ($order->total) . "%0A";

    $wa_url = "https://wa.me/{$wa_number}?text={$message}";

    // Kosongkan cart
    session()->forget('cart');

    // Redirect ke WA
    return redirect($wa_url);
}

}