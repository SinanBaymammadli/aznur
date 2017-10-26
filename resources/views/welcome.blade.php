@extends('layouts.app')

@section('content')

<div id="welcomeCarousel" class="carousel slide" data-ride="carousel" data-interval="10000">
  <ol class="carousel-indicators">
    <li data-target="#welcomeCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#welcomeCarousel" data-slide-to="1"></li>
    <li data-target="#welcomeCarousel" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="carousel-img">
        <div class="container-fluid">
          <div class="carousel-content">
            <h1 class="carousel-heading">We are the best construction experts</h1>
            <p class="carousel-text">Lars Focke specialises in capturing patterns and turning them</p>
            <button class="button carousel-button">See our lastest work</button>
          </div>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="carousel-img">
        <div class="container-fluid">
          <div class="carousel-content">
            <h1 class="carousel-heading">We are the best construction experts</h1>
            <p class="carousel-text">Lars Focke specialises in capturing patterns and turning them</p>
            <button class="button carousel-button">See our lastest work</button>
          </div>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="carousel-img">
        <div class="container-fluid">
          <div class="carousel-content">
            <h1 class="carousel-heading">We are the best construction experts</h1>
            <p class="carousel-text">Lars Focke specialises in capturing patterns and turning them</p>
            <button class="button carousel-button">See our lastest work</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
  </a> -->
</div>

<div class="container-fluid">

  <h2>@lang("home.welcome")</h2>

</div>
@endsection

