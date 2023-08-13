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
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <style>
            [x-cloak] { 
                display: none !important; 
            }
        </style>

        <!-- Styles -->
        @livewireStyles
        
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased"
        x-data="{navbarOpen: false, scrollFromTop : false}"
        x-init="window.pageYOffset > 112 ? scrollFromTop = true : scrollFromTop = false"
        @scroll.window="window.pageYOffset > 112 ? scrollFromTop = true : scrollFromTop = false"
        :class="{'overflow-hidden':navbarOpen, 'overflow-auto': !navbarOpen}"
    >
        <nav class="bg-[#101820] text-gray-200 py-3 w-full transtion duration-200" :class="{'fixed z-50 shadow-xl': scrollFromTop,}">
            <div class="w-11/12 md:w-5/6 flex justify-between items-center mx-auto">
                <div>
                    <h1 class="hidden md:block text-[#FEE715]">{{ $setting->site_name }} Here...</h1>
                    <div class="flex items-center">
                            <button 
                                @click="navbarOpen = true" 
                                x-show="!navbarOpen"
                                x-transition
                                x-cloak
                                class="text-[#FEE715] hover:text-primary focus:outline-none md:hidden transition duration-200"
                            >
                            <svg class="w-6 h-6" fill="#FEE715" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7"></path></svg>
                            </button>
                            <button 
                                @click="navbarOpen = false" 
                                x-show="navbarOpen"
                                x-transition
                                x-cloak
                                class="text-[#FEE715] hover:text-primary focus:outline-none md:hidden transition duration-200"
                            > 
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="#FEE715" stroke="currentColor"  viewBox="0 0 50 50">
                                    <path d="M 7.71875 6.28125 L 6.28125 7.71875 L 23.5625 25 L 6.28125 42.28125 L 7.71875 43.71875 L 25 26.4375 L 42.28125 43.71875 L 43.71875 42.28125 L 26.4375 25 L 43.71875 7.71875 L 42.28125 6.28125 L 25 23.5625 Z"></path>
                                </svg>
                            </button>
                        </div>
                </div>
                <ul class="md:flex items-center space-x-20 hidden">
                    @forelse($categories as $category)
                        <li>
                            <a href="{{ route('shop', $category->slug) }}" class="duration-300 hover:text-[#FEE715] active:text-[#FEE715]">
                                {{ $category->name }}
                            </a>
                        </li>
                    @empty
                        <p>No Categories yet</p>
                    @endforelse
                </ul>
                <div class="flex items-center space-x-5">
                    <img class="w-5 h-5 cursor-pointer" src="{{ Vite::asset('resources/images/nav/search.svg') }}" alt="Search Icon">

                    <a href="{{ route('cart') }}" class="bg-[#FEE715] w-10 h-10 flex justify-center items-center images relative">
                        <img class="w-5 h-5" src="{{ Vite::asset('resources/images/nav/shopping-cart.svg') }}" alt="Shopping Cart">

                        <livewire:website.cart.cart-counter />
                    </a>
                </div>
            </div>
        </nav>

        <!-- Mobile -->
        <ul class="fixed inset-x-0 min-h-screen bg-black opacity-80 z-50 text-xl font-semibold text-gray-200 transform translate-x-full transition duration-300"
            :class="{'translate-x-full' : !navbarOpen, 'translate-x-0': navbarOpen}"
        >
            <li>
                <a href="{{ route('home') }}" class="block active:text-[#FEE715] py-5 text-center">Home</a>
            </li>
            <li>
                <a href="{{ route('about.us') }}" class="block active:text-[#FEE715] py-5 text-center">About Us</a>
            </li>
            <li>
                <a href="#" class="block active:text-[#FEE715] py-5 text-center">Shop</a>
            </li>
        </ul>
        <div class="py-2 w-5/6 mx-auto">
            <marquee class="text-center font-semibold">Important Announcement, all products will have a discount of <span class="font-bold">30%</span>, valid till 30th August.</marquee>
        </div>
        <!-- End Mobile -->

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
        
        
        <script>
            AOS.init({
                once: true,
            });
        </script>
        <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
        @livewireScripts
    </body>
</html>
