<x-app> 
    <div class="flex flex-wrap">
        <div class="w-full lg:w-4/6">

            <div class="md:flex">
                <div class="mb-4 md:mb-0 md:w-3/4 self-center text-center md:text-left">
                    <div class="inline-flex">
                        <h2 class="text-gray-700 pb-4 text-xl font-semibold">
                            Menu
                        </h2>
                    </div>
                </div>
            </div>
        
            <div class="lg:mt-0 flex flex-wrap">
                <div class="w-full block rounded shadow bg-white mb-6 overflow-hidden">                
                    <div class="flex flex-wrap p-6">
                        <div class="w-full">
                            <div class="mb-3">
                                <label for="name" class="block text-gray-600 font-semibold mb-2">
                                    Menu Name
                                </label>
                                <input class="form-input w-full mb-4" type="text" placeholder="Please fill in your Menu Name" id="title">
                            
                                <div class="mb-3">
                                    <label for="name" class="block text-gray-600 font-semibold mb-2">
                                        Menu Limit
                                    </label>
                                    <input class="form-input w-full" type="text" placeholder="Please fill in your Menu limit" id="menu-limit">
                                </div>

                                <div class="mb-5">
                                    <span class="text-gray-700 text-sm"><strong>Note:</strong> For 'Mobile Menu' and 'Footer Menu',please set the menu limit to 0.</span>
                                </div>

                                <button class="inline-flex text-sm font-medium text-white bg-teal-500 hover:bg-teal-600 rounded py-2 px-6 text-center focus:outline-none focus:shadow-outline">
                                    Add Menu
                                </button>

                            </div>    
                            
                            <hr class="w-full mt-8 mb-8">

                            <label for="name" class="block text-gray-600 font-semibold mb-4">
                                Edit Menu
                            </label>
                            <div class="w-full mb-6">
                                <div class="rounded border border-solid border-gray-300 mb-4">
                                    <div class="flex justify-between items-center p-3 px-4 cursor-pointer select-none border-b border-solid border-gray-300">
                                        <label for="name" class="block text-gray-600 font-semibold">
                                            Primary menu
                                        </label>
                                        <div class="rounded-full border border-grey w-7 h-7 flex items-center justify-center">
                                            <!-- icon by feathericons.com -->
                                            <svg aria-hidden="true" class="" data-reactid="266" fill="none" height="24" stroke="#606F7B" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                <polyline points="6 9 12 15 18 9">
                                                </polyline>
                                            </svg>
                                        </div>
                                    </div>
                                    
                                    <div class="w-full p-4">
                                        <div class="flex flex-wrap">
                                            <div class="w-full md:w-5/6">
                                                <select class="form-select text-gray-500 block w-full">
                                                    <option selected="">Select Page</option>
                                                    <option>Blog</option>
                                                    <option>Products</option>
                                                    <option>News</option>
                                                </select>
                                            </div>
                                            <div class="w-full md:w-1/6 text-center">
                                                <button class="inline-flex text-sm font-medium text-white bg-teal-500 hover:bg-teal-600 rounded pt-2 pb-3 px-5 text-center focus:outline-none focus:shadow-outline">
                                                    Add Item
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="w-full px-4 mb-4">
                                        <ul class="bg-gray-100 list-reset px-4">
                                            <li class="flex justify-between items-center text-gray-700 py-2 border-b border-solid border-gray-300 mb-1">
                                                <span class="text-sm font-medium">
                                                    Home
                                                </span>
                                                <div class="flex-grow text-right">
                                                    <button class="inline-block text-xs text-white bg-red-400 hover:bg-red-500 focus:outline-none hover:border-gray-500 rounded-sm py-1 px-2 w-8 h-8 text-center">
                                                        <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                                                    </button>
                                                </div>
                                            </li>
                                            <li class="flex justify-between items-center text-gray-700 py-2 border-b border-solid border-gray-300 mb-1">
                                                <span class="text-sm font-medium">
                                                        About Us
                                                </span>
                                                <div class="flex-grow text-right">
                                                    <button class="inline-block text-xs text-white bg-red-400 hover:bg-red-500 focus:outline-none hover:border-gray-500 rounded-sm py-1 px-2 w-8 h-8 text-center">
                                                        <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                                                    </button>
                                                </div>
                                            </li>
                                            <li class="flex justify-between items-center text-gray-700 py-2 border-b border-solid border-gray-300 mb-1">
                                                <span class="text-sm font-medium">
                                                    Services
                                                </span>
                                                <div class="flex-grow text-right">
                                                    <button class="inline-block text-xs text-white bg-red-400 hover:bg-red-500 focus:outline-none hover:border-gray-500 rounded-sm py-1 px-2 w-8 h-8 text-center">
                                                        <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                                                    </button>
                                                </div>
                                            </li>
                                            <li class="flex justify-between items-center text-gray-700 py-2">
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
                                    <div class="border-t border-solid border-gray-300 p-3 px-4">
                                        <div class="flex flex-wrap">
                                            <div class="w-1/2 text-left">
                                                <a href="" class="inline-flex py-2 text-teal-600 font-semibold">
                                                    Delete Menu
                                                </a>
                                            </div>
                                            <div class="w-1/2 text-right">
                                                <button class="inline-flex text-sm font-medium text-white bg-teal-500 hover:bg-teal-600 rounded py-2 px-6 text-center focus:outline-none focus:shadow-outline">
                                                    Save Menu
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="bg-white rounded border border-solid border-gray-300 mb-4">
                                    <div class="flex justify-between items-center p-3 px-4 cursor-pointer select-none">
                                        <label for="name" class="block text-gray-600 font-semibold">
                                            Footer menu
                                        </label>
                                        <div class="rounded-full border border-grey w-7 h-7 flex items-center justify-center">
                                            <!-- icon by feathericons.com -->
                                            <svg aria-hidden="true" class="" data-reactid="266" fill="none" height="24" stroke="#606F7B" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                <polyline points="6 9 12 15 18 9">
                                                </polyline>
                                            </svg>
                                        </div>
                                    </div>
                                </div>

                                <div class="bg-white rounded border border-solid border-gray-300 mb-4">
                                    <div class="flex justify-between items-center p-3 px-4 cursor-pointer select-none">
                                        <label for="name" class="block text-gray-600 font-semibold">
                                            Mobile menu
                                        </label>
                                        <div class="rounded-full border border-grey w-7 h-7 flex items-center justify-center">
                                            <!-- icon by feathericons.com -->
                                            <svg aria-hidden="true" class="" data-reactid="266" fill="none" height="24" stroke="#606F7B" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                <polyline points="6 9 12 15 18 9">
                                                </polyline>
                                            </svg>
                                        </div>
                                    </div>
                                </div>                                
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="w-full lg:w-2/6 text-gray-700 px-4 mt-12 mb-6">
            <div class="overflow-hidden bg-white rounded px-4 py-6">

                <div class="w-full mb-10">
                    <h2 class="text-sm text-gray-600 font-bold text-left mb-2 border-b pb-2 uppercase">Pages</h2>
                    <div class="w-full">
                        <label class="flex justify-between items-center text-gray-600 p-2 rounded mb-1">
                            <span class="text-sm font-medium">
                                Home
                            </span>
                            <input class="inline-flex mr-2 mt-1 form-checkbox border border-gray-500" type="checkbox">
                        </label>
                        <label class="flex justify-between items-center text-gray-600 p-2 rounded mb-1">
                            <span class="text-sm font-medium">
                                About Us
                            </span>
                            <input class="inline-flex mr-2 mt-1 form-checkbox border border-gray-500" type="checkbox">
                        </label>
                        <label class="flex justify-between items-center text-gray-600 p-2 rounded mb-1">
                            <span class="text-sm font-medium">
                                Services
                            </span>
                            <input class="inline-flex mr-2 mt-1 form-checkbox border border-gray-500" type="checkbox">
                        </label>
                    </div>
                    <div class="border-t pt-2 mt-2">
                        <button class="block text-sm font-medium text-white bg-teal-500 hover:bg-teal-600 rounded py-2 px-6 text-center inline-flex focus:outline-none focus:shadow-outline">
                            Add to Menu
                        </button>
                    </div>
                </div>

                <div class="w-full">
                    <h2 class="text-sm text-gray-600 font-bold text-left mb-2  border-b pb-2 uppercase">Custom links</h2>
                    <div class="w-full">
                        <label for="url" class="block text-gray-600 font-semibold mb-2">
                            URL
                        </label>
                    </div>
                    <div class="w-full">
                        <input class="form-input w-full mb-4" type="text" placeholder="http://" id="url">
                        <label for="url" class="block text-gray-600 font-semibold mb-2">
                            Link Text
                        </label>
                    </div>
                    <div class="w-full">
                        <input class="form-input w-full mb-4" type="text" placeholder="Menu Item" id="link-text">
                        <label class="flex text-gray-700 mb-1">
                            <input class="inline-flex mr-2 mt-1 form-checkbox border border-gray-500" type="checkbox">
                            <span class="text-sm font-medium">
                                Open in new window 
                            </span>
                        </label>
                    </div>
                    <div class="mt-6">
                        <button class="text-sm font-medium text-white bg-teal-500 hover:bg-teal-600 rounded py-2 px-6 text-center inline-flex focus:outline-none focus:shadow-outline">
                            Add to Menu
                        </button>
                    </div>
                </div>
            </div>
        </div>

    </div>        
</x-app>