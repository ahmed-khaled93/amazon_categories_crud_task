<?php

use App\Http\Controllers\CategoryController;

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

// All route names are prefixed with 'categories'.

Route::get('/', [CategoryController::class, 'index'])->name('categories');

Route::group(['prefix' => 'categories'], function () {
   	Route::get('create', [CategoryController::class, 'create'])->name('categories.create');
   	Route::post('store', [CategoryController::class, 'store'])->name('categories.store');
   	Route::group(['prefix' => '{category}'], function () {
		Route::get('edit', [CategoryController::class, 'edit'])->name('categories.edit');
		Route::post('update', [CategoryController::class, 'update'])->name('categories.update');
		Route::delete('destroy', [CategoryController::class, 'destroy'])->name('categories.destroy');
	});
});
