<x-app>
        
    <div class="text-gray-700 py-4 pt-0 mb-4 text-xl font-semibold self-center">
        <h2>Add Post</h2>
    </div>

    <div class="flex flex-wrap"> 
        <div class="w-full lg:w-3/4">        
            <div class="px-6 p-6 pb-4 rounded rounded-tl-none shadow bg-white text-gray-700">

                <div class="rounded border border-solid border-gray-200 mb-4 p-4 pb-0 overflow-hidden">
                    <div class="flex justify-between items-center cursor-pointer p-3 py-2 -my-4 -mx-4 border-b border-gray-200 bg-gray-100 mb-4">
                        <h2 class="text-gray-600 text-sm uppercase font-bold">
                            Post Information
                        </h2>
                        <div class="rounded-full border w-6 h-6 flex items-center justify-center bg-white">
                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7"></path></svg>
                        </div>
                    </div>

                    <div class="flex flex-wrap">

                        <div class="w-full flex flex-wrap mb-6">
                            <div class="w-full md:w-2/6">
                                <label class="block font-semibold text-gray-600 pt-2" for="product-condition">
                                    Select Layout <span class="text-red-400">*</span>
                                </label>
                            </div>

                            <div class="w-full md:w-4/6">
                                <select class="form-select mt-1 text-gray-500 block w-full">
                                    <option selected="">Image Left Text Right</option>
                                    <option>Image Right Text Left</option>
                                    <option>Full Width</option>
                                    <option>No Image</option>
                                </select>
                            </div>
                        </div>

                        <div class="w-full flex flex-wrap mb-6">
                            <div class="w-full md:w-2/6">
                                <label class="block font-semibold text-gray-600 pt-2" for="product-condition">
                                    Thumbnail
                                </label>
                            </div>

                            <div class="w-full md:w-4/6">
                                <div class="">
                                    <label class="block text-center items-center px-4 py-6 bg-white text-gray-600 rounded-sm border-dashed border-2 border-gray-300 cursor-pointer hover:text-teal-600">
                                        <div class="inline-flex text-center items-center">
                                            <svg class="w-8 h-8" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                <path d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z"></path>
                                            </svg>
                                        </div>
                                        <div class="w-full block">
                                            <span class="mt-2 text-md text-gray-600 font-semibold">Upload a Image</span>
                                            <input type="file" class="hidden">
                                        </div>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="w-full flex flex-wrap mb-6">
                            <div class="w-full md:w-2/6 pr-6">
                                <label for="name" class="block text-gray-600 font-semibold pt-2 mb-2">
                                    Post Title <span class="text-red-400">*</span>
                                </label>
                            </div>

                            <div div="" class="w-full md:w-4/6">
                                <input id="name" type="text" class="form-input text-gray-600 w-full " name="name" placeholder="Post Title.." value="" label="Name" required="required" autofocus="autofocus" autocompletets="name">
                            </div>
                        </div>

                        <div class="w-full flex flex-wrap mb-6">
                            <div class="w-full md:w-2/6 pr-6">
                                <label for="name" class="block text-gray-600 font-semibold pt-2 mb-2">
                                    Slug <span class="text-red-400">*</span>
                                </label>
                            </div>

                            <div div="" class="w-full md:w-4/6">
                                <input id="slug" type="text" class="form-input text-gray-600 w-full " name="name" placeholder="slug" value="" label="slug" required="required" autofocus="autofocus" autocompletets="slug">
                            </div>
                        </div>

                        <div class="w-full flex flex-wrap mb-6">
                            <div class="w-full md:w-2/6">
                                <label class="block font-semibold text-gray-600 pt-2" for="product-condition">
                                    Warehouse <span class="text-red-400">*</span>
                                </label>
                            </div>

                            <div class="w-full md:w-4/6">
                                <select class="form-select mt-1 text-gray-500 block w-full">
                                    <option selected="">Australia</option>
                                    <option>Australia</option>
                                    <option>Australia</option>
                                    <option>Australia</option>
                                </select>
                            </div>
                        </div>

                        <div class="w-full flex flex-wrap mb-6">
                            <div class="w-full md:w-2/6">
                                <label class="block font-semibold text-gray-600 pt-2" for="product-condition">
                                    User Groups <span class="text-red-400">*</span>
                                </label>
                            </div>

                            <div class="w-full md:w-4/6">
                                <select class="form-select mt-1 text-gray-500 block w-full">
                                    <option selected="">All</option>
                                    <option>Admin</option>
                                    <option>Super Admin</option>
                                </select>
                            </div>
                        </div>

                        <div class="w-full flex flex-wrap mb-6">
                            <div class="w-full md:w-2/6 pr-6">
                                <label for="name" class="block text-gray-600 font-semibold pt-2 mb-2">
                                    Tag <span class="text-red-400">*</span>
                                </label>
                            </div>

                            <div div="" class="w-full md:w-4/6">
                                <input id="tag" type="text" class="form-input text-gray-600 w-full " name="tag" placeholder="Tag 1, .." value="" label="tag" required="required" autofocus="autofocus" autocompletets="tag">
                            </div>
                        </div>

                        <div class="w-full flex flex-wrap mb-6">
                            <div class="w-full md:w-2/6 pr-6">
                                <label for="name" class="block text-gray-600 font-semibold pt-2 mb-2">
                                    Excerpt / Short Description
                                </label>
                            </div>

                            <div div="" class="w-full md:w-4/6">
                                <input id="tag" type="excerpt" class="form-input text-gray-600 w-full " name="excerpt" placeholder="Short Description" value="" label="excerpt" required="required" autofocus="autofocus" autocompletets="excerpt">
                            </div>
                        </div>

                        <div class="w-full flex flex-wrap mb-6">
                            <div class="w-full md:w-2/6 pr-6">
                                <label for="name" class="block text-gray-600 font-semibold pt-2 mb-2">
                                     Content <span class="text-red-400">*</span>
                                </label>
                            </div>

                            <div div="" class="w-full md:w-4/6">
                                <textarea id="mytextarea">Hello, World!</textarea>
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

                    <div class="w-full flex flex-wrap mb-6">
                        <div class="w-full md:w-2/6 pr-6">
                            <label for="name" class="block text-gray-600 font-semibold pt-2 mb-2">
                                Meta Title
                            </label>
                        </div>

                        <div div="" class="w-full md:w-4/6">
                            <input id="tag" type="title" class="form-input text-gray-600 w-full " name="title" placeholder="Descriptive Title with Keywords" value="" label="" required="required" autofocus="autofocus" autocompletets="">
                        </div>
                    </div>

                    <div class="w-full flex flex-wrap mb-6">
                        <div class="w-full md:w-2/6 pr-6">
                            <label for="name" class="block text-gray-600 font-semibold pt-2 mb-2">
                                Meta Keywords
                            </label>
                        </div>

                        <div div="" class="w-full md:w-4/6">
                            <input id="tag" type="title" class="form-input text-gray-600 w-full " name="keywords" placeholder="Comma, Seperated, Keywords" value="" label="" required="required" autofocus="autofocus" autocompletets="">
                        </div>
                    </div>

                    <div class="w-full flex flex-wrap mb-6">
                        <div class="w-full md:w-2/6 pr-6">
                            <label for="name" class="block text-gray-600 font-semibold pt-2 mb-2">
                                Meta Description
                            </label>
                        </div>

                        <div div="" class="w-full md:w-4/6">
                            <input id="tag" type="title" class="form-input text-gray-600 w-full " name="description" placeholder="Descriptive Description with Keywords" value="" label="" required="required" autofocus="autofocus" autocompletets="">
                        </div>
                    </div>
                </div>

                <div class="rounded border border-solid border-gray-200 mb-4 p-4 pb-0 overflow-hidden">
                    <div class="flex justify-between items-center cursor-pointer p-3 py-2 -my-4 -mx-4 border-b border-gray-200 bg-gray-100 mb-4">
                        <h2 class="text-gray-600 text-sm uppercase font-bold">
                            Status
                        </h2>
                        <div class="rounded-full border w-6 h-6 flex items-center justify-center bg-white">
                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7"></path></svg>
                        </div>
                    </div>

                    <div class="w-full flex flex-wrap mb-6">
                        <div class="w-full md:w-2/6">
                            <label class="block font-semibold text-gray-600 pt-2" for="product-condition">
                                Comment Status
                            </label>
                        </div>

                        <div class="w-full md:w-4/6">
                            <select class="form-select mt-1 text-gray-500 block w-full">
                                <option selected="">Disabled</option>
                                <option>Enabled</option>
                            </select>
                        </div>
                    </div>

                    <div class="w-full flex flex-wrap mb-6">
                        <div class="w-full md:w-2/6">
                            <label class="block font-semibold text-gray-600 pt-2" for="product-condition">
                                Status
                            </label>
                        </div>

                        <div class="w-full md:w-4/6">
                            <select class="form-select mt-1 text-gray-500 block w-full">
                                <option selected="">Enabled</option>
                                <option>Disabled</option>
                            </select>
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
                        <button class="bg-teal-600 hover:bg-teal-700 focus:outline-none focus:shadow-outline rounded text-white py-2 px-8 inline-flex font-semibold">
                            Publish
                        </button>
                    </li>
                </ul>
            </div>
        </div>

        <div class="w-full lg:w-1/4">
            <div class="overflow-hidden bg-white px-4 py-4 rounded lg:ml-6 lg:mr-0 mb-6">

                <div class="w-full mb-10">
                    <div class="flex flex-wrap justify-between items-center border-b mb-2 pb-2">                                                    
                        <div class="mr-2 self-center">
                            <h2 class="text-sm text-gray-600 font-bold text-left uppercase">Select Categories</h2>
                        </div>
                    </div>
                    <div class="w-full overflow-y-auto h-48">
                        <label class="block text-gray-600 text-sm font-semibold mb-1">
                            Search Categories
                        </label>
                        <input class="form-input w-full text-sm mb-1 text-gray-600" type="text" placeholder="" id="link-text">
                            
                        <label class="flex justify-between items-center text-gray-600 p-1 mb-1">
                            <span class="text-sm font-medium">
                                Health
                            </span>
                            <input class="inline-flex mr-2 form-checkbox border border-gray-500" type="checkbox">
                        </label>

                        <label class="flex justify-between items-center text-gray-600 p-1 mb-1">
                            <span class="text-sm font-medium">
                                Lifestyle
                            </span>
                            <input class="inline-flex mr-2 form-checkbox border border-gray-500" type="checkbox">
                        </label>

                        <label class="flex justify-between items-center text-gray-600 p-1 mb-1">
                            <span class="text-sm font-medium">
                                Heart Mind
                            </span>
                            <input class="inline-flex mr-2 form-checkbox border border-gray-500" type="checkbox">
                        </label>
                        <label class="flex justify-between items-center text-gray-600 p-1 mb-1">
                            <span class="text-sm font-medium">
                                Health
                            </span>
                            <input class="inline-flex mr-2 form-checkbox border border-gray-500" type="checkbox">
                        </label>
                        <label class="flex justify-between items-center text-gray-600 p-1 mb-1">
                            <span class="text-sm font-medium">
                                Cloud
                            </span>
                            <input class="inline-flex mr-2 form-checkbox border border-gray-500" type="checkbox">
                        </label>
                        <label class="flex justify-between items-center text-gray-600 p-1 mb-1">
                            <span class="text-sm font-medium">
                                Product
                            </span>
                            <input class="inline-flex mr-2 form-checkbox border border-gray-500" type="checkbox">
                        </label>
                    </div>
                </div>

            </div>
        </div>
    </div>

</x-app>