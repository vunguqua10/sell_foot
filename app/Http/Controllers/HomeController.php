<?php

namespace App\Http\Controllers;
use App\Models\Category;
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
        $categories = Category::pluck('cate_name', 'id');
        $products = Product::select('name', 'instock', 'sold', 'id_category')->get();

        $productsPaginated = Product::paginate(6);
        if (!$categories || !$products || !$productsPaginated) {
            abort(500, 'Có lỗi xảy ra trong quá trình tải trang.');
        }

        $categoryTotalInstock = [];

        foreach ($categories as $categoryId => $categoryName) {
            $instock = 0;
            $sold = 0;
            $hasProducts = false;

            foreach ($products as $product) {
                if ($product->id_category == $categoryId) {
                    $instock += $product->instock - $product->sold;
                    $sold += $product->sold;
                    if ($instock < 0) {
                        $instock = 0;
                    }

                    if ($instock == 0) {
                        $product->outOfStock = true;
                    } else {
                        $product->outOfStock = false;
                    }
                    $hasProducts = true;
                }
            }

            if ($hasProducts) {
                $categoryTotalInstock[$categoryId] = $instock;
            } else {
                $categoryTotalInstock[$categoryId] = 0;
            }
        }

        return view('shop.shop', compact('categories', 'products', 'productsPaginated', 'categoryTotalInstock'));
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
