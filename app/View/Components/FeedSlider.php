<?php

namespace App\View\Components;

use App\Models\Feed;
use Illuminate\View\Component;

class FeedSlider extends Component
{
   public $feeds;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->feeds = Feed::getAllFeed();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.page.feed-slider', compact($this->feeds));
    }
}
