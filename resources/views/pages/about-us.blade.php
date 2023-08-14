<x-page-layout>
    <main class="overflow-hidden">
        <section class="bg-[#101820]">
            <div class="w-5/6 mx-auto pb-10">
                <h1 class="py-10 text-center text-2xl md:text-4xl font-bold uppercase text-[#FEE715]">Meet Our Oga</h1>
                <div data-aos="zoom-in" data-aos-delay="1000" data-aos-duration="3000">
                    <div class="mx-auto shadow-custom py-20 w-11/12 md:w-1/3 grayscale duration-300 hover:grayscale-0 cursor-pointer">
                        <div class="flex justify-center items-center">
                            <img class="w-56 h-56 rounded-full border-2 border-[#FEE715] object-cover" src="{{ Vite::asset('resources/images/review/human-3.jpg') }}" alt="An Image of a man.">
                        </div>
                        <div class="py-4">
                            <h1 class="text-center text-gray-200 text-xl md:text-2xl font-semibold">
                                Gerald Gius
                            </h1>
                            <span class="text-center text-lg md:text-xl text-gray-300 block font-semibold">(D General)</span>
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

        <section id="faq">
            <div class="w-11/12 md:w-3/5 mx-auto py-20">
                <h1 class="text-2xl md:text-4xl font-bold mb-10">Frequently asked questions?</h1>

                <div class="flex flex-col space-y-10">
                    <div class="p-4 shadow-lg rounded-md tab-acc relative" data-aos="fade-left" data-aos-duration="1500">
                        <input type="radio" id="acc1" name="acc" class="hidden">
                        <label for="acc1" class="label-acc">
                            <h1 class="text-xl md:text-2xl font-semibold text-[#101820]">Who are we?</h1>
                        </label>
                        <div class="text-gray-500 text-base md:text-lg content-acc max-h-0 overflow-hidden">
                            <p class="py-10">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sed ex quisquam, modi amet reiciendis ut molestias! Ipsam, fuga illo. Error quam saepe consectetur facere qui sapiente veritatis assumenda dolorem earum.</p>
                        </div>
                    </div>

                    <div class="p-4 shadow-lg rounded-md tab-acc relative" data-aos="fade-left" data-aos-duration="1500">
                        <input type="radio" id="acc2" name="acc" class="hidden">
                        <label for="acc2" class="label-acc">
                            <h1 class="text-xl md:text-2xl font-semibold text-[#101820]">How do we deliver?</h1>
                        </label>
                        <div class="text-gray-500 text-base md:text-lg content-acc max-h-0 overflow-hidden">
                            <p class="py-10">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sed ex quisquam, modi amet reiciendis ut molestias! Ipsam, fuga illo. Error quam saepe consectetur facere qui sapiente veritatis assumenda dolorem earum.</p>
                        </div>
                    </div>

                    <div class="p-4 shadow-lg rounded-md tab-acc relative" data-aos="fade-left" data-aos-duration="1500">
                        <input type="radio" id="acc3" name="acc" class="hidden">
                        <label for="acc3" class="label-acc">
                            <h1 class="text-xl md:text-2xl font-semibold text-[#101820]">When is the cookathon coming to pass?</h1>
                        </label>
                        <div class="text-gray-500 text-base md:text-lg content-acc max-h-0 overflow-hidden">
                            <p class="py-10">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sed ex quisquam, modi amet reiciendis ut molestias! Ipsam, fuga illo. Error quam saepe consectetur facere qui sapiente veritatis assumenda dolorem earum.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</x-page-layout>  