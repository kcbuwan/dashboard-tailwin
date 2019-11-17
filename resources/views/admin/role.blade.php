@extends('layouts.blank')

@section('header')
    @include('layouts.header')
@endsection

@section('content')
    <div class="lg:mt-0 rounded shadow bg-white mb-6 ">
        <div class="flex border-b border-grey-light p-4 pt-2 pb-2 font-medium">
            <div class="w-1/2 self-center">
                <h2 class="uppercase pull-right pr-4">Latest Activity</h2> 
            </div>
        </div>
        <div class="overflow-hidden overflow-x-auto">
            <table class="w-full">
                <thead>
                    <tr>
                        <th class="text-sm text-gray-600 font-medium bg-gray-200 p-4 text-left">Occurred</th>
                        <th class="text-sm text-gray-600 font-medium bg-gray-200 p-4 text-left">Event</th>
                        <th class="text-sm text-gray-600 font-medium bg-gray-200 p-4 text-left">User</th>
                        <th class="text-sm text-gray-600 font-medium bg-gray-200 p-4 text-left">Created At</th>
                        <th class="text-sm text-gray-600 font-medium bg-gray-200 p-4 text-left">Activity</th>
                        <th class="text-sm text-gray-600 font-medium bg-gray-200 p-4 text-left"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                       
                        <td class="text-sm p-4 text-gray-700 border-solid border-b border-gray-200">3 months ago</td>
                        <td class="text-sm p-4 text-gray-700 border-solid border-b border-gray-200">
                            <a href="#">User Login</a>
                        </td>
                        <td class="text-sm p-4 text-gray-700 border-solid border-b border-gray-200">
                            <a href="#">Andy Fox</a>
                        </td>
                        <td class="text-sm p-4 text-gray-700 border-solid border-b border-gray-200">
                            Andy Fox (admin@element7digital.com.au) has just logged in.
                        </td>
                        <td class="text-sm p-4 text-gray-700 border-solid border-b border-gray-200">
                            <a class=" font-medium bg-blue-600 hover:bg-blue-700 outline-none focus:border-teal-900 text-white py-1 px-8 rounded-sm inline-flex">View</a>
                        </td>
                        
                    </tr>
                    <tr>
                        
                        <td class="text-sm p-4 text-gray-700 border-solid border-b border-gray-200">4 months ago</td>
                        <td class="text-sm p-4 text-gray-700 border-solid border-b border-gray-200">
                            <a href="#">User Login</a>
                        </td>
                        <td class="text-sm p-4 text-gray-700 border-solid border-b border-gray-200">
                            <a href="#">Andy Fox</a>
                        </td>
                        <td class="text-sm p-4 text-gray-700 border-solid border-b border-gray-200">
                            Andy Fox (admin@element7digital.com.au) has just logged in.
                        </td>
                        <td class="text-sm p-4 text-gray-700 border-solid border-b border-gray-200">
                            <a class=" font-medium bg-blue-600 hover:bg-blue-700 outline-none focus:border-teal-900 text-white py-1 px-8 rounded-sm inline-flex">View</a>
                        </td>
                        
                    </tr>
                    <tr>
                       
                        <td class="text-sm p-4 text-gray-700 border-solid border-b border-gray-200">4 months ago</td>
                        <td class="text-sm p-4 text-gray-700 border-solid border-b border-gray-200">
                            <a href="#">User Login</a>
                        </td>
                        <td class="text-sm p-4 text-gray-700 border-solid border-b border-gray-200">
                            <a href="#">Andy Fox</a>
                        </td>
                        <td class="text-sm p-4 text-gray-700 border-solid border-b border-gray-200">
                            Andy Fox (admin@element7digital.com.au) has just logged in.
                        </td>
                        <td class="text-sm p-4 text-gray-700 border-solid border-b border-gray-200">
                            <a class=" font-medium bg-blue-600 hover:bg-blue-700 outline-none focus:border-teal-900 text-white py-1 px-8 rounded-sm inline-flex">View</a>
                        </td>
                        
                    </tr>
                    <tr>
                        
                        <td class="text-sm p-4 text-gray-700 border-solid border-b border-gray-200">4 months ago</td>
                        <td class="text-sm p-4 text-gray-700 border-solid border-b border-gray-200">
                            <a href="#">User Login</a>
                        </td>
                        <td class="text-sm p-4 text-gray-700 border-solid border-b border-gray-200">
                            <a href="#">Andy Fox</a>
                        </td>
                        <td class="text-sm p-4 text-gray-700 border-solid border-b border-gray-200">
                            Andy Fox (admin@element7digital.com.au) has just logged in.
                        </td>
                        <td class="text-sm p-4 text-gray-700 border-solid border-b border-gray-200">
                            <a class=" font-medium bg-blue-600 hover:bg-blue-700 outline-none focus:border-teal-900 text-white py-1 px-8 rounded-sm inline-flex">View</a>
                        </td>
                       
                    </tr>
                    <tr>
                        
                        <td class="text-sm p-4 text-gray-700 border-solid border-b border-gray-200">4 months ago</td>
                        <td class="text-sm p-4 text-gray-700 border-solid border-b border-gray-200">
                            <a href="#">User Login</a>
                        </td>
                        <td class="text-sm p-4 text-gray-700 border-solid border-b border-gray-200">
                            <a href="#">Andy Fox</a>
                        </td>
                        <td class="text-sm p-4 text-gray-700 border-solid border-b border-gray-200">
                            Andy Fox (admin@element7digital.com.au) has just logged in.
                        </td>
                        <td class="text-sm p-4 text-gray-700 border-solid border-b border-gray-200">
                           <a class=" font-medium bg-blue-600 hover:bg-blue-700 outline-none focus:border-teal-900 text-white py-1 px-8 rounded-sm inline-flex">View</a>
                        </td>
                        
                    </tr>
                </tbody>
                
            </table>
        </div>
    </div>
@endsection

@section('footer')
    @include('layouts.footer')
@endsection