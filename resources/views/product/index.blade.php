@extends('layouts.page')

@section('page-title')
  @lang('product/index.page_title')
@endsection

@section('page-content')
<div class="product-index-page">
  <div class="container-fluid">

    @auth
      <div class="actions">
        <a href="{{ route('products.create', app()->getLocale()) }}" class="button">
          Add new product
        </a>
      </div>
    @endauth

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
