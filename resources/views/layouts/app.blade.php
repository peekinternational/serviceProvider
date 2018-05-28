<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Service Provider</title>

    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">

    <script src="{{asset('js/app.js')}}" charset="utf-8"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="{{asset('js/jquery.min.js')}}" charset="utf-8"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB1RaWWrKsEf2xeBjiZ5hk1gannqeFxMmw&libraries=places&callback=initAutocomplete" async defer></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png" />

    <!-- CSS
    ================================================== -->

    <link rel="stylesheet" href="plugins/themefisher-font/style.css">
    <!-- Lightbox.min css -->
    <link rel="stylesheet" href="plugins/lightbox2/dist/css/lightbox.min.css">

    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Colors -->
    <link rel="stylesheet" type="text/css" href="css/colors/green.css" title="green">
    <!-- <link rel="stylesheet" type="text/css" href="css/colors/red.css" title="light-red">
    <link rel="stylesheet" type="text/css" href="css/colors/blue.css" title="blue">
    <link rel="stylesheet" type="text/css" href="css/colors/light-blue.css" title="light-blue">
    <link rel="stylesheet" type="text/css" href="css/colors/yellow.css" title="yellow">
    <link rel="stylesheet" type="text/css" href="css/colors/light-green.css" title="light-green"> -->
    <link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500">
  </head>
  <body>
  @include('inc.navbar')

    <div class="" style="margin-top:50px;">

      @include('inc.messages')
  @yield('content')
    </div>

  </body>
</html>
