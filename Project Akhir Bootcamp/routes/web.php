<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderItemController;
use App\Http\Controllers\ProductController;
use App\Models\OrderItems;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect()->route('home');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/index-kategori', function () {
    return view('pages/kategori/index');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');;
    // Route Kategori
    Route::get('/index-kategori', [CategoryController::class, 'index'])->name('index-kategori');
    Route::get('/tambah-kategori', [CategoryController::class, 'create'])->name('tambah-kategori');
    Route::post('/proses-tambah-kategori', [CategoryController::class, 'store'])->name('proses-tambah-kategori');
    Route::get('/edit-kategori/{id}', [CategoryController::class, 'edit'])->name('edit-kategori');
    Route::put('/proses-edit-kategori/{id}', [CategoryController::class, 'update'])->name('proses-edit-kategori');
    Route::delete('/delete-kategori/{id}', [CategoryController::class, 'destroy'])->name('delete-kategori');
    // Route Product
    Route::get('/index-produk', [ProductController::class, 'index'])->name('index-produk');
    Route::get('/detail-produk/{id}', [ProductController::class, 'show'])->name('detail-produk');
    Route::get('/tambah-produk', [ProductController::class, 'create'])->name('tambah-produk');
    Route::post('/proses-tambah-produk', [ProductController::class, 'store'])->name('proses-tambah-produk');
    Route::get('/edit-produk/{id}', [ProductController::class, 'edit'])->name('edit-produk');
    Route::put('/proses-edit-produk/{id}', [ProductController::class, 'update'])->name('proses-edit-produk');
    Route::delete('/delete-produk/{id}', [ProductController::class, 'destroy'])->name('delete-produk');
    // Order Item
    Route::get('/index-order-item', [OrderItemController::class, 'index'])->name('index-order-item');
    Route::get('/tambah-order-item', [OrderItemController::class, 'create'])->name('tambah-order-item');
    Route::post('/proses-tambah-order-item', [OrderItemController::class, 'store'])->name('proses-tambah-order-item');
    Route::get('/edit-order-item/{id}', [OrderItemController::class, 'edit'])->name('edit-order-item');
    Route::put('/proses-edit-order-item/{id}', [OrderItemController::class, 'update'])->name('proses-edit-order-item');
    Route::delete('/delete-order-item/{id}', [OrderItemController::class, 'destroy'])->name('delete-order-item');
    // Check Out
    Route::get('/index-order', [OrderController::class, 'index'])->name('index-order');
    Route::get('/checkout-order', [OrderController::class, 'checkout'])->name('checkout-order');
    Route::get('/edit-status-order/{id}', [OrderController::class, 'editStatus'])->name('edit-status');
    Route::put('/proses-edit-status-order/{id}', [OrderController::class, 'prosesEditStatus'])->name('proses-edit-status-order');
});

