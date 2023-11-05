<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;


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
        return view('shop.shop');
    }
    public function shopDetail()
    {
        return view('cart.cart');
    }
    public function cart()
    {
        return view('shop_detail.shop-detail');
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
        // return view('home.index', compact('hotproduct', 'bestseller'));

        $hotproduct = DB::table('products')->orderBy('created_at', 'asc')->limit(4)->get();
        $bestseller = DB::table('products')->orderBy('sold', 'desc')->limit(4)->get();
        $topfeatured = DB::table('products')->orderBy('id', 'desc')->limit(4)->get();
        return view('home.index', compact('hotproduct', 'bestseller', 'topfeatured'));
    }
}
