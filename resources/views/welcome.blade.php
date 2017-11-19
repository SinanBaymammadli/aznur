@extends('layouts.app')

@section('meta')
  <meta name="keywords" content="cable,kabel">
@endsection

@section('title', 'Home')

@section('content')

  <div class="slider main-slider">
    <div class="slider-item">
      <div class="main-slider-img" style="background-image: url(' {{ asset('img/slider1.jpg') }} ')">
        <div class="main-slider-overlay">
          <div class="container-fluid">
            <div class="main-slider-content">
              <h1 class="main-slider-heading">@lang('welcome.slider1_heading')</h1>
              <p class="main-slider-text">@lang('welcome.slider1_text')</p>
              <a href="/about" class="button main-slider-button">@lang('welcome.slider1_btn')</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="slider-item">
      <div class="main-slider-img" style="background-image: url(' {{ asset('img/slider2.jpg') }} ')">
        <div class="main-slider-overlay">
          <div class="container-fluid">
            <div class="main-slider-content">
              <h1 class="main-slider-heading">@lang('welcome.slider2_heading')</h1>
              <p class="main-slider-text">@lang('welcome.slider2_text')</p>
              <a href="{{ route('products.index', app()->getLocale()) }}"
                 class="button main-slider-button">@lang('welcome.slider2_btn')</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="slider-item">
      <div class="main-slider-img" style="background-image: url(' {{ asset('img/slider3.jpg') }} ')">
        <div class="main-slider-overlay">
          <div class="container-fluid">
            <div class="main-slider-content">
              <h1 class="main-slider-heading">@lang('welcome.slider3_heading')</h1>
              <p class="main-slider-text">@lang('welcome.slider3_text')</p>
              <a href="/contact" class="button main-slider-button">@lang('welcome.slider3_btn')</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <section class="features">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg">
          <div class="feature">
            <div class="feature-icon">
              <svg viewBox="0 0 24 24">
                <path d="M9,19V13H11L13,13H15V19H18V10.91L12,4.91L6,10.91V19H9M12,2.09L21.91,12H20V21H13V15H11V21H4V12H2.09L12,2.09Z" />
              </svg>
            </div>
            <div class="feature-content">
              <h3 class="heading-underline">@lang('welcome.feature1_heading')</h3>
              <p class="feature-paragraph">@lang('welcome.feature1_text')</p>
            </div>
          </div>
        </div>
        <div class="col-lg">
          <div class="feature">
            <div class="feature-icon">
              <svg viewBox="0 0 24 24">
                  <path d="M22.7,19L13.6,9.9C14.5,7.6 14,4.9 12.1,3C10.1,1 7.1,0.6 4.7,1.7L9,6L6,9L1.6,4.7C0.4,7.1 0.9,10.1 2.9,12.1C4.8,14 7.5,14.5 9.8,13.6L18.9,22.7C19.3,23.1 19.9,23.1 20.3,22.7L22.6,20.4C23.1,20 23.1,19.3 22.7,19Z" />
              </svg>
            </div>
            <div class="feature-content">
              <h3 class="heading-underline">@lang('welcome.feature2_heading')</h3>
              <p class="feature-paragraph">@lang('welcome.feature2_text')</p>
            </div>
          </div>
        </div>
        <div class="col-lg">
          <div class="feature">
            <div class="feature-icon">
              <svg viewBox="0 0 24 24">
                  <path d="M13,4.2V3C13,2.4 12.6,2 12,2V4.2C9.8,4.6 9,5.7 9,7C9,7.8 9.3,8.5 9.8,9L4,19.9V22L6.2,20L11.6,10C11.7,10 11.9,10 12,10C13.7,10 15,8.7 15,7C15,5.7 14.2,4.6 13,4.2M12.9,7.5C12.7,7.8 12.4,8 12,8C11.4,8 11,7.6 11,7C11,6.8 11.1,6.7 11.1,6.5C11.3,6.2 11.6,6 12,6C12.6,6 13,6.4 13,7C13,7.2 12.9,7.3 12.9,7.5M20,19.9V22H20L17.8,20L13.4,11.8C14.1,11.6 14.7,11.3 15.2,10.9L20,19.9Z" />
              </svg>
            </div>
            <div class="feature-content">
              <h3 class="heading-underline">@lang('welcome.feature3_heading')</h3>
              <p class="feature-paragraph">@lang('welcome.feature3_text')</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="testimonial" style="background-image: url('{{ asset('img/testimonial.jpeg') }}')">
    <div class="testimonial-overlay">
      <div class="container-fluid">
        <h3 class="heading-underline heading-underline_center testimonial-heading">
          @lang('welcome.testimonial_title')
        </h3>

        <div class="slider testimonial-slider">
          <div class="slider-item">
            <p class="testimonial-paragraph">@lang('welcome.testimonial1_text')</p>
            <h5 class="testimonial-author">@lang('welcome.testimonial1_auth')</h5>
          </div>
          <div class="slider-item">
            <p class="testimonial-paragraph">@lang('welcome.testimonial2_text')</p>
            <h5 class="testimonial-author">@lang('welcome.testimonial2_auth')</h5>
          </div>
          <div class="slider-item">
            <p class="testimonial-paragraph">@lang('welcome.testimonial3_text')</p>
            <h5 class="testimonial-author">@lang('welcome.testimonial3_auth')</h5>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div class="product-slider-wrapper">
    <div class="container-fluid">
      <h3 class="heading-underline heading-underline_center">
        @lang('welcome.our_products')
      </h3>
      @include("partials.product-slider")
    </div>
  </div>

@endsection

