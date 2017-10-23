<!doctype html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Coasters.ph</title>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css"  media="screen,projection"/>
    {{-- <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/> --}}

    <!-- Custom Font -->
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet"> 
    {{-- <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet"> --}}
    {{-- <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet"> --}}
    {{-- <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet"> --}}

    <!-- Custom CSS -->
    {{-- <link rel="stylesheet" type="text/css" href="css/jquery.pagepiling.css" /> --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/animate.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/circle.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/custom.css') }}" />
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" /> --}}

    @yield('header')
  </head>

  <body> <!-- id="particles-js" -->
    <main>
      @include('navigations.nav_user')

      @yield('content')
    </main>

    @include('footer')

    @yield('scripts')
  </body>
</html>
