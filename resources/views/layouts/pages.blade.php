<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Under construction / E-commerce Website</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
        <style>
            .circles::before {
                content: '';
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background: #FEE715;
                clip-path: circle(75% at 0% -50%);
            }

            .circles::after {
                content: '';
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background: #101820;
                clip-path: circle(25% at 100% 100%);
            }

            .images {
                border-radius: 100%;
            }

            .shadow-custom {
                box-shadow: inset 5px 5px 5px rgba(0, 0, 0, 0.3),
                            inset -5px -5px 15px rgba(255, 255, 255, 0.1),
                            5px 5px 15px rgba(0, 0, 0, 0.3),
                            -5px -5px 15px rgba(255, 255, 255, 0.1);
            }

            .shadow-custom-2 {
                box-shadow: 0 20px 50px rgba(0, 0, 0, 0.5)
            }

            .shadow-custom-2:hover {
                box-shadow: 0 40px 70px rgba(0, 0, 0, 0.5)
            }

            .shadow-custom-2:before {
                content: '';
                position: absolute;
                top: 0;
                left: 0;
                width: 50%;
                height: 100%;
                background: rgba(255, 255, 255, 0.05);
                pointer-events: none;
            }
            .mySwiper {
                width: 100%;
                height: 600px;
            }

            .swiper .swiper-slide {
                filter: blur(8px);
                background: black;
            }

            .swiper .swiper-slide-active {
                filter: blur(0px);
            }

            .layer {
                position: absolute;
                top: calc(100% - 2px);
                left: 0;
                width: 100%;
                height: 100%;
                background: linear-gradient(#FEE715, #101820);
                z-index: 1;
                transition: 1s;
            }

            .swiper-container .swiper-slide {
                -webkit-box-reflect: below 4px -webkit-linear-gradient(transparent 90%, #0009);
            }

            .swiper-container .swiper-slide:hover .layer {
                top: 0;
            }

            .label-acc:after {
                content: '+';
                position: absolute;
                right: 20px;
                top: 0;
                font-size: 2em;
                color: rgba(0, 0, 0, 0.1);
                transition: transform 1s;
            }

            .tab-acc:hover .label-acc:after{
                color: #333;
            }

            .tab-acc input:checked ~ .label-acc:after {
                transform: rotate(135deg);
            }

            .content-acc {
                transition: 1s;
            }

            .tab-acc input:checked ~ .content-acc {
                max-height: 100vh;
            }
            .privacy h2 {
                font-weight: 700;
                margin: 10px 0;
                font-size: 20px;
            }

            .privacy p {
                margin: 15px 0;
                font-weight: 400;
            }
        </style>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased">
        <nav class="bg-[#101820] flex justify-around items-center text-gray-200 py-3">
            <div>
                <h1 class="text-[#FEE715]">Logo Here...</h1>
            </div>
            <ul class="flex items-center space-x-20">
                <li>
                    <a href="#" class="duration-300 hover:text-[#FEE715]">
                        Category 1
                    </a>
                </li>
                <li>
                    <a href="#" class="duration-300 hover:text-[#FEE715]">
                        Category 2
                    </a>
                </li>
                <li>
                    <a href="#" class="duration-300 hover:text-[#FEE715]">
                        Category 3
                    </a>
                </li>
            </ul>
            <div class="flex items-center space-x-5">
                <img class="w-5 cursor-pointer" src="{{ Vite::asset('resources/images/nav/search.svg') }}" alt="Search Icon">

                <a href="#" class="bg-[#FEE715] w-10 h-10 flex justify-center items-center images relative">
                    <img class="w-5" src="{{ Vite::asset('resources/images/nav/shopping-cart.svg') }}" alt="Shopping Cart">

                    <div class="absolute top-0 -right-3 h-5 w-5 bg-[#FEE715] text-[#101820] images overflow-hidden flex justify-center items-center">
                        <p class="text-sm font-bold">0</p>
                    </div>
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
            <div class="w-5/6 mx-auto py-10 text-gray-100 grid grid-cols-3 gap-10">
                <div class="flex flex-col justify-between pb-5">
                    <h1 class="text-6xl text-[#FEE715]">
                        Logo Here
                    </h1>
                    <div class="w-3/5 flex justify-between pt-2">
                        <a href="#" class="grayscale duration-300 hover:grayscale-0">
                            <img class="w-6 object-cover" src="{{ Vite::asset('resources/images/review/tiktok.svg') }}" alt="reviewer tiktok">
                        </a>
                        <a href="#" class="grayscale duration-300 hover:grayscale-0">
                            <img class="w-6 object-cover" src="{{ Vite::asset('resources/images/review/twitter.svg') }}" alt="reviewer tiktok">
                        </a>
                        <a href="#" class="grayscale duration-300 hover:grayscale-0">
                            <img class="w-6 object-cover" src="{{ Vite::asset('resources/images/review/instagram.svg') }}" alt="reviewer tiktok">
                        </a>
                        <a href="#" class="grayscale duration-300 hover:grayscale-0">
                            <img class="w-6 object-cover" src="{{ Vite::asset('resources/images/review/facebook.svg') }}" alt="reviewer tiktok">
                        </a>
                        <a href="#" class="grayscale duration-300 hover:grayscale-0">
                            <img class="w-6 object-cover" src="{{ Vite::asset('resources/images/review/whatsapp.svg') }}" alt="reviewer whatsapp">
                        </a>
                    </div>
                </div>
                
                <div class="uppercase">
                    <h1 class="text-2xl font-semibold text-center text-[#FEE715]">
                        Quick Links
                    </h1>
                    <ul class="text-center space-y-4 py-4">
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
                                Categories
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
                    <h1 class="text-2xl font-semibold uppercase text-[#FEE715]">
                        Contact Info
                    </h1>
                    <ul class="space-y-6 pt-5">
                        <li class="flex gap-5">
                            <div class="w-1/5 flex justify-center">
                                <img class="w-20" src="{{ Vite::asset('resources/images/contact-us/address.svg') }}" alt="Logo location">
                            </div>
                            <div class="w-4/5">
                                No. 9 UpperNorth Street, <br> Off Breakfast Road, <br> Tokyo.
                            </div>
                        </li>
                        <li class="flex gap-5">
                            <div class="w-1/5 flex justify-center">
                                <img class="w-10 object-cover" src="{{ Vite::asset('resources/images/contact-us/email.svg') }}" alt="Logo location">
                            </div>
                            <div class="w-4/5 flex items-center">
                                <a href="#" class="underline">hello@logo.com</a>
                            </div>
                        </li>
                        <li class="flex gap-5">
                            <div class="w-1/5 flex justify-center">
                                <img class="w-10 object-cover" src="{{ Vite::asset('resources/images/contact-us/phone.svg') }}" alt="Logo location">
                            </div>
                            <div class="w-4/5 flex items-center">
                                <a href="#" class="underline">+234 8083 336 9493</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </footer>

        <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
        <script>
            var $typed_strings = document.getElementById('typed-strings');
            var $typed_strings2 = document.getElementById('typed-strings2');

            if($typed_strings || $typed_strings2)
            {
                var typed = new Typed('#typed-strings', {
                    strings: ['My Gee!!!'],
                    typeSpeed: 150,
                    showCursor: false,
                    loop: true,
                    backDelay: 14000,
                });

                var typed = new Typed('#typed-strings2', {
                    strings: [
                        'You dey find the best shopping plug' + String.fromCodePoint(0x1F601) + '?',
                        'Na here we dey' + String.fromCodePoint(0x1F60E) + '.'
                        ],
                    typeSpeed: 80,
                    startDelay: 3000,
                    loop: true,
                    backDelay: 3000,
                    backspeed: 5000,
                    showCursor: false,
                });
            }

            const swiper = new Swiper('.mySwiper', {
                direction: 'horizontal',
                loop: true, 
                slidesPerView: 2,
                spaceBetween: 50, 
                centeredSlides: true,

                autoplay: {
                    delay: 5000,
                    disableOnInteraction: false,
                },

                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                    dynamicBullets: true,
                },
            });

            const swiper2 = new Swiper('.swiper-container', {
                effect: 'coverflow',
                grabCursor: true,
                centeredSlides: true,
                slidesPerView: 3,
                coverflowEffect: {
                    rotate: 0,
                    stetch: 0,
                    depth: 0,
                    modifier: 1,
                    slideshadows: true,
                },

                loop: true,

                autoplay: {
                    delay: 5000,
                    disableOnInteraction: false,
                },
            });
        </script>
    </body>
</html>
