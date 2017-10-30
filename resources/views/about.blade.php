@extends('layouts.page')

@section('page-title')
  @lang('about.page_title')
@endsection

@section('page-content')
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
        <iframe width="100%" height="315" src="https://www.youtube.com/embed/u3HUmgxk6X0"
          frameborder="0" allowfullscreen></iframe>
      </div>
    </div>

  </div>
</div>
@endsection

