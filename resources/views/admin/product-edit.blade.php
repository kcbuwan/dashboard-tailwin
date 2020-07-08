<x-layouts.app>
    <div class="flex flex-wrap">
        <div class="w-full lg:w-3/4">
            <div class="md:flex">
                <div class="mb-4 md:mb-0 md:w-3/4 self-center text-center md:text-left">
                    <div class="inline-flex">
                        <h2 class="text-gray-700 pb-4 text-xl font-semibold">
                            Information for AU Test Product Price=0 POA main
                        </h2>
                    </div>
                </div>
            </div>
        
            <div class="lg:mt-0 flex flex-wrap">
                <div class="w-full block rounded shadow bg-white mb-6 overflow-hidden">                
                    <div class="flex flex-wrap p-4">
                        <div class="w-full">
                            <div class="flex flex-wrap border-b border-bg-gray-300 mx-4 py-4 mb-6 pt-0">
                                <div class="w-full lg:w-1/2 pt-4 mb-4 lg:mb-0">
                                    <h2 class="text-sm text-gray-600 font-bold text-left uppercase">Basic Information </h2>
                                </div>
                            </div>

                            <div class="pb-4 pt-0 pl-0 pr-0">

                                <div class="flex flex-wrap">
                                    <div class="w-full md:w-1/4 px-4 mb-4">
                                        <label class="block text-gray-700 pt-2" for="warehouses">
                                            Warehouses <span class="text-red-400">*</span>
                                        </label>
                                    </div>

                                    <div class="w-full md:w-3/4 px-4 mb-4">
                                        <input class="form-input mt-1 block w-full" placeholder="Select the warehouses you would like to be seen in" id="warehouses">
                                    </div>
                                </div>

                                <div class="w-full px-4 mb-4 mt-4">
                                    <h5 class="text-md text-gray-700 font-bold text-left">Profile Informations</h5>
                                    <span class="block w-full text-md text-gray-600 pt-2 pb-4 border-b border-gray-200">
                                        This information will be displayed publicly so be careful what you share.
                                    </span>
                                </div>

                                <div class="flex flex-wrap mb-4">
                                    <div class="w-full md:w-1/2 px-4 mb-4">
                                        <label class="block text-gray-700 pb-2" for="product-name">
                                            Name <span class="text-red-400">*</span>
                                        </label>
                                        <input class="form-input mt-1 block w-full" placeholder="Name i.e. 'Ceramic Flower Pot" id="product name">
                                    </div>

                                    <div class="w-full md:w-1/2 px-4 mb-4">
                                        <label class="block text-gray-700 pb-2" for="slug">
                                            Slug <span class="text-red-400">*</span>
                                        </label>
                                        <input class="form-input mt-1 block w-full" placeholder="Slug i.e. 'suzuki-red-solo'" id="slug">
                                    </div>
                                </div>

                                <div class="flex flex-wrap">
                                    <div class="w-full md:w-1/4 px-4 mb-4">
                                        <label class="block text-gray-700 pt-2" for="categories">
                                            Categories <span class="text-red-400">*</span>
                                        </label>
                                    </div>

                                    <div class="w-full md:w-3/4 px-4 mb-4">
                                        <div class="flex flex-wrap">
                                            <div class="w-full md:w-5/6">
                                                <select class="form-select mt-1 text-gray-500 block w-full">
                                                    <option selected="">Select Category</option>
                                                    <option>Car, Bikes &amp; Boats</option>
                                                </select>
                                            </div>
                                            <div class="w-full md:w-1/6 md:text-right">
                                                <a href="#" class="ml-1 bg-gray-500 hover:bg-gray-600 outline-none focus:border-blue-900 rounded text-white py-3 mt-1 h-10 px-4 inline-flex text-sm font-medium">
                                                    <i class="fas fa-cog fas fa-plus"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="flex flex-wrap">
                                    <div class="w-full md:w-1/4 px-4 mb-4">
                                        <label class="block text-gray-700 pt-2" for="brands">
                                            Brands <span class="text-red-400">*</span>
                                        </label>
                                    </div>

                                    <div class="w-full md:w-3/4 px-4 mb-4">
                                        <div class="flex flex-wrap">
                                            <div class="w-full md:w-5/6">
                                                <select class="form-select mt-1 text-gray-500 block w-full">
                                                    <option selected="">Select Brand</option>
                                                    <option>Honda</option>
                                                    <option>Yamaha</option>
                                                    <option>Suzuki</option>
                                                </select>
                                            </div>
                                            <div class="w-full md:w-1/6 md:text-right">
                                                <a href="#" class="ml-1 bg-gray-500 hover:bg-gray-600 outline-none focus:border-blue-900 rounded text-white py-3 mt-1 h-10 px-4 inline-flex text-sm font-medium">
                                                    <i class="fas fa-cog fas fa-plus"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="flex flex-wrap">
                                    <div class="w-full md:w-1/4 px-4 mb-4">
                                        <label class="block text-gray-700 pt-2" for="product-condition">
                                            Product Condition <span class="text-red-400">*</span>
                                        </label>
                                    </div>

                                    <div class="w-full md:w-3/4 px-4 mb-4">
                                        <select class="form-select mt-1 text-gray-500 block w-full">
                                            <option selected="">Select Some Option</option>
                                            <option>New</option>
                                            <option>Refurbished</option>
                                            <option>Used</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="flex flex-wrap">
                                    <div class="w-full md:w-1/4 px-4 mb-4">
                                        <label class="block text-gray-700 pt-2" for="product-Type">
                                            Product Type <span class="text-red-400">*</span>
                                        </label>
                                    </div>

                                    <div class="w-full md:w-3/4 px-4 mb-4">
                                        <select class="form-select mt-1 text-gray-500 block w-full">
                                            <option selected="">Select Some Option</option>
                                            <option>Special</option>
                                            <option>Hot</option>
                                            <option>Featured</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="flex flex-wrap">
                                    <div class="w-full md:w-1/4 px-4 mb-4">
                                        <label class="block text-gray-700 pt-2" for="short-description">
                                            Short Description
                                        </label>
                                    </div>

                                    <div class="w-full md:w-3/4 px-4 mb-4">
                                        <input class="form-input mt-1 block w-full" placeholder="Short Description i.e. 'Chinese ceramics pottery with ...'" id="short-description">
                                    </div>
                                </div>

                                <div class="flex flex-wrap">
                                    <div class="w-full md:w-1/4 px-4 mb-4">
                                        <label class="block text-gray-700 pt-2" for="content">
                                            Content
                                        </label>
                                    </div>

                                    <div class="w-full md:w-3/4 px-4 mb-4">
                                        <textarea class="form-input border border-gray-400 focus:border-gray-500" id="mytextarea">Hello, World!</textarea>
                                    </div>
                                </div>

                                <div class="flex flex-wrap">
                                    <div class="w-full md:w-1/4 px-4 mb-4">
                                        <span class="text-gray-700">Checkbox</span>
                                    </div>
                                    <div class="w-full md:w-3/4 px-4 mb-4">
                                        <div class="mt-0">
                                            <div>
                                            <label class="inline-flex items-center">
                                                <input type="checkbox" class="form-checkbox" checked>
                                                <span class="ml-2 text-md text-gray-600">Delist from ebay</span>
                                            </label>
                                            </div>
                                            <div>
                                            <label class="inline-flex items-center">
                                                <input type="checkbox" class="form-checkbox">
                                                <span class="ml-2 text-md text-gray-600">Delist from Website</span>
                                            </label>
                                            </div>
                                            <div>
                                            <label class="inline-flex items-center">
                                                <input type="checkbox" class="form-checkbox">
                                                <span class="ml-2 text-md text-gray-600">Send re-order alert</span>
                                            </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="flex flex-wrap">
                                    <div class="w-full md:w-1/4 px-4 mb-4">
                                        <span class="text-gray-700">Radio Buttons</span>
                                    </div>
                                    <div class="w-full md:w-3/4 px-4 mb-4">
                                        <div class="mt-0">
                                            <div>
                                                <label class="inline-flex items-center">
                                                    <input type="radio" class="form-radio" name="radio" value="1" checked>
                                                    <span class="ml-2 text-md text-gray-600">Option 1</span>
                                                </label>
                                            </div>
                                            <div>
                                                <label class="inline-flex items-center">
                                                    <input type="radio" class="form-radio" name="radio" value="2">
                                                    <span class="ml-2 text-md text-gray-600">Option 2</span>
                                                </label>
                                            </div>
                                            <div>
                                                <label class="inline-flex items-center">
                                                    <input type="radio" class="form-radio" name="radio" value="3">
                                                    <span class="ml-2 text-md text-gray-600">Option 3</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="flex flex-wrap">
                                    <div class="w-full md:w-1/4 px-4 mb-4">
                                        <label class="block text-gray-700 pt-2" for="meta-title">
                                            Comment
                                        </label>
                                    </div>

                                    <div class="w-full md:w-3/4 px-4 mb-4">
                                        <textarea class="form-textarea mt-1 block w-full" rows="3" placeholder="Brief description here.." id="comment"></textarea>
                                    </div>
                                </div>

                                <div class="flex flex-wrap">
                                    <div class="w-full md:w-1/4 px-4 mb-4">
                                        <label class="block text-gray-700 pt-2" for="meta-title">
                                            Upload
                                        </label>
                                    </div>
                                    <div class="w-full md:w-3/4 px-4 mb-4">
                                        <label class="block text-center items-center px-4 py-4 bg-white text-gray-500 rounded-sm border-dashed border-2 border-gray-400 cursor-pointer hover:text-blue-600">
                                            <div class="inline-flex text-center items-center">
                                                <svg class="w-8 h-8" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                    <path d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z" />
                                                </svg>
                                            </div>
                                            <div class="w-full block">
                                            <span class="mt-2 text-md text-gray-500 font-semibold">Upload a file</span>
                                            <input type='file' class="hidden" />
                                            </div>
                                        </label>
                                    </div>
                                </div>

                                <div class="w-full px-4 mb-4 mt-6">
                                    <h5 class="text-md text-gray-700 font-bold text-left">SEO Informations</h5>
                                    <span class="block w-full text-md text-gray-600 pt-2 pb-4 border-b border-gray-200">
                                        This information will be displayed publicly so be careful what you share.
                                    </span>
                                </div>

                                <div class="flex flex-wrap">
                                    <div class="w-full md:w-1/4 px-4 mb-4">
                                        <label class="block text-gray-700 pt-2" for="meta-title">
                                            Meta Title
                                        </label>
                                    </div>

                                    <div class="w-full md:w-3/4 px-4 mb-4">
                                        <input class="form-input mt-1 block w-full" placeholder="Title tag goes here" id="meta-title">
                                    </div>
                                </div>

                                <div class="flex flex-wrap">
                                    <div class="w-full md:w-1/4 px-4 mb-4">
                                        <label class="block text-gray-700 pt-2" for="meta-description">
                                            Meta Description
                                        </label>
                                    </div>

                                    <div class="w-full md:w-3/4 px-4 mb-4">
                                        <input class="form-input mt-1 block w-full" placeholder="This is an interesting 255 character string" id="meta-description">
                                    </div>
                                </div>

                                <div class="flex flex-wrap">
                                    <div class="w-full md:w-1/4 px-4 mb-4">
                                        <label class="block text-gray-700 pt-2" for="meta-keywords">
                                            Meta Keywords
                                        </label>
                                    </div>

                                    <div class="w-full md:w-3/4 px-4 mb-4">
                                        <input class="form-input mt-1 block w-full" placeholder="Comma,Seperated,Keywords" id="meta-keywords">
                                    </div>
                                </div>
                            
                                <div class="flex flex-wrap">
                                    <div class="w-full md:w-1/4 px-4 mb-4">
                                        <label class="block text-gray-700 pt-2" for="visibility">
                                            Visibility
                                        </label>
                                    </div>

                                    <div class="w-full md:w-3/4 px-4 mb-4">
                                        <select class="form-select mt-1 text-gray-500 block w-full">
                                            <option selected="">Show Everywhere</option>
                                            <option>Only show on Website</option>
                                            <option>Only show on Services</option>
                                            <option>Do bot show</option>
                                        </select>                                    
                                    </div>
                                </div>

                                <div class="flex flex-wrap">
                                    <div class="w-full md:w-1/4 px-4 mb-4">
                                        <label class="block text-gray-700 pt-2" for="status">
                                            Enabled
                                        </label>
                                    </div>

                                    <div class="w-full md:w-3/4 px-4 mb-4">
                                        <select class="form-select mt-1 text-gray-500 block w-full">
                                            <option selected="">Enabled</option>
                                            <option>Disabled</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="w-full md:text-right p-4 pt-0 pb-0">
                                    <div class="inline-block">
                                        <button class="bg-blue-400 hover:bg-blue-600 outline-none focus:border-blue-900 rounded text-white py-2 pb-3 px-6 inline-flex font-semibold">
                                            Edit Information
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-full lg:w-1/4 text-gray-700 px-4 mb-6">
            <ul class="overflow-hidden pt-2">
                <li>
                    <a class="block py-2 pt-0 px-4 pl-8 text-blue-500 hover:text-blue-600 text-sm font-bold" href="#">
                        Information
                    </a>
                </li>
                <li>
                    <a class="block py-2 px-4 pl-8 text-gray-500 hover:text-blue-600 text-sm font-bold" href="#">
                        Inventory
                    </a>
                </li>
                <li>
                    <a class="block py-2 px-4 pl-8 text-gray-500 hover:text-blue-600 text-sm font-bold" href="#">
                        Features
                    </a>
                </li>
                <li>
                    <a class="block py-2 px-4 pl-8 text-gray-500 hover:text-blue-600 text-sm font-bold" href="#">
                        Notes
                    </a>
                </li>
                <li>
                    <a class="block py-2 px-4 pl-8 text-gray-500 hover:text-blue-600 text-sm font-bold" href="#">
                        Associations
                    </a>
                </li>
                <li>
                    <a class="block py-2 px-4 pl-8 text-gray-500 hover:text-blue-600 text-sm font-bold" href="#">
                        Images 
                    </a>
                </li>
                <li>
                    <a class="block py-2 px-4 pl-8 text-gray-500 hover:text-blue-600 text-sm font-bold" href="#">
                        Attachments
                    </a>
                </li>
                <li>
                    <a class="block py-2 px-4 pl-8 text-gray-500 hover:text-blue-600 text-sm font-bold" href="#">
                        Variants
                    </a>
                </li>
                <li>
                    <a class="block py-2 px-4 pl-8 text-gray-500 hover:text-blue-600 text-sm font-bold" href="#">
                        Price
                    </a>
                </li>
                <li>
                    <a class="block py-2 px-4 pl-8 text-gray-500 hover:text-blue-600 text-sm font-bold" href="#">
                        Reviews
                    </a>
                </li>
                <li>
                    <a class="block py-2 px-4 pl-8 text-gray-500 hover:text-blue-600 text-sm font-bold" href="#">
                        Related Product
                    </a>
                </li>
                <li>
                    <a class="block py-2 px-4 pl-8 text-gray-500 hover:text-blue-600 text-sm font-bold" href="#">
                        Shipping
                    </a>
                </li>
                    <a class="block py-2 px-4 pl-8 text-gray-500 hover:text-blue-600 text-sm font-bold" href="#">
                        Ebay
                    </a>
                </li>
            </ul>
        </div>
    </div>
</x-layouts.app>