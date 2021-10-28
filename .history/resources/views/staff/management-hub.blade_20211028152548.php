@extends('layouts.app')

@section('styles')
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/fullcalendar@3.10.3/dist/fullcalendar.css"/>
@endsection

@section('content')
    <div class="flex flex-col max-w-7xl mx-auto mt-10 px-4 sm:px-6 lg:px-8">
        <div class="flex items-center flex-wrap">
            <div class="flex flex-col w-1/3">
                <h2>Site Management</h2>
                <p>Some tools provided to assist in editing the websites content.</p>
            </div>
            <div class="flex flex-col w-1/3">
                <h2>Site Management</h2>
                <p>Some tools provided to assist in editing the websites content.</p>
            </div>
            <div class="flex flex-col w-1/3">
                <h2>Site Management</h2>
                <p>Some tools provided to assist in editing the websites content.</p>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/fullcalendar@3.10.3/dist/fullcalendar.min.js"></script>
@endsection