<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\CategoryController;
use  App\Http\Controllers\ProductController;
use  App\Http\Controllers\PriceTypeController;


Route::get('/', function () {
    return view('home');
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::controller(CategoryController::class)->prefix('categories')->as('categories.')->group(function () {

  Route::get('/', 'index')->name('index');
  Route::post('/', 'store')->name('store');
  Route::get('/create', 'create')->name('create');
  Route::get('/{category}', 'show')->name('show');
  Route::patch('/{category}', 'update')->name('update');
  Route::delete('/{category}', 'destroy')->name('destroy');
  Route::get('/{category}/edit', 'edit')->name('edit');
  Route::get('/{category}/change-status', 'changeStatus')->name('changeStatus');
  
});

Route::controller(ProductController::class)->prefix('products')->as('products.')->group(function () {
  Route::get('/', 'index')->name('index');
  Route::post('/', 'store')->name('store');
  Route::get('/create', 'create')->name('create');
  Route::get('/{product}', 'show')->name('show');
  Route::patch('/{product}', 'update')->name('update');
  Route::delete('/{product}', 'destroy')->name('destroy');
  Route::get('/{product}/edit', 'edit')->name('edit');
  Route::get('/{product}/change-status', 'changeStatus')->name('changeStatus');
});

Route::controller(PriceTypeController::class)->prefix('price-types')->as('priceTypes.')->group(function () {

  Route::get('/', 'index')->name('index');
  Route::post('/', 'store')->name('store');
  Route::get('/create', 'create')->name('create');
  Route::get('/{priceType}', 'show')->name('show');
  Route::patch('/{priceType}', 'update')->name('update');
  Route::delete('/{priceType}', 'destroy')->name('destroy');
  Route::get('/{priceType}/edit', 'edit')->name('edit');

  Route::get('/{priceType}/change-status', 'changeStatus')->name('change-status');
});








//  Route::get('categories/index', [CategoryController::class, 'index'])->name('categories.index');
//  Route::get('categories/create', [CategoryController::class, 'create'])->name('categories.create');
//   Route::post('categories/store', [CategoryController::class, 'store'])->name('categories.store');
//   Route::get('categories/show/{category}', [CategoryController::class, 'show'])->name('categories.show');
//   Route::get('categories/edit/{category}', [CategoryController::class, 'edit'])->name('categories.edit');
//   Route::patch('categories/update/{category}', [CategoryController::class, 'update'])->name('categories.update');
//   Route::delete('categories/{category}', [CategoryController::class, 'destroy'])->name('categories.destroy');
  


// Route::get('products/index', [ProductController::class, 'index'])->name('products.index');
// Route::get('products/create', [ProductController::class, 'create'])->name('products.create');
// Route::post('products/store', [ProductController::class, 'store'])->name('products.store');
// Route::get('products/show', [ProductController::class, 'show'])->name('products.show');
// Route::get('products/edit', [ProductController::class, 'edit'])->name('products.edit');
// Route::patch('products/update', [ProductController::class, 'update'])->name('products.update');
// Route::delete('products/delete', [ProductController::class, 'index'])->name('products.index');
