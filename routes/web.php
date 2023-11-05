<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashBoardController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\AdminController;
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


Auth::routes();

    Route::get('/index', function () {
        return view('home.index');
    });
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//URL trong phạm vi 'admin'.
Route::prefix('admin')->group(function () {
    //trang home
    Route::get('/',[DashBoardController::class,'index'])->name('admin.index');
    //category
    Route::get('/listcategory',[CategoryController::class,'listCategory'])->name('category.listCategory');
    Route::get('/addCategory',[CategoryController::class,'addCategory'])->name('category.addCategory');
    Route::post('/addCategory',[CategoryController::class,'post_addCategory'])->name('category.addCategory');
    Route::get('/editCategory-{id}',[CategoryController::class,'editCategory'])->name('category.editCategory');
    Route::post('/editCategory-{id}',[CategoryController::class,'post_editCategory'])->name('category.editCategory');
    Route::get('/delCategory-{id}',[CategoryController::class,'delCategory'])->name('category.delCategory');

    //product
    Route::get('/listProduct',[ProductController::class,'listProduct'])->name('product.listProduct');
    Route::get('/addProduct',[ProductController::class,'addProduct'])->name('product.addProduct');
    Route::post('/addProduct',[ProductController::class,'post_addProduct'])->name('product.addProduct');
    Route::get('/editProduct-{id}',[CategoryController::class,'editProduct'])->name('product.editProduct');
    Route::post('/editProduct-{id}',[CategoryController::class,'post_editProduct'])->name('product.editProduct');
    Route::get('/delCategory-{id}',[CategoryController::class,'delProduct'])->name('product.delProduct');
    //customer
    Route::get('/customer',[AdminController::class,'index'])->name('customers');
    Route::get('/delCustomer-{id}',[AdminController::class,'delCustomer'])->name('customer_delCustomer'); 
});