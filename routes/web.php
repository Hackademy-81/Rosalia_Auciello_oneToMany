<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\PublicController;
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

Route::get('/', [PublicController::class, 'welcome'])->name('homePage');
Route::get('product/create', [ProductController::class, 'create'])->name('product.create'); 
Route::post('/product/store', [ProductController::class, 'store'])->name('product.store'); 
Route::get('product/user/{user}', [ProductController::class, 'getProductByUser'])->name('product.user'); 
Route::get('product/show/{product}', [ProductController::class, 'show'])->name('product.show'); 
Route::get('product/edit/{product}', [ProductController::class, 'edit'])->name('product.edit'); 
Route::put('product/update/{product}', [ProductController::class, 'update'])->name('product.update'); 
Route::delete('product/destroy/{product}', [ProductController::class, 'destroy'])->name('product.destroy'); 

