<x-page-layout>

    <div class="bg-hero-image bg-cover relative h-[600px] overflow-hidden">
        <div class="absolute bg-[#101820] opacity-60 inset-0"></div>
        <div class="relative z-40 w-5/6 mx-auto flex justify-between">
            <div class="pt-20 w-[400px]">
                <h1 class="text-6xl font-bold text-[#FEE715] uppercase" id="typed-strings"></h1>
                <p class="text-2xl font-semibold text-gray-100 mt-2" id="typed-strings2"></p>
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


    <section class="relative">
        <div class="py-10 pb-28 w-5/6 mx-auto circles">
            <h1 class="relative z-30 text-center text-4xl uppercase font-semibold">
                Top Products
            </h1>
            <div class="pt-44 relative z-30">
                <div class="grid grid-cols-2 justify-center gap-y-44 gap-10">
                    <div class="bg-white rounded-md bg-clip-padding backdrop-filter backdrop-blur-3xl bg-opacity-20 border-t shadow-xl flex flex-col items-center justify-center rounded-r-2xl">
                        <div class="bg-[url('../../resources/images/normal/pizza.jpg')] w-[200px] h-[200px] bg-cover -mt-28 shadow-lg bg-no-repeat images border"></div>
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
                        <div class="bg-[url('../../resources/images/normal/fruit-salad.jpg')] w-[200px] h-[200px] bg-cover -mt-28 shadow-lg bg-no-repeat images border"></div>
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
                        <div class="bg-[url('../../resources/images/normal/cake.jpg')] w-[200px] h-[200px] bg-cover -mt-28 shadow-lg bg-no-repeat images border"></div>
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
                        <div class="bg-[url('../../resources/images/normal/ice-cream.jpg')] w-[200px] h-[200px] bg-cover -mt-28 shadow-lg bg-no-repeat images border"></div>
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

    <section class="bg-[#101820] relative">
     
        <div class="py-10 w-5/6 mx-auto relative z-30">
            <h1 class="text-center text-4xl uppercase font-semibold text-[#FEE721]">
                Categories
            </h1>
            <div class="pt-10">
                <div class="flex justify-between gap-x-20">
                    <div class="shadow-custom w-1/3 h-[400px] relative rounded-md">
                        <div class="bg-gray-800 opacity-90 hover:opacity-100 absolute top-5 left-5 right-5 bottom-5 p-4 overflow-hidden rounded-md shadow-custom-2 duration-500 hover:translate-y-[-50px] group">
                            <div class="relative pt-16 text-center">
                                <h1 class="text-4xl font-bold text-gray-200 group-hover:text-[#FEE715] duration-1000">Armateur</h1>
                                <h3 class="absolute -top-10 right-4 text-[#FEE715] opacity-20 text-[8rem] font-bold group-hover:opacity-30 duration-1000">01</h3>
                                <p class="my-8 font-semibold text-gray-400">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cupiditate corrupti nemo voluptatem, consectetur impedit accusantium saepe provident 
                                </p>
                                <a href="#" class="bg-black text-gray-200 rounded-3xl px-8 py-2 font-bold text-xl group-hover:text-[#101820] group-hover:bg-[#FEE715] duration-1000">Explore</a>
                            </div>
                        </div>
                    </div>

                    <div class="shadow-custom w-1/3 h-[400px] relative rounded-md">
                        <div class="bg-gray-800 opacity-90 hover:opacity-100 absolute top-5 left-5 right-5 bottom-5 p-4 overflow-hidden rounded-md shadow-custom-2 duration-500 hover:translate-y-[-50px] group">
                            <div class="relative pt-16 text-center">
                                <h1 class="text-4xl font-bold text-gray-200 group-hover:text-[#FEE715] duration-1000">Mid</h1>
                                <h3 class="absolute -top-10 right-4 text-[#FEE715] opacity-20 text-[8rem] font-bold group-hover:opacity-30 duration-1000">02</h3>
                                <p class="my-8 font-semibold text-gray-400">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cupiditate corrupti nemo voluptatem, consectetur impedit accusantium saepe provident
                                </p>
                                <a href="#" class="bg-black text-gray-200 rounded-3xl px-8 py-2 font-bold text-xl group-hover:text-[#101820] group-hover:bg-[#FEE715] duration-1000">Explore</a>
                            </div>
                        </div>
                    </div>

                    <div class="shadow-custom w-1/3 h-[400px] relative rounded-md">
                        <div class="bg-gray-800 opacity-90 hover:opacity-100 absolute top-5 left-5 right-5 bottom-5 p-4 overflow-hidden rounded-md shadow-custom-2 duration-500 hover:translate-y-[-50px] group">
                            <div class="relative pt-16 text-center">
                                <h1 class="text-4xl font-bold text-gray-200 group-hover:text-[#FEE715] duration-1000">Professional</h1>
                                <h3 class="absolute -top-10 right-4 text-[#FEE715] opacity-20 text-[8rem] font-bold group-hover:opacity-30 duration-1000">03</h3>
                                <p class="my-8 font-semibold text-gray-400">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cupiditate corrupti nemo voluptatem, consectetur impedit accusantium saepe provident 
                                </p>
                                <a href="#" class="bg-black text-gray-200 rounded-3xl px-8 py-2 font-bold text-xl group-hover:text-[#101820] group-hover:bg-[#FEE715] duration-1000">Explore</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <div class="py-10 mx-auto">
        <h1 class="text-center text-4xl uppercase font-semibold my-10">
            Feeds
        </h1>
       <div class="swiper mySwiper">
            <div class="swiper-wrapper ">
                <div class="swiper-slide">
                    <img class="h-full w-full object-cover" src="{{ Vite::asset('resources/images/feeds/food-poster-1.jpg') }}" alt="A food Poster">
                </div>
                <div class="swiper-slide">
                    <img class="h-full w-full object-cover" src="{{ Vite::asset('resources/images/feeds/food-poster-2.jpg') }}" alt="A food Poster">
                </div>
                <div class="swiper-slide">
                    <img class="h-full w-full object-cover" src="{{ Vite::asset('resources/images/feeds/food-poster-3.jpg') }}" alt="A food Poster">
                </div>
                <div class="swiper-slide">
                    <img class="h-full w-full object-cover" src="{{ Vite::asset('resources/images/feeds/food-poster-4.jpg') }}" alt="A food Poster">
                </div>
            </div>

            <div class="swiper-pagination"></div>
       </div>
    </div>

    <section class="bg-[#101820]">
        <div>
            <div class="py-10 w-5/6 mx-auto ">
                <h1 class="text-center text-4xl uppercase font-semibold text-[#FEE715]">
                    Wetin dem dey yarn about us?
                </h1>

                <div class="pt-10 swiper-container overflow-hidden">
                    <div class="flex justify-between space-x-10 swiper-wrapper">
                        <div class="bg-gray-800 h-[500px] w-[300px] py-8 px-5 swiper-slide group">
                            <div class="layer"></div>
                            <div class="relative z-30">
                                <p class="text-center text-gray-300 group-hover:text-gray-900 font-semibold duration-1000">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur libero porro quis placeat aut adipisci, suscipit dignissimos esse, est eveniet, dolores fuga? Iste provident possimus animi, commodi ipsa vel eum.</P>
                                <div class="pt-10 pb-5 flex justify-center">
                                    <img class="border-2 border-gray-200 w-32 h-32 rounded-full object-cover" src="{{ Vite::asset('resources/images/review/human-1.jpg') }}" alt="Human 1">
                                </div>
                                <h3 class="text-gray-200 font-bold uppercase text-center">Beauri Goddess</h3>
                                <div class="w-5/6 mx-auto flex justify-between pt-2">
                                    <a href="#">
                                        <img class="w-6 object-cover" src="{{ Vite::asset('resources/images/review/tiktok.svg') }}" alt="reviewer tiktok">
                                    </a>
                                    <a href="#">
                                        <img class="w-6 object-cover" src="{{ Vite::asset('resources/images/review/twitter.svg') }}" alt="reviewer tiktok">
                                    </a>
                                    <a href="#">
                                        <img class="w-6 object-cover" src="{{ Vite::asset('resources/images/review/instagram.svg') }}" alt="reviewer tiktok">
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="bg-gray-800 h-[500px] w-[300px] py-8 px-5 swiper-slide group">
                            <div class="layer"></div>
                            <div class="relative z-30">
                                <p class="text-center text-gray-300 group-hover:text-gray-900 font-semibold duration-1000">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur libero porro quis placeat aut adipisci, suscipit dignissimos esse, est eveniet, dolores fuga? Iste provident possimus animi, commodi ipsa vel eum.</P>
                                <div class="pt-10 pb-5 flex justify-center">
                                    <img class="border-2 border-gray-200 w-32 h-32 rounded-full object-cover" src="{{ Vite::asset('resources/images/review/human-2.png') }}" alt="Human 1">
                                </div>
                                <h3 class="text-gray-200 font-bold uppercase text-center">D Tee</h3>
                                <div class="w-5/6 mx-auto flex justify-between pt-2">
                                    <a href="#">
                                        <img class="w-6 object-cover" src="{{ Vite::asset('resources/images/review/tiktok.svg') }}" alt="reviewer tiktok">
                                    </a>
                                    <a href="#">
                                        <img class="w-6 object-cover" src="{{ Vite::asset('resources/images/review/twitter.svg') }}" alt="reviewer tiktok">
                                    </a>
                                    <a href="#">
                                        <img class="w-6 object-cover" src="{{ Vite::asset('resources/images/review/instagram.svg') }}" alt="reviewer tiktok">
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="bg-gray-800 h-[500px] w-[300px] py-8 px-5 swiper-slide group">
                            <div class="layer"></div>
                            <div class="relative z-30">
                                <p class="text-center text-gray-300 group-hover:text-gray-900 font-semibold duration-1000">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur libero porro quis placeat aut adipisci, suscipit dignissimos esse, est eveniet, dolores fuga? Iste provident possimus animi, commodi ipsa vel eum.</P>
                                <div class="pt-10 pb-5 flex justify-center">
                                    <img class="border-2 border-gray-200 w-32 h-32 rounded-full object-cover" src="{{ Vite::asset('resources/images/review/human-3.jpg') }}" alt="Human 1">
                                </div>
                                <h3 class="text-gray-200 font-bold uppercase text-center">DO Kalos</h3>
                                <div class="w-5/6 mx-auto flex justify-between pt-2">
                                    <a href="#">
                                        <img class="w-6 object-cover" src="{{ Vite::asset('resources/images/review/tiktok.svg') }}" alt="reviewer tiktok">
                                    </a>
                                    <a href="#">
                                        <img class="w-6 object-cover" src="{{ Vite::asset('resources/images/review/twitter.svg') }}" alt="reviewer tiktok">
                                    </a>
                                    <a href="#">
                                        <img class="w-6 object-cover" src="{{ Vite::asset('resources/images/review/instagram.svg') }}" alt="reviewer tiktok">
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="bg-gray-800 h-[500px] w-[300px] py-8 px-5 swiper-slide group">
                            <div class="layer"></div>
                            <div class="relative z-30">
                                <p class="text-center text-gray-300 group-hover:text-gray-900 font-semibold duration-1000">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur libero porro quis placeat aut adipisci, suscipit dignissimos esse, est eveniet, dolores fuga? Iste provident possimus animi, commodi ipsa vel eum.</P>
                                <div class="pt-10 pb-5 flex justify-center">
                                    <img class="border-2 border-gray-200 w-32 h-32 rounded-full object-cover" src="{{ Vite::asset('resources/images/review/human-2.png') }}" alt="Human 1">
                                </div>
                                <h3 class="text-gray-200 font-bold uppercase text-center">Preshy</h3>
                                <div class="w-5/6 mx-auto flex justify-between pt-2">
                                    <a href="#">
                                        <img class="w-6 object-cover" src="{{ Vite::asset('resources/images/review/tiktok.svg') }}" alt="reviewer tiktok">
                                    </a>
                                    <a href="#">
                                        <img class="w-6 object-cover" src="{{ Vite::asset('resources/images/review/twitter.svg') }}" alt="reviewer tiktok">
                                    </a>
                                    <a href="#">
                                        <img class="w-6 object-cover" src="{{ Vite::asset('resources/images/review/instagram.svg') }}" alt="reviewer tiktok">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>  
            </div>
        </div>
    </section>

    <div class="h-[600px] bg-zinc-800">

    </div>

</x-page-layout>    