<button {{ $attributes->merge(['type' => 'submit', 'class' => '
    inline-flex items-center px-4 py-2 
    bg-light-orange 
    dark:bg-dark-orange 
    border border-transparent rounded-md 
    font-semibold text-xs 
    text-white 
    dark:text-dark-purple-dark 
    uppercase tracking-widest 
    hover:bg-white hover:text-light-purple-dark dark:hover:text-dark-purple-dark 
    active:bg-light-primary
    active:text-light-purple dark:active:text-dark-purple
    transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
