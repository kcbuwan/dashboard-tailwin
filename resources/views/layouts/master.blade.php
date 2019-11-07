<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/1.0.5/base.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/1.0.5/components.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/1.0.5/utilities.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
        integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

</head>

<body class="bg-gray-100 font-sans">
    
    <nav id="header" class="bg-gray-900 w-full z-10 top-0 shadow">

        <div class="container mx-auto flex flex-wrap items-center mt-0 pt-2 pb-2">

            <div class="w-1/2 pl-2 md:pl-0">
                <a class="text-gray-100 text-base xl:text-xl font-medium uppercase" href="{{ url('/') }}">
                    <i class="fas fa-columns"></i>
                    Dashboard
                </a>
            </div>

            <div class="w-1/2 pr-0 self-center">
                <div class="flex relative inline-block float-right">

                    <div class="relative text-sm text-gray-100">
                        @guest
                            <a class="no-underline hover:underline text-gray-300 text-sm p-3" href="{{ route('login') }}">{{ __('Login') }}</a>
                            @if (Route::has('register'))
                                <a class="no-underline hover:underline text-gray-300 text-sm p-3" href="{{ route('register') }}">{{ __('Register') }}</a>
                            @endif
                        @else
                            <span class="text-gray-300 text-sm pr-2">Hi, {{ Auth::user()->name }}</span>

                            <a href="{{ route('logout') }}"
                               class="no-underline hover:underline text-gray-300 text-sm p-3"
                               onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                                {{ csrf_field() }}
                            </form>
                        @endguest
                    </div>

                    <div class="block lg:hidden">
                        <button id="nav-toggle"
                            class="flex items-center px-3 py-2 text-white hover:text-gray-100 border-none text-white appearance-none focus:outline-none">
                            <svg class="fill-current h-5 w-5" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <title>Menu</title>
                                <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
                            </svg>
                        </button>
                    </div>
                </div>

            </div>
        </div>
        <div class="w-full hidden lg:block bg-gray-800">
            <div class="container mx-auto flex flex-wrap">
                <ul class="list-reset lg:flex flex-1 items-center px-4 md:px-0">
                    <li class="mr-6 my-2 md:my-0">
                        <a href="#"
                            class="block py-1 md:py-3 align-middle text-white hover:text-gray-100 font-semibold uppercase">
                            <i class="fas fa-tachometer-alt mr-3"></i>
                            <span class="pb-1 md:pb-0 text-sm">Dashboard</span>
                        </a>
                    </li>
                    <li class="mr-6 my-2 md:my-0">
                        <a href="#" class="block py-1 md:py-3 pl-1 align-middle text-white font-semibold uppercase">
                            <i class="fas fa-copy mr-3"></i>
                            <span class="pb-1 md:pb-0 text-sm">Pages</span>
                        </a>
                    </li>
                    <li class="mr-6 my-2 md:my-0">
                        <a href="#"
                            class="block py-1 md:py-3 pl-1 align-middle text-white hover:text-gray-100 font-semibold uppercase">
                            <i class="fas fa-file-alt mr-3"></i>
                            <span class="pb-1 md:pb-0 text-sm">Blogs</span>
                        </a>
                    </li>
                    <li class="mr-6 my-2 md:my-0">
                        <a href="#"
                            class="block py-1 md:py-3 pl-1 align-middle text-white hover:text-gray-100 font-semibold uppercase">
                            <i class="fas fa-box mr-3"></i>
                            <span class="pb-1 md:pb-0 text-sm">Products</span>
                        </a>
                    </li>
                    <li class="mr-6 my-2 md:my-0">
                        <a href="#"
                            class="block py-1 md:py-3 pl-1 align-middle text-white hover:text-gray-100 font-semibold uppercase">
                            <i class="fas fa-sort-alpha-down mr-3"></i>
                            <span class="pb-1 md:pb-0 text-sm">Orders</span>
                        </a>
                    </li>
                    <li class="mr-6 my-2 md:my-0">
                        <a href="#"
                            class="block py-1 md:py-3 pl-1 align-middle text-white hover:text-gray-100 font-semibold uppercase">
                            <i class="fab fa-ebay mr-3"></i>
                            <span class="pb-1 md:pb-0 text-sm">Ebay</span>
                        </a>
                    </li>
                </ul>

                <div class="relative pull-right pl-4 pr-4 md:pr-0 self-center">
                    <button
                        class="w-full max-w-sm mx-auto flex items-center justify-center bg-blue-600 hover:bg-blue-700 outline-none focus:border-teal-900 text-white text-sm font-medium py-1 px-5 rounded-sm shadow uppercase">
                        <i class="fas fa-cog mr-3"></i> Settings
                    </button>
                </div>
            </div>

        </div>
    </nav>
    
    <div class="main-content container mx-auto mt-6 pl-4 pr-4 lg:pl-0 lg:pr-0 md:pl-0 md:pr-0">    
        @yield('content')
    </div>
        
    <footer class="container mx-auto flex items-center px-2 py-8">

        <div class="w-full mx-auto flex flex-wrap items-center">
            <div class="flex w-full md:w-1/2 justify-center md:justify-start uppercase text-sm">
                <span class="font-medium text-gray-500">
                  Copyright © 2019
                </span>
            </div>
            <div class="flex w-full pt-2 content-center justify-between md:w-1/2 md:justify-end">
                <ul class="list-reset flex justify-center flex-1 md:flex-none items-center uppercase text-sm">
                    <li>
                        <a class="inline-block py-2 px-3 text-gray-500 font-medium" href="#">
                            Privacy Policy
                        </a>
                    </li>
                    <li>
                        <a class="inline-block text-gray-500 font-medium hover:text-gray-600 py-2 px-3" href="#">Terms of use</a>
                    </li>
                    <li>
                        <a class="inline-block text-gray-500 font-medium hover:text-gray-600 py-2 px-3" href="#">Help</a>
                    </li>
                </ul>
            </div>
        </div>
    
    </footer>
    @yield('scripts')
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
                borderColor: 'rgba(101,116,205)',
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