<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CustomProductsController extends Controller
{
    public function viewDetailProducts($id){
        $products = Product::find($id);
        if(!$products){
            return back();
        }
        return view("shop_detail.shop-detail",compact("products"));

    }
}
