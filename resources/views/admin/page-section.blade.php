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
    
    <div class="px-6 p-6 pb-4 rounded rounded-tl-none shadow bg-white text-gray-700">
        <h2 class="text-gray-600 font-semibold border-b border-gray-200 pb-4 mb-6">
            Section Information
        </h2>
        <x-form.text type="text" name="title" label="Title" placeholder="Title for you section" required autofocus autocompletets="warehouse" />
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
        <div class="flex flex-wrap mb-6">
            <div class="w-full md:w-2/6">
                <label for="name" class="text-sm font-semibold block text-gray-600 mb-2">
                    Image <span class="text-red-400">*</span>
                </label>
            </div>
            <div class="w-full md:w-4/6">
                <label class="flex flex-col items-center px-4 py-6 bg-white rounded shadow-lg tracking-wide border border-gray-300 cursor-pointer hover:bg-teal-400 text-gray-600 hover:text-white">
                    <svg class="w-8 h-8" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z"></path>
                    </svg>
                    <span class="mt-2 text-sm font-semibold">Upload Image</span>
                    <input type="file" class="hidden">
                </label>
            </div>
        </div>
        <h2 class="text-gray-600 font-semibold border-b border-gray-200 pb-4 mb-6">
            Link Management
        </h2>
        <x-form.text type="text" name="warehouse" label="Link Text" placeholder="Please fill in your link text" required autofocus autocompletets="Link Text" />
        <x-form.text type="text" name="url" label="URL" placeholder="Please fill in your link URL" required autofocus autocompletets="Link URL" />
        <x-form.text type="text" name="url" label="Link / Button Class" placeholder="text-brand-400 bg-brand-400" required autofocus autocompletets="class" />
        <div class="flex flex-wrap mb-6">
            <div class="w-full md:w-2/6">
                <label for="name" class="text-sm font-semibold block text-gray-600 mb-2">
                    Link / Button Icon <span class="text-red-400">*</span>
                </label>
            </div>
            <div class="w-full md:w-4/6">
                <label class="flex flex-col items-center px-4 py-6 bg-white rounded shadow-lg tracking-wide border border-gray-300 cursor-pointer hover:bg-teal-400 text-gray-600 hover:text-white">
                    <svg class="w-8 h-8" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z"></path>
                    </svg>
                    <span class="mt-2 text-sm font-semibold">Upload icon</span>
                    <input type="file" class="hidden">
                </label>
            </div>
        </div>

        <h2 class="text-gray-600 font-semibold border-b border-gray-200 pb-4 mb-6">
            Section Type
        </h2>
        <div class="flex flex-wrap mb-6">
            <div class="w-full md:w-2/6">
                <label class="block font-semibold text-gray-600 pt-2" for="restricted-except">
                    Type <span class="text-red-400">*</span>
                </label>
            </div>
            <div class="w-full md:w-4/6">
                <select class="w-full form-select block text-gray-500">
                    <option selected="">Show on Tab</option>
                    <option>Show on Grid</option>
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
</x-app>