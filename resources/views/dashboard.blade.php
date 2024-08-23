<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-light-third dark:text-white leading-tight">
            {{ __('Página Inicial') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-dark-primary overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    Olá, {{ Auth::user()->name }}! Bem-vindo(a). 💜
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
