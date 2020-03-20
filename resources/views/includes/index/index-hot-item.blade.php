@foreach($items as $item)
  <div class='iw_hot-item-card' data-hash='zero'>
    <div class='iw_hot-item-card__header'>
      <span class='iw_hot-item-card__tag'>{{$item['tag']}}</span>
    </div>

    <div class='iw_hot-item-card__con'>
      <div class='iw_hot-item-card__title'>{{$item['jobTitle']}}</div>
      <div class='iw_hot-item-card__company'>{{$item['company']}}</div>
    </div>
    
    <div class='iw_hot-item-card__footer'>
      <div class='iw_hot-item-card__info'>
        <div class='fz-t3'>評價</div>
        <div class="iw_hot-item-card__info-detail">
          @switch($item['rate'])
            @case(1)
              <img class="svg iw_active" src='/images/icons/fire.svg' alt='star' />
              <img class="svg" src='/images/icons/fire.svg' alt='star' />
              <img class="svg" src='/images/icons/fire.svg' alt='star' />
              <img class="svg" src='/images/icons/fire.svg' alt='star' />
              <img class="svg" src='/images/icons/fire.svg' alt='star' />
              @break
            @case(2)
              <img class="svg iw_active" src='/images/icons/fire.svg' alt='star' />
              <img class="svg iw_active" src='/images/icons/fire.svg' alt='star' />
              <img class="svg" src='/images/icons/fire.svg' alt='star' />
              <img class="svg" src='/images/icons/fire.svg' alt='star' />
              <img class="svg" src='/images/icons/fire.svg' alt='star' />
              @break
            @case(3)
              <img class="svg iw_active" src='/images/icons/fire.svg' alt='star' />
              <img class="svg iw_active" src='/images/icons/fire.svg' alt='star' />
              <img class="svg iw_active" src='/images/icons/fire.svg' alt='star' />
              <img class="svg" src='/images/icons/fire.svg' alt='star' />
              <img class="svg" src='/images/icons/fire.svg' alt='star' />
              @break
            @case(4)
              <img class="svg iw_active" src='/images/icons/fire.svg' alt='star' />
              <img class="svg iw_active" src='/images/icons/fire.svg' alt='star' />
              <img class="svg iw_active" src='/images/icons/fire.svg' alt='star' />
              <img class="svg iw_active" src='/images/icons/fire.svg' alt='star' />
              <img class="svg" src='/images/icons/fire.svg' alt='star' />
              @break
            @case(5)
              <img class="svg iw_active" src='/images/icons/fire.svg' alt='star' />
              <img class="svg iw_active" src='/images/icons/fire.svg' alt='star' />
              <img class="svg iw_active" src='/images/icons/fire.svg' alt='star' />
              <img class="svg iw_active" src='/images/icons/fire.svg' alt='star' />
              <img class="svg iw_active" src='/images/icons/fire.svg' alt='star' />
              @break
            @default
              <img class="svg" src='/images/icons/fire.svg' alt='star' />
              <img class="svg" src='/images/icons/fire.svg' alt='star' />
              <img class="svg" src='/images/icons/fire.svg' alt='star' />
              <img class="svg" src='/images/icons/fire.svg' alt='star' />
              <img class="svg" src='/images/icons/fire.svg' alt='star' />
          @endswitch
        </div>
      </div>

      <div class='iw_hot-item-card__info'>
        <div class='fz-t3'>難度</div>

        @if($item['intro'] === '超高難度')
          <div class="iw_hot-item-card__info-detail iw_danger">
            {{$item['intro']}}
          </div>
        @elseif($item['intro'] === '高難度')
          <div class="iw_hot-item-card__info-detail iw_danger">
            {{$item['intro']}}
          </div>
        @else
          <div class="iw_hot-item-card__info-detail">
            {{$item['intro']}}
          </div>
        @endif
      </div>

    </div>
  </div>
@endforeach


