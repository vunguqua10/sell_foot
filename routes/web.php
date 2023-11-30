<?php
use App\Http\Controllers\CheckoutController;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\CustomProductsController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashBoardController;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\VoucherController;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LangController;
use App\Http\Controllers\Admin\OrderController;

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
// Route::get('history_payment', [HomeController::class,'historyPayment'])->name('history_payment');


// Product
Route::get('listproduct', [ProductController::class, 'listProduct'])->name('listproduct');
Route::get('addproduct', [ProductController::class, 'addProduct'])->name('addproduct');
Route::post('customproduct', [ProductController::class, 'customProduct'])->name('registerproduct.custom');
Route::get('getdataedt/id{id}', [ProductController::class, 'getDataEdit'])->name('getdataedt');
Route::post('editproduct', [ProductController::class, 'updateProduct'])->name('editproduct');
Route::get('deleteproduct/id{id}', [ProductController::class, 'deleteProduct'])->name('deleteproduct');
Route::get('searchproduct', [ProductController::class, 'searchProduct'])->name('searchproduct');
Route::get('getproduct', [ProductController::class, 'getProduct'])->name('getproduct');
//--------------

//Product Admin

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
    Route::post('/addCategory',[CategoryController::class,'post_addCategory'])->name('category.post_addCategory');
    Route::get('getdataedtcategory/id{id}', [CategoryController::class, 'editCategory'])->name('getdataedtcategory');
    Route::post('editcategory',[CategoryController::class,'updateCategory'])->name('editcategory');
    Route::get('delCategory/id{id}',[CategoryController::class,'delCategory'])->name('category.delCategory');

    Route::get('/getcategories', [CategoryController::class, 'getCategories'])->name('getcategories');

    Route::get('/searchcategory', [CategoryController::class, 'searchCategory'])->name('searchcategory');

    //product
    Route::get('/listProduct',[ProductController::class,'listProduct'])->name('product.listProduct');
    Route::get('/addProduct',[ProductController::class,'addProduct'])->name('product.addProduct');
    Route::post('/addProduct',[ProductController::class,'post_addProduct'])->name('product.post_addProduct');
    Route::get('/search_product', [ProductController::class, 'searchProduct_admin'])->name('product.searchProductAdmin');

    Route::get('/order',[OrderController::class,'orders'])->name('orders');
    Route::get('/editOrder-{id}',[OrderController::class,'editOrder'])->name('editOrder');
    Route::post('/editOrder-{id}',[OrderController::class,'post_editOrder'])->name('editOrder');
    Route::get('/order-del-{id}',[OrderController::class,'deleteorder'])->name('del_order');
    //user
    Route::get('/listUser',[UserController::class,'listUser'])->name('user.listUser');
    Route::get('/addUser',[UserController::class,'addUser'])->name('user.addUser');
    Route::post('/addUser',[UserController::class,'post_addUser'])->name('postuser.addUser');
    Route::post('customUser', [UserController::class, 'customUser'])->name('customUser.custom');
    Route::get('/searchUserAdmin', [UserController::class, 'searchUserAdmin'])->name('user.searchUserAdmin');
    Route::get('getdataedtuser/id{id}', [UserController::class, 'editUser'])->name('getdataedtuser');
    Route::post('edituser', [UserController::class, 'updateUser'])->name('edituser');
    Route::get('/deleteUser-{id}',[UserController::class,'deleteUser'])->name('user.deleteUser');
});

//Cart
Route::get('/cart', [CartController::class, 'getAllProductsInCart'])->name('cart');
Route::get('add-to-cart/{id}', [CartController::class, 'addProductToCart'])->name('add-to-cart');
Route::get('remove-from-cart/{id}', [CartController::class, 'removeProductFromCart'])->name('remove-from-cart');
Route::get('clear-cart', [CartController::class, 'clearCart'])->name('clear-cart');
Route::post('/update-cart', [CartController::class,'updateCart'])->name('update-cart');
//--------
Route::get('useVoucher', [CartController::class, 'useVoucher'])->name('useVoucher');


//Wishlist
Route::get('/wishlist', [WishlistController::class, 'getAllProductsInWishlist'])->name('wishlist');
Route::get('add-to-wishlist/{id}', [WishlistController::class, 'addProductToWishlist'])->name('add-to-wishlist');
Route::get('remove-from-wishlist/{id}', [WishlistController::class, 'removeProductFromWishlist'])->name('remove-from-wishlist');
Route::get('clear-wishlist', [WishlistController::class, 'clearWishlist'])->name('clear-wishlist');
Route::get('update-wishlist', [WishlistController::class, 'updateWishlist'])->name('update-wishlist');
//

//Voucher
Route::get('/addvoucher', [VoucherController::class, 'addVoucher'])->name('addvoucher');
Route::post('customvoucher', [VoucherController::class, 'customVoucher'])->name('customvoucher.custom');
Route::get('listvoucher', [VoucherController::class, 'listVoucher'])->name('listvoucher');
Route::get('getdataedtvoucher/id{id}', [VoucherController::class, 'getDataEditVoucher'])->name('getdataedtvoucher');
Route::post('editvoucher', [VoucherController::class, 'updateVoucher'])->name('editvoucher');
Route::get('deletevoucher/id{id}', [VoucherController::class, 'deleteVoucher'])->name('deletevoucher');
Route::get('searchvoucher', [VoucherController::class, 'searchVoucher'])->name('searchvoucher');



//ViewDetail
Route::get('view-detail/{id}', [CustomProductsController::class,'viewDetailProducts'])->name('show_detail');

//Checkout
Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout.index');
Route::post('/checkout/{id}', [CheckoutController::class, 'store'])->name('store');
Route::get('payment-history', [CheckoutController::class, 'showPaymentHistory'])->name('payment_history');
// Multilang
Route::get('change-language/{language}', [LangController::class, 'changeLanguage'])->name('change-language');
//---------
