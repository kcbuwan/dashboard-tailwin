<x-base>
    <div class="flex flex-col md:flex-row h-full items-center">
        <div class="bg-white w-full md:max-w-md lg:max-w-full md:mx-auto md:w-1/2 xl:w-1/2 h-screen px-6 lg:px-48 xl:px-48 flex items-center justify-center">
            <div class="w-full h-100">
                
                <h1 class="text-xl md:text-3xl font-bold leading-tight pb-6"> {{ __('Register') }}</h1>
                
                <form class="w-full" method="POST" action="{{ route('register') }}">
                    @csrf

                    <x-form.text type="text" name="name" label="Name" placeholder="Name" reauired autofocus autocompletets="name" />
                    <x-form.text type="text" name="email" label="E-Mail Address" placeholder="E-Mail Address" reauired autofocus autocompletets="email" />
                    <x-form.text type="password" name="assword" label="Password" placeholder="password" reauired autofocus autocompletets="password" />
                    <x-form.text type="password" name="Confirm Password" label="Confirm Password" placeholder="Confirm Password" reauired autofocus autocompletets="Confirm Password" />
                    <div class="w-full mb-6">
                        <button type="submit" class="w-full bg-teal-500 hover:bg-teal-600 text-gray-100 font-medium text-lg py-2 px-2 rounded focus:outline-none">
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
            <div class="w-full h-full flex">
                <img class="self-center items-center object-none object-center w-full " src="http://fdw.conceptdev.biz/media/46/1593495707.login.png" alt="" />
            </div>
        </div>
    </div>
</x-base>
