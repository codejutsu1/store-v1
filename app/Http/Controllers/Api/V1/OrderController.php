<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function checkout(CheckoutRequest $request)
    {
        $validated = $request->validated();

        // Guilty of repeating code, I promise to use a service class to ensure it never happens again.

        $data = array(
            "amount" => $request->amount * 100,
            "reference" => paystack()->genTranxRef(),
            "email" => $request->email,
            "currency" => "NGN",
            "callback_url" => route('callback.api'),
            "metadata" => [
                "cart_content" => $cart_content,
                "billing_address" => $billing_address,
            ]
        );

        try{
            return Paystack::getAuthorizationUrl($data)->redirectNow();
        }catch(\Exception $e) {
            toast('The paystack token has expired. Please refresh the page and try again.', 'error');
        } 
    }
}
