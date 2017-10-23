@extends('master')

@section('header')
  <style type="text/css">
    body {
      background-image: url('{{ asset('img/bg-about.jpg') }}');
      background-size: cover;
    }
  </style>
@stop

@section('content')
  <div class="clearfix"><br></div>

  <div class="container">

    <div class="row slideInLeftTrigger" style="visibility: hidden">
      <div class="col s12">

        <div class="card" style="background: rgba(0, 0, 0, 0.7); border-radius: 8px;">
          <div class="card-content">

            <h4 class="highlight"><b>Why advertise with coasters.ph?</b></h4>

            <blockquote class="white-text">
              Coasters.ph offers companies a unique advertising concept. Our concept is affordable
              and noticed by the majority. Don't spend a lot of money on billboards when you can target
              your customers in an easier way. This is a new marketing concept that has proved itself
              very valuable in Europe. We have now brought it to Asia!

              <br><br>

              The great thing about advertising through coasters.ph is that customers in hotels,
              restaurants, bars and clubs will look at the coasters 90% of the time. They'll look and play
              with the displayed coasters because they are in a relaxed and fun environment. When you are with family or friends people will look at the surroundings more, your ads will be
              much more noticed and your company will be recognized a lot more. We match your
              specific target market by advertising on the perfect locations for you.

              <br><br>

              Coaster.ph works together with lots of hotels, restaurants, clubs and bars throughout Asia and Europe.
              The service industry receives the coasters for free and they are required to use these coasters when they agree. This all is done in official contracts.

              <br><br>

              On 1 side of the coaster you will see the logo of the bar, hotel, restaurant or club and on
              the other side of the coaster 1 (full) or 2 (half) adverts. The companies that advertise get
              the sole right on the locations that they picked (minimum of 3 months). Through coasters.ph
              you can see with which hotels, restaurants, bars, clubs and other companies we already work with.

              <br><br>

              It is possible to have different coaster designs displayed.
            </blockquote>

          </div>
        </div>

      </div>
    </div>

    <div class="row slideInRightTrigger" style="visibility: hidden">
      <div class="col s12">

        <div class="card" style="background: rgba(0, 0, 0, 0.7); border-radius: 8px;">
          <div class="card-content">

            <h4 class="highlight"><b>How do we work?</b></h4>

            <blockquote class="white-text">
              We offer coasters from Asia and Europe.
              This allows us to offer a wide range of quality and prices to meet your specific requirements.
               We will work together with you to calculate the amounts of coasters you will be needing.
               One of our consultants from Coasters.ph will ensure that you won’t overorder.
               All our coasters have logos or advertisement on both sides to ensure your brand or business is always seen by potential clients. 
            </blockquote>

          </div>
        </div>

      </div>
    </div>

    <div class="row slideInLeftTrigger2" style="visibility: hidden">
      <div class="col s12">

        <div class="card" style="background: rgba(0, 0, 0, 0.7); border-radius: 8px;">
          <div class="card-content">

            <h4 class="highlight"><b>Our method</b></h4>

            <blockquote class="white-text">
              Coasters.ph makes sure that bars, hotels, restaurants and clubs get the coasters for free.
              We receive the number of coasters you will use and the number of client
              visits in a month. With these numbers, we can calculate an ad price for the companies that want to advert
              through us. When the advertisers agree with the picked locations for the marketing campaign we have a deal.
              We will make sure that there are enough coasters per location and that one side is advertising and on the other side the logo of the bar, hotel, restaurant or club.
            </blockquote>

          </div>
        </div>

      </div>
    </div>

  </div>

@stop

@section('scripts')
  <!-- Jquery -->
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

  <!-- Materialize > Materialboxed -->
  {{-- <script type="text/javascript" src="js/materialize.min.js"></script> --}}
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>

  <script type="text/javascript">
    $(document).ready(function() {
      //For animations
      $.fn.extend({
          animateCss: function (animationName, shouldHide) {
              var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
              this.addClass('animated ' + animationName).one(animationEnd, function() {
                  $(this).removeClass('animated ' + animationName);

                  if(shouldHide == true){
                    $(this).hide();
                  }
              });
              return this;
          }
      });

      $('#navAboutUs').addClass('active');

      //Side Navigation
      $('.button-collapse').sideNav();

      function slideInLeftContent(){
        $('.slideInLeftTrigger').css('visibility', 'visible');
        $('.slideInLeftTrigger').animateCss('slideInLeft', false);
      }
      function slideInRightContent(){
        setTimeout(function(){
          $('.slideInRightTrigger').css('visibility', 'visible');
          $('.slideInRightTrigger').animateCss('slideInRight', false);
        }, 0);
      }
      function slideInLeftContent2(){
        setTimeout(function(){
          $('.slideInLeftTrigger2').css('visibility', 'visible');
          $('.slideInLeftTrigger2').animateCss('slideInLeft', false);
        }, 0);
      }

      var options = [
        {selector: '.slideInLeftTrigger', offset: 0, callback: slideInLeftContent },
        {selector: '.slideInRightTrigger', offset: 150, callback: slideInRightContent },
        {selector: '.slideInLeftTrigger2', offset: 150, callback: slideInLeftContent2 },
      ];

      Materialize.scrollFire(options);
    });
  </script>

  <!-- Particle-JS -->
  {{-- <script src="js/particles.min.js"></script>
  <script src="js/particles-settings.js"></script> --}}
@stop
