@foreach($items as $item)
    <a style="
        background: #626262;
        font-size: 0.83em;
        padding: 0.2em 1em;
        display: inline-block;
        text-decoration: none;
        color: white;
    " href="javascript:;">#{{$item}}</a>
@endforeach
