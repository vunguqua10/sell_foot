<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CustomProductsController extends Controller
{
    public function viewDetailProducts($id)
    {
        $products = Product::find($id);
        if (!$products) {
            return back();
        }
        $product = Product::where('id', $id)->first();
        $product->product_views = $product->product_views + 1; // Increment the value of product_views
        $product->save();
    
        return view("shop_detail.shop-detail", compact("products"));
    }
}
