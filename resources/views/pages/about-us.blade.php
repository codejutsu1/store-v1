<x-page-layout>
    <section class="bg-[#101820]">
        <div class="w-5/6 mx-auto pb-10">
             <h1 class="py-10 text-center text-4xl font-bold uppercase text-[#FEE715]">Meet Our Oga</h1>
            <div>
                <div class="mx-auto shadow-custom py-20 w-1/3 grayscale duration-300 hover:grayscale-0 cursor-pointer">
                    <div class="flex justify-center items-center">
                        <img class="w-56 h-56 rounded-full border-2 border-[#FEE715] object-cover" src="{{ Vite::asset('resources/images/review/human-3.jpg') }}" alt="An Image of a man.">
                    </div>
                    <div class="py-4">
                        <h1 class="text-center text-gray-200 text-2xl font-semibold">
                            Gerald Gius
                        </h1>
                        <span class="text-center text-xl text-gray-300 block font-semibold">(D General)</span>
                        <div class="w-3/5 flex justify-between mx-auto pt-4">
                            <a href="#">
                                <img class="w-6 object-cover" src="{{ Vite::asset('resources/images/review/twitter.svg') }}" alt="reviewer tiktok">
                            </a>
                            <a href="#">
                                <img class="w-6 object-cover" src="{{ Vite::asset('resources/images/review/instagram.svg') }}" alt="reviewer tiktok">
                            </a>
                            <a href="#">
                                <img class="w-6 object-cover" src="{{ Vite::asset('resources/images/review/facebook.svg') }}" alt="reviewer tiktok">
                            </a>
                            <a href="#">
                                <img class="w-6 object-cover" src="{{ Vite::asset('resources/images/review/whatsapp.svg') }}" alt="reviewer whatsapp">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <x-feed-slider />

    <x-feed-backs />

    <section>
        <div>
            <h1 class="text-center">FAQ</h1>
        </div>
    </section>
</x-page-layout>  