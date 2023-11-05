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
    public function getProductsForHome()
    {
        // $hotproduct = DB::table('products')->orderBy('created_at', 'asc')->limit(4)->get();
        // $bestseller = DB::table('products')->orderBy('sold', 'desc')->limit(4)->get();
        // return view('home.index', compact('hotproduct', 'bestseller'));

        $hotproduct = DB::table('products')->orderBy('created_at', 'asc')->limit(4)->get();

        return view('home.index', compact('hotproduct'));

    }
}
