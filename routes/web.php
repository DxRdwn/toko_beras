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
Route::get('/product', [AdminProductController::class, 'index']);
Route::get('/pesanan', [PesananController::class, 'index']);
Route::get('/user', [UsersController::class, 'index']);
Route::get('/login', [AboutController::class, 'login']);
Route::get('/register', [AboutController::class, 'register']);
Route::get('/account',[AboutController::class,'account']);