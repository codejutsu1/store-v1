<?php

namespace App\Http\Livewire\Website\Cart;

use App\Models\Product;
use Livewire\Component;
use Gloudemans\Shoppingcart\Facades\Cart;

class AddToCart extends Component
{
    public Product $product;
    public $addedToCart;

    public function mount()
    {
        Cart::destroy();
    }

    public function render()
    {
        $cart = Cart::content();

        $this->addedToCart = ($cart->where('id', $this->product->id)->count()) ? True : False;

        return view('livewire.website.cart.add-to-cart');
    }

    public function addToCart()
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
    }
}
