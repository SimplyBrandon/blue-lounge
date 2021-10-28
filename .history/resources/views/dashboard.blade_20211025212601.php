@extends('layouts.app')

@section('content')
    <div class="flex flex-col max-w-7xl mx-auto px-4 pt-12 sm:px-6 lg:px-8">
        <div class="flex items-center">
            <img style="height: 100px; width: 100px" class="rounded-full" src="https://scontent-lcy1-2.xx.fbcdn.net/v/t1.6435-9/84535118_2234335966869824_9114908075222892544_n.jpg?_nc_cat=109&ccb=1-5&_nc_sid=174925&_nc_ohc=PrEuIakgkSUAX-vH-My&_nc_oc=AQl756Ga_89dfl1ea04bhESo-M_UvA54eUZ44fY09oV9l0hgbeK2ZOpLk8ZycNZk9_Q&_nc_ht=scontent-lcy1-2.xx&oh=06b37e2e49cc5251256a60e1cdaee3e6&oe=619D74C0"/>
            <div class="flex flex-col ml-10">
                <h1 class="text-3xl text-white">Welcome back, <strong>{{ Auth::user()->name }}</strong>.</h1>
                <h2 class="text-red-400 text-xl mt-3 tracking-wider" style="font-family: 'Quicksand', sans-serif">Manager <span class="text-gray-300">Since 25/10/2021</span></h2>    
            </div>
        </div>
        
    </div>
    <div class="flex items-start max-w-7xl mx-auto mt-10 px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col flex-grow mr-10">
            <div class="flex flex-col bg-black bg-opacity-30 rounded-md mb-8 shadow-md">
                <div class="flex items-center w-full px-6 py-4 text-white text-sm font-semibold uppercase tracking-wider" style="font-family: 'Roboto', sans-serif">
                    <div class="flex items-center">
                        <i class="fa fa-exclamation-triangle mr-3"></i>
                        <h2>Staff Announcements</h2>
                    </div>
                    <div class="flex items-center ml-auto">
                        <p class="bg-red-400 text-white px-4 py-1 text-xs rounded-md mr-5">2 new</p>
                        <button type="button" id="prev-announcement" class="mr-3 uppercase font-semibold" prev-announcement>Prev</button>
                        <button type="button" id="next-announcement" class="uppercase font-semibold text-gray-500">Next</button>
                    </div>
                </div>
                <div class="flex flex-nowrap overflow-x-auto no-scrollbar" id="staff-announcements">
                    <div class="flex flex-col bg-white bg-opacity-5 rounded-b-md w-full flex-shrink-0">
                        <h2 class="text-white px-6 py-3">You're only supposed to blow the bloody doors off, not the whole building. Next time the building is blown up, there's going to be some serious problems.</h2>
                        <h2 class="text-gray-300 italic font-semibold px-6 pb-3">~ Brandon Rooney <span class="text-xs text-gray-50">[1h30m ago]</span></h2>
                    </div>
                    <div class="flex flex-col bg-white bg-opacity-5 rounded-b-md w-full flex-shrink-0">
                        <h2 class="text-white px-6 py-3">You're only supposed to blow the bloody doors off, not the whole building. Next time the building is blown up, there's going to be some serious problems.</h2>
                        <h2 class="text-gray-300 italic font-semibold px-6 pb-3">~ Brandon Rooney <span class="text-xs text-gray-50">[1h30m ago]</span></h2>
                    </div>
                    <div class="flex flex-col bg-white bg-opacity-5 rounded-b-md w-full flex-shrink-0">
                        <h2 class="text-white px-6 py-3">You're only supposed to blow the bloody doors off, not the whole building. Next time the building is blown up, there's going to be some serious problems.</h2>
                        <h2 class="text-gray-300 italic font-semibold px-6 pb-3">~ Brandon Rooney <span class="text-xs text-gray-50">[1h30m ago]</span></h2>
                    </div>
                </div>
            </div>

            <div class="flex flex-col w-full bg-white bg-opacity-5 rounded-md shadow-md p-10">
                <canvas id="myChart" width="400" height="240"></canvas>
                <div class="flex items-center mt-8 pb-4 border-b-2 border-white border-opacity-5">
                    <div class="flex flex-col w-1/3">
                        <h2 class="text-gray-300 text-sm">Total Clocked Hours</h2>
                        <p class="text-white font-bold text-3xl">28</p>
                    </div>
                    <div class="flex flex-col w-1/3 text-center">
                        <h2 class="text-gray-300 text-sm">Rota'd Hours</h2>
                        <p class="text-white font-bold text-3xl">29</p>
                    </div>
                    <div class="flex flex-col w-1/3 text-right">
                        <h2 class="text-gray-300 text-sm">Expected Earnings</h2>
                        <p class="text-white font-bold text-3xl">£191.40</p>
                    </div>
                </div>
                <div class="flex flex-col w-full">
                    <table class="w-full">
                        <thead class="border-b-2 border-opacity-5 border-white">
                            <tr>
                                <th class="text-left text-white py-3">Date</th>
                                <th class="text-left text-white py-3">Rota'd Hours</th>
                                <th class="text-right text-white py-3">Clocked Hours</th>
                                <th class="text-white py-3 text-right">Daily Earnings</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="font-semibold">
                                <td class="text-left text-white py-3 uppercase text-sm">Your Next Shift</td>
                                <td class="text-left text-white py-3">6.5</td>
                                <td class="text-right text-white py-3">TBD</td>
                                <td class="text-right text-white py-3">£42.90 (Expected)</td>
                            </tr>
                            <tr>
                                <td class="text-left text-gray-400 py-3">22/10/2021</td>
                                <td class="text-left text-gray-400 py-3">6.5</td>
                                <td class="text-right text-gray-400 py-3">6.5</td>
                                <td class="text-right text-gray-400 py-3">£42.90</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="flex flex-col" style="min-width: 340px;">
            <div class="flex flex-col bg-blue-400 rounded-md bg-opacity-20 justify-center p-10" style="font-family: 'Quicksand', sans-serif">
                <h1 class="font-semibold text-2xl text-white tracking-wider" style="font-family: 'Bebas Neue', sans-serif">Ready for your shift?</h1>
                <h2 class="text-gray-300 text-justify text-sm mt-2">Click the button below to start your shift, make sure you're in the building.</h2>

                <button type="button" class="bg-blue-400 hover:bg-blue-500 w-full mt-10 py-3 text-white text-sm uppercase font-semibold tracking-wide rounded-md shadow-md transition ease duration-200">Start your shift</button>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function(){
            let staffAnnouncements = $('#staff-announcements');
            staffAnnouncements.animate({
                scrollLeft: staffAnnouncements.get(0).scrollWidth
            }, 0);

            $('#next-announcement:not(.disabled)').on('click', function(){
                var leftPos = staffAnnouncements.scrollLeft();
                var announcementWidth = staffAnnouncements.find('.bg-white').width();

                let newPos = leftPos + announcementWidth;

                staffAnnouncements.stop().animate({
                    scrollLeft: newPos + 'px'
                }, 100);

                if(leftPos + announcementWidth > 0){
                    $('#prev-announcement').removeClass('disabled text-gray-500');
                }

                if(newPos + announcementWidth >= staffAnnouncements.get(0).scrollWidth){
                    $(this).addClass('disabled text-gray-500');
                }
            });

            $('#prev-announcement:not(.disabled)').on('click', function(){
                var leftPos = staffAnnouncements.scrollLeft();
                var announcementWidth = staffAnnouncements.find('.bg-white').width();

                let newPos = leftPos - announcementWidth;

                staffAnnouncements.stop().animate({
                    scrollLeft: newPos + 'px'
                }, 100);

                if(leftPos < staffAnnouncements.get(0).scrollWidth){
                    $('#next-announcement').removeClass('disabled text-gray-500');
                }

                if(leftPos - announcementWidth <= 0){
                    $(this).addClass('disabled text-gray-500');
                }
            });
        });


        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'],
                datasets: [{
                    label: 'Clocked Hours',
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
                }, {
                    label: 'Expected Hours',
                    data: [8, 3, 5, 6, 3, 2, 2],
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