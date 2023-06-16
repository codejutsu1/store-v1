<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Under construction / E-commerce Website</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <style>
            .circles::before {
                content: '';
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background: yellow;
                clip-path: circle(70% at 0% -50%);
            }

            .circles::after {
                content: '';
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background: black;
                clip-path: circle(30% at 100% 100%);
            }
        </style>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased">
        <nav class="bg-zinc-800 flex justify-around items-center text-gray-200 py-3">
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

        <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>
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
        </script>
    </body>
</html>
