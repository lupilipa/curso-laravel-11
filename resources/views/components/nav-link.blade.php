@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-1 pt-1 border-b-2 border-light-purple-dark dark:border-white text-sm font-medium leading-5 text-white dark:text-white focus:outline-none focus:border-light-primary transition duration-150 ease-in-out'
            : 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-light-purple-dark dark:text-dark-third hover:text-light-primary  hover:border-light-primary focus:outline-none focus:text-light-purple-dark dark:focus:text-dark-third focus:border-light-primary transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
