<x-page-layout>
    <section class="bg-[#101820]">
        <div class="w-5/6 mx-auto py-5 flex justify-center">
            <p class="text-2xl font-semibold text-gray-200 uppercase">
                <span class="underline"><a href="{{ route('home') }}">Home</a></span> / Cart / <span class="inline-block text-xl text-[#FEE715]"><i>Checkout</i></span> 
            </p><br>
        </div>
        <a href="{{ route('shop') }}" class="text-[#FEE715] underline block text-center pb-5">Continue shopping?</a>
    </section>

    <section>
        <div class="w-5/6 mx-auto flex justify-between gap-10">
            <div class="py-5 w-3/5"> 
                <h1 class="text-2xl font-semibold text-center uppercase">Billing Details</h1>
                <form action="#" class="space-y-10 py-5">
                    <div class="flex justify-between gap-5">
                        <input type="text" placeholder="First Name *" class="rounded-md p-3 block w-1/2 focus:ring-0 focus:border-[#101820] border-gray-300">
                        <input type="text" placeholder="Last Name *" class="rounded-md p-3 block w-1/2 focus:ring-0 focus:border-[#101820] border-gray-300">
                    </div>
                    <div class="flex justify-between gap-5">
                        <input type="text" placeholder="Email *" class="rounded-md p-3 block w-1/2 focus:ring-0 focus:border-[#101820] border-gray-300">
                        <input type="text" placeholder="Phone Number *" class="rounded-md p-3 block w-1/2 focus:ring-0 focus:border-[#101820] border-gray-300">
                    </div>
                    <div class="flex justify-between gap-5">
                        <input type="text" placeholder="Lodge *" class="rounded-md p-3 block w-1/2 focus:ring-0 focus:border-[#101820] border-gray-300">
                        <select name="area" id="area" class="rounded-md p-3 block w-1/2 focus:ring-0 focus:border-[#101820] text-gray-500 border-gray-300">
                            <option disabled selected>Eziobodo/Ihagwa/Umuchima/Obinze?</option>
                            <option value="eziobodo">Eziobodo</option>
                            <option value="umuchima">Umuchima</option>
                            <option value="ihiagwa">Ihagwa</option>
                            <option value="obinze">Obinze</option>
                        </select>
                    </div>
                    <div>
                        <textarea name="" id="" rows="10" placeholder="Additional Information" class="rounded-md p-3 block w-full focus:ring-0 focus:border-[#101820] border-gray-300"></textarea>
                    </div>
                </form>
            </div>

            <div class="py-5 w-2/5">
                <div class="px-4 space-y-8 rounded-md bg-clip-padding backdrop-filter backdrop-blur-3xl bg-opacity-20 shadow-lg border-t">
                    <h1 class="text-2xl font-semibold text-center border-b border-[#FEE715] py-3">Order Summary</h1>
                    <div class="flex justify-between items-center border-b border-[#FEE715] pb-3">
                        <p class="text-[#101820] text-sm uppercase font-semibold ">Pizzas with Leaf Toppings <span class="lowercase ml-5">x1</span> <br> <span class="text-xs">+ 30cl Pepsi</span></p>
                        <span class="text-[#101820] font-semibold">&#8358;10,000.00 <br> <span class="text-sm">+ &#8358;400.00</span></span>
                    </div>
                    <div class="flex justify-between items-center border-b border-[#FEE715] pb-3">
                        <p class="text-[#101820] uppercase font-semibold text-sm">Delicious fruit salad <span class="lowercase ml-5">x1</span> <br> <span class="text-xs">+ 1 ltr Hollandia</span></span></p>
                        <span class="text-[#101820] font-semibold">&#8358;14,999.00 <br> <span class="text-sm">+ &#8358;1,000.00</span></span>
                    </div>
                    <div class="flex justify-between items-center border-b border-[#FEE715] pb-3">
                        <p class="text-[#101820] text-sm uppercase font-semibold ">Shipping Fee</p>
                        <span class="text-[#101820] font-semibold">&#8358;1,000.00</span>
                    </div>
                    <div class="flex justify-between items-center border-b border-[#FEE715] pb-3">
                        <p class="text-[#101820] uppercase font-bold ">Total</p>
                        <span class="text-[#101820] font-bold">&#8358;27,400.00</span>
                    </div>
                </div>

                <div class="py-10 ">
                    <button class="bg-[#FEE715] w-full py-3 rounded-md font-semibold text-[#101820]">
                        Pay with Paystack
                    </button>
                </div>
            </div>
        </div>
    </section>
</x-page-layout>