@extends('layouts.blank') 
@section('header') 
    @include('layouts.header') 
@endsection 

@section('content')
    <div class="lg:mt-0 rounded shadow bg-white mb-6 overflow-hidden">
        <div class="flex p-4 pt-2 pb-2 border-b border-bg-gray-300">
            <div class="w-1/2 self-center">
                <h2 class="uppercase pull-right pr-4 text-gray-700 font-medium">Products</h2>
            </div>
            <div class="w-1/2 text-right">
                <button class="bg-blue-600 hover:bg-blue-700 outline-none focus:border-teal-900 text-white py-1 px-6 rounded shadow uppercase inline-flex text-sm font-medium">
                    Add Product
                </button>
            </div>
        </div>
        <div class="md:flex p-4 pt-3 pb-3">
            <div class="mb-4 md:mb-0 md:w-1/2 self-center text-center md:text-left">
                <div class="inline-flex">
                    <a href="#" class="bg-gray-100 text-gray-700 hover:text-gray-600 py-1 px-4 border border-gray-400 border-r-0">
                        All
                    </a>
                    <a href="#" class="hover:bg-gray-100 text-gray-600 hover:text-gray-700  py-1 px-4 border border-gray-400 border-r-0">
                        Enabled
                    </a>
                    <a href="#" class="hover:bg-gray-100 text-gray-600 hover:text-gray-700 py-1 px-4 border border-gray-400 border-r-0">
                        Disabled
                    </a>
                    <button class="hover:bg-gray-100 text-gray-600 hover:text-gray-700 py-1 px-4 border border-gray-400 border-l-0">
                        Delete
                    </button>
                </div>
            </div>
            <div class="md:w-1/2 text-center md:text-right">
                <div class="inline-flex">

                    <div class="relative">
                        <select class="appearance-none bg-gray-300 border border-gray-200 text-gray-700 py-2 px-4 pr-8 h-10 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                            <option>Select Warehouse</option>
                            <option>All</option>
                            <option>Australia</option>
                            <option>United States</option>
                        </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700"><svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"></path></svg></div>
                    </div>

                    <div class="relative">
                        <select class="appearance-none border border-gray-400 text-gray-700 py-2 px-4 pr-8 h-10 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                            <option>Product</option>
                            <option>Sku</option>
                            <option>Brand</option>
                            <option>Category</option>
                            <option>Condition</option>
                            <option>Attribute</option>
                            <option>Attribute Value</option>
                            <option>Association Value</option>
                        </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700"><svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"></path></svg></div>
                    </div>

                    <div class="relative">
                        <span class="algolia-autocomplete" style="position: relative; display: inline-block; direction: ltr;">
                            <input id="docsearch" class="transition focus:outline-0 border border-transparent focus:bg-white focus:border-gray-300 placeholder-gray-600 bg-gray-100 py-2 pr-4 pl-4 h-10 block w-full appearance-none leading-normal ds-input" type="text" placeholder="Search.." autocomplete="off" spellcheck="false" role="combobox" aria-autocomplete="list" aria-expanded="false" aria-label="search input" aria-owns="algolia-autocomplete-listbox-0" dir="auto" style="position: relative; vertical-align: top;">
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
                    
                </div>
            </div>
            
        </div>
        
        <div class="w-full p-4 pt-0 pb-2 mb-3">
            <div class="p-3 pl-4 pr-4 bg-blue-400 items-center text-white leading-none lg:rounded-sm flex">
                <span class="text-sm mr-2 text-left flex-auto"><strong>Ordering:</strong> Order the rows by dragging the <i class="fas fa-arrows-alt"></i>  icon.</span>
            </div>
        </div>

        <div class="overflow-hidden overflow-x-auto p-4 pt-0">
            <table class="w-full">
                <thead>
                    <tr class="bg-gray-200 rounded shadow">
                        <th class="text-gray-500 font-medium  p-4 text-left"></th>
                        <th class="text-gray-500 font-medium  p-4 text-left">
                            <input class="mr-2 leading-tight" type="checkbox">
                        </th>
                        <th class="text-sm text-gray-600 font-medium  p-4 text-left" style="width: 50px;">
                            ID
                        </th>
                        <th class="text-sm text-gray-600 font-medium  p-4 text-left">Product Name</th>
                        <th class="text-sm text-gray-600 font-medium  p-4 text-left">Warehouse</th>
                        <th class="text-sm text-gray-600 font-medium  p-4 text-left">Variants</th>
                        <th class="text-sm text-gray-600 font-medium  p-4 text-left">Order</th>
                        <th class="text-sm text-gray-600 font-medium  p-4 text-left"> Created At</th>
                        <th class="text-sm text-gray-600 font-medium  p-4 text-center">Quick Links</th>
                        <th class="text-sm text-gray-600 font-medium  p-4 text-center">Action</th>
                    </tr>
                </thead>
                <tbody class="mb-4">
                    <tr>
                        <td class="text-sm p-4 pt-2 pb-2 text-gray-700"><i class="fas fa-arrows-alt"></i></td>
                        <td class="p-4 text-gray-700">
                            <input class="mr-2 leading-tight" type="checkbox">
                        </td>
                        <td class="text-sm p-4 pt-2 pb-2 text-gray-700" style="width: 50px;">
                            1
                        </td>
                        <td class="text-sm p-4 pt-2 pb-2 text-gray-700">Tester US Product	</td>
                        <td class="text-sm p-4 pt-2 pb-2 text-gray-700">
                            <span class="bg-gray-300 inline-block px-3 p-1 rounded-sm">Australia</span>
                        </td>
                        <td class="text-sm p-4 pt-2 pb-2 text-gray-700">
                            <div class="overflow-hidden inline-flex">
                                <span class="bg-white border border-gray-400 text-gray-600 inline-block px-3 p-1 rounded-sm rounded-r-none">2</span>
                                <span class="bg-white border border-gray-400 border-l-0 text-gray-600 inline-block px-3 p-1 rounded-sm rounded-l-none">
                                    <i class="fas fa-info"></i>
                                </span>
                            </div>
                        </td>
                        <td class="text-sm p-4 pt-2 pb-2 text-gray-700">1</td>
                        <td class="text-sm p-4 pt-2 pb-2 text-gray-700 w-32">
                            26 Sep, 2019 06:58 pm
                        </td>
                        <td class="text-sm p-4 pt-2 pb-2 text-gray-700">
                            <div class="inline-flex">
                                <div class="relative">
                                    <select class="rounded-sm appearance-none text-gray-700 border border-gray-400 px-3 pr-6 h-8 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                                        <option selected="">
                                            Information
                                        </option>
                                        <option>Inventory</option>
                                        <option>Features</option>
                                        <option>Note</option>
                                        <option>Associations</option>
                                        <option>Images</option>
                                        <option>Attachments</option>
                                        <option>Variants</option>
                                        <option>Price</option>
                                        <option>Review</option>
                                        <option>Related Product</option>
                                        <option>Shipping</option>
                                        <option>eBay</option>
                                    </select>
                                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700"><svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </td>
                        
                        <td class="p-4 text-gray-700 text-sm text-right">
                            <ul class="inline-flex">
                                <li>
                                    <button class="block text-xs text-gray-800 border-solid bg-white border border-gray-400 hover:border-gray-500 rounded-sm py-1 px-2 mr-1 h-8 text-center">
                                        <i class="fas fa-copy"></i>
                                    </button>
                                </li>
                                <li>
                                    <button class="block text-xs text-gray-800 border-solid bg-white border border-gray-400 hover:border-gray-500 rounded-sm py-1 px-2 mr-1 h-8 text-center">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                </li>
                                <li>
                                    <button class="block text-xs text-gray-800 border-solid bg-white border border-gray-400 hover:border-gray-500 rounded-sm py-1 px-2 mr-1 h-8 text-center">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </li>
                                <li>
                                    <button class="block text-xs text-white border border-solid border-gray-500 bg-green-400 hover:border-gray-500 rounded-sm py-1 px-2 mr-1 w-8 h-8 text-center">
                                        <i class="fas fa-check"></i>
                                    </button>
                                </li>
                            </ul>
                        </td>
                    </tr>

                    <tr class="bg-gray-100 rounded shadow">
                        <td class="text-sm p-4 pt-2 pb-2 text-gray-700"><i class="fas fa-arrows-alt"></i></td>
                        <td class="p-4 text-gray-700 border-solid border-b border-gray-200">
                            <input class="mr-2 leading-tight" type="checkbox">
                        </td>
                        <td class="text-sm p-4 pt-2 pb-2 text-gray-700 border-solid border-b border-gray-200" style="width: 50px;">
                            2
                        </td>
                        <td class="text-sm p-4 pt-2 pb-2 text-gray-700 border-solid border-b border-gray-200">AU Test Product Price=0 POA main</td>
                        <td class="text-sm p-4 pt-2 pb-2 text-gray-700 border-solid border-b border-gray-200">
                            <span class="bg-gray-300 inline-block px-3 p-1 rounded-sm">United States</span>
                        </td>
                        <td class="text-sm p-4 pt-2 pb-2 text-gray-700 border-solid border-b border-gray-200">
                            <div class="overflow-hidden inline-flex">
                                <span class="bg-white border border-gray-400 text-gray-600 inline-block px-3 p-1 rounded-sm rounded-r-none">2</span>
                                <span class="bg-white border border-gray-400 border-l-0 text-gray-600 inline-block px-3 p-1 rounded-sm rounded-l-none">
                                    <i class="fas fa-info"></i>
                                </span>
                            </div>
                        </td>
                        <td class="text-sm p-4 pt-2 pb-2 text-gray-700 border-solid border-b border-gray-200">2</td>
                        <td class="text-sm p-4 pt-2 pb-2 text-gray-700 border-solid border-b border-gray-200 w-32">
                            26 Sep, 2019 06:58 pm
                        </td>
                        <td class="text-sm p-4 pt-2 pb-2 text-gray-700">
                            <div class="inline-flex">
                                <div class="relative">
                                    <select class="rounded-sm appearance-none text-gray-700 border border-gray-400 px-3 pr-6 h-8 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                                        <option selected="">
                                            Information
                                        </option>
                                        <option>Inventory</option>
                                        <option>Features</option>
                                        <option>Note</option>
                                        <option>Associations</option>
                                        <option>Images</option>
                                        <option>Attachments</option>
                                        <option>Variants</option>
                                        <option>Price</option>
                                        <option>Review</option>
                                        <option>Related Product</option>
                                        <option>Shipping</option>
                                        <option>eBay</option>
                                    </select>
                                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700"><svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="p-4 text-gray-700 border-solid border-b border-gray-200 text-sm text-right">
                            <ul class="inline-flex">
                                <li>
                                    <button class="block text-xs text-gray-800 border-solid bg-white border border-gray-400 hover:border-gray-500 rounded-sm py-1 px-2 mr-1 h-8 text-center">
                                        <i class="fas fa-copy"></i>
                                    </button>
                                </li>
                                <li>
                                    <button class="block text-xs text-gray-800 border-solid bg-white border border-gray-400 hover:border-gray-500 rounded-sm py-1 px-2 mr-1 h-8 text-center">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                </li>
                                <li>
                                    <button class="block text-xs text-gray-800 border-solid bg-white border border-gray-400 hover:border-gray-500 rounded-sm py-1 px-2 mr-1 h-8 text-center">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </li>
                                <li>
                                    <button class="block text-xs text-white bg-red-500 hover:border-red-500rounded-sm py-1 px-2 w-8 mr-1 h-8 text-center">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </li>
                            </ul>
                        </td>
                    </tr>

                    <tr>
                        <td class="text-sm p-4 pt-2 pb-2 text-gray-700"><i class="fas fa-arrows-alt"></i></td>
                        <td class="p-4 text-gray-700">
                            <input class="mr-2 leading-tight" type="checkbox">
                        </td>
                        <td class="text-sm p-4 pt-2 pb-2 text-gray-700" style="width: 50px;">
                            3
                        </td>
                        <td class="text-sm p-4 pt-2 pb-2 text-gray-700">Test Ebay Product Listing Template</td>
                        <td class="text-sm p-4 pt-2 pb-2 text-gray-700">
                            <span class="bg-gray-300 inline-block px-3 p-1 rounded-sm">Australia</span>
                        </td>
                        <td class="text-sm p-4 pt-2 pb-2 text-gray-700 border-solid border-b border-gray-200">
                            <div class="overflow-hidden inline-flex">
                                <span class="bg-white border border-gray-400 text-gray-600 inline-block px-3 p-1 rounded-sm rounded-r-none">3</span>
                                <span class="bg-white border border-gray-400 border-l-0 text-gray-600 inline-block px-3 p-1 rounded-sm rounded-l-none">
                                    <i class="fas fa-info"></i>
                                </span>
                            </div>
                        </td>
                        <td class="text-sm p-4 pt-2 pb-2 text-gray-700">3</td>
                        <td class="text-sm p-4 pt-2 pb-2 text-gray-700 w-32">
                            26 Sep, 2019 06:58 pm
                        </td>
                        <td class="text-sm p-4 pt-2 pb-2 text-gray-700">
                            <div class="inline-flex">
                                <div class="relative">
                                    <select class="rounded-sm appearance-none text-gray-700 border border-gray-400 px-3 pr-6 h-8 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                                        <option selected="">
                                            Information
                                        </option>
                                        <option>Inventory</option>
                                        <option>Features</option>
                                        <option>Note</option>
                                        <option>Associations</option>
                                        <option>Images</option>
                                        <option>Attachments</option>
                                        <option>Variants</option>
                                        <option>Price</option>
                                        <option>Review</option>
                                        <option>Related Product</option>
                                        <option>Shipping</option>
                                        <option>eBay</option>
                                    </select>
                                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700"><svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="p-4 text-gray-700 text-sm text-right">
                            <ul class="inline-flex">
                                <li>
                                    <button class="block text-xs text-gray-800 border-solid bg-white border border-gray-400 hover:border-gray-500 rounded-sm py-1 px-2 mr-1 h-8 text-center">
                                        <i class="fas fa-copy"></i>
                                    </button>
                                </li>
                                <li>
                                    <button class="block text-xs text-gray-800 border-solid bg-white border border-gray-400 hover:border-gray-500 rounded-sm py-1 px-2 mr-1 h-8 text-center">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                </li>
                                <li>
                                    <button class="block text-xs text-gray-800 border-solid bg-white border border-gray-400 hover:border-gray-500 rounded-sm py-1 px-2 mr-1 h-8 text-center">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </li>
                                <li>
                                    <button class="block text-xs text-white bg-green-400 hover:border-gray-500 rounded-sm py-1 px-2 mr-1 w-8 h-8 text-center">
                                        <i class="fas fa-check"></i>
                                    </button>
                                </li>
                            </ul>
                        </td>
                    </tr>

                    <tr class="bg-gray-100 shadow">
                        <td class="text-sm p-4 pt-2 pb-2 text-gray-700"><i class="fas fa-arrows-alt"></i></td>
                        <td class="p-4 text-gray-700">
                            <input class="mr-2 leading-tight" type="checkbox">
                        </td>
                        <td class="text-sm p-4 pt-2 pb-2 text-gray-700" style="width: 50px;">
                            4
                        </td>
                        <td class="text-sm p-4 pt-2 pb-2 text-gray-700">Test new product on 30.05.2017 for testing the length issue and the & chr issue in ebay</td>
                        <td class="text-sm p-4 pt-2 pb-2 text-gray-700">
                            <span class="bg-gray-300 inline-block px-3 p-1 rounded-sm">Australia</span>
                        </td>
                        <td class="text-sm p-4 pt-2 pb-2 text-gray-700 border-solid border-b border-gray-200">
                            <div class="overflow-hidden inline-flex">
                                <span class="bg-white border border-gray-400 text-gray-600 inline-block px-3 p-1 rounded-sm rounded-r-none">4</span>
                                <span class="bg-white border border-gray-400 border-l-0 text-gray-600 inline-block px-3 p-1 rounded-sm rounded-l-none">
                                    <i class="fas fa-info"></i>
                                </span>
                            </div>
                        </td>
                        <td class="text-sm p-4 pt-2 pb-2 text-gray-700">4</td>
                        <td class="text-sm p-4 pt-2 pb-2 text-gray-700 w-32">
                            26 Sep, 2019 06:58 pm
                        </td>
                        <td class="text-sm p-4 pt-2 pb-2 text-gray-700">
                            <div class="inline-flex">
                                <div class="relative">
                                    <select class="rounded-sm appearance-none text-gray-700 border border-gray-400 px-3 pr-6 h-8 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                                        <option selected="">
                                            Information
                                        </option>
                                        <option>Inventory</option>
                                        <option>Features</option>
                                        <option>Note</option>
                                        <option>Associations</option>
                                        <option>Images</option>
                                        <option>Attachments</option>
                                        <option>Variants</option>
                                        <option>Price</option>
                                        <option>Review</option>
                                        <option>Related Product</option>
                                        <option>Shipping</option>
                                        <option>eBay</option>
                                    </select>
                                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700"><svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="p-4 text-gray-700 text-sm text-right">
                            <ul class="inline-flex">
                                <li>
                                    <button class="block text-xs text-gray-800 border-solid bg-white border border-gray-400 hover:border-gray-500 rounded-sm py-1 px-2 mr-1 h-8 text-center">
                                        <i class="fas fa-copy"></i>
                                    </button>
                                </li>
                                <li>
                                    <button class="block text-xs text-gray-800 border-solid bg-white border border-gray-400 hover:border-gray-500 rounded-sm py-1 px-2 mr-1 h-8 text-center">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                </li>
                                <li>
                                    <button class="block text-xs text-gray-800 border-solid bg-white border border-gray-400 hover:border-gray-500 rounded-sm py-1 px-2 mr-1 h-8 text-center">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </li>
                                <li>
                                    <button class="block text-xs text-white bg-green-400 hover:border-gray-500 rounded-sm py-1 px-2 mr-1 w-8 h-8 text-center">
                                        <i class="fas fa-check"></i>
                                    </button>
                                </li>
                            </ul>
                        </td>
                    </tr>

                    <tr>
                        <td class="text-sm p-4 pt-2 pb-2 text-gray-700"><i class="fas fa-arrows-alt"></i></td>
                        <td class="p-4 text-gray-700">
                            <input class="mr-2 leading-tight" type="checkbox">
                        </td>
                        <td class="text-sm p-4 pt-2 pb-2 text-gray-700" style="width: 50px;">
                            5
                        </td>
                        <td class="text-sm p-4 pt-2 pb-2 text-gray-700">Qc ebay product with single variant & NO image</td>
                        <td class="text-sm p-4 pt-2 pb-2 text-gray-700">
                            <span class="bg-gray-300 inline-block px-3 p-1 rounded-sm">Australia</span>
                        </td>
                        <td class="text-sm p-4 pt-2 pb-2 text-gray-700 border-solid border-b border-gray-200">
                            <div class="overflow-hidden inline-flex">
                                <span class="bg-white border border-gray-400 text-gray-600 inline-block px-3 p-1 rounded-sm rounded-r-none">1</span>
                                <span class="bg-white border border-gray-400 border-l-0 text-gray-600 inline-block px-3 p-1 rounded-sm rounded-l-none">
                                    <i class="fas fa-info"></i>
                                </span>
                            </div>
                        </td>
                        <td class="text-sm p-4 pt-2 pb-2 text-gray-700">5</td>
                        <td class="text-sm p-4 pt-2 pb-2 text-gray-700 w-32">
                            26 Sep, 2019 06:58 pm
                        </td>
                        <td class="text-sm p-4 pt-2 pb-2 text-gray-700">
                            <div class="inline-flex">
                                <div class="relative">
                                    <select class="rounded-sm appearance-none text-gray-700 border border-gray-400 px-3 pr-6 h-8 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                                        <option selected="">
                                            Information
                                        </option>
                                        <option>Inventory</option>
                                        <option>Features</option>
                                        <option>Note</option>
                                        <option>Associations</option>
                                        <option>Images</option>
                                        <option>Attachments</option>
                                        <option>Variants</option>
                                        <option>Price</option>
                                        <option>Review</option>
                                        <option>Related Product</option>
                                        <option>Shipping</option>
                                        <option>eBay</option>
                                    </select>
                                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700"><svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="p-4 text-gray-700 text-right">
                            <ul class="inline-flex">
                                <li>
                                    <button class="block text-xs text-gray-800 border-solid bg-white border border-gray-400 hover:border-gray-500 rounded-sm py-1 px-2 mr-1 h-8 text-center">
                                        <i class="fas fa-copy"></i>
                                    </button>
                                </li>
                                <li>
                                    <button class="block text-xs text-gray-800 border-solid bg-white border border-gray-400 hover:border-gray-500 rounded-sm py-1 px-2 mr-1 h-8 text-center">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                </li>
                                <li>
                                    <button class="block text-xs text-gray-800 border-solid bg-white border border-gray-400 hover:border-gray-500 rounded-sm py-1 px-2 mr-1 h-8 text-center">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </li>
                                <li>
                                    <button class="block text-xs text-white border border-solid border-gray-500 bg-green-400 hover:border-gray-500 rounded-sm py-1 px-2 mr-1 w-8 h-8 text-center">
                                        <i class="fas fa-check"></i>
                                    </button>
                                </li>
                            </ul>
                        </td>
                    </tr>

                    <tr class="bg-gray-100 rounded shadow">
                        <td class="text-sm p-4 pt-2 pb-2 text-gray-700"><i class="fas fa-arrows-alt"></i></td>
                        <td class="p-4 text-gray-700 border-solid border-b border-gray-200">
                            <input class="mr-2 leading-tight" type="checkbox">
                        </td>
                        <td class="text-sm p-4 pt-2 pb-2 text-gray-700 border-solid border-b border-gray-200" style="width: 50px;">
                            6
                        </td>
                        <td class="text-sm p-4 pt-2 pb-2 text-gray-700 border-solid border-b border-gray-200">QC New product for ebay desc tab</td>
                        <td class="text-sm p-4 pt-2 pb-2 text-gray-700 border-solid border-b border-gray-200">
                            <span class="bg-gray-300 inline-block px-3 p-1 rounded-sm">United States</span>
                        </td>
                        <td class="text-sm p-4 pt-2 pb-2 text-gray-700 border-solid border-b border-gray-200">
                            <div class="overflow-hidden inline-flex">
                                <span class="bg-white border border-gray-400 text-gray-600 inline-block px-3 p-1 rounded-sm rounded-r-none">2</span>
                                <span class="bg-white border border-gray-400 border-l-0 text-gray-600 inline-block px-3 p-1 rounded-sm rounded-l-none">
                                    <i class="fas fa-info"></i>
                                </span>
                            </div>
                        </td>
                        <td class="text-sm p-4 pt-2 pb-2 text-gray-700 border-solid border-b border-gray-200">6</td>
                        <td class="text-sm p-4 pt-2 pb-2 text-gray-700 border-solid border-b border-gray-200 w-32">
                            26 Sep, 2019 06:58 pm
                        </td>
                        <td class="text-sm p-4 pt-2 pb-2 text-gray-700">
                            <div class="inline-flex">
                                <div class="relative">
                                    <select class="rounded-sm appearance-none text-gray-700 border border-gray-400 px-3 pr-6 h-8 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                                        <option selected="">
                                            Information
                                        </option>
                                        <option>Inventory</option>
                                        <option>Features</option>
                                        <option>Note</option>
                                        <option>Associations</option>
                                        <option>Images</option>
                                        <option>Attachments</option>
                                        <option>Variants</option>
                                        <option>Price</option>
                                        <option>Review</option>
                                        <option>Related Product</option>
                                        <option>Shipping</option>
                                        <option>eBay</option>
                                    </select>
                                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700"><svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="p-4 text-gray-700 border-solid border-b border-gray-200 text-right">
                            <ul class="inline-flex">
                                
                                <li>
                                    <button class="block text-xs text-gray-800 border-solid bg-white border border-gray-400 hover:border-gray-500 rounded-sm py-1 px-2 mr-1 h-8 text-center">
                                        <i class="fas fa-copy"></i>
                                    </button>
                                </li>
                                <li>
                                    <button class="block text-xs text-gray-800 border-solid bg-white border border-gray-400 hover:border-gray-500 rounded-sm py-1 px-2 mr-1 h-8 text-center">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                </li>
                                <li>
                                    <button class="block text-xs text-gray-800 border-solid bg-white border border-gray-400 hover:border-gray-500 rounded-sm py-1 px-2 mr-1 h-8 text-center">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </li>
                                <li>
                                    <button class="block text-xs text-white bg-red-500 hover:border-red-500rounded-sm py-1 px-2 w-8 mr-1 h-8 text-center">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </li>
                            </ul>
                        </td>
                    </tr>

                    <tr>
                        <td class="text-sm p-4 pt-2 pb-2 text-gray-700"><i class="fas fa-arrows-alt"></i></td>
                        <td class="p-4 text-gray-700">
                            <input class="mr-2 leading-tight" type="checkbox">
                        </td>
                        <td class="text-sm p-4 pt-2 pb-2 text-gray-700" style="width: 50px;">
                            7
                        </td>
                        <td class="text-sm p-4 pt-2 pb-2 text-gray-700">QC New Product 25.5.2017</td>
                        <td class="text-sm p-4 pt-2 pb-2 text-gray-700">
                            <span class="bg-gray-300 inline-block px-3 p-1 rounded-sm">Australia</span>
                        </td>
                        <td class="text-sm p-4 pt-2 pb-2 text-gray-700 border-solid border-b border-gray-200">
                            <div class="overflow-hidden inline-flex">
                                <span class="bg-white border border-gray-400 text-gray-600 inline-block px-3 p-1 rounded-sm rounded-r-none">2</span>
                                <span class="bg-white border border-gray-400 border-l-0 text-gray-600 inline-block px-3 p-1 rounded-sm rounded-l-none">
                                    <i class="fas fa-info"></i>
                                </span>
                            </div>
                        </td>
                        <td class="text-sm p-4 pt-2 pb-2 text-gray-700">7</td>
                        <td class="text-sm p-4 pt-2 pb-2 text-gray-700 w-32">
                            26 Sep, 2019 06:58 pm
                        </td>
                        <td class="text-sm p-4 pt-2 pb-2 text-gray-700">
                            <div class="inline-flex">
                                <div class="relative">
                                    <select class="rounded-sm appearance-none text-gray-700 border border-gray-400 px-3 pr-6 h-8 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                                        <option selected="">
                                            Information
                                        </option>
                                        <option>Inventory</option>
                                        <option>Features</option>
                                        <option>Note</option>
                                        <option>Associations</option>
                                        <option>Images</option>
                                        <option>Attachments</option>
                                        <option>Variants</option>
                                        <option>Price</option>
                                        <option>Review</option>
                                        <option>Related Product</option>
                                        <option>Shipping</option>
                                        <option>eBay</option>
                                    </select>
                                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700"><svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"></path>
                                        </svg>
                                    </div>
                                </div>
                            
                            </div>
                        </td>
                        <td class="p-4 text-gray-700 text-right">
                            <ul class="inline-flex">
                                
                                <li>
                                    <button class="block text-xs text-gray-800 border-solid bg-white border border-gray-400 hover:border-gray-500 rounded-sm py-1 px-2 mr-1 h-8 text-center">
                                        <i class="fas fa-copy"></i>
                                    </button>
                                </li>
                                <li>
                                    <button class="block text-xs text-gray-800 border-solid bg-white border border-gray-400 hover:border-gray-500 rounded-sm py-1 px-2 mr-1 h-8 text-center">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                </li>
                                <li>
                                    <button class="block text-xs text-gray-800 border-solid bg-white border border-gray-400 hover:border-gray-500 rounded-sm py-1 px-2 mr-1 h-8 text-center">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </li>
                                <li>
                                    <button class="block text-xs text-white bg-green-400 hover:border-gray-500 rounded-sm py-1 px-2 mr-1 w-8 h-8 text-center">
                                        <i class="fas fa-check"></i>
                                    </button>
                                </li>
                            </ul>
                        </td>
                    </tr>

                    <tr class="bg-gray-100 rounded shadow">
                        <td class="text-sm p-4 pt-2 pb-2 text-gray-700"><i class="fas fa-arrows-alt"></i></td>
                        <td class="p-4 text-gray-700">
                            <input class="mr-2 leading-tight" type="checkbox">
                        </td>
                        <td class="text-sm p-4 pt-2 pb-2 text-gray-700" style="width: 50px;">
                            8
                        </td>
                        <td class="text-sm p-4 pt-2 pb-2 text-gray-700">Qc ebay product with single variant & featured multiple image	</td>
                        <td class="text-sm p-4 pt-2 pb-2 text-gray-700">
                            <span class="bg-gray-300 inline-block px-3 p-1 rounded-sm">Australia</span>
                        </td>
                        <td class="text-sm p-4 pt-2 pb-2 text-gray-700 border-solid border-b border-gray-200">
                            <div class="overflow-hidden inline-flex">
                                <span class="bg-white border border-gray-400 text-gray-600 inline-block px-3 p-1 rounded-sm rounded-r-none">2</span>
                                <span class="bg-white border border-gray-400 border-l-0 text-gray-600 inline-block px-3 p-1 rounded-sm rounded-l-none">
                                    <i class="fas fa-info"></i>
                                </span>
                            </div>
                        </td>
                        <td class="text-sm p-4 pt-2 pb-2 text-gray-700">8</td>
                        <td class="text-sm p-4 pt-2 pb-2 text-gray-700 w-32">
                            26 Sep, 2019 06:58 pm
                        </td>
                        <td class="text-sm p-4 pt-2 pb-2 text-gray-700">
                            <div class="inline-flex">
                                <div class="relative">
                                    <select class="rounded-sm appearance-none text-gray-700 border border-gray-400 px-3 pr-6 h-8 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                                        <option selected="">
                                            Information
                                        </option>
                                        <option>Inventory</option>
                                        <option>Features</option>
                                        <option>Note</option>
                                        <option>Associations</option>
                                        <option>Images</option>
                                        <option>Attachments</option>
                                        <option>Variants</option>
                                        <option>Price</option>
                                        <option>Review</option>
                                        <option>Related Product</option>
                                        <option>Shipping</option>
                                        <option>eBay</option>
                                    </select>
                                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700"><svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"></path>
                                        </svg>
                                    </div>
                                </div>
                                
                            </div>
                        </td>
                        <td class="p-4 text-gray-700 text-right">
                            <ul class="inline-flex">
                                
                                <li>
                                    <button class="block text-xs text-gray-800 border-solid bg-white border border-gray-400 hover:border-gray-500 rounded-sm py-1 px-2 mr-1 h-8 text-center">
                                        <i class="fas fa-copy"></i>
                                    </button>
                                </li>
                                <li>
                                    <button class="block text-xs text-gray-800 border-solid bg-white border border-gray-400 hover:border-gray-500 rounded-sm py-1 px-2 mr-1 h-8 text-center">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                </li>
                                <li>
                                    <button class="block text-xs text-gray-800 border-solid bg-white border border-gray-400 hover:border-gray-500 rounded-sm py-1 px-2 mr-1 h-8 text-center">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </li>
                                <li>
                                    <button class="block text-xs text-white bg-green-400 hover:border-gray-500 rounded-sm py-1 px-2 mr-1 w-8 h-8 text-center">
                                        <i class="fas fa-check"></i>
                                    </button>
                                </li>
                            </ul>
                        </td>
                    </tr>

                    <tr>
                        <td class="text-sm p-4 pt-2 pb-2 text-gray-700"><i class="fas fa-arrows-alt"></i></td>
                        <td class="p-4 text-gray-700">
                            <input class="mr-2 leading-tight" type="checkbox">
                        </td>
                        <td class="text-sm p-4 pt-2 pb-2 text-gray-700" style="width: 50px;">
                            9
                        </td>
                        <td class="text-sm p-4 pt-2 pb-2 text-gray-700">Shipit testing product with 0 dimensions</td>
                        <td class="text-sm p-4 pt-2 pb-2 text-gray-700">
                            <span class="bg-gray-300 inline-block px-3 p-1 rounded-sm">Australia</span>
                        </td>
                        <td class="text-sm p-4 pt-2 pb-2 text-gray-700 border-solid border-b border-gray-200">
                            <div class="overflow-hidden inline-flex">
                                <span class="bg-white border border-gray-400 text-gray-600 inline-block px-3 p-1 rounded-sm rounded-r-none">2</span>
                                <span class="bg-white border border-gray-400 border-l-0 text-gray-600 inline-block px-3 p-1 rounded-sm rounded-l-none">
                                    <i class="fas fa-info"></i>
                                </span>
                            </div>
                        </td>
                        <td class="text-sm p-4 pt-2 pb-2 text-gray-700">9</td>
                        <td class="text-sm p-4 pt-2 pb-2 text-gray-700 w-32">
                            26 Sep, 2019 06:58 pm
                        </td>
                        <td class="text-sm p-4 pt-2 pb-2 text-gray-700">
                            <div class="inline-flex">
                                <div class="relative">
                                    <select class="rounded-sm appearance-none text-gray-700 border border-gray-400 px-3 pr-6 h-8 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                                        <option selected="">
                                            Information
                                        </option>
                                        <option>Inventory</option>
                                        <option>Features</option>
                                        <option>Note</option>
                                        <option>Associations</option>
                                        <option>Images</option>
                                        <option>Attachments</option>
                                        <option>Variants</option>
                                        <option>Price</option>
                                        <option>Review</option>
                                        <option>Related Product</option>
                                        <option>Shipping</option>
                                        <option>eBay</option>
                                    </select>
                                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700"><svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="p-4 text-gray-700 text-right">
                            <ul class="inline-flex">
                                <li>
                                    <button class="block text-xs text-gray-800 border-solid bg-white border border-gray-400 hover:border-gray-500 rounded-sm py-1 px-2 mr-1 h-8 text-center">
                                        <i class="fas fa-copy"></i>
                                    </button>
                                </li>
                                <li>
                                    <button class="block text-xs text-gray-800 border-solid bg-white border border-gray-400 hover:border-gray-500 rounded-sm py-1 px-2 mr-1 h-8 text-center">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                </li>
                                <li>
                                    <button class="block text-xs text-gray-800 border-solid bg-white border border-gray-400 hover:border-gray-500 rounded-sm py-1 px-2 mr-1 h-8 text-center">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </li>
                                <li>
                                    <button class="block text-xs text-white bg-green-400 hover:border-gray-500 rounded-sm py-1 px-2 mr-1 w-8 h-8 text-center">
                                        <i class="fas fa-check"></i>
                                    </button>
                                </li>
                            </ul>
                        </td>
                    </tr>

                </tbody>

                <tfoot>
                    <tr class="shadow">
                        <td class="bg-gray-200 p-4 mt-4 text-left"></td>
                        <td class="bg-gray-200 p-4 mt-4 text-left">
                            <input class="mr-2 leading-tight" type="checkbox">
                        </td>
                        <td colspan="8" class="bg-gray-200 p-4 pt-2 pb-2 mt-4 text-sm text-left">
                            <div class="flex flex-wrap">
                                <div class="w-1/2 text-left self-center">
                                    <span class="text-sm font-medium">Showing 5 of 5 results</span>
                                </div>
                                <div class="w-1/2 text-right">
                                    <div class="inline-flex">
                                        <div class="relative">
                                            <select class="rounded-sm appearance-none text-gray-700 border border-gray-400 pr-8 p-1 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                                                <option selected="">20</option>
                                                <option>40</option>
                                                <option>60</option>
                                                <option>80</option>
                                                <option>100</option>
                                                <option>All</option>
                                                <option>Reset</option>
                                            </select>
                                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700"><svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                    <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"></path>
                                                </svg>
                                            </div>
                                        </div>
                                        <a href="#" class="block text-xs font-medium text-gray-800 bg-white border border-solid border-gray-400 hover:border-gray-500 rounded-sm py-1 px-2 ml-1">Columns&nbsp;&nbsp;<i class="fas fa-cog fas fa-cog"></i></a>
                                        
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                </tfoot>
            </table>
        </div>
        <div class="md:flex p-4 pt-0 pb-4">
            <div class="mb-4 md:mb-0 md:w-1/2 self-center text-center md:text-left">
                <ul class="flex flex-end pl-0 list-none rounded mx-auto">
                    <li class="text-md block py-2 px-3 bg-white border border-gray-400 text-gray-700 hover:text-white border-r-0 ml-0 rounded-l hover:bg-gray-400">
                        <a href="#">
                            <i class="fas fa-angle-double-left"></i>
                        </a>
                    </li>
                    <li class="text-md block py-1 px-3 bg-gray-200 border border-gray-400 text-gray-600 border-r-0">
                        <a href="#">1</a>
                    </li>
                    <li class="text-md block py-1 px-3 bg-white border border-gray-400 text-gray-700 hover:text-white border-r-0 hover:bg-gray-400">
                        <a href="#">2</a>
                    </li>
                    <li class="text-md block py-1 px-3 bg-white border border-gray-400 text-gray-700 hover:text-white border-r-0 hover:bg-gray-400">
                        <a href="#">3</a>
                    </li>
                    <li class="text-md block py-2 px-3 bg-white border border-gray-400 text-gray-700 hover:text-white rounded-r hover:bg-gray-400">
                        <a href="#">
                            <i class="fas fa-angle-double-right"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="md:w-1/2 text-center md:text-right">
                <div class="inline-flex">
                    <div class="relative">
                        <select class="rounded-sm appearance-none text-gray-700 border border-gray-400 px-3 pr-6 h-8 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                            <option selected=""></option>
                            <option>Enable Selected Products</option>
                            <option>Disable Selected Products</option>
                            <option>Restore Selected Products</option>
                            <option>Delete Selected Products</option>
                        </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700"><svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"></path>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footer')
    @include('layouts.footer')
@endsection