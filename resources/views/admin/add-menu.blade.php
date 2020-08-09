<x-app> 
    <div class="lg:mt-0 rounded shadow-lg overflow-hidden bg-white mb-4">
        <div class="flex flex-wrap lg:mt-0 p-5">
            <div class="w-full lg:w-1/3 text-gray-700">
                <div class="lg:mt-0 lg:mr-6">
                    <div class="rounded border border-solid border-gray-300 mb-1">
                        <div class="bg-gray-200 border-b border-grey-light flex justify-between items-center p-3 pt-2 pb-2">
                            <span class="font-medium pr-4">Pages</span>
                            <div class="flex-grow text-right te mt-2xt-gray-600">
                                <i class="fas fa-chevron-down"></i>
                            </div>
                        </div>
                        <div class="p-3">
                            <label class="flex justify-between items-center text-gray-700 bg-gray-100 p-2 rounded mb-1">
                                <span class="text-sm font-medium">
                                    Home
                                </span>
                                <input class="inline-flex mr-2 mt-1 form-checkbox border border-gray-500" type="checkbox">
                            </label>
                            <label class="flex justify-between items-center text-gray-700 bg-gray-100 p-2 rounded mb-1">
                                <span class="text-sm font-medium">
                                    About Us
                                </span>
                                <input class="inline-flex mr-2 mt-1 form-checkbox border border-gray-500" type="checkbox">
                            </label>
                            <label class="flex justify-between items-center text-gray-700 bg-gray-100 p-2 rounded mb-1">
                                <span class="text-sm font-medium">
                                    Services
                                </span>
                                <input class="inline-flex mr-2 mt-1 form-checkbox border border-gray-500" type="checkbox">
                            </label>
                        </div>
                        <div class="p-3 pt-0 text-right">
                            <button class="block text-sm font-medium text-white bg-teal-500 hover:bg-teal-600 rounded py-2 px-6 text-center inline-flex focus:outline-none focus:shadow-outline">
                                Add to Menu
                            </button>
                        </div>
                    </div>
                    <div class="rounded border border-solid border-gray-300 mb-1">
                        <div class="bg-gray-200 border-b border-grey-light flex justify-between items-center p-3 pt-2 pb-2">
                        <span class="font-medium pr-4">Blog</span>
                        <div class="flex-grow text-right te mt-2xt-gray-600">
                            <i class="fas fa-chevron-down"></i>
                        </div>
                        </div>
                    </div>
                    <div class="rounded border border-solid border-gray-300 mb-1">
                        <div class="bg-gray-200 border-b border-grey-light flex justify-between items-center p-3 pt-2 pb-2">
                            <span class="font-medium pr-4">Categories</span>
                            <div class="flex-grow text-right te mt-2xt-gray-600">
                                <i class="fas fa-chevron-down"></i>
                            </div>
                        </div>
                    </div>
                    <div class="rounded border border-solid border-gray-300 mb-1">
                        <div class="bg-gray-200 border-b border-grey-light flex justify-between items-center p-3 pt-2 pb-2">
                            <span class="font-medium pr-4">Custome Links</span>
                            <div class="flex-grow text-right te mt-2xt-gray-600">
                                <i class="fas fa-chevron-down"></i>
                            </div>
                        </div>
                        <div class="p-3">
                        <div class="w-full">
                            <label class="text-sm block tracking-wide text-gray-700 mb-2 font-medium" for="ulr">
                                URL
                            </label>
                        </div>
                        <div class="w-full">
                            <input class="form-input w-full mb-4" type="text" placeholder="http://" id="url">
                            <label class="text-sm block tracking-wide text-gray-700 mb-2 font-medium" for="link-text">
                                Link Text
                            </label>
                        </div>
                        <div class="w-full">
                            <input class="form-input w-full mb-4" type="text" placeholder="Menu Item" id="link-text">
                            <label class="flex text-gray-700 mb-1">
                                <span class="text-sm font-medium">
                                    Open in new window 
                                </span>
                                <input class="inline-flex mr-2 mt-1 form-checkbox border border-gray-500" type="checkbox">
                            </label>
                        </div>
                        <div class="p-3 pt-0 text-right">
                            <button class="text-sm font-medium text-white bg-teal-500 hover:bg-teal-600 rounded py-2 px-6 text-center inline-flex focus:outline-none focus:shadow-outline">
                                Add to Menu
                            </button>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
                <div class="w-full lg:w-2/3">
                    <div class="mb-3">
                        <label class="text-sm block tracking-wide text-gray-700 mb-2 font-medium" for="title">
                            Menu Name 
                            <span class="text-red-500 text-xs  italic">*</span>
                        </label>
                        <input class="form-input w-full mb-4" type="text" placeholder="Please fill in your Menu Name" id="title">
                        <ul class="list-reset mb-5">
                            <li class="flex justify-between items-center text-gray-700 bg-gray-200 px-3 py-2 rounded mb-1">
                                <span class="text-sm font-medium">
                                    Home
                                </span>
                            <div class="flex-grow text-right">
                                <button class="inline-block text-xs text-white bg-red-400 hover:bg-red-500 focus:outline-none hover:border-gray-500 rounded-sm py-1 px-2 w-8 h-8 text-center">
                                    <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                                </button>
                            </div>
                            </li>
                            <li class="flex justify-between items-center text-gray-700 bg-gray-200 px-3 py-2 rounded mb-1">
                                <span class="text-sm font-medium">
                                        About Us
                                </span>
                            <div class="flex-grow text-right">
                                <button class="inline-block text-xs text-white bg-red-400 hover:bg-red-500 focus:outline-none hover:border-gray-500 rounded-sm py-1 px-2 w-8 h-8 text-center">
                                    <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                                </button>
                            </div>
                            </li>
                            <li class="flex justify-between items-center text-gray-700 bg-gray-200 px-3 py-2 rounded mb-1">
                                <span class="text-sm font-medium">
                                    Services
                                </span>
                                <div class="flex-grow text-right">
                                    <button class="inline-block text-xs text-white bg-red-400 hover:bg-red-500 focus:outline-none hover:border-gray-500 rounded-sm py-1 px-2 w-8 h-8 text-center">
                                        <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                                    </button>
                                </div>
                            </li>
                            <li class="flex justify-between items-center text-gray-700 bg-gray-200 px-3 py-2 rounded mb-1">
                                <span class="text-sm font-medium">
                                    Contact Us
                                </span>
                                <div class="flex-grow text-right">
                                    <ul class="inline-flex">
                                        <li>
                                            <button class="inline-block text-xs text-white bg-green-400 hover:bg-green-500 focus:outline-none focus:shadow-outlinehover:border-gray-500 rounded-sm py-1 px-2 mr-1 w-8 h-8 text-center">
                                                <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path></svg>
                                            </button>
                                        </li>
                                        <li>
                                            <button class="inline-block text-xs text-white bg-red-400 hover:bg-red-500 focus:outline-none hover:border-gray-500 rounded-sm py-1 px-2 w-8 h-8 text-center">
                                                <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                                            </button>
                                        </li>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="mb-3">
                        <label class="text-sm block tracking-wide text-gray-700 mb-2 font-medium" for="menu-limit">
                            Menu Limit 
                            <span class="text-red-500 text-xs italic">*</span>
                        </label>
                        <input class="form-input w-full" type="text" placeholder="Please fill in your Menu limit" id="menu-limit">
                    </div>
                    <div class="mb-5">
                        <span class="text-gray-700 text-sm"><strong>Note:</strong> For 'Mobile Menu' and 'Footer Menu',please set the menu limit to 0.</span>
                    </div>
                    <button class="inline-flex text-sm font-medium text-white bg-teal-500 hover:bg-teal-600 rounded py-2 px-6 text-center focus:outline-none focus:shadow-outline">
                        Save Menu
                    </button>
                </div>
            </div>
    </div>
        
</x-app>