<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Service Provider</title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>
    @include('inc.navbar')
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          @include('inc.messages')
          @yield('content')
        </div>
      </div>
    </div>

  </body>
</html>
