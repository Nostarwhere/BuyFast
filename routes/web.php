<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\HomeController as Admin;
use App\Http\Controllers\UserController;

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
Route::middleware('auth:admin')->group(function (){
    Route::get('/', [HomeController::class, 'index'])->name('dashboard');
});


//Admin
Route::get('/login', [LoginController::class,'login'])->name('admin.login');
Route::post('/login', [LoginController::class,'login'])->name('admin.login');

Route::prefix('admin')->name('admin.')->group(function(){
    Route::get('/admin', [AdminController::class, 'index'])->name('list');
    Route::get('/create',[AdminController::class,'create'])->name('create');
    Route::post('/store',[AdminController::class, 'store'])->name('store');
    Route::get('/edit/{id}',  [AdminController::class,'edit'])->name('edit');
    Route::post('/update/{id}',[AdminController::class,'update'])->name('update');
    Route::get('/delete/{id}',[AdminController::class,'delete'])->name('delete');
});


//User
Route::prefix('users')->name('users.')->group(function() {
    Route::get('/',[UserController::class, 'index'])->name('user.list');
    Route::get('/create',[UserController::class,'create'])->name('user.create');
    Route::post('/store',[UserController::class, 'store'])->name('user.store');
    Route::get('/edit/{id}',  [UserController::class,'edit'])->name('user.edit');
    Route::post('/update/{id}',[UserController::class,'update'])->name('user.update');
    Route::get('/delete/{id}',[UserController::class,'delete'])->name('user.delete');
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



