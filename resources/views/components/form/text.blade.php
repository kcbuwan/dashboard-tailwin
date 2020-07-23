<x-form.group :name="$name" :label="$label">

    <input id="{{ $name}}"
        type="{{ isset($type) ? $type : 'text' }}" 
        class="form-input w-full py-3 px-3 text-gray-700 border-gray-300 bg-grey-lighter border-2 rounded w-full py-2 px-4 text-grey-darker leading-tight @error('email') border-red-500 @enderror"
        name="{{ $name }}"
        placeholder="{{ isset($placeholder) ? $placeholder : '' }}"
        value="{{ old($name) ?: (isset($object) ? $object->{$name} : '') }}"
        {{ isset($attributes) ? $attributes : '' }}>
        
</x-form.group>
