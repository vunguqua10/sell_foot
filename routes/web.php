<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;


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
Route::get('shop',[HomeController::class,'shop'])->name('shop');
Route::get('shop_detail',[HomeController::class,'shopDetail'])->name('shop_detail');
Route::get('cart',[HomeController::class,'cart'])->name('cart');
Route::get('checkout',[HomeController::class,'checkOut'])->name('check_out');
Route::get('my_account',[HomeController::class,'myAccount'])->name('my_account');
Route::get('wishlist',[HomeController::class,'wishList'])->name('wishlist');
Route::get('gallery',[HomeController::class,'gallery'])->name('gallery');
Route::get('contact_us',[HomeController::class,'contactUs'])->name('contact_us');

// Product
Route::get('listproduct', [ProductController::class, 'listProduct'])->name('listproduct');
Route::get('addproduct', [ProductController::class, 'registrationProduct'])->name('addproduct');
Route::post('customproduct', [ProductController::class, 'customProduct'])->name('registerproduct.custom');
Route::get('getdataedt/id{id}', [ProductController::class, 'getDataEdit'])->name('getdataedt');
Route::post('editproduct', [ProductController::class, 'updateProduct'])->name('editproduct');
Route::get('deleteproduct/id{id}', [ProductController::class, 'deleteProduct'])->name('deleteproduct');
Route::get('searchproduct', [ProductController::class, 'searchProduct'])->name('searchproduct');
Route::get('getproduct', [ProductController::class, 'getProduct'])->name('getproduct');
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


//Home
Route::get('/home', [HomeController::class, 'getProductsForHome'])->name('home');

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
});

//Cart
Route::get('/cart', [CartController::class, 'getAllProductsInCart'])->name('cart');
Route::get('add-to-cart/{id}', [CartController::class, 'addProductToCart'])->name('add-to-cart');
Route::get('remove-from-cart/{id}', [CartController::class, 'removeProductFromCart'])->name('remove-from-cart');
Route::get('clear-cart', [CartController::class, 'clearCart'])->name('clear-cart');
Route::get('update-cart', [CartController::class, 'updateCart'])->name('update-cart');
//--------
Route::get('useVoucher', [CartController::class, 'useVoucher'])->name('useVoucher');


