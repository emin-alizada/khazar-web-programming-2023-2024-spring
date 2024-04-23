<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
<header>
    <h1>Khazar Uni</h1>
    <a href="{{ route('about') }}"> about </a>
    <a href="{{ route('categories') }}">categories</a>
</header>

<main>
    @yield('content')
</main>


<footer>© 2024 Baku. Made by Khazar Studios.</footer>
</body>
</html>
