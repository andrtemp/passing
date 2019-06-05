<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">

</head>
<body>

<div class="menu-bar">
    <div class="links">
        <ul class="menu-items">
            <li class="menu-item">
                <a href="/">Главная</a>
            </li>
            <li class="menu-item">
                <a href="/guests">Посетители</a>
            </li>
            <li class="menu-item">
                <a href="/guest/new">Добавить посетителя</a>
            </li>
        </ul>
    </div>
</div>
<div class="flex-center position-ref full-height">
    <div class="content">
        @yield('content')
    </div>
</div>
</body>
</html>
