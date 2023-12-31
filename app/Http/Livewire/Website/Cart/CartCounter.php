<?php

namespace App\Http\Livewire\Website\Cart;

use Livewire\Component;
use Gloudemans\Shoppingcart\Facades\Cart;

class CartCounter extends Component
{
    protected $listeners = ['cart_updated'=> 'render', 'remove_cart' => 'render'];

    public $cart_counter;

    public function render()
    {
        $this->cart_counter = Cart::content()->count();
        
        return view('livewire.website.cart.cart-counter');
    }
}
