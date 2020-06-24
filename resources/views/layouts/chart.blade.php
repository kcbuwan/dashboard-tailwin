<div class="flex flex-wrap">
    <div class="w-full lg:w-1/3 lg:pr-5">
        <div class="text-gray-700 py-4 text-xl font-semibold">
            <h2>Latest Signups</h2>
        </div>
        <div class="bg-white shadow-lg rounded overflow-hidden">
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
        </div>
    </div>
    <div class="w-full lg:w-1/3 mb-6">
        <div class="text-gray-700 py-4 text-xl font-semibold">
            <h2>Product Sales</h2>
        </div>
        <div class="bg-white shadow-lg rounded p-4">
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
                            </div>
                        </div>

                        </template>
                    </div>

                    <!-- Labels -->
                    <div class="border-t border-gray-400 mx-auto" ></div>
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
        <div class="w-full lg:w-1/3 lg:pl-5">
            <div class="text-gray-700 py-4 text-xl font-semibold">
                <h2>Product Orders</h2>
            </div>
            <div class="bg-white shadow-lg rounded p-4"> 
                <div id="canvas-holder">
                    <canvas id="chart-area" width="230" height="188">
                </div>

                <div id="chartjs-tooltip"></div>
            </div>
        </div>
    </div>
</div>