<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ProductHomepage;
use App\Http\Controllers\HomeController;
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
    return view('homepage');
});

Auth::routes();

Route::get('/home',[App\Http\Controllers\HomeController::class, 'index']);

Route::get('/',[App\Http\Controllers\ProductHomepage::class, 'product']);

Route::get('/product', [App\Http\Controllers\ProductController::class, 'product'])->name('products.filter');

Route::get('/search', [App\Http\Controllers\ProductController::class, 'search'])->name('search');
Route::get('/product/search', [ProductController::class, 'search2'])->name('products.search');

