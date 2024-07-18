<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
Route::get('/', function () {
    return view('welcome');
});
// Route::get('home', ProductController::class);
// Route::get('/products', 'App\Http\Controllers\ProductController@index');

Route::get('/products',[ProductController::class,'index'])->name('products.index');
// دائما ننطي اسم للراوت بغض النظر عن الشكل حتئ نكدر نستدعيه داخل الاكواد
Route::post('/products/store',[ProductController::class,'store'])->name('products.store');
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
Route::get('/products/food', [ProductController::class, 'food'])->name('products.food');
Route::get('/products/electrical', [ProductController::class, 'electricalProduct'])->name('product.electrical');
Route::delete('/products/{id}', [ProductController::class, 'destroy'])->name('product.destroy');
Route::get('/products/mickup', [ProductController::class, 'mickup'])->name('product.mickup');
