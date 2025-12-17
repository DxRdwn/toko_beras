<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\RoleMiddleware;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\PesananController;
use App\Http\Controllers\admin\ProductController as AdminProductController;
use App\Http\Controllers\admin\UsersController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;

use Phiki\Phast\Root;

Route::get('/', function () {
    return view('welcome');
})->name('home');
Route::get('/About', [AboutController::class, 'index'])->name('about');
Route::get('/Product', [ProductController::class, 'index']);
Route::get('/Cart', [CartController::class, 'index']);
Route::get('/Contact', [ContactController::class, 'index']);
Route::middleware(['auth', RoleMiddleware::class.':user'])->group(function() {
   Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
    Route::get('/cart/remove/{id}', [CartController::class, 'remove'])->name('cart.remove');
    Route::post('/cart/update/{id}', [CartController::class, 'update'])->name('cart.update');
Route::post('/cart/checkout', [CartController::class, 'checkout'])->name('cart.checkout');

    Route::get('/product/add-to-cart/{id}', [ProductController::class, 'addToCart'])->name('product.addToCart');

});


// Admin Route
Route::middleware(['auth', RoleMiddleware::class . ':admin'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/product', [AdminProductController::class, 'index'])->name('product.index');
    Route::post('/product', [AdminProductController::class, 'store'])->name('product.store');
    Route::put('/admin/product/{id}', [AdminProductController::class, 'update'])->name('product.update');
    Route::delete('/admin/product/{id}', [AdminProductController::class, 'destroy'])->name('product.destroy');

    Route::get('/pesanan', [PesananController::class, 'index']);
    Route::patch('/admin/pesanan/{id}/status',[PesananController::class, 'updateStatus']);
});


Route::get('/user', [UsersController::class, 'index']);
Route::get('/login', [AboutController::class, 'login']);
Route::get('/register', [AboutController::class, 'register']);
Route::get('/account',[AboutController::class,'account']);



require __DIR__.'/auth.php';