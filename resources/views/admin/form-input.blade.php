<x-app>
    <div class="flex flex-wrap">
        <div class="w-full">
            <div class="md:flex">
                <div class="mb-4 md:mb-0 md:w-3/4 self-center text-center md:text-left">
                    <div class="inline-flex">
                        <h2 class="text-gray-700 pb-4 text-xl font-semibold">
                            Form Elements
                        </h2>
                    </div>
                </div>
            </div>

            <div class="lg:mt-0 flex flex-wrap">
                <div class="w-full block rounded shadow bg-white mb-6 px-6 py-4 overflow-hidden">
                    <div class="flex flex-wrap mt-4 p-4">
                        <div class="w-full">

                            <div class="pb-4 pt-0 pl-0 pr-0">

                                <x-admin.alert type="success">This is the success message here</x-admin.alert>

                                <x-admin.alert type="error">This is the error message here</x-admin.alert>

                                <x-admin.alert type="warning">This is the warning message here</x-admin.alert>

                                <x-admin.alert type="info">This is the info message here</x-admin.alert>

                                <hr class="w-full mb-6">

                                <x-form.text type="text" name="name" label="Name" placeholder="" required autofocus autocompletets="name" />

                                <div class="flex flex-wrap">

                                    <div class="w-full md:w-2/6 mb-4">
                                        <label class="block font-semibold text-gray-600 pt-2" for="categories">
                                            Add Select
                                        </label>
                                    </div>

                                    <div class="w-full md:w-4/6 mb-6">
                                        <div class="flex flex-wrap">
                                            <div class="w-full md:w-5/6">
                                                <select class="form-select text-gray-600 block w-full h-10">
                                                    <option selected=""></option>
                                                    <option>Car, Bikes &amp; Boats</option>
                                                </select>
                                            </div>
                                            <div class="w-full md:w-1/6 md:text-left">
                                                <a href="#" class="w-full text-center ml-1 bg-blue-600 hover:bg-blue-700 focus:outline-none focus:shadow-outline rounded text-white py-3 h-10 px-4 inline-block text-sm font-medium">
                                                    <span class="justify-center text-white inline-flex">
                                                        <svg class="w-5 fill-current text-white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M12 4v16m8-8H4"></path></svg>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="flex flex-wrap">
                                    <div class="w-full md:w-2/6 mb-4">
                                        <label class="block font-semibold text-gray-600 pt-2" for="product-condition">
                                            Select <span class="text-red-400">*</span>
                                        </label>
                                    </div>

                                    <div class="w-full md:w-4/6 mb-4">
                                        <select class="form-select mt-1 text-gray-500 block w-full">
                                            <option selected=""></option>
                                            <option>New</option>
                                            <option>Refurbished</option>
                                            <option>Used</option>
                                        </select>
                                    </div>
                                </div>

                                <hr class="w-full mt-2 mb-6">

                                <div class="flex flex-wrap">
                                    <div class="w-full md:w-2/6 mb-4">
                                        <span class="text-gray-600 font-semibold">Checkbox</span>
                                    </div>

                                    <div class="w-full md:w-4/6 mb-4">
                                        <div class="mt-0">
                                            <div>
                                                <label class="inline-flex items-center">
                                                    <input type="checkbox" class="form-checkbox">
                                                    <span class="ml-2 text-md text-gray-600">Check 1</span>
                                                </label>
                                            </div>
                                            <div>
                                                <label class="inline-flex items-center">
                                                    <input type="checkbox" class="form-checkbox">
                                                    <span class="ml-2 text-md text-gray-600">Check 2</span>
                                                </label>
                                            </div>
                                            <div>
                                            <label class="inline-flex items-center">
                                                <input type="checkbox" class="form-checkbox">
                                                <span class="ml-2 text-md text-gray-600">Check 3</span>
                                            </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="flex flex-wrap">
                                    <div class="w-full md:w-2/6 mb-4">
                                        <span class="text-gray-600 font-semibold">Radio Buttons</span>
                                    </div>

                                    <div class="w-full md:w-4/6 mb-4">
                                        <div class="mt-0">
                                            <div>
                                                <label class="inline-flex items-center">
                                                    <input type="radio" class="form-radio" name="radio" value="1">
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

                                <hr class="w-full mt-2 mb-6">

                                <div class="flex flex-wrap">
                                    <div class="w-full md:w-2/6 mb-4">
                                        <label class="block text-gray-600 font-semibold pt-2" for="meta-title">
                                            Textarea
                                        </label>
                                    </div>

                                    <div class="w-full md:w-4/6 mb-4">
                                        <textarea class="form-textarea mt-1 block w-full" rows="3" placeholder="" id="comment"></textarea>
                                    </div>
                                </div>

                                <div class="flex flex-wrap">
                                    <div class="w-full md:w-2/6 mt-2 mb-4">
                                        <label class="block text-gray-600 font-semibold pt-2" for="meta-title">
                                            Upload
                                        </label>
                                    </div>
                                    <div class="w-full md:w-4/6 mt-2 mb-4">
                                        <label class="block text-center items-center px-4 py-6 bg-white text-gray-600 rounded-sm border-dashed border-2 border-gray-300 cursor-pointer hover:text-teal-600">
                                            <div class="inline-flex text-center items-center">
                                                <svg class="w-8 h-8" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                    <path d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z" />
                                                </svg>
                                            </div>
                                            <div class="w-full block">
                                                <span class="mt-2 text-md text-gray-600 font-semibold">Upload a file</span>
                                                <input type='file' class="hidden" />
                                            </div>
                                        </label>
                                    </div>
                                </div>

                                <hr class="w-full mt-2 mb-4">

                                <div class="flex flex-wrap">
                                    <div class="w-full md:w-2/6 mb-4">
                                        <label class="block font-semibold text-gray-600 pt-2" for="meta-title">
                                            Button
                                        </label>
                                    </div>
                                    <div class="w-full md:w-4/6 mb-4">
                                        <div class="inline-block">
                                            <button class="bg-teal-600 hover:bg-teal-700 focus:outline-none focus:shadow-outline rounded text-white py-2 px-8 inline-flex font-semibold">
                                                Submit
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app>