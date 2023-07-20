<?php

namespace App\Http\Livewire\Website\Cart;

use Livewire\Component;
use Gloudemans\Shoppingcart\Facades\Cart;

class CartReview extends Component
{
    public $cart_subtotal;

    public function render()
    {
        $carts_content = Cart::content();

        $this->cart_subtotal = Cart::priceTotal();

        return view('livewire.website.cart.cart-review', compact('carts_content'));
    }
}
