<html lang="en">

<head>
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
        integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

</head>

<body class="bg-gray-100 font-sans">
    
    @yield('header')

    <div id="app">
        <div id="main-body" class="leading-normal tracking-normal">
            <div class="flex flex-wrap">
                @yield('content')
            </div>
        </div>
    </div>
        
    @yield('footer')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.6/Chart.js"></script>
        <script>

            var plot = [107,132,95,42,27,55,197,191,165,334,217,152,123,3598,878,311,215,130,101,100,136,207,129,112,98,123,64,249,131,126,13];
            var labels = ['25 Jun', '26 Jun', '27 Jun', '28 Jun', '29 Jun', '30 Jun', '1 Jul', '2 Jul', '3 Jul', '4 Jul', '5 Jul', '6 Jul', '7 Jul', '8 Jul', '9 Jul', '10 Jul', '11 Jul', '12 Jul', '13 Jul', '14 Jul', '15 Jul', '16 Jul', '17 Jul', '18 Jul', '19 Jul', '20 Jul', '21 Jul', '22 Jul', '23 Jul', '24 Jul', '25 Jul']
            var ctx = document.getElementById("main-graph").getContext('2d');
            var gradient = ctx.createLinearGradient(0, 0, 0, 300);
            gradient.addColorStop(0, 'rgba(101,116,205, 0.2)');
            gradient.addColorStop(1, 'rgba(101,116,205, 0)');

            new Chart(ctx, {
            type: 'line',
            data: {
                labels: labels,
                datasets: [{
                label: 'Pageviews',
                data: plot,
                borderWidth: 3,
                borderColor: 'rgba(3, 169, 244, 0.9)',
                pointBackgroundColor: 'rgba(101,116,205)',
                backgroundColor: gradient,
                }]
            },
            options: {
                legend: {display: false},
                responsive: true,
                elements: {line: {tension: 0.1}, point: {radius: 0}},
                tooltips: {
                mode: 'index',
                intersect: false,
                displayColors: false
                },
                hover: {
                mode: 'index',
                intersect: false
                },
                scales: {
                yAxes: [{
                    ticks: {
                    callback: function (value) { if (Number.isInteger(value)) { return value; } },
                    beginAtZero: true,
                    autoSkip: true,
                    maxTicksLimit: 8,
                    },
                    gridLines: {
                    zeroLineColor: 'transparent',
                    drawBorder: false,
                    }
                }],
                xAxes: [{
                    gridLines: {
                    display: false,
                    },
                    ticks: {
                    autoSkip: true,
                    maxTicksLimit: 8,
                    }
                }]
                }
            }
        });
        
    </script>

</body>

</html>