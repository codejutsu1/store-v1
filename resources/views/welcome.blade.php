<x-page-layout>

    <div class="bg-hero-image bg-cover relative h-[600px] overflow-hidden">
        <div class="absolute bg-[#101820] opacity-60 inset-0"></div>
        <div class="relative z-40 w-5/6 mx-auto flex justify-between">
            <div class="pt-20 w-[400px]">
                <h1 class="text-6xl font-bold text-[#FEE715] uppercase" id="typed-strings"></h1>
                <p class="text-2xl font-semibold text-gray-200 mt-2" id="typed-strings2"></p>
            </div>

            <div class="h-[400px] w-[400px] bg-[#FEE715] mt-10 pt-10" style="border-radius: 100%;">
                <img class="" src="{{ Vite::asset('resources/images/normal/young_model.png') }}" alt="A young black model">
            </div>

            <div class="flex items-end">
                <div>
                    <p class="text-4xl font-bold text-gray-100 uppercase">
                        <span class="text-[#FEE715]">Quick </span>order <br/> Fast <span class="text-[#FEE715]">Delivery</span>
                    </p>
                    <button class="bg-[#FEE715] px-4 py-2 text-[#101820] font-semibold text-lg mt-4 rounded-md shadow-2xl animate-bounce">
                        Order Now! &#128523
                    </button>
                </div>
            </div>
        </div>
    </div>


    <div class="py-10 w-5/6 mx-auto border relative circles">
        <h1 class="text-center text-4xl uppercase font-semibold ">
            Top Products
        </h1>
        <div class="pt-10 circes">
            <div class="grid grid-cols-2 justify-center gap-10">
                <div class="bg-white rounded-md bg-clip-padding backdrop-filter backdrop-blur-3xl bg-opacity-90 border shadow-xl h-[400px] flex items-center justify-center rounded-r-2xl">
                    <h1>Product 1</h1>
                </div>

                <div class="bg-gray-600 h-[400px] flex items-center justify-center">
                    <h1>Product 2</h1>
                </div>

                <div class="bg-gray-600 h-[400px] flex items-center justify-center">
                    <h1>Product 3</h1>
                </div>

                <div class="bg-gray-600 h-[400px] flex items-center justify-center">
                    <h1>Product 4</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="py-10 w-5/6 mx-auto">
        <h1 class="text-center text-4xl uppercase font-semibold">
            Categories
        </h1>
        <div class="pt-10">
            <div class="flex justify-between space-x-2">
                <div class="bg-gray-600 h-[200px] w-[200px] flex items-center justify-center rounded-r-2xl">
                    <h1>Product 1</h1>
                </div>

                <div class="bg-gray-600 h-[200px] w-[200px] flex items-center justify-center">
                    <h1>Product 2</h1>
                </div>

                <div class="bg-gray-600 h-[200px] w-[200px] flex items-center justify-center">
                    <h1>Product 3</h1>
                </div>

                <div class="bg-gray-600 h-[200px] w-[200px] flex items-center justify-center">
                    <h1>Product 4</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="py-10 w-5/6 mx-auto">
        <h1 class="text-center text-4xl uppercase font-semibold">
            Feeds
        </h1>
       <div class="bg-gray-600 h-[400px] mt-10">

       </div>
    </div>

    <div class="py-10 w-5/6 mx-auto">
        <h1 class="text-center text-4xl uppercase font-semibold">
            Meet our chef
        </h1>
       <div class="w-[400px] h-[400px] bg-black mx-auto mt-10 shadow-2xl" style="border-radius: 100%;">

       </div>

       <div class="pt-10">
           <p class="text-center">Moiseur James</p>
       </div>
    </div>


    <div class="bg-gray-500">
        <div class="py-10 w-5/6 mx-auto ">
            <h1 class="text-center text-4xl uppercase font-semibold">
                Wetin dem dey yarn about us?
            </h1>
            <div class="pt-10">
                <div class="flex justify-between space-x-2">
                    <div class="bg-zinc-800 h-[200px] w-[200px] flex items-center justify-center rounded-r-2xl">
                        <h1>Product 1</h1>
                    </div>

                    <div class="bg-zinc-800 h-[200px] w-[200px] flex items-center justify-center">
                        <h1>Product 2</h1>
                    </div>

                    <div class="bg-zinc-800 h-[200px] w-[200px] flex items-center justify-center">
                        <h1>Product 3</h1>
                    </div>

                    <div class="bg-zinc-800 h-[200px] w-[200px] flex items-center justify-center">
                        <h1>Product 4</h1>
                    </div>
                </div>
            </div>  
        </div>
    </div>

    <div class="h-[600px] bg-zinc-800">

    </div>

</x-page-layout>    