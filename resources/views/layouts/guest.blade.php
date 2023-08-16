<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <!-- <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" /> -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
        
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <style>
            .login-div-login {
                background: rgba(255, 255, 255, 0.25) ;
                backdrop-filter: blur(15px) !important;
                border-bottom: 1px solid rgba(255, 255, 255, 0.5);
                border-right: 1px solid rgba(255, 255, 255, 0.5);
                border-radius: 20px;
                box-shadow: 0 25px 50px rgba(0, 0, 0, 0.1);
                border: 1px solid #fff;
            }
        </style>
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-login bg-cover">
        <div class="absolute bg-[#101820] opacity-20 inset-x-0 inset-y-0"></div>
            <!-- <div>
                <a href="/">
                    <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                </a>
        </div> -->

            <div class="w-11/12 md:w-full mt-40 sm:max-w-md md:mt-6 px-6 py-4 login-div-login shadow-md overflow-hidden sm:rounded-lg relative z-50">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
