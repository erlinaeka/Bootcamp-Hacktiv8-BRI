<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return view('welcome');
});
Route::get('/portofolio', function () {
    return view('portofolio');
});
Route::get('/company-profile', function () {
    return view('index-company-profile');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/tugas-navbar', function () {
    return view('tugas-navbar');
});
Route::get('/about', function () {
    return view('about');
})->name('about');


// Blog Routing
Route::get('/index-blog', [BlogController::class, 'index'])->name('indexBlog');
Route::get('/tambah-blog', [BlogController::class, 'create']);
Route::post('/proses-tambah-data', [BlogController::class, 'storeData']);
Route::get('/index-blog/{slug}', [BlogController::class, 'show']);
Route::get('/edit-data/{slug}', [BlogController::class, 'edit']);
Route::put('/proses-edit/{id}', [BlogController::class, 'updateData']);
Route::delete('/delete-blog/{id}', [BlogController::class, 'delete']);


