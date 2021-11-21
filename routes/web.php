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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/categories', [App\Http\Controllers\CategoryController::class, 'index']);
Route::get('/add-category', [App\Http\Controllers\CategoryController::class, 'create'])->middleware('auth');
Route::post('/store-categories', [App\Http\Controllers\CategoryController::class, 'store'])->middleware('auth');

Route::get('/products', [App\Http\Controllers\ProductController::class, 'index']);
Route::get('/add-products', [App\Http\Controllers\ProductController::class, 'create'])->middleware('auth');
Route::post('/store-products', [App\Http\Controllers\ProductController::class, 'store'])->middleware('auth');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

