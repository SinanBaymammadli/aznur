@extends('layouts.app')

@section('content')
  <div class="page-title-wrapper" style="background-image: url('{{ asset('img/slider2.jpg') }}')">
    <div class="page-title-overlap">
      <h1 class="page-title heading-underline heading-underline_center">@yield('page-title')</h1>
    </div>
  </div>

  @yield('page-content')
@endsection
