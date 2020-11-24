<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EcommerceController;
use App\Http\Controllers\ProductController;

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

// Route::get('/dashboard', function(){
//     return view('dashboard');
// });
// Route::get('/product', function(){
//     return view('pages.product');
// });

Route::get('/dashboard', [EcommerceController::class, 'home']);
Route::get('/product', [ProductController::class, 'index']);
Route::get('/product/create', [ProductController::class, 'create']);
Route::post('/product', [ProductController::class, 'store']);
Route::delete('/product/{request}', [ProductController::class, 'destroy']);
Route::get('/product/{request}/edit', [ProductController::class, 'edit']);
