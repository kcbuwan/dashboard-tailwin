<div {{ $attributes->merge(['class' => "mb-6 px-4 py-3 border rounded relative {$getStyles()}"]) }} role="alert">

    {{ $slot }}

</div>