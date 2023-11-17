<?php

namespace App\Http\Controllers;

use App\Models\AddressUser;
use App\Models\User;
use Facade\FlareClient\Http\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    function showCheckout($user_id) {

        $user = AddressUser::find($user_id);

        return view('check_out.checkout', compact('user','countries'));
    }
    public function saveUserInfo(Request $request)
    {
        $user = new AddressUser();
        $user->first_name = $request->input('firstName');
        $user->last_name = $request->input('lastName');
        $user->email_address = $request->input('email');
        $user->user_name = $request->input('username');
        $user->address = $request->input('address');
        $user->country = $request->input('country');
        $user->state = $request->input('state');
        $user->zip = $request->input('zip');
        $user->save();
        return redirect()->back()->with('success', 'Order placed successfully!');
    }
}
