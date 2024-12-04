<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductTypeController;

//product Type create do not delete
// Route::get('/producttype/create', [ProductTypeController::class, 'create'])->name('createtype');

//Product Create
Route::get('/product/create', [ProductController::class, 'create'])->middleware('can:create,App\Models\Product')->name('create');

//Product Edit
Route::get('/product/{id}/edit', [ProductController::class, 'edit'])->middleware('can:can-edit-product')->name('edit');

//Product Delete
Route::delete('/product/{id}', [ProductController::class, 'destroy'])->name('delete');

//Product Home Page
Route::get('/', [ProductController::class, 'index'])->name('product');

//ProductType Home Page
Route::get('/producttype', [ProductTypeController::class, 'index'])->name('producttype');

// show for product
Route::get('/product/{id}', [ProductController::class, 'show'])->name('show');

//show for product type
Route::get('/producttype/{id}', [ProductController::class, 'shows'])->name('shows');

//SEARCH
Route::get('/search', 'ProductController@search')->name('search');

//FORM Creation
//Product Type Creation
// Route::get('/producttype/create', [ProductTypeController::class, 'create'])->middleware('can:create,App\Models\Product')->name('ptcreate');

//Product Type Edit
Route::get('/producttype/{id}/edit', [ProductTypeController::class, 'edit'])->middleware('can:can-edit-product')->name('ptedit');


// Route::get('/product/{id}/edit', [ProductController::class, 'edit'])->name('edit');

// Update and Store Routes

Route::post('/product', [ProductController::class, 'store'])->middleware('can:create,App\Models\Product')->name('product.store');
Route::put('/product/{id}', [ProductController::class, 'updates'])->name('product.update');

Route::post('/producttype', [ProductTypeController::class, 'store'])->name('producttype.store');
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
