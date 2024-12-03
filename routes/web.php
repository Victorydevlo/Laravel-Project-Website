<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductTypeController;


Route::get('/producttype/create', [ProductTypeController::class, 'create'])->name('createtype');


Route::get('/product/create', [ProductController::class, 'create'])->middleware('can:create,App\Models\Product')->name('create');


Route::get('/product/{id}/edit', [ProductController::class, 'edit'])->middleware('can:can-edit-product')->name('edit');

// Route::get('/product/create', [ProductController::class, 'create'])->name('create');

Route::delete('/product/{id}', [ProductController::class, 'destroy'])->name('delete');

Route::get('/', [ProductController::class, 'index'])->name('product');
// show for product
Route::get('/product/{id}', [ProductController::class, 'show'])->name('show');
//show for product type
Route::get('/producttype/{id}', [ProductController::class, 'shows'])->name('shows');

Route::get('/search', 'ProductController@search')->name('search');

//FORM Creation

Route::get('/producttype/create', [ProductTypeController::class, 'create'])->middleware('can:create,App\Models\Product')->name('ptcreate');
Route::get('/producttype/{id}/edit', [ProductTypeController::class, 'edit'])->middleware('can:can-edit-product')->name('ptedit');


// Route::get('/product/{id}/edit', [ProductController::class, 'edit'])->name('edit');

// Update and Store Routes

Route::post('/product', [ProductController::class, 'store'])->middleware('can:create,App\Models\Product')->name('product.store');
Route::put('/product/{id}', [ProductController::class, 'updates'])->name('product.update');

Route::post('/producttype', [ProductTypeController::class, 'store'])->middleware('can:create,App\Models\Product')->name('producttype.store');
Route::put('/producttype/{id}', [ProductTypeController::class, 'updates'])->name('producttype.update');

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
