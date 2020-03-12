@foreach ($items as $item)
  <div class="iw_blog-item-card">
    <div class="iw_blog-item-card__image" style='background-image: url({{$item['imgSrc']}})'></div>
    <div class="iw_blog-item-card__con">
      <div class="iw_blog-item-card__title">
        {{$item['title']}}
      </div>
      <div class="iw_blog-item-card__tag">
        @foreach ($item['tags'] as $item['tag'])
          <span>{{$item['tag']}}</span>
        @endforeach
      </div>
    </div>
  </div>
@endforeach