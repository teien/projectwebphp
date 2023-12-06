<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ProductHomepage;
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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);

Route::get('/', [App\Http\Controllers\ProductHomepage::class, 'product']);

Route::get('/product', [App\Http\Controllers\ProductController::class, 'index']);//view dtb ra trang product
Route::get('/product', [App\Http\Controllers\ProductController::class, 'product']);


 