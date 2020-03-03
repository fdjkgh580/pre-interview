{{-- 代表這份文件繼承 layout.blade.php --}}
@extends('layout.layout')

{{-- 填入預留的title內容 --}}
@section('title', 'guideline')

@push('styles')
  <link rel="stylesheet" href="{{ mix('css/guideline.css') }}">
@endpush

@push('scripts')
  <script src="{{ mix('js/app.js') }}"></script>
@endpush




{{-- 填入預留的content --}}
@section('content')

  {{-- Button --}}
  <div class="guide-layout">
    <div class="iw_container">
      <h1 class="fz-h3">Buttons</h1>
      <div class="guide-box">
        <h3 class="fz-h5">1. 尺寸</h3>
        <div class="row">
          <div class="guide-component col col-7">
            <div class="guide-component-box">
              <div class="fz-t1">.btn-lg</div>
              <button class="btn btn-primary btn-lg">
                <span>button</span>
              </button>
            </div>
            <div class="guide-component-box">
              <div class="fz-t1">.btn-md</div>
              <button class="btn btn-primary btn-md">
                <span>button</span>
              </button>
            </div>
            <div class="guide-component-box">
              <div class="fz-t1">.btn-sm</div>
              <button class="btn btn-primary btn-sm">
                <span>button</span>
              </button>
            </div>
            <div class="guide-component-box">
              <div class="fz-t1">.btn-xs</div>
              <button class="btn btn-primary btn-xs">
                <span>button</span>
              </button>
            </div>
            <div class="guide-component-box">
              <div class="fz-t1">.btn-xs.disabled</div>
              <button class="btn btn-primary btn-xs disabled">
                <span>button</span>
              </button>
            </div>
          </div>
          <div class="guide-info col col-5">
            <div class="fz-t1">1. 按鈕都要加上class: .btn</div>
            <div class="fz-t1">2. 不同尺寸的按鈕，在按鈕本身加上不同的 class</div>
            <div class="fz-t1">3. 禁用按鈕時，在按鈕本身加上class: 
              <strong>.disabled</strong>
            </div>
          </div>
        </div>
      </div>
      <div class="guide-box">
        <h3 class="fz-h5">2. 種類</h3>
        <div class="row">
          <div class="guide-component col col-7">
            <div class="guide-component-box">
              <div class="fz-t1">沒有icons</div>
              <button class="btn btn-primary btn-md">
                <span>button</span>
              </button>
            </div>
            <div class="guide-component-box">
              <div class="fz-t1">.btn-icon-left</div>
              <button class="btn btn-primary btn-md btn-icon-left">
                <img src="/images/icons/menu.svg" alt="" class="svg">
                <span>button</span>
              </button>
            </div>
            <div class="guide-component-box">
              <div class="fz-t1">.btn-icon-right</div>
              <button class="btn btn-primary btn-md btn-icon-right">
                <span>button</span>
                <img src="/images/icons/menu.svg" alt="" class="svg">
              </button>
            </div>
            <div class="guide-component-box">
              <div class="fz-t1">.btn-icon</div>
              <button class="btn btn-primary btn-md btn-icon">
                <img src="/images/icons/menu.svg" alt="" class="svg">
              </button>
            </div>
          </div>
          <div class="guide-info col col-5">
            <div class="fz-t1">1. 不同種類的按鈕，在按鈕本身加上不同的 class</div>
            <div class="fz-t1">2. 純文字按鈕不需貼加任何種類 class。</div>
          </div>
        </div>
      </div>
      <div class="guide-box">
        <h3 class="fz-h5">情境 - 一般</h3>
        <div class="row">
          <div class="guide-component col col-7">
            <div class="guide-component-box">
              <div class="fz-t1">.btn-basic</div>
              <button class="btn btn-md btn-basic">
                <span>button</span>
              </button>
            </div>
            <div class="guide-component-box">
              <div class="fz-t1">.btn-primary</div>
              <button class="btn btn-md btn-primary">
                <span>button</span>
              </button>
            </div>
            <div class="guide-component-box">
              <div class="fz-t1">.btn-info</div>
              <button class="btn btn-md btn-info">
                <span>button</span>
              </button>
            </div>
            <div class="guide-component-box">
              <div class="fz-t1">.btn-success</div>
              <button class="btn btn-md btn-primary">
                <span>button</span>
              </button>
            </div>
            <div class="guide-component-box">
              <div class="fz-t1">.btn-warning</div>
              <button class="btn btn-md btn-warning">
                <span>button</span>
              </button>
            </div>
            <div class="guide-component-box">
              <div class="fz-t1">.btn-danger</div>
              <button class="btn btn-md btn-danger">
                <span>button</span>
              </button>
            </div>
          </div>
          <div class="guide-info col col-5">
            <div class="fz-t1">1. 不同情境、不同色彩的按鈕，在按鈕本身加上不同的 class</div>
          </div>
        </div>
      </div>
      <div class="guide-box">
        <h3 class="fz-h5">情境 - outline</h3>
        <div class="row">
          <div class="guide-component col col-7">
            <div class="guide-component-box">
              <div class="fz-t1">.btn-outline-basic</div>
              <button class="btn btn-md btn-outline-basic">
                <span>button</span>
              </button>
            </div>
            <div class="guide-component-box">
              <div class="fz-t1">.btn-outline-primary</div>
              <button class="btn btn-md btn-outline-primary">
                <span>button</span>
              </button>
            </div>
            <div class="guide-component-box">
              <div class="fz-t1">.btn-outline-info</div>
              <button class="btn btn-md btn-outline-info">
                <span>button</span>
              </button>
            </div>
            <div class="guide-component-box">
              <div class="fz-t1">.btn-outline-success</div>
              <button class="btn btn-md btn-outline-primary">
                <span>button</span>
              </button>
            </div>
            <div class="guide-component-box">
              <div class="fz-t1">.btn-outline-warning</div>
              <button class="btn btn-md btn-outline-warning">
                <span>button</span>
              </button>
            </div>
            <div class="guide-component-box">
              <div class="fz-t1">.btn-outline-danger</div>
              <button class="btn btn-md btn-outline-danger">
                <span>button</span>
              </button>
            </div>
          </div>
          <div class="guide-info col col-5">
            <div class="fz-t1">1. 不同情境、不同色彩的按鈕，在按鈕本身加上不同的 class</div>
          </div>
        </div>
      </div>
      <div class="guide-box">
        <h3 class="fz-h5">情境 - ghost</h3>
        <div class="row">
          <div class="guide-component col col-7">
            <div class="guide-component-box">
              <div class="fz-t1">.btn-ghost-basic</div>
              <button class="btn btn-md btn-ghost-basic">
                <span>button</span>
              </button>
            </div>
            <div class="guide-component-box">
              <div class="fz-t1">.btn-ghost-primary</div>
              <button class="btn btn-md btn-ghost-primary">
                <span>button</span>
              </button>
            </div>
            <div class="guide-component-box">
              <div class="fz-t1">.btn-ghost-info</div>
              <button class="btn btn-md btn-ghost-info">
                <span>button</span>
              </button>
            </div>
            <div class="guide-component-box">
              <div class="fz-t1">.btn-ghost-success</div>
              <button class="btn btn-md btn-ghost-primary">
                <span>button</span>
              </button>
            </div>
            <div class="guide-component-box">
              <div class="fz-t1">.btn-ghost-warning</div>
              <button class="btn btn-md btn-ghost-warning">
                <span>button</span>
              </button>
            </div>
            <div class="guide-component-box">
              <div class="fz-t1">.btn-ghost-danger</div>
              <button class="btn btn-md btn-ghost-danger">
                <span>button</span>
              </button>
            </div>
          </div>
          <div class="guide-info col col-5">
            <div class="fz-t1">1. 不同情境、不同色彩的按鈕，在按鈕本身加上不同的 class</div>
          </div>
        </div>
      </div>
    </div>
  </div>

  {{-- Checkbox --}}
  <div class="guide-layout">
    <div class="iw_container">
      <h1 class="fz-h3">checkbox</h1>
      <div class="guide-box">
        <div class="row">
          <div class="guide-component col col-7">
            <div class="guide-component-box">
              <div class="fz-t1">.checkbox-basic</div>
              <div class="checkbox-layout">
                <label for="" class="checkbox-basic">
                  <input type="checkbox" checked="checked">
                  <span class="fz-t1">checkbox</span>
                </label>
              </div>
            </div>
            <div class="guide-component-box">
              <div class="fz-t1">.checkbox-primary</div>
              <div class="checkbox-layout">
                <label for="" class="checkbox-primary">
                  <input type="checkbox" checked="checked">
                  <span class="fz-t1">checkbox</span>
                </label>
              </div>
            </div>
            <div class="guide-component-box">
              <div class="fz-t1">.checkbox-info</div>
              <div class="checkbox-layout">
                <label for="" class="checkbox-info">
                  <input type="checkbox" checked="checked">
                  <span class="fz-t1">checkbox</span>
                </label>
              </div>
            </div>
            <div class="guide-component-box">
              <div class="fz-t1">.checkbox-success</div>
              <div class="checkbox-layout">
                <label for="" class="checkbox-success">
                  <input type="checkbox" checked="checked">
                  <span class="fz-t1">checkbox</span>
                </label>
              </div>
            </div>
            <div class="guide-component-box">
              <div class="fz-t1">.checkbox-warning</div>
              <div class="checkbox-layout">
                <label for="" class="checkbox-warning">
                  <input type="checkbox" checked="checked">
                  <span class="fz-t1">checkbox</span>
                </label>
              </div>
            </div>
            <div class="guide-component-box">
              <div class="fz-t1">.checkbox-danger</div>
              <div class="checkbox-layout">
                <label for="" class="checkbox-danger">
                  <input type="checkbox" checked="checked">
                  <span class="fz-t1">checkbox</span>
                </label>
              </div>
            </div>
            <div class="guide-component-box">
              <div class="fz-t1">.disabled</div>
              <div class="checkbox-layout">
                <label for="" class="checkbox-basic disabled">
                  <input type="checkbox" disabled>
                  <span class="fz-t1">checkbox</span>
                </label>
              </div>
            </div>
          </div>
          <div class="guide-info col col-5">
            <div class="fz-t1">1. 在 label 加上 class。</div>
            <div class="fz-t1">2. 狀態為 disabled 時，在 label 加上 class: 
              <strong> .disabled </strong>
              ，並在 input 加上
              <strong>disabled </strong>
              屬性。
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  {{-- Radio --}}
  <div class="guide-layout">
    <div class="iw_container">
      <h1 class="fz-h3">radio</h1>
      <div class="guide-box">
        <div class="row">
          <div class="guide-component col col-7">
            <div class="guide-component-box">
              <div class="fz-t1">.radio-basic</div>
              <div class="radio-layout">
                <label for='radio-basic-1' class="radio-basic">
                  <input type="radio" name='radio-basic' value="radio-basic-1" checked>
                  <span class="fz-t2">radio</span>
                </label>
                <label for='radio-basic-2' class="radio-basic">
                  <input type="radio" name='radio-basic' value="radio-basic-2">
                  <span class="fz-t2">radio</span>
                </label>
              </div>
            </div>
            <div class="guide-component-box">
              <div class="fz-t1">.radio-primary</div>
              <div class="radio-layout">
                <label for='radio-primary-1' class="radio-primary">
                  <input type="radio" name='radio-primary' value="radio-primary-1" checked>
                  <span class="fz-t2">radio</span>
                </label>
                <label for='radio-primary-2' class="radio-primary">
                  <input type="radio" name='radio-primary' value="radio-primary-2">
                  <span class="fz-t2">radio</span>
                </label>
              </div>
            </div>
            <div class="guide-component-box">
              <div class="fz-t1">.radio-info</div>
              <div class="radio-layout">
                <label for='radio-info-1' class="radio-info">
                  <input type="radio" name='radio-info' value="radio-info-1" checked>
                  <span class="fz-t2">radio</span>
                </label>
                <label for='radio-info-2' class="radio-info">
                  <input type="radio" name='radio-info' value="radio-info-2">
                  <span class="fz-t2">radio</span>
                </label>
              </div>
            </div>
            <div class="guide-component-box">
              <div class="fz-t1">.radio-success</div>
              <div class="radio-layout">
                <label for='radio-success-1' class="radio-success">
                  <input type="radio" name='radio-success' value="radio-success-1" checked>
                  <span class="fz-t2">radio</span>
                </label>
                <label for='radio-success-2' class="radio-success">
                  <input type="radio" name='radio-success' value="radio-success-2">
                  <span class="fz-t2">radio</span>
                </label>
              </div>
            </div>
            <div class="guide-component-box">
              <div class="fz-t1">.radio-warning</div>
              <div class="radio-layout">
                <label for='radio-warning-1' class="radio-warning">
                  <input type="radio" name='radio-warning' value="radio-warning-1" checked>
                  <span class="fz-t2">radio</span>
                </label>
                <label for='radio-warning-2' class="radio-warning">
                  <input type="radio" name='radio-warning' value="radio-warning-2">
                  <span class="fz-t2">radio</span>
                </label>
              </div>
            </div>
            <div class="guide-component-box">
              <div class="fz-t1">.radio-danger</div>
              <div class="radio-layout">
                <label for='radio-danger-1' class="radio-danger">
                  <input type="radio" name='radio-danger' value="radio-danger-1" checked>
                  <span class="fz-t2">radio</span>
                </label>
                <label for='radio-danger-2' class="radio-danger">
                  <input type="radio" name='radio-danger' value="radio-danger-2">
                  <span class="fz-t2">radio</span>
                </label>
              </div>
            </div>
            <div class="guide-component-box">
              <div class="fz-t1">.disabled</div>
              <div class="radio-layout">
                <label class="radio-basic disabled">
                  <input type="radio" name='radio-basic' disabled>
                  <span class="fz-t2">radio</span>
                </label>
              </div>
            </div>
          </div>
          <div class="guide-info col col-5">
            <div class="fz-t1">1. 在 label 加上 class。</div>
            <div class="fz-t1">2. 狀態為 disabled 時，在 label 加上 class: 
              <strong> .disabled </strong>
              ，並在 input 加上
              <strong>disabled </strong>
              屬性。
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  {{-- Label --}}
  <div class="guide-layout">
    <div class="iw_container">
      <h1 class="fz-h3">label</h1>
      <div class="guide-box">
        <div class="row">
          <div class="guide-component col col-7">
            <div class="guide-component-box">
              <div class="fz-t1">.label-basic</div>
              <div class="label-basic">
                <span class="fz-t2 fz-tit">label標籤</span>
              </div>
            </div>
            <div class="guide-component-box">
              <div class="fz-t1">.label-primary</div>
              <div class="label-primary">
                <span class="fz-t2 fz-tit">label標籤</span>
              </div>
            </div>
            <div class="guide-component-box">
              <div class="fz-t1">.label-info</div>
              <div class="label-info">
                <span class="fz-t2 fz-tit">label標籤</span>
              </div>
            </div>
            <div class="guide-component-box">
              <div class="fz-t1">.label-success</div>
              <div class="label-success">
                <span class="fz-t2 fz-tit">label標籤</span>
              </div>
            </div>
            <div class="guide-component-box">
              <div class="fz-t1">.label-warning</div>
              <div class="label-warning">
                <span class="fz-t2 fz-tit">label標籤</span>
              </div>
            </div>
            <div class="guide-component-box">
              <div class="fz-t1">.label-danger</div>
              <div class="label-danger">
                <span class="fz-t2 fz-tit">label標籤</span>
              </div>
            </div>
          </div>
          <div class="guide-info col col-5">
            <div class="fz-t1">1. 不同色彩的label，本身加上不同的 class</div>
          </div>
        </div>
      </div>
    </div>
  </div>

  {{-- Badge --}}
  <div class="guide-layout">
    <div class="iw_container">
      <h1 class="fz-h3">badge</h1>
      <div class="guide-box">
        <div class="row">
          <div class="guide-component col col-7">
            <div class="guide-component-box">
              <div class="fz-t1">.badge-basic</div>
              <div class="fz-t2">
                <span class="badge badge-basic">badge</span>
              </div>
            </div>
            <div class="guide-component-box">
              <div class="fz-t1">.badge-primary</div>
              <div class="fz-t2">
                <span class="badge badge-primary">badge</span>
              </div>
            </div>
            <div class="guide-component-box">
              <div class="fz-t1">.badge-info</div>
              <div class="fz-t2">
                <span class="badge badge-info">badge</span>
              </div>
            </div>
            <div class="guide-component-box">
              <div class="fz-t1">.badge-success</div>
              <div class="fz-t2">
                <span class="badge badge-success">badge</span>
              </div>
            </div>
            <div class="guide-component-box">
              <div class="fz-t1">.badge-warning</div>
              <div class="fz-t2">
                <span class="badge badge-warning">badge</span>
              </div>
            </div>
            <div class="guide-component-box">
              <div class="fz-t1">.badge-danger</div>
              <div class="fz-t2">
                <span class="badge badge-danger">badge</span>
              </div>
            </div>
          </div>
          <div class="guide-info col col-5">
            <div class="fz-t1">1. 都需加上class: .badge</div>
            <div class="fz-t1">2. 在要放置 badge 的結構裡加入 
              <strong><span>badge內容<span/></strong>
              ，依據不同色彩的badge，本身加上不同的class
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  {{-- Grid --}}
  <div class="guide-layout">
    <div class="iw_container">
      <h1 class="fz-h3">geid</h1>
      <div class="row">
        <div class="col col-1">
          <div class="card">
            <div class="fz-t1">.col-1</div>
          </div>
        </div>
        <div class="col col-1">
          <div class="card">
            <div class="fz-t1">.col-1</div>
          </div>
        </div>
        <div class="col col-1">
          <div class="card">
            <div class="fz-t1">.col-1</div>
          </div>
        </div>
        <div class="col col-1">
          <div class="card">
            <div class="fz-t1">.col-1</div>
          </div>
        </div>
        <div class="col col-1">
          <div class="card">
            <div class="fz-t1">.col-1</div>
          </div>
        </div>
        <div class="col col-1">
          <div class="card">
            <div class="fz-t1">.col-1</div>
          </div>
        </div>
        <div class="col col-1">
          <div class="card">
            <div class="fz-t1">.col-1</div>
          </div>
        </div>
        <div class="col col-1">
          <div class="card">
            <div class="fz-t1">.col-1</div>
          </div>
        </div>
        <div class="col col-1">
          <div class="card">
            <div class="fz-t1">.col-1</div>
          </div>
        </div>
        <div class="col col-1">
          <div class="card">
            <div class="fz-t1">.col-1</div>
          </div>
        </div>
        <div class="col col-1">
          <div class="card">
            <div class="fz-t1">.col-1</div>
          </div>
        </div>
        <div class="col col-1">
          <div class="card">
            <div class="fz-t1">.col-1</div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col col-4">
          <div class="card">
            <div class="fz-t1">.col-4</div>
          </div>
        </div>
        <div class="col col-4">
          <div class="card">
            <div class="fz-t1">.col-4</div>
          </div>
        </div>
        <div class="col col-4">
          <div class="card">
            <div class="fz-t1">.col-4</div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col col-8">
          <div class="card">
            <div class="fz-t1">.col-8</div>
          </div>
        </div>
        <div class="col col-4">
          <div class="card">
            <div class="fz-t1">.col-4</div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
@endsection






