<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Services\UploadFile;
use Illuminate\Http\Request;
use App\Traits\HttpResponses;
use App\Http\Requests\Api\StoreReviewRequest;
use App\Http\Resources\V1\Review\ReviewResource;
use App\Http\Resources\V1\Review\ReviewCollection;

class ReviewController extends Controller
{
    use HttpResponses;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return new ReviewCollection(Review::getAllReview());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreReviewRequest $request)
    {
        $validated_data = $request->validated();

        if($request->image) $validated_data['image'] = $uploadFile->store($request->image, $request->name, 'review', false);

        $review = Review::create($validated_data);

        return $this->success(['review' => new ReviewResource($review)], '', 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Review $review)
    {
        return $this->success(['review' => new ReviewResource($review)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreReviewRequest $request, Review $review, UploadFile $uploadFile)
    {
        $validated_data = $request->validated();

        if($request->image) 
        {
            $uploadFile->remove($review->image, 'review');

            $validated_data['image'] = $uploadFile->store($request->image, $request->name, 'review', False);
        }

        $review->update($validated_data);

        return $this->success(['review' => new ReviewResource($review)], '', 201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Review $review, UploadFile $uploadFile)
    {
        $uploadFile->remove($review->image, 'review');

        $review->delete();

        return response(null, 204);
    }
}
