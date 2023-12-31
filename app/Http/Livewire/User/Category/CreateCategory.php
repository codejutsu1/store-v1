<?php

namespace App\Http\Livewire\User\Category;

use App\Models\Category;
use Illuminate\Support\Str;
use LivewireUI\Modal\ModalComponent;

class CreateCategory extends ModalComponent
{
    public $name;
    public $description;

    protected $rules = [
        'name' => 'required|string',
        'description' => 'required|string'
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submit()
    {
        $validated_data = $this->validate();

        $slug = Str::slug($this->name);

        $validated_data['slug'] = $slug;
        
        Category::create($validated_data);

        toast('You have created a new category', 'success');

        return redirect()->route('category');
    }

    public function render()
    {
        return view('livewire.user.category.create-category');
    }
}
