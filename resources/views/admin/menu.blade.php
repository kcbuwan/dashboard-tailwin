<x-app>
    <div class="flex py-2 pt-0">
        <div class="w-1/2 self-center text-gray-700 py-4 pt-0 text-xl font-semibold">
            <h2 class="pull-right pt-2 pr-4 text-gray-700 font-medium">Menu</h2>
        </div>
    </div>
    <div class="md:flex pb-3 mb-3">
        <div class="mb-4 md:mb-0 md:w-1/2 self-center text-center md:text-left">
            <ul class="inline-flex mt-1">
                <li class="mr-2">
                    <div class="inline-flex">
                        <label class="block">
                            <select class="form-select mt-1 text-gray-600 block w-full">
                                <option selected="">Select Warehouse</option>
                                <option>Australia</option>
                                <option>United States</option>
                            </select>
                        </label>
                    </div>
                </li>
            </ul>
        </div>

        <div class="md:w-1/2 text-center md:text-right">
            
            <ul class="inline-flex mt-1">
                <li class="mr-1">
                    <button class="block text-sm font-medium text-white bg-teal-500 hover:bg-teal-600 rounded py-2 mt-1 h-10 px-4 text-center uppercase focus:outline-none focus:shadow-outline">
                        Add Menu
                    </button> 
                </li>

            </ul>
        </div>
        
    </div>
    <div class="lg:mt-0 rounded shadow-lg overflow-hidden bg-white mb-6">
        <div class="overflow-hidden overflow-x-auto">
            <table class="w-full">
                <thead>
                    <tr class="bg-gray-100 border-b">
                        <th class="text-sm text-gray-600 font-semi-bold bg-gray-100 border-b p-4 text-left uppercase">
                            Menu Name
                        </th>
                        <th class="text-sm text-gray-600 font-semi-bold bg-gray-100 border-b p-4 text-left uppercase">
                            Warehouse
                        </th>
                        <th class="text-sm text-gray-600 font-semi-bold bg-gray-100 border-b p-4 text-right uppercase">
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-solid border-b border-gray-200">
                        <td class="text-sm p-4 pt-2 pb-2 text-gray-600 font-semibold">Primary Menu</td>
                        <td class="text-sm p-4 pt-2 pb-2 text-gray-600 font-semibold">Australia</td>
                        <td class="p-4 text-gray-700 border-solid border-b border-gray-200 text-right">
                            <ul class="inline-flex">
                                <li>
                                    <button class="block text-xs text-gray-800 border-solid bg-white border border-gray-400 rounded-sm py-1 px-2 mr-1 h-8 text-center focus:outline-none">
                                        <svg class="w-4" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                            <path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                            <path d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                        </svg>
                                    </button>
                                </li>
                                <li>
                                <button class="block text-xs text-white bg-green-400 hover:bg-green-500 focus:outline-none focus:shadow-outlinehover:border-gray-500 rounded-sm py-1 px-2 mr-1 w-8 h-8 text-center">
                                    <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path></svg>
                                </button>
                                </li>
                                <li>
                                    <button class="block text-xs text-white bg-red-400 hover:bg-red-500 focus:outline-none focus:shadow-outlinehover:border-gray-500 rounded-sm py-1 px-2 mr-1 w-8 h-8 text-center">
                                        <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                                    </button>
                                </li>
                            </ul>
                        </td>
                    </tr>
                    <tr class="border-solid border-b border-gray-200">
                        <td class="text-sm p-4 pt-2 pb-2 text-gray-600 font-semibold">Mobile Menu</td>
                        <td class="text-sm p-4 pt-2 pb-2 text-gray-600 font-semibold">Australia</td>
                        <td class="p-4 text-gray-700 border-solid border-b border-gray-200 text-right">
                            <ul class="inline-flex">
                                <li>
                                    <button class="block text-xs text-gray-800 border-solid bg-white border border-gray-400 rounded-sm py-1 px-2 mr-1 h-8 text-center focus:outline-none">
                                        <svg class="w-4" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                            <path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                            <path d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                        </svg>
                                    </button>
                                </li>
                                <li>
                                    <button class="block text-xs text-white bg-green-400 hover:bg-green-500 focus:outline-none focus:shadow-outlinehover:border-gray-500 rounded-sm py-1 px-2 mr-1 w-8 h-8 text-center">
                                        <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path></svg>
                                    </button>
                                </li>
                                <li>
                                    <button class="block text-xs text-white bg-red-400 hover:bg-red-500 focus:outline-none focus:shadow-outlinehover:border-gray-500 rounded-sm py-1 px-2 mr-1 w-8 h-8 text-center">
                                        <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                                    </button> 
                                </li>
                            </ul>
                        </td>
                    </tr>
                    <tr class="border-solid border-b border-gray-200">
                        <td class="text-sm p-4 pt-2 pb-2 text-gray-600 font-semibold">Quick Links</td>
                        <td class="text-sm p-4 pt-2 pb-2 text-gray-600 font-semibold">Australia</td>
                        <td class="p-4 text-gray-700 border-solid border-b border-gray-200 text-right">
                            <ul class="inline-flex">
                                <li>
                                    <button class="block text-xs text-gray-800 border-solid bg-white border border-gray-400 rounded-sm py-1 px-2 mr-1 h-8 text-center focus:outline-none">
                                        <svg class="w-4" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                            <path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                            <path d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                        </svg>
                                    </button>
                                </li>
                                <li>
                                    <button class="block text-xs text-white bg-green-400 hover:bg-green-500 focus:outline-none focus:shadow-outlinehover:border-gray-500 rounded-sm py-1 px-2 mr-1 w-8 h-8 text-center">
                                        <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path></svg>
                                    </button>
                                </li>
                                <li>
                                    <button class="block text-xs text-white bg-red-400 hover:bg-red-500 focus:outline-none focus:shadow-outlinehover:border-gray-500 rounded-sm py-1 px-2 mr-1 w-8 h-8 text-center">
                                        <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                                    </button>
                                </li>
                            </ul>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-app>