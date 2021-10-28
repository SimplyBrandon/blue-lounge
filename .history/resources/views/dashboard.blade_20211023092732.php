@extends('layouts.app')

@section('content')
    <div class="flex items-start max-w-7xl mx-auto mt-10 px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col flex-grow">
            <h1>test</h1>
        </div>
        <div class="flex flex-col w-1/3">
            <div class="flex flex-col bg-blue-400 bg-opacity-20 items-center justify-center p-10" style="font-family: 'Quicksand', sans-serif">
                <h1 class="font-semibold text-4xl text-white" style="font-family: 'Bebas Neue', sans-serif">Ready for your shift?</h1>
                <h2 class="text-gray-300 text-center text-sm">Click the button below to start your shift, make sure you're in the building.</h2>

                <button type="button" class="bg-black bg-opacity-30 w-full mt-10 py-3 text-blue-400 text-sm uppercase font-semibold tracking-wide">Start your shift</button>
            </div>
        </div>
    </div>
@endsection