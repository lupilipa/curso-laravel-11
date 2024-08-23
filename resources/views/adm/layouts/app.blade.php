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
<body class="bg-gray-100 dark:bg-gray-900">

    <div class="min-h-screen bg-light-primary dark:bg-dark-third">
            @include('layouts.navigation')

                <header class="bg-white dark:bg-dark-primary shadow">
                    <div class="max-w-7xl mx-auto py-4 px-4 sm:px-6 lg:px-8">
                    <h2 class="font-semibold text-xl text-light-third dark:text-white leading-tight">
                    @yield('title')
                    </h2>
                    </div>
                </header>

            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
		    @yield('content')
            </div>
    </div>

</body>
</html>