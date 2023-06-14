<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Under construction / E-commerce Website</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        
        <style>
            .imgbox{
                transform: rotateY(180deg);
                animation: animateUser 4s linear infinite;
            }

            @keyframes animateUser{
                50%{
                    right: 30px;
                    top: -90px;
                }
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
    </body>
</html>
