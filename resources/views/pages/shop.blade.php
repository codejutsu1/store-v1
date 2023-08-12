<x-page-layout>
    <x-category />
    <section class="relative overflow-hidden">
        <div class="pt-5 pb-28 w-11/12 md:w-5/6 mx-auto circles">
            <h1 class="relative z-30 text-center text-[#101820] text-2xl md:text-4xl uppercase font-semibold">
                Products
            </h1>
            <div class="pt-44 relative z-30">
                <div class="md:grid grid-cols-2 justify-center gap-y-44 gap-10 space-y-36 md:space-y-0">
                    @forelse($products as $product)
                        <div class="bg-white rounded-md bg-clip-padding backdrop-filter backdrop-blur-3xl bg-opacity-20 border-t shadow-xl flex flex-col items-center justify-center rounded-r-2xl">
                            <div class="md:-mt-28 -mt-32">
                                <img class="object-cover w-[200px] h-[200px] images border shadow-lg" src="../../storage/product/{{ $product->productImage->image }}" alt="{{ $product->name }}" loading="lazy">
                            </div>
                            <div class="w-11/12 md:w-5/6 mx-auto">
                                <div class="border-b text-center py-10">
                                    <p class="text-[#101820] text-xl md:text-2xl uppercase font-bold ">{{ $product->name }}</p>
                                    <span class="text-[#101920] text-xl md:text-2xl font-bold"><sup>&#8358;</sup><span class="text-2xl md:text-4xl">@product_price($product->original_price)</span>.00</span>
                                </div>
                                <div class="py-8 flex justify-between">
                                    <a href="{{ route('product.show', $product->slug) }}" class="block px-5 py-2 uppercase font-bold bg-[#FEE715] text-[#101820] rounded-tr-md rounded-bl-md">View</a>
                                    <livewire:website.cart.add-to-cart :product="$product" />
                                </div>
                            </div>
                        </div>
                    @empty                    
                        <p class="text-xl font-semibold">No Product available yet...</p>
                    @endforelse
                    <!-- <div class="bg-white rounded-md bg-clip-padding backdrop-filter backdrop-blur-3xl bg-opacity-20 border-t shadow-xl flex flex-col items-center justify-center rounded-r-2xl">
                        <div class="-mt-28">
                            <img class="object-cover w-[200px] h-[200px] images border shadow-lg" src="{{ Vite::asset('resources/images/normal/ice-cream.jpg') }}" alt="Ice cream" loading="lazy">
                        </div>
                        <div class="w-5/6 mx-auto">
                            <div class="border-b text-center py-10">
                                <p class="text-xl md:text-2xl uppercase font-bold text-[#101820]">Cone Ice cream</p>
                                <div class="flex justify-between items-center">
                                    <span class="text-[#FEE715] text-xl md:text-2xl font-bold"><sup>&#8358;</sup><span class="text-2xl md:text-4xl line-through">6,999.00</span></span>
                                    <span class="text-[#101820] text-xl md:text-2xl font-bold"><sup>&#8358;</sup><span class="text-2xl md:text-4xl">1,999</span>.00</span>
                                </div>
                            </div>
                            <div class="py-8 flex justify-between">
                                <a href="#" class="block px-5 py-2 uppercase font-bold bg-[#FEE715] text-[#101820] rounded-tr-md rounded-bl-md">Buy Now</a>
                                <a href="#" class="block px-5 py-2 uppercase font-bold bg-[#FEE715] text-[#101820] rounded-tr-md rounded-bl-md">Add to cart</a>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </section>

    <x-category />
</x-page-layout>