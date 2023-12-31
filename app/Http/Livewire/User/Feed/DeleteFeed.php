<?php

namespace App\Http\Livewire\User\Feed;

use App\Models\Feed;
use App\Services\UploadFile;
use LivewireUI\Modal\ModalComponent;

class DeleteFeed extends ModalComponent
{
    public Feed $feed;

    public function destroy(UploadFile $uploadFile)
    {
        $uploadFile->remove($this->feed->image, 'feed');

        $this->feed->delete();

        toast('You have successfully deleted the Feed.', 'success');

        return redirect()->route('feed');
    }

    public function render()
    {
        return view('livewire.user.feed.delete-feed');
    }
}
