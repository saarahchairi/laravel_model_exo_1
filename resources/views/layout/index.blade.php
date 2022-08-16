<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>laravel model exo 1</title>
    @vite('resources/css/app.css')
</head>
<body>
    <header>
        @include("partial.header")
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        @include("partial.footer")
    </footer>
</body>
</html>
