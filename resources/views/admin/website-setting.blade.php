<x-app>
   <div class="text-gray-700 py-4 pt-0 text-xl font-semibold">
      <h2>General</h2>
   </div>
   <div class="flex flex-wrap">
      <div class="w-full lg:w-3/4 rounded shadow-lg overflow-hidden bg-white text-gray-700 mb-6 lg:mt-0">
         <div class="px-6">
            <div class="flex flex-wrap border-b border-bg-gray-300 py-4 mb-6">
               <h2 class="pr-4 text-gray-700 font-medium">Website</h2>
            </div>
            <x-form.text type="text" name="title" label="Title" placeholder="" required autofocus autocompletets="Method Name" />
            <x-form.text type="text" name="keywords" label="Keywords" placeholder="" required autofocus autocompletets="Method Name" />
            
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

            <div class="flex flex-wrap border-b border-bg-gray-300 py-4 pt-0 mb-6">
               <h2 class="pr-4 text-gray-700 font-medium">Miscellaneous</h2>
            </div>

            <x-form.text type="text" name="client-max" label="Client Max. No. of Items/Page" placeholder="" required autofocus autocompletets="Method Name" />
            <div class="flex flex-wrap">
               <div class="w-full md:w-2/6 mb-4">
                     <label class="block font-semibold text-gray-600 pt-2" for="product-condition">
                        Select <span class="text-red-400">*</span>
                     </label>
               </div>

               <div class="w-full md:w-4/6 mb-6">
                     <select class="form-select mt-1 text-gray-500 block w-full">
                        <option>Disable Quick Pagination</option>
                        <option>Enable Quick Pagination</option>
                     </select>
               </div>
            </div>
         </div>
         <div class="bg-gray-100 w-full p-3 text-right">
               <button class="bg-teal-600 hover:bg-teal-700 focus:outline-none focus:shadow-outline rounded text-white py-2 px-8 inline-flex font-semibold">
                  Save
               </button>
            </div>
      </div>
      <div class="w-full lg:w-1/4">
         <div class="px-3 pb-2 mt-4 lg:mt-0 lg:ml-6 mb-6">
            <ul class="list-reset mb-4">
               <li>
                  <a href="#" class="px-2 py-2 block shadow mb-1 rounded bg-white text-gray-900 text-sm font-medium">
                     General
                  </a>
               </li>
               <li>
                  <a href="#" class="px-2 py-2 block hover:bg-white mb-1 rounded hover:text-gray-900 text-gray-600 text-sm font-medium">
                     Logging
                  </a>
               </li>
               <li>
                  <a href="#" class="px-2 py-2 block hover:bg-white mb-1 rounded hover:text-gray-900 text-gray-600 text-sm font-medium">
                     API Integrations
                  </a>
               </li>
               <li>
                  <a href="#" class="px-2 py-2 block hover:bg-white mb-1 rounded hover:text-gray-900 text-gray-600 text-sm font-medium">
                     Redirects
                  </a>
               </li>
               <li>
                  <a href="#" class="px-2 py-2 block hover:bg-white mb-1 rounded hover:text-gray-900 text-gray-600 text-sm font-medium">
                     SEO
                  </a>
               </li>
               <li>
                  <a href="#" class="px-2 py-2 block hover:bg-white mb-1 rounded hover:text-gray-900 text-gray-600 text-sm font-medium">
                     Contact Information 
                  </a>
               </li>
               <li>
                  <a href="#" class="px-2 py-2 block hover:bg-white mb-1 rounded hover:text-gray-900 text-gray-600 text-sm font-medium">
                     Email Credentials
                  </a>
               </li>
               <li>
                  <a href="#" class="px-2 py-2 block hover:bg-white mb-1 rounded hover:text-gray-900 text-gray-600 text-sm font-medium">
                     Email Marketing
                  </a>
               </li>
               <li>
                  <a href="#" class="px-2 py-2 block hover:bg-white mb-1 rounded hover:text-gray-900 text-gray-600 text-sm font-medium">
                     Google Analytics
                  </a>
               </li>
               <li>
                  <a href="#" class="px-2 py-2 block hover:bg-white mb-1 rounded hover:text-gray-900 text-gray-600 text-sm font-medium">
                     Marketing Referrals
                  </a>
               </li>
               <li>
                  <a href="#" class="px-2 py-2 block hover:bg-white mb-1 rounded hover:text-gray-900 text-gray-600 text-sm font-medium">
                     Maintenance Mode
                  </a>
               </li>
               <li>
                  <a href="#" class="px-2 py-2 block hover:bg-white mb-1 rounded hover:text-gray-900 text-gray-600 text-sm font-medium">
                     Cart
                  </a>
               </li>
               <li>
                  <a href="#" class="px-2 py-2 block hover:bg-white mb-1 rounded hover:text-gray-900 text-gray-600 text-sm font-medium">
                     Store Locator
                  </a>
               </li>
            </ul>
         </div>
      </div>
   </div>
</x-app>