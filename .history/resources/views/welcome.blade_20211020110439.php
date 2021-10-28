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
        <div class="flex flex-col items-center px-96 pt-80 h-screen parallax-window" data-parallax="scroll" data-image-src="{{ asset('img/website_bg.png') }}" style="background-size: cover;" >
            <div class="flex items-center text-white text-6xl mb-24">
                <img style="height: 90px" class="mr-12" src="{{ asset('img/star.png') }}"/>
                <img style="height: 90px" class="mr-12" src="{{ asset('img/star.png') }}"/>
                <img style="height: 90px" class="mr-12" src="{{ asset('img/star.png') }}"/>
                <img style="height: 90px" class="mr-12" src="{{ asset('img/star.png') }}"/>
                <img style="height: 90px" class="mr-12" src="{{ asset('img/half-star.png') }}"/>
            </div>
            <h2 style="font-family: 'Bebas Neue', sans-serif" class="text-6xl text-white tracking-wider mb-8">A unique cocktail bar providing a lovely and cultivated environment</h2>
            <h2 style="font-family: 'Bebas Neue', sans-serif" class="text-5xl text-white tracking-wider">Renowned for our friendly staff, resident DJ and varied drink selection</h2>
            <h2 class="mt-16 text-xl font-light text-gray-300"><i class="fa fa-map-pin mr-5"></i> 96 High Street, TS10 3DL, Redcar</h2>
            <h2 class="mt-3 text-xl font-light text-gray-300"><i class="fa fa-phone mr-5"></i> 01642 756284</h2>
            <h2 class="mt-6 text-sm uppercase font-bold text-red-400">Currently Closed - Opens at 12PM</h2>
            

            <div class="flex flex-col items-center justify-center mt-auto pb-16">
                <div class="border-2 border-white rounded-full py-4 px-5">
                    <i class="fa fa-arrow-down text-4xl text-white"></i>
                </div>
            </div>
        </div>
        <div class="flex items-start bg-white py-24 px-96">
            <div class="flex flex-col items-center justify-center text-left">
                <h2 class="text-3xl font-semibold mb-8">WHO WE ARE</h2>
                <p class="text-2xl leading-10">Located in the heart of Redcar, by the sea, we provide an unbeatable choice for any night out. Since 2013 we've catered to customers through the serving of a plethora of libations and, so long as customers overwhelmingly remain satisfied, we'll keep on doing it! Blue lounge is the perfect place for unique and stunning cocktails in a beautiful setting with a speakeasy feel and live music from our resident DJ.</p>
            </div>
            <img class="w-1/2 rounded-3xl mb-10" src="{{ asset('img/banner.jpg') }}"/>

            
            {{-- We've <a class="font-bold" href="#">recently introduced optional drink lids and straws!</a> --}}
        </div>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script type="text/javascript" src="{{ asset('js/parallax.min.js') }}"></script>
        <script src="https://kit.fontawesome.com/69ebd03f48.js" crossorigin="anonymous"></script>
    </body>
</html>
