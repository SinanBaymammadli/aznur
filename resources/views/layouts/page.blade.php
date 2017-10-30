@extends('layouts.app')

@section('content')
  <div class="page-title-wrapper" style="background-image: url('{{ asset('img/header-bottom-bg.jpg') }}')">
    <h1 class="page-title heading-underline heading-underline_center">@yield('page-title')</h1>
  </div>

  @yield('page-content')
@endsection
