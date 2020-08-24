<x-app>
    
        
    <div class="text-gray-700 py-4 pt-0 mb-4 text-xl font-semibold self-center">
        <h2>Add New Page</h2>
    </div>
    <div class="flex flex-wrap lg:mt-0 mb-6"> 
        <div class="w-full lg:w-3/4">
            <div class="w-full text-left">
                <button class="text-sm font-medium text-gray-600 bg-white rounded rounded-b-none py-2 px-4 text-center uppercase focus:outline-none focus:shadow-outline">
                    Page
                </button>
                <button class="text-sm font-medium text-white bg-teal-500 hover:bg-teal-600 rounded rounded-b-none py-2 px-4 mr-4 text-center uppercase focus:outline-none focus:shadow-outline">
                    Section
                </button>
            </div>
        
            <div class="px-6 p-6 pb-4 rounded rounded-tl-none shadow bg-white text-gray-700">
                <div class="rounded border border-solid border-gray-200 mb-4 p-4 pb-0 overflow-hidden">

                    <div class="flex justify-between items-center cursor-pointer p-3 py-2 -my-4 -mx-4 border-b border-gray-200 bg-gray-100 mb-4">
                        <h2 class="text-gray-600 text-sm uppercase font-bold">
                            Page Information
                        </h2>
                        <div class="rounded-full border w-6 h-6 flex items-center justify-center bg-white">
                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7"></path></svg>
                        </div>
                    </div>
                    <div class="flex flex-wrap">

                        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0 pl-0">
                            <label for="name" class="text-sm font-semibold block text-gray-600 mb-2">
                                Page Title <span class="text-red-400">*</span>
                            </label>
                            <input class="form-input w-full mb-4" type="text" placeholder="Page name i.e. 'About Us'" id="title">
                        </div>
                        <div class="w-full md:w-1/2 px-3 pr-0">
                            <label for="name" class="text-sm font-semibold block text-gray-600 mb-2">
                                Slug <span class="text-red-400">*</span>
                            </label>
                            <input class="form-input w-full mb-4" type="text" placeholder="Page URL i.e. 'about-us'" id="title">
                        </div>
                        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0 pl-0">
                            <label for="name" class="text-sm font-semibold block text-gray-600 mb-2">
                                Restricted Except
                            </label>
                            <select class="w-full form-select block text-gray-500">
                                <option selected="">Select Some Options</option>
                                <option>Administrator</option>
                                <option>Trade</option>
                                <option>User</option>
                            </select>
                        </div>
                        <div class="w-full md:w-1/2 px-3 pr-0 mb-4">
                            <label for="name" class="text-sm font-semibold block text-gray-600 mb-2">
                                Excerpt / Short Description
                            </label>
                            <input class="form-input w-full" type="text" placeholder="Page fill in your Excerpt" id="title">
                        </div>
                    </div>
                    <div class="w-full mb-6">
                        <label for="name" class="text-sm font-semibold block text-gray-600 mb-2">
                            Content <span class="text-red-400">*</span>
                        </label>
                        <textarea id="mytextarea">Hello, World!</textarea>
                    </div>
                </div>
                <div class="rounded border border-solid border-gray-200 mb-4 p-4 pb-0 overflow-hidden">
                    <div class="flex justify-between items-center cursor-pointer p-3 py-2 -my-4 -mx-4 border-b border-gray-200 bg-gray-100 mb-4">
                        <h2 class="text-gray-600 text-sm uppercase font-bold">
                            PAGE ATTRIBUTES
                        </h2>
                        <div class="rounded-full border w-6 h-6 flex items-center justify-center bg-white">
                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7"></path></svg>
                        </div>
                    </div>
                    <div class="flex flex-wrap">
                        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0 pl-0">
                            <label for="name" class="text-sm font-semibold block text-gray-600 mb-2">
                                Parent
                            </label>
                            <select class="w-full form-select block text-gray-500">
                                <option selected="">No Parent</option>
                            </select>
                        </div>
                        <div class="w-full md:w-1/2 px-3 pr-0 mb-4">
                            <label for="name" class="text-sm font-semibold block text-gray-600 mb-2">
                                Template
                            </label>
                            <select class="form-select block text-gray-500 w-full">
                                <option selected="">Full Width Page</option>
                                <option>Full Width no title</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="rounded border border-solid border-gray-200 mb-4 p-4 pb-0 overflow-hidden">
                    <div class="flex justify-between items-center cursor-pointer p-3 py-2 -my-4 -mx-4 border-b border-gray-200 bg-gray-100 mb-4">
                        <h2 class="text-gray-600 text-sm uppercase font-bold">
                            Banner / Feature Image
                        </h2>
                        <div class="rounded-full border w-6 h-6 flex items-center justify-center bg-white">
                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7"></path></svg>
                        </div>
                    </div>
                    <div class="">
                        <ul class="inline-flex">
                            <li>
                                <a href="#" class="block rounded rounded-b-none bg-teal-500 text-sm font-semibold text-white p-2 px-3 mr-1">
                                    Featured Image
                                </a>
                            </li>
                            <li>
                                <a href="#" class="block rounded rounded-b-none bg-white text-sm font-semibold text-gray-500 p-2 px-3">
                                    Banner Image
                                </a>
                            </li>
                        </ul>
                        <div class="bg-white rounded-tl-none rounded mb-4 overflow-hidden">
                            <div class="">
                                <label class="w-full flex flex-col items-center px-4 py-4 rounded-tl-none rounded shadow tracking-wide cursor-pointer bg-teal-500 hover:bg-teal-600 text-white">
                                    <svg class="w-8 h-8" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z"></path>
                                    </svg>
                                    <span class="mt-2 leading-normal text-sm font-medium">Select Image</span>
                                    <input type="file" class="hidden">
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="rounded border border-solid border-gray-200 mb-4 p-4 pb-0 overflow-hidden">
                    <div class="flex justify-between items-center cursor-pointer p-3 py-2 -my-4 -mx-4 border-b border-gray-200 bg-gray-100 mb-4">
                        <h2 class="text-gray-600 text-sm uppercase font-bold">
                            SEO
                        </h2>
                        <div class="rounded-full border w-6 h-6 flex items-center justify-center bg-white">
                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7"></path></svg>
                        </div>
                    </div>
                    <div class="flex flex-wrap">
                        <div class="w-full md:w-1/3 mb-6 md:mb-0">
                            <label for="name" class="text-sm font-semibold block text-gray-600 mb-2">
                                Meta Title
                            </label>
                            <input class="form-input w-full mb-4" type="text" placeholder="Descriptive Title with Keywords" id="title">
                        </div>
                        <div class="w-full md:w-1/3 px-3 pr-0">
                            <label for="name" class="text-sm font-semibold block text-gray-600 mb-2">
                                Meta Keywords
                            </label>
                            <input class="form-input w-full mb-4" type="text" placeholder="Comma, Seperated, Keywords" id="title">
                        </div>
                        <div class="w-full md:w-1/3 px-3 pr-0">
                            <label for="name" class="text-sm font-semibold block text-gray-600 mb-2">
                                Meta Description
                            </label>
                            <input class="form-input w-full mb-4" type="text" placeholder="Descriptive Description with Keywords" id="title">
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full bg-gray-100 rounded rounded-tl-none rounded-tr-none p-4 px-6 pt-3 pb-3 text-right -mt-3">
                <ul class="inline-flex">
                    <li class="mr-4 self-center">
                        <a href="#" class="text-sm font-semibold block text-gray-600">Save Draft</a>
                    </li>
                    <li>
                        <button class="block text-sm font-medium text-white bg-teal-500 hover:bg-teal-600 rounded py-2 mt-1 px-4 text-center focus:outline-none focus:shadow-outline">
                            Publish
                        </button> 
                    </li>
                </ul>
            </div>
        </div>
        <div class="w-full lg:w-1/4 text-gray-700">
            <div class="pb-2 mt-10 lg:ml-6 lg:mr-0 mb-6">
                <ul class="list-reset mb-4">
                    <li>
                        <a href="#" class="px-2 py-2 block shadow mb-1 rounded bg-white text-gray-900 text-sm font-medium">
                            Page Information
                        </a>
                    </li>
                    <li class="">
                        <a href="#" class="px-2 py-2 block hover:bg-white mb-1 rounded hover:text-gray-900 text-gray-600 text-sm font-medium">
                            Page Attributes
                        </a>
                    </li>
                    <li class="">
                        <a href="#" class="px-2 py-2 block hover:bg-white mb-1 rounded hover:text-gray-900 text-gray-600 text-sm font-medium">
                            Featured / Banner Image
                        </a>
                    </li>
                    <li class="">
                        <a href="#" class="px-2 py-2 block hover:bg-white mb-1 rounded hover:text-gray-900 text-gray-600 text-sm font-medium">
                            SEO
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</x-app>