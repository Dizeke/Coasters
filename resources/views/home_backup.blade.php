@extends('master')

@section('content')
  <div class="container">
    <div class="row">

      <div class="col s12 center-align">
        <img src="img/logo.svg" class="center-align responsive-img" style="max-width: 256px">
      </div>
      <div class="clearfix"></div>

      <div class="col s12 m5 push-m7 animated bounceIn">
        <div class="carousel carousel-slider">
          <a class="carousel-item" href="#"><img class="responsive-img" src="img/coaster1.png"></a>
          <a class="carousel-item" href="#"><img class="responsive-img" src="img/coaster2.png"></a>
          <a class="carousel-item" href="#"><img class="responsive-img" src="img/coaster3.png"></a>
          <a class="carousel-item" href="#"><img class="responsive-img" src="img/jrss.png"></a>
          <a class="carousel-item" href="#"><img class="responsive-img" src="img/coaster4.png"></a>
          <a class="carousel-item" href="#"><img class="responsive-img" src="img/coaster5.png"></a>
        </div>
        {{-- <img src="img/img-home.png" class="materialboxed responsive-img"> --}}
      </div>

      <div class="col s12 m7 pull-m5">
        <h4 class="highlight center-align animated pulse"><b>We put your brand right on your customer’s tabletop</b></h4>
        <blockquote class="animated fadeIn flow-text">
          A unique table top advertising concept that has proved itself very valuable in Europe. We now have brought it to Asia!
        </blockquote>

        <p id="sectHomeReadMoreBtnHolder" class="center-align">
          <button type="button" id="sectHomeReadMoreBtn" class="btn white grey-text text-darken-3">
            See more..
          </button>
        </p>

        <div style="display: none;" id="sectHomeReadMore">
          <p>On one side of the coaster, the logo of our partnered businesses and
          establishments will be printed, while on the other side will be your
          advertisement.</p>

          <p>We give these coasters to partnered hotels, restaurants, clubs, and
          bars throughout the Philippines.
          This means you can now put your brand right in the hands of your customers. </p>
        </div>
      </div>

      <div class="col s12">
        <div class="clearfix"><br><br></div>
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

    $(document).ready(function(){
      $('#navHome').addClass('active');

      // Side Navigation
      $('.button-collapse').sideNav();

      //Materialbox
      $('.materialboxed').materialbox();

      // Carousel
      $('.carousel.carousel-slider').carousel({fullWidth: true});
      autoplay()
      function autoplay() {
        setTimeout(function() {
          $('.carousel').carousel('next');
          autoplay;
        }, 4000);
      }

      // Show More Script
      $('#sectHomeReadMoreBtn').click(function(){
        $('#sectHomeReadMoreBtnHolder').animateCss('fadeOut', true);
        $('#sectHomeReadMore').show();
        $('#sectHomeReadMore').animateCss('fadeIn', false);
      });
    });
  </script>

  <!-- Particle-JS -->
  {{-- <script src="js/particles.min.js"></script>
  <script src="js/particles-settings.js"></script> --}}
@stop
