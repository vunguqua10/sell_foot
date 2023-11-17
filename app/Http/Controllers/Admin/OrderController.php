<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\User;


class OrderController extends Controller
{
   //Hiển thị 5 đơn hàng
   function orders(){
    $orders = Order::orderby('id','DESC')->paginate(5); //SELECT * FROM orders limit(0,5)
    return view('admin.order.listorder',['order'=>$orders]);
}

//Sửa đơn hàng
function editOrder($id)
{
   $orderbyid = Order::find($id);
   return view('admin.order.editorder',['orderbyid'=>$orderbyid]);
}
//Xóa đơn hàng
function deleteorder($id){
    $orders = Order::where('id',$id)->get();
    // foreach($orders as $item){
    //     OrderDetail::Where('order_id',$item->id)->delete();
    // }
    Order::where('id',$id)->delete();    
     return redirect()->back()->with('success','Xóa order thành công');; //Quay lại trang trước đó
}
}
