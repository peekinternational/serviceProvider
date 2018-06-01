<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Service Provider</title>

    <!-- <link rel="stylesheet" href="{{asset('css/app.css')}}"> -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/font-awesome.css')}}">
    <link rel="stylesheet" href="{{url('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">
    <script src="{{asset('js/app.js')}}" charset="utf-8"></script>
    <!-- <script src="{{asset('js/script.js')}}" charset="utf-8"></script> -->
    <!-- <script src="{{asset('js/jquery-3.3.1slim.min.js')}}" charset="utf-8"></script> -->
    <script src="{{url('https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js')}}"></script>
    <script src="{{url('https://maps.googleapis.com/maps/api/js?key=AIzaSyB1RaWWrKsEf2xeBjiZ5hk1gannqeFxMmw&libraries=places&callback=initAutocomplete')}}" async defer></script>
<link rel="stylesheet" href="{{url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css')}}">

    <link rel="shortcut icon" type="image/x-icon" href="{{url('img/favicon.png')}}" />

    <!-- CSS
    ================================================== -->

    <!-- <link rel="stylesheet" href="{{url('plugins/themefisher-font/style.css')}}"> -->
    <!-- Lightbox.min css -->
    <link rel="stylesheet" href="{{url('plugins/lightbox2/dist/css/lightbox.min.css')}}">

    <!-- Main Stylesheet -->

    <!-- Colors -->
    <link rel="stylesheet" type="text/css" href="{{url('css/colors/green.css')}}" title="green">
    <link type="text/css" rel="stylesheet" href="{{url('https://fonts.googleapis.com/css?family=Roboto:300,400,500')}}">
  </head>
  <body>
  @include('inc.navbar')

    <div class="" style="margin-top:50px;">

      @include('inc.messages')

      <!-- main content here --> 
  @yield('content')
            <!-- Footer here -->
 @include('inc.footer')
    </div>

  </body>
</html>
