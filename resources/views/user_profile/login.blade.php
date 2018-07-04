@extends('layouts.app')
@section('content')
<div class="container" id="container">
  <div class="row">
    <div id="loginBox" class="col-md-6 col-md-offset-3 loginBox">
<!-- <div class="col-lg-6 col-md-6 col-sm-6 col-lg-offset-2 col-md-offset-2 col-sm-offset-1"> -->
<h1 align="center">Login</h1>
@include('inc.messages')
<form class="" action="{{url('Account/login')}}" method="post">
  {{csrf_field()}}
  <div class="form-group">
    <label>Phone Number:</label>
    <input type="number" name="phone" class="form-control" value="" placeholder="Enter Phone" required="">
  </div>
  <div class="form-group">
    <label>Password:</label>
    <input type="password" name="password" class="form-control" value="" placeholder="Enter Password" required="">
  </div>
  <div class="">
        <h5><a href="">Forget Password?</a></h5>
        </div>
                <div class="input-group">
                    <div class="checkbox">
                        <label>
                            <input id="login-remember" type="checkbox" name="remember" value="1">
                            Remember Me
                        </label>
                    </div>
                </div>
 <div class="row">
    <div class="col-md-3">
        <button type="submit" class="btn btn-primary btn-block login-btn" name="login">Login</button>
    </div>
    <div class="col-md-4">
        <a href="{{url('register')}}" class="btn btn-default btn-block">Regiter</a>
    </div>
</div>
</form>
</div>
</div>
</div>

@endsection
