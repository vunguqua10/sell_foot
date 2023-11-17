<?php

namespace App\Http\Controllers;
use App\Models\Product;
use DB;
use Illuminate\Http\Request;
use App;


class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home.index');
    }
    public function aboutUs()
    {
        return view('about.about');
    }
    public function shop()
    {
        $products = Product::paginate(6);
        return view('shop.shop', ['products' => $products]);
    }
    public function shopDetail()
    {
        return view('shop_detail.shop-detail');
    }
    public function cart()
    {
        return view('cart.cart');

    }

    public function checkOut()
    {
        return view('check_out.checkout');
    }

    public function myAccount()
    {
        return view('my_account.my-account');
    }

    public function gallery()
    {
        return view('gallery.gallery');
    }

    public function wishList()
    {
        return view('wishlist.wishlist');
    }

    public function contactUs()
    {
        return view('contact-us.contact-us');
    }
    public function getProductsForHome()
    {
        // $hotproduct = DB::table('products')->orderBy('created_at', 'asc')->limit(4)->get();
        // $bestseller = DB::table('products')->orderBy('sold', 'desc')->limit(4)->get();

        App::setLocale(session()->get('locale'));
        $hotproduct = DB::table('products')->orderBy('created_at', 'asc')->limit(4)->get();
        $bestseller = DB::table('products')->orderBy('sold', 'desc')->limit(4)->get();
        $topfeatured = DB::table('products')->orderBy('id', 'desc')->limit(4)->get();
        return view('home.index', compact('hotproduct', 'bestseller', 'topfeatured'));
    }
    public function historyPayment()
    {
        return view('cart.history_payment');
    }
}
