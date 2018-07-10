<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Service Provider</title>

    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <!-- <link rel="stylesheet" href="{{asset('css/font-awesome.css')}}"> -->
    <link rel="stylesheet" href="{{url('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">
    <script src="{{asset('js/app.js')}}" charset="utf-8"></script>
     <script src="{{asset('js/custom.js')}}"></script>
<link rel="stylesheet" href="{{url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css')}}">
    <script src="{{asset('js/jquery.min.js')}}" charset="utf-8"></script>
    <link rel="shortcut icon" type="image/x-icon" href="{{url('img/favicon.png')}}" />
    <link rel="stylesheet" href="{{url('plugins/lightbox2/dist/css/lightbox.min.css')}}">
    <link rel="stylesheet" href="{{url('http://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css')}}">
    <script src="{{'http://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js'}}"></script>
    <!-- <link href="toastr.css" rel="stylesheet"/>
    <script src="toastr.js"></script> -->

    <!-- Main Stylesheet -->

    <!-- Colors -->
    <link rel="stylesheet" type="text/css" href="{{url('css/colors/green.css')}}" title="green">
    <link type="text/css" rel="stylesheet" href="{{url('https://fonts.googleapis.com/css?family=Roboto:300,400,500')}}">
  </head>
  <body>
  @include('inc.navbar')

    <div class="" style="margin-top:50px;">

      <!-- @include('inc.messages') -->

      <!-- main content here -->
  @yield('content')
            <!-- Footer here -->
 
    </div>
    @include('inc.footer')
    <script src="{{asset('js/map_script.js')}}" charset="utf-8"></script>
  </body>
</html>
