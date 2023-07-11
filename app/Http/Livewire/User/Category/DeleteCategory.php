<?php

namespace App\Http\Livewire\User\Category;

use App\Models\Category;
use LivewireUI\Modal\ModalComponent;

class DeleteCategory extends ModalComponent
{
    public Category $category;

    public function destroy()
    {
        $this->category->delete();

        toast('You have successfully deleted the Category and products related to it.', 'success');

        return redirect()->route('category');
    }

    public function render()
    {
        return view('livewire.user.category.delete-category');
    }
}
