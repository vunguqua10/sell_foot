<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;
use App\Models\Category;
use App\Models\Customer;

class AdminController extends Controller
{
    // public function index(){
    //     $product_count = Product::count();
    //     $category_count = Category::count();
    //     $order_count = Order::count();
    //     $customer_count = Customer::count();
    //     return view('admin.layout.index',['product_count'=>$product_count,'category_count'=>$category_count,'order_count'=>$order_count,'customer_count'=>$customer_count]);
    // }
}
