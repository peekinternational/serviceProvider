<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Service Provider</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/custume.css')}}">
    <script src="{{asset('js/app.js')}}" charset="utf-8"></script>
  </head>
  <body>
  @include('inc.navbar')
    <div>
  @yield('content')
    </div>
  </body>
</html>
