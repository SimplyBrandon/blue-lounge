@extends('layouts.app')

@section('content')
    <div class="flex items-start max-w-7xl mx-auto mt-10 px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col flex-grow mr-10">
            <div class="flex flex-col w-full bg-white bg-opacity-5 rounded-md p-10">
                <canvas id="myChart" width="400" height="240"></canvas>
                <div class="flex items-center mt-5">
                    <div class="flex flex-col">
                        <h2 class="text-white text-sm">Total Clocked Hours</h2>
                        <p>28</p>
                    </div>
                </div>
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

    <script>
        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'],
                datasets: [{
                    label: 'Clocked hours',
                    data: [8, 3, 5, 6, 3, 2, 1],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
@endsection