<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CustomProductsController extends Controller
{
    public function viewDetailProducts($id){
        $products = Product::find($id);
        if(!$products){

            abort(404, "Không tìm thấy sản phẩm");
        }
        return view("shop_detail.shop-detail",compact("products"));

    }
}
