<x-page-layout>
    <section class="bg-[#101820]">
        <div class="w-5/6 mx-auto py-5 flex justify-center">
            <p class="text-xl md:text-2xl font-semibold text-gray-200 uppercase">
                <span class="underline"><a href="{{ route('home') }}">Home</a></span> / <span class="inline-block text-lg md:text-xl text-[#FEE715]"><i>Review Cart</i></span> 
            </p><br>
        </div>
        <a href="{{ route('shop') }}" class="text-[#FEE715] underline block text-center pb-5">Continue shopping?</a>
    </section>

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
                    <tr class="text-center">
                        <td>
                            <span class="font-bold text-red-500">X</span>
                        </td>
                        <td>
                            <div class="flex justify-center py-2">
                                <img class="object-cover shadow-lg w-24 md:w-32 rounded-md" src="{{ Vite::asset('resources/images/normal/fruit-salad.jpg') }}" alt="Pizza">
                            </div>
                        </td>
                        <td >
                            <p class="text-[#101820] text-base md:text-lg uppercase font-bold ">Delicious fruit salad <br> <span class="text-xs md:text-sm">+ 1 ltr Hollandia</span></p>
                        </td>
                        <td>
                            <span class="text-[#101820] font-bold mt-3">&#8358;14,999.00 <br> <span class="text-xs md:text-sm">+ &#8358;1,000.00</span></span>
                        </td>
                        <td>
                            <input type="number" min="0" max="10" class="w-1/2 rounded-2xl text-center bg-[#101820] text-[#FEE715] focus:ring-0 focus:outline-4 focus:border-[#FEE715]" value="1">
                        </td>
                        <td>
                        <span class="text-[#101820] font-bold mt-3">&#8358;15,999.00</span>
                        </td>
                    </tr>
                    <tr class="text-center">
                        <td>
                            <span class="font-bold text-red-500">X</span>
                        </td>
                        <td>
                            <div class="flex justify-center py-2">
                                <img class="object-cover shadow-lg w-24 md:w-32 rounded-md" src="{{ Vite::asset('resources/images/normal/pizza.jpg') }}" alt="Pizza">
                            </div>
                        </td>
                        <td>
                            <p class="text-[#101820] text-base md:text-lg uppercase font-bold ">Pizzas with Leaf Toppings <br> <span class="text-xs md:text-sm">+ 30cl Pepsi</span></p>
                        </td>
                        <td>
                            <span class="text-[#101820] font-bold mt-3">&#8358;10,000.00 <br> <span class="text-xs md:text-sm">+ &#8358;400.00</span></span>
                        </td>
                        <td>
                            <input type="number" min="0" max="10" class="w-1/2 rounded-2xl text-center bg-[#101820] text-[#FEE715] focus:ring-0 focus:outline-4 focus:border-[#FEE715]" value="1">
                        </td>
                        <td>
                        <span class="text-[#101820] font-bold mt-3">&#8358;10,400.00</span>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </section>

    <section>
        <div class="w-11/12 md:w-5/6 mx-auto flex justify-end pb-5">
            <div class="w-full md:w-2/5 uppercase px-4 rounded-md bg-clip-padding backdrop-filter backdrop-blur-3xl bg-opacity-20 shadow-lg border-t">
                <div class="flex justify-between py-4 text-lg md:text-xl font-semibold border-b">
                    <span>Subtotal</span>
                    <span>&#8358;26,400.00</span>
                </div>
                <div class="flex justify-between py-4 text-lg md:text-xl font-semibold border-b">
                    <span>Shipping Fee</span>
                    <span>&#8358;1,000.00</span>
                </div>
                <div class="flex justify-between py-4 text-lg md:text-xl font-bold border-b">
                    <span>Total</span>
                    <span>&#8358;27,400.00</span>
                </div>
            </div>                    
        </div>
        <div class="flex justify-end w-11/12 md:w-5/6 mx-auto py-4">
            <a href="{{ route('checkout') }}" class="px-6 py-2 bg-[#FEE715] rounded-md font-semibold text-base md:text-lg uppercase">Proceed to checkout</a>
        </div>  
    </section>

</x-page-layout>