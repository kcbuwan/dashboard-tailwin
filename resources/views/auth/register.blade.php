<x-layouts.base>
    <div class="flex flex-col md:flex-row h-full items-center">
        <div class="bg-white w-full md:max-w-md lg:max-w-full md:mx-auto md:mx-0 md:w-1/2 xl:w-1/2 h-screen px-6 lg:px-48 xl:px-48 flex items-center justify-center">
            <div class="w-full h-100">
                
                <h1 class="text-xl md:text-3xl font-bold leading-tight pb-6"> {{ __('Register') }}</h1>
                
                <form class="w-full" method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="flex flex-wrap mb-6">
                        <label for="name" class="block text-gray-700 font-medium mb-2">
                            {{ __('Name') }}
                        </label>

                        <input id="name" type="text" class="border border-gray-400 bg-white rounded w-full py-3 px-3 text-gray-700 leading-tight focus:border-gray-500 focus:bg-white focus:outline-none @error('name')  border-red-500 @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                            <p class="text-red-500 text-xs italic mt-4">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <div class="flex flex-wrap mb-6">
                        <label for="email" class="block text-gray-700 font-medium mb-2">
                            {{ __('E-Mail Address') }}
                        </label>

                        <input id="email" type="email" class="border border-gray-400 bg-white rounded w-full py-3 px-3 text-gray-700 leading-tight focus:border-gray-500 focus:bg-white focus:outline-none @error('email') border-red-500 @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                            <p class="text-red-500 text-xs italic mt-4">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <div class="flex flex-wrap mb-6">
                        <label for="password" class="block text-gray-700 font-medium mb-2">
                            {{ __('Password') }}
                        </label>

                        <input id="password" type="password" class="border border-gray-400 bg-white rounded w-full py-3 px-3 text-gray-700 leading-tight focus:border-gray-500 focus:bg-white focus:outline-none @error('password') border-red-500 @enderror" name="password" required autocomplete="new-password">

                        @error('password')
                            <p class="text-red-500 text-xs italic mt-4">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <div class="flex flex-wrap mb-6">
                        <label for="password-confirm" class="block text-gray-700 font-medium mb-2">
                            {{ __('Confirm Password') }}
                        </label>

                        <input id="password-confirm" type="password" class="border border-gray-400 bg-white rounded w-full py-3 px-3 text-gray-700 leading-tight focus:border-gray-500 focus:bg-white focus:outline-none" name="password_confirmation" required autocomplete="new-password">
                    </div>

                    <div class="w-full mb-6">
                        <button type="submit" class="w-full bg-teal-500 hover:bg-teal-600 text-gray-100 font-medium text-lg py-3 px-3 rounded focus:outline-none">
                            {{ __('Register') }}
                        </button>
                    </div>
                    <p class="w-full text-center text-gray-500 text-lg">
                        {{ __('Already have an account?') }}
                        <a class="text-blue-500 hover:text-blue-700 no-underline" href="{{ route('login') }}">
                            {{ __('Login') }}
                        </a>
                    </p>
                </form>
                
            </div>
        </div>
        <div class="bg-blue-200 hidden lg:block w-full md:w-1/2 xl:w-1/2 h-screen">
            <div class="w-full h-full w-full flex">
                <img class="self-center items-center object-none object-center w-full " src="http://fdw.conceptdev.biz/media/46/1593495707.login.png" alt="" />
            </div>
        </div>
    </div>
</x-layouts.base>
