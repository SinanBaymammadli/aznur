@extends('layouts.app')

@section('content')
<div class="page-title-wrapper">
  <h1 class="page-title heading-underline heading-underline_center">@lang('product/index.page_title')</h1>
</div>

<div class="container-fluid">

  <div class="product-show-page">
    <h5 class="product-name heading-underline heading-underline_center">{{ $product->name }}</h5>
    <div class="row">
      <div class="col-md-4">
        <div class="product-card">
          <img src="{{ asset($product->imgUrl) }}" alt="product {{ $product->name }}">
        </div>
      </div>
      <div class="col-md-8">
        <p>{{ $product->description }}</p>
      </div>
    </div>
  </div>
</div>

<div class="product-slider-wrapper">
  <div class="container-fluid">
    <h3 class="heading-underline heading-underline_center">Our products</h3>
    @include("partials.product-slider")
  </div>
</div>

@endsection
