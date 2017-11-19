@extends('layouts.page')

@section('meta')
  <meta name="keywords" content="cable,kabel">
@endsection

@section('title')
  @lang('contact.page_title')
@endsection

@section('page-title')
  @lang('contact.page_title')
@endsection

@section('page-content')
<div class="contact-page">
  <div class="container-fluid">

    <div class="row">
      <div class="col-md contact-col">
        <h5 class="heading-underline contact-heading">
          @lang('contact.contact_info')
        </h5>

        <form action="{{ route('sendEmail', app()->getLocale()) }}" class="contact-form"
              method="post">
          {{ csrf_field() }}
          <div class="row">
            <div class="col-md">
              <input type="text" class="input" name="name" placeholder="@lang('contact.name_plch')" required>
            </div>
            <div class="col-md">
              <input type="email" class="input" name="email" placeholder="@lang('contact.email_plch')" required>
            </div>
          </div>

          <div class="row">
            <div class="col">
              <textarea class="textarea" name="message" placeholder="@lang('contact.message_plch')"
                        rows="10" required ></textarea>
            </div>
          </div>

          <button type="submit" class="button">
            @lang('contact.send_btn')
          </button>
        </form>
      </div>
      <div class="col-md contact-col">
        <h5 class="heading-underline contact-heading">
          @lang('contact.location')
        </h5>

        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1291.130807610614!2d50.19305265804861!3d40.43045903652265!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDDCsDI1JzQ5LjciTiA1MMKwMTEnMzguOSJF!5e1!3m2!1sen!2s!4v1508974074791" width="100%" height="360" frameborder="0" style="border:0" allowfullscreen></iframe>

        <!-- <div class="map" id="map"></div>
        <script>
          function initMap() {
            var uluru = {lat: 40.430463, lng: 50.194147};
            var map = new google.maps.Map(document.getElementById('map'), {
              zoom: 18,
              center: uluru
            });
            var marker = new google.maps.Marker({
              position: uluru,
              map: map
            });
          }
        </script>
        <script async defer
                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDAR_edatVNub9z_FuwP5OAl0q98-L5rCQ&callback=initMap">
        </script> -->
      </div>
    </div>
  </div>
</div>
@endsection

