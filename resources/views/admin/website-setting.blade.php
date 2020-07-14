<x-app>
   <div class="text-gray-700 py-4 pt-0 text-xl font-semibold">
      <h2>General</h2>
   </div>
   <div class="flex flex-wrap">
      <div class="w-full lg:w-3/4 rounded shadow-lg overflow-hidden bg-white text-gray-700 mb-6 lg:mt-0">
         <div class="flex flex-wrap border-b border-bg-gray-300 mx-6 py-4 mb-6">
            <h2 class="pr-4 text-gray-700 font-medium">Website</h2>
         </div>
         <div class="pb-4 pt-0 pl-0 pr-0">
            <div class="flex flex-wrap">
               <div class="w-full md:w-1/2 px-6 mb-4">
                  <label class="block text-sm font-medium text-gray-600 mb-2" for="title">
                  Title
                  </label>
                  <input class="appearance-none block w-full  text-gray-500 rounded-sm py-2 px-3 leading-tight focus:outline-none focus:bg-white border border-gray-400 focus:border-gray-500" type="text" placeholder="Please fill in your Title" id="title">
               </div>
               <div class="w-full md:w-1/2 px-6 mb-4">
                  <label class="block text-sm font-medium text-gray-600 mb-2" for="keywords">
                  Keywords
                  </label>
                  <input class="appearance-none block w-full text-gray-500 rounded-sm py-2 px-3 leading-tight focus:outline-none focus:bg-white border border-gray-400 focus:border-gray-500" type="text" placeholder="Please fill in your Keywords" id="keywords">
               </div>
            </div>
            <div class="px-6 mb-4">
               <label class="block text-sm font-medium text-gray-600 mb-2" for="description">
               Description
               </label>
               <input class="appearance-none block w-full text-gray-500 rounded-sm py-2 px-3 leading-tight focus:outline-none focus:bg-white border border-gray-400 focus:border-gray-500" type="text" placeholder="Please fill in your Description" id="description">
            </div>
         </div>
         <div class="flex flex-wrap border-b border-bg-gray-300 mx-6 py-4 mb-6">
            <h2 class="pr-4 text-gray-700 font-medium">Miscellaneous</h2>
         </div>
         <div class="flex flex-wrap">
            <div class="w-full px-6 mb-4">
               <label class="block text-sm font-medium text-gray-600 mb-2" for="client-max">
               Client Max. No. of Items/Page
               </label>
               <input class="appearance-none block w-full  text-gray-500 rounded-sm py-2 px-3 leading-tight focus:outline-none focus:bg-white border border-gray-400 focus:border-gray-500" type="text" placeholder="Enter items/page" id="client-max">
            </div>
            <div class="w-full px-6 mb-4">
               <label class="block text-sm font-medium text-gray-600 mb-2" for="enable_quick_pagination">
               Quick Pagination
               </label>
               <div class="relative">
                  <select class="form-select w-full rounded-sm appearance-none text-gray-500 border border-gray-400 px-6 pr-6 h-10 focus:outline-none focus:bg-white focus:border-gray-500" id="enable_quick_pagination">
                     <option selected="selected">
                        Disable Quick Pagination
                     </option>
                     <option selected="selected">
                        Enable Quick Pagination
                     </option>
                  </select>
               </div>
            </div>
            <div class="bg-gray-100 w-full p-3 text-right">
               <button class="text-sm font-medium text-white bg-gray-500 hover:bg-gray-600 rounded py-2 px-8 text-center uppercase">
               Save
               </button>
            </div>
         </div>
      </div>
      <div class="w-full lg:w-1/4">
         <div class="px-3 pb-2 mt-4 lg:mt-0 lg:ml-6 mb-6">
            <ul class="list-reset mb-4">
               <li>
                  <a href="#" class="shadow rounded bg-white px-2 py-2 block text-gray-900 text-sm font-medium">
                  General
                  </a>
               </li>
               <li>
                  <a href="#" class="px-2 py-2 block hover:text-gray-900 text-gray-600 text-sm font-medium">
                  Logging
                  </a>
               </li>
               <li>
                  <a href="#" class="px-2 py-2 block hover:text-gray-900 text-gray-600 text-sm font-medium">
                  API Integrations
                  </a>
               </li>
               <li>
                  <a href="#" class="px-2 py-2 block hover:text-gray-900 text-gray-600 text-sm font-medium">
                  Redirects
                  </a>
               </li>
               <li>
                  <a href="#" class="px-2 py-2 block hover:text-gray-900 text-gray-600 text-sm font-medium">
                  SEO
                  </a>
               </li>
               <li>
                  <a href="#" class="px-2 py-2 block hover:text-gray-900 text-gray-600 text-sm font-medium">
                  Contact Information 
                  </a>
               </li>
               <li>
                  <a href="#" class="px-2 py-2 block hover:text-gray-900 text-gray-600 text-sm font-medium">
                  Email Credentials
                  </a>
               </li>
               <li>
                  <a href="#" class="px-2 py-2 block hover:text-gray-900 text-gray-600 text-sm font-medium">
                  Email Marketing
                  </a>
               </li>
               <li>
                  <a href="#" class="px-2 py-2 block hover:text-gray-900 text-gray-600 text-sm font-medium">
                  Google Analytics
                  </a>
               </li>
               <li>
                  <a href="#" class="px-2 py-2 block hover:text-gray-900 text-gray-600 text-sm font-medium">
                  Marketing Referrals
                  </a>
               </li>
               <li>
                  <a href="#" class="px-2 py-2 block hover:text-gray-900 text-gray-600 text-sm font-medium">
                  Maintenance Mode
                  </a>
               </li>
               <li>
                  <a href="#" class="px-2 py-2 block hover:text-gray-900 text-gray-600 text-sm font-medium">
                  Cart
                  </a>
               </li>
               <li>
                  <a href="#" class="px-2 py-2 block hover:text-gray-900 text-gray-600 text-sm font-medium">
                  Store Locator
                  </a>
               </li>
            </ul>
         </div>
      </div>
   </div>
</x-app>