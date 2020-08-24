<x-app>
    <div class="text-gray-700 py-4 pt-0 mb-4 text-xl font-semibold self-center">
        <h2>Add  Page Section</h2>
    </div>
    <div class="w-full text-left">
        <button class="text-sm font-medium text-white bg-teal-500 hover:bg-teal-600 rounded rounded-b-none py-2 px-4 text-center uppercase focus:outline-none focus:shadow-outline">
            Page
        </button>
        <button class="text-sm font-medium text-gray-600 bg-white rounded rounded-b-none py-2 px-4 text-center uppercase focus:outline-none focus:shadow-outline">
            Section
        </button>
    </div>    
    <div class="flex flex-wrap lg:mt-0 mb-6">
        <div class="w-full lg:w-3/4">
            <div class="text-gray-700">
                <div class="px-4 mb-4 p-4">
                    <div class="flex flex-wrap">
                        
                        <label for="name" class="text-sm font-semibold block text-gray-600 mb-2">
                            Title <span class="text-red-400">*</span>
                        </label>
                        <input class="form-input w-full mb-4" type="text" placeholder="Title for your section" id="title">
                    
                    </div>
                    <div class="w-full mb-6">
                        <label for="name" class="text-sm font-semibold block text-gray-600 mb-2">
                            Content <span class="text-red-400">*</span>
                        </label>
                        <textarea id="mytextarea">Hello, World!</textarea>
                    </div>
                    <div class="w-full mb-6">
                        <label for="name" class="text-sm font-semibold block text-gray-600 mb-2">
                            Image
                        </label>
                        <label class="flex flex-col items-center px-4 py-6 bg-white rounded shadow-lg tracking-wide border border-gray-300 cursor-pointer hover:bg-teal-400 text-gray-600 hover:text-white">
                            <svg class="w-8 h-8" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z"></path>
                            </svg>
                            <span class="mt-2 text-sm font-semibold">Upload Image</span>
                            <input type="file" class="hidden">
                        </label>
                    </div>
                </div>
                <div class="w-full bg-gray-100 p-4 pt-3 pb-3  text-right">
                    <ul class="inline-flex">
                        <li>
                            <button class="block text-sm font-medium text-white bg-teal-500 hover:bg-teal-600 rounded py-2 mt-1 px-4 text-center uppercase focus:outline-none focus:shadow-outline">
                                Save
                            </button> 
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="w-full lg:w-1/4 text-gray-700">

            <div class="bg-white rounded pb-2 mt-4 lg:mt-0 lg:ml-6 mb-4 overflow-hidden">
                <h2 class="bg-gray-100 text-sm text-gray-600 font-bold text-left mb-2 p-3 uppercase">Section Type</h2>
                <div class="p-3 pt-1 pb-2">
                    <label for="name" class="text-sm font-semibold block text-gray-600 mb-2">
                        Type <span class="text-red-400">*</span>
                    </label>
                    <select class="form-select block text-gray-500 w-full">
                        <option>Show on Tab</option>
                        <option>Show on Grid</option>
                    </select>
                </div>
                
            </div>

            <div class="bg-white rounded pb-2 mt-4 lg:mt-0 lg:ml-6 mb-6 overflow-hidden">
                <h2 class="bg-gray-100 text-sm text-gray-600 font-bold text-left mb-2 p-3 uppercase">Link Mangement</h2>
                <div class="p-3 pt-1">
                    <label for="name" class="text-sm font-semibold block text-gray-600 mb-2">
                        Link Text
                    </label>
                    <input class="form-input w-full" type="text" placeholder="Please fill in your Link Description" id="title">
                </div>
                <div class="p-3 pt-1">
                    <label for="name" class="text-sm font-semibold block text-gray-600 mb-2">
                        URL
                    </label>
                    <input class="form-input w-full" type="text" placeholder="Please fill in your Url" id="title">
                </div>
                <div class="p-3 pt-1">
                    <label for="name" class="text-sm font-semibold block text-gray-600 mb-2">
                        Link / Button Class 
                    </label>
                    <input class="form-input w-full" type="text" placeholder="text-brand-400 bg-brand-400" id="title">
                </div>
                <div class="p-3 pt-1 pb-1">
                    <label for="name" class="text-sm font-semibold block text-gray-600 mb-2">
                        Link / Button Icon 
                    </label>
                    <label class="flex flex-col items-center px-4 py-6 rounded shadow-lg tracking-wide border border-gray-300 cursor-pointer bg-teal-500 hover:bg-teal-600 text-white">
                        <svg class="w-8 h-8" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z"></path>
                        </svg>
                        <span class="mt-2 text-sm font-semibold">Upload Icon</span>
                        <input type="file" class="hidden">
                    </label>
                </div>
            </div>

        </div>
    </div>
</x-app>