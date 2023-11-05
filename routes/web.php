<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\ProductController;

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
//Home
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('about_us',[HomeController::class,'aboutUs'])->name('about_us');
Route::get('/shop',[HomeController::class,'shop'])->name('shop');
Route::get('shop_detail',[HomeController::class,'shop_detail'])->name('shop_detail');

// Product
Route::get('listproduct', [ProductController::class, 'listProduct'])->name('listproduct');
Route::get('addproduct', [ProductController::class, 'registrationProduct'])->name('addproduct');
Route::post('customproduct', [ProductController::class, 'customProduct'])->name('registerproduct.custom');
Route::get('getdataedt/id{id}', [ProductController::class, 'getDataEdit'])->name('getdataedt');
Route::post('editproduct', [ProductController::class, 'updateProduct'])->name('editproduct');
Route::get('deleteproduct/id{id}', [ProductController::class, 'deleteProduct'])->name('deleteproduct');
Route::get('searchproduct', [ProductController::class, 'searchProduct'])->name('searchproduct');
//--------------


//Layout
Route::get('/detail', FUNCTION () {
    return view('detail');
});


//Login, logout, register
Route::get('dashboard', [CustomAuthController::class, 'dashboard']);
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom');
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom');
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');




