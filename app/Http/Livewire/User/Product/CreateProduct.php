<?php

namespace App\Http\Livewire\User\Product;

use LivewireUI\Modal\ModalComponent;

class CreateProduct extends ModalComponent
{
    public function render()
    {
        return view('livewire.user.product.create-product');
    }
}
