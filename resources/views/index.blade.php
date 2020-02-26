@extends('layout')

@section('breadcrumbs')
    @parent
    氣象報導 > 今日天氣
@endsection

@section('title')
    天氣晴朗，晚間氣溫下探
@endsection

@section('content')
    @foreach(range(0, 20) as $item)
        這裡是很多文字
    @endforeach
@endsection

@push('li')
    <li>cary</li>
@endpush

@push('li')
    <li>fdjkgh580@gmail.com</li>
@endpush


