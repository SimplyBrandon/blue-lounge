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
        </header>
        <div class="flex flex-col px-96 py-48 h-screen justify-end" style="background-image: url('{{ asset('img/website_bg.png') }}'); background-size: cover;">
        </div>
        <script src="https://kit.fontawesome.com/69ebd03f48.js" crossorigin="anonymous"></script>
    </body>
</html>
