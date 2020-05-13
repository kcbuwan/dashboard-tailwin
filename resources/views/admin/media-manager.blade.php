@extends('layouts.blank')

@section('header')
    @include('layouts.header')
@endsection

@section('content')
<div class="flex flex-wrap">   
    
    <div class="w-full lg:w-3/4 rounded shadow overflow-hidden bg-white text-gray-700 mb-6 lg:mt-0">
        <div class="flex border-b p-4">
            <h2 class="uppercase tracking-wide text-gray-600 font-medium">Media Manager</h2>
        </div>

        <div class="md:flex border-b p-4 pt-3 pb-3">
            <div class="mb-4 md:mb-0 md:w-2/3 self-center text-center md:text-left">
                <div class="inline-flex">
                    <div class="relative">
                        <select class="rounded-sm appearance-none text-gray-700 border border-gray-300 px-2 pr-8 h-8 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                            <option selected="">Id</option>
                            <option>Mime</option>
                            <option>Type</option>
                            <option>File</option>
                            <option>Title</option>
                            <option>Description</option>
                        </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700"><svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="relative ml-1">
                        <select class="rounded-sm appearance-none text-gray-700 border border-gray-300 px-4 pr-8 h-8 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                            <option selected="">Asc</option>
                            <option>Desc</option>
                        </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700"><svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"></path>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <div class="md:w-1/3 text-center md:text-right">
                <div class="inline-flex w-full">

                    <div class="relative w-full">
                        <span class="algolia-autocomplete w-full" style="position: relative; display: inline-block; direction: ltr;">
                            <input id="docsearch" class="transition focus:outline-0 border border-transparent focus:bg-white focus:border-gray-300 placeholder-gray-600 bg-gray-100 py-2 pr-4 pl-4 block w-full appearance-none leading-normal ds-input" type="text" placeholder="Search.." autocomplete="off" spellcheck="false" role="combobox" aria-autocomplete="list" aria-expanded="false" aria-label="search input" aria-owns="algolia-autocomplete-listbox-0" dir="auto" style="position: relative; vertical-align: top;">
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

        <div class="flex flex-wrap lg:mt-0 p-4 px-4 lg:px-1">
                
            <div class="w-full md:w-1/3 lg:w-1/3 lg:px-3 py-4">
                
                <div class="rounded-sm shadow">
                    <div class="md:flex p-2">
                        <img class="h-16 w-16 md:h-15 md:w-15 rounded-sm mx-auto md:mx-0 md:mr-3" src="http://lorempixel.com/400/200/">
                        <div class="text-center md:text-left">
                        <h2 class="font-medium text-gray-800">Snapshot.jpg</h2>
                        <div class="text-gray-600 text-sm mb-1">Snapshot</div>
                        <div class="text-gray-600 text-xs">32x32 - 754 bytes</div>
                        <div class="text-gray-600 text-xs">2017-04-08 06:47:43</div>
                        </div>
                    </div>
                    <div class="bg-gray-100 p-2">
                        <div class="text-right">
                            <a href="#" class="inline-block rounded-sm bg-blue-500 hover:bg-blue-600 text-white text-xs font-sm p-1 px-2 mr-2">
                                Edit Meta
                            </a>
                            <a href="#" class="inline-block rounded-sm text-gray-600 text-xs font-sm p-1 px-2">
                                Delete
                            </a>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="w-full md:w-1/3 lg:w-1/3 lg:px-3 py-4">
                
                <div class="rounded-sm shadow">
                    <div class="md:flex p-2">
                        <img class="h-16 w-16 md:h-15 md:w-15 rounded-sm mx-auto md:mx-0 md:mr-3" src="http://lorempixel.com/g/400/200/">
                        <div class="text-center md:text-left">
                        <h2 class="font-medium text-gray-800">alpha.png</h2>
                        <div class="text-gray-600 text-sm mb-1">No description Set.</div>
                        <div class="text-gray-600 text-xs">500x500 - 182 KB</div>
                        <div class="text-gray-600 text-xs">2018-02-08 17:57:46</div>
                        </div>
                    </div>
                    <div class="bg-gray-100 p-2">
                        <div class="text-right">
                            <a href="#" class="inline-block rounded-sm bg-blue-500 hover:bg-blue-600 text-white text-xs font-sm p-1 px-2 mr-2">
                                Edit Meta
                            </a>
                            <a href="#" class="inline-block rounded-sm text-gray-600 text-xs font-sm p-1 px-2">
                                Delete
                            </a>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="w-full md:w-1/3 lg:w-1/3 lg:px-3 py-4">
                
                <div class="rounded-sm shadow">
                    <div class="md:flex p-2">
                        <img class="h-16 w-16 md:h-15 md:w-15 rounded-sm mx-auto md:mx-0 md:mr-3" src="http://lorempixel.com/400/200/sports/">
                        <div class="text-center md:text-left">
                        <h2 class="font-medium text-gray-800">mockup1-352x332.jpg</h2>
                        <div class="text-gray-600 text-sm mb-1">Mockup1</div>
                        <div class="text-gray-600 text-xs">538x580 - 207 KB</div>
                        <div class="text-gray-600 text-xs">2017-11-14 16:21:17</div>
                        </div>
                    </div>
                    <div class="bg-gray-100 p-2">
                        <div class="text-right">
                            <a href="#" class="inline-block rounded-sm bg-blue-500 hover:bg-blue-600 text-white text-xs font-sm p-1 px-2 mr-2">
                                Edit Meta
                            </a>
                            <a href="#" class="inline-block rounded-sm text-gray-600 text-xs font-sm p-1 px-2">
                                Delete
                            </a>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="w-full md:w-1/3 lg:w-1/3 lg:px-3 py-4">
                
                <div class="rounded-sm shadow">
                    <div class="md:flex p-2">
                        <img class="h-16 w-16 md:h-15 md:w-15 rounded-sm mx-auto md:mx-0 md:mr-3" src="https://via.placeholder.com/150C/O https://placeholder.com/">
                        <div class="text-center md:text-left">
                        <h2 class="font-medium text-gray-800">placeholder.jpg</h2>
                        <div class="text-gray-600 text-sm mb-1">Placeholder</div>
                        <div class="text-gray-600 text-xs">352x332 - 15 KB</div>
                        <div class="text-gray-600 text-xs">2017-10-27 17:01:47</div>
                        </div>
                    </div>
                    <div class="bg-gray-100 p-2">
                        <div class="text-right">
                            <a href="#" class="inline-block rounded-sm bg-blue-500 hover:bg-blue-600 text-white text-xs font-sm p-1 px-2 mr-2">
                                Edit Meta
                            </a>
                            <a href="#" class="inline-block rounded-sm text-gray-600 text-xs font-sm p-1 px-2">
                                Delete
                            </a>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="w-full md:w-1/3 lg:w-1/3 lg:px-3 py-4">
                
                <div class="rounded-sm shadow">
                    <div class="md:flex p-2">
                        <img class="h-16 w-16 md:h-15 md:w-15 rounded-sm mx-auto md:mx-0 md:mr-3" src="https://via.placeholder.com/150C/O https://placeholder.com/">
                        <div class="text-center md:text-left">
                        <h2 class="font-medium text-gray-800">Devil's Ivy.jpg</h2>
                        <div class="text-gray-600 text-sm mb-1">No description Set.</div>
                        <div class="text-gray-600 text-xs">400x578 - 44 KB</div>
                        <div class="text-gray-600 text-xs">2017-05-10 10:16:11</div>
                        </div>
                    </div>
                    <div class="bg-gray-100 p-2">
                        <div class="text-right">
                            <a href="#" class="inline-block rounded-sm bg-blue-500 hover:bg-blue-600 text-white text-xs font-sm p-1 px-2 mr-2">
                                Edit Meta
                            </a>
                            <a href="#" class="inline-block rounded-sm text-gray-600 text-xs font-sm p-1 px-2">
                                Delete
                            </a>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="w-full md:w-1/3 lg:w-1/3 lg:px-3 py-4">
                
                <div class="rounded-sm shadow">
                    <div class="md:flex p-2">
                        <img class="h-16 w-16 md:h-15 md:w-15 rounded-sm mx-auto md:mx-0 md:mr-3" src="http://lorempixel.com/g/400/200/">
                        <div class="text-center md:text-left">
                        <h2 class="font-medium text-gray-800">Tongue.jpg</h2>
                        <div class="text-gray-600 text-sm mb-1">No description</div>
                        <div class="text-gray-600 text-xs">187x270 - 7 KB</div>
                        <div class="text-gray-600 text-xs">2017-05-10 10:16:14</div>
                        </div>
                    </div>
                    <div class="bg-gray-100 p-2">
                        <div class="text-right">
                            <a href="#" class="inline-block rounded-sm bg-blue-500 hover:bg-blue-600 text-white text-xs font-sm p-1 px-2 mr-2">
                                Edit Meta
                            </a>
                            <a href="#" class="inline-block rounded-sm text-gray-600 text-xs font-sm p-1 px-2">
                                Delete
                            </a>
                        </div>
                    </div>
                </div>
                
            </div>

            <div class="w-full md:w-1/3 lg:w-1/3 lg:px-3 py-4">
                
                <div class="rounded-sm shadow">
                    <div class="md:flex p-2">
                        <img class="h-16 w-16 md:h-15 md:w-15 rounded-sm mx-auto md:mx-0 md:mr-3" src="http://lorempixel.com/g/400/200/">
                        <div class="text-center md:text-left">
                        <h2 class="font-medium text-gray-800">Tongue.jpg</h2>
                        <div class="text-gray-600 text-sm mb-1">No description</div>
                        <div class="text-gray-600 text-xs">187x270 - 7 KB</div>
                        <div class="text-gray-600 text-xs">2017-05-10 10:16:14</div>
                        </div>
                    </div>
                    <div class="bg-gray-100 p-2">
                        <div class="text-right">
                            <a href="#" class="inline-block rounded-sm bg-blue-500 hover:bg-blue-600 text-white text-xs font-sm p-1 px-2 mr-2">
                                Edit Meta
                            </a>
                            <a href="#" class="inline-block rounded-sm text-gray-600 text-xs font-sm p-1 px-2">
                                Delete
                            </a>
                        </div>
                    </div>
                </div>

            </div>
            <div class="w-full md:w-1/3 lg:w-1/3 lg:px-3 py-4">
                
                <div class="rounded-sm shadow">
                    <div class="md:flex p-2">
                        <img class="h-16 w-16 md:h-15 md:w-15 rounded-sm mx-auto md:mx-0 md:mr-3" src="http://lorempixel.com/400/200/">
                        <div class="text-center md:text-left">
                        <h2 class="font-medium text-gray-800">Snapshot.jpg</h2>
                        <div class="text-gray-600 text-sm mb-1">Snapshot</div>
                        <div class="text-gray-600 text-xs">32x32 - 754 bytes</div>
                        <div class="text-gray-600 text-xs">2017-04-08 06:47:43</div>
                        </div>
                    </div>
                    <div class="bg-gray-100 p-2">
                        <div class="text-right">
                            <a href="#" class="inline-block rounded-sm bg-blue-500 hover:bg-blue-600 text-white text-xs font-sm p-1 px-2 mr-2">
                                Edit Meta
                            </a>
                            <a href="#" class="inline-block rounded-sm text-gray-600 text-xs font-sm p-1 px-2">
                                Delete
                            </a>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="w-full md:w-1/3 lg:w-1/3 lg:px-3 py-4">
                
                <div class="rounded-sm shadow">
                    <div class="md:flex p-2">
                        <img class="h-16 w-16 md:h-15 md:w-15 rounded-sm mx-auto md:mx-0 md:mr-3" src="http://lorempixel.com/g/400/200/">
                        <div class="text-center md:text-left">
                        <h2 class="font-medium text-gray-800">alpha.png</h2>
                        <div class="text-gray-600 text-sm mb-1">No description Set.</div>
                        <div class="text-gray-600 text-xs">500x500 - 182 KB</div>
                        <div class="text-gray-600 text-xs">2018-02-08 17:57:46</div>
                        </div>
                    </div>
                    <div class="bg-gray-100 p-2">
                        <div class="text-right">
                            <a href="#" class="inline-block rounded-sm bg-blue-500 hover:bg-blue-600 text-white text-xs font-sm p-1 px-2 mr-2">
                                Edit Meta
                            </a>
                            <a href="#" class="inline-block rounded-sm text-gray-600 text-xs font-sm p-1 px-2">
                                Delete
                            </a>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="w-full md:w-1/3 lg:w-1/3 lg:px-3 py-4">
                
                <div class="rounded-sm shadow">
                    <div class="md:flex p-2">
                        <img class="h-16 w-16 md:h-15 md:w-15 rounded-sm mx-auto md:mx-0 md:mr-3" src="http://lorempixel.com/400/200/sports/">
                        <div class="text-center md:text-left">
                        <h2 class="font-medium text-gray-800">mockup1-352x332.jpg</h2>
                        <div class="text-gray-600 text-sm mb-1">Mockup1</div>
                        <div class="text-gray-600 text-xs">538x580 - 207 KB</div>
                        <div class="text-gray-600 text-xs">2017-11-14 16:21:17</div>
                        </div>
                    </div>
                    <div class="bg-gray-100 p-2">
                        <div class="text-right">
                            <a href="#" class="inline-block rounded-sm bg-blue-500 hover:bg-blue-600 text-white text-xs font-sm p-1 px-2 mr-2">
                                Edit Meta
                            </a>
                            <a href="#" class="inline-block rounded-sm text-gray-600 text-xs font-sm p-1 px-2">
                                Delete
                            </a>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="w-full md:w-1/3 lg:w-1/3 lg:px-3 py-4">
                
                <div class="rounded-sm shadow">
                    <div class="md:flex p-2">
                        <img class="h-16 w-16 md:h-15 md:w-15 rounded-sm mx-auto md:mx-0 md:mr-3" src="https://via.placeholder.com/150C/O https://placeholder.com/">
                        <div class="text-center md:text-left">
                        <h2 class="font-medium text-gray-800">placeholder.jpg</h2>
                        <div class="text-gray-600 text-sm mb-1">Placeholder</div>
                        <div class="text-gray-600 text-xs">352x332 - 15 KB</div>
                        <div class="text-gray-600 text-xs">2017-10-27 17:01:47</div>
                        </div>
                    </div>
                    <div class="bg-gray-100 p-2">
                        <div class="text-right">
                            <a href="#" class="inline-block rounded-sm bg-blue-500 hover:bg-blue-600 text-white text-xs font-sm p-1 px-2 mr-2">
                                Edit Meta
                            </a>
                            <a href="#" class="inline-block rounded-sm text-gray-600 text-xs font-sm p-1 px-2">
                                Delete
                            </a>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="w-full md:w-1/3 lg:w-1/3 lg:px-3 py-4">
                
                <div class="rounded-sm shadow">
                    <div class="md:flex p-2">
                        <img class="h-16 w-16 md:h-15 md:w-15 rounded-sm mx-auto md:mx-0 md:mr-3" src="https://via.placeholder.com/150C/O https://placeholder.com/">
                        <div class="text-center md:text-left">
                        <h2 class="font-medium text-gray-800">Devil's Ivy.jpg</h2>
                        <div class="text-gray-600 text-sm mb-1">No description Set.</div>
                        <div class="text-gray-600 text-xs">400x578 - 44 KB</div>
                        <div class="text-gray-600 text-xs">2017-05-10 10:16:11</div>
                        </div>
                    </div>
                    <div class="bg-gray-100 p-2">
                        <div class="text-right">
                            <a href="#" class="inline-block rounded-sm bg-blue-500 hover:bg-blue-600 text-white text-xs font-sm p-1 px-2 mr-2">
                                Edit Meta
                            </a>
                            <a href="#" class="inline-block rounded-sm text-gray-600 text-xs font-sm p-1 px-2">
                                Delete
                            </a>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="w-full md:w-1/3 lg:w-1/3 lg:px-3 py-4">
                
                <div class="rounded-sm shadow">
                    <div class="md:flex p-2">
                        <img class="h-16 w-16 md:h-15 md:w-15 rounded-sm mx-auto md:mx-0 md:mr-3" src="http://lorempixel.com/g/400/200/">
                        <div class="text-center md:text-left">
                        <h2 class="font-medium text-gray-800">Tongue.jpg</h2>
                        <div class="text-gray-600 text-sm mb-1">No description</div>
                        <div class="text-gray-600 text-xs">187x270 - 7 KB</div>
                        <div class="text-gray-600 text-xs">2017-05-10 10:16:14</div>
                        </div>
                    </div>
                    <div class="bg-gray-100 p-2">
                        <div class="text-right">
                            <a href="#" class="inline-block rounded-sm bg-blue-500 hover:bg-blue-600 text-white text-xs font-sm p-1 px-2 mr-2">
                                Edit Meta
                            </a>
                            <a href="#" class="inline-block rounded-sm text-gray-600 text-xs font-sm p-1 px-2">
                                Delete
                            </a>
                        </div>
                    </div>
                </div>
                
            </div>

            <div class="w-full md:w-1/3 lg:w-1/3 lg:px-3 py-4">
                
                <div class="rounded-sm shadow">
                    <div class="md:flex p-2">
                        <img class="h-16 w-16 md:h-15 md:w-15 rounded-sm mx-auto md:mx-0 md:mr-3" src="http://lorempixel.com/g/400/200/">
                        <div class="text-center md:text-left">
                        <h2 class="font-medium text-gray-800">Tongue.jpg</h2>
                        <div class="text-gray-600 text-sm mb-1">No description</div>
                        <div class="text-gray-600 text-xs">187x270 - 7 KB</div>
                        <div class="text-gray-600 text-xs">2017-05-10 10:16:14</div>
                        </div>
                    </div>
                    <div class="bg-gray-100 p-2">
                        <div class="text-right">
                            <a href="#" class="inline-block rounded-sm bg-blue-500 hover:bg-blue-600 text-white text-xs font-sm p-1 px-2 mr-2">
                                Edit Meta
                            </a>
                            <a href="#" class="inline-block rounded-sm text-gray-600 text-xs font-sm p-1 px-2">
                                Delete
                            </a>
                        </div>
                    </div>
                </div>

            </div>

        </div>

        <div class="bg-gray-200 flex w-full mt-4 p-4">
            <ul class="flex flex-end pl-0 list-none rounded mx-auto">
                <li class="text-md block py-2 px-3 bg-white border border-gray-400 text-gray-700 hover:text-white border-r-0 ml-0 rounded-l hover:bg-blue-400">
                    <a href="#">
                        <i class="fas fa-angle-double-left"></i>
                    </a>
                </li>
                <li class="text-md block py-1 px-3 bg-blue-400 border border-gray-400 text-white border-r-0">
                    <a href="#">1</a>
                </li>
                <li class="text-md block py-1 px-3 bg-white border border-gray-400 text-gray-700 hover:text-white border-r-0 hover:bg-blue-400">
                    <a href="#">2</a>
                </li>
                <li class="text-md block py-1 px-3 bg-white border border-gray-400 text-gray-700 hover:text-white border-r-0 hover:bg-blue-400">
                    <a href="#">3</a>
                </li>
                <li class="text-md block py-2 px-3 bg-white border border-gray-400 text-gray-700 hover:text-white rounded-r hover:bg-blue-400">
                    <a href="#">
                        <i class="fas fa-angle-double-right"></i>
                    </a>
                </li>
            </ul>
        </div>
    
    </div>
    
    <div class="w-full lg:w-1/4">
        <div class="px-3 pb-2 mt-4 lg:mt-0 lg:ml-6 mb-6">
            
            <div class="p-4 pt-3 pb-2 px-0">
                <h2 class="uppercase tracking-wide text-gray-600 text-sm font-bold px-2">
                    Types
                </h2>
            </div>
            <ul class="list-reset mb-4">
                <li>
                    <a href="#" class="shadow rounded bg-white px-2 py-2 block text-gray-900 text-sm font-medium">
                        Documents
                    </a>
                </li>
                <li class="">
                    <a href="#" class="px-2 py-2 block hover:text-gray-900 text-gray-600 text-sm font-medium">
                        Images
                    </a>
                </li>
            </ul>
            <div class="p-4 pt-2 pb-2 px-0">
                <h2 class="uppercase tracking-wide text-gray-600 text-sm font-bold px-2">
                    Mimes
                </h2>
            </div>
            <ul class="list-reset mb-4">
                <li>
                    <a href="#" class="px-2 py-2 block hover:text-gray-900 text-gray-600 text-sm font-medium">
                        application/vnd.openxmlformats-officedocument.spre
                    </a>
                </li>
                <li>
                    <a href="#" class="px-2 py-2 block hover:text-gray-900 text-gray-600 text-sm font-medium">
                        image/jpeg
                    </a>
                </li>
                <li class="">
                    <a href="#" class="px-2 py-2 block hover:text-gray-900 text-gray-600 text-sm font-medium">
                        image/png
                    </a>
                </li>
            </ul>

            <div class="p-4 pt-2 pb-2 px-0">
                <h2 class="uppercase tracking-wide text-gray-600 text-sm font-bold px-2">
                    Meta
                </h2>
            </div>
            <ul class="list-reset mb-4">
                <li>
                    <a href="#" class="px-2 py-2 block hover:text-gray-900 text-gray-600 text-sm font-medium">
                        Has Title
                    </a>
                </li>
                <li>
                    <a href="#" class="px-2 py-2 block hover:text-gray-900 text-gray-600 text-sm font-medium">
                        Has Description
                    </a>
                </li>
                <li>
                    <a href="#" class="px-2 py-2 block hover:text-gray-900 text-gray-600 text-sm font-medium">
                        No Title
                    </a>
                </li>
                <li class="">
                    <a href="#" class="px-2 py-2 block hover:text-gray-900 text-gray-600 text-sm font-medium">
                        No Description
                    </a>
                </li>
            </ul>

        </div>
        
    </div>
    
</div>

@endsection

@section('footer')
    @include('layouts.footer')
@endsection