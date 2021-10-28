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
        <div class="flex items-start justify-between px-96 py-48 h-screen" style="background-image: url('{{ asset('img/website_bg.png') }}'); background-size: cover;">
            <div class="flex items-center">
                <div class="flex flex-col">
                    <h2 class="text-white mb-5 text-3xl font-bold uppercase tracking-wide">Welcome to Blue Lounge</h2>
                    <p class="text-xl text-gray-300 mb-2">Since we opened in 2001 we've cultivated a unique and friendly environment with modern decor, a resident DJ and events.</p>
                    <p class="text-xl text-gray-300 mb-10">We pride ourselves in providing a safe space with a welcoming atmosphere for everyone to have fun!</p>
                </div>

                <div class="flex">
                    <a class="bg-white rounded-md shadow-md text-sm px-6 py-3 uppercase font-semibold mr-5" href="#">Check Out Our Gallery</a>
                    <a class="bg-white rounded-md shadow-md text-sm px-6 py-3 uppercase font-semibold" href="#">Get In Touch</a>
                </div>
            </div>
        </div>
        <script src="https://kit.fontawesome.com/69ebd03f48.js" crossorigin="anonymous"></script>
    </body>
</html>
