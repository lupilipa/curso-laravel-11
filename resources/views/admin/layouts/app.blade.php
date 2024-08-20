<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') - Juju do pix</title>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 dark:bg-gray-900 text-gray-800">

    @include('layouts.navigation')
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 py-8 sm:py-12 ">
            @yield('content')
    </div>

</body>
</html>