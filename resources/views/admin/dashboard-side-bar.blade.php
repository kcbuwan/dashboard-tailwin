@extends('layouts.blank-full') 

@section('content')

    @include('layouts.side-bar')

    <div id="main-content" class="w-full bg-gray-100 pl-0 lg:pl-64 min-h-screen">
        
        @include('layouts.header-sticky')
        
        <div class="p-10 bg-gray-200">
            <div class="flex flex-wrap -mx-3">

                <div class="w-1/2 xl:w-1/4 px-3 mb-4 pb-4">                
                    <div class="w-full bg-white rounded shadow">
                        <div class="p-2">
                            <div class="pl-2 text-gray-700 text-center">
                                <p class="text-sm text-gray-600 font-semibold text-base">Unshipped Orders</p>
                                <p class="font-semibold text-3xl">237</p>
                            </div> 
                        </div>
                        <div class="bg-gray-100 text-gray-600 rounded text-center text-sm font-semibold p-2">
                            <a href="">View all Orders</a>
                        </div>
                    </div>                
                </div>

                <div class="w-1/2 xl:w-1/4 px-3 mb-4 pb-4">                
                    <div class="w-full bg-white rounded shadow">
                        <div class="p-2">
                            <div class="pl-2 text-gray-700 text-center">
                                <p class="text-sm text-gray-600 font-semibold text-base">Product Reviews</p>
                                <p class="font-semibold text-3xl">177</p>
                            </div> 
                        </div>
                        <div class="bg-gray-100 text-gray-600 rounded text-center text-sm font-semibold p-2">
                            <a href="">View all Reviews</a>
                        </div>
                    </div>                
                </div>

                <div class="w-1/2 xl:w-1/4 px-3 mb-4 pb-4">                
                    <div class="w-full bg-white rounded shadow">
                        <div class="p-2">
                            <div class="pl-2 text-gray-700 text-center">
                                <p class="text-sm text-gray-600 font-semibold text-base">New Enquiries</p>
                                <p class="font-semibold text-3xl">31</p>
                            </div> 
                        </div>
                        <div class="bg-gray-100 text-gray-600 rounded text-center text-sm font-semibold p-2">
                            <a href="">View all Enquiries</a>
                        </div>
                    </div>                
                </div>

                <div class="w-1/2 xl:w-1/4 px-3 mb-4 pb-4">                
                    <div class="w-full bg-white rounded shadow">
                        <div class="p-2">
                            <div class="pl-2 text-gray-700 text-center">
                                <p class="text-sm text-gray-600 font-semibold text-base">Trade Requests</p>
                                <p class="font-semibold text-3xl">16</p>
                            </div> 
                        </div>
                        <div class="bg-gray-100 text-gray-600 rounded text-center text-sm font-semibold p-2">
                            <a href="">View all Requests</a>
                        </div>
                    </div>                
                </div>

            </div>
            <div class="lg:mt-0 mb-6 ">
                <div class="text-gray-700 py-4 pt-0 text-xl font-semibold">
                    <h2>Signup</h2>
                </div>
                <div class="bg-white shadow-md rounded overflow-hidden pt-4 pb-4">
                    <div class="p-4"><iframe class="chartjs-hidden-iframe" style="width: 100%; display: block; border: 0px; height: 0px; margin: 0px; position: absolute; left: 0px; right: 0px; top: 0px; bottom: 0px;"></iframe>
                        <div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
                        <canvas id="main-graph" class="mt-4 chartjs-render-monitor" width="821" height="287" style="display: block; width: 821px; height: 287px;"></canvas>
                    </div>
                </div>
            </div>
            @include('layouts.activity')
        </div>
    </div>
@endsection