<x-base>
    <div class="flex flex-col md:flex-row h-full items-center">
        <div class="bg-white w-full md:max-w-md lg:max-w-full md:mx-aut md:w-1/2 xl:w-1/2 h-screen px-6 lg:px-48 xl:px-48 flex items-center justify-center">
            <div class="w-full h-100">

                @if (session('status'))
                    <div class="text-sm border border-t-8 rounded text-green-700 border-green-600 bg-green-100 px-3 py-4 mb-4" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                <div class="text-xl md:text-3xl font-bold leading-tight pb-6">
                    {{ __('Reset Password') }}
                </div>

                <form class="w-full" method="POST" action="{{ route('password.email') }}">
                    @csrf

                    <div class="flex flex-wrap mb-6">
                        <label for="email" class="block text-gray-700 font-medium mb-2">
                            {{ __('E-Mail Address') }}
                        </label>

                        <input id="email" type="email" class="form-input w-full @error('email') border-red-500 @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <p class="text-red-500 text-xs italic mt-4">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <p class="w-full text-center text-lg">
                        <a class="w-full block bg-teal-500 hover:bg-teal-600 text-gray-100 font-medium text-lg py-2 px-2 rounded focus:outline-none focus:shadow-outline" href="{{ route('login') }}">
                            {{ __('Back to login') }}
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
