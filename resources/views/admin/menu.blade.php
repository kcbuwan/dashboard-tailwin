<x-app>
    <div class="flex py-2 pt-0">
        <div class="w-1/2 self-center text-gray-700 py-4 pt-0 text-xl">
            <h2 class="pull-right pt-2 pr-4 text-gray-700 font-medium">Menu</h2>
        </div>
    </div>
    <div class="md:flex pb-3 mb-3">
        <div class="mb-4 md:mb-0 md:w-1/2 self-center text-center md:text-left">
            <div class="inline-flex">                            
                <div class="relative mb-4 lg:mb-0">
                    <span class="w-full algolia-autocomplete" style="position: relative; display: inline-block; direction: ltr;">
                        <input id="docsearch" class="form-input transition focus:outline-0 border border-transparent focus:bg-white focus:border-gray-300 placeholder-gray-600 bg-white py-2 pr-4 pl-4 h-10 block w-full appearance-none leading-normal ds-input rounded text-gray-500" type="text" placeholder="Search by title" autocomplete="off" spellcheck="false" role="combobox" aria-autocomplete="list" aria-expanded="false" aria-label="search input" aria-owns="algolia-autocomplete-listbox-0" dir="auto" style="position: relative; vertical-align: top;">
                        <pre aria-hidden="true" style="position: absolute; visibility: hidden; white-space: pre; font-weight: 400; word-spacing: 0px; letter-spacing: normal; text-indent: 0px; text-rendering: auto; text-transform: none;"></pre>
                        <span class="ds-dropdown-menu" role="listbox" id="algolia-autocomplete-listbox-0" style="position: absolute; top: 100%; z-index: 100; left: 0px; right: auto; display: none;">
                            <div class="ds-dataset-1"></div>
                        </span>
                    </span>
                    <div class="pointer-events-none absolute inset-y-0 right-0 pl-4 pr-4 flex items-center">
                        <svg class="fill-current pointer-events-none text-gray-600 w-4 h-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path d="M12.9 14.32a8 8 0 1 1 1.41-1.41l5.35 5.33-1.42 1.42-5.33-5.34zM8 14A6 6 0 1 0 8 2a6 6 0 0 0 0 12z">
                            </path>
                        </svg>
                    </div>
                </div>
                <div class="relative lg:mb-0">
                    <a href="#" class="ml-2 bg-blue-500 hover:bg-blue-600 outline-none focus:border-blue-900 rounded text-white py-3 px-2 inline-flex text-sm font-medium">
                        <svg class="w-4" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z"></path></svg>
                        <span class="pointer-events-none inset-y-0 right-0 flex items-center pl-2 text-white">
                            <svg class="fill-current w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"></path></svg>
                        </span>
                    </a> 
                </div>
            </div>
        </div>

        <div class="md:w-1/2 text-center md:text-right">
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
                        <th class="text-md text-gray-600 font-semi-bold bg-gray-100 border-b p-4 text-left uppercase">
                            <input class="mr-2 leading-tight form-checkbox" type="checkbox">
                        </th>
                        <th class="text-sm text-gray-600 font-semi-bold bg-gray-100 border-b p-4 text-left uppercase">
                            Title
                        </th>
                        <th class="text-sm text-gray-600 font-semi-bold bg-gray-100 border-b p-4 text-left uppercase">
                            Warehouse
                        </th>
                        <th class="text-sm text-gray-600 font-semi-bold bg-gray-100 border-b p-4 text-right">
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-solid border-b border-gray-200">
                        <td class="p-4 text-gray-700">
                            <input class="mr-2 leading-tight form-checkbox" type="checkbox">
                        </td>
                        <td class="text-md p-4 pt-2 pb-2 text-gray-600">Primary Menu</td>
                        <td class="text-sm p-4 pt-2 pb-2 text-gray-600">Australia</td>
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
                        <td class="p-4 text-gray-700">
                            <input class="mr-2 leading-tight form-checkbox" type="checkbox">
                        </td>
                        <td class="text-md p-4 pt-2 pb-2 text-gray-600">Mobile Menu</td>
                        <td class="text-sm p-4 pt-2 pb-2 text-gray-600">Australia</td>
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
                        <td class="p-4 text-gray-700">
                            <input class="mr-2 leading-tight form-checkbox" type="checkbox">
                        </td>
                        <td class="text-md p-4 pt-2 pb-2 text-gray-600">Quick Links</td>
                        <td class="text-sm p-4 pt-2 pb-2 text-gray-600">Australia</td>
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
                        <td class="p-4 text-gray-700">
                            <input class="mr-2 leading-tight form-checkbox" type="checkbox">
                        </td>
                        <td class="text-md p-4 pt-2 pb-2 text-gray-600">Primary Menu</td>
                        <td class="text-sm p-4 pt-2 pb-2 text-gray-600">United States</td>
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
                        <td class="p-4 text-gray-700">
                            <input class="mr-2 leading-tight form-checkbox" type="checkbox">
                        </td>
                        <td class="text-md p-4 pt-2 pb-2 text-gray-600">Mobile Menu</td>
                        <td class="text-sm p-4 pt-2 pb-2 text-gray-600">United States</td>
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
                        <td class="p-4 text-gray-700">
                            <input class="mr-2 leading-tight form-checkbox" type="checkbox">
                        </td>
                        <td class="text-md p-4 pt-2 pb-2 text-gray-600">Quick Links</td>
                        <td class="text-sm p-4 pt-2 pb-2 text-gray-600">United States</td>
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
                <tfoot>
                    <tr>
                        <td class="bg-gray-100 p-4 mt-4 text-left">
                            <input class="mr-2 leading-tight form-checkbox" type="checkbox">
                        </td>
                        <td colspan="8" class="bg-gray-100 p-4 pt-2 pb-2 mt-4 text-sm text-left">
                            <div class="flex flex-wrap">
                                <div class="w-1/2 text-left self-center">
                                    <span class="text-sm font-bold">Showing 5 of 5 results</span>
                                </div>

                                <div class="w-1/2 text-right">
                                    <div class="inline-flex">
                                        <ul class="flex pl-0 list-none rounded mx-auto text-right">
                                            <li class="text-md inline-block py-2 px-3 bg-white border border-gray-400 text-gray-700 hover:text-white md:border-r-0 ml-0 rounded-l hover:bg-gray-400">
                                                <a href="#">
                                                    <svg class="w-4" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M15 19l-7-7 7-7"></path></svg>
                                                </a>
                                            </li>
                                            <li class="text-md inline-block py-1 px-3 bg-gray-200 border border-gray-400 text-gray-600 md:border-r-0">
                                                <a href="#">1</a>
                                            </li>
                                            <li class="text-md inline-block py-1 px-3 bg-white border border-gray-400 text-gray-700 hover:text-white md:border-r-0 hover:bg-gray-400">
                                                <a href="#">2</a>
                                            </li>
                                            <li class="text-md inline-block py-1 px-3 bg-white border border-gray-400 text-gray-700 hover:text-white md:border-r-0 hover:bg-gray-400">
                                                <a href="#">3</a>
                                            </li>
                                            <li class="text-md inline-block py-2 px-3 bg-white border border-gray-400 text-gray-700 hover:text-white rounded-r hover:bg-gray-400">
                                                <a href="#">
                                                    <svg class="w-4" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M9 5l7 7-7 7"></path></svg>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</x-app>