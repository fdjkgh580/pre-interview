{{-- 代表這份文件繼承 layout.blade.php --}}
@extends('layout')

{{-- 麵包屑 --}}
@section('breadcrumbs')
    {{-- 這裡有 ＠parent 代表會把以下文字，放到目標 “文章 >”之後 --}}
    @parent
    氣象報導 > 今日天氣
@endsection

{{-- 這段文字會放到連動 <h1> 與 <title> --}}
@section('title')
    天氣晴朗，晚間氣溫下探
@endsection

{{-- 每頁會有同的文章內容 --}}
@section('content')

    {{-- 出現黃色的提醒 (組件與插槽：同樣文字不同樣貌) --}}
    @component('alert-warning')
        @slot('message')
            請記得帶傘 (組件示範)
        @endslot
    @endcomponent

    {{-- 或出現紅色的提醒 (組件與插槽：同樣文字不同樣貌) --}}
    @component('alert-danger')
        @slot('message')
            請記得帶傘 (組件示範)
        @endslot
    @endcomponent

    <img src="{{ asset('images/logo-light.svg') }}" alt="">
    <p>
        {{-- 循環 20 次 --}}
        @foreach(range(1, 20) as $item)
            假裝這裡有很多文字 {{$item}}
        @endforeach
    </p>

    {{-- 可以引用 tags.blade.php 模板 (不同文字同樣樣貌)--}}
    <div>
        @include('tags', [
            'items' => ['咖啡', '美食', '高雄景點']
        ])
    </div>
@endsection

{{-- 與 ＠section 不同，＠push 可以向目標不斷堆疊，不會重複覆蓋。
當不同的元件分散在不同的 blade，有可能會使用不同的 JavaScript / Styles，
這時候透過推送到堆疊的方法就變得很有用 --}}
@push('scripts')
    <script src="{{ mix('js/example.js') }}"></script>
@endpush

@push('styles')
    <link rel="stylesheet" href="{{ mix('css/example.css') }}">
@endpush
