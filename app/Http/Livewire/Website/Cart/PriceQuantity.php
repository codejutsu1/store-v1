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
        $this->total_price = totalPrice($this->quantity, $this->price);

        Cart::update($this->row_id, [
            'qty' => $this->quantity
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
