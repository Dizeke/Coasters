@extends('master')

@section('header')
  <style type="text/css">
    body {
      background-image: url('{{ asset('img/bg-home.jpg') }}');
      background-size: cover;
    }
  </style>
@stop

@section('content')
  <div class="" style="width: 95%; padding-left: 5%;">
    <div class="row">

      <div class="clearfix"><br><br></div>

      <div class="col s12">
        <div class="card z-depth-3" style="background: rgba(0, 0, 0, 0.8); border-radius: 8px;">

          <div class="card-content">

            {{-- Desktop View --}}
            <div class="row hide-on-small-only">

              <div class="col s12 animated bounceIn">
                <div class="carousel carousel-slider" style="width: 50%; margin-left: 25%;">
                  <a class="carousel-item" href="#"><img class="responsive-img" src="img/coaster1.png" style="height: 300px;"></a>
                  <a class="carousel-item" href="#"><img class="responsive-img" src="img/coaster2.png" style="height: 300px;"></a>
                  <a class="carousel-item" href="#"><img class="responsive-img" src="img/coaster4.png" style="height: 300px;"></a>
                  <a class="carousel-item" href="#"><img class="responsive-img" src="img/coaster5.png" style="height: 300px;"></a>
                </div>

                <br>
              </div>

              <div class="col s12">

                <h4 class="highlight center-align animated pulse"><b>Why advertise with Coasters.ph?</b></h4>
                <blockquote class="animated fadeIn flow-text white-text">
                Coasters.ph offers companies a unique advertising concept. Our concept is target market oriented, noticed by the majority and very affordable.
                <span class="standout">Don't spend a lot of money on billboards, social media campaigns, flyers and posters when you can target your specific customers in an easy and affordable way.</span>
                </blockquote>

              </div>

            </div>

            {{-- Mobile View --}}
            <div class="row hide-on-med-and-up">
              <div class="col s12 m8">

                <h4 class="highlight center-align animated pulse">
                  <b>Why advertise with Coasters.ph?</b>
                </h4>
                <blockquote class="animated fadeIn white-text">
                  Coasters.ph offers companies a unique advertising concept. Our concept is target market oriented, noticed by the majority and very affordable.
                  <b style="color: #b388ff !important;">Don’t spend a lot of money on billboards, social media campaigns, flyers and posters when you can target your specific customers in an easy and affordable way.</b>
                </blockquote>

              </div>

              <div class="col s12 m4 animated bounceIn">
                <div class="carousel carousel-slider">
                  <a class="carousel-item" href="#"><img class="responsive-img" src="img/coaster1.png"></a>
                  <a class="carousel-item" href="#"><img class="responsive-img" src="img/coaster2.png"></a>
                  <a class="carousel-item" href="#"><img class="responsive-img" src="img/coaster4.png"></a>
                  <a class="carousel-item" href="#"><img class="responsive-img" src="img/coaster5.png"></a>
                </div>
                <br>
              </div>
            </div>

            <div class="col s12">

              <ul class="collapsible white-text" data-collapsible="accordion" style="border-radius: 8px;">
                <li>
                  <div class="collapsible-header" style="background: rgba(0, 0, 0, 0.7); border-radius: 8px;">
                    <i id="readMoreIcon" class="material-icons">expand_more</i><p id="readMoreLabel">Read More..</p>
                  </div>
                  <div class="collapsible-body" style="border-radius: 8px;">
                    {{-- Desktop Only --}}
                    <span class="flow-text hide-on-small-only">
                      Advertising your business through coasters.ph means you can target your customers in specific locations and your advertisement will be seen by hundreds of thousands of people weekly. The great thing about this is that customers in hotels, restaurants, bars and clubs will look at the coasters 90% of the time. Meaning your advertisement will be noticed more and your company or brand will become more popular.
                    </span>

                    {{-- Mobile Only --}}
                    <span class="hide-on-med-and-up">
                      Advertising your business through coasters.ph means you can target your customers in specific locations and your advertisement will be seen by hundreds of thousands of people weekly. The great thing about this is that customers in hotels, restaurants, bars and clubs will look at the coasters 90% of the time. Meaning your advertisement will be noticed more and your company or brand will become more popular.
                    </span>
                  </div>
                </li>
              </ul>
            </div>

            <div class="clearfix"></div>

          </div> <!-- End of Card Content -->

          <div class="card-action right-align">
            <a href="/facts" style="color: #b388ff;">
              Facts
            </a>

            <a href="/about-us" style="color: #b388ff;">
              About Us
            </a>
          </div>

        </div> <!-- End of Card -->
      </div> <!-- End of col s12 -->

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
          autoplay();
        }, 2500);
      }

      $('.collapsible').collapsible({
        accordion: true, // A setting that changes the collapsible behavior to expandable instead of the default accordion style
        onOpen: function(el) {
          $('#readMoreIcon').text('expand_less');
          $('#readMoreLabel').text('Hide');
        }, // Callback for Collapsible open
        onClose: function(el) {
          $('#readMoreIcon').text('expand_more');
          $('#readMoreLabel').text('Read More..');
        } // Callback for Collapsible close
      });

      // Show More Script
      // $('#sectHomeReadMoreBtn').click(function(){
      //   $('#sectHomeReadMoreBtnHolder').animateCss('fadeOut', true);
      //   $('#sectHomeReadMore').show();
      //   $('#sectHomeReadMore').animateCss('fadeIn', false);
      // });
      //
      // $('#sectHomeHideReadMoreBtn').click(function(){
      //   $('#sectHomeReadMoreBtnHolder').show();
      //   $('#sectHomeReadMoreBtnHolder').animateCss('fadeIn', false);
      //   $('#sectHomeReadMore').animateCss('fadeOut', true);
      // });
    });
  </script>

  <!-- Particle-JS -->
  {{-- <script src="js/particles.min.js"></script>
  <script src="js/particles-settings.js"></script> --}}
@stop
