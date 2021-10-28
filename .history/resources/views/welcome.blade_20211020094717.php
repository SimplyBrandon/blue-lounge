<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Blue Lounge - Redcar - Cocktail Bar</title>

        <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}"/>

    </head>
    <body class="antialiased" style="font-family: 'Roboto', sans-serif;">
        <header class="absolute w-full flex items-center justify-between py-16 px-96">
            <div class="flex items-center" style="font-family: 'Righteous', cursive">
                <h2 class="mr-2 text-4xl tracking-wider text-blue-400 font-light">blue</h2>
                <h2 class="text-3xl tracking-wider text-white font-light">LOUNGE</h2>
            </div>
            <nav class="flex items-center">
                <a class="text-lg uppercase text-gray-300 mr-14 shadow-md tracking-wider" href="#">About</a>
                <a class="text-lg uppercase  text-gray-300 mr-14 shadow-md tracking-wider" href="#">Gallery</a>
                <a class="text-lg uppercase  text-gray-300 mr-14 shadow-md tracking-wider" href="#">Get In Touch</a>
                <a class="px-5 py-3 text-lg uppercase  text-black bg-white font-bold shadow-md rounded-md" href="#">Book An Event</a>
            </nav>
        </header>
        <div class="flex flex-col items-center px-96 pt-80 h-screen" style="background-image: url('{{ asset('img/website_bg.png') }}'); background-size: cover;">
            <div class="flex items-center text-white text-6xl mb-24">
                <img style="height: 90px" class="mr-12" src="{{ asset('img/star.png') }}"/>
                <img style="height: 90px" class="mr-12" src="{{ asset('img/star.png') }}"/>
                <img style="height: 90px" class="mr-12" src="{{ asset('img/star.png') }}"/>
                <img style="height: 90px" class="mr-12" src="{{ asset('img/star.png') }}"/>
                <img style="height: 90px" class="mr-12" src="{{ asset('img/half-star.png') }}"/>
            </div>
            <h2 style="font-family: 'Bebas Neue', sans-serif" class="text-6xl text-white tracking-wider mb-8">A unique cocktail bar providing a lovely and cultivated environment.</h2>
            <h2 style="font-family: 'Bebas Neue', sans-serif" class="text-5xl text-white tracking-wider">Renowned for our friendly staff, resident DJ and varied drink selection</h2>

            <h2 class="mt-auto pb-16 text-3xl font-light text-white"><i class="fa fa-pin"></i> 96 High Street, TS10 3DL, Redcar</h2>
        </div>
        <script src="https://kit.fontawesome.com/69ebd03f48.js" crossorigin="anonymous"></script>
    </body>
</html>
