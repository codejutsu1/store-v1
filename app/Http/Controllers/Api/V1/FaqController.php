<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Faq;
use Illuminate\Http\Request;
use App\Traits\HttpResponses;
use App\Http\Controllers\Controller;
use App\Http\Resources\V1\Faq\FaqResource;
use App\Http\Resources\V1\Faq\FaqCollection;

class FaqController extends Controller
{
    use HttpResponses;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return new FaqCollection(Faq::getAllFaq());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $faq = Faq::create(
            $request->validate([
                'question' => ['required', 'string', 'max:255'],
                'answer' => ['required', 'string', 'max:255']
            ])
        );

        return $this->success(['faq' => new FaqResource($faq)], '', 201); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Faq $faq)
    {
        return new FaqResource($faq);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Faq $faq)
    {
        $faq->update($request->validate([
            'question' => ['required', 'string', 'max:255'],
            'answer' => ['required', 'string', 'max:255']
        ]));

        return $this->success(['faq' => $faq], '',  201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Faq $faq)
    {
        $faq->delete();

        return response(null, 204);
    }
}
