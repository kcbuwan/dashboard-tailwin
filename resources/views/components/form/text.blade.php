<x-form.group :name="$name" :label="$label">

    <input id="{{ $name}}"
        type="{{ isset($type) ? $type : 'text' }}" 
        class="form-input w-full @error('email') border-red-500 @enderror"
        name="{{ $name }}"
        placeholder="{{ isset($placeholder) ? $placeholder : '' }}"
        value="{{ old($name) ?: (isset($object) ? $object->{$name} : '') }}"
        {{ isset($attributes) ? $attributes : '' }}>
        
</x-form.group>
