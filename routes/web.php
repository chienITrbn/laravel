<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CartController;
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

//default routes
Route::get('/', [HomeController::class, 'index'])->name('home');

//Client routes
Route::prefix('clients')->group(function () {

    Route::get('/', [HomeController::class, 'index'])->name('home');

    Route::get('/cart-detail',[CartController::class,'cart'])->name('cart');
});

//Admin routes
