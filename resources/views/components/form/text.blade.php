<x-form.group :name="$name" :label="$label">

    <input id="{{ $name}}"
     type="{{ isset($type) ? $type : 'text' }}" 
     class="border border-gray-400 bg-white rounded w-full py-3 px-3 text-gray-700 leading-tight focus:border-gray-500 focus:bg-white focus:outline-none @error('email') border-red-500 @enderror"
     name="{{ $name }}"
     placeholder="{{ isset($placeholder) ? $placeholder : '' }}"
     value="{{ old($name) ?: (isset($object) ? $object->{$name} : '') }}"
    {{ isset($attributes) ? $attributes : '' }}>

</x-form.group>
