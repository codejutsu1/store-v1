<x-page-layout>
    <section class="bg-[#101820]">
        <div class="w-1/2 mx-auto py-5">
            <form action="#" class=" flex justify-between">
                <div>
                    <label for="category1" class="flex items-center px-2 category">
                        <input type="radio" name="catergories" id="category1"  class="w-12 h-6 outline-none bg-gray-200 cursor-pointer rounded-[20px] relative">
                        <span class="block p-5 category-span font-semibold text-gray-200">
                            Category 1
                        </span>
                    </label>
                </div>

                <div>
                    <label for="category2" class="flex items-center px-2 category">
                        <input type="radio" name="catergories" id="category2" class="w-12 h-6 outline-none bg-gray-200 cursor-pointer rounded-[20px] relative">
                        <span class="block p-5 category-span font-semibold text-gray-200">
                            Category 2
                        </span>
                    </label>
                </div>

                <div>
                    <label for="category3" class="flex items-center px-2 category">
                        <input type="radio" name="catergories" id="category3" class="w-12 h-6 outline-none bg-gray-200 cursor-pointer rounded-[20px] relative">
                        <span class="block p-5 category-span font-semibold text-gray-200">
                            Category 3
                        </span>
                    </label>
                </div>
            </form>
        </div>

        <section class="relative">
        <div class="py-10 pb-28 w-5/6 mx-auto circles">
            <h1 class="relative z-30 text-center text-4xl uppercase font-semibold">
                Top Products
            </h1>
            <div class="pt-44 relative z-30">
                <div class="grid grid-cols-2 justify-center gap-y-44 gap-10">
                    <div class="bg-white rounded-md bg-clip-padding backdrop-filter backdrop-blur-3xl bg-opacity-20 border-t shadow-xl flex flex-col items-center justify-center rounded-r-2xl">
                        <div class="-mt-28">
                            <img class="object-cover w-[200px] h-[200px] images border shadow-lg" src="{{ Vite::asset('resources/images/normal/pizza.jpg') }}" alt="Pizza">
                        </div>
                        <div class="w-5/6 mx-auto">
                            <div class="border-b text-center py-10">
                                <p class="text-2xl uppercase font-bold text-[#101820]">Pizzas with Leaf Toppings</p>
                                <span class="text-[#101820] text-2xl font-bold"><sup>&#8358;</sup><span class="text-4xl">10,000</span>.00</span>
                            </div>
                            <div class="py-8 flex justify-between">
                                <a href="#" class="block px-5 py-2 uppercase font-bold bg-[#FEE715] text-[#101820] rounded-tr-md rounded-bl-md">Buy Now</a>
                                <a href="#" class="block px-5 py-2 uppercase font-bold bg-[#FEE715] text-[#101820] rounded-tr-md rounded-bl-md">Add to cart</a>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-md bg-clip-padding backdrop-filter backdrop-blur-3xl bg-opacity-20 border-t shadow-xl flex flex-col items-center justify-center rounded-r-2xl">
                        <div class="-mt-28">
                            <img class="object-cover w-[200px] h-[200px] images border shadow-lg" src="{{ Vite::asset('resources/images/normal/fruit-salad.jpg') }}" alt="Fruit Salad">
                        </div>
                        <div class="w-5/6 mx-auto">
                            <div class="border-b text-center py-10">
                                <p class="text-2xl uppercase font-bold text-[#101820]">Delicious fruit salad</p>
                                <span class="text-[#101820] text-2xl font-bold"><sup>&#8358;</sup><span class="text-4xl">14,999</span>.00</span>
                            </div>
                            <div class="py-8 flex justify-between">
                                <a href="#" class="block px-5 py-2 uppercase font-bold bg-[#FEE715] text-[#101820] rounded-tr-md rounded-bl-md">Buy Now</a>
                                <a href="#" class="block px-5 py-2 uppercase font-bold bg-[#FEE715] text-[#101820] rounded-tr-md rounded-bl-md">Add to cart</a>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-md bg-clip-padding backdrop-filter backdrop-blur-3xl bg-opacity-20 border-t shadow-xl flex flex-col items-center justify-center rounded-r-2xl">
                        <div class="-mt-28">
                            <img class="object-cover w-[200px] h-[200px] images border shadow-lg" src="{{ Vite::asset('resources/images/normal/cake.jpg') }}" alt="Cake">
                        </div>
                        <div class="w-5/6 mx-auto">
                            <div class="border-b text-center py-10">
                                <p class="text-2xl uppercase font-bold text-[#101820]">Sliced Cake Buffer</p>
                                <span class="text-[#101820] text-2xl font-bold"><sup>&#8358;</sup><span class="text-4xl">4,999</span>.00</span>
                            </div>
                            <div class="py-8 flex justify-between">
                                <a href="#" class="block px-5 py-2 uppercase font-bold bg-[#FEE715] text-[#101820] rounded-tr-md rounded-bl-md">Buy Now</a>
                                <a href="#" class="block px-5 py-2 uppercase font-bold bg-[#FEE715] text-[#101820] rounded-tr-md rounded-bl-md">Add to cart</a>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-md bg-clip-padding backdrop-filter backdrop-blur-3xl bg-opacity-20 border-t shadow-xl flex flex-col items-center justify-center rounded-r-2xl">
                        <div class="-mt-28">
                            <img class="object-cover w-[200px] h-[200px] images border shadow-lg" src="{{ Vite::asset('resources/images/normal/ice-cream.jpg') }}" alt="Ice cream">
                        </div>
                        <div class="w-5/6 mx-auto">
                            <div class="border-b text-center py-10">
                                <p class="text-2xl uppercase font-bold text-[#101820]">Cone Ice cream</p>
                                <div class="flex justify-between items-center">
                                    <span class="text-[#FEE715] text-2xl font-bold"><sup>&#8358;</sup><span class="text-4xl line-through">6,999.00</span></span>
                                    <span class="text-[#101820] text-2xl font-bold"><sup>&#8358;</sup><span class="text-4xl">1,999</span>.00</span>
                                </div>
                            </div>
                            <div class="py-8 flex justify-between">
                                <a href="#" class="block px-5 py-2 uppercase font-bold bg-[#FEE715] text-[#101820] rounded-tr-md rounded-bl-md">Buy Now</a>
                                <a href="#" class="block px-5 py-2 uppercase font-bold bg-[#FEE715] text-[#101820] rounded-tr-md rounded-bl-md">Add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </section>
</x-page-layout>