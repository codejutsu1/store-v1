<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Str;
use App\Services\UploadFile;
use Illuminate\Http\Request;
use App\Traits\HttpResponses;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\StoreProductRequest;
use App\Http\Resources\v1\Product\ProductResource;
use App\Http\Resources\v1\Product\ProductCollection;

class ProductController extends Controller
{
    use HttpResponses;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    return new ProductCollection(Product::with('productImage')->get());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductRequest $request, UploadFile $uploadFile)
    {
        $request->validated();

        $slug = Str::slug($request->name);

        $product = Category::findOrFail($request->category_id)->products()->create([
            'category_id' => $request->category_id,
            'name' => $request->name,
            'slug' => $slug,
            'original_price' => $request->original_price,
        ]);

        $image_name = $uploadFile->store($request->image, $request->description, 'product', false);

        $product->productImage()->create([
            'product_id' => $product->id,
            'image' => $image_name,
            'description' => $request->description,
        ]);

        return $this->success(['products' => new ProductResource($product)]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
