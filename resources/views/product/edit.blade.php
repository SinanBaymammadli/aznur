@extends('layouts.page')

@section('page-title')
  edit this product
@endsection

@section('page-content')
<div class="product-edit-page">
  <div class="container-fluid">

    <form action="">
      <input type="text" class="input" name="name" placeholder="Name of product">
      <textarea class="textarea" name="description" cols="30" rows="10" placeholder="Description of product"></textarea>

      <button class="button">Edit</button>
    </form>

  </div>
</div>
@endsection
