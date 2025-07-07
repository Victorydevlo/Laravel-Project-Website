<?php

use App\Http\Controllers\BasketController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductTypeController;
use App\Http\Controllers\WishListController;


<<<<<<< HEAD
//Product Create
Route::get('/product/create', [ProductController::class, 'create'])->middleware('can:create,App\Models\Product')->name('create');


//Product Type Create
=======
//Product Creates
Route::get('/product/create', [ProductController::class, 'create'])->middleware('can:create,App\Models\Product')->name('create');


//Product Type Creates
>>>>>>> 0d7aa3e21fb23dcc38ca0b4d61d6c32269612658
Route::get('/producttype/create', [ProductTypeController::class, 'create'])->name('createtp');


//Product Edit
Route::get('/product/{id}/edit', [ProductController::class, 'edit'])->middleware('can:can-edit-product')->name('edit');

Route::get('/product/filter', [ProductController::class, 'filter'])->name('filter');



//Product Type Edit
Route::get('/producttype/{id}/edit', [ProductTypeController::class, 'edit'])->name('edittp');


//Product Delete
Route::delete('/product/{id}', [ProductController::class, 'destroy'])->name('delete');


//Product Type Delete
Route::delete('/producttype/{id}', [ProductTypeController::class, 'destroy'])->name('ptdelete');

Route::delete('/basketdel/{id}', [BasketController::class, 'destroy'])->name('basdelete');

Route::delete('/wishlistdel/{id}', [WishListController::class, 'destroy'])->name('wisdelete');

//Product Home Page
Route::get('/', [ProductController::class, 'index'])->name('product');

Route::get('/products', [ProductController::class, 'index2'])->name('productpage');


//ProductType Home Page
Route::get('/producttype', [ProductTypeController::class, 'index'])->name('producttype');

Route::get('/basket', [BasketController::class, 'index'])->name('basket');

Route::post('/baskets/{id}', [BasketController::class, 'add'])->name('added');

// show for product
Route::get('/product/{id}', [ProductController::class, 'show'])->name('show');

Route::get('/products/{id}', [ProductController::class, 'showed'])->name('showed');


Route::get('/wishlist', [WishListController::class, 'index'])->name('wishlist');

//SEARCH
Route::get('/search', [ProductController::class, 'search'])->name('search');

Route::get('/basket/create', [BasketController::class, 'create'])->name('creation2');


Route::get('/welcomery', [ProductController::class, 'test'])->name('welcomery');

// Update and Store Routes
Route::post('/product', [ProductController::class, 'store'])->middleware('can:create,App\Models\Product')->name('product.store');
Route::put('/product/{id}', [ProductController::class, 'updates'])->name('product.update');

Route::post('/producttype', [ProductTypeController::class, 'store'])->middleware('can:create,App\Models\Product')->name('ptstore');
Route::put('/producttype/{id}', [ProductTypeController::class, 'updates'])->middleware('can:can-edit-product')->name('producttype.update');

Route::post('/basket/{id}', [BasketController::class, 'store'])->name('basketitem.store');
Route::post('/wishlist/{id}', [WishListController::class, 'store'])->name('wishlist.store');

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
