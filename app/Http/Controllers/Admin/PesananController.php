<?php

namespace App\Http\Controllers\admin;
use App\Models\Order;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PesananController extends Controller
{
    //  
    

    public function index()
    {
        $orders = Order::with('items')->latest()->get();
        return view('admin.pesanan', compact('orders'));
    }
    public function updateStatus(Request $request, $id)
{
    Order::findOrFail($id)->update([
        'status' => $request->status
    ]);

    return response()->json(['success' => true]);
}

}