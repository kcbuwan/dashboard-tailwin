<x-app> 
    <div class="text-gray-700 py-4 pt-0 text-xl font-semibold">
        <h2>Auspost Freight</h2>
    </div>
    <div class="flex flex-wrap">
        <div class="w-full lg:w-3/4 rounded shadow-lg bg-white text-gray-700 mb-6 lg:mt-0">
            
            <div class="flex flex-wrap border-b border-bg-gray-300 mx-6 py-4 mb-6">
                <h2 class="uppercase pr-4 text-gray-700 font-medium">Australia Post</h2>
            </div>

            <div class="mx-6 py-4">

                <div class="mb-6">
                    <label class="block text-gray-600 font-semibold mb-2">
                        Enabled
                    </label>
                    <div class="inline-flex">
                        <a href="#" class="bg-gray-200 hover:bg-gray-300 text-gray-700 hover:text-gray-600 px-4 py-1 border border-gray-400 border-r-0 text-xs">
                            Yes
                        </a>
                        <a href="#" class="bg-teal-500 hover:bg-teal-600 text-gray-100 inline-block px-4 py-1 rounded-sm rounded-l-none text-xs">
                            No
                        </a>
                    </div>
                </div>

                <x-form.text type="text" name="method-name" label="Method Name" placeholder="" required autofocus autocompletets="Method Name" />
                <x-form.text type="text" name="max-weight" label="Max Weight" placeholder="" required autofocus autocompletets="Method Name" />
            
                <x-form.button>
                    Save Settings
                </x-form.button>
                <div class="mt-6">
                    <x-admin.alert type="info"> If you would like to view the Australian post freight cost matrix, click below.</x-admin.alert>
                </div>
                <x-form.button>
                    View AustPost Matrix
                </x-form.button>
                
            </div>
        </div>
        <div class="w-full lg:w-1/4">
            <div class="px-3 pb-2 mt-4 lg:mt-0 lg:ml-6 mb-6">
                <ul class="overflow-hidden">
                    <li>
                        <a href="#" class="px-2 py-2 block hover:bg-white mb-1 rounded hover:text-gray-900 text-gray-600 text-sm font-medium">
                            Settings
                        </a>
                    </li>
                    <li>
                        <a href="#" class="px-2 py-2 block hover:bg-white mb-1 rounded hover:text-gray-900 text-gray-600 text-sm font-medium">
                            Shipping Priority
                        </a>
                    </li>
                    <li>
                        <a href="#" class="px-2 py-2 block hover:bg-white mb-1 rounded hover:text-gray-900 text-gray-600 text-sm font-medium">
                            Flat Rate
                        </a>
                    </li>
                    <li>
                        <a href="#" class="px-2 py-2 block hover:bg-white mb-1 rounded hover:text-gray-900 text-gray-600 text-sm font-medium">
                            Redirects
                        </a>
                    </li>
                    <li>
                        <a href="#" class="px-2 py-2 block hover:bg-white mb-1 rounded hover:text-gray-900 text-gray-600 text-sm font-medium">
                            Free Shipping
                        </a>
                    </li>
                    <li>
                        <a href="#" class="px-2 py-2 block bg-white mb-1 rounded text-gray-900 text-sm font-medium">
                            AusPost
                        </a>
                    </li>
                    <li>
                        <a href="#" class="px-2 py-2 block hover:bg-white mb-1 rounded hover:text-gray-900 text-gray-600 text-sm font-medium">
                            AusPost Matrix
                        </a>
                    </li>
                    <li>
                        <a href="#" class="px-2 py-2 block hover:bg-white mb-1 rounded hover:text-gray-900 text-gray-600 text-sm font-medium">
                            AusPost OEM Rate
                        </a>
                    </li>
                    <li>
                        <a href="#" class="px-2 py-2 block hover:bg-white mb-1 rounded hover:text-gray-900 text-gray-600 text-sm font-medium">
                            International Freight
                        </a>
                    </li>
                    <li>
                        <a href="#" class="px-2 py-2 block hover:bg-white mb-1 rounded hover:text-gray-900 text-gray-600 text-sm font-medium">
                            International Post Rate
                        </a>
                    </li>
                    <li>
                        <a href="#" class="px-2 py-2 block hover:bg-white mb-1 rounded hover:text-gray-900 text-gray-600 text-sm font-medium">
                            International Zones
                        </a>
                    </li>
                    <li>
                        <a href="#" class="px-2 py-2 block hover:bg-white mb-1 rounded hover:text-gray-900 text-gray-600 text-sm font-medium">
                            Pickup Settings
                        </a>
                    </li>
                    <li>
                        <a href="#" class="px-2 py-2 block hover:bg-white mb-1 rounded hover:text-gray-900 text-gray-600 text-sm font-medium">
                            Pickup Choices
                        </a>
                    </li>
                    <li>
                        <a href="#" class="px-2 py-2 block hover:bg-white mb-1 rounded hover:text-gray-900 text-gray-600 text-sm font-medium">
                            Priority Handling
                        </a>
                    
                    </li>
                    <li>
                        <a href="#" class="px-2 py-2 block hover:bg-white mb-1 rounded hover:text-gray-900 text-gray-600 text-sm font-medium">
                            Toll eParcel Settings
                        </a>
                    
                    </li>
                    <li>
                        <a href="#" class="px-2 py-2 block hover:bg-white mb-1 rounded hover:text-gray-900 text-gray-600 text-sm font-medium">
                            eParcel Rates
                        </a>
                    
                    </li>
                    <li>
                        <a href="#" class="px-2 py-2 block hover:bg-white mb-1 rounded hover:text-gray-900 text-gray-600 text-sm font-medium">
                            Import eParcel Rate
                        </a>
                    
                    </li>
                    <li>
                        <a href="#" class="px-2 py-2 block hover:bg-white mb-1 rounded hover:text-gray-900 text-gray-600 text-sm font-medium">
                            DHL Settings
                        </a>
                    
                    </li>
                    <li>
                        <a href="#" class="px-2 py-2 block hover:bg-white mb-1 rounded hover:text-gray-900 text-gray-600 text-sm font-medium">
                            DHL Rates
                        </a>
                    
                    </li>
                    <li>
                        <a href="#" class="px-2 py-2 block hover:bg-white mb-1 rounded hover:text-gray-900 text-gray-600 text-sm font-medium">
                            DHL Zones
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</x-app>