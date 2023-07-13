<?php

namespace App\Http\Livewire\User\Product;

use App\Models\Product;
use App\Models\Category;
use App\Models\ProductImage;
use App\Services\UploadFile;
use Livewire\WithFileUploads;
use LivewireUI\Modal\ModalComponent;

class EditProduct extends ModalComponent
{
    use WithFileUploads;

    public $image;
    
    protected $rules = [
        'name' => 'required',
        'original_price' => 'required|numeric',
        'image' => 'nullable|mimes:jpeg,jpg,png|max:200',
        'description' => 'required',
        'category_id' => 'required'
    ];

    public function mount(Product $product)
    {
        $this->categories = Category::getAllCategories();

        $this->product_id = $product->id;

        $this->name = $product->name;

        $this->original_price = $product->original_price;

        $this->category_id = $product->category_id;

        $this->description = $product->productImage->description;

        $this->old_image = $product->productImage->image;
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submit(UploadFile $uploadFile)
    {
        $this->validate();

        Product::findOrFail($this->category_id)->update([
            'category_id' => $this->category_id,
            'name' => $this->name,
            'original_price' => $this->original_price,
        ]);

        if($this->image)
        {
            $uploadFile->remove($this->old_image, 'product');

            $this->old_image = $uploadFile->store($this->image, $this->description, 'product', False);
        }

        ProductImage::findOrFail($this->product_id)->update([
            'image' => $this->old_image,
            'description' => $this->description,
        ]);

        toast('You have updated the product', 'success');

        return redirect()->route('product');
    }
    
    public function render()
    {
        return view('livewire.user.product.edit-product');
    }
}
