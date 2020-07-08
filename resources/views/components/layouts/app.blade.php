<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    
</head>
<body class="bg-gray-200 h-screen antialiased leading-none">

    <div id="app">
        {{ $slot }}
    </div>

    @yield('footer')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.6/Chart.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
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
                borderColor: 'rgb(49, 151, 149, 1)',
                pointBackgroundColor: 'rgb(49, 151, 149, 1)',
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
    <script>
        function app() {
        return {
            chartData: [112, 10, 225, 134, 101, 80, 50, 100, 200],
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep'],

            tooltipContent: '',
            tooltipOpen: false,
            tooltipX: 0,
            tooltipY: 0,
            showTooltip(e) {
            console.log(e);
            this.tooltipContent = e.target.textContent
            this.tooltipX = e.target.offsetLeft - e.target.clientWidth;
            this.tooltipY = e.target.clientHeight + e.target.clientWidth;
            },
            hideTooltip(e) {
            this.tooltipContent = '';
            this.tooltipOpen = false;
            this.tooltipX = 0;
            this.tooltipY = 0;
            }
        }
        }
    </script>

    <script>
            window.chartColors = {
                green: 'rgb(49, 151, 149, 1)',
                yellow: 'rgb(236, 201, 75)',
                red: 'rgb(252, 129, 129, 1)',
            };

            Chart.defaults.global.tooltips.custom = function(tooltip) {
            // Tooltip Element
            var tooltipEl = document.getElementById('chartjs-tooltip');

            // Hide if no tooltip
            if (tooltip.opacity === 0) {
                tooltipEl.style.opacity = 0;
                return;
            }

            // Set Text
            if (tooltip.body) {
                var total = 0;

                // get the value of the datapoint
                var value = this._data.datasets[tooltip.dataPoints[0].datasetIndex].data[tooltip.dataPoints[0].index].toLocaleString();

                // calculate value of all datapoints
            this._data.datasets[tooltip.dataPoints[0].datasetIndex].data.forEach(function(e) {
                total += e;
                });

                // calculate percentage and set tooltip value
                tooltipEl.innerHTML = '<h1>' + (value / total * 100) + '%</h1>';
            }

            // calculate position of tooltip
            var centerX = (this._chartInstance.chartArea.left + this._chartInstance.chartArea.right) / 2;
            var centerY = ((this._chartInstance.chartArea.top + this._chartInstance.chartArea.bottom) / 2);

            // Display, position, and set styles for font
            tooltipEl.style.opacity = 1;
            tooltipEl.style.left = centerX + 'px';
            tooltipEl.style.top = centerY + 'px';
            tooltipEl.style.fontFamily = tooltip._fontFamily;
            tooltipEl.style.fontSize = tooltip.fontSize;
            tooltipEl.style.fontStyle = tooltip._fontStyle;
            tooltipEl.style.padding = tooltip.yPadding + 'px ' + tooltip.xPadding + 'px';
            };

            var config = {
            type: 'doughnut',
            data: {
                datasets: [{
                data: [300, 40, 10],
                backgroundColor: [
                    window.chartColors.green,
                    window.chartColors.yellow,
                    window.chartColors.red,
                ],
                }],
                labels: [
                "Orders",
                "Pending",
                "Rejected"
                ]
            },
            options: {
                responsive: true,
                legend: {
                display: true,
                labels: {
                    padding: 20
                },
                },
                tooltips: {
                enabled: false,
                }
            }
            };

            window.onload = function() {
                var ctx = document.getElementById("chart-area").getContext("2d");
                window.myPie = new Chart(ctx, config);
            };
    </script>
</body>
</html>
