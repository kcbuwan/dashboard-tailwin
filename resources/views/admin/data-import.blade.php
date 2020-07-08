<x-layouts.app>
    <div class="flex flex-wrap lg:mt-0 mb-6">
        <div class="w-full">
            <h2 class="text-gray-700 pb-4 text-xl font-semibold">
                Cart Products
            </h2>
        </div>
        <div class="w-full lg:w-3/4">
            <div class="rounded shadow bg-white pb-4 text-gray-700">
                <div class="px-4 mb-4 p-4">
                    <label class="block text-sm font-medium text-gray-600 mb-2" for="type-of-import">
                        Type of import
                    </label>
                    <div class="relative">
                        <select class="w-full rounded-sm appearance-none text-gray-500 border border-gray-400 px-4 pr-6 h-10 focus:outline-none focus:bg-white focus:border-gray-500" id="type-of-import">
                            <option>
                                Please Select...
                            </option>
                            <option selected="select">Products</option>
                            <option>Users</option>
                        </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"></path>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="w-full text-gray-600 px-4">
                    <div class="rounded-sm  border border-bg-gray-300 mb-4">
                        <h3 class="p-4 pt-2 pb-2 text-gray-700 text-sm font-medium border-b border-bg-gray-300">
                            Imported/Exported Files
                        </h3>
                        <div class="p-4 pb-1">
                            <ul class="list-reset">
                                <li class="pb-3">
                                <div class="items-center leading-none flex flex-wrap">
                                    <span class="flex rounded bg-green-500 uppercase px-2 py-1 text-xs text-white font-medium mr-3">
                                    18/09/2019 17:21:57
                                    </span>
                                    <a href="#" class="text-blue-600 hover:text-blue-500 mr-2 text-left text-sm">
                                    Import Cart Products
                                    </a>
                                    <span class="flex-auto lg:text-right mt-4 lg:mt-0 self-center">
                                    <a href="#" class="inline-block text-xs text-white bg-green-500 hover:bg-green-600 rounded-sm px-2 py-1 mr-1 text-center">
                                    Validate
                                    </a>
                                    <a href="#" class="inline-block text-xs text-white bg-red-500 hover:bg-red-600 rounded-sm px-2 py-1 mr-1 text-center">
                                    Delete
                                    </a>
                                    </span>
                                </div>
                                </li>
                                <li class="pb-3">
                                <div class="items-center leading-none flex flex-wrap">
                                    <span class="flex rounded bg-green-500 uppercase px-2 py-1 text-xs text-white font-medium mr-3">
                                    18/09/2019 17:21:57
                                    </span>
                                    <a href="#" class="text-blue-600 hover:text-blue-500 mr-2 text-left text-sm">
                                    Import Cart Products
                                    </a>
                                    <span class="flex-auto lg:text-right mt-4 lg:mt-0 self-center">
                                    <a href="#" class="inline-block text-xs text-white bg-green-500 hover:bg-green-600 rounded-sm px-2 py-1 mr-1 text-center">
                                    Validate
                                    </a>
                                    <a href="#" class="inline-block text-xs text-white bg-red-500 hover:bg-red-600 rounded-sm px-2 py-1 mr-1 text-center">
                                    Delete
                                    </a>
                                    </span>
                                </div>
                                </li>
                                <li class="pb-3">
                                <div class="items-center leading-none flex flex-wrap">
                                    <span class="flex rounded bg-green-500 uppercase px-2 py-1 text-xs text-white font-medium mr-3">
                                    18/09/2019 17:21:57
                                    </span>
                                    <a href="#" class="text-blue-600 hover:text-blue-500 mr-2 text-left text-sm">
                                    Import Cart Products
                                    </a>
                                    <span class="flex-auto lg:text-right mt-4 lg:mt-0 self-center">
                                    <a href="#" class="inline-block text-xs text-white bg-green-500 hover:bg-green-600 rounded-sm px-2 py-1 mr-1 text-center">
                                    Validate
                                    </a>
                                    <a href="#" class="inline-block text-xs text-white bg-red-500 hover:bg-red-600 rounded-sm px-2 py-1 mr-1 text-center">
                                    Delete
                                    </a>
                                    </span>
                                </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="w-full text-gray-600 px-4">
                    <div class="rounded-sm  border border-bg-gray-300 mb-4">
                        <h3 class="p-4 pt-3 pb-3 text-gray-700 text-sm font-medium border-b border-bg-gray-300">
                            Step 1. Upload and Validate CSV
                        </h3>
                        <div class="p-4">
                            <div class="bg-orange-200 text-gray-800 text-sm px-4 py-3 rounded-sm mb-4" role="alert">
                                <span class="block sm:inline">The current file upload limit of rows is <strong>5000</strong> although running smaller uploads is preferred!</span> 
                            </div>
                            <div class="flex w-full items-center justify-center bg-grey-lighter mb-6">
                                <label class="w-64 flex flex-col items-center px-4 py-4 bg-white text-blue-600 rounded shadow tracking-wide border border-blue-300 cursor-pointer hover:bg-blue-400 hover:text-white">
                                <svg class="w-8 h-8" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z" />
                                </svg>
                                <span class="mt-2 leading-normal text-sm font-medium">Choose CSV File <span class="text-red-500">*</span></span>
                                <input type='file' class="hidden">
                                </label>
                            </div>
                            <div class="text-center">
                                <button class="tex-center font-medium bg-blue-600 hover:bg-blue-700 outline-none focus:border-teal-900 text-white py-1 px-8 rounded-sm inline-flex">
                                Upload
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full text-gray-600 px-4">
                    <div class="rounded-sm  border border-bg-gray-300 mb-4">
                        <h3 class="p-4 pt-3 pb-3 text-gray-700 text-sm font-medium border-b border-bg-gray-300">
                            Step 2. Import Data
                        </h3>
                        <div class="p-4">
                            <div class="mb-6">
                                <div class="bg-orange-200 text-gray-800 text-sm px-4 py-3 rounded-sm mb-4" role="alert">
                                <span class="block sm:inline">Please make sure that you validate the file before you attempt to import it.</span> 
                                </div>
                                <label class="block text-sm font-medium text-gray-600 mb-2" for="type-of-import">
                                File <span class="text-red-500">*</span>
                                </label>
                                <div class="relative mb-4">
                                <select class="w-full rounded-sm appearance-none text-gray-500 border border-gray-400 px-4 pr-6 h-10 focus:outline-none focus:bg-white focus:border-gray-500" id="type-of-import">
                                    <option selected="select">
                                        17/09/2019 22:21:33 Import Cart Products
                                    </option>
                                    <option>17/09/2019 22:24:41 Import Cart Products</option>
                                    <option>18/09/2019 17:21:57 Import Cart Products</option>
                                </select>
                                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"></path>
                                    </svg>
                                </div>
                                </div>
                                <div class="text-center">
                                <button class="font-medium bg-blue-600 hover:bg-blue-700 outline-none focus:border-teal-900 text-white py-1 px-8 rounded-sm inline-flex">
                                Import
                                </button>
                                </div>
                            </div>
                            <div class="mb-6">
                                <div class="bg-orange-200 text-gray-800 text-sm px-4 py-3 rounded-sm mb-4" role="alert">
                                <span class="block sm:inline">CSV headers that are required.</span> 
                                </div>
                                <ol class="list-reset flex flex-wrap">
                                <li class="w-1/2 lg:w-1/4 border-b border-gray-100 block py-2 px-4 text-gray-700 text-sm font-medium">id</li>
                                <li class="w-1/2 lg:w-1/4 border-b border-gray-100 block py-2 px-4 text-gray-700 text-sm font-medium">product_type</li>
                                <li class="w-1/2 lg:w-1/4 border-b border-gray-100 block py-2 px-4 text-gray-700 text-sm font-medium">warehouses</li>
                                <li class="w-1/2 lg:w-1/4 border-b border-gray-100 block py-2 px-4 text-gray-700 text-sm font-medium">category</li>
                                <li class="w-1/2 lg:w-1/4 border-b border-gray-100 block py-2 px-4 text-gray-700 text-sm font-medium">brand</li>
                                <li class="w-1/2 lg:w-1/4 border-b border-gray-100 block py-2 px-4 text-gray-700 text-sm font-medium">type</li>
                                <li class="w-1/2 lg:w-1/4 border-b border-gray-100 block py-2 px-4 text-gray-700 text-sm font-medium">condition</li>
                                <li class="w-1/2 lg:w-1/4 border-b border-gray-100 block py-2 px-4 text-gray-700 text-sm font-medium">name</li>
                                <li class="w-1/2 lg:w-1/4 border-b border-gray-100 block py-2 px-4 text-gray-700 text-sm font-medium">slug</li>
                                <li class="w-1/2 lg:w-1/4 border-b border-gray-100 block py-2 px-4 text-gray-700 text-sm font-medium">short_description</li>
                                <li class="w-1/2 lg:w-1/4 border-b border-gray-100 block py-2 px-4 text-gray-700 text-sm font-medium">long_description</li>
                                <li class="w-1/2 lg:w-1/4 border-b border-gray-100 block py-2 px-4 text-gray-700 text-sm font-medium">order</li>
                                <li class="w-1/2 lg:w-1/4 border-b border-gray-100 block py-2 px-4 text-gray-700 text-sm font-medium">status</li>
                                <li class="w-1/2 lg:w-1/4 border-b border-gray-100 block py-2 px-4 text-gray-700 text-sm font-medium">is_deleted</li>
                                <li class="w-1/2 lg:w-1/4 border-b border-gray-100 block py-2 px-4 text-gray-700 text-sm font-medium">visibility</li>
                                <li class="w-1/2 lg:w-1/4 border-b border-gray-100 block py-2 px-4 text-gray-700 text-sm font-medium">meta_description</li>
                                <li class="w-1/2 lg:w-1/4 border-b border-gray-100 block py-2 px-4 text-gray-700 text-sm font-medium">meta_keywords</li>
                                <li class="w-1/2 lg:w-1/4 border-b border-gray-100 block py-2 px-4 text-gray-700 text-sm font-medium">meta_title</li>
                                <li class="w-1/2 lg:w-1/4 border-b border-gray-100 block py-2 px-4 text-gray-700 text-sm font-medium">variant_id</li>
                                <li class="w-1/2 lg:w-1/4 border-b border-gray-100 block py-2 px-4 text-gray-700 text-sm font-medium">variant_sku</li>
                                <li class="w-1/2 lg:w-1/4 border-b border-gray-100 block py-2 px-4 text-gray-700 text-sm font-medium">variant_name</li>
                                <li class="w-1/2 lg:w-1/4 border-b border-gray-100 block py-2 px-4 text-gray-700 text-sm font-medium">variant_slug</li>
                                <li class="w-1/2 lg:w-1/4 border-b border-gray-100 block py-2 px-4 text-gray-700 text-sm font-medium">variant_is_deleted</li>
                                <li class="w-1/2 lg:w-1/4 border-b border-gray-100 block py-2 px-4 text-gray-700 text-sm font-medium">variant_width</li>
                                <li class="w-1/2 lg:w-1/4 border-b border-gray-100 block py-2 px-4 text-gray-700 text-sm font-medium">variant_height</li>
                                <li class="w-1/2 lg:w-1/4 border-b border-gray-100 block py-2 px-4 text-gray-700 text-sm font-medium">variant_depth</li>
                                <li class="w-1/2 lg:w-1/4 border-b border-gray-100 block py-2 px-4 text-gray-700 text-sm font-medium">variant_weight</li>
                                <li class="w-1/2 lg:w-1/4 border-b border-gray-100 block py-2 px-4 text-gray-700 text-sm font-medium">variant_quantity</li>
                                <li class="w-1/2 lg:w-1/4 border-b border-gray-100 block py-2 px-4 text-gray-700 text-sm font-medium">variant_rrp</li>
                                <li class="w-1/2 lg:w-1/4 border-b border-gray-100 block py-2 px-4 text-gray-700 text-sm font-medium">variant_rsp_price</li>
                                <li class="w-1/2 lg:w-1/4 border-b border-gray-100 block py-2 px-4 text-gray-700 text-sm font-medium">variant_ebay_price</li>
                                <li class="w-1/2 lg:w-1/4 border-b border-gray-100 block py-2 px-4 text-gray-700 text-sm font-medium">variant_special_price</li>
                                <li class="w-1/2 lg:w-1/4 border-b border-gray-100 block py-2 px-4 text-gray-700 text-sm font-medium">variant_trade_price</li>
                                <li class="w-1/2 lg:w-1/4 border-b border-gray-100 block py-2 px-4 text-gray-700 text-sm font-medium">variant_images</li>
                                </ol>
                            </div>
                            <div class="bg-orange-200 text-gray-800 text-sm px-4 py-3 rounded-sm mb-4" role="alert">
                                <span class="block sm:inline">Required Visibility Values</span> 
                            </div>
                            <ul class="list-reset flex flex-wrap">
                                <li class="w-full lg:w-1/4 border-b border-gray-100 block py-2 px-4 text-gray-700 text-sm font-medium">0 = Do not show</li>
                                <li class="w-full lg:w-1/4 border-b border-gray-100 block py-2 px-4 text-gray-700 text-sm font-medium">1 = Show Everywhere</li>
                                <li class="w-full lg:w-1/4 border-b border-gray-100 block py-2 px-4 text-gray-700 text-sm font-medium">2 = Only show on Website</li>
                                <li class="w-full lg:w-1/4 border-b border-gray-100 block py-2 px-4 text-gray-700 text-sm font-medium">3 = Only show on Services</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full lg:w-1/4 text-gray-700">
            <div class="px-3 pb-2 mt-4 lg:mt-0 lg:ml-6 mb-6">
            <div class="p-4 pt-3 pb-2 px-0">
                <h2 class="uppercase tracking-wide text-gray-600 text-sm font-bold">
                    Import/Export
                </h2>
            </div>
            <ul class="list-reset mb-4">
                <li>
                    <a href="#" class="px-2 py-2 block hover:text-gray-900 text-gray-600 text-sm font-medium">
                    Import Data
                    </a>
                </li>
                <li class="">
                    <a href="#" class="px-2 py-2 block hover:text-gray-900 text-gray-600 text-sm font-medium">
                    Export Data
                    </a>
                </li>
            </ul>
            <div class="p-4 pt-3 pb-2 px-0">
                <h2 class="uppercase tracking-wide text-gray-600 text-sm font-bold">
                    Sample Exports
                </h2>
            </div>
            <ul class="list-reset mb-4">
                <li>
                    <a href="#" class="px-2 py-2 block hover:text-gray-900 text-gray-600 text-sm font-medium">
                    Birthdays
                    </a>
                </li>
                <li>
                    <a href="#" class="px-2 py-2 block hover:text-gray-900 text-gray-600 text-sm font-medium">
                    Users
                    </a>
                </li>
                <li>
                    <a href="#" class="px-2 py-2 block hover:text-gray-900 text-gray-600 text-sm font-medium">
                    Page Redirects
                    </a>
                </li>
                <li>
                    <a href="#" class="px-2 py-2 block hover:text-gray-900 text-gray-600 text-sm font-medium">
                    Bikes for Sale
                    </a>
                </li>
                <li>
                    <a href="#" class="px-2 py-2 block hover:text-gray-900 text-gray-600 text-sm font-medium">
                    Blog Posts
                    </a>
                </li>
                <li>
                    <a href="#" class="px-2 py-2 block hover:text-gray-900 text-gray-600 text-sm font-medium">
                    Blog Categories
                    </a>
                </li>
                <li>
                    <a href="#" class="shadow rounded bg-white px-2 py-2 block text-gray-900 text-sm font-medium">
                    Products
                    </a>
                </li>
                <li>
                    <a href="#" class="px-2 py-2 block hover:text-gray-900 text-gray-600 text-sm font-medium">
                    Product Brands
                    </a>
                </li>
                <li>
                    <a href="#" class="px-2 py-2 block hover:text-gray-900 text-gray-600 text-sm font-medium">
                    Product Categories
                    </a>
                </li>
                <li>
                    <a href="#" class="px-2 py-2 block hover:text-gray-900 text-gray-600 text-sm font-medium">
                    Product Associations
                    </a>
                </li>
                <li>
                    <a href="#" class="px-2 py-2 block hover:text-gray-900 text-gray-600 text-sm font-medium">
                    Product Associations Values
                    </a>
                </li>
                <li>
                    <a href="#" class="px-2 py-2 block hover:text-gray-900 text-gray-600 text-sm font-medium">
                    Product Attributes
                    </a>
                </li>
                <li>
                    <a href="#" class="px-2 py-2 block hover:text-gray-900 text-gray-600 text-sm font-medium">
                    Related Products
                    </a>
                </li>
                <li>
                    <a href="#" class="px-2 py-2 block hover:text-gray-900 text-gray-600 text-sm font-medium">
                    Product Prices
                    </a>
                </li>
                <li>
                    <a href="#" class="px-2 py-2 block hover:text-gray-900 text-gray-600 text-sm font-medium">
                    Product Shipping
                    </a>
                </li>
                <li>
                    <a href="#" class="px-2 py-2 block hover:text-gray-900 text-gray-600 text-sm font-medium">
                    Shipping - Auspost Rates
                    </a>
                </li>
                <li>
                    <a href="#" class="px-2 py-2 block hover:text-gray-900 text-gray-600 text-sm font-medium">
                    Shipping - Post Codes
                    </a>
                </li>
                <li>
                    <a href="#" class="px-2 py-2 block hover:text-gray-900 text-gray-600 text-sm font-medium">
                    Shipping - Overseas Rates
                    </a>
                </li>
                <li>
                    <a href="#" class="px-2 py-2 block hover:text-gray-900 text-gray-600 text-sm font-medium">
                    Shipping - Overseas Zones
                    </a>
                </li>
                <li>
                    <a href="#" class="px-2 py-2 block hover:text-gray-900 text-gray-600 text-sm font-medium">
                    Equipment
                    </a>
                </li>
                <li>
                    <a href="#" class="px-2 py-2 block hover:text-gray-900 text-gray-600 text-sm font-medium">
                    Frequently Asked Questions
                    </a>
                </li>
                <li>
                    <a href="#" class="px-2 py-2 block hover:text-gray-900 text-gray-600 text-sm font-medium">
                    Jobs
                    </a>
                </li>
                <li>
                    <a href="#" class="px-2 py-2 block hover:text-gray-900 text-gray-600 text-sm font-medium">
                    Newsletter Subscribers
                    </a>
                </li>
                <li>
                    <a href="#" class="px-2 py-2 block hover:text-gray-900 text-gray-600 text-sm font-medium">
                    OEM Pricing
                    </a>
                </li>
                <li>
                    <a href="#" class="px-2 py-2 block hover:text-gray-900 text-gray-600 text-sm font-medium">
                    DHL Freight Rate
                    </a>
                </li>
                <li>
                    <a href="#" class="px-2 py-2 block hover:text-gray-900 text-gray-600 text-sm font-medium">
                    DHL Zone
                    </a>
                </li>
                <li>
                    <a href="#" class="px-2 py-2 block hover:text-gray-900 text-gray-600 text-sm font-medium">
                    DHL Zone
                    </a>
                </li>
                <li>
                    <a href="#" class="px-2 py-2 block hover:text-gray-900 text-gray-600 text-sm font-medium">
                    Stores
                    </a>
                </li>
                <li>
                    <a href="#" class="px-2 py-2 block hover:text-gray-900 text-gray-600 text-sm font-medium">
                    Pages
                    </a>
                </li>
            </ul>
            </div>
        </div>
    </div>
</x-layouts.app>