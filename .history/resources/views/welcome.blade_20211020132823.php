<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Blue Lounge - Redcar - Cocktail Bar</title>

        <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}"/>

    </head>
    <body class="antialiased" style="font-family: 'Roboto', sans-serif;">
        <div class="flex flex-col">
            <header class="absolute w-full flex items-center justify-between py-16 px-96">
                <div class="flex items-center" style="font-family: 'Righteous', cursive">
                    <h2 class="mr-2 text-4xl tracking-wider text-blue-400 font-light">blue</h2>
                    <h2 class="text-3xl tracking-wider text-white font-light">LOUNGE</h2>
                </div>
                <nav class="flex items-center">
                    <a class="text-lg uppercase text-gray-300 mr-14 shadow-md tracking-wider" href="#">About</a>
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
                <h2 style="font-family: 'Bebas Neue', sans-serif" class="text-6xl text-white tracking-wider text-center mb-8">A unique cocktail bar providing a lovely and cultivated environment</h2>
                <h2 style="font-family: 'Bebas Neue', sans-serif" class="text-5xl text-white tracking-wider text-center">Renowned for our friendly staff, resident DJ and varied drink selection</h2>
                <h2 class="mt-16 text-xl font-light text-gray-300"><i class="fa fa-map-pin mr-5"></i> 96 High Street, TS10 3DL, Redcar</h2>
                <h2 class="mt-3 text-xl font-light text-gray-300"><i class="fa fa-phone mr-5"></i> 01642 756284</h2>
                <h2 class="mt-6 text-sm uppercase font-bold text-red-400">Currently Closed - Opens at 12PM</h2>
                

                <div class="flex flex-col items-center justify-center mt-auto pb-16 object">
                    <div class="border-2 border-white rounded-full py-4 px-5">
                        <i class="fa fa-arrow-down text-4xl text-white"></i>
                    </div>
                </div>
            </div>
            <div class="flex flex-col bg-white py-24 px-96">
                <div class="flex items-start">
                    <div class="flex flex-col text-left mr-24">
                        <h2 class="text-3xl font-semibold mb-8">WHO WE ARE</h2>
                        <p class="text-2xl leading-10 text-justify">Located in the heart of Redcar, by the sea, we provide an unbeatable choice for any night out. Since 2013 we've catered to customers through the serving of a plethora of libations and, so long as customers overwhelmingly remain satisfied, we'll keep on doing it!</p>
                        <p class="text-2xl mt-10 leading-10">Blue lounge is the perfect place for unique and stunning cocktails in a beautiful setting with a speakeasy feel and live music from our resident DJ.</p>
                    </div>
                    <img class="w-1/2 rounded-3xl mb-10" src="{{ asset('img/banner.jpg') }}"/>
                </div>
                <div class="flex flex-col mt-12">
                    <h2 class="text-3xl font-semibold mb-8">But don't take our word for it...</h2>

                    <div class="flex items-center -mx-4">
                        <div class="flex flex-col mx-4 w-1/4">
                            <div class="flex flex-col bg-gray-100 p-6 rounded-xl shadow-md" style="min-height: 260px">
                                <p class="leading-7">The staff have delivered excellent service. Such friendly and lovely people, helped me out when my phone was dead and helped me contact family members so I wasn???t on my own. Really appreciate their customer service, really friendly and polite. Couldn't recommend any more than I do!</p>
                                <p class="font-bold italic mt-auto">~ Hollie Jones Dallas</p>
                            </div>
                        </div>
                        <div class="flex flex-col mx-4 w-1/4">
                            <div class="flex flex-col bg-gray-100 p-6 rounded-xl shadow-md" style="min-height: 260px">
                                <p class="leading-7">Absolutely lovely staff, so kind and caring even with all that's going on! Amazing atmosphere, put myself and friends at ease, showing everybody the new guidelines upon entry, table service is fast and friendly! Would recommend!</p>
                                <p class="font-bold italic mt-auto">~ Nicole Martin</p>
                            </div>
                        </div>
                        <div class="flex flex-col mx-4 w-1/4">
                            <div class="flex flex-col bg-gray-100 p-6 rounded-xl shadow-md" style="min-height: 260px">
                                <p class="leading-7">The new safety measures are very clear and make me feel safe and comfortable while still providing great service and atmosphere. 10/10.</p>
                                <p class="font-bold italic mt-auto">~ Riley Hagen</p>
                            </div>
                        </div>
                        <div class="flex flex-col mx-4 w-1/4">
                            <div class="flex flex-col bg-gray-100 p-6 rounded-xl shadow-md" style="min-height: 260px">
                                <p class="leading-7">Thank you all so much for Saturday night's private party for my wife's 60th birthday. Couldn't have asked for a better venue. And thanks for putting all the decorations up, nothing was too much bother and Ashley and all the crew were fantastic! Would definitely recommend for any party.</p>
                                <p class="font-bold italic mt-auto">~ Craig Mcpherson</p>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col items-end justify-end mt-8">
                        <p class="text-sm font-semibold text-gray-600">The reviews above have been touched up, while the sentiments of the review remains the same. Only spelling, grammar and punctuation have been corrected.</p>
                        <a class="text-sm uppercase font-semibold" href="https://www.facebook.com/BlueLoungeRed/reviews/?ref=page_internal">View Reviews <i class="fab fa-facebook ml-3"></i></a>
                    </div>
                </div>
            </div>
            <div class="flex items-start px-96 h-screen">
                <div class="bg-gray-900 rounded-l-3xl flex flex-col h-full w-1/2 p-24 text-gray-300 shadow-lg" style="height: 1000px">
                    <h2 class="text-white text-4xl font-light mb-10">Contact Form</h2>

                    <form class="contact-form" style="font-family: 'Nunito', sans-serif">
                        <div class="flex flex-col">
                            <label class="font-semibold text-sm mb-2 uppercase text-white" for="name">Your Name</label>
                            <input class="bg-black bg-opacity-50 p-3 rounded-md" type="text" name="name" id="name" placeholder="John Smith">
                        </div>
                    </form>

                </div>

                <div class="flex flex-col h-full w-1/2 rounded-r-3xl items-center justify-center bg-gray-800 shadow-lg" style="height: 1000px;">
                    <iframe class="rounded-r-3xl" width="100%" height="100%" style="border:0" loading="lazy" allowfullscreen src="https://www.google.com/maps/embed/v1/place?key=AIzaSyCKJ5j9soePYzu_RWTE3GxkwJ2o7IA3PMY&q=Blue,Lounge,Redcar"></iframe>
                </div>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script type="text/javascript" src="{{ asset('js/parallax.min.js') }}"></script>
        <script src="https://kit.fontawesome.com/69ebd03f48.js" crossorigin="anonymous"></script>
    </body>
</html>
