@extends('layouts.app')

@section('content')
    <div class="flex items-start max-w-7xl mx-auto mt-10 px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col flex-grow">
            <h1>test</h1>
        </div>
        <div class="flex flex-col w-1/3">
            <div class="flex flex-col bg-white bg-opacity-5 items-center justify-center p-10" style="font-family: 'Bebas Neue', sans-serif">
                <h1 class="font-semibold text-4xl text-white">Ready for your shift?</h1>
                <h2 class="text-gray-300">Click the button below to clock in.</h2>

                <button type="button" class="bg-black bg-opacity-5 uppercase">Clock In</button>
            </div>
        </div>
    </div>
@endsection