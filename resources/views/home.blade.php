<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel-Model-Controller</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- style -->
    @vite('resources/js/app.js')

</head>

<body class="antialiased">

    <header>
        @include('layout.header')
    </header>

    
    <h2>Ciao</h2>

    <main>
        @include('layout.main')
    </main>
</body>

</html>