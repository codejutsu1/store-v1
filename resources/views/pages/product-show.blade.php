<x-page-layout>
    <section class="bg-[#101820]">
        <div class="w-5/6 mx-auto py-5 flex justify-center">
            <p class="text-xl md:text-2xl font-semibold text-gray-200 uppercase">
            <span class="underline"><a href="{{ route('home') }}">Home</a></span> / Product / <span class="inline-block text-lg md:text-xl text-[#FEE715]"><i>{{ $product->name }}</i></span> 
            </p><br>
        </div>
        <a href="#" class="text-[#FEE715] underline block text-center pb-5">Continue shopping?</a>
    </section>

    <section class="w-11/12 md:w-5/6 mx-auto py-10">
        <div class="md:flex relative justify-between py-4 shadow-xl rounded-md border-t space-y-5 md:space-y-0">
                <div class="md:w-2/5 flex justify-center">
                    <img class="object-cover shadow-lg w-72 h-72 rounded-md" src="../../storage/product/{{ $product->productImage->image }}" alt="{{ $product->name }}">
                </div>
                <div class="md:w-2/5 w-11/12 mx-auto md:mx-0 space-y-8 px-2">
                    <div>
                        <span class="text-2xl font-bold block">Product Name</span>
                        <span class="text-lg font-semibold">{{ $product->name }}</span>
                    </div>
                    <div>
                        <span class="text-2xl font-bold block">Product Price</span>
                        <span class="text-lg font-bold">@money($product->original_price)</span>
                    </div>
                    <div>
                        <span class="text-2xl font-bold block">Product Description</span>
                        <span class="text-lg font-semibold">{{ $product->productImage->description }}</span>
                    </div>
                    <div>
                        <span class="text-2xl font-bold block">Category</span>
                        <span class="text-lg font-semibold">{{ $category->name }}</span>
                    </div>
                    <div>
                        <span class="text-2xl font-bold block">Category Description</span>
                        <span class="text-lg font-semibold">{{ $category->description }}</span>
                    </div>
                    <div>
                        <livewire:website.cart.buy-now :product="$product" />
                    </div>
                </div>    
        </div>
    </section>
</x-page-layout>