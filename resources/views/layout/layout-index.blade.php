<!DOCTYPE html>
<html lang="zh-TW">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, , user-scalable=0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	{{-- 取消行動版 safari 自動偵測數字成電話號碼 --}} 
	<meta name="format-detection" content="telephone=no">

	<title>@yield('title')</title>

	{{-- 這是各個版面用來堆疊 CSS 與 JS 的位置 --}}
	@stack('styles')
	

</head>
<body>

	

	@yield('content')

	@include('layout.footer')

	<script src="http://code.jquery.com/jquery-3.4.1.js"></script>

	@stack('scripts')
</body>
</html>