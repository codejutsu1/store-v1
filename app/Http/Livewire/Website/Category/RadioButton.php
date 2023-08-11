<?php

namespace App\Http\Livewire\Website\Category;

use Livewire\Component;
use App\Models\Category;

class RadioButton extends Component
{
    public $categories;
    public $category_url;

    public function mount()
    {
        $this->categories = Category::get(['id', 'name', 'slug']);
    }

    public function redirectCategory($category_id)
    {
        $category_slug = Category::where('id', $category_id)->value('slug');

        return redirect()->route('shop', $category_slug);
    }

    public function render()
    {
        $url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

        $this->category_url = basename(parse_url($url, PHP_URL_PATH));

        return view('livewire.website.category.radio-button');
    }
}
