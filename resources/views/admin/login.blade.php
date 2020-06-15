@extends('layouts.blank-full') 

@section('content')
    <div class="mx-auto">
        <div class="min-h-screen flex items-center justify-center">
            <div class="w-full bg-gray-50 py-12 px-4 sm:px-6 lg:px-8">
                <div class="mb-4">
                    <img class="mx-auto" src="http://fdw.conceptdev.biz/assets/admin/images/login-logo.png" alt="Workflow" />
                    <h2 class="text-center text-2xl leading-9 font-bold text-gray-700">
                        Sign in to your account
                    </h2>
                </div>
                <div class="bg-white shadow-lg p-8 rounded">
                    <form class="mb-0" action="#" method="POST">
                        <input type="hidden" name="remember" value="true" />
                        
                            <div class="mb-4">
                                <input aria-label="Email address" name="email" type="email" required class="appearance-none relative block w-full px-3 py-3 border border-gray-300 placeholder-gray-500 text-gray-600 focus:outline-none focus:shadow-outline-blue focus:border-gray-500 focus:z-12 rounded" placeholder="Email address" />
                            </div>
                            <div class="mb-4">
                                <input aria-label="Password" name="password" type="password" required class="appearance-none relative block w-full px-3 py-3 border border-gray-300 placeholder-gray-500 text-gray-600 focus:outline-none focus:shadow-outline-blue focus:border-gray-500 focus:z-12 rounded" placeholder="Password" />
                            </div>
                        
                        <div class="mt-6 flex items-center justify-between">
                            <div class="flex items-center mr-8">
                                <input id="remember_me" type="checkbox" class="form-checkbox h-4 w-4 text-gray-600 transition duration-150 ease-in-out">
                                <label for="remember_me" class="ml-2 block leading-5 text-gray-800 hover:text-gray-800">
                                    Remember me
                                </label>
                            </div>
                            <div class="text-sm leading-5 pl-4">
                                <a href="#" class="font-medium text-blue-400 hover:text-blue-600 focus:outline-none focus:underline transition ease-in-out duration-150">
                                    Forgot your password?
                                </a>
                            </div>
                        </div>
                        <div class="mt-6">
                            <button type="submit" class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-gray-600 hover:bg-gray-700 focus:outline-none focus:border-gray-600 focus:shadow-outline-gray 6ctive:bg-gray-600 transition duration-150 ease-in-out rounded">
                                Sign in
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection