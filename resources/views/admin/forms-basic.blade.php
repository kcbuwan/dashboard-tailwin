@extends('layouts.blank') 
@section('header') 
    @include('layouts.header') 
@endsection 
@section('content')
    <div class="lg:mt-0 mb-6 ">
        <div class="flex flex-wrap mb-4">
            <div class="w-full lg:w-1/2">

                <div class="rounded-sm-sm shadow bg-white pb-4 text-gray-700 mb-6">
                    <div class="flex p-4 pt-2 pb-2 mb-2 font-medium">
                        <h2 class="pull-right pr-4">Basic Form</h2>
                    </div>
                    <div class="px-4 mb-6">
                        <label class="text-sm block tracking-wide text-gray-700 mb-2" for="email">
                            Email Address
                        </label>
                        <input class="appearance-none block w-full  text-gray-700 border border-red-500 rounded-sm py-2 px-3 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="text" placeholder="Enter email" id="email">
                        <small>We'll never share your email with anyone else.</small>
                    </div>
                    <div class="px-4 mb-3">
                        <label class="text-sm block tracking-wide text-gray-700 mb-2" for="password">
                            Password
                        </label>
                        <input class="appearance-none block w-full  text-gray-700 border border-gray-200 rounded-sm py-2 px-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="password" placeholder="Password" id="password">
                    </div>
                    <div class="px-4 mb-6">
                        <label class="md:w-2/3 block text-gray-700">
                            <input class="mr-2 leading-tight" type="radio">
                            <span class="text-sm">
                                Send me your newsletter!
                                </span>
                        </label>
                    </div>

                    <div class="px-4">
                        <button class="bg-blue-600 hover:bg-blue-700 outline-none focus:border-teal-900 text-white py-1 px-8 rounded-sm-sm inline-flex">
                            Submit
                        </button>
                    </div>

                </div>

                <div class="rounded-sm-sm shadow bg-white pb-4 text-gray-700 mb-6">
                    <div class="flex p-4 pt-2 pb-2 mb-2 font-medium">
                        <h2 class="pull-right pr-4">Horizontal Form</h2>
                    </div>
                    <div class="px-4 mb-3">
                        <div class="md:flex md:items-center mb-6">
                            <div class="md:w-1/4">
                                <label class="block text-gray-700 mb-1 md:mb-0 pr-4" for="inline-email">
                                    Email
                                </label>
                            </div>
                            <div class="w-full">
                                <input class=" appearance-none border-2 border-gray-200 rounded-sm w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="Email" type="text" value="Email">
                            </div>
                        </div>
                    </div>
                    <div class="px-4 mb-3">
                        <div class="md:flex md:items-center mb-6">
                            <div class="md:w-1/4">
                                <label class="block text-gray-700 mb-1 md:mb-0 pr-4" for="inline-password">
                                    Password
                                </label>
                            </div>
                            <div class="w-full">
                                <input class=" appearance-none border-2 border-gray-200 rounded-sm w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-password" type="text" value="Password">
                            </div>
                        </div>
                    </div>
                    <div class="px-4 mb-3">
                        <div class="md:flex md:items-center mb-6">
                            <div class="md:w-1/4">Radios</div>
                            <div class="w-full">
                                <label class="block text-gray-700">
                                    <input class="mr-2 leading-tight" type="radio">
                                    <span class="text-sm">
                                            Option one is this and that—be sure to include why it's great
                                        </span>
                                </label>
                                <label class="block text-gray-700">
                                    <input class="mr-2 leading-tight" type="radio">
                                    <span class="text-sm">
                                            Option two can be something else and selecting it will deselect option one
                                        </span>
                                </label>
                                <label class="block text-gray-700">
                                    <input class="mr-2 leading-tight" type="radio">
                                    <span class="text-sm">
                                            Option three is disabled
                                        </span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="px-4 mb-3">
                        <div class="md:flex md:items-center mb-6">
                            <div class="md:w-1/4">Checkbox</div>
                            <div class="w-full">
                                <label class="block text-gray-700">
                                    <input class="mr-2 leading-tight" type="checkbox">
                                    <span class="text-sm">
                                            Check me out
                                        </span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="px-4">
                        <button class="bg-blue-600 hover:bg-blue-700 outline-none focus:border-teal-900 text-white py-1 px-8 rounded-sm-sm inline-flex">
                            Sign in
                        </button>
                    </div>

                </div>

                <div class="rounded-sm-sm shadow bg-white pb-4 text-gray-700">
                    <div class="flex p-4 pt-2 pb-2 mb-2 font-medium">
                        <h2 class="pull-right pr-4">Validation</h2>
                    </div>
                    <div class="px-4 mb-3">
                        <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                <label class="block tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                                    First Name
                                </label>
                                <input class="appearance-none block w-full  text-gray-700 border border-red-500 rounded-sm py-2 px-3 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="Jane">
                            </div>
                            <div class="w-full md:w-1/2 px-3">
                                <label class="block tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                                    Last Name
                                </label>
                                <input class="appearance-none block w-full  text-gray-700 border border-gray-200 rounded-sm py-2 px-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="Doe">
                            </div>

                            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                                <label class="block tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-city">
                                    City
                                </label>
                                <input class="appearance-none block w-full  text-gray-700 border border-gray-200 rounded-sm py-2 px-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-city" type="text" placeholder="Belmont">
                            </div>
                            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                                <label class="block tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                                    State
                                </label>
                                <div class="relative">
                                    <select class="block appearance-none w-full  border border-gray-200 text-gray-700 py-2 px-3 pr-8 rounded-sm leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                                        <option>Victoria</option>
                                        <option>New Mexico</option>
                                        <option>Missouri</option>
                                        <option>Texas</option>
                                    </select>
                                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                                <label class="block tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-zip">
                                    Zip
                                </label>
                                <input class="appearance-none block w-full  text-gray-700 border border-gray-200 rounded-sm py-2 px-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-zip" type="text" placeholder="90210">
                            </div>
                        </div>
                    </div>

                    <div class="px-4">
                        <button class="bg-blue-600 hover:bg-blue-700 outline-none focus:border-teal-900 text-white py-1 px-8 rounded-sm-sm inline-flex">
                            Submit form
                        </button>
                    </div>

                </div>

            </div>
            <div class="w-full lg:w-1/2">
                <div class="rounded-sm-sm shadow bg-white pb-4 mt-4 lg:mt-0 lg:ml-6 text-gray-700 mb-6">
                    <div class="flex p-4 pt-2 pb-2 mb-4 font-medium">
                        <h2 class="pull-right pr-4">Complex Form Layout</h2>
                    </div>
                    <div class="px-4 mb-3">
                        <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                <label class="block tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                                    First Name
                                </label>
                                <input class="appearance-none block w-full  text-gray-700 border border-red-500 rounded-sm py-2 px-3 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="Jane">
                            </div>

                            <div class="w-full md:w-1/2 px-3">
                                <label class="block tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                                    Last Name
                                </label>
                                <input class="appearance-none block w-full  text-gray-700 border border-gray-200 rounded-sm py-2 px-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="Doe">
                            </div>

                            <div class="w-full px-4 mb-1">
                                <label class="text-sm block tracking-wide text-gray-700 mb-2" for="adress">
                                    Address
                                </label>
                                <input class="appearance-none block w-full  text-gray-700 border rounded-sm py-2 px-3 mb-3 leading-tight focus:outline-none focus:bg-white" type="text" placeholder="Victoria, 3216" id="address">
                            </div>

                            <div class="w-full md:w-1/3 px-3 mb-3">
                                <label class="block tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-city">
                                    City
                                </label>
                                <input class="appearance-none block w-full  text-gray-700 border border-gray-200 rounded-sm py-2 px-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-city" type="text" placeholder="Belmont">
                            </div>
                            <div class="w-full md:w-1/3 px-3 mb-3">
                                <label class="block tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                                    State
                                </label>
                                <div class="relative">
                                    <select class="block appearance-none w-full  border border-gray-200 text-gray-700 py-2 px-3 pr-8 rounded-sm leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                                        <option>Victoria</option>
                                        <option>New Mexico</option>
                                        <option>Missouri</option>
                                        <option>Texas</option>
                                    </select>
                                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full md:w-1/3 px-3 mb-3">
                                <label class="block tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-zip">
                                    Zip
                                </label>
                                <input class="appearance-none block w-full  text-gray-700 border border-gray-200 rounded-sm py-2 px-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-zip" type="text" placeholder="3216">
                            </div>
                            <div class="px-4">
                                <label class="block text-gray-700">
                                    <input class="mr-2 leading-tight" type="radio">
                                    <span class="text-sm">
                                                Call to someone
                                            </span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="px-4">
                        <button class="bg-blue-600 hover:bg-blue-700 outline-none focus:border-teal-900 text-white py-1 px-8 rounded-sm-sm inline-flex">
                            Sign In
                        </button>
                    </div>
                </div>

                <div class="rounded-sm-sm shadow bg-white pb-4 mt-4 lg:mt-0 lg:ml-6 text-gray-700 mb-6">
                    <div class="flex p-4 pt-2 pb-2 mb-2 font-medium">
                        <h2 class="pull-right pr-4">Disabled Forms</h2>
                    </div>
                    <div class="px-4 mb-6">
                        <label class="text-sm block tracking-wide text-gray-700 mb-2" for="email">
                            Disabled input
                        </label>
                        <input class="appearance-none block w-full bg-gray-200  text-gray-700 border border-red-500 rounded-sm py-2 px-3 mb-3 leading-tight focus:outline-none focus:bg-white cursor-not-allowed" type="text" placeholder="Disabled input" id="email">
                    </div>
                    <div class="px-4 mb-3">
                        <label class="text-sm block tracking-wide text-gray-700 mb-2" for="password">
                            Disabled select menu
                        </label>
                        <div class="relative">
                            <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-2 px-3 pr-8 rounded-sm leading-tight focus:outline-none focus:bg-white focus:border-gray-500 cursor-not-allowed" id="grid-state">
                                <option>Victoria</option>
                                <option>New Mexico</option>
                                <option>Missouri</option>
                                <option>Texas</option>
                            </select>
                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="px-4 mb-6 ">
                        <label class="md:w-2/3 block text-gray-700">
                            <input class="mr-2 leading-tight opacity-50 cursor-not-allowed" type="radio">
                            <span class="text-sm opacity-50 cursor-not-allowed">
                                    Can't check this
                                </span>
                        </label>
                    </div>

                    <div class="px-4">
                        <button class="bg-blue-500 text-white py-1 px-4 rounded-sm opacity-50 cursor-not-allowed">
                            Submit
                        </button>
                    </div>

                </div>
            </div>

        </div>
    </div>
@endsection 

@section('footer')
    @include('layouts.footer')
@endsection