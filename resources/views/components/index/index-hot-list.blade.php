@foreach ($items as $item)
  <li>
    <a class='iw_hotlist__link' href="javascript:;" title="{{$item['name']}}">
      <span class='iw_hotlist__link-name'>{{$item['name']}}</span>
      <span class='iw_hotlist__link-count'>{{$item['count']}}</span>
    </a>
  </li>
@endforeach