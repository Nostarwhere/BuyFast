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
Route::get('/', function () {
    return view('home.index');
});

//Auth login users
Auth::routes();


// Route::prefix('home')->name('home.')->group(function() {
//     Route::get('/', [HomeController::class, 'index'])->name('home');

// });

//Admin
// Route::prefix('admin')->name('admin.')->group(function(){
//     Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
// });



//Products
Route::prefix('products')->name('products.')->group(function() {
    Route::get('/',      [ProductsController::class, 'index'])->name('product.list');
    Route::get('/create',[ProductsController::class,'create'])->name('product.create');
    Route::post('/store',[ProductsController::class, 'store'])->name('product.store');
    Route::get('/edit',  [ProductsController::class,'edit'])->name('product.edit');
    Route::post('/update',[ProductsController::class, 'update'])->name('product.update');
    Route::get('/destroy',[ProductsController::class,'destroy'])->name('product.destroy');


});



