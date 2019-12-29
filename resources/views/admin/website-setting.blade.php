@extends('layouts.blank') 
@section('header') 
    @include('layouts.header') 
@endsection 

@section('content')
    <div class="lg:mt-0 rounded shadow bg-white mb-6 overflow-hidden">
        <div class="flex p-4 border-b border-bg-gray-300">
            <h2 class="uppercase pr-4 text-gray-700 text-lg font-medium">
                General
            </h2>
        </div>
        <div class="flex flex-wrap pt-6 pb-4 pl-2 pr-3">
            <div class="w-full lg:w-1/4 text-gray-700 px-4">
                <ul class="overflow-hidden">
                    <li>
                        <a class="bg-blue-400 border-b border-gray-300 block py-2 px-4 text-white hover:text-gray-100 text-sm font-medium" href="#">
                            General
                        </a>
                    </li>
                    <li>
                        <a class="bg-gray-200 border-b border-gray-300 block py-2 px-4 text-gray-700 hover:text-blue-600 text-sm font-medium" href="#">
                            Logging
                        </a>
                    </li>
                    <li>
                        <a class="bg-gray-200 border-b border-gray-300 block py-2 px-4 text-gray-700 hover:text-blue-600 text-sm font-medium" href="#">
                            API Integrations
                        </a>
                    </li>
                    <li>
                        <a class="bg-gray-200 border-b border-gray-300 block py-2 px-4 text-gray-700 hover:text-blue-600 text-sm font-medium" href="#">
                            Redirects
                        </a>
                    </li>
                    <li>
                        <a class="bg-gray-200 border-b border-gray-300 block py-2 px-4 text-gray-700 hover:text-blue-600 text-sm font-medium" href="#">
                            SEO
                        </a>
                    </li>
                    <li>
                        <a class="bg-gray-200 border-b border-gray-300 block py-2 px-4 text-gray-700 hover:text-blue-600 text-sm font-medium" href="#">
                            Contact Information 
                        </a>
                    </li>
                    <li>
                        <a class="bg-gray-200 border-b border-gray-300 block py-2 px-4 text-gray-700 hover:text-blue-600 text-sm font-medium" href="#">
                            Email Credentials
                        </a>
                    </li>
                    <li>
                        <a class="bg-gray-200 border-b border-gray-300 block py-2 px-4 text-gray-700 hover:text-blue-600 text-sm font-medium" href="#">
                            Email Marketing
                        </a>
                    </li>
                    <li>
                        <a class="bg-gray-200 border-b border-gray-300 block py-2 px-4 text-gray-700 hover:text-blue-600 text-sm font-medium" href="#">
                            Google Analytics
                        </a>
                    </li>
                    <li>
                        <a class="bg-gray-200 border-b border-gray-300 block py-2 px-4 text-gray-700 hover:text-blue-600 text-sm font-medium" href="#">
                            Marketing Referrals
                        </a>
                    </li>
                    <li>
                        <a class="bg-gray-200 border-b border-gray-300 block py-2 px-4 text-gray-700 hover:text-blue-600 text-sm font-medium" href="#">
                            Maintenance Mode
                        </a>
                    </li>
                    <li>
                        <a class="bg-gray-200 border-b border-gray-300 block py-2 px-4 text-gray-700 hover:text-blue-600 text-sm font-medium" href="#">
                            Cart
                        </a>
                    </li>
                    </li>
                        <a class="bg-gray-200 border-b border-gray-300 block py-2 px-4 text-gray-700 hover:text-blue-600 text-sm font-medium" href="#">
                            Store Locator
                        </a>
                    </li>
                    
                </ul>

            </div>
            <div class="w-full lg:w-3/4">
                <div class="flex flex-wrap border-b border-bg-gray-300 mx-4 py-4 mb-6 pt-0">
                    <h2 class="uppercase pr-4 text-gray-700 font-medium">Website</h2>
                </div>

                <div class="pb-4 pt-0 pl-0 pr-0">
                    <div class="flex flex-wrap mb-4">
                        <div class="w-full md:w-1/2 px-4 mb-6 md:mb-0">
                            <label class="block text-sm font-medium text-gray-600 mb-2" for="title">
                                Title
                            </label>
                            <input class="appearance-none block w-full  text-gray-500 rounded-sm py-2 px-3 leading-tight focus:outline-none focus:bg-white border border-gray-400 focus:border-gray-500" type="text" placeholder="Please fill in your Title" id="title">
                        </div>
                        <div class="w-full md:w-1/2 px-4 mb-6 md:mb-0">
                            <label class="block text-sm font-medium text-gray-600 mb-2" for="keywords">
                                Keywords
                            </label>
                            <input class="appearance-none block w-full text-gray-500 rounded-sm py-2 px-3 leading-tight focus:outline-none focus:bg-white border border-gray-400 focus:border-gray-500" type="text" placeholder="Please fill in your Keywords" id="keywords">
                        </div>
                    </div>

                    <div class="px-4 mb-4">
                        <label class="block text-sm font-medium text-gray-600 mb-2" for="description">
                            Description
                        </label>
                        <input class="appearance-none block w-full text-gray-500 rounded-sm py-2 px-3 leading-tight focus:outline-none focus:bg-white border border-gray-400 focus:border-gray-500" type="text" placeholder="Please fill in your Description" id="description">
                    </div>

                </div>

                <div class="flex flex-wrap border-b border-bg-gray-300 mx-4 py-4 mb-6 pt-0">
                    <h2 class="uppercase pr-4 text-gray-700 font-medium">Miscellaneous</h2>
                </div>

                <div class="pb-4 pt-0 pl-0 pr-0">
                    <div class="flex flex-wrap mb-4">
                        
                        <div class="w-full px-4 mb-6">
                            <label class="block text-sm font-medium text-gray-600 mb-2" for="client-max">
                                Client Max. No. of Items/Page
                            </label>
                            <input class="appearance-none block w-full  text-gray-500 rounded-sm py-2 px-3 leading-tight focus:outline-none focus:bg-white border border-gray-400 focus:border-gray-500" type="text" placeholder="Enter items/page" id="client-max">
                        </div>

                        <div class="w-full px-4 mb-4">
                            <label class="block text-sm font-medium text-gray-600 mb-2" for="enable_quick_pagination">
                                Quick Pagination
                            </label>

                            <div class="relative">
                                <select class="w-full rounded-sm appearance-none text-gray-500 border border-gray-400 px-4 pr-6 h-10 focus:outline-none focus:bg-white focus:border-gray-500" id="enable_quick_pagination">
                                    <option selected="selected">
                                        Disable Quick Pagination
                                    </option>
                                    <option selected="selected">
                                        Enable Quick Pagination
                                    </option>
                                </select>
                                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700"><svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>

                        <div class="p-4">
                            <button class="font-medium bg-blue-600 hover:bg-blue-700 outline-none focus:border-teal-900 text-white py-1 px-8 rounded-sm inline-flex">
                                Save
                            </button>
                        </div>

                    </div>
                </div>

            </div>
            
        </div>

    </div>

@endsection

@section('footer')
    @include('layouts.footer')
@endsection