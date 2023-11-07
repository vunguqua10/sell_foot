<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Models\CartDetail;
use App\Models\Voucher;
use Illuminate\Support\Facades\DB;
use Termwind\Components\Raw;

class CartController extends Controller
{
    public function getAllProductsInCart()
    {
        if (Auth::check()) {
            $id_user = Auth::user()->id;
            $productsCart = DB::table('cart_details')->join('products', 'products.id', '=', 'cart_details.id_product')->where('cart_details.id_user', '=', $id_user)->select('products.*', 'cart_details.quantity', DB::raw('cart_details.quantity * products.price as totalPrice'))->get();
            return view('cart/cart', compact('productsCart'));
        }
        return redirect('login');
    }
    // public function addProductToCart()
    // {
    //     if (Auth::check()) {
    //         $id_user = Auth::user()->id;
    //         return view('cart', compact('productsInCart'));
    //     }
    //     return redirect('login');
    // }
    public function addProductToCart($id_product)
    {
        if (Auth::check()) {
            $id_user = Auth::user()->id;
            $productInCart = DB::table('cart_details')->where([['id_user', '=', $id_user], ['id_product', $id_product]])->get();
            if (!($productInCart->isEmpty())) {
                $quantity =  DB::table('cart_details')->where([['id_user', $id_user], ['id_product', $id_product]])->value('quantity');
                DB::table('cart_details')->where([['id_user', $id_user], ['id_product', $id_product]])->update(['quantity' => $quantity + 1]);
            } else {
                CartDetail::create([
                    'id_user' => $id_user,
                    'id_product' => $id_product,
                    'quantity' => 1,
                ]);
            }
            return redirect('cart');
        }
        return redirect('login');
    }
    //Xoa san pham trong gio hang
    public function removeProductFromCart($id_product)
    {
        if (Auth::check()) {
            $id_user = Auth::user()->id;
            DB::table('cart_details')->where([['id_user', '=', $id_user], ['id_product', '=', $id_product]])->delete();
            return redirect('cart');
        }
        return redirect('login');
    }
    public function clearCart()
    {
        if (Auth::check()) {
            $id_user = Auth::user()->id;
            DB::table('cart_details')->where([['id_user', '=', $id_user]])->delete();
            return redirect('cart');
        }
        return redirect('login');
    }
    public function updateCart(Request $request)
    {
        $id_user = Auth::user()->id;
        $productsInCart = DB::table('cart_details')->where([['id_user', '=', $id_user]])->get();
        foreach ($productsInCart as $productInCart) {
            //$str = 'quantity_'+$productInCart->id;
            DB::table('cart_details')->where([['id_user', '=', $id_user], ['id_product', '=', $productInCart->id]])->update(['quantity' => $request->quantity]);
        }
        
        return redirect('/cart');
    }
    public function increaseQuantity()
    {
    }
    public function useVoucher(Request $request)
    {
        // $voucher = DB::table('code_voucher', '=', $request->voucher)->get();
        // $id_user = Auth::user()->id;
        // $productsInCart = DB::table('cart_details')->join('products', 'products.id', '=', 'cart_details.id_product')->where('cart_details.id_user', '=', $id_user)->select('*', DB::raw('cart_details.quantity * products.price as totalPrice'))->get();
        // if (!($voucher->isEmpty())) {
        //     $reduce = $voucher[0]->reduce;
        //     $total = $request->total;
        //     $total = $total * ($reduce / 100);
        //     return view('cart/cart', ['productsInCart' => $productsCart, 'voucher' => $voucher, 'total' => $total]);
        // }
        // return view('cart/cartvoucher', compact('productsInCart'));
        $voucherCode = $request->input('voucher');
        $total = $request->input('total');
        
        // Lấy thông tin voucher từ cơ sở dữ liệu
        $voucher = DB::table('vouchers')->where('code_voucher', $voucherCode)->first();
        
        if ($voucher) {
            // Áp dụng giảm giá từ voucher vào total
            $total = $total * (1 - ($voucher->reduce / 100));
        }
        // Truyền giá trị total mới qua biến trong URL
        return redirect()->route('cart', ['total' => $total]);
    }
}
