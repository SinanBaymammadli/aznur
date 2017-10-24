@extends('layouts.app')

@section('content')

<div class="page-title-wrapper">
  <img class="d-block w-100" src="{{ asset('img/header-bottom-bg.jpg')}}" alt="">
  <h1 class="page-title font-weight-bold">
    @lang('about.page_title')
    <span class="title-seperator"></span>
  </h1>
</div>

<div class="about-page">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm">
        <h2 class="text-center">@lang('about.paragraph_title')</h2>

        <p class="text-center">@lang('about.paragraph')</p>
      </div>
      <div class="col-sm">
        <img class="d-block w-100" src="{{ asset('img/about-img.jpg')}}" alt="">
      </div>
    </div>

  </div>
</div>
@endsection

