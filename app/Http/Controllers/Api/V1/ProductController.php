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
use App\Http\Requests\Api\UpdateProductRequest;
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
    return new ProductCollection(Product::with('productImage')->paginate(10));
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

        return $this->success(['products' => new ProductResource($product)], '', 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return new ProductResource($product);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductRequest $request, Product $product, UploadFile $uploadFile)
    {
        $image = $product->productImage->image;

        $request->validated();

        $product->update([
            'category_id' => $request->category_id,
            'name' => $request->name,
            'original_price' => $request->original_price,
        ]);

        if($request->image)
        {
            $uploadFile->remove($image, 'product');

            $image = $uploadFile->store($request->image, $request->description, 'product', False);
        }

        $product->productImage->update([
            'image' => $image,
            'description' => $request->description,
        ]);

        return $this->success(['product' => new ProductResource($product)], '', 201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product, UploadFile $uploadFile)
    {
        $uploadFile->remove($product->productImage->image, 'product');

        $product->delete();

        return response(null, 204);
    }
}
