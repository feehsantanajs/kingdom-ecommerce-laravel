<?php

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

use App\Http\Controllers\ProductController;

Route::get('/', [ProductController::class,'index']);
Route::post('/product_form', [ProductController::class,'store']);


Route::get('/login', function () {
    return view('login');
});

Route::get('/subscribe', function () {
    return view('subscribe');
});

Route::get('/product', function () {
    return view('system/product');
});

Route::get('/begin', function () {
    return view('system/begin');
});


Route::get('/register_product', function () {
    return view('system/register_product');
});


