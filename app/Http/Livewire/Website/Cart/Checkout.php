<?php

namespace App\Http\Livewire\Website\Cart;

use Livewire\Component;
use Gloudemans\Shoppingcart\Facades\Cart;
use Paystack;

class Checkout extends Component
{
    public $cart_subtotal, $first_name, $last_name, $email, $tel, $lodge, $additional_information, $area="";

    protected $rules = [
        'first_name' => 'required|string',
        'last_name' => 'required|string',
        'email' => 'required|string|email',
        'tel' => 'required|string|numeric',
        'lodge' => 'required|string',
        'area' => 'required|string',
        'additional_information' => 'required|string'
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submit()
    {
        $validated_data = $this->validate();

        $amount = floatval(Cart::subtotal()) * 1000;
        
        $data = array(
            "amount" => $amount * 100,
            "reference" => paystack()->genTranxRef(),
            "email" => $validated_data['email'],
            "currency" => "NGN",
            "metadata" => [
                "cart_content" => Cart::content(),
                "billing_address" => $validated_data,
            ]
        );

        try{
            return Paystack::getAuthorizationUrl($data)->redirectNow();
        }catch(\Exception $e) {
            toast('The paystack token has expired. Please refresh the page and try again.', 'error');

            return redirect()->route('checkout');
        } 
    }

    public function render()
    {
        $carts = Cart::content();

        $this->cart_subtotal = Cart::priceTotal();

        return view('livewire.website.cart.checkout', compact('carts'));
    }
}
