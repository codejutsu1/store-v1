<?php

namespace App\Http\Livewire\Website\Cart;

use Livewire\Component;
use Gloudemans\Shoppingcart\Facades\Cart;

class PriceQuantity extends Component
{
    public $row_id;
    public $quantity;
    public $price;

    protected $rules = [
        'quantity' => 'required|numeric|min:1'
    ];

    public function mount()
    {
        $cart = Cart::get($this->row_id);

        $this->quantity = $cart->qty;

        $this->total_price = $cart->price;

        foreach($cart->options as $product)
        {
            $this->price = $product->original_price;
        }
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function render()
    {   
        $cart = Cart::get($this->row_id);

        $this->total_price = $this->price * $this->quantity;

        Cart::update($this->row_id, [
            'qty' => $this->quantity,
            'price' => $this->total_price
        ]);

        return view('livewire.website.cart.price-quantity');
    }

    public function decrement()
    {
        $this->validate();

        if($this->quantity > 1) $this->quantity--;
    }

    public function increment()
    {
        $this->validate();

        if($this->quantity > 0) $this->quantity++;
    }
}
