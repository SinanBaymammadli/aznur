@extends('layouts.app')

@section('content')
<div class="page-title-wrapper">
  <h1 class="page-title text-center heading-underline heading-underline_center">@lang('product/index.page_title')</h1>
</div>

<?php
  $locale = app()->getLocale();
?>

<div class="container-fluid">
  <div class="products">
    @foreach( $products as $product )
      <a href="{{ route('products.show', [$locale, $product->id]) }}" class="product">
        <h5 class="product-name">{{ $product->name }}</h5>
        <img src="{{ asset($product->imgUrl) }}" alt="">
        <!-- <p>{{ $product->description }}</p> -->
      </a>
    @endforeach
  </div>

  {{ $products->links() }}
</div>
@endsection
