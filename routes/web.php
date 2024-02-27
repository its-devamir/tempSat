<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\App;
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


Route::group(['prefix' => '{locale}'], function () {
    Route::get('/', [MainController::class, 'home'])->name('home');
    Route::get('contact', [MainController::class, 'contact'])->name('contact');
    Route::get('about', [MainController::class, 'about'])->name('about');
    Route::get('products', [ProductController::class, 'index'])->name('products');
    Route::get('product/{id}', [ProductController::class, 'show'])->name('product');
    Route::get('blogs', [BlogController::class, 'index'])->name('blogs');
    Route::get('blog/{id}', [BlogController::class, 'show'])->name('blog');
});
