<?php

namespace App\Http\Livewire\Website\Cart;

use Livewire\Component;
use Gloudemans\Shoppingcart\Facades\Cart;

class Checkout extends Component
{
    public $cart_subtotal;
    
    public $first_name, $last_name, $email, $tel, $lodge, $additional_information;

    public $area = '';

    public function render()
    {
        $carts = Cart::content();

        $this->cart_subtotal = Cart::priceTotal();

        return view('livewire.website.cart.checkout', compact('carts'));
    }
}
