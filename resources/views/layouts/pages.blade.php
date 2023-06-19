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
        </style>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased">
        <nav class="bg-[#101820] flex justify-around items-center text-gray-200 py-3">
            <div>
                <h1>Logo Here...</h1>
            </div>
            <ul class="flex items-center space-x-20">
                <li>
                    <a href="#">
                        Category 1
                    </a>
                </li>
                <li>
                    <a href="#">
                        Category 2
                    </a>
                </li>
                <li>
                    <a href="#">
                        Category 3
                    </a>
                </li>
            </ul>
            <div class="flex items-center space-x-5">
                <img src="https://icons8.com/icon/7695/search" alt="Search Icon">

                <div>
                    <h1>Cart (0)</h1>
                </div>
            </div>
        </nav>
        <div class="py-2">
            <p class="text-center font-semibold">Important Announcement, all products will have a discount of <span class="font-bold">30%</span>, valid till 30th August.</p>
        </div>
        <main>
            {{ $slot }}
        </main>

        <footer class="bg-black">
            <div class="w-5/6 mx-auto py-10 text-gray-100 flex justify-between">
                <div>
                    <h1 class="text-6xl">
                        Logo Here
                    </h1>
                </div>
                
                <div class="uppercase">
                    <h1 class="text-2xl">
                        Quick Links
                    </h1>
                    <ul class="text-center space-y-4 py-4">
                        <li>
                            <a href="#">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                About us
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Categories
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                FAQ
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Privacy Policy
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="uppercase">
                    <h1 class="text-2xl">
                        Contact Info
                    </h1>
                    <ul>
                        <li>
                            <a href="#">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                About us
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </footer>

        <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
        <script>
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
