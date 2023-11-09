<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\Category;
use App\Models\Product;

class DashBoardController extends Controller
{
    public function index(){
        $product_count = Product::count();
        $category_count = Category::count();
       // $order_count = Order::count();
       // $customer_count = Customer::count();
        return view('admin.layout.index',['product_count'=>$product_count,'category_count'=>$category_count]);
    }
    
}
