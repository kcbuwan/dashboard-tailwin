 <header id="header" class="bg-gray-900 w-full z-10 top-0 shadow">

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
    </header>