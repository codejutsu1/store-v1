<?php

namespace App\Http\Livewire\Website\Cart;

use Livewire\Component;
use Gloudemans\Shoppingcart\Facades\Cart;

class RemoveCart extends Component
{
    public $rowId;

    public function render()
    {
        return view('livewire.website.cart.remove-cart');
    }

    public function removeCart()
    {   
        Cart::remove($this->rowId);

        $this->emit('remove_cart');
    }
}
