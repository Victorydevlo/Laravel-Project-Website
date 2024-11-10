<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;


// Route::get('/product', function () {
//      $products = getProducts();
//     return view('products', ['products' => $products]);
// });

Route::get('/', [ProductController::class, 'index'])->name('product');

Route::get('/product/{id}', [ProductController::class, 'show']);



Route::get('/welcome', function () {
    return view('welcome');
})->middleware(['auth', 'verified'])->name('welcome');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
