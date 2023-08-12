<?php

namespace App\Http\Livewire\User\Product;

use App\Models\Category;
use Illuminate\Support\Str;
use App\Services\UploadFile;
use Livewire\WithFileUploads;
use LivewireUI\Modal\ModalComponent;

class CreateProduct extends ModalComponent
{
    use WithFileUploads;
    
    public $name, $original_price, $image, $description, $categories;

    public $category_id = '';

    protected $rules = [
        'name' => 'required',
        'original_price' => 'required|numeric',
        'image' => 'required|mimes:jpeg,jpg,png|max:200',
        'description' => 'required',
        'category_id' => 'required'
    ];

    public function mount()
    {
        $this->categories = Category::getAllCategories();
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submit(UploadFile $uploadFile)
    {
        $this->validate();

        $slug = Str::slug($this->name);

        $product = Category::findOrFail($this->category_id)->products()->create([
            'category_id' => $this->category_id,
            'name' => $this->name,
            'slug' => $slug,
            'original_price' => $this->original_price,
        ]);

        $image_name = $uploadFile->store($this->image, $this->description, 'product', false);

        $product->productImage()->create([
            'product_id' => $product->id,
            'image' => $image_name,
            'description' => $this->description,
        ]);

        toast('You have created a new product', 'success');

        return redirect()->route('product');
    }

    public function render()
    {
        return view('livewire.user.product.create-product');
    }

}