@extends('layouts.page')

@section('page-title')
  Edit product
@endsection

@section('page-content')
<div class="product-edit-page">
  <div class="container-fluid">

  <form action="{{ route('products.update', [app()->getLocale(), $product->id ]) }}"
        method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    {{ method_field('PUT') }}
    <div class="row">
      <div class="col-md-4">
        <input type="file" id="image" name="img">
        <img id="image-preview" src="{{ asset('products/' . $product->imgUrl) }}" alt="">
      </div>
      <div class="col-md-8">
        <input type="text" class="input"
               name="name" placeholder="Name of product"
               required value="{{ $product->name }}">
        <textarea class="textarea" name="description"
                  cols="30" rows="10" placeholder="Description of product"
                  required>{{ $product->description }}</textarea>
        <button class="button">Edit</button>
      </div>
    </div>

  </form>

  </div>
</div>
@endsection
