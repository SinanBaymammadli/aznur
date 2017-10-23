@extends('layouts.app')

@section('content')
<div class="container">
  @if (Route::has('login'))
    <div class="top-right links">
      @auth
          <a href="{{ url('/home') }}">Home</a>
      @else
          <a href="{{ route('login') }}">Login</a>
          <a href="{{ route('register') }}">Register</a>
      @endauth
    </div>
  @endif

  <h2>Welcome</h2>
</div>
@endsection

