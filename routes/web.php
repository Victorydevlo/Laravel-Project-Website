<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;


// Route::get('/product', function () {
//      $products = getProducts();
//     return view('products', ['products' => $products]);
// });

Route::get('/product/{id}/edit', [ProductController::class, 'edit'])->middleware('can:can-edit-product')->name('product.edit');

Route::get('/product/create', [ProductController::class, 'create'])->middleware('can:create,App\Models\Product')->name('product.create');

Route::get('/product/create', [ProductController::class, 'create'])->name('create');

Route::delete('/product/{id}', [ProductController::class, 'destroy'])->name('delete');

Route::get('/', [ProductController::class, 'index'])->name('product');
Route::get('/product/{id}', [ProductController::class, 'show']);



//FORM Creation


Route::get('/product/{id}/edit', [ProductController::class, 'edit'])->name('edit');

// Update and Store Routes

Route::post('/product', [ProductController::class, 'store'])->name('product.store');
Route::put('/product/{id}', [ProductController::class, 'updates'])->name('product.update');

//Welcome Route

Route::get('/welcome', function () {
    return view('welcome');
})->middleware(['auth', 'verified'])->name('welcome');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
