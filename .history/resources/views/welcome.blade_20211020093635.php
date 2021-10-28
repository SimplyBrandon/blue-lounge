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
        <div class="flex flex-col items-center justify-center px-96 py-36 h-screen" style="background-image: url('{{ asset('img/website_bg.png') }}'); background-size: cover;">
            <h2 style="font-family: 'Bebas Neue', sans-serif" class="text-7xl text-white">A unique cocktail bar providing a lovely and cultivated environment.</h2>
        </div>
        <script src="https://kit.fontawesome.com/69ebd03f48.js" crossorigin="anonymous"></script>
    </body>
</html>
