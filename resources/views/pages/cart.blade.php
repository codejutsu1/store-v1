<x-page-layout>
    <section class="bg-[#101820]">
        <div class="w-5/6 mx-auto py-5 flex justify-center">
            <p class="text-2xl font-semibold text-gray-200 uppercase">
                <span class="underline"><a href="{{ route('home') }}">Home</a></span> / <span class="inline-block text-xl text-[#FEE715]"><i>Your Cart</i></span> 
            </p>
        </div>
    </section>

    <section>
        <div class="w-11/12 md:w-5/6 mx-auto py-10 space-y-16">
            @forelse($cart_contents as $cart)
                @foreach($cart->options as $item)
                    <div class="md:flex justify-between py-4 shadow-xl rounded-md border-t space-y-5 md:space-y-0">
                        <div class="md:w-2/5 flex justify-center">
                            <img class="object-cover shadow-lg w-44 rounded-md" src="../../storage/product/{{ $item->productImage->image }}" alt="{{ $item->productImage->description }}">
                        </div>
                        <div class="md:w-2/5 w-11/12 mx-auto md:mx-0">
                            <div>
                                <p class="text-[#101820] text-xl md:text-2xl uppercase font-bold ">{{ $item->name }}</p>
                                <span class="text-[#101820] text-base md:text-lg font-bold mt-3">@money($item->original_price)</span>
                            </div>
                
                @endforeach
                            <div class="mt-5 text-base md:text-lg font-semibold md:block flex items-center space-x-4 md:space-x-0">
                                <p class="font-semibold">Drinks? </p>
                                <select name="drinks" id="drinks" class="bg-[#101820] outline-none text-[#FEE715] border-none mt-3 rounded-md focus:outline-none focus:ring-0 w-3/5 font-semibold">
                                    <option diabled selected>-- Select Drink --</option>
                                    <option value="1 ltr Hollandia">1 ltr Hollandia</option>
                                </select>
                                <span class="text-[#101920] inline-block ml-3">&#8358;1,000.00</span>
                            </div>
                            {{ $cart->rowId }}
                            <livewire:website.cart.price-quantity :row_id="$cart->rowId" />
                        </div>
                    </div>
            @empty
            <p class="text-lg font-semibold">No Item in your cart</p>
            @endforelse
            <div class="flex justify-end py-10">
                <a href="{{ route('cart.review') }}" class="py-4 px-8 md:px-6 bg-[#FEE715] text-[#101820] font-semibold text-lg md:text-xl rounded-md shadow-lg">Next</a>
            </div>
        </div>
    </section>

</x-page-layout>