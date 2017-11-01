@extends('layouts.page')

@section('page-title')
  Create product
@endsection

@section('page-content')
<div class="product-create-page">
  <div class="container-fluid">

    <form action="{{ route('products.store', app()->getLocale()) }}" method="post" enctype="multipart/form-data">
      {{ csrf_field() }}
      <div class="row">
        <div class="col-md-4">
          <input type="file" id="image" name="img" required>
          <img id="image-preview" src="" alt="">
        </div>
        <div class="col-md-8">
          <input type="text" class="input" name="name" placeholder="Name of product" required>
          <textarea class="textarea" name="description" cols="30" rows="10" placeholder="Description of product" required></textarea>
          <button class="button">Create</button>
        </div>
      </div>

    </form>

  </div>
</div>
@endsection
