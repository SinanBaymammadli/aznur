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
        <div class="text-center">
          <input type="file" id="image" name="img">
          <img id="image-preview" src="{{ asset('products/' . $product->imgUrl) }}" alt="">
        </div>
      </div>
      <div class="col-md-8">
        <label>Name</label>
        <input type="text" class="input"
               name="name" placeholder="Name of product"
               required value="{{ $product->name }}">
        <div class="editor">
          <label>Description</label>
          <textarea id="editor" class="textarea" name="description"
                  cols="30" rows="10" placeholder="Description of product">
            {{ $product->description }}
          </textarea>
        </div>
        <button class="button">Edit</button>
      </div>
    </div>

  </form>

  </div>
</div>

<script src="https://cdn.ckeditor.com/ckeditor5/1.0.0-alpha.2/classic/ckeditor.js"></script>
<script>
  ClassicEditor
    .create( document.querySelector( '#editor' ) )
    .then( editor => {
      console.log( editor );
    })
    .catch( error => {
      console.error( error );
    });
</script>
@endsection
