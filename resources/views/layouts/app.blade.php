<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Service Provider</title>

    <!-- <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/custume.css')}}"> -->
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/custume.css">
    <script src="{{asset('js/app.js')}}" charset="utf-8"></script>
  </head>
  <body>
  @include('inc.navbar')
    <div class="col-md-8 col-md-offset-2">
      @include('inc.messages')
  @yield('content')
    </div>
  </body>
</html>
