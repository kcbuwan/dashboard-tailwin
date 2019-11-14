@extends('layouts.blank')

@section('header')
    @include('layouts.header')
@endsection

@section('content')
    <div class="flex flex-wrap lg:mt-0 mb-6 ">
        <div class="w-full lg:w-3/4 rounded-sm shadow bg-white pb-4 text-gray-700">
            <div class="flex border-b border-grey-light p-4 pt-2 pb-2 font-medium">
                <div class="w-1/2 self-center">
                    <h2 class="uppercase pull-right pr-4">Edit Pages</h2>
                </div>
                <div class="w-1/2 text-right">
                    <div class="inline-flex">
                        <a href="#"
                            class="bg-white hover:bg-gray-100 text-gray-800 py-1 px-4 border border-r-0 border-white-400 font-normal">
                            Page
                        </a>
                        <a href="#" class="bg-white hover:bg-gray-100 text-gray-800 py-1 px-4 border border-gray-400 font-normal">
                            Section
                        </a>
                    </div>
                </div>
            </div>

            <div class="flex flex-wrap pt-4 pb-4 pl-2 pr-3">
            
                <div class="w-full md:w-1/2 px-2 mb-6 md:mb-0">
                    <label class="text-sm block tracking-wide text-gray-700 mb-2 font-medium" for="warehouses">
                        Warehouses <span class="text-red-500 text-xs italic">*</span>
                    </label>
                    <input
                        class="rounded-sm appearance-none block w-full text-gray-700 border border-gray-400 py-2 px-3 mb-5 h-10 focus:outline-none focus:bg-white focus:border-gray-500"
                        type="text" placeholder="" id="warehouses">
                </div>
            
                <div class="w-full md:w-1/2 px-2 mb-6 md:mb-0">
                    <label class="text-sm block tracking-wide text-gray-700 mb-2 font-medium" for="excerpt">
                        Excerpt / Short Description
                    </label>
                    <input
                        class="rounded-sm appearance-none block w-full text-gray-700 border border-gray-400 py-2 px-3 mb-5 h-10 focus:outline-none focus:bg-white focus:border-gray-500"
                        type="text" placeholder="" id="excerpt">
                </div>
            
                <div class="w-full md:w-1/2 px-2 mb-6 md:mb-0">
                    <label class="text-sm block tracking-wide text-gray-700 mb-2 font-medium" for="title">
                        Title <span class="text-red-500 text-xs italic">*</span>
                    </label>
                    <input
                        class=" rounded-sm appearance-none block w-full text-gray-700 border border-gray-400 py-2 px-3 mb-5 h-10 focus:outline-none focus:bg-white focus:border-gray-500"
                        type="text" placeholder="" id="title">
                </div>
            
                <div class="w-full md:w-1/2 px-2 mb-6 md:mb-0">
                    <label class="text-sm block tracking-wide text-gray-700 mb-2 font-medium" for="slug">
                        Slug <span class="text-red-500 text-xs italic">*</span>
                    </label>
                    <input
                        class="rounded-sm appearance-none block w-full text-gray-700 border border-gray-400 py-2 px-3 mb-5 h-10 focus:outline-none focus:bg-white focus:border-gray-500"
                        type="text" placeholder="" id="slug">
                </div>
            
                <div class="w-full px-2">
                    <form method="post" class="w-full">
                        <label class="text-sm block tracking-wide text-gray-700 mb-5 font-medium" for="mytextarea">
                            Content <span class="text-red-500 text-xs italic">*</span>
                        </label>
                        <textarea id="mytextarea" class="h-64">Hello, World!</textarea>
                    </form>
                </div>
            
                <div class="w-full px-2 mb-6 md:mb-0">
                    <label class="text-sm block tracking-wide text-gray-700 mb-2 font-medium" for="status">
                        Status <span class="text-red-500 text-xs italic">*</span>
                    </label>
                    <div class="relative">
                        <select
                            class="rounded-sm w-full appearance-none border text-gray-700 border border-gray-400 h-10 px-3 pr-8 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                            <option>Enabled</option>
                            <option>Disabled</option>
                        </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700"><svg
                                class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"></path>
                            </svg></div>
                    </div>
                </div>
            
            </div>

        </div>
        <div class="w-full lg:w-1/4 text-gray-700">
            <div class="rounded-sm shadow bg-white pb-4 mt-4 lg:mt-0 lg:ml-6">

                <div class="flex border-b border-grey-light p-4 pt-2 pb-2 mb-4 font-medium">
                    <h2 class="uppercase pull-right pr-4">SEO</h2>
                </div>

                <div class="mb-6 md:mb-0">

                    <div class="px-4 mb-6">
                        <label class="text-sm block tracking-wide text-gray-700 mb-2 font-medium font-medium" for="meta-title">
                            Meta Title
                        </label>
                        <input
                            class="rounded-sm appearance-none block w-full bg-grey-200 text-gray-700 border border-gray-400 py-2 px-3 mb-5 h-10 focus:outline-none focus:bg-white focus:border-gray-500"
                            type="text" placeholder="" id="meta-title">
                    </div>

                    <div class="px-4 mb-6">
                        <label class="text-sm block tracking-wide text-gray-700 mb-2 font-medium font-medium" for="meta-description">
                            Meta Description
                        </label>
                        <textarea class="rounded-sm appearance-none w-full h-24 bg-grey-200 text-gray-700 border border-gray-400 py-2 px-3 focus:outline-none focus:bg-white focus:border-gray-500" id="meta-description"></textarea>
                    </div>

                    <div class="px-4 mb-6">
                        <label class="text-sm block tracking-wide text-gray-700 mb-2 font-medium font-medium" for="meta-keywords">
                            Meta Keywords
                        </label>
                        <textarea class="rounded-sm appearance-none w-full h-24 bg-grey-200 text-gray-700 border border-gray-400 py-2 px-3 focus:outline-none focus:bg-white focus:border-gray-500" id="meta-keywords"></textarea>
                    </div>

                    <div class="px-4">
                        <button
                            class="text-sm font-medium bg-blue-600 hover:bg-blue-700 outline-none focus:border-teal-900 text-white py-1 px-8 rounded-sm inline-flex">
                            Publish
                        </button>
                        <a href="#"
                            class="text-sm font-medium outline-none hover:bg-gray-300 focus:border-gray-500 text-gray-800 border border-solid bg-white py-1 px-8 rounded-sm inline-flex">Cancel</a>
                    </div>
                    
                </div>

            </div>
        </div>
    </div>
@endsection

@section('footer')
    @include('layouts.footer')
@endsection