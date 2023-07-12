<?php

namespace App\Http\Livewire\User\Product;

use Livewire\WithFileUploads;
use LivewireUI\Modal\ModalComponent;

class CreateProduct extends ModalComponent
{
    use WithFileUploads;
    
    public $name, $original_price, $image, $description;

    protected $rules = [
        'name' => 'required',
        'original_price' => 'required|number',
        'image' => 'required|mimes:jpeg,jpg,png|max:200',
        'description' => 'required',
    ];

    public function render()
    {
        return view('livewire.user.product.create-product');
    }
}
