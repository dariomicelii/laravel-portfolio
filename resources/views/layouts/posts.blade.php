<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/sass/app.scss', "resources/js/app.js"])
    <title>@yield('title')</title>
    
</head>
<body>
    <div class="container">
        <h1>
            @yield('title')
        </h1>

        @yield('content')
    </div>
    
</body>
</html>