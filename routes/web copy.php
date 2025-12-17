<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\PesananController;
use App\Http\Controllers\admin\ProductController as AdminProductController;
use App\Http\Controllers\admin\UsersController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use Phiki\Phast\Root;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/About', [AboutController::class, 'index']);
Route::get('/Product', [ProductController::class, 'index']);
Route::get('/Cart', [CartController::class, 'index']);
Route::get('/Contact', [ContactController::class, 'index']);

// Admin Route
Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/product', [AdminProductController::class, 'index'])->name('product.index');
Route::post('/product', [AdminProductController::class, 'store'])->name('product.store');
Route::put('/admin/product/{id}', [AdminProductController::class, 'update'])->name('product.update');
Route::delete('/admin/product/{id}', [AdminProductController::class, 'destroy'])->name('product.destroy');



Route::get('/pesanan', [PesananController::class, 'index']);
Route::patch('/admin/pesanan/{id}/status',[PesananController::class, 'updateStatus']);


Route::get('/user', [UsersController::class, 'index']);
Route::get('/login', [AboutController::class, 'login']);
Route::get('/register', [AboutController::class, 'register']);
Route::get('/account',[AboutController::class,'account']);