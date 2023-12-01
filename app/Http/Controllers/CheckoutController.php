<?php

namespace App\Http\Controllers;

use App\Models\BillingAddress;
use App\Models\User;
use App\Models\PaymentHistory;
use Facade\FlareClient\Http\Client;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
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

        $user = User::findOrFail($id);
        $user->fill($validatedData);
        $user->save();
        $subtotal = 0;
        $cartCheckout = $request->session()->get('productsCart');
        foreach ($cartCheckout as $item) {
            $subtotal += $item->totalPrice;
        }

        $discount = 40;
        $couponDiscount = 10;
        $grandTotal = $subtotal - $discount - $couponDiscount;


        $billingAddress = new BillingAddress();
        $billingAddress->user_id = $user->id;
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

        session(['paymentSuccess' => true]);



        return view('check_out.checkout', compact('user', 'cartCheckout', 'subtotal', 'discount', 'couponDiscount', 'grandTotal'));
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
    public function showPaymentHistory()
    {
        $user = auth()->user();
        $billingAddresses = BillingAddress::where('user_id', $user->id)->get();

        $existingPaymentHistories = $user->paymentHistories()->pluck('username')->toArray();

        foreach ($billingAddresses as $billingAddress) {
            if (!in_array($billingAddress->username, $existingPaymentHistories)) {
                $paymentHistory = PaymentHistory::where('user_id', $user->id)
                    ->where('username', $billingAddress->username)
                    ->first();

                if (!$paymentHistory) {
                    $paymentHistory = new PaymentHistory();
                    $paymentHistory->user_id = $user->id;
                    $paymentHistory->username = $billingAddress->username;
                    $paymentHistory->payment_amount = $billingAddress->total_price;
                    $paymentHistory->payment_method = 'COD';
                    $paymentHistory->payment_date = $billingAddress->created_at;
                    $paymentHistory->save();
                }
            }
        }


        $paymentHistories = $user->paymentHistories()
        ->orderByDesc('id')
        ->paginate(15);

        return view('check_out.checkout_old', compact('user', 'billingAddresses', 'paymentHistories'));
    }
    // public function destroy($id)
    // {
    //     $paymentHistory = PaymentHistory::find($id);

    //     if (!$paymentHistory) {
    //         return redirect()->back()->with('error', 'Không tìm thấy sản phẩm trong lịch sử thanh toán.');
    //     }

    //     if ($paymentHistory->condition) {
    //         return redirect()->back()->with('error', 'Không thể xóa sản phẩm do điều kiện không đúng.');
    //     }

    //     $paymentHistory->delete();

    //     return redirect()->back()->with('success', 'Sản phẩm đã được xóa khỏi lịch sử thanh toán.');
    // }


        public function checkProductExistence($id)
        {
            $paymentHistory = PaymentHistory::find($id);

            if ($paymentHistory) {
                return response()->json(['exists' => true]);
            } else {
                return response()->json(['exists' => false]);
            }
        }

        public function destroy($id)
        {
            $paymentHistory = PaymentHistory::find($id);

            if (!$paymentHistory) {
                return redirect()->back()->with('error', 'Không tìm thấy sản phẩm trong lịch sử thanh toán.');
            }

            $billingAddress = $paymentHistory->billingAddress;

            if ($billingAddress) {
                // Xóa bản ghi trong bảng billingaddress liên quan đến payment_history
                $billingAddress->delete();
            }

            // Xóa bản ghi trong bảng payment_history
            $paymentHistory->delete();

            return redirect()->back()->with('success', 'Sản phẩm đã được xóa khỏi lịch sử thanh toán và địa chỉ thanh toán.');
        }
}

