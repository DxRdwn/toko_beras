<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Product;
use App\Models\Order;
use App\Models\OrderItem;

class DashboardController extends Controller
{
    public function index()
    {
        // Kartu ringkasan
        $totalOrders   = Order::count();
        $totalRevenue  = Order::where('status', 'Approved')->sum('total');
        $totalCustomers = User::where('role', 'user')->count();
        $totalProducts = Product::count();

        // Recent orders
        $recentOrders = Order::with('user')
            ->latest()
            ->take(5)
            ->get();

        // Top selling products (berdasarkan qty)
        $topProducts = OrderItem::selectRaw('product_name, SUM(qty) as sold, SUM(qty * price) as revenue')
            ->groupBy('product_name')
            ->orderByDesc('sold')
            ->take(5)
            ->get();

        return view('admin.dashboard', compact(
            'totalOrders',
            'totalRevenue',
            'totalCustomers',
            'totalProducts',
            'recentOrders',
            'topProducts'
        ));
    }
}