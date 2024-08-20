<button {{ $attributes->merge(['type' => 'button', 'class' => 'inline-flex items-center px-3 py-2 mt-4 border border-transparent text-sm leading-4 font-medium rounded-md text-white dark:text-gray-400 bg-purple-900 dark:bg-gray-800 hover:text-orange-500 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
