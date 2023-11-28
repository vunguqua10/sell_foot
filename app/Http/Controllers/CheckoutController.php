<?php

namespace App\Http\Controllers;

use App\Models\AddressUser;
use App\Models\User;
use Facade\FlareClient\Http\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function index($user_id)
    {
        $user = AddressUser::where('id', $user_id);
        // dd($user_id);
        return view('check_out.checkout', compact('user', 'user_id'));
    }

    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'firstName' => 'required',
                'lastName' => 'required',
                'username' => 'required',
                'email' => 'required|email',
                'address' => 'required',
                'address2' => 'nullable',
                'country' => 'required',
                'state' => 'required',
                'zip' => 'required',
            ]);

            AddressUser::create([
                'first_name' => $validatedData['firstName'],
                'last_name' => $validatedData['lastName'],
                'user_name' => $validatedData['username'],
                'email_address' => $validatedData['email'],
                'address' => $validatedData['address'],
                'address_2' => $validatedData['address2'],
                'country' => $validatedData['country'],
                'state' => $validatedData['state'],
                'zip' => $validatedData['zip'],
            ]);

        } catch (\Exception $e) {
            return response()->json(['error' => 'Có lỗi xảy ra. Vui lòng thử lại sau.']);
        }
    }
}
