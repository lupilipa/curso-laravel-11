<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Especializa TI</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <header>header default2</header>
    @yield('content')
    <footer>footer2</footer>
</body>
</html>