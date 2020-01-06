@extends('layouts.blank') 
@section('header') 
    @include('layouts.header') 
@endsection 

@section('content')
        <div class="lg:mt-0 rounded shadow bg-white mb-6 overflow-h">
            <div class="flex p-4 pt-2 pb-2 border-b border-bg-gray-300">
                <h2 class="uppercase pull-right pr-4 text-gray-700 font-medium">
                    Edit Role Permissions
                </h2>
            </div>
            <div class="overflow-hidden overflow-x-auto">
                <div class="flex p-1 pt-3 pb-3 border-b border-bg-gray-300">
                    <div class="w-2/6 self-center px-2"></div>
                    <div class="w-1/6 self-center px-4">
                        <span class="text-gray-800 text-sm font-medium">Views</span>
                    </div>
                    <div class="w-1/6 self-center px-3">
                        <span class="text-gray-800 text-sm font-medium">Adds</span>
                    </div>
                    <div class="w-1/6 self-center px-3">
                        <span class="text-gray-800 text-sm font-medium">Edits</span>
                    </div>
                    <div class="w-1/6 self-center px-3">
                        <span class="text-gray-800 text-sm font-medium">Deletes</span>
                    </div>
                    <div class="w-1/6 self-center px-3">
                        <span class="text-gray-800 text-sm font-medium">Restores</span>
                    </div>
                </div>
                <div class="flex p-1 pt-3 pb-3">
                    <div class="w-full lg:w-2/6 self-center px-3 self-center">
                        <div class="items-center leading-none flex flex-wrap">
                            <span class="text-gray-800 text-sm font-medium flex-auto self-center block text-center lg:text-left mb-4 lg:mb-0">Admin</span>
                            <span class="flex-auto lg:text-right inline-block self-center lg:pr-6">
                                <a href="#" class="bg-blue-500 hover:bg-blue-700 text-white px-8 py-2 rounded-sm inline-block text-xs">All</a>
                            </span>
                        </div>
                    </div>
                    <div class="w-full lg:w-1/6 px-4 self-center">
                        <div class="inline-flex">
                            <a href="#" class="bg-gray-100 hover:bg-gray-200 text-gray-700 hover:text-gray-600 px-4 py-1 border border-gray-400 border-r-0 text-xs">
                                Yes
                            </a>
                            <a href="#" class="bg-blue-500 hover:bg-blue-500 text-gray-100 inline-block px-4 py-1 rounded-sm rounded-l-none text-xs">
                                No
                            </a>
                        </div>
                    </div>
                    <div class="w-full lg:w-1/6 self-center px-3">
                        <div class="inline-flex">
                            <a href="#" class="bg-gray-100 hover:bg-gray-200 text-gray-700 hover:text-gray-600 px-4 py-1 border border-gray-400 border-r-0 text-xs">
                                Yes
                            </a>
                            <a href="#" class="bg-blue-500 hover:bg-blue-500 text-gray-100 inline-block px-4 py-1 rounded-sm rounded-l-none text-xs">
                                No
                            </a>
                        </div>
                    </div>
                    <div class="w-full lg:w-1/6 self-center px-3">
                        <div class="inline-flex">
                            <a href="#" class="bg-gray-100 hover:bg-gray-200 text-gray-700 hover:text-gray-600 px-4 py-1 border border-gray-400 border-r-0 text-xs">
                                Yes
                            </a>
                            <a href="#" class="bg-blue-500 hover:bg-blue-500 text-gray-100 inline-block px-4 py-1 rounded-sm rounded-l-none text-xs">
                                No
                            </a>
                        </div>
                    </div>
                    <div class="w-full lg:w-1/6 self-center px-3">
                        <div class="inline-flex">
                            <a href="#" class="bg-gray-100 hover:bg-gray-200 text-gray-700 hover:text-gray-600 px-4 py-1 border border-gray-400 border-r-0 text-xs">
                                Yes
                            </a>
                            <a href="#" class="bg-blue-500 hover:bg-blue-500 text-gray-100 inline-block px-4 py-1 rounded-sm rounded-l-none text-xs">
                                No
                            </a>
                        </div>
                    </div>
                    <div class="w-full lg:w-1/6 self-center px-3">
                        <div class="inline-flex">
                            <a href="#" class="bg-gray-100 hover:bg-gray-200 text-gray-700 hover:text-gray-600 px-4 py-1 border border-gray-400 border-r-0 text-xs">
                                Yes
                            </a>
                            <a href="#" class="bg-blue-500 hover:bg-blue-500 text-gray-100 inline-block px-4 py-1 rounded-sm rounded-l-none text-xs">
                                No
                            </a>
                        </div>
                    </div>
                </div>
                <div class="flex p-1 pt-3 pb-3 bg-gray-100">
                    <div class="w-full lg:w-2/6 self-center px-3 self-center">
                        <div class="items-center leading-none flex flex-wrap">
                            <span class="text-gray-800 text-sm font-medium flex-auto self-center block text-center lg:text-left mb-4 lg:mb-0">Settings</span>
                            <span class="flex-auto lg:text-right inline-block self-center lg:pr-6">
                                <a href="#" class="bg-blue-500 hover:bg-blue-700 text-white px-8 py-2 rounded-sm inline-block text-xs">All</a>
                            </span>
                        </div>
                    </div>
                    <div class="w-full lg:w-1/6 px-4 self-center">
                        <div class="inline-flex">
                            <a href="#" class="bg-gray-100 hover:bg-gray-200 text-gray-700 hover:text-gray-600 px-4 py-1 border border-gray-400 border-r-0 text-xs">
                                Yes
                            </a>
                            <a href="#" class="bg-blue-500 hover:bg-blue-500 text-gray-100 inline-block px-4 py-1 rounded-sm rounded-l-none text-xs">
                                No
                            </a>
                        </div>
                    </div>
                    <div class="w-full lg:w-1/6 self-center px-3">
                        <div class="inline-flex">
                            <a href="#" class="bg-gray-100 hover:bg-gray-200 text-gray-700 hover:text-gray-600 px-4 py-1 border border-gray-400 border-r-0 text-xs">
                                Yes
                            </a>
                            <a href="#" class="bg-blue-500 hover:bg-blue-500 text-gray-100 inline-block px-4 py-1 rounded-sm rounded-l-none text-xs">
                                No
                            </a>
                        </div>
                    </div>
                    <div class="w-full lg:w-1/6 self-center px-3">
                        <div class="inline-flex">
                            <a href="#" class="bg-gray-100 hover:bg-gray-200 text-gray-700 hover:text-gray-600 px-4 py-1 border border-gray-400 border-r-0 text-xs">
                                Yes
                            </a>
                            <a href="#" class="bg-blue-500 hover:bg-blue-500 text-gray-100 inline-block px-4 py-1 rounded-sm rounded-l-none text-xs">
                                No
                            </a>
                        </div>
                    </div>
                    <div class="w-full lg:w-1/6 self-center px-3">
                        <div class="inline-flex">
                            <a href="#" class="bg-gray-100 hover:bg-gray-200 text-gray-700 hover:text-gray-600 px-4 py-1 border border-gray-400 border-r-0 text-xs">
                                Yes
                            </a>
                            <a href="#" class="bg-blue-500 hover:bg-blue-500 text-gray-100 inline-block px-4 py-1 rounded-sm rounded-l-none text-xs">
                                No
                            </a>
                        </div>
                    </div>
                    <div class="w-full lg:w-1/6 self-center px-3">
                        <div class="inline-flex">
                            <a href="#" class="bg-gray-100 hover:bg-gray-200 text-gray-700 hover:text-gray-600 px-4 py-1 border border-gray-400 border-r-0 text-xs">
                                Yes
                            </a>
                            <a href="#" class="bg-blue-500 hover:bg-blue-500 text-gray-100 inline-block px-4 py-1 rounded-sm rounded-l-none text-xs">
                                No
                            </a>
                        </div>
                    </div>
                </div>
                <div class="flex p-1 pt-3 pb-3">
                    <div class="w-full lg:w-2/6 self-center px-3 self-center">
                        <div class="items-center leading-none flex flex-wrap">
                            <span class="text-gray-800 text-sm font-medium flex-auto self-center block text-center lg:text-left mb-4 lg:mb-0">Warehouses</span>
                            <span class="flex-auto lg:text-right inline-block self-center lg:pr-6">
                                <a href="#" class="bg-blue-500 hover:bg-blue-700 text-white px-8 py-2 rounded-sm inline-block text-xs">All</a>
                            </span>
                        </div>
                    </div>
                    <div class="w-full lg:w-1/6 px-4 self-center">
                        <div class="inline-flex">
                            <a href="#" class="bg-gray-100 hover:bg-gray-200 text-gray-700 hover:text-gray-600 px-4 py-1 border border-gray-400 border-r-0 text-xs">
                                Yes
                            </a>
                            <a href="#" class="bg-blue-500 hover:bg-blue-500 text-gray-100 inline-block px-4 py-1 rounded-sm rounded-l-none text-xs">
                                No
                            </a>
                        </div>
                    </div>
                    <div class="w-full lg:w-1/6 self-center px-3">
                        <div class="inline-flex">
                            <a href="#" class="bg-gray-100 hover:bg-gray-200 text-gray-700 hover:text-gray-600 px-4 py-1 border border-gray-400 border-r-0 text-xs">
                                Yes
                            </a>
                            <a href="#" class="bg-blue-500 hover:bg-blue-500 text-gray-100 inline-block px-4 py-1 rounded-sm rounded-l-none text-xs">
                                No
                            </a>
                        </div>
                    </div>
                    <div class="w-full lg:w-1/6 self-center px-3">
                        <div class="inline-flex">
                            <a href="#" class="bg-gray-100 hover:bg-gray-200 text-gray-700 hover:text-gray-600 px-4 py-1 border border-gray-400 border-r-0 text-xs">
                                Yes
                            </a>
                            <a href="#" class="bg-blue-500 hover:bg-blue-500 text-gray-100 inline-block px-4 py-1 rounded-sm rounded-l-none text-xs">
                                No
                            </a>
                        </div>
                    </div>
                    <div class="w-full lg:w-1/6 self-center px-3">
                        <div class="inline-flex">
                            <a href="#" class="bg-gray-100 hover:bg-gray-200 text-gray-700 hover:text-gray-600 px-4 py-1 border border-gray-400 border-r-0 text-xs">
                                Yes
                            </a>
                            <a href="#" class="bg-blue-500 hover:bg-blue-500 text-gray-100 inline-block px-4 py-1 rounded-sm rounded-l-none text-xs">
                                No
                            </a>
                        </div>
                    </div>
                    <div class="w-full lg:w-1/6 self-center px-3">
                        <div class="inline-flex">
                            <a href="#" class="bg-gray-100 hover:bg-gray-200 text-gray-700 hover:text-gray-600 px-4 py-1 border border-gray-400 border-r-0 text-xs">
                                Yes
                            </a>
                            <a href="#" class="bg-blue-500 hover:bg-blue-500 text-gray-100 inline-block px-4 py-1 rounded-sm rounded-l-none text-xs">
                                No
                            </a>
                        </div>
                    </div>
                </div>
                <div class="flex p-1 pt-3 pb-3 bg-gray-100">
                    <div class="w-full lg:w-2/6 self-center px-3 self-center">
                        <div class="items-center leading-none flex flex-wrap">
                            <span class="text-gray-800 text-sm font-medium flex-auto self-center block text-center lg:text-left mb-4 lg:mb-0">Users</span>
                            <span class="flex-auto lg:text-right inline-block self-center lg:pr-6">
                                <a href="#" class="bg-blue-500 hover:bg-blue-700 text-white px-8 py-2 rounded-sm inline-block text-xs">All</a>
                            </span>
                        </div>
                    </div>
                    <div class="w-full lg:w-1/6 px-4 self-center">
                        <div class="inline-flex">
                            <a href="#" class="bg-gray-100 hover:bg-gray-200 text-gray-700 hover:text-gray-600 px-4 py-1 border border-gray-400 border-r-0 text-xs">
                                Yes
                            </a>
                            <a href="#" class="bg-blue-500 hover:bg-blue-500 text-gray-100 inline-block px-4 py-1 rounded-sm rounded-l-none text-xs">
                                No
                            </a>
                        </div>
                    </div>
                    <div class="w-full lg:w-1/6 self-center px-3">
                        <div class="inline-flex">
                            <a href="#" class="bg-gray-100 hover:bg-gray-200 text-gray-700 hover:text-gray-600 px-4 py-1 border border-gray-400 border-r-0 text-xs">
                                Yes
                            </a>
                            <a href="#" class="bg-blue-500 hover:bg-blue-500 text-gray-100 inline-block px-4 py-1 rounded-sm rounded-l-none text-xs">
                                No
                            </a>
                        </div>
                    </div>
                    <div class="w-full lg:w-1/6 self-center px-3">
                        <div class="inline-flex">
                            <a href="#" class="bg-gray-100 hover:bg-gray-200 text-gray-700 hover:text-gray-600 px-4 py-1 border border-gray-400 border-r-0 text-xs">
                                Yes
                            </a>
                            <a href="#" class="bg-blue-500 hover:bg-blue-500 text-gray-100 inline-block px-4 py-1 rounded-sm rounded-l-none text-xs">
                                No
                            </a>
                        </div>
                    </div>
                    <div class="w-full lg:w-1/6 self-center px-3">
                        <div class="inline-flex">
                            <a href="#" class="bg-gray-100 hover:bg-gray-200 text-gray-700 hover:text-gray-600 px-4 py-1 border border-gray-400 border-r-0 text-xs">
                                Yes
                            </a>
                            <a href="#" class="bg-blue-500 hover:bg-blue-500 text-gray-100 inline-block px-4 py-1 rounded-sm rounded-l-none text-xs">
                                No
                            </a>
                        </div>
                    </div>
                    <div class="w-full lg:w-1/6 self-center px-3">
                        <div class="inline-flex">
                            <a href="#" class="bg-gray-100 hover:bg-gray-200 text-gray-700 hover:text-gray-600 px-4 py-1 border border-gray-400 border-r-0 text-xs">
                                Yes
                            </a>
                            <a href="#" class="bg-blue-500 hover:bg-blue-500 text-gray-100 inline-block px-4 py-1 rounded-sm rounded-l-none text-xs">
                                No
                            </a>
                        </div>
                    </div>
                </div>
                <div class="flex p-1 pt-3 pb-3">
                    <div class="w-full lg:w-2/6 self-center px-3 self-center">
                        <div class="items-center leading-none flex flex-wrap">
                            <span class="text-gray-800 text-sm font-medium flex-auto self-center block text-center lg:text-left mb-4 lg:mb-0">Roles</span>
                            <span class="flex-auto lg:text-right inline-block self-center lg:pr-6">
                                <a href="#" class="bg-blue-500 hover:bg-blue-700 text-white px-8 py-2 rounded-sm inline-block text-xs">All</a>
                            </span>
                        </div>
                    </div>
                    <div class="w-full lg:w-1/6 px-4 self-center">
                        <div class="inline-flex">
                            <a href="#" class="bg-gray-100 hover:bg-gray-200 text-gray-700 hover:text-gray-600 px-4 py-1 border border-gray-400 border-r-0 text-xs">
                                Yes
                            </a>
                            <a href="#" class="bg-blue-500 hover:bg-blue-500 text-gray-100 inline-block px-4 py-1 rounded-sm rounded-l-none text-xs">
                                No
                            </a>
                        </div>
                    </div>
                    <div class="w-full lg:w-1/6 self-center px-3">
                        <div class="inline-flex">
                            <a href="#" class="bg-gray-100 hover:bg-gray-200 text-gray-700 hover:text-gray-600 px-4 py-1 border border-gray-400 border-r-0 text-xs">
                                Yes
                            </a>
                            <a href="#" class="bg-blue-500 hover:bg-blue-500 text-gray-100 inline-block px-4 py-1 rounded-sm rounded-l-none text-xs">
                                No
                            </a>
                        </div>
                    </div>
                    <div class="w-full lg:w-1/6 self-center px-3">
                        <div class="inline-flex">
                            <a href="#" class="bg-gray-100 hover:bg-gray-200 text-gray-700 hover:text-gray-600 px-4 py-1 border border-gray-400 border-r-0 text-xs">
                                Yes
                            </a>
                            <a href="#" class="bg-blue-500 hover:bg-blue-500 text-gray-100 inline-block px-4 py-1 rounded-sm rounded-l-none text-xs">
                                No
                            </a>
                        </div>
                    </div>
                    <div class="w-full lg:w-1/6 self-center px-3">
                        <div class="inline-flex">
                            <a href="#" class="bg-gray-100 hover:bg-gray-200 text-gray-700 hover:text-gray-600 px-4 py-1 border border-gray-400 border-r-0 text-xs">
                                Yes
                            </a>
                            <a href="#" class="bg-blue-500 hover:bg-blue-500 text-gray-100 inline-block px-4 py-1 rounded-sm rounded-l-none text-xs">
                                No
                            </a>
                        </div>
                    </div>
                    <div class="w-full lg:w-1/6 self-center px-3">
                        <div class="inline-flex">
                            <a href="#" class="bg-gray-100 hover:bg-gray-200 text-gray-700 hover:text-gray-600 px-4 py-1 border border-gray-400 border-r-0 text-xs">
                                Yes
                            </a>
                            <a href="#" class="bg-blue-500 hover:bg-blue-500 text-gray-100 inline-block px-4 py-1 rounded-sm rounded-l-none text-xs">
                                No
                            </a>
                        </div>
                    </div>
                </div>
                <div class="flex p-1 pt-3 pb-3 bg-gray-100">
                    <div class="w-full lg:w-2/6 self-center px-3 self-center">
                        <div class="items-center leading-none flex flex-wrap">
                            <span class="text-gray-800 text-sm font-medium flex-auto self-center block text-center lg:text-left mb-4 lg:mb-0">Comments</span>
                            <span class="flex-auto lg:text-right inline-block self-center lg:pr-6">
                                <a href="#" class="bg-blue-500 hover:bg-blue-700 text-white px-8 py-2 rounded-sm inline-block text-xs">All</a>
                            </span>
                        </div>
                    </div>
                    <div class="w-full lg:w-1/6 px-4 self-center">
                        <div class="inline-flex">
                            <a href="#" class="bg-gray-100 hover:bg-gray-200 text-gray-700 hover:text-gray-600 px-4 py-1 border border-gray-400 border-r-0 text-xs">
                                Yes
                            </a>
                            <a href="#" class="bg-blue-500 hover:bg-blue-500 text-gray-100 inline-block px-4 py-1 rounded-sm rounded-l-none text-xs">
                                No
                            </a>
                        </div>
                    </div>
                    <div class="w-full lg:w-1/6 self-center px-3">
                        <div class="inline-flex">
                            <a href="#" class="bg-gray-100 hover:bg-gray-200 text-gray-700 hover:text-gray-600 px-4 py-1 border border-gray-400 border-r-0 text-xs">
                                Yes
                            </a>
                            <a href="#" class="bg-blue-500 hover:bg-blue-500 text-gray-100 inline-block px-4 py-1 rounded-sm rounded-l-none text-xs">
                                No
                            </a>
                        </div>
                    </div>
                    <div class="w-full lg:w-1/6 self-center px-3">
                        <div class="inline-flex">
                            <a href="#" class="bg-gray-100 hover:bg-gray-200 text-gray-700 hover:text-gray-600 px-4 py-1 border border-gray-400 border-r-0 text-xs">
                                Yes
                            </a>
                            <a href="#" class="bg-blue-500 hover:bg-blue-500 text-gray-100 inline-block px-4 py-1 rounded-sm rounded-l-none text-xs">
                                No
                            </a>
                        </div>
                    </div>
                    <div class="w-full lg:w-1/6 self-center px-3">
                        <div class="inline-flex">
                            <a href="#" class="bg-gray-100 hover:bg-gray-200 text-gray-700 hover:text-gray-600 px-4 py-1 border border-gray-400 border-r-0 text-xs">
                                Yes
                            </a>
                            <a href="#" class="bg-blue-500 hover:bg-blue-500 text-gray-100 inline-block px-4 py-1 rounded-sm rounded-l-none text-xs">
                                No
                            </a>
                        </div>
                    </div>
                    <div class="w-full lg:w-1/6 self-center px-3">
                        <div class="inline-flex">
                            <a href="#" class="bg-gray-100 hover:bg-gray-200 text-gray-700 hover:text-gray-600 px-4 py-1 border border-gray-400 border-r-0 text-xs">
                                Yes
                            </a>
                            <a href="#" class="bg-blue-500 hover:bg-blue-500 text-gray-100 inline-block px-4 py-1 rounded-sm rounded-l-none text-xs">
                                No
                            </a>
                        </div>
                    </div>
                </div>
                <div class="flex p-1 pt-3 pb-3">
                    <div class="w-full lg:w-2/6 self-center px-3 self-center">
                        <div class="items-center leading-none flex flex-wrap">
                            <span class="text-gray-800 text-sm font-medium flex-auto self-center block text-center lg:text-left mb-4 lg:mb-0">Forms</span>
                            <span class="flex-auto lg:text-right inline-block self-center lg:pr-6">
                                <a href="#" class="bg-blue-500 hover:bg-blue-700 text-white px-8 py-2 rounded-sm inline-block text-xs">All</a>
                            </span>
                        </div>
                    </div>
                    <div class="w-full lg:w-1/6 px-4 self-center">
                        <div class="inline-flex">
                            <a href="#" class="bg-gray-100 hover:bg-gray-200 text-gray-700 hover:text-gray-600 px-4 py-1 border border-gray-400 border-r-0 text-xs">
                                Yes
                            </a>
                            <a href="#" class="bg-blue-500 hover:bg-blue-500 text-gray-100 inline-block px-4 py-1 rounded-sm rounded-l-none text-xs">
                                No
                            </a>
                        </div>
                    </div>
                    <div class="w-full lg:w-1/6 self-center px-3">
                        <div class="inline-flex">
                            <a href="#" class="bg-gray-100 hover:bg-gray-200 text-gray-700 hover:text-gray-600 px-4 py-1 border border-gray-400 border-r-0 text-xs">
                                Yes
                            </a>
                            <a href="#" class="bg-blue-500 hover:bg-blue-500 text-gray-100 inline-block px-4 py-1 rounded-sm rounded-l-none text-xs">
                                No
                            </a>
                        </div>
                    </div>
                    <div class="w-full lg:w-1/6 self-center px-3">
                        <div class="inline-flex">
                            <a href="#" class="bg-gray-100 hover:bg-gray-200 text-gray-700 hover:text-gray-600 px-4 py-1 border border-gray-400 border-r-0 text-xs">
                                Yes
                            </a>
                            <a href="#" class="bg-blue-500 hover:bg-blue-500 text-gray-100 inline-block px-4 py-1 rounded-sm rounded-l-none text-xs">
                                No
                            </a>
                        </div>
                    </div>
                    <div class="w-full lg:w-1/6 self-center px-3">
                        <div class="inline-flex">
                            <a href="#" class="bg-gray-100 hover:bg-gray-200 text-gray-700 hover:text-gray-600 px-4 py-1 border border-gray-400 border-r-0 text-xs">
                                Yes
                            </a>
                            <a href="#" class="bg-blue-500 hover:bg-blue-500 text-gray-100 inline-block px-4 py-1 rounded-sm rounded-l-none text-xs">
                                No
                            </a>
                        </div>
                    </div>
                    <div class="w-full lg:w-1/6 self-center px-3">
                        <div class="inline-flex">
                            <a href="#" class="bg-gray-100 hover:bg-gray-200 text-gray-700 hover:text-gray-600 px-4 py-1 border border-gray-400 border-r-0 text-xs">
                                Yes
                            </a>
                            <a href="#" class="bg-blue-500 hover:bg-blue-500 text-gray-100 inline-block px-4 py-1 rounded-sm rounded-l-none text-xs">
                                No
                            </a>
                        </div>
                    </div>
                </div>
                <div class="flex p-1 pt-3 pb-3 bg-gray-100">
                    <div class="w-full lg:w-2/6 self-center px-3 self-center">
                        <div class="items-center leading-none flex flex-wrap">
                            <span class="text-gray-800 text-sm font-medium flex-auto self-center block text-center lg:text-left mb-4 lg:mb-0">Appearances</span>
                            <span class="flex-auto lg:text-right inline-block self-center lg:pr-6">
                                <a href="#" class="bg-blue-500 hover:bg-blue-700 text-white px-8 py-2 rounded-sm inline-block text-xs">All</a>
                            </span>
                        </div>
                    </div>
                    <div class="w-full lg:w-1/6 px-4 self-center">
                        <div class="inline-flex">
                            <a href="#" class="bg-gray-100 hover:bg-gray-200 text-gray-700 hover:text-gray-600 px-4 py-1 border border-gray-400 border-r-0 text-xs">
                                Yes
                            </a>
                            <a href="#" class="bg-blue-500 hover:bg-blue-500 text-gray-100 inline-block px-4 py-1 rounded-sm rounded-l-none text-xs">
                                No
                            </a>
                        </div>
                    </div>
                    <div class="w-full lg:w-1/6 self-center px-3">
                        <div class="inline-flex">
                            <a href="#" class="bg-gray-100 hover:bg-gray-200 text-gray-700 hover:text-gray-600 px-4 py-1 border border-gray-400 border-r-0 text-xs">
                                Yes
                            </a>
                            <a href="#" class="bg-blue-500 hover:bg-blue-500 text-gray-100 inline-block px-4 py-1 rounded-sm rounded-l-none text-xs">
                                No
                            </a>
                        </div>
                    </div>
                    <div class="w-full lg:w-1/6 self-center px-3">
                        <div class="inline-flex">
                            <a href="#" class="bg-gray-100 hover:bg-gray-200 text-gray-700 hover:text-gray-600 px-4 py-1 border border-gray-400 border-r-0 text-xs">
                                Yes
                            </a>
                            <a href="#" class="bg-blue-500 hover:bg-blue-500 text-gray-100 inline-block px-4 py-1 rounded-sm rounded-l-none text-xs">
                                No
                            </a>
                        </div>
                    </div>
                    <div class="w-full lg:w-1/6 self-center px-3">
                        <div class="inline-flex">
                            <a href="#" class="bg-gray-100 hover:bg-gray-200 text-gray-700 hover:text-gray-600 px-4 py-1 border border-gray-400 border-r-0 text-xs">
                                Yes
                            </a>
                            <a href="#" class="bg-blue-500 hover:bg-blue-500 text-gray-100 inline-block px-4 py-1 rounded-sm rounded-l-none text-xs">
                                No
                            </a>
                        </div>
                    </div>
                    <div class="w-full lg:w-1/6 self-center px-3">
                        <div class="inline-flex">
                            <a href="#" class="bg-gray-100 hover:bg-gray-200 text-gray-700 hover:text-gray-600 px-4 py-1 border border-gray-400 border-r-0 text-xs">
                                Yes
                            </a>
                            <a href="#" class="bg-blue-500 hover:bg-blue-500 text-gray-100 inline-block px-4 py-1 rounded-sm rounded-l-none text-xs">
                                No
                            </a>
                        </div>
                    </div>
                </div>
                <div class="flex p-1 pt-3 pb-3">
                    <div class="w-full lg:w-2/6 self-center px-3 self-center">
                        <div class="items-center leading-none flex flex-wrap">
                            <span class="text-gray-800 text-sm font-medium flex-auto self-center block text-center lg:text-left mb-4 lg:mb-0">Media Managers</span>
                            <span class="flex-auto lg:text-right inline-block self-center lg:pr-6">
                                <a href="#" class="bg-blue-500 hover:bg-blue-700 text-white px-8 py-2 rounded-sm inline-block text-xs">All</a>
                            </span>
                        </div>
                    </div>
                    <div class="w-full lg:w-1/6 px-4 self-center">
                        <div class="inline-flex">
                            <a href="#" class="bg-gray-100 hover:bg-gray-200 text-gray-700 hover:text-gray-600 px-4 py-1 border border-gray-400 border-r-0 text-xs">
                                Yes
                            </a>
                            <a href="#" class="bg-blue-500 hover:bg-blue-500 text-gray-100 inline-block px-4 py-1 rounded-sm rounded-l-none text-xs">
                                No
                            </a>
                        </div>
                    </div>
                    <div class="w-full lg:w-1/6 self-center px-3">
                        <div class="inline-flex">
                            <a href="#" class="bg-gray-100 hover:bg-gray-200 text-gray-700 hover:text-gray-600 px-4 py-1 border border-gray-400 border-r-0 text-xs">
                                Yes
                            </a>
                            <a href="#" class="bg-blue-500 hover:bg-blue-500 text-gray-100 inline-block px-4 py-1 rounded-sm rounded-l-none text-xs">
                                No
                            </a>
                        </div>
                    </div>
                    <div class="w-full lg:w-1/6 self-center px-3">
                        <div class="inline-flex">
                            <a href="#" class="bg-gray-100 hover:bg-gray-200 text-gray-700 hover:text-gray-600 px-4 py-1 border border-gray-400 border-r-0 text-xs">
                                Yes
                            </a>
                            <a href="#" class="bg-blue-500 hover:bg-blue-500 text-gray-100 inline-block px-4 py-1 rounded-sm rounded-l-none text-xs">
                                No
                            </a>
                        </div>
                    </div>
                    <div class="w-full lg:w-1/6 self-center px-3">
                        <div class="inline-flex">
                            <a href="#" class="bg-gray-100 hover:bg-gray-200 text-gray-700 hover:text-gray-600 px-4 py-1 border border-gray-400 border-r-0 text-xs">
                                Yes
                            </a>
                            <a href="#" class="bg-blue-500 hover:bg-blue-500 text-gray-100 inline-block px-4 py-1 rounded-sm rounded-l-none text-xs">
                                No
                            </a>
                        </div>
                    </div>
                    <div class="w-full lg:w-1/6 self-center px-3">
                        <div class="inline-flex">
                            <a href="#" class="bg-gray-100 hover:bg-gray-200 text-gray-700 hover:text-gray-600 px-4 py-1 border border-gray-400 border-r-0 text-xs">
                                Yes
                            </a>
                            <a href="#" class="bg-blue-500 hover:bg-blue-500 text-gray-100 inline-block px-4 py-1 rounded-sm rounded-l-none text-xs">
                                No
                            </a>
                        </div>
                    </div>
                </div>
                <div class="flex p-1 pt-3 pb-3 bg-gray-100">
                    <div class="w-full lg:w-2/6 self-center px-3 self-center">
                        <div class="items-center leading-none flex flex-wrap">
                            <span class="text-gray-800 text-sm font-medium flex-auto self-center block text-center lg:text-left mb-4 lg:mb-0">Snippets</span>
                            <span class="flex-auto lg:text-right inline-block self-center lg:pr-6">
                                <a href="#" class="bg-blue-500 hover:bg-blue-700 text-white px-8 py-2 rounded-sm inline-block text-xs">All</a>
                            </span>
                        </div>
                    </div>
                    <div class="w-full lg:w-1/6 px-4 self-center">
                        <div class="inline-flex">
                            <a href="#" class="bg-gray-100 hover:bg-gray-200 text-gray-700 hover:text-gray-600 px-4 py-1 border border-gray-400 border-r-0 text-xs">
                                Yes
                            </a>
                            <a href="#" class="bg-blue-500 hover:bg-blue-500 text-gray-100 inline-block px-4 py-1 rounded-sm rounded-l-none text-xs">
                                No
                            </a>
                        </div>
                    </div>
                    <div class="w-full lg:w-1/6 self-center px-3">
                        <div class="inline-flex">
                            <a href="#" class="bg-gray-100 hover:bg-gray-200 text-gray-700 hover:text-gray-600 px-4 py-1 border border-gray-400 border-r-0 text-xs">
                                Yes
                            </a>
                            <a href="#" class="bg-blue-500 hover:bg-blue-500 text-gray-100 inline-block px-4 py-1 rounded-sm rounded-l-none text-xs">
                                No
                            </a>
                        </div>
                    </div>
                    <div class="w-full lg:w-1/6 self-center px-3">
                        <div class="inline-flex">
                            <a href="#" class="bg-gray-100 hover:bg-gray-200 text-gray-700 hover:text-gray-600 px-4 py-1 border border-gray-400 border-r-0 text-xs">
                                Yes
                            </a>
                            <a href="#" class="bg-blue-500 hover:bg-blue-500 text-gray-100 inline-block px-4 py-1 rounded-sm rounded-l-none text-xs">
                                No
                            </a>
                        </div>
                    </div>
                    <div class="w-full lg:w-1/6 self-center px-3">
                        <div class="inline-flex">
                            <a href="#" class="bg-gray-100 hover:bg-gray-200 text-gray-700 hover:text-gray-600 px-4 py-1 border border-gray-400 border-r-0 text-xs">
                                Yes
                            </a>
                            <a href="#" class="bg-blue-500 hover:bg-blue-500 text-gray-100 inline-block px-4 py-1 rounded-sm rounded-l-none text-xs">
                                No
                            </a>
                        </div>
                    </div>
                    <div class="w-full lg:w-1/6 self-center px-3">
                        <div class="inline-flex">
                            <a href="#" class="bg-gray-100 hover:bg-gray-200 text-gray-700 hover:text-gray-600 px-4 py-1 border border-gray-400 border-r-0 text-xs">
                                Yes
                            </a>
                            <a href="#" class="bg-blue-500 hover:bg-blue-500 text-gray-100 inline-block px-4 py-1 rounded-sm rounded-l-none text-xs">
                                No
                            </a>
                        </div>
                    </div>
                </div>
                <div class="flex p-1 pt-3 pb-3">
                    <div class="w-full lg:w-2/6 self-center px-3 self-center">
                        <div class="items-center leading-none flex flex-wrap">
                            <span class="text-gray-800 text-sm font-medium flex-auto self-center block text-center lg:text-left mb-4 lg:mb-0">Generals</span>
                            <span class="flex-auto lg:text-right inline-block self-center lg:pr-6">
                                <a href="#" class="bg-blue-500 hover:bg-blue-700 text-white px-8 py-2 rounded-sm inline-block text-xs">All</a>
                            </span>
                        </div>
                    </div>
                    <div class="w-full lg:w-1/6 px-4 self-center">
                        <div class="inline-flex">
                            <a href="#" class="bg-gray-100 hover:bg-gray-200 text-gray-700 hover:text-gray-600 px-4 py-1 border border-gray-400 border-r-0 text-xs">
                                Yes
                            </a>
                            <a href="#" class="bg-blue-500 hover:bg-blue-500 text-gray-100 inline-block px-4 py-1 rounded-sm rounded-l-none text-xs">
                                No
                            </a>
                        </div>
                    </div>
                    <div class="w-full lg:w-1/6 self-center px-3">
                        <div class="inline-flex">
                            <a href="#" class="bg-gray-100 hover:bg-gray-200 text-gray-700 hover:text-gray-600 px-4 py-1 border border-gray-400 border-r-0 text-xs">
                                Yes
                            </a>
                            <a href="#" class="bg-blue-500 hover:bg-blue-500 text-gray-100 inline-block px-4 py-1 rounded-sm rounded-l-none text-xs">
                                No
                            </a>
                        </div>
                    </div>
                    <div class="w-full lg:w-1/6 self-center px-3">
                        <div class="inline-flex">
                            <a href="#" class="bg-gray-100 hover:bg-gray-200 text-gray-700 hover:text-gray-600 px-4 py-1 border border-gray-400 border-r-0 text-xs">
                                Yes
                            </a>
                            <a href="#" class="bg-blue-500 hover:bg-blue-500 text-gray-100 inline-block px-4 py-1 rounded-sm rounded-l-none text-xs">
                                No
                            </a>
                        </div>
                    </div>
                    <div class="w-full lg:w-1/6 self-center px-3">
                        <div class="inline-flex">
                            <a href="#" class="bg-gray-100 hover:bg-gray-200 text-gray-700 hover:text-gray-600 px-4 py-1 border border-gray-400 border-r-0 text-xs">
                                Yes
                            </a>
                            <a href="#" class="bg-blue-500 hover:bg-blue-500 text-gray-100 inline-block px-4 py-1 rounded-sm rounded-l-none text-xs">
                                No
                            </a>
                        </div>
                    </div>
                    <div class="w-full lg:w-1/6 self-center px-3">
                        <div class="inline-flex">
                            <a href="#" class="bg-gray-100 hover:bg-gray-200 text-gray-700 hover:text-gray-600 px-4 py-1 border border-gray-400 border-r-0 text-xs">
                                Yes
                            </a>
                            <a href="#" class="bg-blue-500 hover:bg-blue-500 text-gray-100 inline-block px-4 py-1 rounded-sm rounded-l-none text-xs">
                                No
                            </a>
                        </div>
                    </div>
                </div>
                <div class="flex p-1 pt-3 pb-3 bg-gray-100">
                    <div class="w-full lg:w-2/6 self-center px-3 self-center">
                        <div class="items-center leading-none flex flex-wrap">
                            <span class="text-gray-800 text-sm font-medium flex-auto self-center block text-center lg:text-left mb-4 lg:mb-0">Service Enquiries</span>
                            <span class="flex-auto lg:text-right inline-block self-center lg:pr-6">
                                <a href="#" class="bg-blue-500 hover:bg-blue-700 text-white px-8 py-2 rounded-sm inline-block text-xs">All</a>
                            </span>
                        </div>
                    </div>
                    <div class="w-full lg:w-1/6 px-4 self-center">
                        <div class="inline-flex">
                            <a href="#" class="bg-gray-100 hover:bg-gray-200 text-gray-700 hover:text-gray-600 px-4 py-1 border border-gray-400 border-r-0 text-xs">
                                Yes
                            </a>
                            <a href="#" class="bg-blue-500 hover:bg-blue-500 text-gray-100 inline-block px-4 py-1 rounded-sm rounded-l-none text-xs">
                                No
                            </a>
                        </div>
                    </div>
                    <div class="w-full lg:w-1/6 self-center px-3">
                        <div class="inline-flex">
                            <a href="#" class="bg-gray-100 hover:bg-gray-200 text-gray-700 hover:text-gray-600 px-4 py-1 border border-gray-400 border-r-0 text-xs">
                                Yes
                            </a>
                            <a href="#" class="bg-blue-500 hover:bg-blue-500 text-gray-100 inline-block px-4 py-1 rounded-sm rounded-l-none text-xs">
                                No
                            </a>
                        </div>
                    </div>
                    <div class="w-full lg:w-1/6 self-center px-3">
                        <div class="inline-flex">
                            <a href="#" class="bg-gray-100 hover:bg-gray-200 text-gray-700 hover:text-gray-600 px-4 py-1 border border-gray-400 border-r-0 text-xs">
                                Yes
                            </a>
                            <a href="#" class="bg-blue-500 hover:bg-blue-500 text-gray-100 inline-block px-4 py-1 rounded-sm rounded-l-none text-xs">
                                No
                            </a>
                        </div>
                    </div>
                    <div class="w-full lg:w-1/6 self-center px-3">
                        <div class="inline-flex">
                            <a href="#" class="bg-gray-100 hover:bg-gray-200 text-gray-700 hover:text-gray-600 px-4 py-1 border border-gray-400 border-r-0 text-xs">
                                Yes
                            </a>
                            <a href="#" class="bg-blue-500 hover:bg-blue-500 text-gray-100 inline-block px-4 py-1 rounded-sm rounded-l-none text-xs">
                                No
                            </a>
                        </div>
                    </div>
                    <div class="w-full lg:w-1/6 self-center px-3">
                        <div class="inline-flex">
                            <a href="#" class="bg-gray-100 hover:bg-gray-200 text-gray-700 hover:text-gray-600 px-4 py-1 border border-gray-400 border-r-0 text-xs">
                                Yes
                            </a>
                            <a href="#" class="bg-blue-500 hover:bg-blue-500 text-gray-100 inline-block px-4 py-1 rounded-sm rounded-l-none text-xs">
                                No
                            </a>
                        </div>
                    </div>
                </div>
                <div class="flex p-1 pt-3 pb-3">
                    <div class="w-full lg:w-2/6 self-center px-3 self-center">
                        <div class="items-center leading-none flex flex-wrap">
                            <span class="text-gray-800 text-sm font-medium flex-auto self-center block text-center lg:text-left mb-4 lg:mb-0">localizations</span>
                            <span class="flex-auto lg:text-right inline-block self-center lg:pr-6">
                                <a href="#" class="bg-blue-500 hover:bg-blue-700 text-white px-8 py-2 rounded-sm inline-block text-xs">All</a>
                            </span>
                        </div>
                    </div>
                    <div class="w-full lg:w-1/6 px-4 self-center">
                        <div class="inline-flex">
                            <a href="#" class="bg-gray-100 hover:bg-gray-200 text-gray-700 hover:text-gray-600 px-4 py-1 border border-gray-400 border-r-0 text-xs">
                                Yes
                            </a>
                            <a href="#" class="bg-blue-500 hover:bg-blue-500 text-gray-100 inline-block px-4 py-1 rounded-sm rounded-l-none text-xs">
                                No
                            </a>
                        </div>
                    </div>
                    <div class="w-full lg:w-1/6 self-center px-3">
                        <div class="inline-flex">
                            <a href="#" class="bg-gray-100 hover:bg-gray-200 text-gray-700 hover:text-gray-600 px-4 py-1 border border-gray-400 border-r-0 text-xs">
                                Yes
                            </a>
                            <a href="#" class="bg-blue-500 hover:bg-blue-500 text-gray-100 inline-block px-4 py-1 rounded-sm rounded-l-none text-xs">
                                No
                            </a>
                        </div>
                    </div>
                    <div class="w-full lg:w-1/6 self-center px-3">
                        <div class="inline-flex">
                            <a href="#" class="bg-gray-100 hover:bg-gray-200 text-gray-700 hover:text-gray-600 px-4 py-1 border border-gray-400 border-r-0 text-xs">
                                Yes
                            </a>
                            <a href="#" class="bg-blue-500 hover:bg-blue-500 text-gray-100 inline-block px-4 py-1 rounded-sm rounded-l-none text-xs">
                                No
                            </a>
                        </div>
                    </div>
                    <div class="w-full lg:w-1/6 self-center px-3">
                        <div class="inline-flex">
                            <a href="#" class="bg-gray-100 hover:bg-gray-200 text-gray-700 hover:text-gray-600 px-4 py-1 border border-gray-400 border-r-0 text-xs">
                                Yes
                            </a>
                            <a href="#" class="bg-blue-500 hover:bg-blue-500 text-gray-100 inline-block px-4 py-1 rounded-sm rounded-l-none text-xs">
                                No
                            </a>
                        </div>
                    </div>
                    <div class="w-full lg:w-1/6 self-center px-3">
                        <div class="inline-flex">
                            <a href="#" class="bg-gray-100 hover:bg-gray-200 text-gray-700 hover:text-gray-600 px-4 py-1 border border-gray-400 border-r-0 text-xs">
                                Yes
                            </a>
                            <a href="#" class="bg-blue-500 hover:bg-blue-500 text-gray-100 inline-block px-4 py-1 rounded-sm rounded-l-none text-xs">
                                No
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="w-full mt-4 p-4 bg-gray-200 text-right">
                <button class=" font-medium bg-blue-600 hover:bg-blue-700 outline-none focus:border-teal-900 text-white py-1 px-8 rounded-sm inline-flex">
                    Save
                </button>
            </div>
        </div>
@endsection

@section('footer')
    @include('layouts.footer')
@endsection