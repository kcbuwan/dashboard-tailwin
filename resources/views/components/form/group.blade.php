<div class="flex flex-wrap mb-6">

    @if (isset($label))
        <label for="{{ $name }}" class="block text-gray-700 font-medium mb-2">
            {{ __($label) }}
        </label>
    @endif

    {{ $slot }}

    <x-form.error :name="$name" />
    
</div>