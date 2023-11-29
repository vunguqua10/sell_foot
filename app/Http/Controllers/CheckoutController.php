<?php

namespace App\Http\Controllers;

use App\Models\BillingAddress;
use App\Models\User;
use Facade\FlareClient\Http\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function store(Request $request, $id)
    {
        // Validate dữ liệu form
        $validatedData = $request->validate([
            'firstName' => 'required|min:2|max:50',
            'lastName' => 'required|min:2|max:50',
            'username' => 'required|min:2|max:50',
            'email' => 'required|email',
            'address' => 'required|max:50',
            'address2' => 'nullable|max:50',
            'country' => 'required',
            'state' => 'required',
            'zip' => 'required|regex:/^\d{4}$/',
        ]);

        // Tìm người dùng bằng ID
        $user = User::findOrFail($id);

        // Điền thông tin địa chỉ thanh toán của người dùng
        $user->fill($validatedData);
        $user->save();

        // Xử lý thanh toán (giả sử là COD - tiền mặt khi nhận hàng)
        // Bạn có thể thêm logic xử lý thanh toán của riêng bạn ở đây

        // Tính tổng số tiền đơn hàng cuối cùng
        $subtotal = 0;
        $cartCheckout = $request->session()->get('productsCart');
        foreach ($cartCheckout as $item) {
            $subtotal += $item->totalPrice;
        }

        $discount = 40;
        $couponDiscount = 10;
        $grandTotal = $subtotal - $discount - $couponDiscount;

        // Lưu địa chỉ thanh toán vào cơ sở dữ liệu
        $billingAddress = new BillingAddress();
        $billingAddress->first_name = $validatedData['firstName'];
        $billingAddress->last_name = $validatedData['lastName'];
        $billingAddress->username = $validatedData['username'];
        $billingAddress->email = $validatedData['email'];
        $billingAddress->address = $validatedData['address'];
        $billingAddress->address2 = $validatedData['address2'];
        $billingAddress->country = $validatedData['country'];
        $billingAddress->state = $validatedData['state'];
        $billingAddress->zip = $validatedData['zip'];
        $billingAddress->total_price = $grandTotal;
        $billingAddress->save();

        $request->session()->forget('productsCart');


        return view('check_out.checkout', compact('user', 'cartCheckout', 'subtotal', 'discount', 'couponDiscount', 'grandTotal'));
        // // Hiển thị trang xác nhận cho người dùng
        // return view('check_out.checkout', compact('user', 'cartCheckout', 'subtotal', 'discount', 'couponDiscount', 'grandTotal'));
    }

    public function index(Request $request)
    {
        $user = Auth::user();
        $cartCheckout = session('productsCart', []);
        $subtotal = 0;
        foreach ($cartCheckout as $item) {
            $subtotal += $item->totalPrice;
        }

        $discount = 40;
        $couponDiscount = 10;
        $grandTotal = $subtotal - $discount - $couponDiscount;
        return view('check_out.checkout', compact('user', 'cartCheckout', 'subtotal', 'discount', 'couponDiscount', 'grandTotal'))->with('success', 'Thanh toán thành công!');
    }
}

