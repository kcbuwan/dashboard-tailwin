<x-app>
    <div class="text-gray-700 py-4 pt-0 mb-4 text-xl font-semibold self-center">
        <h2>Add New Page</h2>
    </div>
    <div class="w-full">
        <div class="w-full text-left">
            <button class="text-sm font-medium text-gray-600 bg-white rounded rounded-b-none py-2 px-4 text-center uppercase focus:outline-none focus:shadow-outline">
                Page
            </button>
            <button class="text-sm font-medium text-white bg-teal-500 hover:bg-teal-600 rounded rounded-b-none py-2 px-4 mr-4 text-center uppercase focus:outline-none focus:shadow-outline">
                Section
            </button>
        </div>
        <div class="px-6 p-6 pb-4 rounded rounded-tl-none shadow bg-white text-gray-700">
            <h2 class="text-gray-600 font-semibold border-b border-gray-200 pb-4 mb-6">
                Page Information
            </h2>
            <x-form.text type="text" name="warehouse" label="Warehouse" placeholder="Select the warehouses you would like to be seen in" required autofocus autocompletets="warehouse" />
            <x-form.text type="text" name="title" label="Page Title" placeholder="Page name i.e. 'About Us" required autofocus autocompletets="page-title" />
            <x-form.text type="text" name="slug" label="Slug" placeholder="Page URL i.e. 'about-us" required autofocus autocompletets="slug" />
            <div class="flex flex-wrap mb-6">
                <div class="w-full md:w-2/6">
                    <label class="block font-semibold text-gray-600 pt-2" for="restricted-except">
                        Restricted Except
                    </label>
                </div>
                <div class="w-full md:w-4/6">
                    <select class="w-full form-select block text-gray-500">
                        <option selected="">Select Some Options</option>
                        <option>Administrator</option>
                        <option>Trade</option>
                        <option>User</option>
                    </select>
                </div>
            </div>
            <x-form.text type="text" name="Excerpt" label="Excerpt / Short Description" placeholder="Page fill in your Excerpt" required autofocus autocompletets="slug" />
            <div class="flex flex-wrap mb-6">
                <div class="w-full md:w-2/6">
                    <label for="name" class="block text-gray-600 text-sm font-semibold pt-2">
                        Content <span class="text-red-400">*</span>
                    </label>
                </div>
                <div class="w-full md:w-4/6">
                    <textarea id="mytextarea">Hello, World!</textarea>
                </div>
            </div>
            <h2 class="text-gray-600 font-semibold border-b border-gray-200 pb-4 mb-6">
                Page Attributes
            </h2>
            <div class="flex flex-wrap mb-6">
                <div class="w-full md:w-2/6">
                    <label for="parent" class="block text-gray-600 text-sm font-semibold pt-2">
                        Parent
                    </label>
                </div>
                <div class="w-full md:w-4/6">
                    <select class="w-full form-select block text-gray-500">
                        <option selected="">No Parent</option>
                    </select>
                </div>
            </div>
            <div class="flex flex-wrap mb-6">
                <div class="w-full md:w-2/6">
                    <label for="template" class="block text-gray-600 text-sm font-semibold pt-2">
                        Template
                    </label>
                </div>
                <div class="w-full md:w-4/6">
                    <select class="form-select block text-gray-500 w-full">
                        <option selected="">Full Width Page</option>
                        <option>Full Width no title</option>
                    </select>
                </div>
            </div>
            <div class="mb-6">
                <h2 class="text-gray-600 font-semibold border-b border-gray-200 pb-4 mb-6">
                    Banner / Feature Image
                </h2>
                <ul class="inline-flex">
                    <li>
                        <a href="#" class="block rounded rounded-b-none bg-teal-400 text-sm font-semibold text-white p-2 px-3 mr-1">
                            Featured Image
                        </a>
                    </li>
                    <li>
                        <a href="#" class="block rounded rounded-b-none bg-white hover:bg-teal-500 text-sm font-semibold text-gray-500 hover:text-white p-2 px-3">
                            Banner Image
                        </a>
                    </li>
                </ul>
                <div class="bg-white rounded-tl-none rounded mb-4 overflow-hidden">
                    <div class="">
                        <label class="w-full flex flex-col items-center px-4 py-4 rounded-tl-none rounded shadow tracking-wide cursor-pointer border text-gray-500 hover:text-teal-500">
                            <svg class="w-8 h-8" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z"></path>
                            </svg>
                            <span class="mt-2 leading-normal text-sm font-medium">Select Image</span>
                            <input type="file" class="hidden">
                        </label>
                    </div>
                </div>
            </div>
            <h2 class="text-gray-600 font-semibold border-b border-gray-200 pb-4 mb-6">
                SEO
            </h2>

            <div class="flex flex-wrap mb-6">
                <div class="w-full md:w-2/6 pr-6">
                    <label for="meta-title" class="block text-gray-600 text-sm font-semibold mb-2">
                        Search engine listing preview
                    </label>
                </div>
                <div div="" class="w-full md:w-4/6">
                    <span class="block text-indigo-700 font-medium">Element 7 Digital: Web Development Agency | Melbourne...</span>
                    <p class="text-gray-700"><strong>Element 7 Digital</strong> Po Box 62 Belmont Victoria, 3216. (03) 5249 5570 info@element7digital.com.au. <br>
                        ©2020 <strong>Element 7 Digital</strong> | All rights reserved. Terms and ...
                    </p>
                </div>
            </div>
            
            <div class="flex flex-wrap mb-6">
                <div class="w-full md:w-2/6 pr-6">
                    <label for="meta-title" class="block text-gray-600 text-sm font-semibold mb-2">
                        Meta Title
                    </label>
                </div>
                <div div="" class="w-full md:w-4/6">
                    <input id="meta-title" type="text" class="form-input text-gray-600 w-full " name="meta-title" placeholder="About Us" value="" label="Meta Title" required="required" autofocus="autofocus" autocompletets="Meta Title">
                    <span class="text-sm text-gray-500">5 of 70 characters used</span>
                </div>
            </div>
            <div class="flex flex-wrap mb-6">
                <div class="w-full md:w-2/6 pr-6">
                    <label for="meta-keywords" class="block text-gray-600 text-sm font-semibold mb-2">
                        Meta Keywords
                    </label>
                </div>
                <div div="" class="w-full md:w-4/6">
                    <input id="meta-keywords" type="text" class="form-input text-gray-600 w-full " name="meta-keywords" placeholder="" value="" label="Meta Keywords" required="required" autofocus="autofocus" autocompletets="Meta Keywords">
                    <span class="text-sm text-gray-500">5 of 70 characters used</span>
                </div>
            </div>            
            <div class="flex flex-wrap mb-6">
                <div class="w-full md:w-2/6">
                    <label for="template" class="block text-gray-600 text-sm font-semibold pt-2">
                        Meta Description
                    </label>
                </div>
                <div class="w-full md:w-4/6">
                    <textarea class="w-full p-3 resize-none border rounded focus:outline-none focus:shadow-outline"></textarea>
                    <span class="text-sm text-gray-500">78 of 320 characters used</span>
                </div>
            </div>
            <div class="flex flex-wrap mb-6">
                <div class="w-full md:w-2/6">
                    <label for="template" class="block text-gray-600 text-sm font-semibold pt-2">
                        Robot index
                    </label>
                </div>
                <div class="w-full md:w-4/6">
                    <select class="form-select block text-gray-500 w-full">
                        <option selected="">Index</option>
                        <option>Nonindex</option>
                    </select>
                </div>
            </div>
            <div class="flex flex-wrap mb-6">
                <div class="w-full md:w-2/6">
                    <label for="template" class="block text-gray-600 text-sm font-semibold pt-2">
                        Robot Follow
                    </label>
                </div>
                <div class="w-full md:w-4/6">
                    <select class="form-select block text-gray-500 w-full">
                        <option selected="">Follow</option>
                        <option>Nofollow</option>
                    </select>
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
</x-app>