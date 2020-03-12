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
        <div class="iw_row">
          <div class="guide-component iw_col iw_col-7">
            <div class="guide-component-box">
              <div class="fz-t1">.iw_btn-lg</div>
              <button class="iw_btn iw_btn-primary iw_btn-lg">
                <span>button</span>
              </button>
            </div>
            <div class="guide-component-box">
              <div class="fz-t1">.iw_btn-md</div>
              <button class="iw_btn iw_btn-primary iw_btn-md">
                <span>button</span>
              </button>
            </div>
            <div class="guide-component-box">
              <div class="fz-t1">.iw_btn-sm</div>
              <button class="iw_btn iw_btn-primary iw_btn-sm">
                <span>button</span>
              </button>
            </div>
            <div class="guide-component-box">
              <div class="fz-t1">.iw_btn-xs</div>
              <button class="iw_btn iw_btn-primary iw_btn-xs">
                <span>button</span>
              </button>
            </div>
            <div class="guide-component-box">
              <div class="fz-t1">.iw_btn-xs.disabled</div>
              <button class="iw_btn iw_btn-primary iw_btn-xs iw_disabled">
                <span>button</span>
              </button>
            </div>
          </div>
          <div class="guide-info iw_col iw_col-5">
            <div class="fz-t1">1. 按鈕都要加上class: .iw_btn</div>
            <div class="fz-t1">2. 不同尺寸的按鈕，在按鈕本身加上不同的 class</div>
            <div class="fz-t1">3. 禁用按鈕時，在按鈕本身加上class: 
              <strong>.iw_disabled</strong>
            </div>
          </div>
        </div>
      </div>
      <div class="guide-box">
        <h3 class="fz-h5">2. 種類</h3>
        <div class="iw_row">
          <div class="guide-component iw_col iw_col-7">
            <div class="guide-component-box">
              <div class="fz-t1">沒有icons</div>
              <button class="iw_btn iw_btn-primary iw_btn-md">
                <span>button</span>
              </button>
            </div>
            <div class="guide-component-box">
              <div class="fz-t1">.iw_btn-icon-left</div>
              <button class="iw_btn iw_btn-primary iw_btn-md iw_btn-icon-left">
                <img src="/images/icons/menu.svg" alt="" class="svg">
                <span>button</span>
              </button>
            </div>
            <div class="guide-component-box">
              <div class="fz-t1">.iw_btn-icon-right</div>
              <button class="iw_btn iw_btn-primary iw_btn-md iw_btn-icon-right">
                <span>button</span>
                <img src="/images/icons/menu.svg" alt="" class="svg">
              </button>
            </div>
            <div class="guide-component-box">
              <div class="fz-t1">.iw_btn-icon</div>
              <button class="iw_btn iw_btn-primary iw_btn-md iw_btn-icon">
                <img src="/images/icons/menu.svg" alt="" class="svg">
              </button>
            </div>
          </div>
          <div class="guide-info iw_col iw_col-5">
            <div class="fz-t1">1. 不同種類的按鈕，在按鈕本身加上不同的 class</div>
            <div class="fz-t1">2. 純文字按鈕不需貼加任何種類 class。</div>
          </div>
        </div>
      </div>
      <div class="guide-box">
        <h3 class="fz-h5">情境 - 一般</h3>
        <div class="iw_row">
          <div class="guide-component iw_col iw_col-7">
            <div class="guide-component-box">
              <div class="fz-t1">.iw_btn-basic</div>
              <button class="iw_btn iw_btn-md iw_btn-basic">
                <span>button</span>
              </button>
            </div>
            <div class="guide-component-box">
              <div class="fz-t1">.iw_btn-primary</div>
              <button class="iw_btn iw_btn-md iw_btn-primary">
                <span>button</span>
              </button>
            </div>
            <div class="guide-component-box">
              <div class="fz-t1">.iw_btn-info</div>
              <button class="iw_btn iw_btn-md iw_btn-info">
                <span>button</span>
              </button>
            </div>
            <div class="guide-component-box">
              <div class="fz-t1">.iw_btn-success</div>
              <button class="iw_btn iw_btn-md iw_btn-primary">
                <span>button</span>
              </button>
            </div>
            <div class="guide-component-box">
              <div class="fz-t1">.iw_btn-warning</div>
              <button class="iw_btn iw_btn-md iw_btn-warning">
                <span>button</span>
              </button>
            </div>
            <div class="guide-component-box">
              <div class="fz-t1">.iw_btn-danger</div>
              <button class="iw_btn iw_btn-md iw_btn-danger">
                <span>button</span>
              </button>
            </div>
          </div>
          <div class="guide-info iw_col iw_col-5">
            <div class="fz-t1">1. 不同情境、不同色彩的按鈕，在按鈕本身加上不同的 class</div>
          </div>
        </div>
      </div>
      <div class="guide-box">
        <h3 class="fz-h5">情境 - outline</h3>
        <div class="iw_row">
          <div class="guide-component iw_col iw_col-7">
            <div class="guide-component-box">
              <div class="fz-t1">.iw_btn-outline-basic</div>
              <button class="iw_btn iw_btn-md iw_btn-outline-basic">
                <span>button</span>
              </button>
            </div>
            <div class="guide-component-box">
              <div class="fz-t1">.iw_btn-outline-primary</div>
              <button class="iw_btn iw_btn-md iw_btn-outline-primary">
                <span>button</span>
              </button>
            </div>
            <div class="guide-component-box">
              <div class="fz-t1">.iw_btn-outline-info</div>
              <button class="iw_btn iw_btn-md iw_btn-outline-info">
                <span>button</span>
              </button>
            </div>
            <div class="guide-component-box">
              <div class="fz-t1">.iw_btn-outline-success</div>
              <button class="iw_btn iw_btn-md iw_btn-outline-primary">
                <span>button</span>
              </button>
            </div>
            <div class="guide-component-box">
              <div class="fz-t1">.iw_btn-outline-warning</div>
              <button class="iw_btn iw_btn-md iw_btn-outline-warning">
                <span>button</span>
              </button>
            </div>
            <div class="guide-component-box">
              <div class="fz-t1">.iw_btn-outline-danger</div>
              <button class="iw_btn iw_btn-md iw_btn-outline-danger">
                <span>button</span>
              </button>
            </div>
          </div>
          <div class="guide-info iw_col iw_col-5">
            <div class="fz-t1">1. 不同情境、不同色彩的按鈕，在按鈕本身加上不同的 class</div>
          </div>
        </div>
      </div>
      <div class="guide-box">
        <h3 class="fz-h5">情境 - ghost</h3>
        <div class="iw_row">
          <div class="guide-component iw_col iw_col-7">
            <div class="guide-component-box">
              <div class="fz-t1">.iw_btn-ghost-basic</div>
              <button class="iw_btn iw_btn-md iw_btn-ghost-basic">
                <span>button</span>
              </button>
            </div>
            <div class="guide-component-box">
              <div class="fz-t1">.iw_btn-ghost-primary</div>
              <button class="iw_btn iw_btn-md iw_btn-ghost-primary">
                <span>button</span>
              </button>
            </div>
            <div class="guide-component-box">
              <div class="fz-t1">.iw_btn-ghost-info</div>
              <button class="iw_btn iw_btn-md iw_btn-ghost-info">
                <span>button</span>
              </button>
            </div>
            <div class="guide-component-box">
              <div class="fz-t1">.iw_btn-ghost-success</div>
              <button class="iw_btn iw_btn-md iw_btn-ghost-primary">
                <span>button</span>
              </button>
            </div>
            <div class="guide-component-box">
              <div class="fz-t1">.iw_btn-ghost-warning</div>
              <button class="iw_btn iw_btn-md iw_btn-ghost-warning">
                <span>button</span>
              </button>
            </div>
            <div class="guide-component-box">
              <div class="fz-t1">.iw_btn-ghost-danger</div>
              <button class="iw_btn iw_btn-md iw_btn-ghost-danger">
                <span>button</span>
              </button>
            </div>
          </div>
          <div class="guide-info iw_col iw_col-5">
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
        <div class="iw_row">
          <div class="guide-component iw_col iw_col-7">
            <div class="guide-component-box">
              <div class="fz-t1">.iw_checkbox-basic</div>
              <div class="iw_checkbox-layout">
                <label for="" class="iw_checkbox-basic">
                  <input type="checkbox" checked="checked">
                  <span class="fz-t1">checkbox</span>
                </label>
              </div>
            </div>
            <div class="guide-component-box">
              <div class="fz-t1">.iw_checkbox-primary</div>
              <div class="iw_checkbox-layout">
                <label for="" class="iw_checkbox-primary">
                  <input type="checkbox" checked="checked">
                  <span class="fz-t1">checkbox</span>
                </label>
              </div>
            </div>
            <div class="guide-component-box">
              <div class="fz-t1">.iw_checkbox-info</div>
              <div class="iw_checkbox-layout">
                <label for="" class="iw_checkbox-info">
                  <input type="checkbox" checked="checked">
                  <span class="fz-t1">checkbox</span>
                </label>
              </div>
            </div>
            <div class="guide-component-box">
              <div class="fz-t1">.iw_checkbox-success</div>
              <div class="iw_checkbox-layout">
                <label for="" class="iw_checkbox-success">
                  <input type="checkbox" checked="checked">
                  <span class="fz-t1">checkbox</span>
                </label>
              </div>
            </div>
            <div class="guide-component-box">
              <div class="fz-t1">.iw_checkbox-warning</div>
              <div class="iw_checkbox-layout">
                <label for="" class="iw_checkbox-warning">
                  <input type="checkbox" checked="checked">
                  <span class="fz-t1">checkbox</span>
                </label>
              </div>
            </div>
            <div class="guide-component-box">
              <div class="fz-t1">.iw_checkbox-danger</div>
              <div class="iw_checkbox-layout">
                <label for="" class="iw_checkbox-danger">
                  <input type="checkbox" checked="checked">
                  <span class="fz-t1">checkbox</span>
                </label>
              </div>
            </div>
            <div class="guide-component-box">
              <div class="fz-t1">.iw_disabled</div>
              <div class="iw_checkbox-layout">
                <label for="" class="iw_checkbox-basic iw_disabled">
                  <input type="checkbox" disabled>
                  <span class="fz-t1">checkbox</span>
                </label>
              </div>
            </div>
          </div>
          <div class="guide-info iw_col iw_col-5">
            <div class="fz-t1">1. 在 label 加上 class。</div>
            <div class="fz-t1">2. 狀態為 disabled 時，在 label 加上 class: 
              <strong> .iw_disabled </strong>
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
        <div class="iw_row">
          <div class="guide-component iw_col iw_col-7">
            <div class="guide-component-box">
              <div class="fz-t1">.iw_radio-basic</div>
              <div class="iw_radio-layout">
                <label for='iw_radio-basic-1' class="iw_radio-basic">
                  <input type="radio" name='iw_radio-basic' value="iw_radio-basic-1" checked>
                  <span class="fz-t2">radio</span>
                </label>
                <label for='iw_radio-basic-2' class="iw_radio-basic">
                  <input type="radio" name='iw_radio-basic' value="iw_radio-basic-2">
                  <span class="fz-t2">radio</span>
                </label>
              </div>
            </div>
            <div class="guide-component-box">
              <div class="fz-t1">.iw_radio-primary</div>
              <div class="iw_radio-layout">
                <label for='iw_radio-primary-1' class="iw_radio-primary">
                  <input type="radio" name='iw_radio-primary' value="iw_radio-primary-1" checked>
                  <span class="fz-t2">radio</span>
                </label>
                <label for='iw_radio-primary-2' class="iw_radio-primary">
                  <input type="radio" name='iw_radio-primary' value="iw_radio-primary-2">
                  <span class="fz-t2">radio</span>
                </label>
              </div>
            </div>
            <div class="guide-component-box">
              <div class="fz-t1">.iw_radio-info</div>
              <div class="iw_radio-layout">
                <label for='iw_radio-info-1' class="iw_radio-info">
                  <input type="radio" name='iw_radio-info' value="iw_radio-info-1" checked>
                  <span class="fz-t2">radio</span>
                </label>
                <label for='iw_radio-info-2' class="iw_radio-info">
                  <input type="radio" name='iw_radio-info' value="iw_radio-info-2">
                  <span class="fz-t2">radio</span>
                </label>
              </div>
            </div>
            <div class="guide-component-box">
              <div class="fz-t1">.iw_radio-success</div>
              <div class="iw_radio-layout">
                <label for='iw_radio-success-1' class="iw_radio-success">
                  <input type="radio" name='iw_radio-success' value="iw_radio-success-1" checked>
                  <span class="fz-t2">radio</span>
                </label>
                <label for='iw_radio-success-2' class="iw_radio-success">
                  <input type="radio" name='iw_radio-success' value="iw_radio-success-2">
                  <span class="fz-t2">radio</span>
                </label>
              </div>
            </div>
            <div class="guide-component-box">
              <div class="fz-t1">.iw_radio-warning</div>
              <div class="iw_radio-layout">
                <label for='iw_radio-warning-1' class="iw_radio-warning">
                  <input type="radio" name='iw_radio-warning' value="iw_radio-warning-1" checked>
                  <span class="fz-t2">radio</span>
                </label>
                <label for='iw_radio-warning-2' class="iw_radio-warning">
                  <input type="radio" name='iw_radio-warning' value="iw_radio-warning-2">
                  <span class="fz-t2">radio</span>
                </label>
              </div>
            </div>
            <div class="guide-component-box">
              <div class="fz-t1">.iw_radio-danger</div>
              <div class="iw_radio-layout">
                <label for='iw_radio-danger-1' class="iw_radio-danger">
                  <input type="radio" name='iw_radio-danger' value="iw_radio-danger-1" checked>
                  <span class="fz-t2">radio</span>
                </label>
                <label for='iw_radio-danger-2' class="iw_radio-danger">
                  <input type="radio" name='iw_radio-danger' value="iw_radio-danger-2">
                  <span class="fz-t2">radio</span>
                </label>
              </div>
            </div>
            <div class="guide-component-box">
              <div class="fz-t1">.disabled</div>
              <div class="iw_radio-layout">
                <label class="iw_radio-basic iw_disabled">
                  <input type="radio" name='iw_radio-basic' disabled>
                  <span class="fz-t2">radio</span>
                </label>
              </div>
            </div>
          </div>
          <div class="guide-info iw_col iw_col-5">
            <div class="fz-t1">1. 在 label 加上 class。</div>
            <div class="fz-t1">2. 狀態為 disabled 時，在 label 加上 class: 
              <strong> .iw_disabled </strong>
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
        <div class="iw_row">
          <div class="guide-component iw_col iw_col-7">
            <div class="guide-component-box">
              <div class="fz-t1">.iw_label-basic</div>
              <div class="iw_label-basic">
                <span class="fz-t2 fz-tit">label標籤</span>
              </div>
            </div>
            <div class="guide-component-box">
              <div class="fz-t1">.iw_label-primary</div>
              <div class="iw_label-primary">
                <span class="fz-t2 fz-tit">label標籤</span>
              </div>
            </div>
            <div class="guide-component-box">
              <div class="fz-t1">.iw_label-info</div>
              <div class="iw_label-info">
                <span class="fz-t2 fz-tit">label標籤</span>
              </div>
            </div>
            <div class="guide-component-box">
              <div class="fz-t1">.iw_label-success</div>
              <div class="iw_label-success">
                <span class="fz-t2 fz-tit">label標籤</span>
              </div>
            </div>
            <div class="guide-component-box">
              <div class="fz-t1">.iw_label-warning</div>
              <div class="iw_label-warning">
                <span class="fz-t2 fz-tit">label標籤</span>
              </div>
            </div>
            <div class="guide-component-box">
              <div class="fz-t1">.iw_label-danger</div>
              <div class="iw_label-danger">
                <span class="fz-t2 fz-tit">label標籤</span>
              </div>
            </div>
          </div>
          <div class="guide-info iw_col iw_col-5">
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
        <div class="iw_row">
          <div class="guide-component iw_col iw_col-7">
            <div class="guide-component-box">
              <div class="fz-t1">.iw_badge-basic</div>
              <div class="fz-t2">
                <span class="iw_badge iw_badge-basic">badge</span>
              </div>
            </div>
            <div class="guide-component-box">
              <div class="fz-t1">.iw_badge-primary</div>
              <div class="fz-t2">
                <span class="iw_badge iw_badge-primary">badge</span>
              </div>
            </div>
            <div class="guide-component-box">
              <div class="fz-t1">.iw_badge-info</div>
              <div class="fz-t2">
                <span class="iw_badge iw_badge-info">badge</span>
              </div>
            </div>
            <div class="guide-component-box">
              <div class="fz-t1">.iw_badge-success</div>
              <div class="fz-t2">
                <span class="iw_badge iw_badge-success">badge</span>
              </div>
            </div>
            <div class="guide-component-box">
              <div class="fz-t1">.iw_badge-warning</div>
              <div class="fz-t2">
                <span class="iw_badge iw_badge-warning">badge</span>
              </div>
            </div>
            <div class="guide-component-box">
              <div class="fz-t1">.iw_badge-danger</div>
              <div class="fz-t2">
                <span class="iw_badge iw_badge-danger">badge</span>
              </div>
            </div>
          </div>
          <div class="guide-info iw_col iw_col-5">
            <div class="fz-t1">1. 都需加上class: .iw_badge</div>
            <div class="fz-t1">2. 在要放置 iw_badge 的結構裡加入 
              <strong><span>badge內容<span/></strong>
              ，依據不同色彩的iw_badge，本身加上不同的class
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  {{-- Grid --}}
  <div class="guide-layout">
    <div class="iw_container">
      <h1 class="fz-h3">Grid</h1>
      <div class="iw_row">
        <div class="iw_col iw_col-1">
          <div class="card">
            <div class="fz-t1">.iw_col-1</div>
          </div>
        </div>
        <div class="iw_col iw_col-1">
          <div class="card">
            <div class="fz-t1">.iw_col-1</div>
          </div>
        </div>
        <div class="iw_col iw_col-1">
          <div class="card">
            <div class="fz-t1">.iw_col-1</div>
          </div>
        </div>
        <div class="iw_col iw_col-1">
          <div class="card">
            <div class="fz-t1">.iw_col-1</div>
          </div>
        </div>
        <div class="iw_col iw_col-1">
          <div class="card">
            <div class="fz-t1">.iw_col-1</div>
          </div>
        </div>
        <div class="iw_col iw_col-1">
          <div class="card">
            <div class="fz-t1">.iw_col-1</div>
          </div>
        </div>
        <div class="iw_col iw_col-1">
          <div class="card">
            <div class="fz-t1">.iw_col-1</div>
          </div>
        </div>
        <div class="iw_col iw_col-1">
          <div class="card">
            <div class="fz-t1">.iw_col-1</div>
          </div>
        </div>
        <div class="iw_col iw_col-1">
          <div class="card">
            <div class="fz-t1">.iw_col-1</div>
          </div>
        </div>
        <div class="iw_col iw_col-1">
          <div class="card">
            <div class="fz-t1">.iw_col-1</div>
          </div>
        </div>
        <div class="iw_col iw_col-1">
          <div class="card">
            <div class="fz-t1">.iw_col-1</div>
          </div>
        </div>
        <div class="iw_col iw_col-1">
          <div class="card">
            <div class="fz-t1">.iw_col-1</div>
          </div>
        </div>
      </div>
      <div class="iw_row">
        <div class="iw_col iw_col-4">
          <div class="card">
            <div class="fz-t1">.iw_col-4</div>
          </div>
        </div>
        <div class="iw_col iw_col-4">
          <div class="card">
            <div class="fz-t1">.iw_col-4</div>
          </div>
        </div>
        <div class="iw_col iw_col-4">
          <div class="card">
            <div class="fz-t1">.iw_col-4</div>
          </div>
        </div>
      </div>
      <div class="iw_row">
        <div class="iw_col iw_col-8">
          <div class="card">
            <div class="fz-t1">.iw_col-8</div>
          </div>
        </div>
        <div class="iw_col iw_col-4">
          <div class="card">
            <div class="fz-t1">.iw_col-4</div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
@endsection






