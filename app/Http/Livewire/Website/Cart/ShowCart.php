<?php

namespace App\Http\Livewire\Website\Cart;

use Livewire\Component;
use Gloudemans\Shoppingcart\Facades\Cart;

class ShowCart extends Component
{
    protected $listeners = ['remove_cart' => 'render'];
    
    public function render()
    {
        $cart_contents = Cart::content();

        return view('livewire.website.cart.show-cart', compact('cart_contents'));
    }
}
