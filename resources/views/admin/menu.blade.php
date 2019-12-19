@extends('layouts.blank') 
@section('header') 
    @include('layouts.header') 
@endsection 
@section('content')
    
    <div class="lg:mt-0 rounded shadow bg-white mb-6 overflow-hidden">
        <div class="flex border-b border-grey-light p-4 pt-3 pb-3 font-medium">
            <div class="w-1/2 self-center">
                <h2 class="uppercase pull-right pr-4 text-gray-700 font-medium">Menus</h2>
            </div>
            <div class="w-1/2 text-right">
                <a href="#" class="bg-blue-600 hover:bg-blue-700 outline-none focus:border-teal-900 text-white py-1 px-8 rounded shadow uppercase inline-flex text-sm font-medium">All Menus</a>
            </div>
        </div>
        <div class="overflow-hidden overflow-x-auto">
            <table class="w-full">
                <tr>
                    <th class="text-sm text-gray-600 font-medium bg-gray-200 p-3 text-left"></th>
                    <th class="text-sm text-gray-600 font-medium bg-gray-200 p-3 text-left">Warehouses</th>
                    <th class="text-sm text-gray-600 font-medium bg-gray-200 p-3 text-left">Menu</th>
                    <th class="text-sm text-gray-600 font-medium bg-gray-200 p-3 text-left">Action</th>
                </tr>
                <tr>
                    <td class="p-3 text-gray-700 border-solid border-b border-gray-200">1</td>
                    <td class="p-3 text-gray-700 border-solid border-b border-gray-200">Australia</td>
                    <td class="p-3 text-gray-700 border-solid border-b border-gray-200">
                        <div class="inline-flex">
                            <a href="#" class="bg-blue-600 hover:bg-blue-700 text-gray-100 inline-block px-3 p-1 rounded-sm rounded-r-none text-sm">Primary Menu</a>
                            <a href="#" class="bg-blue-500 hover:bg-blue-400 text-gray-100 inline-block px-3 p-1 rounded-sm rounded-l-none text-sm">
                                <i class="fas fa-times mt-1"></i>
                            </a>
                        </div>
                        <div class="inline-flex">
                            <a href="#" class="bg-blue-600 hover:bg-blue-700 text-gray-100 inline-block px-3 p-1 rounded-sm rounded-r-none text-sm">Quick Link</a>
                            <a href="#" class="bg-blue-500 hover:bg-blue-400 text-gray-100 inline-block px-3 p-1 rounded-sm rounded-l-none text-sm">
                                <i class="fas fa-times mt-1"></i>
                            </a>
                        </div>
                        <div class="inline-flex">
                            <a href="#" class="bg-blue-600 hover:bg-blue-700 text-gray-100 inline-block px-3 p-1 rounded-sm rounded-r-none text-sm">Mobile Menu</a>
                            <a href="#" class="bg-blue-500 hover:bg-blue-400 text-gray-100 inline-block px-3 p-1 rounded-sm rounded-l-none text-sm">
                                <i class="fas fa-times mt-1"></i>
                            </a>
                        </div>
                    </td>
                    <td class="p-3 text-gray-700 border-solid border-b border-gray-200">
                        <a href="/dashboard/add-menu" class="bg-blue-600 hover:bg-blue-700 text-gray-100 inline-block px-3 p-1 rounded-sm text-sm">Add Menu</a>
                    </td>
                </tr>
                <tr>
                    <td class="p-3 text-gray-700 border-solid border-b border-gray-200">1</td>
                    <td class="p-3 text-gray-700 border-solid border-b border-gray-200">United States</td>
                    <td class="p-3 text-gray-700 border-solid border-b border-gray-200">
                        <div class="inline-flex">
                            <a href="#" class="bg-blue-600 hover:bg-blue-700 text-gray-100 inline-block px-3 p-1 rounded-sm rounded-r-none text-sm">Primary Menu</a>
                            <a href="#" class="bg-blue-500 hover:bg-blue-400 text-gray-100 inline-block px-3 p-1 rounded-sm rounded-l-none text-sm">
                                <i class="fas fa-times mt-1"></i>
                            </a>
                        </div>
                    </td>
                    <td class="p-3 text-gray-700 border-solid border-b border-gray-200">
                        <a href="/dashboard/add-menu" class="bg-blue-600 hover:bg-blue-700 text-gray-100 inline-block px-3 p-1 rounded-sm text-sm">Add Menu</a>
                    </td>
                </tr>
            </table>
        </div>
    </div>
@endsection

@section('footer')
    @include('layouts.footer')
@endsection