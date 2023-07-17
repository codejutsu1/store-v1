<?php

namespace App\Http\Livewire\Website\Cart;

use Livewire\Component;
use Gloudemans\Shoppingcart\Facades\Cart;

class CartCounter extends Component
{
    protected $listeners = ['cart_updated'=> 'render'];

    public $cart_counter;

    public function render()
    {
        $this->cart_counter = Cart::count();
        
        return view('livewire.website.cart.cart-counter');
    }
}
