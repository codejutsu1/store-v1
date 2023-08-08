<?php

namespace App\Http\Livewire\User\Product;

use App\Models\Product;
use Livewire\Component;
use App\Models\Category;

class ShowProduct extends Component
{
    public $category = '';
    public $categories;
    public $products;
    
    public function mount()
    {
        $this->categories = Category::get(['id', 'name']);
    }

    public function render()
    {
        $this->products = Product::where('category_id', $this->category)->with(['productImage'])->get(); 

        return view('livewire.user.product.show-product');
    }
}
