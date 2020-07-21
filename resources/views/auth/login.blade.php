<x-base>
    <div class="flex flex-col md:flex-row h-full items-center">
        <div class="bg-white w-full md:max-w-md lg:max-w-full md:mx-auto md:mx-0 md:w-1/2 xl:w-1/2 h-screen px-6 lg:px-40 xl:px-30 flex items-center justify-center">
            <div class="w-full h-100">
                <h1 class="text-xl md:text-3xl font-bold leading-tight pb-6">Log in.</h1>
                <form class="w-full" method="POST" action="{{ route('login') }}">
                    @csrf

                    <x-form.text type="text" name="email" label="Your Email" placeholder="Your Email" reauired autofocus autocompletets="email" />
                    <x-form.text type="password" name="password" label="Password" placeholder="Password" reauired  />
                    
                    <div class="flex flex-wrap items-center mb-6">
                        <input type="checkbox" name="remember" class="form-checkbox h-4 w-4 border border-gray-400" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="text-gray-500 hover:text-gray-700 text-md ml-3" for="remember">
                            {{ __('Keep me logged in') }}
                        </label>
                        @if (Route::has('password.request'))
                            <a class="text-gray-500 hover:text-gray-700 text-md underline whitespace-no-wrap ml-auto" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                    </div>
                    <div class="mb-6">
                        <button type="submit" class="w-full bg-teal-500 hover:bg-teal-600 text-gray-100 font-medium text-lg py-3 px-3 rounded focus:outline-none">
                            {{ __('Log in') }}
                        </button>
                    </div>
                    @if (Route::has('register'))
                        <p class="w-full text-center text-gray-500 text-md">
                            {{ __("Don't have an account?") }}
                            <a class="text-blue-500 hover:text-blue-700 no-underline" href="{{ route('register') }}">
                                {{ __('Sign up') }}
                            </a>
                        </p>
                    @endif
                </form>
            </div>
        </div>
        <div class="bg-blue-200 hidden lg:block w-full md:w-1/2 xl:w-1/2 h-screen">
            <div class="w-full h-full w-full flex">
                <img class="self-center items-center object-none object-center w-full " src="http://fdw.conceptdev.biz/media/46/1593495707.login.png" alt="" />
            </div>
        </div>
    </div>
</x-base>