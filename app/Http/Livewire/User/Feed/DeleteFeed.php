<?php

namespace App\Http\Livewire\User\Feed;

use App\Models\Feed;
use LivewireUI\Modal\ModalComponent;

class DeleteFeed extends ModalComponent
{
    public Feed $feed;

    public function destroy()
    {
        $this->feed->delete();

        toast('You have successfully deleted the Feed.', 'success');

        return redirect()->route('feed');
    }

    public function render()
    {
        return view('livewire.user.feed.delete-feed');
    }
}
