@extends('layouts.app')

@section('content')

<div class="page-title-wrapper">
  <h1 class="page-title text-center heading-underline heading-underline_center">
    Reset Password
  </h1>
</div>

<div class="container-fluid">
  <div class="password-reset-page">
    @if (session('status'))
      <div class="alert alert-success">
          {{ session('status') }}
      </div>
    @endif

    <form method="POST" action="{{ route('password.email') }}">
      {{ csrf_field() }}

      <div class="form-group">
        <input id="email" type="email" class="input" name="email" placeholder="E-Mail Address" value="{{ old('email') }}" required>

        @if ($errors->has('email'))
          <span class="help-block">
              <strong>{{ $errors->first('email') }}</strong>
          </span>
        @endif
      </div>

      <button type="submit" class="button button-full">
          Send Password Reset Link
      </button>
    </form>
  </div>
</div>

@endsection
