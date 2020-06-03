@extends('layouts.blank-full') 

@section('content')

    @include('layouts.side-bar')

    <div id="main-content" class="w-full bg-gray-100 pl-0 lg:pl-64 min-h-screen">

        @include('layouts.header-sticky')

        <div class="p-10 bg-gray-200">
            <div class="text-gray-700 py-4 pt-0 text-xl font-semibold">
                <h2>Products</h2>
            </div>
            
            <div class="md:flex pt-3 pb-3 mb-3">
                <div class="mb-4 md:mb-0 md:w-1/2 self-center text-center md:text-left">
                    <div class="inline-flex">                            
                        <div class="relative mb-4 lg:mb-0">
                            <span class="w-full algolia-autocomplete" style="position: relative; display: inline-block; direction: ltr;">
                                <input id="docsearch" class="form-input block transition focus:outline-0 border border-transparent focus:bg-white focus:border-gray-300 placeholder-gray-600 bg-white py-2 pr-4 pl-4 h-10 block w-full appearance-none leading-normal ds-input rounded" type="text" placeholder="Search.." autocomplete="off" spellcheck="false" role="combobox" aria-autocomplete="list" aria-expanded="false" aria-label="search input" aria-owns="algolia-autocomplete-listbox-0" dir="auto" style="position: relative; vertical-align: top;">
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
                                <i class="fas fa-filter"></i>
                                <span class="pointer-events-none inset-y-0 right-0 flex items-center pl-2 text-white">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"></path></svg>
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
                                    <select class="form-select mt-1 block w-full">
                                        <option selected=""></option>
                                        <option>Enable Selected Products</option>
                                        <option>Disable Selected Products</option>
                                        <option>Restore Selected Products</option>
                                        <option>Delete Selected Products</option>
                                    </select>
                                </label>
                            </div>
                        </li>
                        <li class="mr-1">
                            <button class="block text-sm font-medium text-white bg-gray-500 hover:bg-gray-600 rounded py-2 mt-1 h-10 px-4 text-center uppercase">
                                Add Product
                            </button>
                        </li>
                        <li>
                            <a href="#" class="ml-1 bg-blue-500 hover:bg-blue-600 outline-none focus:border-blue-900 rounded text-white py-3 mt-1 h-10 px-4 inline-flex text-sm font-medium">
                                <i class="fas fa-cog fas fa-cog"></i></a>
                            </a>
                        </li>
                    </ul>
                </div>
                
            </div>
                
            
            <div class="lg:mt-0 rounded shadow-lg overflow-hidden bg-white mb-6 ">

                <div class="overflow-hidden overflow-x-auto p-0 pt-0">
                    <table class="w-full">
                        <thead>
                            <tr class="bg-gray-100 border-b">
                                <th class="text-sm text-gray-500 font-semibold  p-4 text-left"></th>
                                <th class="text-sm text-gray-500 font-semibold  p-4 text-left">
                                    <input class="mr-2 leading-tight form-checkbox" type="checkbox">
                                </th>
                                <th class="text-sm text-gray-600 font-semi-bold bg-gray-100 border-b p-4 text-left uppercase" style="width: 50px;">
                                    ID
                                </th>
                                <th class="text-sm text-gray-600 font-semi-bold bg-gray-100 border-b p-4 text-left uppercase">Product Name</th>
                                <th class="text-sm text-gray-600 font-semi-bold bg-gray-100 border-b p-4 text-left uppercase">Created At</th>
                                <th class="text-sm text-gray-600 font-semi-bold bg-gray-100 border-b p-4 text-left uppercase">Order</th>
                                <th class="text-sm text-gray-600 font-semi-bold bg-gray-100 border-b p-4 text-left uppercase text-center">Options</th>
                            </tr>
                        </thead>
                        <tbody class="mb-4">
                            
                            <tr class="border-solid border-b border-gray-200">
                                <td class="text-sm p-4 pt-2 pb-2 text-gray-700"><i class="fas fa-arrows-alt"></i></td>
                                <td class="p-4 text-gray-700 border-solid border-b border-gray-200">
                                    <input class="mr-2 leading-tight form-checkbox" type="checkbox">
                                </td>
                                <td class="text-sm p-4 pt-2 pb-2 text-gray-700 border-solid border-b border-gray-200" style="width: 50px;">
                                    2
                                </td>
                                <td class="text-sm p-4 pt-2 pb-2 text-gray-700 border-solid border-b border-gray-200">AU Test Product Price=0 POA main</td>
                                <td class="text-sm p-4 pt-2 pb-2 text-gray-700 border-solid border-b border-gray-200 w-32 text-center">
                                    26 Sep, 2019 06:58 pm
                                </td>
                                <td class="text-sm p-4 pt-2 pb-2 text-gray-700 border-solid border-b border-gray-200 text-center">2</td>
                                <td class="p-4 text-gray-700 border-solid border-b border-gray-200 text-right">
                                    <ul class="inline-flex">
                                        <li>
                                            <button class="block text-xs text-gray-800 border-solid bg-white border border-gray-400 hover:border-gray-500 rounded-sm py-1 px-2 mr-1 h-8 text-center">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                        </li>
                                        <li>
                                            <button class="block text-xs text-white bg-green-400 hover:border-gray-500 rounded-sm py-1 px-2 mr-1 w-8 h-8 text-center">
                                                <i class="fas fa-check"></i>
                                            </button>
                                        </li>
                                        <li>
                                            <button class="block text-xs text-gray-800 border-solid bg-white border border-gray-400 hover:border-gray-500 rounded-sm py-1 px-2 mr-1 h-8 text-center">
                                                <i class="fas fa-ellipsis-h"></i>
                                            </button>
                                        </li>
                                    </ul>
                                </td>
                            </tr>

                            <tr class="border-solid border-b border-gray-200">
                                <td class="text-sm p-4 pt-2 pb-2 text-gray-700"><i class="fas fa-arrows-alt"></i></td>
                                <td class="p-4 text-gray-700">
                                    <input class="mr-2 leading-tight form-checkbox" type="checkbox">
                                </td>
                                <td class="text-sm p-4 pt-2 pb-2 text-gray-700" style="width: 50px;">
                                    3
                                </td>
                                <td class="text-sm p-4 pt-2 pb-2 text-gray-700">Test Ebay Product Listing Template</td>
                                <td class="text-sm p-4 pt-2 pb-2 text-gray-700 w-32 text-center">
                                    26 Sep, 2019 06:58 pm
                                </td>
                                <td class="text-sm p-4 pt-2 pb-2 text-gray-700 text-center">3</td>
                                <td class="p-4 text-gray-700 border-solid border-b border-gray-200 text-right">
                                    <ul class="inline-flex">
                                        <li>
                                            <button class="block text-xs text-gray-800 border-solid bg-white border border-gray-400 hover:border-gray-500 rounded-sm py-1 px-2 mr-1 h-8 text-center">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                        </li>
                                        <li>
                                            <button class="block text-xs text-white bg-green-400 hover:border-gray-500 rounded-sm py-1 px-2 mr-1 w-8 h-8 text-center">
                                                <i class="fas fa-check"></i>
                                            </button>
                                        </li>
                                        <li>
                                            <button class="block text-xs text-gray-800 border-solid bg-white border border-gray-400 hover:border-gray-500 rounded-sm py-1 px-2 mr-1 h-8 text-center">
                                                <i class="fas fa-ellipsis-h"></i>
                                            </button>
                                        </li>
                                    </ul>
                                </td>
                            </tr>

                            <tr class="border-solid border-b border-gray-200">
                                <td class="text-sm p-4 pt-2 pb-2 text-gray-700"><i class="fas fa-arrows-alt"></i></td>
                                <td class="p-4 text-gray-700">
                                    <input class="mr-2 leading-tight form-checkbox" type="checkbox">
                                </td>
                                <td class="text-sm p-4 pt-2 pb-2 text-gray-700" style="width: 50px;">
                                    4
                                </td>
                                <td class="text-sm p-4 pt-2 pb-2 text-gray-700">Test new product on 30.05.2017 for testing the length issue and the & chr issue in ebay</td>
                                <td class="text-sm p-4 pt-2 pb-2 text-gray-700 w-32 text-center">
                                    26 Sep, 2019 06:58 pm
                                </td>
                                <td class="text-sm p-4 pt-2 pb-2 text-gray-700 text-center">4</td>
                                <td class="p-4 text-gray-700 border-solid border-b border-gray-200 text-right">
                                    <ul class="inline-flex">
                                        <li>
                                            <button class="block text-xs text-gray-800 border-solid bg-white border border-gray-400 hover:border-gray-500 rounded-sm py-1 px-2 mr-1 h-8 text-center">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                        </li>
                                        <li>
                                            <button class="block text-xs text-white bg-green-400 hover:border-gray-500 rounded-sm py-1 px-2 mr-1 w-8 h-8 text-center">
                                                <i class="fas fa-check"></i>
                                            </button>
                                        </li>
                                        <li>
                                            <button class="block text-xs text-gray-800 border-solid bg-white border border-gray-400 hover:border-gray-500 rounded-sm py-1 px-2 mr-1 h-8 text-center">
                                                <i class="fas fa-ellipsis-h"></i>
                                            </button>
                                        </li>
                                    </ul>
                                </td>
                            </tr>

                            <tr class="border-solid border-b border-gray-200">
                                <td class="text-sm p-4 pt-2 pb-2 text-gray-700"><i class="fas fa-arrows-alt"></i></td>
                                <td class="p-4 text-gray-700">
                                    <input class="mr-2 leading-tight form-checkbox" type="checkbox">
                                </td>
                                <td class="text-sm p-4 pt-2 pb-2 text-gray-700" style="width: 50px;">
                                    5
                                </td>
                                <td class="text-sm p-4 pt-2 pb-2 text-gray-700">Qc ebay product with single variant & NO image</td>
                                <td class="text-sm p-4 pt-2 pb-2 text-gray-700 w-32 text-center">
                                    26 Sep, 2019 06:58 pm
                                </td>
                                <td class="text-sm p-4 pt-2 pb-2 text-gray-700 text-center">5</td>
                                <td class="p-4 text-gray-700 border-solid border-b border-gray-200 text-right">
                                    <ul class="inline-flex">
                                        <li>
                                            <button class="block text-xs text-gray-800 border-solid bg-white border border-gray-400 hover:border-gray-500 rounded-sm py-1 px-2 mr-1 h-8 text-center">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                        </li>
                                        <li>
                                            <button class="block text-xs text-white bg-green-400 hover:border-gray-500 rounded-sm py-1 px-2 mr-1 w-8 h-8 text-center">
                                                <i class="fas fa-check"></i>
                                            </button>
                                        </li>
                                        <li>
                                            <button class="block text-xs text-gray-800 border-solid bg-white border border-gray-400 hover:border-gray-500 rounded-sm py-1 px-2 mr-1 h-8 text-center">
                                                <i class="fas fa-ellipsis-h"></i>
                                            </button>
                                        </li>
                                    </ul>
                                </td>
                            </tr>

                            <tr class="border-solid border-b border-gray-200">
                                <td class="text-sm p-4 pt-2 pb-2 text-gray-700"><i class="fas fa-arrows-alt"></i></td>
                                <td class="p-4 text-gray-700 border-solid border-b border-gray-200">
                                    <input class="mr-2 leading-tight form-checkbox" type="checkbox">
                                </td>
                                <td class="text-sm p-4 pt-2 pb-2 text-gray-700 border-solid border-b border-gray-200" style="width: 50px;">
                                    6
                                </td>
                                <td class="text-sm p-4 pt-2 pb-2 text-gray-700 border-solid border-b border-gray-200">QC New product for ebay desc tab</td>
                                <td class="text-sm p-4 pt-2 pb-2 text-gray-700 border-solid border-b border-gray-200 w-32 text-center">
                                    26 Sep, 2019 06:58 pm
                                </td>
                                <td class="text-sm p-4 pt-2 pb-2 text-gray-700 border-solid border-b border-gray-200 text-center">6</td>
                                <td class="p-4 text-gray-700 border-solid border-b border-gray-200 text-right">
                                    <ul class="inline-flex">
                                        <li>
                                            <button class="block text-xs text-gray-800 border-solid bg-white border border-gray-400 hover:border-gray-500 rounded-sm py-1 px-2 mr-1 h-8 text-center">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                        </li>
                                        <li>
                                            <button class="block text-xs text-white bg-green-400 hover:border-gray-500 rounded-sm py-1 px-2 mr-1 w-8 h-8 text-center">
                                                <i class="fas fa-check"></i>
                                            </button>
                                        </li>
                                        <li>
                                            <button class="block text-xs text-gray-800 border-solid bg-white border border-gray-400 hover:border-gray-500 rounded-sm py-1 px-2 mr-1 h-8 text-center">
                                                <i class="fas fa-ellipsis-h"></i>
                                            </button>
                                        </li>
                                    </ul>
                                </td>
                            </tr>

                            <tr class="border-solid border-b border-gray-200">
                                <td class="text-sm p-4 pt-2 pb-2 text-gray-700"><i class="fas fa-arrows-alt"></i></td>
                                <td class="p-4 text-gray-700">
                                    <input class="mr-2 leading-tight form-checkbox" type="checkbox">
                                </td>
                                <td class="text-sm p-4 pt-2 pb-2 text-gray-700" style="width: 50px;">
                                    5
                                </td>
                                <td class="text-sm p-4 pt-2 pb-2 text-gray-700">Qc ebay product with single variant & NO image</td>
                                <td class="text-sm p-4 pt-2 pb-2 text-gray-700 w-32 text-center">
                                    26 Sep, 2019 06:58 pm
                                </td>
                                <td class="text-sm p-4 pt-2 pb-2 text-gray-700 text-center">5</td>
                                <td class="p-4 text-gray-700 border-solid border-b border-gray-200 text-right">
                                    <ul class="inline-flex">
                                        <li>
                                            <button class="block text-xs text-gray-800 border-solid bg-white border border-gray-400 hover:border-gray-500 rounded-sm py-1 px-2 mr-1 h-8 text-center">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                        </li>
                                        <li>
                                            <button class="block text-xs text-white bg-green-400 hover:border-gray-500 rounded-sm py-1 px-2 mr-1 w-8 h-8 text-center">
                                                <i class="fas fa-check"></i>
                                            </button>
                                        </li>
                                        <li>
                                            <button class="block text-xs text-gray-800 border-solid bg-white border border-gray-400 hover:border-gray-500 rounded-sm py-1 px-2 mr-1 h-8 text-center">
                                                <i class="fas fa-ellipsis-h"></i>
                                            </button>
                                        </li>
                                    </ul>
                                </td>
                            </tr>

                        </tbody>

                        <tfoot>
                            <tr>
                                <td class="bg-gray-100 p-4 mt-4 text-left"></td>
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
                                            <ul class="md:flex pl-0 list-none rounded mx-auto text-right">
                                                <li class="text-md inline-block py-2 px-3 bg-white border border-gray-400 text-gray-700 hover:text-white md:border-r-0 ml-0 rounded-l hover:bg-gray-400">
                                                    <a href="#">
                                                        <i class="fas fa-angle-double-left"></i>
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
                                                        <i class="fas fa-angle-double-right"></i>
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
    </div>
@endsection