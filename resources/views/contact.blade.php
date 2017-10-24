@extends('layouts.app')

@section('content')
<div class="page-title-wrapper">
  <img class="d-block w-100" src="{{ asset('img/header-bottom-bg.jpg')}}" alt="">
  <h1 class="page-title font-weight-bold">
    Contact us
    <span class="title-seperator"></span>
  </h1>
</div>

<div class="contact-page">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md">
        <h5>
          Contact us for a quick quote or call us – 555 87895 90
          <span class="title-seperator left"></span>
        </h5>

        <form>
          <div class="row">
            <div class="form-group col-md">
              <input type="text" class="form-control" placeholder="Your name">
            </div>
            <div class="form-group col-md">
              <input type="email" class="form-control" placeholder="Your email">
            </div>
          </div>

          <div class="form-group">
            <textarea class="form-control" placeholder="Your message"></textarea>
          </div>

          <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        <!-- <form>
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form> -->
      </div>
      <div class="col-md">
        <h5>
          Qala Baku Azerbaijan.
          <span class="title-seperator left"></span>
        </h5>
      </div>
    </div>
  </div>
</div>
@endsection

