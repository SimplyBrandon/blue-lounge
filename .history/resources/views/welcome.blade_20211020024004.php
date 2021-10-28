<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Blue Lounge - Redcar - Bar & Club</title>

        <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}"/>

    </head>
    <body class="antialiased" style="font-family: 'Roboto', sans-serif;">
        <header class="bg-white absolute w-full flex items-center justify-between py-10 px-96">
            <div class="flex items-center">
                <h2 class="mr-5">Blue</h2>
                <h2>Lounge</h2>
            </div>
        </header>
        <div class="flex flex-col px-96 py-48 h-screen justify-end" style="background-image: url('{{ asset('img/website_bg.png') }}'); background-size: cover;">
            <h2 style="font-family: 'Quicksand', sans-serif;" class="text-white font-semibold text-3xl mb-5">Renowned locally for its friendly staff & environment and the resident DJ, &lt;insert name&gt;.</h2>
            <h2 style="font-family: 'Quicksand', sans-serif;" class="text-white font-semibold text-3xl">Blue Lounge provides a unique environment and large selections of alcohol.</h2>
        </div>


        <script src="https://kit.fontawesome.com/69ebd03f48.js" crossorigin="anonymous"></script>
    </body>
</html>
