<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="A simple shopping website">

        <title>Under construction / E-commerce Website</title>
        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>

        <!-- Styles -->
        @livewireStyles
        
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased">
        <nav class="bg-[#101820] flex justify-around items-center text-gray-200 py-3">
            <div>
                <h1 class="text-[#FEE715]">{{ $setting->site_name }} Here...</h1>
            </div>
            <ul class="md:flex items-center space-x-20 hidden">
                @forelse($categories as $category)
                    <li>
                        <a href="{{ route('shop', $category->slug) }}" class="duration-300 hover:text-[#FEE715]">
                            {{ $category->name }}
                        </a>
                    </li>
                @empty
                    <p>No Categories yet</p>
                @endforelse
            </ul>
            <div class="flex items-center space-x-5">
                <img class="w-5 h-5 cursor-pointer" src="{{ Vite::asset('resources/images/nav/search.svg') }}" alt="Search Icon">

                <a href="#" class="bg-[#FEE715] w-10 h-10 flex justify-center items-center images relative">
                    <img class="w-5 h-5" src="{{ Vite::asset('resources/images/nav/shopping-cart.svg') }}" alt="Shopping Cart">

                    <livewire:website.cart.cart-counter />
                </a>
            </div>
        </nav>
        <div class="py-2 w-5/6 mx-auto">
            <marquee class="text-center font-semibold">Important Announcement, all products will have a discount of <span class="font-bold">30%</span>, valid till 30th August.</marquee>
        </div>

        <main>
            {{ $slot }}
        </main>

        <footer class="bg-black">
            <div class="w-11/12 md:w-5/6 mx-auto py-10 text-gray-100 md:grid grid-cols-2 md:gap-5 space-y-16 md:space-y-0">
                <div class="flex flex-col justify-between pb-5 space-y-5 md:space-y-0">
                    <h1 class="text-4xl md:text-6xl text-[#FEE715] text-center md:text-left">
                        Logo Here
                    </h1>
                    <div class="w-3/5 mx-auto md:mx-0 flex justify-between pt-2">
                        <a href="#" class="grayscale duration-300 hover:grayscale-0">
                            <img class="w-6 h-6 object-cover" src="{{ Vite::asset('resources/images/review/tiktok.svg') }}" alt="reviewer tiktok">
                        </a>
                        <a href="#" class="grayscale duration-300 hover:grayscale-0">
                            <img class="w-6 h-6 object-cover" src="{{ Vite::asset('resources/images/review/twitter.svg') }}" alt="reviewer tiktok">
                        </a>
                        <a href="#" class="grayscale duration-300 hover:grayscale-0">
                            <img class="w-6 h-6 object-cover" src="{{ Vite::asset('resources/images/review/instagram.svg') }}" alt="reviewer tiktok">
                        </a>
                        <a href="#" class="grayscale duration-300 hover:grayscale-0">
                            <img class="w-6 h-6 object-cover" src="{{ Vite::asset('resources/images/review/facebook.svg') }}" alt="reviewer tiktok">
                        </a>
                        <a href="#" class="grayscale duration-300 hover:grayscale-0">
                            <img class="w-6 h-6 object-cover" src="{{ Vite::asset('resources/images/review/whatsapp.svg') }}" alt="reviewer whatsapp">
                        </a>
                    </div>
                </div>
                
                <div class="flex justify-between">
                    <div class="uppercase">
                        <h1 class="text-lg md:text-2xl font-semibold text-center text-[#FEE715]">
                            Quick Links
                        </h1>
                        <ul class="text-center space-y-4 py-4 text-sm md:text-base">
                            <li>
                                <a href="{{ route('home') }}" class="block duration-100 hover:text-[#FEE715] hover:font-semibold">
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('about.us') }}" class="block duration-100 hover:text-[#FEE715] hover:font-semibold">
                                    About us
                                </a>
                            </li>
                            <li>
                                <a href="#" class="block duration-100 hover:text-[#FEE715] hover:font-semibold">
                                    Shop
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('about.us') . '#faq' }}" class="block duration-100 hover:text-[#FEE715] hover:font-semibold">
                                    FAQ
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('privacy.policy') }}" class="block duration-100 hover:text-[#FEE715] hover:font-semibold">
                                    Privacy Policy
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div>
                        <h1 class="text-lg md:text-2xl font-semibold uppercase text-[#FEE715] text-center md:text-left">
                            Contact Info
                        </h1>
                        <ul class="space-y-6 pt-5 text-sm md:text-base">
                            <li class="flex justify-between gap-2 md:gap-5">
                                <div class="md:w-1/5 flex justify-center">
                                    <img class="w-10 h-10 md:w-20 object-cover" src="{{ Vite::asset('resources/images/contact-us/address.svg') }}" alt="Logo location">
                                </div>
                                <div class="w-full md:w-4/5">
                                    No. 9 UpperNorth Street, <br> Off Breakfast Road, <br> Tokyo.
                                </div>
                            </li>
                            <li class="flex gap-5">
                                <div class="md:w-1/5 flex justify-center">
                                    <img class="w-10 h-10 md:w-20 object-cover" src="{{ Vite::asset('resources/images/contact-us/email.svg') }}" alt="Logo location">
                                </div>
                                <div class="w-4/5 flex items-center">
                                    <a href="#" class="underline">hello@logo.com</a>
                                </div>
                            </li>
                            <li class="flex gap-5">
                                <div class="md:w-1/5 flex justify-center">
                                    <img class="w-10 h-10 md:w-20 object-cover" src="{{ Vite::asset('resources/images/contact-us/phone.svg') }}" alt="Logo location">
                                </div>
                                <div class="w-4/5 flex items-center">
                                    <a href="#" class="underline">{{ $setting->site_phone }}</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>

        <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
        @livewireScripts
    </body>
</html>
