<?php

namespace App\Http\Controllers\User;

use Paystack;
use Illuminate\Http\Request;
use App\Services\UploadOrder;
use App\Http\Controllers\Controller;
use Gloudemans\Shoppingcart\Facades\Cart;

class PaymentController extends Controller
{
    public function handleGatewayCallback(UploadOrder $uploadOrder)
    {
        $paymentDetails = Paystack::getPaymentData();

        $orders = $uploadOrder->store($paymentDetails);

        if($orders) {
            Cart::destroy();

            toast('Your Order was successful, check email for further confirmation.', 'success');

            return redirect()->route('home');
        }
    }
}
