<x-app>
    <div class="text-gray-600 py-4 pt-0 text-xl font-semibold">
        <h2>Email Settings</h2>
    </div>
    <div class="mb-4 md:mb-0 md:w-3/4 self-center text-center md:text-left">
        <div class="md:flex pt-3 pb-3 mb-3">
            <div class="mb-4 md:mb-0 md:w-1/2 self-center text-center md:text-left">
                <div class="inline-flex">                            
                    <div class="relative mb-4 lg:mb-0">
                        <span class="w-full algolia-autocomplete" style="position: relative; display: inline-block; direction: ltr;">
                            <input id="docsearch" class="form-input transition focus:outline-0 border border-transparent focus:bg-white focus:border-gray-300 placeholder-gray-600 bg-white py-2 pr-4 pl-4 h-10 block w-full appearance-none leading-normal ds-input rounded" type="text" placeholder="Search.." autocomplete="off" spellcheck="false" role="combobox" aria-autocomplete="list" aria-expanded="false" aria-label="search input" aria-owns="algolia-autocomplete-listbox-0" dir="auto" style="position: relative; vertical-align: top;">
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
                <div class="inline-flex">
                    <x-form.button>
                        Add Email Setting
                    </x-form.button>
                </div>
            </div>
        </div>
    </div>
    <div class="flex flex-wrap">
        <div class="w-full lg:w-3/4">
            <div class="lg:mt-0 rounded shadow-lg overflow-hidden bg-white mb-6 ">
                <div class="overflow-hidden overflow-x-auto p-0 pt-0">
                    <table class="w-full">
                        <thead>
                            <tr class="bg-gray-100 border-b">
                                <th class="text-gray-500 font-semibold p-4 text-left">
                                    <input class="mr-2 leading-tight form-checkbox" type="checkbox">
                                </th>
                                <th class="text-sm text-gray-600 font-semi-bold bg-gray-100 bord font-mediumer-b p-4 text-left uppercase" style="width: 50px;">
                                </th>
                                <th class="text-sm text-gray-600 font-semi-bold bg-gray-100 border-b p-4 text-left uppercase">Email For</th>
                                <th class="text-sm text-gray-600 font-semi-bold bg-gray-100 border-b p-4 text-left uppercase">Email(s)</th>
                                <th class="text-sm text-gray-600 font-semi-bold bg-gray-100 border-b p-4 text-left uppercase">Description</th>
                                <th class="text-sm text-gray-600 font-semi-bold bg-gray-100 border-b p-4 text-left uppercase">Sending</th>
                                <th class="text-sm text-gray-600 font-semi-bold bg-gray-100 border-b p-4 text-center uppercase">Options</th>
                            </tr>
                        </thead>
                        <tbody class="mb-4">
                            
                            <tr class="border-solid border-b border-gray-200">
                                <td class="p-4 text-gray-600 border-solid border-b border-gray-200">
                                    <input class="mr-2 leading-tight form-checkbox" type="checkbox">
                                </td>
                                <td class="text-sm font-medium p-4 pt-2 pb-2 text-gray-600" style="width: 50px;">
                                    2
                                </td>
                                <td class="text-sm font-medium p-4 pt-2 pb-2 text-gray-600 border-solid border-b border-gray-200">
                                    Freight Quote Enquiry
                                </td>
                                <td class="text-sm p-4 pt-2 pb-2 text-gray-600">
                                    sheejjohn@gmail.com	
                                </td>
                                <td class="text-sm p-4 pt-2 pb-2 text-gray-600">
                                    Quotes
                                </td>
                                <td class="text-sm p-4 pt-2 pb-2 text-green-400">
                                    <svg viewBox="0 0 20 20" fill="currentColor" class="check w-6 h-6">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                </td>
                                <td class="p-4 text-gray-600 border-solid border-b border-gray-200 text-right">
                                    <ul class="inline-flex">
                                        <li>
                                            <button class="block text-xs text-white bg-green-400 hover:border-gray-500 rounded-sm py-1 px-2 mr-1 w-8 h-8 text-center focus:outline-none">
                                                <svg class="w-5" viewBox="0 0 20 20" fill="currentColor" class="pencil w-6 h-6"><path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"></path>
                                                </svg>
                                            </button>
                                        </li>
                                        <li>
                                            <button class="block text-xs text-white border-solid bg-red-400 hover:bg-red-500 border border-red-400 hover:border-red-500 rounded-sm py-1 px-2 mr-1 h-8 text-center focus:outline-none">
                                                <svg class="w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="trash w-6 h-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                                </svg>
                                            </button>
                                        </li>
                                        <li>
                                            <button class="block text-xs text-red-400 border-solid bg-white border border-gray-400 hover:border-gray-500 rounded-sm py-1 px-2 mr-1 h-8 text-center focus:outline-none">
                                                <svg class="w-5" viewBox="0 0 20 20" fill="currentColor" class="eye-off w-6 h-6">
                                                    <path fill-rule="evenodd" d="M3.707 2.293a1 1 0 00-1.414 1.414l14 14a1 1 0 001.414-1.414l-1.473-1.473A10.014 10.014 0 0019.542 10C18.268 5.943 14.478 3 10 3a9.958 9.958 0 00-4.512 1.074l-1.78-1.781zm4.261 4.26l1.514 1.515a2.003 2.003 0 012.45 2.45l1.514 1.514a4 4 0 00-5.478-5.478z" clip-rule="evenodd"></path><path d="M12.454 16.697L9.75 13.992a4 4 0 01-3.742-3.741L2.335 6.578A9.98 9.98 0 00.458 10c1.274 4.057 5.065 7 9.542 7 .847 0 1.669-.105 2.454-.303z"></path>
                                                </svg>
                                            </button>
                                        </li>
                                    </ul>
                                </td>
                            </tr>

                            <tr class="border-solid border-b border-gray-200">
                                <td class="p-4 text-gray-600">
                                    <input class="mr-2 leading-tight form-checkbox" type="checkbox">
                                </td>
                                <td class="text-sm font-medium p-4 pt-2 pb-2 text-gray-600" style="width: 50px;">
                                    3
                                </td>
                                <td class="text-sm font-medium p-4 pt-2 pb-2 text-gray-600">Order Placed Email</td>
                                <td class="text-sm p-4 pt-2 pb-2 text-gray-600">
                                    sheejjohn@gmail.com	
                                </td>
                                <td class="text-sm p-4 pt-2 pb-2 text-gray-600">
                                    Quotes
                                </td>
                                <td class="text-sm p-4 pt-2 pb-2 text-green-400">
                                    <svg viewBox="0 0 20 20" fill="currentColor" class="check w-6 h-6">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                </td>
                                <td class="p-4 text-gray-600 border-solid border-b border-gray-200 text-right">
                                    <ul class="inline-flex">
                                        <li>
                                            <button class="block text-xs text-white bg-green-400 hover:border-gray-500 rounded-sm py-1 px-2 mr-1 w-8 h-8 text-center focus:outline-none">
                                                <svg class="w-5" viewBox="0 0 20 20" fill="currentColor" class="pencil w-6 h-6"><path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"></path>
                                                </svg>
                                            </button>
                                        </li>
                                        <li>
                                            <button class="block text-xs text-white border-solid bg-red-400 hover:bg-red-500 border border-red-400 hover:border-red-500 rounded-sm py-1 px-2 mr-1 h-8 text-center focus:outline-none">
                                                <svg class="w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="trash w-6 h-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                                </svg>
                                            </button>
                                        </li>
                                        <li>
                                            <button class="block text-xs text-red-400 border-solid bg-white border border-gray-400 hover:border-gray-500 rounded-sm py-1 px-2 mr-1 h-8 text-center focus:outline-none">
                                                <svg class="w-5" viewBox="0 0 20 20" fill="currentColor" class="eye-off w-6 h-6">
                                                    <path fill-rule="evenodd" d="M3.707 2.293a1 1 0 00-1.414 1.414l14 14a1 1 0 001.414-1.414l-1.473-1.473A10.014 10.014 0 0019.542 10C18.268 5.943 14.478 3 10 3a9.958 9.958 0 00-4.512 1.074l-1.78-1.781zm4.261 4.26l1.514 1.515a2.003 2.003 0 012.45 2.45l1.514 1.514a4 4 0 00-5.478-5.478z" clip-rule="evenodd"></path><path d="M12.454 16.697L9.75 13.992a4 4 0 01-3.742-3.741L2.335 6.578A9.98 9.98 0 00.458 10c1.274 4.057 5.065 7 9.542 7 .847 0 1.669-.105 2.454-.303z"></path>
                                                </svg>
                                            </button>
                                        </li>
                                    </ul>
                                </td>
                            </tr>

                            <tr class="border-solid border-b border-gray-200">
                                <td class="p-4 text-gray-600">
                                    <input class="mr-2 leading-tight form-checkbox" type="checkbox">
                                </td>
                                <td class="text-sm font-medium p-4 pt-2 pb-2 text-gray-600" style="width: 50px;">
                                    4
                                </td>
                                <td class="text-sm font-medium p-4 pt-2 pb-2 text-gray-600">
                                    Bikes For Sale Enquiry
                                </td>
                                <td class="text-sm p-4 pt-2 pb-2 text-gray-600">
                                    sheejjohn@gmail.com	
                                </td>
                                <td class="text-sm p-4 pt-2 pb-2 text-gray-600">
                                    Bike sale	
                                </td>
                                <td class="text-sm p-4 pt-2 pb-2 text-red-400">
                                    <svg viewBox="0 0 20 20" fill="currentColor" class="x w-6 h-6">
                                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                    </svg>
                                </td>
                                <td class="p-4 text-gray-600 border-solid border-b border-gray-200 text-right">
                                    <ul class="inline-flex">
                                        <li>
                                            <button class="block text-xs text-white bg-green-400 hover:border-gray-500 rounded-sm py-1 px-2 mr-1 w-8 h-8 text-center focus:outline-none">
                                                <svg class="w-5" viewBox="0 0 20 20" fill="currentColor" class="pencil w-6 h-6"><path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"></path>
                                                </svg>
                                            </button>
                                        </li>
                                        <li>
                                            <button class="block text-xs text-white border-solid bg-red-400 hover:bg-red-500 border border-red-400 hover:border-red-500 rounded-sm py-1 px-2 mr-1 h-8 text-center focus:outline-none">
                                                <svg class="w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="trash w-6 h-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                                </svg>
                                            </button>
                                        </li>
                                        <li>
                                            <button class="block text-xs text-red-400 border-solid bg-white border border-gray-400 hover:border-gray-500 rounded-sm py-1 px-2 mr-1 h-8 text-center focus:outline-none">
                                                <svg class="w-5" viewBox="0 0 20 20" fill="currentColor" class="eye-off w-6 h-6">
                                                    <path fill-rule="evenodd" d="M3.707 2.293a1 1 0 00-1.414 1.414l14 14a1 1 0 001.414-1.414l-1.473-1.473A10.014 10.014 0 0019.542 10C18.268 5.943 14.478 3 10 3a9.958 9.958 0 00-4.512 1.074l-1.78-1.781zm4.261 4.26l1.514 1.515a2.003 2.003 0 012.45 2.45l1.514 1.514a4 4 0 00-5.478-5.478z" clip-rule="evenodd"></path><path d="M12.454 16.697L9.75 13.992a4 4 0 01-3.742-3.741L2.335 6.578A9.98 9.98 0 00.458 10c1.274 4.057 5.065 7 9.542 7 .847 0 1.669-.105 2.454-.303z"></path>
                                                </svg>
                                            </button>
                                        </li>
                                    </ul>
                                </td>
                            </tr>

                            <tr class="border-solid border-b border-gray-200">
                                <td class="p-4 text-gray-600">
                                    <input class="mr-2 leading-tight form-checkbox" type="checkbox">
                                </td>
                                <td class="text-sm font-medium p-4 pt-2 pb-2 text-gray-600" style="width: 50px;">
                                    5
                                </td>
                                <td class="text-sm font-medium p-4 pt-2 pb-2 text-gray-600">
                                    Blog Comments
                                </td>
                                <td class="text-sm p-4 pt-2 pb-2 text-gray-600">
                                    sheejjohn@gmail.com	
                                </td>
                                <td class="text-sm p-4 pt-2 pb-2 text-gray-600">
                                    Blog Comments
                                </td>
                                <td class="text-sm p-4 pt-2 pb-2 text-green-400">
                                    <svg viewBox="0 0 20 20" fill="currentColor" class="check w-6 h-6">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                </td>
                                <td class="p-4 text-gray-600 border-solid border-b border-gray-200 text-right">
                                    <ul class="inline-flex">
                                        <li>
                                            <button class="block text-xs text-white bg-green-400 hover:border-gray-500 rounded-sm py-1 px-2 mr-1 w-8 h-8 text-center focus:outline-none">
                                                <svg class="w-5" viewBox="0 0 20 20" fill="currentColor" class="pencil w-6 h-6"><path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"></path>
                                                </svg>
                                            </button>
                                        </li>
                                        <li>
                                            <button class="block text-xs text-white border-solid bg-red-400 hover:bg-red-500 border border-red-400 hover:border-red-500 rounded-sm py-1 px-2 mr-1 h-8 text-center focus:outline-none">
                                                <svg class="w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="trash w-6 h-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                                </svg>
                                            </button>
                                        </li>
                                        <li>
                                            <button class="block text-xs text-red-400 border-solid bg-white border border-gray-400 hover:border-gray-500 rounded-sm py-1 px-2 mr-1 h-8 text-center focus:outline-none">
                                                <svg class="w-5" viewBox="0 0 20 20" fill="currentColor" class="eye-off w-6 h-6">
                                                    <path fill-rule="evenodd" d="M3.707 2.293a1 1 0 00-1.414 1.414l14 14a1 1 0 001.414-1.414l-1.473-1.473A10.014 10.014 0 0019.542 10C18.268 5.943 14.478 3 10 3a9.958 9.958 0 00-4.512 1.074l-1.78-1.781zm4.261 4.26l1.514 1.515a2.003 2.003 0 012.45 2.45l1.514 1.514a4 4 0 00-5.478-5.478z" clip-rule="evenodd"></path><path d="M12.454 16.697L9.75 13.992a4 4 0 01-3.742-3.741L2.335 6.578A9.98 9.98 0 00.458 10c1.274 4.057 5.065 7 9.542 7 .847 0 1.669-.105 2.454-.303z"></path>
                                                </svg>
                                            </button>
                                        </li>
                                    </ul>
                                </td>
                            </tr>

                            <tr class="border-solid border-b border-gray-200">
                                <td class="p-4 text-gray-600 border-solid border-b border-gray-200">
                                    <input class="mr-2 leading-tight form-checkbox" type="checkbox">
                                </td>
                                <td class="text-sm font-medium p-4 pt-2 pb-2 text-gray-600" style="width: 50px;">
                                    7
                                </td>
                                <td class="text-sm font-medium p-4 pt-2 pb-2 text-gray-600 border-solid border-b border-gray-200">
                                    Service Enquiry Email	
                                </td>
                                <td class="text-sm p-4 pt-2 pb-2 text-gray-600">
                                    sheejjohn@gmail.com	
                                </td>
                                <td class="text-sm p-4 pt-2 pb-2 text-gray-600">
                                    Service
                                </td>
                                <td class="text-sm p-4 pt-2 pb-2 text-red-400">
                                    <svg viewBox="0 0 20 20" fill="currentColor" class="x w-6 h-6">
                                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                    </svg>
                                </td>
                                <td class="p-4 text-gray-600 border-solid border-b border-gray-200 text-right">
                                    <ul class="inline-flex">
                                        <li>
                                            <button class="block text-xs text-white bg-green-400 hover:border-gray-500 rounded-sm py-1 px-2 mr-1 w-8 h-8 text-center focus:outline-none">
                                                <svg class="w-5" viewBox="0 0 20 20" fill="currentColor" class="pencil w-6 h-6"><path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"></path>
                                                </svg>
                                            </button>
                                        </li>
                                        <li>
                                            <button class="block text-xs text-white border-solid bg-red-400 hover:bg-red-500 border border-red-400 hover:border-red-500 rounded-sm py-1 px-2 mr-1 h-8 text-center focus:outline-none">
                                                <svg class="w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="trash w-6 h-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                                </svg>
                                            </button>
                                        </li>
                                        <li>
                                            <button class="block text-xs text-red-400 border-solid bg-white border border-gray-400 hover:border-gray-500 rounded-sm py-1 px-2 mr-1 h-8 text-center focus:outline-none">
                                                <svg class="w-5" viewBox="0 0 20 20" fill="currentColor" class="eye-off w-6 h-6">
                                                    <path fill-rule="evenodd" d="M3.707 2.293a1 1 0 00-1.414 1.414l14 14a1 1 0 001.414-1.414l-1.473-1.473A10.014 10.014 0 0019.542 10C18.268 5.943 14.478 3 10 3a9.958 9.958 0 00-4.512 1.074l-1.78-1.781zm4.261 4.26l1.514 1.515a2.003 2.003 0 012.45 2.45l1.514 1.514a4 4 0 00-5.478-5.478z" clip-rule="evenodd"></path><path d="M12.454 16.697L9.75 13.992a4 4 0 01-3.742-3.741L2.335 6.578A9.98 9.98 0 00.458 10c1.274 4.057 5.065 7 9.542 7 .847 0 1.669-.105 2.454-.303z"></path>
                                                </svg>
                                            </button>
                                        </li>
                                    </ul>
                                </td>
                            </tr>

                            <tr class="border-solid border-b border-gray-200">
                                <td class="p-4 text-gray-600">
                                    <input class="mr-2 leading-tight form-checkbox" type="checkbox">
                                </td>
                                <td class="text-sm font-medium p-4 pt-2 pb-2 text-gray-600" style="width: 50px;">
                                    5
                                </td>
                                <td class="text-sm font-medium p-4 pt-2 pb-2 text-gray-600">
                                    Product Low Stock Level Alert
                                </td>
                                <td class="text-sm p-4 pt-2 pb-2 text-gray-600">
                                    sheejjohn@gmail.com	
                                </td>
                                <td class="text-sm p-4 pt-2 pb-2 text-gray-600">
                                    Low Stock	
                                </td>
                                <td class="text-sm p-4 pt-2 pb-2 text-red-400">
                                    <svg viewBox="0 0 20 20" fill="currentColor" class="x w-6 h-6">
                                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                    </svg>
                                </td>
                                <td class="p-4 text-gray-600 border-solid border-b border-gray-200 text-right">
                                    <ul class="inline-flex">
                                        <li>
                                            <button class="block text-xs text-white bg-green-400 hover:border-gray-500 rounded-sm py-1 px-2 mr-1 w-8 h-8 text-center focus:outline-none">
                                                <svg class="w-5" viewBox="0 0 20 20" fill="currentColor" class="pencil w-6 h-6"><path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"></path>
                                                </svg>
                                            </button>
                                        </li>
                                        <li>
                                            <button class="block text-xs text-white border-solid bg-red-400 hover:bg-red-500 border border-red-400 hover:border-red-500 rounded-sm py-1 px-2 mr-1 h-8 text-center focus:outline-none">
                                                <svg class="w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="trash w-6 h-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                                </svg>
                                            </button>
                                        </li>
                                        <li>
                                            <button class="block text-xs text-red-400 border-solid bg-white border border-gray-400 hover:border-gray-500 rounded-sm py-1 px-2 mr-1 h-8 text-center focus:outline-none">
                                                <svg class="w-5" viewBox="0 0 20 20" fill="currentColor" class="eye-off w-6 h-6">
                                                    <path fill-rule="evenodd" d="M3.707 2.293a1 1 0 00-1.414 1.414l14 14a1 1 0 001.414-1.414l-1.473-1.473A10.014 10.014 0 0019.542 10C18.268 5.943 14.478 3 10 3a9.958 9.958 0 00-4.512 1.074l-1.78-1.781zm4.261 4.26l1.514 1.515a2.003 2.003 0 012.45 2.45l1.514 1.514a4 4 0 00-5.478-5.478z" clip-rule="evenodd"></path><path d="M12.454 16.697L9.75 13.992a4 4 0 01-3.742-3.741L2.335 6.578A9.98 9.98 0 00.458 10c1.274 4.057 5.065 7 9.542 7 .847 0 1.669-.105 2.454-.303z"></path>
                                                </svg>
                                            </button>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                            <tr class="border-solid border-b border-gray-200">
                                <td class="p-4 text-gray-600">
                                    <input class="mr-2 leading-tight form-checkbox" type="checkbox">
                                </td>
                                <td class="text-sm font-medium p-4 pt-2 pb-2 text-gray-600" style="width: 50px;">
                                    8
                                </td>
                                <td class="text-sm font-medium p-4 pt-2 pb-2 text-gray-600">
                                    Cars For Sales Enquiry	
                                </td>
                                <td class="text-sm p-4 pt-2 pb-2 text-gray-600">
                                    sheejjohn@gmail.com	
                                </td>
                                <td class="text-sm p-4 pt-2 pb-2 text-gray-600">
                                    car sale
                                </td>
                                <td class="text-sm p-4 pt-2 pb-2 text-red-400">
                                    <svg viewBox="0 0 20 20" fill="currentColor" class="x w-6 h-6">
                                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                    </svg>
                                </td>
                                <td class="p-4 text-gray-600 border-solid border-b border-gray-200 text-right">
                                    <ul class="inline-flex">
                                        <li>
                                            <button class="block text-xs text-white bg-green-400 hover:border-gray-500 rounded-sm py-1 px-2 mr-1 w-8 h-8 text-center focus:outline-none">
                                                <svg class="w-5" viewBox="0 0 20 20" fill="currentColor" class="pencil w-6 h-6"><path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"></path>
                                                </svg>
                                            </button>
                                        </li>
                                        <li>
                                            <button class="block text-xs text-white border-solid bg-red-400 hover:bg-red-500 border border-red-400 hover:border-red-500 rounded-sm py-1 px-2 mr-1 h-8 text-center focus:outline-none">
                                                <svg class="w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="trash w-6 h-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                                </svg>
                                            </button>
                                        </li>
                                        <li>
                                            <button class="block text-xs text-red-400 border-solid bg-white border border-gray-400 hover:border-gray-500 rounded-sm py-1 px-2 mr-1 h-8 text-center focus:outline-none">
                                                <svg class="w-5" viewBox="0 0 20 20" fill="currentColor" class="eye-off w-6 h-6">
                                                    <path fill-rule="evenodd" d="M3.707 2.293a1 1 0 00-1.414 1.414l14 14a1 1 0 001.414-1.414l-1.473-1.473A10.014 10.014 0 0019.542 10C18.268 5.943 14.478 3 10 3a9.958 9.958 0 00-4.512 1.074l-1.78-1.781zm4.261 4.26l1.514 1.515a2.003 2.003 0 012.45 2.45l1.514 1.514a4 4 0 00-5.478-5.478z" clip-rule="evenodd"></path><path d="M12.454 16.697L9.75 13.992a4 4 0 01-3.742-3.741L2.335 6.578A9.98 9.98 0 00.458 10c1.274 4.057 5.065 7 9.542 7 .847 0 1.669-.105 2.454-.303z"></path>
                                                </svg>
                                            </button>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                            <tr class="border-solid border-b border-gray-200">
                                <td class="p-4 text-gray-600">
                                    <input class="mr-2 leading-tight form-checkbox" type="checkbox">
                                </td>
                                <td class="text-sm font-medium p-4 pt-2 pb-2 text-gray-600" style="width: 50px;">
                                    9
                                </td>
                                <td class="text-sm font-medium p-4 pt-2 pb-2 text-gray-600">
                                    Parts Enquiry Email	
                                </td>
                                <td class="text-sm p-4 pt-2 pb-2 text-gray-600">
                                    sheejjohn@gmail.com	
                                </td>
                                <td class="text-sm p-4 pt-2 pb-2 text-gray-600">
                                    parts enq
                                </td>
                                <td class="text-sm p-4 pt-2 pb-2 text-red-400">
                                    <svg viewBox="0 0 20 20" fill="currentColor" class="x w-6 h-6">
                                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                    </svg>
                                </td>
                                <td class="p-4 text-gray-600 border-solid border-b border-gray-200 text-right">
                                    <ul class="inline-flex">
                                        <li>
                                            <button class="block text-xs text-white bg-green-400 hover:border-gray-500 rounded-sm py-1 px-2 mr-1 w-8 h-8 text-center focus:outline-none">
                                                <svg class="w-5" viewBox="0 0 20 20" fill="currentColor" class="pencil w-6 h-6"><path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"></path>
                                                </svg>
                                            </button>
                                        </li>
                                        <li>
                                            <button class="block text-xs text-white border-solid bg-red-400 hover:bg-red-500 border border-red-400 hover:border-red-500 rounded-sm py-1 px-2 mr-1 h-8 text-center focus:outline-none">
                                                <svg class="w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="trash w-6 h-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                                </svg>
                                            </button>
                                        </li>
                                        <li>
                                            <button class="block text-xs text-red-400 border-solid bg-white border border-gray-400 hover:border-gray-500 rounded-sm py-1 px-2 mr-1 h-8 text-center focus:outline-none">
                                                <svg class="w-5" viewBox="0 0 20 20" fill="currentColor" class="eye-off w-6 h-6">
                                                    <path fill-rule="evenodd" d="M3.707 2.293a1 1 0 00-1.414 1.414l14 14a1 1 0 001.414-1.414l-1.473-1.473A10.014 10.014 0 0019.542 10C18.268 5.943 14.478 3 10 3a9.958 9.958 0 00-4.512 1.074l-1.78-1.781zm4.261 4.26l1.514 1.515a2.003 2.003 0 012.45 2.45l1.514 1.514a4 4 0 00-5.478-5.478z" clip-rule="evenodd"></path><path d="M12.454 16.697L9.75 13.992a4 4 0 01-3.742-3.741L2.335 6.578A9.98 9.98 0 00.458 10c1.274 4.057 5.065 7 9.542 7 .847 0 1.669-.105 2.454-.303z"></path>
                                                </svg>
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
                                                    <li class="text-md inline-block py-2 px-3 bg-white border border-gray-400 text-gray-600 hover:text-white md:border-r-0 ml-0 rounded-l hover:bg-gray-400">
                                                        <a href="#">
                                                            <svg class="w-4" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M15 19l-7-7 7-7"></path></svg>
                                                        </a>
                                                    </li>
                                                    <li class="text-md inline-block py-1 px-3 bg-gray-200 border border-gray-400 text-gray-600 md:border-r-0">
                                                        <a href="#">1</a>
                                                    </li>
                                                    <li class="text-md inline-block py-1 px-3 bg-white border border-gray-400 text-gray-600 hover:text-white md:border-r-0 hover:bg-gray-400">
                                                        <a href="#">2</a>
                                                    </li>
                                                    <li class="text-md inline-block py-1 px-3 bg-white border border-gray-400 text-gray-600 hover:text-white md:border-r-0 hover:bg-gray-400">
                                                        <a href="#">3</a>
                                                    </li>
                                                    <li class="text-md inline-block py-1 px-3 bg-white border border-gray-400 text-gray-600 hover:text-white md:border-r-0 hover:bg-gray-400">
                                                        <a href="#">4</a>
                                                    </li>
                                                    <li class="text-md inline-block py-1 px-3 bg-white border border-gray-400 text-gray-600 hover:text-white md:border-r-0 hover:bg-gray-400">
                                                        <a href="#">5</a>
                                                    </li>
                                                    <li class="text-md inline-block py-2 px-3 bg-white border border-gray-400 text-gray-600 hover:text-white rounded-r hover:bg-gray-400">
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
        </div>
        <div class="w-full lg:w-1/4">
            <div class="px-3 pr-0 pb-2 mt-4 lg:mt-0 lg:ml-6 mb-6">
                <ul class="list-reset mb-4">
                    <li>
                        <a href="#" class="px-2 py-2 block hover:bg-white mb-1 rounded hover:text-gray-900 text-gray-600 text-sm font-medium">
                            General
                        </a>
                    </li>
                    <li>
                        <a href="#" class="px-2 py-2 block hover:bg-white mb-1 rounded hover:text-gray-900 text-gray-600 text-sm font-medium">
                            Logging
                        </a>
                    </li>
                    <li>
                        <a href="#" class="px-2 py-2 block hover:bg-white mb-1 rounded hover:text-gray-900 text-gray-600 text-sm font-medium">
                            API Integrations
                        </a>
                    </li>
                    <li>
                        <a href="#" class="px-2 py-2 block hover:bg-white mb-1 rounded hover:text-gray-900 text-gray-600 text-sm font-medium">
                            Redirects
                        </a>
                    </li>
                    <li>
                        <a href="#" class="px-2 py-2 block hover:bg-white mb-1 rounded hover:text-gray-900 text-gray-600 text-sm font-medium">
                            SEO
                        </a>
                    </li>
                    <li>
                        <a href="#" class="px-2 py-2 block hover:bg-white mb-1 rounded hover:text-gray-900 text-gray-600 text-sm font-medium">
                            Contact Information 
                        </a>
                    </li>
                    <li>
                        <a href="#" class="px-2 py-2 block hover:bg-white mb-1 rounded hover:text-gray-900 text-gray-600 text-sm font-medium">
                            Email Credentials
                        </a>
                    </li>
                    <li>
                        <a href="#" class="px-2 py-2 block shadow mb-1 rounded bg-white text-gray-900 text-sm font-medium">
                            Email Settings
                        </a>
                    </li>
                    <li>
                        <a href="#" class="px-2 py-2 block hover:bg-white mb-1 rounded hover:text-gray-900 text-gray-600 text-sm font-medium">
                            Google Analytics
                        </a>
                    </li>
                    <li>
                        <a href="#" class="px-2 py-2 block hover:bg-white mb-1 rounded hover:text-gray-900 text-gray-600 text-sm font-medium">
                            Marketing Referrals
                        </a>
                    </li>
                    <li>
                        <a href="#" class="px-2 py-2 block hover:bg-white mb-1 rounded hover:text-gray-900 text-gray-600 text-sm font-medium">
                            Maintenance Mode
                        </a>
                    </li>
                    <li>
                        <a href="#" class="px-2 py-2 block hover:bg-white mb-1 rounded hover:text-gray-900 text-gray-600 text-sm font-medium">
                            Cart
                        </a>
                    </li>
                    <li>
                        <a href="#" class="px-2 py-2 block hover:bg-white mb-1 rounded hover:text-gray-900 text-gray-600 text-sm font-medium">
                            Store Locator
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</x-app>