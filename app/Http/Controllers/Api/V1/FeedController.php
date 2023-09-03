<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Feed;
use App\Services\UploadFile;
use Illuminate\Http\Request;
use App\Traits\HttpResponses;
use App\Http\Controllers\Controller;
use App\Http\Resources\V1\Feed\FeedResource;
use App\Http\Resources\V1\Feed\FeedCollection;

class FeedController extends Controller
{
    use HttpResponses;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return new FeedCollection(Feed::getAllFeed());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, UploadFile $uploadFile)
    {
        $request->validate([
            'image' => 'required|mimes:jpeg,jpg,png|max:200',
            'description' => 'required',
        ]);

        $feed = $uploadFile->store($request->image, $request->description, 'feed'); 

        return $this->success(['feed' => new FeedResource($feed)], '', 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Feed $feed)
    {
        return $this->success(['feed' => new FeedResource($feed)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        return $this->error('', 'You cannot perform this action cause this page is not found.', 404);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Feed $feed, UploadFile $uploadFile)
    {
        $uploadFile->remove($feed->image, 'feed');

        $feed->delete();

        return response(null, 204);
    }
}
