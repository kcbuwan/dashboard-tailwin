@extends('layouts.blank')

@section('header')
    @include('layouts.header')
@endsection

@section('content')
        
    <div class="lg:mt-0 rounded shadow bg-white mb-6 ">
        <div class="flex border-b border-grey-light p-4 pt-2 pb-2 font-medium">
            <div class="w-1/2 self-center">
                <h2 class="uppercase pull-right pr-4">Pages</h2>
            </div>
            <div class="w-1/2 text-right">
                <button class="bg-blue-600 hover:bg-blue-700 outline-none focus:border-teal-900 text-white py-1 px-8 rounded shadow uppercase inline-flex">
                    Add Page
                </button>
            </div>
        </div>

        <div class="md:flex border-b border-grey-light p-4 pt-3 pb-3">
            <div class="mb-4 md:mb-0 md:w-1/2 self-center text-center md:text-left">
                <div class="inline-flex">
                    <a href="#" class="bg-gray-100 text-gray-800 py-1 px-4 border border-r-0 border-gray-400 ">
                        All
                    </a>
                    <a href="#" class="bg-white hover:bg-gray-100 text-gray-800 py-1 px-4 border border-r-0 border-gray-400 ">
                        Enabled
                    </a>
                    <a href="#" class="bg-white hover:bg-gray-100 text-gray-800 py-1 px-4 border border-r-0 border-gray-400">
                        Disabled
                    </a>
                    <a href="#" class="bg-white hover:bg-gray-100 text-gray-800 py-1 px-4 border border-gray-400">
                        Deleted
                    </a>
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

        <div class="overflow-hidden overflow-x-auto">
            <table class="w-full">
                <thead>
                    <tr>
                        <th class="text-gray-500 font-medium bg-gray-200 p-4 text-left">
                            <input class="mr-2 leading-tight" type="checkbox">
                        </th>
                        <th class="text-sm text-gray-600 font-medium bg-gray-200 p-4 text-left" style="width: 50px;">
                            ID
                        </th>
                        <th class="text-sm text-gray-600 font-medium bg-gray-200 p-4 text-left">Title</th>
                        <th class="text-sm text-gray-600 font-medium bg-gray-200 p-4 text-left">Slug</th>
                        <th class="text-sm text-gray-600 font-medium bg-gray-200 p-4 text-left">Author</th>
                        <th class="text-sm text-gray-600 font-medium bg-gray-200 p-4 text-left">Created At</th>
                        <th class="text-sm text-gray-600 font-medium bg-gray-200 p-4 text-left">Warehouses</th>
                        <th class="text-sm text-gray-600 font-medium bg-gray-200 p-4 text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="p-4 text-gray-700 border-solid border-b border-gray-200">
                            <input class="mr-2 leading-tight" type="checkbox">
                        </td>
                        <td class="text-sm p-4 text-gray-700 border-solid border-b border-gray-200" style="width: 50px;">
                            1
                        </td>
                        <td class="text-sm p-4 text-gray-700 border-solid border-b border-gray-200">Home</td>
                        <td class="text-sm p-4 text-gray-700 border-solid border-b border-gray-200">home</td>
                        <td class="text-sm p-4 text-gray-700 border-solid border-b border-gray-200">Element 7 Digital</td>
                        <td class="text-sm p-4 text-gray-700 border-solid border-b border-gray-200">07 Apr, 2017 10:16 am</td>
                        <td class="text-sm p-4 text-gray-700 border-solid border-b border-gray-200">
                            <span class="bg-gray-300 inline-block px-3 p-1 rounded-sm">Australia</span>
                            <span class="bg-gray-300 inline-block px-3 p-1 rounded-sm">United States</span>
                        </td>
                        <td class="p-4 text-gray-700 border-solid border-b border-gray-200 font-medium text-right">
                            <ul class="inline-flex">
                                <li>
                                    <a href="#" class="block text-xs font-medium text-gray-800 border border-solid border-gray-300 hover:border-gray-500 rounded-sm py-1 px-2 mr-1 w-10 text-center">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="/dashboard/forms-sidebar" class="block text-xs font-medium text-gray-800 border border-solid border-gray-300 hover:border-gray-500 rounded-sm py-1 px-2 mr-1 w-10 text-center">
                                        <i class="fas fa-pen-nib"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="block text-xs font-medium text-gray-800 border border-solid border-gray-300 hover:border-gray-500 rounded-sm py-1 px-2 mr-1 w-10 text-center">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="block text-xs font-medium text-gray-800 border border-solid border-gray-300 hover:border-gray-500 rounded-sm py-1 px-2 mr-1 w-10 text-center">
                                        <i class="fas fa-check"></i>
                                    </a>
                                </li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td class="p-4 text-gray-700 border-solid border-b border-gray-200">
                            <input class="mr-2 leading-tight" type="checkbox">
                        </td>
                        <td class="text-sm p-4 text-gray-700 border-solid border-b border-gray-200">
                            2
                        </td>
                        <td class="text-sm p-4 text-gray-700 border-solid border-b border-gray-200">About us</td>
                        <td class="text-sm p-4 text-gray-700 border-solid border-b border-gray-200">about-us</td>
                        <td class="text-sm p-4 text-gray-700 border-solid border-b border-gray-200">Element 7 Digital</td>
                        <td class="text-sm p-4 text-gray-700 border-solid border-b border-gray-200">07 Apr, 2017 10:16 am</td>
                        <td class="text-sm p-4 text-gray-700 border-solid border-b border-gray-200">
                            <span class="bg-gray-300 inline-block px-3 p-1 rounded-sm">Australia</span>
                        </td>
                        <td class="p-4 text-gray-700 border-solid border-b border-gray-200 font-medium text-right">
                            <ul class="inline-flex">
                                <li>
                                    <a href="#" class="block text-xs font-medium text-gray-800 border border-solid border-gray-300 hover:border-gray-500 rounded-sm py-1 px-2 mr-1 w-10 text-center">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="/dashboard/forms-sidebar" class="block text-xs font-medium text-gray-800 border border-solid border-gray-300 hover:border-gray-500 rounded-sm py-1 px-2 mr-1 w-10 text-center">
                                        <i class="fas fa-pen-nib"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="block text-xs font-medium text-gray-800 border border-solid border-gray-300 hover:border-gray-500 rounded-sm py-1 px-2 mr-1 w-10 text-center">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="block text-xs font-medium text-gray-800 border border-solid border-gray-300 hover:border-gray-500 rounded-sm py-1 px-2 mr-1 w-10 text-center">
                                        <i class="fas fa-check"></i>
                                    </a>
                                </li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td class="p-4 text-gray-700 border-solid border-b border-gray-200">
                            <input class="mr-2 leading-tight" type="checkbox">
                        </td>
                        <td class="text-sm p-4 text-gray-700 border-solid border-b border-gray-200">
                            3
                        </td>
                        <td class="text-sm p-4 text-gray-700 border-solid border-b border-gray-200">Services</td>
                        <td class="text-sm p-4 text-gray-700 border-solid border-b border-gray-200">services</td>
                        <td class="text-sm p-4 text-gray-700 border-solid border-b border-gray-200">Element 7 Digital</td>
                        <td class="text-sm p-4 text-gray-700 border-solid border-b border-gray-200">07 Apr, 2017 10:16 am</td>
                        <td class="text-sm p-4 text-gray-700 border-solid border-b border-gray-200">
                            <span class="bg-gray-300 inline-block px-3 p-1 rounded-sm">United States</span>
                        </td>
                        <td class="p-4 text-gray-700 border-solid border-b border-gray-200 font-medium text-right">
                            <ul class="inline-flex">
                                <li>
                                    <a href="#" class="block text-xs font-medium text-gray-800 border border-solid border-gray-300 hover:border-gray-500 rounded-sm py-1 px-2 mr-1 w-10 text-center">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="/dashboard/forms-sidebar" class="block text-xs font-medium text-gray-800 border border-solid border-gray-300 hover:border-gray-500 rounded-sm py-1 px-2 mr-1 w-10 text-center">
                                        <i class="fas fa-pen-nib"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="block text-xs font-medium text-gray-800 border border-solid border-gray-300 hover:border-gray-500 rounded-sm py-1 px-2 mr-1 w-10 text-center">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="block text-xs font-medium text-gray-800 border border-solid border-gray-300 hover:border-gray-500 rounded-sm py-1 px-2 mr-1 w-10 text-center">
                                        <i class="fas fa-check"></i>
                                    </a>
                                </li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td class="p-4 text-gray-700 border-solid border-b border-gray-200">
                            <input class="mr-2 leading-tight" type="checkbox">
                        </td>
                        <td class="p-4 text-gray-700 border-solid border-b border-gray-200">
                            4
                        </td>
                        <td class="text-sm p-4 text-gray-700 border-solid border-b border-gray-200">Blogs</td>
                        <td class="text-sm p-4 text-gray-700 border-solid border-b border-gray-200">blogs</td>
                        <td class="text-sm p-4 text-gray-700 border-solid border-b border-gray-200">Element 7 Digital</td>
                        <td class="text-sm p-4 text-gray-700 border-solid border-b border-gray-200">07 Apr, 2017 10:16 am</td>
                        <td class="text-sm p-4 text-gray-700 border-solid border-b border-gray-200">
                            <span class="bg-gray-300 inline-block px-3 p-1 rounded-sm">Australia</span>
                            <span class="bg-gray-300 inline-block px-3 p-1 rounded-sm">United States</span>
                        </td>
                        <td class="p-4 text-gray-700 border-solid border-b border-gray-200 font-medium text-right">
                            <ul class="inline-flex">
                                <li>
                                    <a href="#" class="block text-xs font-medium text-gray-800 border border-solid border-gray-300 hover:border-gray-500 rounded-sm py-1 px-2 mr-1 w-10 text-center">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="/dashboard/forms-sidebar" class="block text-xs font-medium text-gray-800 border border-solid border-gray-300 hover:border-gray-500 rounded-sm py-1 px-2 mr-1 w-10 text-center">
                                        <i class="fas fa-pen-nib"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="block text-xs font-medium text-gray-800 border border-solid border-gray-300 hover:border-gray-500 rounded-sm py-1 px-2 mr-1 w-10 text-center">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="block text-xs font-medium text-gray-800 border border-solid border-gray-300 hover:border-gray-500 rounded-sm py-1 px-2 mr-1 w-10 text-center">
                                        <i class="fas fa-check"></i>
                                    </a>
                                </li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td class="p-4 text-gray-700 border-solid border-b border-gray-200">
                            <input class="mr-2 leading-tight" type="checkbox">
                        </td>
                        <td class="p-4 text-gray-700 border-solid border-b border-gray-200">
                            5
                        </td>
                        <td class="text-sm p-4 text-gray-700 border-solid border-b border-gray-200">Contact Us</td>
                        <td class="text-sm p-4 text-gray-700 border-solid border-b border-gray-200">contact-us</td>
                        <td class="text-sm p-4 text-gray-700 border-solid border-b border-gray-200">Element 7 Digital</td>
                        <td class="text-sm p-4 text-gray-700 border-solid border-b border-gray-200">E07 Apr, 2017 10:16 am</td>
                        <td class="text-sm p-4 text-gray-700 border-solid border-b border-gray-200">
                            <span class="bg-gray-300 inline-block px-3 p-1 rounded-sm">Australia</span>
                            <span class="bg-gray-300 inline-block px-3 p-1 rounded-sm">United States</span>
                        </td>
                        <td class="p-4 text-gray-700 border-solid border-b border-gray-200 font-medium text-right">
                            <ul class="inline-flex">
                                <li>
                                    <a href="#" class="block text-xs font-medium text-gray-800 border border-solid border-gray-300 hover:border-gray-500 rounded-sm py-1 px-2 mr-1 w-10 text-center">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="/dashboard/forms-sidebar" class="block text-xs font-medium text-gray-800 border border-solid border-gray-300 hover:border-gray-500 rounded-sm py-1 px-2 mr-1 w-10 text-center">
                                        <i class="fas fa-pen-nib"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="block text-xs font-medium text-gray-800 border border-solid border-gray-300 hover:border-gray-500 rounded-sm py-1 px-2 mr-1 w-10 text-center">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="block text-xs font-medium text-gray-800 border border-solid border-gray-300 hover:border-gray-500 rounded-sm py-1 px-2 mr-1 w-10 text-center">
                                        <i class="fas fa-check"></i>
                                    </a>
                                </li>
                            </ul>
                        </td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td class="bg-gray-200 p-4 text-left">
                            <input class="mr-2 leading-tight" type="checkbox">
                        </td>
                        <td colspan="7" class="bg-gray-200 p-4 pt-2 pb-2 text-left">
                            <div class="flex flex-wrap">
                                <div class="w-1/2 text-left self-center">
                                    <span class="text-sm font-medium">Showing 5 of 5 results</span>
                                </div>
                                <div class="w-1/2 text-right">
                                    <div class="inline-flex">
                                        <div class="relative">
                                            <select class="rounded-sm appearance-none text-gray-700 border border-gray-400 px-4 pr-8 p-1 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
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
                                        <div class="relative ml-1">
                                            <select class="rounded-sm appearance-none text-gray-700 border border-gray-400 px-4 pr-8 p-1 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                                                <option value="" selected="selected"></option>
                                                <option selected="">Enable Selected Pages</option>
                                                <option>Disable Selected Pages</option>
                                                <option>Restore Selected Pages</option>
                                                <option>Delete Selected Pages</option>
                                            </select>
                                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700"><svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                    <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"></path>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                </tfoot>
                
            </table>
        </div>
    </div>

@endsection

@section('footer')
    @include('layouts.footer')
@endsection