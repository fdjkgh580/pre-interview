<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Example | @yield('title')</title>
    <script src="{{ mix('js/example.js') }}"></script>
    <link rel="stylesheet" href="{{ mix('css/example.css') }}">
</head>
<body>
<div>
    @section('breadcrumbs')
        文章 >
    @show
</div>
<hr>
<h1>@yield('title')</h1>

@component('alert')
    @slot('type')
        提醒
    @endslot
    @slot('message')
        請記得帶傘
    @endslot
@endcomponent

<article>
    <p>@yield('content')</p>
</article>

<hr>
<footer>
    <ul>
        @stack('li')
    </ul>
</footer>
</body>
</html>
