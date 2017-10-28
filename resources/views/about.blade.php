@extends('layouts.app')

@section('content')

<div class="page-title-wrapper" style="background-image: url('{{ asset('img/header-bottom-bg.jpg') }}')">
  <h1 class="page-title heading-underline heading-underline_center">@lang('about.page_title')</h1>
</div>

<div class="about-page">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md about-col">
        <div class="about-content">
          <h2 class="heading-underline heading-underline_center">@lang('about.paragraph_title')</h2>

          <h5 class="about-description">@lang('about.paragraph_description')</h5>

          <p class="about-paragraph">@lang('about.paragraph')</p>
        </div>
      </div>
      <div class="col-md about-col">
        <!-- <img class="d-block w-100" src="{{ asset('img/about-img.jpg')}}" alt=""> -->
        <iframe width="100%" height="315" src="https://www.youtube.com/embed/u3HUmgxk6X0"
          frameborder="0" allowfullscreen></iframe>
      </div>
    </div>

  </div>
</div>
@endsection

