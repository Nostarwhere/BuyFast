<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
//Home


//Auth login users
Auth::routes();


// });

//Admin
Route::prefix('admin')->name('admin.')->group(function(){
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
});



//Products
Route::prefix('products')->name('products.')->group(function() {
    Route::get('/',[ProductsController::class, 'index'])->name('product.list');
    Route::get('/create',[ProductsController::class,'create'])->name('product.create');
    Route::post('/store',[ProductsController::class, 'store'])->name('product.store');
    Route::get('/edit/{id}',  [ProductsController::class,'edit'])->name('product.edit');
    Route::post('/update/{id}',[ProductsController::class,'update'])->name('product.update');
    Route::get('/delete/{id}',[ProductsController::class,'delete'])->name('product.delete');

});



