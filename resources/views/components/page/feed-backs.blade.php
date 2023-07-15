<section class="bg-[#101820]">
        <div>
            <div class="py-10 pb-32 w-full md:w-5/6 mx-auto ">
                <h1 class="text-center text-2xl md:text-4xl uppercase font-semibold text-[#FEE715]">
                    Wetin dem dey yarn about us?
                </h1>

                <div class="pt-10 swiper-container overflow-hidden">
                    <div class="flex justify-between space-x-5 md:space-x-10 swiper-wrapper">
                        @foreach($reviews as $review)
                        <div class="bg-gray-800 h-[500px] w-[300px] md:w-[300px] py-8 px-5 swiper-slide group">
                            <div class="layer"></div>
                            <div class="relative z-30">
                                <p class="text-center text-gray-300 group-hover:text-gray-900 font-semibold duration-1000">{{ $review->comment }}</P>
                                <div class="pt-10 pb-5 flex justify-center">
                                    <img class="border-2 border-gray-200 w-32 h-32 rounded-full object-cover" src="{{ Vite::asset('resources/images/review/human-1.jpg') }}" alt="Human 1" loading="lazy">
                                </div>
                                <h1 class="text-gray-200 font-bold uppercase text-center">{{ $review->name }}</h1>
                                <div class="w-5/6 mx-auto flex justify-around pt-3 grayscale group-hover:grayscale-0">
                                    <a href="#">
                                        <img class="w-6 h-6 object-cover" src="{{ Vite::asset('resources/images/review/tiktok.svg') }}" alt="reviewer tiktok"  loading="lazy">
                                    </a>
                                    <a href="#">
                                        <img class="w-6 h-6 object-cover" src="{{ Vite::asset('resources/images/review/twitter.svg') }}" alt="reviewer tiktok"  loading="lazy">
                                    </a>
                                    <a href="#">
                                        <img class="w-6 h-6 object-cover" src="{{ Vite::asset('resources/images/review/instagram.svg') }}" alt="reviewer tiktok"  loading="lazy">
                                    </a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>  
            </div>
        </div>
    </section>