<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

    <div class="min-h-screen bg-light-primary dark:bg-dark-primary">
            @include('layouts.navigation')

                <header class="bg-white dark:bg-dark-third shadow">
                    <div class="max-w-7xl mx-auto py-4 px-4 sm:px-6 lg:px-8">
                    <h2 class="font-semibold text-xl text-light-third dark:text-gray-200 leading-tight">
                    @yield('title')
                    </h2>
                    </div>
                </header>

                <section>
                <div class="py-10 px-10">
                    <div class="max-w-7xl mx-auto space-y-6">
                        <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                            <div class="max-w-xl">
                                <div class="mb-4">
                                    <h2 class="font-semibold text-xl text-gray-800">
                                            @yield('msg')
                                    </h2>
                                </div>
                            @yield('content')
                            </div>
                        </div>
                    </div>
                </div>
                </section>

    </div>

</body>
</html>