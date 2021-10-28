@extends('layouts.app')

@section('styles')
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/fullcalendar@3.10.3/dist/fullcalendar.css"/>
@endsection

@section('content')
    <div class="flex flex-col max-w-7xl mx-auto mt-10 px-4 sm:px-6 lg:px-8">
        <div class="flex items-center gap-10">
            <div class="flex items-center w-1/3 bg-gray-800 hover:bg-blue-700 rounded-md shadow-md p-6 cursor-pointer text-gray-400 hover:text-gray-300 transition ease duration-200">
                <div class="flex flex-col">
                    <h2 class="mb-3 font-semibold text-white text-xl">Site Management</h2>
                    <p>Some tools provided to assist in editing the websites content.</p>
                </div>
                <i class="fa fa-arrow-right ml-10 "></i>
            </div>
            <div class="flex items-center w-1/3 bg-gray-800 hover:bg-blue-700 rounded-md shadow-md p-6 cursor-pointer text-gray-400 hover:text-gray-300 transition ease duration-200">
                <div class="flex flex-col">
                    <h2 class="mb-3 font-semibold text-white text-xl">Rota Management</h2>
                    <p>Assign shifts to staff members and oversee trades & discussion.</p>
                </div>
                <i class="fa fa-arrow-right ml-10"></i>
            </div>
            <div class="flex items-center w-1/3 bg-gray-800 hover:bg-blue-700 rounded-md shadow-md p-6 cursor-pointer text-gray-400 hover:text-gray-300 transition ease duration-200">
                <div class="flex flex-col">
                    <h2 class="mb-3 font-semibold text-white text-xl">Owner Management</h2>
                    <p>A space purely for the owner to oversee management.</p>
                </div>
                <i class="fa fa-arrow-right ml-10"></i>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/fullcalendar@3.10.3/dist/fullcalendar.min.js"></script>
@endsection