@extends('layouts.blank-full') 

@section('content')
    <section class="absolute w-full h-full bg-gray-800">
        <div class="container mx-auto px-4 h-full">
            <div class="flex content-center items-center justify-center h-full">
                <div class="w-full lg:w-4/12 px-4">
                <div class="mb-4">
                            <img class="mx-auto" src="http://fdw.conceptdev.biz/assets/admin/images/login-logo.png" alt="Workflow">
                            <div class="text-center mt-3 mb-3">
                                <h4 class="text-white text-lg font-bold uppercase mb-4">
                                    Element 7 Digital
                                </h4>
                            </div>
                        </div>
                    <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow rounded bg-white">
                        <div class="flex-auto px-6 lg:px-6 py-6">
                            <form>
                                    <div class="relative w-full mb-3">
                                        <label class="block uppercase text-gray-700 text-xs font-bold mb-2" for="grid-password">Email</label>
                                        <input type="email" class="px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none w-full border border-gray-400" placeholder="Email">
                                    </div>
                                    <div class="relative w-full mb-3">
                                        <label class="block uppercase text-gray-700 text-xs font-bold mb-2" for="grid-password">Password</label>
                                        <input type="password" class="px-3 py-3 placeholder-gray-100 text-gray-700 bg-white rounded text-sm shadow focus:outline-none w-full border border-gray-400" placeholder="Password">
                                    </div>
                                    <div class="mt-6 flex items-center justify-between">
                                        <div class="flex items-center mr-8">
                                            <label class="inline-flex items-center cursor-pointer">
                                                <input id="customCheckLogin" type="checkbox" class="form-checkbox text-gray-800 ml-1 w-4 h-4 rounded border border-gray-500">
                                                <span class="text-xs ml-2 text-xs font-semibold text-gray-700">Remember me</span>
                                            </label>
                                        </div>
                                        <div class="text-sm leading-5 pl-4">
                                            <a href="#" class="text-xs font-medium text-indigo-600 hover:text-blue-600 focus:outline-none focus:underline transition ease-in-out duration-150">
                                                Forgot your password?
                                            </a>
                                        </div>
                                    </div>
                                    <div class="text-center mt-6">
                                        <button class="bg-gray-700 hover:bg-gray-800 text-white text-sm font-bold uppercase px-6 py-3 rounded shadow outline-none focus:outline-none w-full" type="button">
                                            Sign In
                                        </button>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection