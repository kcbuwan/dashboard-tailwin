<x-app>
    <div class="flex flex-wrap -mx-3">

        <x-layouts.widget-panel>
            <div class="p-2">
                <div class="pl-2 text-gray-700 text-center">
                    <p class="text-sm text-gray-600 font-semibold text-base">Unshipped Orders</p>
                    <p class="font-semibold text-3xl">237</p>
                </div> 
            </div>
            <div class="bg-gray-100 text-gray-600 rounded text-center text-sm font-semibold p-2">
                <a href="">View all Orders</a>
            </div>
        </x-widget-panel>

        <x-layouts.widget-panel>
            <div class="p-2">
                <div class="pl-2 text-gray-700 text-center">
                    <p class="text-sm text-gray-600 font-semibold text-base">Product Reviews</p>
                    <p class="font-semibold text-3xl">177</p>
                </div> 
            </div>
            <div class="bg-gray-100 text-gray-600 rounded text-center text-sm font-semibold p-2">
                <a href="">View all Reviews</a>
            </div>
        </x-widget-panel>

        <x-layouts.widget-panel>
            <div class="p-2">
                <div class="pl-2 text-gray-700 text-center">
                    <p class="text-sm text-gray-600 font-semibold text-base">New Enquiries</p>
                    <p class="font-semibold text-3xl">31</p>
                </div> 
            </div>
            <div class="bg-gray-100 text-gray-600 rounded text-center text-sm font-semibold p-2">
                <a href="">View all Enquiries</a>
            </div>
        </x-widget-panel>
        
        <x-layouts.widget-panel>
            <div class="p-2">
                <div class="pl-2 text-gray-700 text-center">
                    <p class="text-sm text-gray-600 font-semibold text-base">Trade Requests</p>
                    <p class="font-semibold text-3xl">16</p>
                </div> 
            </div>
            <div class="bg-gray-100 text-gray-600 rounded text-center text-sm font-semibold p-2">
                <a href="">View all Requests</a>
            </div>
        </x-widget-panel>

    </div>
    
    <div class="lg:mt-0 mb-6 ">
        <div class="text-gray-700 py-4 pt-0 text-xl font-semibold">
            <h2>Signup</h2>
        </div>

        <x-layouts.panel class="pt-4 pb-4">
            <div class="p-4"><iframe class="chartjs-hidden-iframe" style="width: 100%; display: block; border: 0px; height: 0px; margin: 0px; position: absolute; left: 0px; right: 0px; top: 0px; bottom: 0px;"></iframe>
                <div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
                <canvas id="main-graph" class="mt-4 chartjs-render-monitor" width="821" height="200" style="display: block; width: 821px; height: 287px;"></canvas>
            </div>
        </x-panel>        
    </div>
    
    <div class="lg:mt-0 mb-6">
        <div class="text-gray-700 py-4 text-xl font-semibold">
            <h2>Latest Activity</h2>
        </div>

        <x-layouts.panel>
            <table class="w-full">
                <tbody><tr>
                    <th class="text-sm text-gray-600 font-semi-bold bg-gray-100 border-b p-4 text-left uppercase">
                        Occurred
                    </th>
                    <th class="text-sm text-gray-600 font-semi-bold bg-gray-100 border-b p-4 text-left uppercase">Event</th>
                    <th class="text-sm text-gray-600 font-semi-bold bg-gray-100 border-b p-4 text-left uppercase">User</th>
                    <th class="text-sm text-gray-600 font-semi-bold bg-gray-100 border-b p-4 text-left uppercase">Activity</th>
                    <th class="text-sm text-gray-600 font-semi-bold bg-gray-100 border-b p-4 text-left uppercase"></th>
                </tr>
                <tr>
                    <td class="text-sm p-4 text-gray-700 border-solid border-b border-gray-200">
                        5 minutes ago
                    </td>
                    <td class="text-sm p-4 text-gray-700 border-solid border-b border-gray-200">User Login</td>
                    <td class="text-sm p-4 text-gray-700 border-solid border-b border-gray-200">Element 7 Digital</td>
                    <td class="text-sm p-4 text-gray-700 border-solid border-b border-gray-200">Element 7 Digital (admin@element7digital.com.au) has just logged in.</td>
                    <td class="p-4 text-gray-700 border-solid border-b border-gray-200 font-medium text-center">
                        <a href="#" class="block text-xs text-gray-800 border-solid bg-white border border-gray-400 hover:border-gray-500 rounded-sm py-1 text-center">
                            <svg class="inline-block w-4 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path><path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"></path></svg>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td class="text-sm p-4 text-gray-700 border-solid border-b border-gray-200">
                        4 weeks ago
                    </td>
                    <td class="text-sm p-4 text-gray-700 border-solid border-b border-gray-200">User Login</td>
                    <td class="text-sm p-4 text-gray-700 border-solid border-b border-gray-200">Element 7 Digital</td>
                    <td class="text-sm p-4 text-gray-700 border-solid border-b border-gray-200">Element 7 Digital (admin@element7digital.com.au) has just logged in.</td>
                    <td class="p-4 text-gray-700 border-solid border-b border-gray-200 font-medium text-center">
                        <a href="#" class="block text-xs text-gray-800 border-solid bg-white border border-gray-400 hover:border-gray-500 rounded-sm py-1 text-center">
                            <svg class="inline-block w-4 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path><path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"></path></svg>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td class="text-sm p-4 text-gray-700 border-solid border-b border-gray-200">
                        1 month ago
                    </td>
                    <td class="text-sm p-4 text-gray-700 border-solid border-b border-gray-200">User Login</td>
                    <td class="text-sm p-4 text-gray-700 border-solid border-b border-gray-200">Element 7 Digital</td>
                    <td class="text-sm p-4 text-gray-700 border-solid border-b border-gray-200">Element 7 Digital (admin@element7digital.com.au) has just logged in.</td>
                    <td class="p-4 text-gray-700 border-solid border-b border-gray-200 font-medium text-center">
                        <a href="#" class="block text-xs text-gray-800 border-solid bg-white border border-gray-400 hover:border-gray-500 rounded-sm py-1 text-center">
                            <svg class="inline-block w-4 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path><path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"></path></svg>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td class="p-4 text-gray-700 border-solid border-b border-gray-200">
                        2 months ago
                    </td>
                    <td class="text-sm p-4 text-gray-700 border-solid border-b border-gray-200">User Login</td>
                    <td class="text-sm p-4 text-gray-700 border-solid border-b border-gray-200">Element 7 Digital</td>
                    <td class="text-sm p-4 text-gray-700 border-solid border-b border-gray-200">Element 7 Digital (admin@element7digital.com.au) has just logged in.</td>
                    <td class="p-4 text-gray-700 border-solid border-b border-gray-200 font-medium text-center">
                        <a href="#" class="block text-xs text-gray-800 border-solid bg-white border border-gray-400 hover:border-gray-500 rounded-sm py-1 text-center">
                            <svg class="inline-block w-4 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path><path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"></path></svg>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td class="p-4 text-gray-700 border-solid border-b border-gray-200">
                        2 months ago
                    </td>
                    <td class="text-sm p-4 text-gray-700 border-solid border-b border-gray-200">User Login</td>
                    <td class="text-sm p-4 text-gray-700 border-solid border-b border-gray-200">Element 7 Digital</td>
                    <td class="text-sm p-4 text-gray-700 border-solid border-b border-gray-200">Element 7 Digital (admin@element7digital.com.au) has just logged in.</td>
                    <td class="p-4 text-gray-700 border-solid border-b border-gray-200 font-medium text-center">
                        <a href="#" class="block text-xs text-gray-800 border-solid bg-white border border-gray-400 hover:border-gray-500 rounded-sm py-1 text-center">
                            <svg class="inline-block w-4 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path><path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"></path></svg>
                        </a>
                    </td>
                </tr>
                </tbody>
            </table>
        </x-panel>
    </div>

    <div class="flex flex-wrap -mx-3">
        <div class="w-full lg:w-1/3 p-4">
            <div class="text-gray-700 py-4 text-xl font-semibold">
                <h2>Latest Signups</h2>
            </div>

            <x-layouts.panel>
                <table class="w-full">
                    <tbody>
                        <tr>
                            <th class="text-sm text-gray-600 font-semi-bold bg-gray-100 border-b p-4 text-left uppercase">User</th>
                            <th class="text-sm text-gray-600 font-semi-bold bg-gray-100 border-b p-4 text-left uppercase">Role</th>
                        </tr>
                        <tr>
                            <td class="text-sm p-4 text-gray-700 border-solid border-b border-gray-200">
                                <div class="block mb-1 text-sm"><strong>LEE FORSYTH</strong> <span class="text-gray-500">5 minutes ago</span></div>
                                <span class="block mb-1 text-xs">BALLINA 2478, New South Wales, Australia</span>
                            </td>
                            <td class="p-4 border-solid border-b border-gray-200 text-left">
                                <a href="#" class="text-xs font-medium text-white bg-teal-500 hover:bg-teal-600 rounded py-1 px-4 text-center">User</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-sm p-4 text-gray-700 border-solid border-b border-gray-200">
                                <div class="block mb-1 text-sm"><strong>LEE FORSYTH 5</strong> <span class="text-gray-500">10 minutes ago</span></div>
                                <span class="block mb-1 text-xs">BALLINA 2478, New South Wales, Australia</span>
                            </td>
                            <td class="p-4 border-solid border-b border-gray-200 text-left">
                                <a href="#" class="text-xs font-medium text-white bg-green-200 hover:bg-green-300 rounded py-1 px-4 text-center text-green-700">Administrator</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-sm p-4 text-gray-700 border-solid border-b border-gray-200">
                                <div class="block mb-1 text-sm"><strong> FORSYTH </strong><span class="text-gray-500">5 minutes ago</span></div>
                                <span class="block mb-1 text-xs">BALLINA 2478, New South Wales, Australia</span>
                            </td>
                            <td class="p-4 border-solid border-b border-gray-200 text-left">
                                <a href="#" class="text-xs font-medium text-white bg-teal-500 hover:bg-teal-600 rounded py-1 px-4 text-center">View</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </x-panel>
        </div>

        <div class="w-full lg:w-1/3 p-4">
            <div class="text-gray-700 py-4 text-xl font-semibold">
                <h2>Product Sales</h2>
            </div>

            <x-layouts.panel>
                <div class="p-4">
                    <div x-data="app()" x-cloak class="px-4">
                        <div class="line my-8 relative">
                            <!-- Tooltip -->
                            <template x-if="tooltipOpen == true">
                                <div x-ref="tooltipContainer" class="p-0 m-0 z-10 shadow-lg rounded-lg absolute h-auto block"
                                    :style="`bottom: ${tooltipY}px; left: ${tooltipX}px`"
                                    >
                                <div class="shadow-xs rounded-lg bg-white p-2">
                                    <div class="flex items-center justify-between text-sm">
                                    <div>Sales:</div>
                                    <div class="font-bold ml-2">
                                        <span x-html="tooltipContent"></span>
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </template>

                            <!-- Bar Chart -->
                            <div class="flex -mx-2 items-end mb-2">
                                <template x-for="data in chartData">

                                <div class="px-2 w-1/6">
                                    <div :style="`height: ${data}px`" 
                                        class="transition ease-in duration-200 bg-teal-600 hover:bg-teal-700 relative"
                                        @mouseenter="showTooltip($event); tooltipOpen = true" 
                                        @mouseleave="hideTooltip($event)"
                                        >
                                        <div x-text="data" class="text-center absolute top-0 left-0 right-0 -mt-6 text-gray-800 text-sm"></div>
                                    <div>
                                </div>

                                </template>
                            </div>

                            <!-- Labels -->
                            <div class="border-t border-gray-400 mx-auto" >
                                <div class="flex -mx-2 items-end">
                                    <template x-for="data in labels">
                                        <div class="px-2 w-1/6">
                                            <div class="bg-red-600 relative">
                                                <div class="text-center absolute top-0 left-0 right-0 h-2 -mt-px bg-gray-400 mx-auto" style="width: 1px"></div>
                                                <div x-text="data" class="text-center absolute top-0 left-0 right-0 mt-3 text-gray-700 text-sm"></div>
                                            </div>
                                        </div>
                                    </template>	
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </x-panel>
        </div>

        <div class="w-full lg:w-1/3 p-4">
            <div class="text-gray-700 py-4 text-xl font-semibold">
                <h2>Product Orders</h2>
            </div>

            <x-layouts.panel>
                <div class="p-4">
                    <div id="canvas-holder">
                        <canvas id="chart-area" width="230" height="164">
                    </div>

                    <div id="chartjs-tooltip"></div>
                </div>
            </x-panel>
        </div>
    </div>
</x-app>