@extends('layouts.app')

@section('styles')
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/fullcalendar@3.10.3/dist/fullcalendar.css"/>
@endsection

@section('content')
    <div class="flex flex-col max-w-7xl mx-auto mt-10 px-4 sm:px-6 lg:px-8">
        <div class="flex items-center gap-10">
            <div class="flex items-center w-1/3 bg-gray-800 rounded-md shadow-md p-6 cursor-pointer">
                <div class="flex flex-col">
                    <h2 class="mb-3 font-semibold text-white text-xl">Site Management</h2>
                    <p class="text-gray-400">Some tools provided to assist in editing the websites content.</p>
                </div>
                <i class="fa fa-arrow-right ml-10 text-gray-400"></i>
            </div>
            <div class="flex items-center w-1/3 bg-gray-800 rounded-md shadow-md p-6 cursor-pointer">
                <div class="flex flex-col">
                    <h2 class="mb-3 font-semibold text-white text-xl">Rota Management</h2>
                    <p class="text-gray-400">Assign shifts to staff members and oversee trades & discussion.</p>
                </div>
                <i class="fa fa-arrow-right ml-10 text-gray-400"></i>
            </div>
            <div class="flex items-center w-1/3 bg-gray-800 rounded-md shadow-md p-6 cursor-pointer">
                <div class="flex flex-col">
                    <h2 class="mb-3 font-semibold text-white text-xl">Site Management</h2>
                    <p class="text-gray-400">Some tools provided to assist in editing the websites content.</p>
                </div>
                <i class="fa fa-arrow-right ml-10 text-gray-400"></i>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/fullcalendar@3.10.3/dist/fullcalendar.min.js"></script>
@endsection