@extends('layouts.blank') 
@section('header') 
    @include('layouts.header') 
@endsection 

@section('content')
    <div class="lg:mt-0 rounded shadow bg-white mb-6 overflow-hidden">
        <div class="flex p-4 border-b border-bg-gray-300">
            <h2 class="uppercase pr-4 text-gray-700 text-lg font-medium">
                AusPost Freight
            </h2>
        </div>
        <div class="flex flex-wrap pt-6 pb-4">
            <div class="w-full lg:w-1/4 text-gray-700 mb-4 px-4">
                <ul class="overflow-hidden">
                    <li>
                        <a class="bg-blue-400 border-b border-gray-300 block py-2 px-4 text-white hover:text-gray-100 text-sm font-medium" href="#">
                            Settings
                        </a>
                    </li>
                    <li>
                        <a class="bg-gray-200 border-b border-gray-300 block py-2 px-4 text-gray-700 hover:text-blue-600 text-sm font-medium" href="#">
                            Shipping Priority
                        </a>
                    </li>
                    <li>
                        <a class="bg-gray-200 border-b border-gray-300 block py-2 px-4 text-gray-700 hover:text-blue-600 text-sm font-medium" href="#">
                            Flat Rate
                        </a>
                    </li>
                    <li>
                        <a class="bg-gray-200 border-b border-gray-300 block py-2 px-4 text-gray-700 hover:text-blue-600 text-sm font-medium" href="#">
                            Redirects
                        </a>
                    </li>
                    <li>
                        <a class="bg-gray-200 border-b border-gray-300 block py-2 px-4 text-gray-700 hover:text-blue-600 text-sm font-medium" href="#">
                            Free Shipping
                        </a>
                    </li>
                    <li>
                        <a class="bg-gray-200 border-b border-gray-300 block py-2 px-4 text-gray-700 hover:text-blue-600 text-sm font-medium" href="#">
                            AusPost
                        </a>
                    </li>
                    <li>
                        <a class="bg-gray-200 border-b border-gray-300 block py-2 px-4 text-gray-700 hover:text-blue-600 text-sm font-medium" href="#">
                            AusPost Matrix
                        </a>
                    </li>
                    <li>
                        <a class="bg-gray-200 border-b border-gray-300 block py-2 px-4 text-gray-700 hover:text-blue-600 text-sm font-medium" href="#">
                            AusPost OEM Rate
                        </a>
                    </li>
                    <li>
                        <a class="bg-gray-200 border-b border-gray-300 block py-2 px-4 text-gray-700 hover:text-blue-600 text-sm font-medium" href="#">
                            International Freight
                        </a>
                    </li>
                    <li>
                        <a class="bg-gray-200 border-b border-gray-300 block py-2 px-4 text-gray-700 hover:text-blue-600 text-sm font-medium" href="#">
                            International Post Rate
                        </a>
                    </li>
                    <li>
                        <a class="bg-gray-200 border-b border-gray-300 block py-2 px-4 text-gray-700 hover:text-blue-600 text-sm font-medium" href="#">
                            International Zones
                        </a>
                    </li>
                    <li>
                        <a class="bg-gray-200 border-b border-gray-300 block py-2 px-4 text-gray-700 hover:text-blue-600 text-sm font-medium" href="#">
                            Pickup Settings
                        </a>
                    </li>
                    </li>
                        <a class="bg-gray-200 border-b border-gray-300 block py-2 px-4 text-gray-700 hover:text-blue-600 text-sm font-medium" href="#">
                            Pickup Choices
                        </a>
                    </li>
                    </li>
                        <a class="bg-gray-200 border-b border-gray-300 block py-2 px-4 text-gray-700 hover:text-blue-600 text-sm font-medium" href="#">
                            Priority Handling
                        </a>
                    </li>
                    </li>
                        <a class="bg-gray-200 border-b border-gray-300 block py-2 px-4 text-gray-700 hover:text-blue-600 text-sm font-medium" href="#">
                            Toll eParcel Settings
                        </a>
                    </li>
                    </li>
                        <a class="bg-gray-200 border-b border-gray-300 block py-2 px-4 text-gray-700 hover:text-blue-600 text-sm font-medium" href="#">
                            eParcel Rates
                        </a>
                    </li>
                    </li>
                        <a class="bg-gray-200 border-b border-gray-300 block py-2 px-4 text-gray-700 hover:text-blue-600 text-sm font-medium" href="#">
                            Import eParcel Rate
                        </a>
                    </li>
                    </li>
                        <a class="bg-gray-200 border-b border-gray-300 block py-2 px-4 text-gray-700 hover:text-blue-600 text-sm font-medium" href="#">
                            DHL Settings
                        </a>
                    </li>
                    </li>
                        <a class="bg-gray-200 border-b border-gray-300 block py-2 px-4 text-gray-700 hover:text-blue-600 text-sm font-medium" href="#">
                            DHL Rates
                        </a>
                    </li>
                    </li>
                        <a class="bg-gray-200 border-b border-gray-300 block py-2 px-4 text-gray-700 hover:text-blue-600 text-sm font-medium" href="#">
                            DHL Zones
                        </a>
                    </li>
                </ul>

            </div>
            <div class="w-full lg:w-3/4">
                <div class="flex flex-wrap border-b border-bg-gray-300 mx-4 py-4 mb-6 pt-0">
                    <h2 class="uppercase pr-4 text-gray-700 font-medium">Australia Post</h2>
                </div>

                <div class="pb-4 pt-0 pl-0 pr-0">
                    <div class="flex flex-wrap mb-4">
                        <div class="w-full px-4 mb-6">
                            <label class="block text-sm font-medium text-gray-600 mb-2">
                                Enabled
                            </label>
                            <div class="inline-fle">
                                <a href="#" class="bg-gray-100 hover:bg-gray-200 text-gray-700 hover:text-gray-600 px-4 py-1 border border-gray-400 border-r-0 text-xs">
                                    Yes
                                </a>
                                <a href="#" class="bg-blue-500 hover:bg-blue-500 text-gray-100 inline-block px-4 py-1 rounded-sm rounded-l-none text-xs">
                                    No
                                </a>
                            </div>
                        </div>
                        <div class="w-full px-4 mb-6">
                            <label class="block text-sm font-medium text-gray-600 mb-2" for="name">
                                Method Name<span class="text-red-400">*</span>
                            </label>
                            <input class="appearance-none block w-full  text-gray-500 rounded-sm py-2 px-3 leading-tight focus:outline-none focus:bg-white border border-gray-400 focus:border-gray-500" type="text" placeholder="Name to be shown on checkout page" id="name">
                        </div>

                        <div class="w-full px-4 mb-6">
                            <label class="block text-sm font-medium text-gray-600 mb-2" for="max-weight">
                                Max Weight <span class="text-red-400">*</span>
                            </label>
                            <input class="appearance-none block w-full  text-gray-500 rounded-sm py-2 px-3 leading-tight focus:outline-none focus:bg-white border border-gray-400 focus:border-gray-500" type="text" placeholder="Please add max weight supported." id="max-weight">
                        </div>

                        <div class="w-full p-4 pt-0">
                            <button class="text-sm bg-blue-600 hover:bg-blue-700 outline-none focus:border-teal-900 text-white py-2 px-5 rounded-sm inline-flex mb-6">
                                Save Settings
                            </button>
                            
                            <div class="w-full bg-blue-300 text-gray-700 text-sm px-4 py-3 rounded-sm mb-6">
                                If you would like to view the Australian post freight cost matrix, click below.
                            </div>

                            <button class="text-sm bg-blue-600 hover:bg-blue-700 outline-none focus:border-teal-900 text-white py-2 px-5 rounded-sm inline-flex mb-6">
                                View AustPost Matrix
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