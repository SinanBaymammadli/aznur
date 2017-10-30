@extends('layouts.page')

@section('page-title')
  Reset Password
@endsection

@section('page-content')
<div class="container-fluid">
  <div class="register-page">
    <form class="form-horizontal" method="POST" action="{{ route('password.request') }}">
      {{ csrf_field() }}
      <input type="hidden" name="token" value="{{ $token }}">

      <div class="form-group">
        <input id="email" type="email" class="input" name="email" placeholder="E-Mail Address" value="{{ $email or old('email') }}" required>
        @if ($errors->has('email'))
            <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif
      </div>

      <div class="form-group">
        <input id="password" type="password" class="input" name="password" placeholder="Password" required>
        @if ($errors->has('password'))
            <span class="help-block">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
        @endif
      </div>
      <div class="form-group">
        <input id="password-confirm" type="password" class="input" name="password_confirmation" placeholder="Confirm Password" required>
      </div>
      <div class="form-group">
        <button type="submit" class="button button-full">
          Reset Password
        </button>
      </div>
    </form>
  </div>
</div>
@endsection
