<div>
    <form wire:submit.prevent="submit">
        <div class="w-11/12 md:w-5/6 mx-auto md:flex justify-between gap-10">
            <div class="py-5 md:w-3/5 w-full"> 
                <h1 class="text-xl md:text-2xl font-semibold text-center uppercase">Billing Details</h1>
                <div class="space-y-10 py-5">
                    <div class="md:flex justify-between md:gap-5 space-y-10 md:space-y-0">
                        <div class="w-full">
                            <input wire:model.debounce.500ms="first_name" type="text" placeholder="First Name *" class="w-full rounded-md p-3 block focus:ring-0 focus:border-[#101820] border-gray-300">
                            @error('first_name') <span class="text-red-600 font-bold">{{ $message }}</span> @enderror
                        </div>
                        <div class="w-full">
                            <input wire:model.debounce.500ms="last_name" type="text" placeholder="Last Name *" class="w-full rounded-md p-3 block focus:ring-0 focus:border-[#101820] border-gray-300">
                            @error('last_name') <span class="text-red-600 font-bold">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="md:flex justify-between md:gap-5 space-y-10 md:space-y-0">
                    <div class="w-full">
                        <input wire:model.debounce.500ms="email" type="text" placeholder="Email *" class="rounded-md p-3 block w-full focus:ring-0 focus:border-[#101820] border-gray-300">
                        @error('email') <span class="text-red-600 font-bold">{{ $message }}</span> @enderror
                    </div>
                    <div class="w-full">
                        <input wire:model.debounce.500ms="tel" type="tel" placeholder="Phone Number *" class="rounded-md p-3 block w-full focus:ring-0 focus:border-[#101820] border-gray-300">
                        @error('tel') <span class="text-red-600 font-bold">{{ $message }}</span> @enderror
                    </div>
                    </div>
                    <div class="md:flex justify-between md:gap-5 space-y-10 md:space-y-0">
                        <div class="w-full">
                            <input wire:model.debounce.500ms="lodge" type="text" placeholder="Lodge *" class="rounded-md p-3 block w-full focus:ring-0 focus:border-[#101820] border-gray-300">
                            @error('lodge') <span class="text-red-600 font-bold">{{ $message }}</span> @enderror
                        </div>
                        <div class="w-full">
                            <select wire:model.lazy="area" class="rounded-md p-3 block w-full focus:ring-0 focus:border-[#101820] text-gray-500 border-gray-300">
                                <option value="" disabled selected>Eziobodo/Ihagwa/Umuchima/Obinze?</option>
                                <option value="eziobodo">Eziobodo</option>
                                <option value="umuchima">Umuchima</option>
                                <option value="ihiagwa">Ihagwa</option>
                                <option value="obinze">Obinze</option>
                            </select>
                            @error('area') <span class="text-red-600 font-bold">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div>
                        <textarea wire:model.debounce.500ms="additional_information"  rows="10" placeholder="Additional Information" class="rounded-md p-3 block w-full focus:ring-0 focus:border-[#101820] border-gray-300"></textarea>
                        @error('additional_information') <span class="text-red-600 font-bold">{{ $message }}</span> @enderror
                    </div>
                </div>
            </div>

            <div class="py-5 md:w-2/5 w-full">
                <div class="px-4 space-y-8 rounded-md bg-clip-padding backdrop-filter backdrop-blur-3xl bg-opacity-20 shadow-lg border-t">
                    <h1 class="text-2xl font-semibold text-center border-b border-[#FEE715] py-3">Order Summary</h1>
                    @forelse($carts as $cart)
                    <div class="flex justify-between items-center border-b border-[#FEE715] pb-3">
                        <p class="text-[#101820] text-sm uppercase font-semibold ">{{ $cart->name }} <span class="lowercase ml-5">x{{ $cart->qty }}</span> <br> <span class="text-xs">+ 30cl Pepsi</span></p>
                        <span class="text-[#101820] font-semibold">@money(totalPrice($cart->qty, $cart->price)) <br> <span class="text-sm">+ &#8358;400.00</span></span>
                    </div>
                    @empty
                        <p class="text-lg font-semibold">No items yet</p>
                    @endforelse
                    <div class="flex justify-between items-center border-b border-[#FEE715] pb-3">
                        <p class="text-[#101820] text-sm uppercase font-semibold ">Shipping Fee</p>
                        <span class="text-[#101820] font-semibold">&#8358;1,000.00</span>
                    </div>
                    <div class="flex justify-between items-center border-b border-[#FEE715] pb-3">
                        <p class="text-[#101820] uppercase font-bold ">Total</p>
                        <span class="text-[#101820] font-bold">&#8358;{{ $cart_subtotal }}</span>
                    </div>
                </div>

                <div class="pt-10 text-sm space-y-5">
                    <p>
                        Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our privacy policy.
                    </p>
                    <div>
                        <label for="terms" class="cursor-pointer">    
                            <input type="checkbox" id="terms" class="focus:outline-none focus:ring-0 rounded-md" required>
                            <span class="uppercase font-bold text-xs">I have read and agreed to this website terms and condition</span>
                        </label>
                    </div>
                </div>

                <div class="pt-10">
                    <img src="{{ Vite::asset('resources/images/cards/paystack.png') }}" alt="Paystack Image">
                </div>

                <div class="py-10">
                    <button class="bg-[#FEE715] w-full py-3 rounded-md font-semibold text-[#101820]">
                        Pay with Paystack
                    </button>
                </div>
            </div>
        </div>
    </form>
</div>
