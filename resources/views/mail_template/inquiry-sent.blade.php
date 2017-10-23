@extends('master')

@section('header')
  <style type="text/css">
    body{
      background: white; /* For browsers that do not support gradients */
      background: -webkit-linear-gradient(bottom, #000000 , #434343); /* For Safari 5.1 to 6.0 */
      background: -o-linear-gradient(bottom, #000000, #434343); /* For Opera 11.1 to 12.0 */
      background: -moz-linear-gradient(bottom, #000000, #434343); /* For Firefox 3.6 to 15 */
      background: linear-gradient(to top, #000000 , #434343); /* Standard syntax */
    }
  </style>
@stop

@section('content')

  <div class="clearfix"><br></div>

  <div class="row">
    <div class="container">

      <div class="card z-depth-3" style="background: rgba(255, 255, 255, 0.1); ">
        <div class="card-content">
          <h4 class="highlight">Inquiry Sent</h4>
          <div class="divider"></div><br>

          <p class="white-text">
            We'll get in touch with you as soon as possible.
          </p>
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
      $('.button-collapse').sideNav();
    });

  </script>

  <!-- Particle-JS -->
  {{-- <script src="js/particles.min.js"></script>
  <script src="js/particles-settings.js"></script> --}}
@stop
