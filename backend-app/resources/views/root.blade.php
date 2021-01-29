<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="position-absolute top-50 start-50 translate-middle">
        <div class="row g-3">
            <div class="col">
                <div class="card h-100 text-center">
                    <div class="card-body">
                        <p class="card-text">Базы, связи, импорт, экспорт, загрузка файлов</p>
                        <a href="/home" class="btn btn-outline-primary">Первые пробы</a>
                    </div>
                </div>
            </div>
            <div class="col" >
                <div class="card h-100 text-center">
                    <div class="card-body">
                        <p class="card-text">Одностраничный сайт несуществующей компании</p>
                        <a href="/landing" class="btn btn-outline-primary">Лендинг</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 text-center">
                    <div class="card-body">
                        <p class="card-text text-center">Создай свой космос!</p>
                        <a href="/cabinet" class="btn btn-outline-primary">Личный кабинет</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>