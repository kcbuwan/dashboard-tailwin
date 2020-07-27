<div class="flex flex-wrap mb-6">

    <div class="w-full md:w-2/6 pr-6">
        @if (isset($label))
            <label for="{{ $name }}" class="block text-gray-700 font-medium mb-2">
                {{ __($label) }}
            </label>
        @endif
    </div>

    <div  div class="w-full md:w-4/6">
        {{ $slot }}
        <x-form.error :name="$name" />
    </div>
    
</div>