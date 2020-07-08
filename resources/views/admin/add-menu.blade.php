<x-layouts.blank-full> 

    <div class="text-gray-700 py-4 pt-0 text-xl font-semibold">
        <h2>Add Menu</h2>
    </div>
    <div class="lg:mt-0 rounded shadow-lg overflow-hidden bg-white mb-6">
        <div class="flex flex-wrap lg:mt-0 p-5">
            <div class="w-full lg:w-1/3 text-gray-700">
                <div class="lg:mt-0 lg:mr-6">
                    <div class="rounded border border-solid border-gray-300 mb-1">
                        <div class="bg-gray-200 border-b border-grey-light flex justify-between items-center p-3 pt-2 pb-2">
                            <span class="font-medium pr-4">Pages</span>
                            <div class="flex-grow text-right text-gray-600">
                                <i class="fas fa-chevron-down"></i>
                            </div>
                        </div>
                        <div class="p-3">
                            <label class="flex justify-between items-center text-gray-700 bg-gray-100 p-2 rounded mb-1">
                            <input class="inline-flex mr-2 mt-1 form-checkbox border border-gray-500" type="checkbox">
                                <span class="text-sm font-medium">
                                    Home
                                </span>
                            </label>
                            <label class="flex justify-between items-center text-gray-700 bg-gray-100 p-2 rounded mb-1">
                            <input class="inline-flex mr-2 mt-1 form-checkbox border border-gray-500" type="checkbox">
                                <span class="text-sm font-medium">
                                    About Us
                                </span>
                            </label>
                            <label class="flex justify-between items-center text-gray-700 bg-gray-100 p-2 rounded mb-1">
                            <input class="inline-flex mr-2 mt-1 form-checkbox border border-gray-500" type="checkbox">
                                <span class="text-sm font-medium">
                                    Services
                                </span>
                            </label>
                        </div>
                        <div class="p-3 pt-0 text-right">
                            <button class="text-sm font-medium bg-blue-500 hover:bg-blue-600 outline-none focus:border-teal-900 text-white py-2 px-4 rounded inline-flex">
                                Add to Menu
                            </button>
                        </div>
                    </div>
                    <div class="rounded border border-solid border-gray-300 mb-1">
                        <div class="bg-gray-200 border-b border-grey-light flex justify-between items-center p-3 pt-2 pb-2">
                        <span class="font-medium pr-4">Blog</span>
                        <div class="flex-grow text-right text-gray-600">
                            <i class="fas fa-chevron-down"></i>
                        </div>
                        </div>
                    </div>
                    <div class="rounded border border-solid border-gray-300 mb-1">
                        <div class="bg-gray-200 border-b border-grey-light flex justify-between items-center p-3 pt-2 pb-2">
                            <span class="font-medium pr-4">Categories</span>
                            <div class="flex-grow text-right text-gray-600">
                                <i class="fas fa-chevron-down"></i>
                            </div>
                        </div>
                    </div>
                    <div class="rounded border border-solid border-gray-300 mb-1">
                        <div class="bg-gray-200 border-b border-grey-light flex justify-between items-center p-3 pt-2 pb-2">
                            <span class="font-medium pr-4">Custome Links</span>
                            <div class="flex-grow text-right text-gray-600">
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
                            <input class="rounded appearance-none block w-full text-gray-700 border border-gray-400 py-2 px-3 mb-2 focus:outline-none focus:bg-white focus:border-gray-500" type="text" placeholder="http://" id="url">
                            <label class="text-sm block tracking-wide text-gray-700 mb-2 font-medium" for="link-text">
                                Link Text
                            </label>
                        </div>
                        <div class="w-full">
                            <input class="rounded-sm appearance-none block w-full text-gray-700 border border-gray-400 py-2 px-3 mb-2 focus:outline-none focus:bg-white focus:border-gray-500 mb-4" type="text" placeholder="Menu Item" id="link-text">
                            <label class="flex text-gray-700 mb-1">
                                <input class="inline-flex mr-2 mt-1 form-checkbox border border-gray-500" type="checkbox">
                                <span class="text-sm font-medium">
                                    Open in new window 
                                </span>
                            </label>
                        </div>
                        <div class="p-3 pt-0 text-right">
                            <button class="text-sm font-medium bg-blue-500 hover:bg-blue-600 outline-none focus:border-teal-900 text-white py-2 px-4 rounded inline-flex">
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
                        <input class="rounded appearance-none block w-full text-gray-700 border border-gray-400 py-2 px-3 mb-5  focus:outline-none focus:bg-white focus:border-gray-500" type="text" placeholder="Please fill in your Menu Name" id="title">
                        <ul class="list-reset mb-5">
                            <li class="flex justify-between items-center text-gray-700 bg-gray-200 p-2 rounded mb-1">
                                <span class="text-sm font-medium">
                                    Home
                                </span>
                            <div class="flex-grow text-right">
                                <a href="#" class="rounded bg-blue-400 hover:bg-blue-500 text-white text-xs font-bold uppercase p-2 px-2 inline-block w-8 h-8">
                                    <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                                </a>
                            </div>
                            </li>
                            <li class="flex justify-between items-center text-gray-700 bg-gray-200 p-2 rounded mb-1">
                                <span class="text-sm font-medium">
                                        About Us
                                </span>
                            <div class="flex-grow text-right">
                                <a href="#" class="rounded bg-blue-400 hover:bg-blue-500 text-white text-xs font-bold uppercase p-2 px-2 inline-block w-8 h-8">
                                    <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                                </a>
                            </div>
                            </li>
                            <li class="flex justify-between items-center text-gray-700 bg-gray-200 p-2 rounded mb-1">
                                <span class="text-sm font-medium">
                                    Services
                                </span>
                                <div class="flex-grow text-right">
                                    <a href="#" class="rounded bg-blue-400 hover:bg-blue-500 text-white text-xs font-bold uppercase p-2 px-2 inline-block w-8 h-8">
                                    <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                                    </a>
                                </div>
                            </li>
                            <li class="flex justify-between items-center text-gray-700 bg-gray-200 p-2 rounded mb-1">
                                <span class="text-sm font-medium">
                                    Contact Us
                                </span>
                                <div class="flex-grow text-right">
                                    <ul class="inline-flex">
                                        <li>
                                            <a href="#" class="block rounded bg-blue-400 hover:bg-blue-500 text-white text-xs font-bold uppercase p-2 px-2 mr-2 w-8 h-8">
                                                <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path></svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="block rounded bg-blue-400 hover:bg-blue-500 text-white text-xs font-bold uppercase p-2 px-2 w-8 h-8">
                                                <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                                            </a>
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
                        <input class="rounded appearance-none block w-full text-gray-700 border border-gray-400 py-2 px-3 mb-5 focus:outline-none focus:bg-white focus:border-gray-500" type="text" placeholder="Please fill in your Menu limit" id="menu-limit">
                    </div>
                    <div class="mb-5">
                        <span class="text-gray-700 text-sm"><strong>Note:</strong> For 'Mobile Menu' and 'Footer Menu',please set the menu limit to 0.</span>
                    </div>
                    <button class="bg-blue-500 hover:bg-blue-600 outline-none focus:border-teal-900 text-white font-medium py-2 px-8 rounded inline-flex">
                        Save Menu
                    </button>
                </div>
            </div>
    </div>
        
</x-layouts.blank-full>