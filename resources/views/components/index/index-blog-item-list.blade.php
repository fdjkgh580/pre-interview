@foreach ($items as $item)
  <div class="iw_blog-item-list">
    <a class="iw_blog-item-list__link">
      <img class="svg" src='/images/icons/article.svg' alt='article icon' />
      <span>{{$item}}</span>
      {{-- .iw_gomore --}}
    </a>
    {{-- @if ($loop->last)
      <a class="iw_blog-item-list__link">
        <img class="svg" src='/images/icons/article.svg' alt='more article icon' />
        <span>更多文章</span>
      </a>
    @endif --}}
  </div>
@endforeach


{{-- more_horiz --}}