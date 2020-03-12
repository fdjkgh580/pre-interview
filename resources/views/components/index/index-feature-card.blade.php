@foreach($items as $item)
  <div class='iw_feature-card'>
    <img class='svg' src='{{$item['img']}}' alt='{{$item['title']}}'>
    <h3 class='fz-h6'>{{$item['title']}}</h3>
    <p class='iw_feature-intro'>
      @foreach ($item['intros'] as $item['intro'])
        <span>{{$item['intro']}}</span>
      @endforeach
    </p>
    <a class='iw_feature-link'>
      {{$item['link']}}
      <img class="svg" src='/images/icons/arrow-right.svg' alt='arrow-right' />
    </a>
  </div>
@endforeach