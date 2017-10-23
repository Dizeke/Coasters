@extends('master')

@section('header')
  <style type="text/css">
    body {
      background-image: url('{{ asset('img/bg-fact.jpg') }}');
      background-size: cover;
    }
  </style>
@stop

@section('content')

  <!-- Facts -->
  {{-- <div class="container"> --}}
    {{-- @include('facts.facts_desktop')
    @include('facts.facts_mobile') --}}
    @include('facts.facts_non_categorized')
  {{-- </div> --}}

  <div class="clearfix"></div>

@stop

@section('scripts')
  <!-- Jquery -->
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

  <!-- Materialize > Materialboxed -->
  {{-- <script type="text/javascript" src="js/materialize.min.js"></script> --}}
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>

  <script type="text/javascript">
    $(document).ready(function() {
      $('#navFacts').addClass('active');
    });
  </script>

  <script type="text/javascript">
    $(document).ready(function(){
      // var previousFacts = '.divGCI';
      // var currentFacts = '.divGCI';

      $('#navFacts').addClass('active');

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

      //GCI Click
      // $('.btnGCI').click(function(){
      //   $.fn.btnGCI_click();
      // });

      //AG Click
      // $('.btnAG').click(function(){
      //   $.fn.btnAG_click();
      // });

      //HI Click
      // $('.btnHI').click(function(){
      //   $.fn.btnHI_click();
      // });

      //MMP Click
      // $('.btnMMP').click(function(){
      //   $.fn.btnMMP_click();
      // });

      // $.fn.btnGCI_click = function(){
      //   if(previousFacts != '.divGCI'){
      //     $.fn.hidePreviousFacts();
      //     $('.btnGCI-holder').animateCss('pulse', false);
      //
      //     setTimeout(function(){
      //       $('.divGCI').show();
      //       $('.divGCI').animateCss('fadeIn', false);
      //     }, 900);
      //
      //     currentFacts = '.divGCI';
      //     $.fn.startMovingCounter();
      //     previousFacts = '.divGCI';
      //   }
      // }
      //
      // $.fn.btnAG_click = function(){
      //   if(previousFacts != '.divAG'){
      //     $.fn.hidePreviousFacts();
      //     $('.btnAG-holder').animateCss('bounceIn', false);
      //
      //     setTimeout(function(){
      //       $('.divAG').show();
      //       $('.divAG').animateCss('fadeIn', false);
      //     }, 900);
      //
      //     currentFacts = '.divAG';
      //     $.fn.startMovingCounter();
      //     previousFacts = '.divAG';
      //   }
      // }
      //
      // $.fn.btnHI_click = function(){
      //   if(previousFacts != '.divHI'){
      //     $.fn.hidePreviousFacts();
      //     $('.btnHI-holder').animateCss('bounceIn', false);
      //
      //     setTimeout(function(){
      //       $('.divHI').show();
      //       $('.divHI').animateCss('fadeIn', false);
      //     }, 900);
      //
      //     currentFacts = '.divHI';
      //     $.fn.startMovingCounter();
      //     previousFacts = '.divHI';
      //   }
      // }
      //
      // $.fn.btnMMP_click = function(){
      //   if(previousFacts != '.divMMP'){
      //     $.fn.hidePreviousFacts();
      //     $('.btnMMP-holder').animateCss('bounceIn', false);
      //
      //     setTimeout(function(){
      //       $('.divMMP').show();
      //       $('.divMMP').animateCss('fadeIn', false);
      //     }, 900);
      //
      //     currentFacts = '.divMMP';
      //     $.fn.startMovingCounter();
      //     previousFacts = '.divMMP';
      //   }
      // }
      //
      // //Hides previous facts
      // $.fn.hidePreviousFacts = function(){
      //   $(previousFacts).animateCss('fadeOut', true);
      // };

      $.fn.startMovingCounter = function(){

      // $(currentFacts + ' > .row > .col > .c100 > .count').each(function (){
        $('.count').each(function (){
          $(this).prop('Counter',0).animate({
              Counter: $(this).text()
          }, {
              duration: 2500,
              easing: 'swing',
              step: function (now) {
                $(this).text(Math.ceil(now));
                var currentNumber = $(this).text();
                $(this).text(Math.ceil(now) + "%");

                var parentId = $(this).closest('div').attr('id');

                if(parentId == 'fact1'){
                  $(this).closest('div').attr('class', 'p' + currentNumber + ' c100 cgreen center');
                } else if(parentId == 'fact2'){
                  $(this).closest('div').attr('class', 'p' + currentNumber + ' c100 cred2 center');
                } else if(parentId == 'fact3'){
                  $(this).closest('div').attr('class', 'p' + currentNumber + ' c100 camber4 center');
                } else if(parentId == 'fact4'){
                  $(this).closest('div').attr('class', 'p' + currentNumber + ' c100 cblue2 center');
                } else if(parentId == 'fact5'){
                  $(this).closest('div').attr('class', 'p' + currentNumber + ' c100 cteal2 center');
                } else if(parentId == 'fact6'){
                  $(this).closest('div').attr('class', 'p' + currentNumber + ' c100 cbgrey2 center');
                } else if(parentId == 'fact7'){
                  $(this).closest('div').attr('class', 'p' + currentNumber + ' c100 cdorange2 center');
                } else if(parentId == 'fact8'){
                  $(this).closest('div').attr('class', 'p' + currentNumber + ' c100 cred4 center');
                }
              }
          });
        });
      };

      $.fn.startMovingCounter();

      //Side Navigation
      $('.button-collapse').sideNav();

      // $('.divGCI').animateCss('pulse', false);
      // $('.btnGCI-holder').animateCss('bounceIn', false);
    });
  </script>

  <!-- Particle-JS -->
  {{-- <script src="js/particles.min.js"></script>
  <script src="js/particles-settings.js"></script> --}}
@stop
