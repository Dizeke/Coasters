@extends('master')

@section('header')
  <style type="text/css">
    body {
      background-image: url('{{ asset('img/bg-contact.jpg') }}');
      background-size: cover;
    }
  </style>
@stop

@section('content')
  <form method="POST" action="contact-us/send">
    {{ csrf_field() }}

    <div class="row">
      <div class="container">

        <br>

        <div class="card" style="background: rgba(255, 255, 255, 1); border-radius: 8px;">
          <div class="card-content">

            <h4 class="center-align highlight"><b>Get In Touch</b></h4>
            <br>

            <div class="row">
              <div class="col s10 offset-s1 m8 offset-m2">
                <div class="input-field">
                  <input type="text" name="company_name" class="validate" maxlength="64" minlength="2" required>
                  <label>Company Name</label>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col s10 offset-s1 m4 offset-m2">
                <div class="input-field">
                  <input type="text" name="fname" class="validate" maxlength="64" minlength="2" required>
                  <label>First Name</label>
                </div>
              </div>

              <div class="col s10 offset-s1 m4">
                <div class="input-field">
                  <input type="text" name="lname" class="validate" maxlength="64" minlength="2" required>
                  <label>Last Name</label>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col s10 offset-s1 m4 offset-m2">
                <div class="input-field">
                  <input type="email" name="email" class="validate" maxlength="255" required>
                  <label>Email</label>
                </div>
              </div>

              <div class="col s10 offset-s1 m4">
                <div class="input-field">
                  <input type="number" name="phone" class="validate no-spinners" maxlength="13" minlength="7" required>
                  <label>Phone</label>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col s10 offset-s1 m8 offset-m2">
                <div class="input-field">
                <textarea name="comment" class="materialize-textarea validate" maxlength="2048" data-length="2048" minlength="8" required></textarea>
                <label>Comment</label>
                </div>
              </div>
            </div>

          </div>

          <div class="card-action">
            <div class="col s10 offset-s1 m4 offset-m2">
              <p><button type="submit" class="btn waves-effect waves-light grey darken-2">
                Send <i class="material-icons right">send</i>
              </button></p>
            </div>

            <div class="col s10 offset-s1 m6">
              <p><a href="/download/brochure"><button type="button" class="btn waves-effect waves-light grey darken-2">
                Download Brochure <i class="material-icons left">file_download</i>
              </button></a></p>
            </div>

            <div class="clearfix"></div>
          </div>
        </div>

      </div>
    </div>
  </form>

@stop

@section('scripts')
  <!-- Jquery -->
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

  <!-- Materialize > Materialboxed -->
  {{-- <script type="text/javascript" src="js/materialize.min.js"></script> --}}
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>

  <script type="text/javascript">
    $(document).ready(function() {
      $('#navContactUs').addClass('active');
      $('.button-collapse').sideNav();
    });

  </script>

  <!-- Particle-JS -->
  {{-- <script src="js/particles.min.js"></script>
  <script src="js/particles-settings.js"></script> --}}
@stop
