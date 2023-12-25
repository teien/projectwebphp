<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductDetail;

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::get('/contact', [App\Http\Controllers\ContactController::class, 'index']);

Route::get('/product/{id}' , [ProductDetail::class, 'show']);

Route::get('/product' , [ProductDetail::class, 'index']);

Route::post('/contact' , [ContactController::class, 'store']);

Route::post('/comments' , [ProductDetail::class, 'store']);









