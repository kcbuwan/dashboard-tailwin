<x-app>
    <div class="text-gray-700 py-4 pt-0 text-xl font-semibold">
        <h2>Add New Page</h2>
    </div>
    <div class="flex flex-wrap lg:mt-0 mb-4">
        <div class="w-full lg:w-3/4 text-right">
            <div class="inline-flex">
                <button class="block text-sm font-medium text-white bg-teal-500 hover:bg-teal-600 rounded py-2 mt-1 px-4 text-center uppercase focus:outline-none focus:shadow-outline">
                    Add Section
                </button>
            </div>
        </div>
    </div>
    <div class="flex flex-wrap lg:mt-0 mb-6">
        <div class="w-full lg:w-3/4">
            <div class="rounded shadow bg-white text-gray-700">
                <div class="px-4 mb-4 p-4">
                    <h2 class="text-gray-600 font-semibold mb-6 border-b pb-2">
                        Page Information
                    </h2>
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
                            <input class="form-input w-full mb-4" type="text" placeholder="Page name i.e. 'About Us'" id="title">
                        </div>
                        <div class="w-full md:w-1/2 px-3 pr-0 mb-4">
                            <label for="name" class="text-sm font-semibold block text-gray-600 mb-2">
                                Excerpt / Short Description
                            </label>
                            <input class="form-input w-full" type="text" placeholder="Page URL i.e. 'about-us'" id="title">
                        </div>
                    </div>
                    <div class="w-full mb-6">
                        <label for="name" class="text-sm font-semibold block text-gray-600 mb-2">
                            Content <span class="text-red-400">*</span>
                        </label>
                        <textarea class="border border-gray-400 focus:border-gray-500" id="mytextarea">Hello, World!</textarea>
                    </div>

                    <h2 class="text-gray-600 font-semibold mb-6  border-b pb-2">
                        SEO
                    </h2>
                    <div class="flex flex-wrap">
                        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0 pl-0">
                            <label for="name" class="text-sm font-semibold block text-gray-600 mb-2">
                                Meta Title
                            </label>
                            <input class="form-input w-full mb-4" type="text" placeholder="Descriptive Title with Keywords" id="title">
                        </div>
                        <div class="w-full md:w-1/2 px-3 pr-0">
                            <label for="name" class="text-sm font-semibold block text-gray-600 mb-2">
                                Meta Keywords
                            </label>
                            <input class="form-input w-full mb-4" type="text" placeholder="Comma, Seperated, Keywords" id="title">
                        </div>
                        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0 pl-0">
                            <label for="name" class="text-sm font-semibold block text-gray-600 mb-2">
                                Meta Description
                            </label>
                            <input class="form-input w-full mb-4" type="text" placeholder="Descriptive Description with Keywords" id="title">
                        </div>
                    </div>
                </div>
                <div class="flex flex-wrap bg-gray-100 p-4">
                    <div class="w-full md:w-1/2 self-center">
                        <label class="text-sm font-semibold text-gray-600 mr-4">Status <span class="text-red-400">*</span></label>
                        <select class="form-select text-gray-500">
                            <option selected="">Enabled</option>
                            <option>Disabled</option>
                        </select>
                    </div>
                    <div class="w-full md:w-1/2  text-right">
                        <ul class="inline-flex">
                            <li class="mr-4 self-center">
                                <a href="#" class="text-sm font-semibold block text-gray-600">Save Draft</a>
                            </li>
                            <li>
                                <button class="block text-sm font-medium text-white bg-teal-500 hover:bg-teal-600 rounded py-2 mt-1 px-4 text-center uppercase focus:outline-none focus:shadow-outline">
                                    Publish
                                </button> 
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-full lg:w-1/4 text-gray-700">
            <div class="bg-white rounded pb-2 mt-4 lg:mt-0 lg:ml-6 mb-6 overflow-hidden">
                <h2 class="bg-gray-100 text-sm text-gray-600 font-bold text-left mb-2 p-3 uppercase">Warehouse</h2>
                <div class="p-3 pt-1 pb-2">
                    <label for="name" class="text-sm font-semibold block text-gray-600 mb-2">
                        Select Warehouse <span class="text-red-400">*</span>
                    </label>
                    <select class="form-select text-gray-600 text-sm block w-full">
                        <option selected="">Australia</option>
                        <option>United States</option>
                    </select>
                </div>
            </div>

            <div class="bg-white rounded pb-2 mt-4 lg:mt-0 lg:ml-6 mb-6 overflow-hidden">
                <h2 class="bg-gray-100 text-sm text-gray-600 font-bold text-left mb-2 p-3 uppercase">Page Attributes</h2>
                <div class="p-3 pt-1 pb-2">
                    <label for="name" class="text-sm font-semibold block text-gray-600 mb-2">
                        Parent
                    </label>
                    <select class="form-select text-gray-600 text-sm block w-full">
                        <option selected="">No Parent</option>
                        <option>United States</option>
                    </select>
                </div>
                <div class="p-3 pt-1 pb-2">
                    <label for="name" class="text-sm font-semibold block text-gray-600 mb-2">
                        Template
                    </label>
                    <select class="form-select text-gray-600 text-sm block w-full">
                        <option selected="">Full Width Page</option>
                        <option>Full Width no title</option>
                    </select>
                </div>
            </div>

            <div class="bg-white rounded pb-2 mt-4 lg:mt-0 lg:ml-6 mb-6 overflow-hidden">
                <h2 class="bg-gray-100 text-sm text-gray-600 font-bold text-left mb-2 p-3 uppercase">Featured Image</h2>
                <div class="p-3 pt-1 pb-2">
                    <label class="w-full flex flex-col items-center px-4 py-4 bg-white text-teal-600 rounded shadow tracking-wide border border-teal-300 cursor-pointer hover:bg-teal-600 hover:text-white">
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
</x-app>