@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-sm text-pink-700 dark:text-pink-300']) }}>
    {{ $value ?? $slot }}
</label>
