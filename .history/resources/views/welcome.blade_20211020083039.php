<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Blue Lounge - Redcar - Bar & Club</title>

        <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}"/>

    </head>
    <body class="antialiased" style="font-family: 'Roboto', sans-serif;">
        <header class="absolute w-full flex items-center justify-between py-10 px-96">
            <div class="flex items-center" style="font-family: 'Bebas Neue', cursive">
                <h2 class="mr-2 text-4xl tracking-wider text-blue-400 uppercase font-semibold">Blue</h2>
                <h2 class="text-4xl tracking-wider text-white uppercase font-semibold">Lounge</h2>
            </div>

            <nav class="flex items-center">
                <a class="text-lg uppercase text-gray-300 mr-14" href="#">About</a>
                <a class="text-lg uppercase  text-gray-300 mr-14" href="#">Gallery</a>
                <a class="text-lg uppercase  text-gray-300 mr-14" href="#">Events</a>
                <a class="px-5 py-3 text-lg uppercase  text-black bg-white font-bold shadow-md rounded-md" href="#">Get In Touch</a>
            </nav>
        </header>
        <div class="flex flex-col px-96 py-48 h-screen" style="background-image: url('{{ asset('img/website_bg.png') }}'); background-size: cover;">
            <h2 class="text-white text-3xl text-center font-bold uppercase tracking-wide">Welcome to Blue Lounge</h2>
            <p class="text-center text-xl">Opened in 2001, Blue Lounge has been cultivated to fulfill a niche that is often disregarded by other bars.</p>
        </div>
        <script src="https://kit.fontawesome.com/69ebd03f48.js" crossorigin="anonymous"></script>
    </body>
</html>
