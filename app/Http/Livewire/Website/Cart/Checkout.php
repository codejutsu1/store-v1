<?php

namespace App\Http\Livewire\Website\Cart;

use Livewire\Component;
use Gloudemans\Shoppingcart\Facades\Cart;

class Checkout extends Component
{
    public $cart_subtotal;
    
    public $first_name, $last_name, $email, $tel, $lodge, $additional_information, $area="";

    protected $rules = [
        'first_name' => 'required|string',
        'last_name' => 'required|string',
        'email' => 'required|string|email',
        'tel' => 'required|string|numeric',
        'lodge' => 'required|string',
        'area' => 'required|string',
        'additional_information' => 'required|string'
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submit()
    {
        $this->validate();

        dd($this->validate());
    }

    public function render()
    {
        $carts = Cart::content();

        $this->cart_subtotal = Cart::priceTotal();

        return view('livewire.website.cart.checkout', compact('carts'));
    }
}
