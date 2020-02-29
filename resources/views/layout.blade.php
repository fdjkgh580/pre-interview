<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Example | @yield('title')</title>

    {{-- 這是各個版面用來堆疊 CSS 與 JS 的位置 --}}
    @stack('styles')
    @stack('scripts')
</head>
<body>

{{-- 定義麵包屑的位置 --}}
<div>
    @section('breadcrumbs')
        文章 > {{-- 注意，這個位置由各個版面自行決定顯示什麼 --}}
    @show
</div>
<hr>

<article>
    {{-- 定義文章標題放置處 --}}
    <h1>@yield('title')</h1>

    {{-- 定義文章內容放置處 --}}
    @yield('content')
</article>

<hr>
<footer>
    <ul>
        {{-- 定義這裡可以不斷被堆疊 --}}
        @stack('li')
    </ul>
</footer>
</body>
</html>
