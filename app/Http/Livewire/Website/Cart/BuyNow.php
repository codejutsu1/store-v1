<?php

namespace App\Http\Livewire\Website\Cart;

use App\Models\Product;
use Livewire\Component;
use Gloudemans\Shoppingcart\Facades\Cart;

class BuyNow extends Component
{
    public Product $product;
    
    public function buyNow()
    {   
        Cart::add(
            $this->product->id,
            $this->product->name,
            1,
            $this->product->original_price,
            0,
            [$this->product]
        );

        $this->emit('cart_updated');

        return redirect()->route('cart');
    }

    public function render()
    {
        return view('livewire.website.cart.buy-now');
    }
}
