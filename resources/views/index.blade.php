@extends('layout.layout-index')
@section('title', 'Index')


@push('styles')
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
  <link rel='stylesheet' href='{{ mix('css/index.css') }}' />
@endpush




@push('scripts')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"></script>
  <script src='{{ mix('js/app.js') }}'></script>
@endpush



@section('content')
  {{-- Video --}}
  <section class='iw_video-outer'>
    @include('layout.navbar')

    <div class='iw_video-inner iw_container'>
      <h1 class="fz-h1">以資訊對稱翻轉求職市場</h1>
      <p class="fz-t1">想說的話都只是一場空，如果不對稱就翻不了。</p>
    </div>
  </section>

  {{-- 站內資訊 --}}
  <section class='iw_site-status-outer'>
    <div class='iw_container iw_site-status-container'>
      <div class='iw_site-status__info'>
        <h3 class='fz-h3'>站內即時</h3>
      </div>
      <div class='iw_site-status__info'>
        <h4>
          <img class="svg" src='/images/icons/edit.svg' alt='edit' />
          全站面試心得
        </h4>
        <div class='iw_site-status__info-count'>123,456</div>
      </div>
      <div class='iw_site-status__info'>
        <h4>
          <img class="svg" src='/images/icons/thumb_up.svg' alt='thumb_up' />
          面試趣推薦心得
        </h4>
        <div class='iw_site-status__info-count'>3,456</div>
      </div>
    </div>
  </section>

  {{-- 理念 --}}
  <section class='iw_feature-outer'>
    <div class='iw_container'>
      <div class='iw_mini-title'>面試趣六大理念</div>
      <h2 class='fz-h3'>讓好人才與好公司相遇</h2>

      <div class='iw_feature-card-container'>
        @include('includes/index.index-feature-card', [
          'items'=>[
            ['img' => '/images/site-concept/site-concept_exchange.png', 'title'=>'資訊對稱', 'intros'=>['面試趣的核心在於「交換」。','只要你願意分享最有印象的面試，就能','交換他人的面試經驗，就是這麼簡單。'], 'link'=>'「面試趣」是什麼網站？'],
            ['img' => '/images/site-concept/site-concept_good-company.png', 'title'=>'信念', 'intros'=>['我們要做的，不只是揭露訊息。','我們想讓好公司能被好人才看見，','以自然法則淘汰不合格的企業。'], 'link'=>'了解我們與其他網站的不同。'],
            ['img' => '/images/site-concept/site-concept_points.png', 'title'=>'積分', 'intros'=>['「有付出就有收穫」是我們的生活共識。','積分是分享面試心得獲得的回饋，','你可以使用積分閱讀前輩分享的珍貴經驗。'], 'link'=>'積分是什麼？如何獲得？'],
            ['img' => '/images/site-concept/site-concept_safety.png', 'title'=>'安全性', 'intros'=>['為了你的言論安全，','我們設計了完善的機制，','只為了能讓你安心分享。'], 'link'=>'在面試趣分享內容安全嗎？'],
            ['img' => '/images/site-concept/site-concept_qualified.png', 'title'=>'信任', 'intros'=>['你知道嗎，這超過十萬則的分享，','是透過「人工審核」一筆又一筆上架的，','是面試趣花費許多心思、精神集結而成。'], 'link'=>'我能相信面試趣上面的內容嗎？'],
            ['img' => '/images/site-concept/site-concept_protect.png', 'title'=>'堅持', 'intros'=>['只要你說的是事實、不惡意人身攻擊，','我們就願意盡最大的努力，','來保護你所貢獻的珍貴經驗。'], 'link'=>'為了你，我們做了這些事。'],
          ]
        ])
      </div>
    </div>
  </section>


  {{-- 精選 --}}
  <section class='iw_hot-item-outer'>
    <div class='iw_container'>
      <div class='iw_mini-title'>即時更新</div>
      <div class='iw_title-header'>
        <h2 class='fz-h3'>精彩面試心得</h2>
        <div class='iw_title_header-link-wrap'>
          <button class='iw_arrow-btn hotItemPrevBtn'>
            <img class="svg" src='/images/icons/arrow-left.svg' alt='arrow-left' />
          </button>
          <button class='iw_arrow-btn hotItemNextBtn'>
            <img class="svg" src='/images/icons/arrow-right.svg' alt='arrow-right' />
          </button>
        </div>
      </div>
    </div>




    <div class='iw_for-hot-item iw_for-owl-carousel'>
      <div class="iw_hot-item-card-container owl-carousel owl-theme owl-card-item iw_label-danger" id='hotItem'>
        @include('includes/index.index-hot-item', [
          'items' => [
            ['tag' => '精選面試', 'jobTitle' => '1Java Software Design Engineer', 'company' => 'Super Micro Computer, Inc._美超微電腦股份Super Micro Computer, Inc._美超微電腦股份', 'rate' => '1', 'intro' => '超高難度'],
            ['tag' => '精選面試', 'jobTitle' => '2一般業務人員', 'company' => 'FUNDAY_智擎數位科技股份有限公司', 'rate' => '5', 'intro' => '高難度'],
            ['tag' => '精選面試', 'jobTitle' => '3家電銷售','company' => '台灣飛利浦股份有限公司', 'rate' => '3', 'intro' => '低難度'],
            ['tag' => '最新面試', 'jobTitle' => '4校園大使', 'company' => '中華電信股份有限公司', 'rate' => '2', 'intro' => '普通難度'],
            ['tag' => '最新面試', 'jobTitle' => '5一般業務人員', 'company' => '大師策略行銷股份有限公司', 'rate' => '1', 'intro' => '高難度'],
            ['tag' => '最新面試', 'jobTitle' => '6一般業務人員', 'company' => 'Super Micro Computer, Inc._美超微電腦股份...', 'rate' => '4', 'intro' => '低難度'],
            ['tag' => '精選面試', 'jobTitle' => '7Java Software Design Engineer', 'company' => 'Super Micro Computer, Inc._美超微電腦股份Super Micro Computer, Inc._美超微電腦股份', 'rate' => '1', 'intro' => '超高難度'],
            ['tag' => '精選面試', 'jobTitle' => '8一般業務人員', 'company' => 'FUNDAY_智擎數位科技股份有限公司', 'rate' => '5', 'intro' => '高難度'],
            ['tag' => '精選面試', 'jobTitle' => '9家電銷售','company' => '台灣飛利浦股份有限公司', 'rate' => '3', 'intro' => '低難度'],
            ['tag' => '最新面試', 'jobTitle' => '10校園大使', 'company' => '中華電信股份有限公司', 'rate' => '2', 'intro' => '普通難度'],
            ['tag' => '最新面試', 'jobTitle' => '11一般業務人員', 'company' => '大師策略行銷股份有限公司', 'rate' => '1', 'intro' => '高難度'],
            ['tag' => '最新面試', 'jobTitle' => '12一般業務人員', 'company' => 'Super Micro Computer, Inc._美超微電腦股份...', 'rate' => '4', 'intro' => '低難度'],
          ]
        ])
      </div>
      <div class="iw_hot-item-card-container owl-carousel owl-theme owl-card-item">
        @include('includes/index.index-hot-item', [
          'items' => [
            ['tag' => '精選面試', 'jobTitle' => '1Java Software Design Engineer', 'company' => 'Super Micro Computer, Inc._美超微電腦股份Super Micro Computer, Inc._美超微電腦股份', 'rate' => '1', 'intro' => '超高難度'],
            ['tag' => '精選面試', 'jobTitle' => '2一般業務人員', 'company' => 'FUNDAY_智擎數位科技股份有限公司', 'rate' => '5', 'intro' => '高難度'],
            ['tag' => '精選面試', 'jobTitle' => '3家電銷售','company' => '台灣飛利浦股份有限公司', 'rate' => '3', 'intro' => '低難度'],
            ['tag' => '最新面試', 'jobTitle' => '4校園大使', 'company' => '中華電信股份有限公司', 'rate' => '2', 'intro' => '普通難度'],
            ['tag' => '最新面試', 'jobTitle' => '5一般業務人員', 'company' => '大師策略行銷股份有限公司', 'rate' => '1', 'intro' => '高難度'],
            ['tag' => '最新面試', 'jobTitle' => '6一般業務人員', 'company' => 'Super Micro Computer, Inc._美超微電腦股份...', 'rate' => '4', 'intro' => '低難度'],
            ['tag' => '精選面試', 'jobTitle' => '7Java Software Design Engineer', 'company' => 'Super Micro Computer, Inc._美超微電腦股份Super Micro Computer, Inc._美超微電腦股份', 'rate' => '1', 'intro' => '超高難度'],
            ['tag' => '精選面試', 'jobTitle' => '8一般業務人員', 'company' => 'FUNDAY_智擎數位科技股份有限公司', 'rate' => '5', 'intro' => '高難度'],
            ['tag' => '精選面試', 'jobTitle' => '9家電銷售','company' => '台灣飛利浦股份有限公司', 'rate' => '3', 'intro' => '低難度'],
            ['tag' => '最新面試', 'jobTitle' => '10校園大使', 'company' => '中華電信股份有限公司', 'rate' => '2', 'intro' => '普通難度'],
            ['tag' => '最新面試', 'jobTitle' => '11一般業務人員', 'company' => '大師策略行銷股份有限公司', 'rate' => '1', 'intro' => '高難度'],
            ['tag' => '最新面試', 'jobTitle' => '12一般業務人員', 'company' => 'Super Micro Computer, Inc._美超微電腦股份...', 'rate' => '4', 'intro' => '低難度'],
          ]
        ])
      </div>
    </div>
    






    {{-- Blog --}}
    <div class='iw_container'>
      <div class='iw_mini-title'>面試趣 BLOG</div>
      <div class='iw_title-header'>
        <h2 class='fz-h3'>精選文章</h2>
        <div class='iw_title_header-link-wrap iw_for-blog'>
          {{-- <a href="javascript:;" class="iw_more-link" title="更多文章">更多文章</a> --}}
          <button class='iw_arrow-btn iw_prevBtn'>
            <img class="svg" src='/images/icons/arrow-left.svg' alt='arrow-left' />
          </button>
          <button class='iw_arrow-btn iw_nextBtn'>
            <img class="svg" src='/images/icons/arrow-right.svg' alt='arrow-right' />
          </button>
        </div>
      </div>
    </div>
    {{-- Blog: Card --}}
    <div class='iw_overflow-outer iw_for-blog'>
      <div class="iw_overflow-inner iw_blog-item-card-container">
        @include('includes/index.index-blog-item-card', [
          'items' =>[
            [
              'imgSrc' => 'https://static.interview.tw/wp-content/uploads/2020/02/interview-blog-20-0222.png',
              'title' => '【面試心得】Spotify 產品經理面試全記錄（上篇）【面試心得】Spotify 產品經理面試全記錄（上篇）',
              'tags' => ['#Spotify', '#面試心得', '#最多三個']
            ],
            [
              'imgSrc' => 'https://static.interview.tw/wp-content/uploads/2020/02/interview-blog-20-0207.png',
              'title' => '【面試心得】Spotify 產品經理面試全記錄（下篇）',
              'tags' => ['#1', '#2', '#3']
            ],
            [
              'imgSrc' => 'https://static.interview.tw/wp-content/uploads/2020/02/interview-blog-20-0222.png',
              'title' => '【面試心得】Spotify 產品經理面試全記錄',
              'tags' => ['#Spotify', '#面試心得', '#最多三個']
            ],
          ]
        ])
      </div>
    </div>
    <div class='iw_container'>
      {{-- Blog: List --}}
      <div class='iw_blog-item-list-container'>
        @include('includes/index.index-blog-item-list', [
          'items'=>['《倩女・幽魂》舞劇：在人鬼不分的年代《倩女・幽魂》舞劇：在人鬼不分的年代','一份值得收藏的文具清單｜文具控看過來','挑選木食器，除了選材還要是手工製的','Cortana 應用很快將無法在部分地區的手...','防暴警強攻中文大學兩個半小時後撤退；網...']
        ])
        {{-- <a class='iw_show-small' href='javascript:;' title='更多文章...'>更多文章...</a> --}}
      </div>
    </div>
  </section>


  {{-- School Image --}}
  <section class='iw_school-images-outer'>
    <div class='iw_mini-title'>與面試趣一同努力的校園</div>
    <div class="iw_owl-school-img-wrap">
      @include('includes/index.index-school-images-list')
    </div>
  </section>



  <section class='iw_stage-outer'>
    <div class='iw_container iw_stage-container'>
      {{-- Left --}}
      <div class='iw_company-catalog-outer'>
        <div class='iw_stage__header'>
          <h3 class='iw_mini-title'>分類找公司</h3>
        </div>
        <div class='iw_company-catalog-inner'>
          <div class='iw_industry-wrap'>
            <div class='iw_industry__title'>行業</div>
            <div class='iw_industry__content'>
              @include('includes/index.index-industry-link',[
                'items'=>[
                  '工商服務','食衣住行','休閒育樂','農林漁牧','生活百貨','製造','醫療','其他',
                ]
              ])
            </div>
          </div>
          <div class='iw_industry-wrap'>
            <div class='iw_industry__title'>地區</div>
            <div class='iw_industry__content iw_for-city'>
              @include('includes/index.index-industry-link',[
                'items'=>[
                  '台北','新北','基隆','桃園','新竹','苗栗','彰化','台中','南投','雲林','嘉義','台南','高雄','屏東','宜蘭','花蓮','台東','澎湖','金門','連江'
                ]
              ])
            </div>
          </div>
        </div>
      </div>

      {{-- Right --}}
      <div class='iw_hotlist-outer'>
        <div class='iw_stage__header'>
          <h3 class='iw_mini-title'>熱門公司</h3>
          <button class='iw_arrow-btn hotListPrevBtn'>
            <img class="svg" src='/images/icons/arrow-left.svg' alt='arrow-left' />
          </button>
          <button class='iw_arrow-btn hotListPrevBtn'>
            <img class="svg" src='/images/icons/arrow-right.svg' alt='arrow-right' />
          </button>
        </div>
        <div class='iw_hotlist-inner'>
            <div class='owl-carousel owl-theme' id='owl-hot-list'>
              {{-- 這裡會有好幾組 ul='item'，目前先示意 2 組 --}}
              <ul class='item'>
                @include('includes/index.index-hot-list', [
                  'items' => [
                    ['name'=> '1野獸國股份有限公司', 'count'=>'95則面試'],
                    ['name'=> '2野獸國股份有限公司', 'count'=>'12345則面試'],
                    ['name'=> '3abc有限公司','count'=>'45則面試'],
                    ['name'=> '4野獸國股份有限公司野獸國股份有限公司', 'count'=>'100則面試'],
                    ['name'=> '5野獸國股份有限公司', 'count'=>'5則面試']
                  ]
                ])
              </ul>
              <ul class='item'>
                @include('includes/index.index-hot-list', [
                  'items' => [
                    ['name'=> '6野獸國股份有限公司', 'count'=>'1225則面試'],
                    ['name'=> '7野獸國股份有限公司', 'count'=>'12345則面試'],
                    ['name'=> '8abc有限公司','count'=>'45則面試'],
                    ['name'=> '9野獸國股份有限公司野獸國股份有限公司', 'count'=>'100則面試'],
                    ['name'=> '10野獸國股份有限公司', 'count'=>'5則面試'],
                  ]
                ])
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>


    {{-- Hot Keyword --}}
    <div class='iw_container iw_hot-links-outer'>
      <h3 class='iw_mini-title'>熱門關鍵字</h3>
      <div class='iw_hot-links-wrap'>
        @include('includes/index.index-hot-link', [
          'items' => [
            '來點中文字','Aarhus','蘋果日報','ArynJacobssen','HuHyon-Suk','反送中','CharlotteWalker','OnyamaLim','Savannah','Victoria','PinJung-Eum','AlbertoRaya','AnnaFali','Antwerp','DarrenAdams','Brussels','AlexWalker',
          ]
        ])
      </div>
    </div>
  </section>









@endsection