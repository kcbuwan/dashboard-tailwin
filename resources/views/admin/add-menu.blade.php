@extends('layouts.blank') 
@section('header') 
    @include('layouts.header') 
@endsection 

@section('content')
    
    <div class="lg:mt-0 rounded shadow bg-white mb-6 overflow-hidden">
        <div class="flex border-b border-grey-light p-4 pt-3 pb-3 font-medium">
            <h2 class="uppercase pull-right pr-4 text-gray-700 font-medium">Add Menus</h2>
        </div>
                
        <div class="flex flex-wrap lg:mt-0 p-4">
            <div class="w-full lg:w-1/3 text-gray-700">
                <div class="lg:mt-0 lg:mr-6">
                    <div class="rounded-sm border border-solid border-gray-300 mb-1">
                        <div class="bg-gray-200 border-b border-grey-light flex justify-between items-center p-3 pt-2 pb-2">
                            <span class="font-medium pr-4">Pages</span>
                            <div class="flex-grow text-right text-gray-600">
                                <i class="fas fa-chevron-down"></i>
                            </div>
                        </div>
                        <div class="p-3">
                            <label class="flex text-gray-700 bg-gray-100 p-2 rounded mb-1">
                                <input class="inline-flex mr-2 mt-1" type="checkbox">
                                <span class="text-sm font-medium">
                                    Home
                                </span>
                            </label>
                            <label class="flex text-gray-700 bg-gray-100 p-2 rounded mb-1">
                                <input class="inline-flex mr-2 mt-1" type="checkbox">
                                <span class="text-sm font-medium">
                                    About Us
                                </span>
                            </label>
                            
                            <label class="flex text-gray-700 bg-gray-100 p-2 rounded mb-1">
                                <input class="inline-flex mr-2 mt-1" type="checkbox">
                                <span class="text-sm font-medium">
                                    Services
                                </span>
                            </label>
                        </div>
                        <div class="p-3 pt-0 text-right">
                            <button class="text-sm font-medium bg-blue-600 hover:bg-blue-700 outline-none focus:border-teal-900 text-white py-1 px-4 rounded-sm inline-flex">
                                Add to Menu
                            </button>
                        </div>
                    </div>

                    <div class="rounded-sm border border-solid border-gray-300 mb-1">
                        <div class="bg-gray-200 border-b border-grey-light flex justify-between items-center p-3 pt-2 pb-2">
                            <span class="font-medium pr-4">Blog</span>
                            <div class="flex-grow text-right text-gray-600">
                                <i class="fas fa-chevron-down"></i>
                            </div>
                        </div>
                    </div>

                    <div class="rounded-sm border border-solid border-gray-300 mb-1">
                        <div class="bg-gray-200 border-b border-grey-light flex justify-between items-center p-3 pt-2 pb-2">
                            <span class="font-medium pr-4">Categories</span>
                            <div class="flex-grow text-right text-gray-600">
                                <i class="fas fa-chevron-down"></i>
                            </div>
                        </div>
                    </div>

                    <div class="rounded-sm border border-solid border-gray-300 mb-1">
                        <div class="bg-gray-200 border-b border-grey-light flex justify-between items-center p-3 pt-2 pb-2">
                            <span class="font-medium pr-4">Custome Links</span>
                            <div class="flex-grow text-right text-gray-600">
                                <i class="fas fa-chevron-down"></i>
                            </div>
                        </div>
                        <div class="p-3">
                            <div class="w-full">
                                <label class="text-sm block tracking-wide text-gray-700 mb-2 font-medium" for="ulr">
                                    URL
                                </label>
                            </div>
                            <div class="w-full">
                                <input class="rounded-sm appearance-none block w-full text-gray-700 border border-gray-400 py-2 px-3 mb-2 focus:outline-none focus:bg-white focus:border-gray-500" type="text" placeholder="http://" id="url">
                                <label class="text-sm block tracking-wide text-gray-700 mb-2 font-medium" for="link-text">
                                    Link Text
                                </label>
                            </div>
                            <div class="w-full">
                                <input class="rounded-sm appearance-none block w-full text-gray-700 border border-gray-400 py-2 px-3 mb-2 focus:outline-none focus:bg-white focus:border-gray-500 mb-4" type="text" placeholder="Menu Item" id="link-text">
                                <label class="flex text-gray-700 mb-1">
                                    <input class="inline-flex mr-2 mt-1" type="checkbox">
                                    <span class="text-sm font-medium">
                                        Open in new window 
                                    </span>
                                </label>
                            </div>
                            <div class="p-3 pt-0 text-right">
                                <button class="text-sm font-medium bg-blue-600 hover:bg-blue-700 outline-none focus:border-teal-900 text-white py-1 px-4 rounded-sm inline-flex">
                                    Add to Menu
                                </button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="w-full lg:w-2/3">
                <div class="mb-3">
                    <label class="text-sm block tracking-wide text-gray-700 mb-2 font-medium" for="title">
                        Menu Name <span class="text-red-500 text-xs  italic">*</span>
                    </label>
                    <input class="rounded-sm appearance-none block w-full text-gray-700 border border-gray-400 py-2 px-3 mb-5  focus:outline-none focus:bg-white focus:border-gray-500" type="text" placeholder="Please fill in your Menu Name" id="title">
                    <ul class="list-reset mb-5">
                        <li class="flex text-gray-700 bg-gray-200 p-2 rounded mb-1">
                            <span class="text-sm font-medium">
                                Home
                            </span>
                            <div class="flex-grow text-right">
                                <a href="#" class="rounded bg-blue-400 hover:bg-blue-500 text-white text-xs font-bold uppercase p-1 px-2">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </div>
                        </li>
                        <li class="flex text-gray-700 bg-gray-200 p-2 rounded mb-1">
                            <span class="text-sm font-medium">
                                About Us
                            </span>
                            <div class="flex-grow text-right">
                                <a href="#" class="rounded bg-blue-400 hover:bg-blue-500 text-white text-xs font-bold uppercase p-1 px-2">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </div>
                        </li>
                        <li class="flex text-gray-700 bg-gray-200 p-2 rounded mb-1">
                            <span class="text-sm font-medium">
                                Services
                            </span>
                            <div class="flex-grow text-right">
                                <a href="#" class="rounded bg-blue-400 hover:bg-blue-500 text-white text-xs font-bold uppercase p-1 px-2">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </div>
                        </li>
                        <li class="flex text-gray-700 bg-gray-200 p-2 rounded mb-1">
                            <span class="text-sm font-medium">
                                Contact Us
                            </span>
                            <div class="flex-grow text-right">
                                <a href="#" class="rounded bg-blue-400 hover:bg-blue-500 text-white text-xs font-bold uppercase p-1 px-2 mr-2">
                                    <i class="fas fa-pen"></i>
                                </a>
                                <a href="#" class="rounded bg-blue-400 hover:bg-blue-500 text-white text-xs font-bold uppercase p-1 px-2">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="mb-3">
                    <label class="text-sm block tracking-wide text-gray-700 mb-2 font-medium" for="menu-limit">
                        Menu Limit <span class="text-red-500 text-xs italic">*</span>
                    </label>
                    <input class="rounded-sm appearance-none block w-full text-gray-700 border border-gray-400 py-2 px-3 mb-5 focus:outline-none focus:bg-white focus:border-gray-500" type="text" placeholder="Please fill in your Menu limit" id="menu-limit">
                </div>
                <div class="mb-5">
                    <span class="text-gray-700 text-sm"><strong>Note:</strong> For 'Mobile Menu' and 'Footer Menu',please set the menu limit to 0.</span>
                </div>
                
                <button class="font-medium bg-blue-600 hover:bg-blue-700 outline-none focus:border-teal-900 text-white py-1 px-8 rounded-sm inline-flex">
                    Save Menu
                </button>
            </div>
        </div>
    </div>

@endsection

@section('footer')
    @include('layouts.footer')
@endsection