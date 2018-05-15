<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Service Provider</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <script src="{{asset('js/app.js')}}" charset="utf-8"></script>
  </head>
  <body>
    @include('inc.navbar')
    <div class="col-lg-8 col-md-8 col-sm-6 col-lg-offset-2 col-md-offset-2 col-sm-offset-1">
  @yield('content')
    </div>
  </body>
</html>
