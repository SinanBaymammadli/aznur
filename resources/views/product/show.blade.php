@extends('layouts.page')

@section('page-title')
  @lang('product/index.page_title')
@endsection

@section('page-content')
<div class="product-show-page">
  <div class="container-fluid">

    @auth
      <div class="actions">
        <a href="{{ route('products.edit', [app()->getLocale(), $product->id] ) }}" class="button">
          Edit
        </a>

        <form action="{{ route('products.destroy', [app()->getLocale(), $product->id] ) }}" method="POST" id="product-delete-form">
          {{ method_field('DELETE') }}
          {{ csrf_field() }}

          <button class="button" id="product-delete-btn">Delete</button>
        </form>
      </div>
    @endauth

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
