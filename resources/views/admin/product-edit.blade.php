@extends('layouts.blank') 
@section('header') 
    @include('layouts.header') 
@endsection 

@section('content')
    <div class="lg:mt-0 rounded shadow bg-white mb-6 overflow-hidden">
        <div class="flex p-4 border-b border-bg-gray-300">
            <h2 class="uppercase pr-4 text-gray-700 text-lg font-medium">
                Information for AU Test Product Price=0 POA main
            </h2>
        </div>
        
        <ul class="flex p-4 pb-0 border-b border-bg-gray-300">
            <li class="-mb-px mr-1">
                <a class="bg-white inline-block border-l border-t border-r rounded-t py-2 px-3 text-blue-400 text-sm font-medium" href="#">
                    Information
                </a>
            </li>
            <li class="mr-1">
                <a class="bg-white inline-block py-2 px-4 text-gray-700 hover:text-blue-400 text-sm font-medium" href="#">
                    Inventory
                </a>
            </li>
            <li class="mr-1">
                <a class="bg-white inline-block py-2 px-4 text-gray-700 hover:text-blue-400 text-sm font-medium" href="#">
                    Features
                </a>
            </li>
            <li class="mr-1">
                <a class="bg-white inline-block py-2 px-4 text-gray-700 hover:text-blue-400 text-sm font-medium" href="#">
                    Notes
                </a>
            </li>
            <li class="mr-1">
                <a class="bg-white inline-block py-2 px-4 text-gray-700 hover:text-blue-400 text-sm font-medium" href="#">
                    Associations
                </a>
            </li>
            <li class="mr-1">
                <a class="bg-white inline-block py-2 px-4 text-gray-700 hover:text-blue-400 text-sm font-medium" href="#">
                    Images 
                </a>
            </li>
            <li class="mr-1">
                <a class="bg-white inline-block py-2 px-4 text-gray-700 hover:text-blue-400 text-sm font-medium" href="#">
                    Attachments
                </a>
            </li>
            <li class="mr-1">
                <a class="bg-white inline-block py-2 px-4 text-gray-700 hover:text-blue-400 text-sm font-medium" href="#">
                    Variants
                </a>
            </li>
            <li class="mr-1">
                <a class="bg-white inline-block py-2 px-4 text-gray-700 hover:text-blue-400 text-sm font-medium" href="#">
                    Price
                </a>
            </li>
            <li class="mr-1">
                <a class="bg-white inline-block py-2 px-4 text-gray-700 hover:text-blue-400 text-sm font-medium" href="#">
                    Reviews
                </a>
            </li>
            <li class="mr-1">
                <a class="bg-white inline-block py-2 px-4 text-gray-700 hover:text-blue-400 text-sm font-medium" href="#">
                    Related Product
                </a>
            </li>
            <li class="mr-1">
                <a class="bg-white inline-block py-2 px-4 text-gray-700 hover:text-blue-400 text-sm font-medium" href="#">
                    Shipping
                </a>
            </li>
                <li class="mr-1">
                <a class="bg-white inline-block py-2 px-4 text-gray-700 hover:text-blue-400 text-sm font-medium" href="#">
                    Ebay
                </a>
            </li>
        </ul>

        <div class="p-6 pt-4 pb-4">
            <div class="flex flex-wrap p-4 pl-0 pr-0 border-b border-bg-gray-300">
                <div class="w-1/2 self-center">
                    <h2 class="uppercase pr-4 text-gray-700 font-medium">Basic Information </h2>
                </div>
                <div class="w-1/2 text-right self-center">
                    <button class="bg-blue-400 hover:bg-blue-700 outline-none focus:border-teal-900 text-white py-1 px-6 rounded-sm inline-flex text-sm font-medium">
                        Add Brand
                    </button>
                    <button class="bg-blue-400 hover:bg-blue-700 outline-none focus:border-teal-900 text-white py-1 px-6 rounded-sm inline-flex text-sm font-medium">
                        Add Category
                    </button>
                </div>
            </div>
        </div> 

        <div class="pb-4 pt-0">
            <div class="px-6 mb-4">
                <label class="block text-sm font-medium text-gray-600 mb-2" for="warehouses">
                    Warehouses <span class="text-red-400">*<span>
                </label>
                <input class="appearance-none block w-full  text-gray-500 rounded-sm py-2 px-3 leading-tight focus:outline-none focus:bg-white border border-gray-400 focus:border-gray-500" type="text" placeholder="Select the warehouses you would like to be seen in" id="warehouses">
            </div>

            <div class="flex flex-wrap mb-4">
                <div class="w-full md:w-1/2 px-6 mb-6 md:mb-0">
                    <label class="block text-sm font-medium text-gray-600 mb-2" for="product-name">
                        Name <span class="text-red-400">*<span>
                    </label>
                    <input class="appearance-none block w-full  text-gray-500 rounded-sm py-2 px-3 leading-tight focus:outline-none focus:bg-white border border-gray-400 focus:border-gray-500" type="text" placeholder="Name i.e. 'Ceramic Flower Pot" id="product name">
                </div>
                <div class="w-full md:w-1/2 px-6 mb-6 md:mb-0">
                    <label class="block text-sm font-medium text-gray-600 mb-2" for="slug">
                        Slug <span class="text-red-400">*<span>
                    </label>
                    <input class="appearance-none block w-full text-gray-500 rounded-sm py-2 px-3 leading-tight focus:outline-none focus:bg-white border border-gray-400 focus:border-gray-500" type="text" placeholder="Slug i.e. 'suzuki-red-solo'" id="slug">
                </div>
            </div>

            <div class="flex flex-wrap mb-4">
                <div class="w-full md:w-1/2 px-6 mb-6 md:mb-0">
                    <label class="block text-sm font-medium text-gray-600 mb-2" for="categories">
                        Categories <span class="text-red-400">*<span>
                    </label>
                    
                    <div class="flex flex-wrap items-stretch relative">
                        <select class="w-full rounded-sm appearance-none text-gray-500 border border-gray-400 px-4 pr-6 h-10 focus:outline-none focus:bg-white focus:border-gray-500" id="categories">
                            <option selected="">
                                Select Some Option
                            </option>
                            <option>Car, Bikes & Boats</option>
                        </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700"><svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"></path>
                            </svg>
                        </div>
                    </div>
                        
                </div>
                <div class="w-full md:w-1/2 px-6 mb-6 md:mb-0">
                    <label class="block text-sm font-medium text-gray-600 mb-2" for="brands">
                        Brands
                    </label>
                    <div class="relative">
                        <select class="w-full rounded-sm appearance-none text-gray-500 border border-gray-400 px-4 pr-6 h-10 focus:outline-none focus:bg-white focus:border-gray-500" id="brands">
                            <option selected="">
                                Select Some Option
                            </option>
                            <option>Honda</option>
                            <option>Yamaha</option>
                            <option>Suzuki</option>
                        </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700"><svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"></path>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex flex-wrap mb-4">
                <div class="w-full md:w-1/2 px-6 mb-6 md:mb-0">
                    <label class="block text-sm font-medium text-gray-600 mb-2" for="product-condition">
                        Product Condition <span class="text-red-400">*<span>
                    </label>
                    
                    <div class="relative">
                        <select class="w-full rounded-sm appearance-none text-gray-500 border border-gray-400 px-4 pr-6 h-10 focus:outline-none focus:bg-white focus:border-gray-500" id="product-condition">
                            <option selected="">
                                Select Some Option
                            </option>
                            <option>New</option>
                            <option>Refurbished</option>
                            <option>Used</option>
                        </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700"><svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"></path>
                            </svg>
                        </div>
                    </div>
                        
                </div>
                <div class="w-full md:w-1/2 px-6 mb-6 md:mb-0">
                    <label class="block text-sm font-medium text-gray-600 mb-2" for="product-type">
                        Product Type
                    </label>
                    <div class="relative">
                        <select class="w-full rounded-sm appearance-none text-gray-500 border border-gray-400 px-4 pr-6 h-10 focus:outline-none focus:bg-white focus:border-gray-500" id="product-type">
                            <option selected="">
                                Select Some Option
                            </option>
                            <option>Special</option>
                            <option>Hot</option>
                            <option>Featured</option>
                        </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700"><svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"></path>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>

            <div class="px-6 mb-4">
                <label class="block text-sm font-medium text-gray-600 mb-2" for="short-description">
                    Short Description
                </label>
                <input class="appearance-none block w-full text-gray-500 rounded-sm py-2 px-3 leading-tight focus:outline-none focus:bg-white border border-gray-400 focus:border-gray-500" type="text" placeholder="Short Description i.e. 'Chinese ceramics pottery with ...'" id="short-description">
            </div>

            <div class="px-6 mb-4">
                <label class="block text-sm font-medium text-gray-600 mb-2" for="content">
                    Content
                </label>
                <textarea class="border border-gray-400 focus:border-gray-500" id="mytextarea">Hello, World!</textarea>
            </div>

            <div class="px-6 mb-4">
                <label class="block text-sm font-medium text-gray-600 mb-2" for="meta-title">
                    Meta Title
                </label>
                <input class="appearance-none block w-full  text-gray-500 rounded-sm py-2 px-3 leading-tight focus:outline-none focus:bg-white border border-gray-400 focus:border-gray-500" type="text" placeholder="Title tag goes here" id="meta-title">
            </div>

            <div class="flex flex-wrap mb-4">
                <div class="w-full md:w-1/2 px-6 mb-6 md:mb-0">
                    <label class="block text-sm font-medium text-gray-600 mb-2" for="meta-description">
                        Meta Description
                    </label>
                    <input class="appearance-none block w-full  text-gray-500 rounded-sm py-2 px-3 leading-tight focus:outline-none focus:bg-white border border-gray-400 focus:border-gray-500" type="text" placeholder="This is an interesting 255 character string" id="meta-description">
                </div>
                <div class="w-full md:w-1/2 px-6 mb-6 md:mb-0">
                    <label class="block text-sm font-medium text-gray-600 mb-2" for="meta-keywords">
                        Meta Keywords
                    </label>
                    <input class="appearance-none block w-full text-gray-500 rounded-sm py-2 px-3 leading-tight focus:outline-none focus:bg-white border border-gray-400 focus:border-gray-500" type="text" placeholder="Comma,Seperated,Keywords" id="meta-keywords">
                </div>
            </div>
            
            <div class="flex flex-wrap mb-4">
                <div class="w-full md:w-1/2 px-6 mb-6 md:mb-0">
                    <label class="block text-sm font-medium text-gray-600 mb-2" for="visibility">
                        Visibility <span class="text-red-400">*<span>
                    </span></span></label>
                    
                    <div class="relative">
                        <select class="w-full rounded-sm appearance-none text-gray-500 border border-gray-400 px-4 pr-6 h-10 focus:outline-none focus:bg-white focus:border-gray-500" id="categories">
                            <option selected="">
                                Show Everywhere
                            </option>
                            <option>Only show on Website</option>
                            <option>Only show on Services</option>
                            <option>Do bot show</option>
                        </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700"><svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"></path>
                            </svg>
                        </div>
                    </div>
                        
                </div>
                <div class="w-full md:w-1/2 px-6 mb-6 md:mb-0">
                    <label class="block text-sm font-medium text-gray-600 mb-2" for="status">
                        Enabled <span class="text-red-400">*<span>
                    </label>
                    <div class="relative">
                        <select class="w-full rounded-sm appearance-none text-gray-500 border border-gray-400 px-4 pr-6 h-10 focus:outline-none focus:bg-white focus:border-gray-500" id="status">
                            <option selected="">
                                Enabled
                            </option>
                            <option>Disabled</option>
                        </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700"><svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"></path>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="p-6 pt-4 pb-4">
                <button class="font-medium bg-blue-600 hover:bg-blue-700 outline-none focus:border-teal-900 text-white py-1 px-8 rounded-sm inline-flex">
                    Edit Information
                </button>
            </div>

        </div>

    </div>
@endsection
@section('footer')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/4.5.6/tinymce.min.js"></script>

    <script>
        
        tinymce.init({
            selector: '#mytextarea'
        });
        
    </script>
    @include('layouts.footer')
@endsection