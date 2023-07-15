<?php

namespace App\Http\Livewire\User\Category;

use App\Models\Category;
use Illuminate\Support\Str;
use LivewireUI\Modal\ModalComponent;

class EditCategory extends ModalComponent
{
    public Category $category;
    
    protected $rules = [
        'name' => 'required|string',
        'description' => 'required|string'
    ];

    public function mount()
    {
        $this->name = $this->category->name;
        $this->description = $this->category->description;
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submit()
    {
        $validated_data = $this->validate();

        $slug = Str::slug($this->name);

        $validated_data['slug'] = $slug;

        Category::findOrFail($this->category->id)->update($validated_data);

        toast('Successfully Updated', 'success');

        return redirect()->route('category');
    }

    public function render()
    {
        return view('livewire.user.category.edit-category');
    }
}
