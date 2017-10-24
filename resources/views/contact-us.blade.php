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

        <div class="card" style="background: rgba(0, 0, 0, 0.9); border-radius: 8px;">
          <div class="card-content">

            <h3 class="center-align highlight">Get In Touch</h3>
            <br>

            <div class="row">
              <div class="col s10 offset-s1 m8 offset-m2">
                <div class="input-field">
                  <input type="text" name="company_name" class="validate white-text" maxlength="64" minlength="2" required>
                  <label>Company Name</label>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col s10 offset-s1 m4 offset-m2">
                <div class="input-field">
                  <input type="text" name="fname" class="validate white-text" maxlength="64" minlength="2" required>
                  <label>First Name</label>
                </div>
              </div>

              <div class="col s10 offset-s1 m4">
                <div class="input-field">
                  <input type="text" name="lname" class="validate white-text" maxlength="64" minlength="2" required>
                  <label>Last Name</label>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col s10 offset-s1 m4 offset-m2">
                <div class="input-field">
                  <input type="email" name="email" class="validate white-text" maxlength="255" required>
                  <label>Email</label>
                </div>
              </div>

              <div class="col s10 offset-s1 m4">
                <div class="input-field">
                  <input type="number" name="phone" class="validate no-spinners white-text" maxlength="13" minlength="7" required>
                  <label>Phone</label>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col s10 offset-s1 m8 offset-m2">
                <div class="input-field">
                <textarea name="comment" class="materialize-textarea validate white-text" maxlength="2048" data-length="2048" minlength="8" required></textarea>
                <label>Comment</label>
                </div>
              </div>
            </div>

          </div> <!-- End of Card Content -->

          <div class="card-action">
            <div class="col s12 m4 offset-m2">
              <p><a href="/download/brochure" style="color: #b388ff;">
                Download Brochure <i class="material-icons left">file_download</i>
              </a></p>
            </div>

            <div class="col s12 m3 offset-m1">
              <p class="center-align"><button type="submit" class="btn waves-effect waves-light grey darken-2" style="width: 100%;">
                Send <i class="material-icons right">send</i>
              </button></p>
            </div>

            <div class="clearfix"></div>
          </div> <!-- End of Card Action -->
        </div> <!-- End of Card-->

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
