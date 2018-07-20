<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Service Provider</title>
    <link rel="shortcut icon" href="http://localhost:8000/images/logo2.png">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <!-- <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}"> -->
    <link rel="stylesheet" href="{{url('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">
    <script src="{{asset('js/app.js')}}" charset="utf-8"></script>
     <script src="{{asset('js/custom.js')}}"></script>
<link rel="stylesheet" href="{{url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css')}}">
    <script src="{{asset('js/jquery.min.js')}}" charset="utf-8"></script>
    <script src="{{'http://cdn.ckeditor.com/4.10.0/standard/ckeditor.js'}}"></script>
    <!-- <script src="{{'http://cdn.ckeditor.com/4.10.0/full/ckeditor.js'}}"></script> -->
    <!-- <script src="//cdn.ckeditor.com/4.10.0/basic/ckeditor.js"></script> -->
    <link rel="shortcut icon" type="image/x-icon" href="{{url('img/favicon.png')}}" />
    <link rel="stylesheet" href="{{url('plugins/lightbox2/dist/css/lightbox.min.css')}}">
    <link rel="stylesheet" href="{{url('http://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css')}}">
    <script src="{{'http://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js'}}"></script>
    <!-- For Loading -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.37.0/jquery.form.min.js"></script>
    <!-- <link href="toastr.css" rel="stylesheet"/>
    <script src="toastr.js"></script> -->

    <!-- <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}"> -->
    <!-- FONT AWESOME CSS -->
<link href="{{asset('css/new_css/font-awesome.min.css')}}">
     <!-- FLEXSLIDER CSS -->
<link rel="stylesheet" href="{{asset('css/new_css/flexslider.css')}}">
    <!-- CUSTOM STYLE CSS -->
    <link href="{{asset('css/new_css/style2.css')}}" rel="stylesheet" />

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
    <!--  Jquery Core Script -->
    <script src="{{asset('js/new_js/jquery-1.10.2.js')}}"></script>
    <!--  Core Bootstrap Script -->
    <script src="{{asset('js/new_js/bootstrap.js')}}"></script>
    <!--  Flexslider Scripts -->
         <script src="{{asset('js/new_js/jquery.flexslider.js')}}"></script>
     <!--  Scrolling Reveal Script -->
    <script src="{{asset('js/new_js/scrollReveal.js')}}"></script>
    <!--  Scroll Scripts -->
    <script src="{{asset('js/new_js/jquery.easing.min.js')}}"></script>
    <!--  Custom Scripts -->
         <script src="{{asset('js/new_js/custom.js')}}"></script>


    <script>
      $(window).on('load', function () {
        $('#loaderIcon_main').fadeIn();
        $('#loaderIcon_main').fadeOut(2000);
        // $('#loaderIcon').show()
      });
    </script>
  </body>
</html>
