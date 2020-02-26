@extends('layout')

{{-- 麵包屑 --}}
@section('breadcrumbs')
    @parent
    氣象報導 > 今日天氣
@endsection

{{-- 連動標題與 <title> --}}
@section('title')
    天氣晴朗，晚間氣溫下探
@endsection

{{-- 文章內容 --}}
@section('content')
    @foreach(range(0, 20) as $item)
        這裡是很多文字 {{$item}}
    @endforeach
@endsection

{{-- @push() 可以不斷堆疊而不會被覆蓋 --}}
@push('li')
    <li>cary</li>
@endpush

@push('li')
    <li>fdjkgh580@gmail.com</li>
@endpush


