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
        <script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/collapse@3.x.x/dist/cdn.min.js"></script>
        
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased"
        x-data="{navbarOpen: false, scrollFromTop : false}"
        x-init="window.pageYOffset > 112 ? scrollFromTop = true : scrollFromTop = false"
        @scroll.window="window.pageYOffset > 112 ? scrollFromTop = true : scrollFromTop = false"
        :class="{'overflow-hidden':navbarOpen, 'overflow-auto': !navbarOpen}"
    >
        <nav class="bg-[#101820] text-gray-200 py-3 w-full transtion duration-200 z-50" :class="{'fixed shadow-xl': scrollFromTop,}">
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
                <div x-data="{ linkHover: false, linkActive: false }">
                    <div 
                        @mouseover = "linkHover = true"
                        @mouseleave = "linkHover = false"
                        @click = "linkActive = !linkActive"                         
                        class="block duration-100 hover:text-[#FEE715] hover:font-semibold"
                    >
                        <div class="flex justify-center items-center py-5">
                            <span>Shop</span> 
                            <svg class="svg-icon" style="width: 2em; height: 2em;vertical-align: middle;fill: currentColor;overflow: hidden;" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg"><path d="M680.1408 414.976c9.9328-8.704 24.2176-6.656 31.8976 4.608a27.8016 27.8016 0 0 1-4.096 35.84l-172.032 149.76a35.6352 35.6352 0 0 1-47.8208 0l-172.032-149.7088a27.8016 27.8016 0 0 1-4.096-35.9424c7.68-11.1616 22.016-13.2096 31.8976-4.608L512 561.3056l168.1408-146.2784z"  /></svg>                      
                        </div>
                    </div>
                    <ul
                        x-show="linkActive"
                        x-cloak
                        x-transition
                        x-collapse.duration.300ms
                        class="space-y-5 transition duration-300 text-center"
                    >
                        @forelse($categories as $category)
                            <li>
                                <a href="{{ route('shop', $category->slug) }}" class="block duration-100 hover:text-[#FEE715] hover:font-semibold text-lg tracking-wide py-4 mt-5">
                                    <span class="text-[#FEE715] font-bold">-</span> {{ $category->name }}
                                </a>
                            </li>
                        @empty
                            <p>No Categories yet</p>
                        @endforelse
                    </ul>
                </div>
            </li>
        </ul>
        <div class="py-2 w-5/6 mx-auto">
            <marquee class="text-center font-semibold">Important Announcement, all products will have a discount of <span class="font-bold">30%</span>, valid till 30th August.</marquee>
        </div>
        <!-- End Mobile -->
        
        <x-preloader />

        <main>
            {{ $slot }}
        </main>

        <footer class="bg-black h-full overflow-hidden">
            <div class="w-11/12 md:w-5/6 mx-auto py-10 text-gray-100 md:grid grid-cols-2 md:gap-5 space-y-16 md:space-y-0">
                <div class="flex flex-col justify-between pb-5 space-y-5 md:space-y-0" data-aos="fade-up" data-aos-duration="1500">
                    <h1 class="footer_header relative text-2xl md:text-4xl text-gray-200text-center md:text-left">
                        Logo Here
                    </h1>
                    <div class="w-3/5 mx-auto md:mx-0 pt-10 h-full">
                        <ul class="flex justify-between pt-2 w-full">
                            <li>
                                <a href="#" class="grayscale duration-300 hover:grayscale-0 inline-block">
                                    <img class="w-6 h-6 object-cover" src="{{ Vite::asset('resources/images/review/tiktok.svg') }}" alt="reviewer tiktok">
                                </a>
                            </li>
                            <li>
                                <a href="#" class="grayscale duration-300 hover:grayscale-0 inline-block">
                                    <img class="w-6 h-6 object-cover" src="{{ Vite::asset('resources/images/review/twitter.svg') }}" alt="reviewer tiktok">
                                </a>
                            </li>
                            <li>
                                <a href="#" class="grayscale duration-300 hover:grayscale-0 inline-block">
                                    <img class="w-6 h-6 object-cover" src="{{ Vite::asset('resources/images/review/instagram.svg') }}" alt="reviewer tiktok">
                                </a>
                            </li>
                            <li>
                                <a href="#" class="grayscale duration-300 hover:grayscale-0 inline-block">
                                    <img class="w-6 h-6 object-cover" src="{{ Vite::asset('resources/images/review/facebook.svg') }}" alt="reviewer tiktok">
                                </a>
                            </li>
                            <li>
                                <a href="#" class="grayscale duration-300 hover:grayscale-0 inline-block">
                                    <img class="w-6 h-6 object-cover" src="{{ Vite::asset('resources/images/review/whatsapp.svg') }}" alt="reviewer tiktok">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                
                <div class="flex justify-between">
                    <div class="uppercase" data-aos="fade-up" data-aos-duration="1500">
                        <h1 class="text-lg md:text-xl font-semibold text-center text-[#FEE715]">
                            Quick Links
                        </h1>
                        <ul class="text-center space-y-4 py-4 text-xs md:text-sm">
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
                                <div x-data="{ linkHover: false, linkActive: false }">
                                    <div 
                                        @mouseover = "linkHover = true"
                                        @mouseleave = "linkHover = false"
                                        @click = "linkActive = !linkActive"                         
                                        class="block duration-100 hover:text-[#FEE715] hover:font-semibold"
                                    >
                                        <div class="flex justify-center items-center">
                                            <span>shop</span> 
                                            <svg class="svg-icon" style="width: 2em; height: 2em;vertical-align: middle;fill: currentColor;overflow: hidden;" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg"><path d="M680.1408 414.976c9.9328-8.704 24.2176-6.656 31.8976 4.608a27.8016 27.8016 0 0 1-4.096 35.84l-172.032 149.76a35.6352 35.6352 0 0 1-47.8208 0l-172.032-149.7088a27.8016 27.8016 0 0 1-4.096-35.9424c7.68-11.1616 22.016-13.2096 31.8976-4.608L512 561.3056l168.1408-146.2784z"  /></svg>                      
                                        </div>
                                    </div>
                                    <ul
                                        x-show="linkActive"
                                        x-cloak
                                        x-collapse.duration.300ms
                                        class="space-y-5"
                                    >
                                        @forelse($categories as $category)
                                            <li>
                                                <a href="{{ route('shop', $category->slug) }}" class="block duration-100 hover:text-[#FEE715] hover:font-semibold text-sm tracking-wide mt-5">
                                                    <span class="text-[#FEE715] font-bold">-</span> {{ $category->name }}
                                                </a>
                                            </li>
                                        @empty
                                            <p>No Categories yet</p>
                                        @endforelse
                                    </ul>
                                </div>
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

                    <div data-aos="fade-up" data-aos-duration="1500">
                        <h1 class="text-lg md:text-xl font-semibold uppercase text-[#FEE715] text-center md:text-left">
                            Contact Info
                        </h1>
                        <ul class="space-y-6 pt-5 text-xs md:text-sm">
                            <li class="flex justify-between gap-2 md:gap-5">
                                <div class="flex justify-center">
                                    <img class="w-5 h-5 object-cover" src="{{ Vite::asset('resources/images/contact-us/address.svg') }}" alt="Logo location">
                                </div>
                                <div class="w-full ">
                                    No. 9 UpperNorth Street, <br> Off Breakfast Road, <br> Tokyo.
                                </div>
                            </li>
                            <li class="flex gap-5">
                                <div class="flex justify-center">
                                    <img class="w-5 h-5 object-cover" src="{{ Vite::asset('resources/images/contact-us/email.svg') }}" alt="Logo location">
                                </div>
                                <div class="flex items-center">
                                    <a href="#" class="underline">hello@logo.com</a>
                                </div>
                            </li>
                            <li class="flex gap-5">
                                <div class="flex justify-center">
                                    <img class="w-5 h-5 object-cover" src="{{ Vite::asset('resources/images/contact-us/phone.svg') }}" alt="Logo location">
                                </div>
                                <div class="flex items-center">
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

            var loader = document.getElementById("preloader");

            window.addEventListener("load", function(){
                loader.style.display = "none";
                // setTimeout(() => {
                //     loader.style.display = "none";
                // }, 1000);
            })
        </script>
        <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
        @livewireScripts
    </body>
</html>
