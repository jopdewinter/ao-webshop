<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <title>{{config('app.name', 'ao-webshop')}}</title>
    </head>
    <body>
        <button onclick="location.href = '/'">home</button>
        <button onclick="location.href = '/products'">products</button>
        <button onclick="location.href = '/categories'">categories</button>
        <button onclick="location.href = '/about'">about</button>
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>