<div>
<section>
        <div class="w-11/12 md:w-5/6 mx-auto py-10 overflow-hidden">
            <div class="border p-4 rounded-md bg-clip-padding backdrop-filter backdrop-blur-3xl bg-opacity-20 shadow-xl overflow-x-auto">
                <table class="w-full overflow-x-auto"> 
                    <tr class="bg-[#FEE715]">
                        <th class="px-10"></th>
                        <th class="py-3 px-10">Image</th>
                        <th class="px-10">Product</th>
                        <th class="px-10">Price</th>
                        <th class="px-10">Quantity</th>
                        <th class="px-10">Subtotal</th>
                    </tr>
                    @forelse($carts_content as $cart)
                        <tr class="text-center border-t">
                            <td class="flex justify-center items-center py-10">
                                <a href="{{ route('cart') }}" class="block p-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-500 hover:text-yellow-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path>
                                    </svg>
                                </a>
                            </td>
                            @foreach($cart->options as $item)
                            <td>
                                <div class="flex justify-center py-2">
                                    <img class="object-cover shadow-lg w-24 h-24 md:h-32 md:w-32 rounded-md" src="../../storage/product/{{ $item->productImage->image }}" alt="{{ $item->productImage->description }}">
                                </div>
                            </td>
                            <td >
                                <p class="text-[#101820] text-base md:text-lg uppercase font-bold ">{{ $item->name }} <br> <span class="text-xs md:text-sm">+ 1 ltr Hollandia</span></p>
                            </td>
                            <td>
                                <span class="text-[#101820] font-bold mt-3">@money($item->original_price) <br> <span class="text-xs md:text-sm">+ &#8358;1,000.00</span></span>
                            </td>
                            @endforeach
                            <td>
                                <input type="number" disabled value="{{ $cart->qty }}" min="0" class="w-1/2 rounded-2xl text-center bg-[#101820] text-[#FEE715] focus:ring-0 focus:outline-4 focus:border-[#FEE715]" value="1">
                            </td>
                            <td>
                                <span class="text-[#101820] font-bold mt-3">@money(totalPrice($cart->qty,$cart->price))</span>
                            </td>
                        </tr>
                    @empty
                        <p class="text-lg font-semibold">No Item in your cart</p>
                    @endforelse
                </table>
            </div>
        </div>
    </section>

    <section>
        <div class="w-11/12 md:w-5/6 mx-auto flex justify-end pb-5">
            <div class="w-full md:w-2/5 uppercase px-4 rounded-md bg-clip-padding backdrop-filter backdrop-blur-3xl bg-opacity-20 shadow-lg border-t">
                <div class="flex justify-between py-4 text-lg md:text-xl font-semibold border-b">
                    <span>Subtotal</span>
                    <span>&#8358;{{ $cart_subtotal }}</span>
                </div>
                <div class="flex justify-between py-4 text-lg md:text-xl font-semibold border-b">
                    <span>Shipping Fee</span>
                    <span>&#8358;1,000.00</span>
                </div>
                <div class="flex justify-between py-4 text-lg md:text-xl font-bold border-b">
                    <span>Total</span>
                    <span>&#8358;{{ $cart_subtotal }}</span>
                </div>
            </div>                    
        </div>
        <div class="flex justify-end w-11/12 md:w-5/6 mx-auto py-4">
            <a href="{{ route('checkout') }}" class="px-6 py-2 bg-[#FEE715] rounded-md font-semibold text-base md:text-lg uppercase">Proceed to checkout</a>
        </div>  
    </section>
</div>
