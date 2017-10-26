@extends('layouts.app')

@section('content')
<div class="page-title-wrapper">
  <h1 class="page-title text-center heading-underline heading-underline_center">@lang('product/index.page_title')</h1>
</div>

<div class="container-fluid">

  <h2>{{$product->name}}</h2>

  <img src="{{ asset($product->imgUrl) }}" alt="">

  <p>{{$product->description}}</p>

</div>
@endsection
