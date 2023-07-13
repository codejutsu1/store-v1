<?php

namespace App\Http\Livewire\User\Product;

use App\Models\Product;
use App\Services\UploadFile;
use LivewireUI\Modal\ModalComponent;

class DeleteProduct extends ModalComponent
{
    public function mount(Product $product)
    {
        $this->product = $product;
    }

    public function destroy(UploadFile $uploadFile)
    {

        $uploadFile->remove($this->product->productImage->image, 'product');

        $this->product->delete();

        toast('You have successfully deleted the Product.', 'success');

        return redirect()->route('product');
    }

    public function render()
    {
        return view('livewire.user.product.delete-product');
    }
}
