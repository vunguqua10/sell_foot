<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Models\WishlistDetail;
use App\Models\Voucher;
use Illuminate\Support\Facades\DB;
use Termwind\Components\Raw;

class WishlistController extends Controller
{
    public function getAllProductsInWishlist()
    {
        if (Auth::check()) {
            $id_user = Auth::user()->id;
            $productsWishlist = DB::table('wishlist_details')
                ->join('products', 'products.id', '=', 'wishlist_details.id_product')
                ->where('wishlist_details.id_user', $id_user)
                ->select('products.*')
                ->get();
            return view('wishlist.wishlist', compact('productsWishlist'));
        }
        return redirect('login');
    }
    // public function getAllProductsInWishlist()
    // {
    //     if (Auth::check()) {
    //         $id_user = Auth::user()->id;
    //         $productsWishlist = DB::table('wishlist_details')->join('products', 'products.id', '=', 'wishlist_details.id_product')
    //         ->where('wishlist_details.id_user', '=', $id_user)->select('products.*')->get();
    //         return view('wishlist/wishlist', compact('productsWishlist'));
    //     }
    //     return redirect('login');
    // }
    // // public function addProductToCart()
    // // {
    // //     if (Auth::check()) {
    // //         $id_user = Auth::user()->id;
    // //         return view('cart', compact('productsInCart'));
    // //     }
    // //     return redirect('login');
    // // }
    public function addProductToWishlist($id_product)
    {
        if (Auth::check()) {
            $id_user = Auth::user()->id;
            $productInWishlist = DB::table('wishlist_details')->where([['id_user', $id_user], ['id_product', $id_product]])->get();
            if ($productInWishlist->isEmpty()) {
                DB::table('wishlist_details')->insert([
                    'id_user' => $id_user,
                    'id_product' => $id_product,
                ]);
            }
            return redirect('wishlist');
        }
        return redirect('login');
    }
    //Xoa san pham trong gio hang
    public function removeProductFromWishlist($id_product)
    {
        if (Auth::check()) {
            $id_user = Auth::user()->id;
            DB::table('wishlist_details')->where([['id_user', '=', $id_user], ['id_product', '=', $id_product]])->delete();
            return redirect('wishlist');
        }
        return redirect('login');
    }
    public function clearWishlist()
    {
        if (Auth::check()) {
            $id_user = Auth::user()->id;
            DB::table('wishlist_details')->where([['id_user', '=', $id_user]])->delete();
            return redirect('wishlist');
        }
        return redirect('login');
    }
    public function updateWishlist(Request $request)
    {
        $id_user = Auth::user()->id;
        $productsInWishlist = DB::table('wishlist_details')->where([['id_user', '=', $id_user]])->get();
        foreach ($productsInWishlist as $productsInWishlist) {
            DB::table('wishlist_details')->where([['id_user', '=', $id_user], ['id_product', '=', $productInWishlist->id]])->update(['id_product' => $request->id_product]);
        }
        
        return redirect('/wishlist');
    }
    // public function updateCart(Request $request)
    // {
    //     $id_user = Auth::user()->id;
    //     $productsInCart = DB::table('cart_details')->where([['id_user', '=', $id_user]])->get();
    //     foreach ($productsInCart as $productInCart) {
    //         //$str = 'quantity_'+$productInCart->id;
    //         DB::table('cart_details')->where([['id_user', '=', $id_user], ['id_product', '=', $productInCart->id]])->update(['quantity' => $request->quantity]);
    //     }
        
    //     return redirect('/cart');
    // }
    public function increaseQuantity()
    {
    }
}
