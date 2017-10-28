@extends('layouts.app')

@section('content')
<div class="page-title-wrapper" style="background-image: url('{{ asset('img/header-bottom-bg.jpg') }}')">
  <h1 class="page-title text-center heading-underline heading-underline_center">@lang('product/index.page_title')</h1>
</div>

<div class="product-index-page">
  <div class="container-fluid">
    <div class="products">
      @foreach( $products as $product )
        <a href="{{ route('products.show', [app()->getLocale(), $product->id]) }}" class="product-card">
          <img src="{{ asset($product->imgUrl) }}" alt="product {{ $product->name }}">
          <h5 class="product-name">{{ $product->name }}</h5>
          <div class="button product-see-more">More</div>
        </a>
      @endforeach
    </div>

    {{ $products->links() }}
  </div>
</div>
@endsection
