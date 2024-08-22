@props(['disabled' => false])

<!-- aq vc muda a caixa de texto -->
<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => '
    px-3 py-2 
    bg-light-purple-light
    dark:bg-dark-purple-dark
    border-purple-300
    dark:border-gray-700
    text:dark-primary
    dark:text-light-primary
    focus:border-indigo-500 
    dark:focus:border-indigo-600 
    focus:ring-indigo-500 
    dark:focus:ring-indigo-600 
    rounded-md shadow-sm
']) !!}>
