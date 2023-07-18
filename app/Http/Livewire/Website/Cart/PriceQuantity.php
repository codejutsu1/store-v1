<?php

namespace App\Http\Livewire\Website\Cart;

use Livewire\Component;
use Gloudemans\Shoppingcart\Facades\Cart;

class PriceQuantity extends Component
{
    public $row_id;

    public function render()
    {   
        $this->cart = Cart::get($this->row_id)->id;

        return view('livewire.website.cart.price-quantity');
    }

    public function decrement()
    {

    }
}
