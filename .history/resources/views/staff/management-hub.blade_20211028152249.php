@extends('layouts.app')

@section('styles')
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/fullcalendar@3.10.3/dist/fullcalendar.css"/>
@endsection

@section('content')
    <div class="flex flex-col max-w-7xl mx-auto mt-10 px-4 sm:px-6 lg:px-8">
        <div id='calendar'></div>
    </div>
@endsection

@section('scripts')
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/fullcalendar@3.10.3/dist/fullcalendar.min.js"></script>
@endsection