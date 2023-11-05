<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
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

    public function aboutUs(){
        return view('about.about');
    }

    public function shop(){
        return view('shop.shop');
    }

    public function shop_detail(){
        return view('shop_detail.shop_detail');
    }
}
