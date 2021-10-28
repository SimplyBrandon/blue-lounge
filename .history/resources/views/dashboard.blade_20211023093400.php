@extends('layouts.app')

@section('content')
    <div class="flex items-start max-w-7xl mx-auto mt-10 px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col flex-grow mr-10">
            <div class="flex flex-col w-full bg-blue-400 bg-opacity-20 rounded-md">
                test
            </div>
        </div>
        <div class="flex flex-col w-1/4">
            <div class="flex flex-col bg-blue-400 rounded-md bg-opacity-20 justify-center p-10" style="font-family: 'Quicksand', sans-serif">
                <h1 class="font-semibold text-2xl text-white tracking-wider" style="font-family: 'Bebas Neue', sans-serif">Ready for your shift?</h1>
                <h2 class="text-gray-300 text-justify text-sm mt-2">Click the button below to start your shift, make sure you're in the building.</h2>

                <button type="button" class="bg-blue-400 hover:bg-blue-500 w-full mt-10 py-3 text-white text-sm uppercase font-semibold tracking-wide rounded-md shadow-md transition ease duration-200">Start your shift</button>
            </div>
        </div>
    </div>
@endsection