<?php

namespace App\View\Components;

use App\Models\Setting;
use App\Models\Category;
use Illuminate\View\Component;

class PageLayout extends Component
{
    public $categories;
    public $setting;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->categories = Category::select(['id', 'name', 'slug'])->get();
        $this->setting = Setting::first();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('layouts.pages');
    }
}
