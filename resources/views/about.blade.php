@extends('layouts.app')

@section('content')

<div class="page-title-wrapper">
  <h1 class="page-title text-center heading-underline heading-underline_center">@lang('about.page_title')</h1>
</div>

<div class="about-page">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm">
        <div class="about-content">
          <h2 class="text-center heading-underline heading-underline_center">@lang('about.paragraph_title')</h2>

          <h5 class="about-description">@lang('about.paragraph_description')</h5>

          <p class="text-center about-paragraph">@lang('about.paragraph')</p>
        </div>
      </div>
      <div class="col-sm">
        <!-- <img class="d-block w-100" src="{{ asset('img/about-img.jpg')}}" alt=""> -->
        <iframe width="100%" height="315" src="https://www.youtube.com/embed/u3HUmgxk6X0"
          frameborder="0" allowfullscreen></iframe>
      </div>
    </div>

  </div>
</div>
@endsection

