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
    <input type="number" name="phone" class="form-control" value="" placeholder="03123456789" required="">
  </div>
  <div class="form-group ">
    <label>Password:</label>
    <input type="password" id="login-password" name="password" class="form-control" value="" placeholder="Enter Password" required="">
     <span toggle="#password-field" class="fa fa-fw fa-eye field-icon " id="toggle-passwords"></span>
  </div>
  <div class="">
        <h5><a href="">Forget Password?</a></h5>
        </div>
                <div class="input-group">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
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
<!-- Java script starts -->
<script type="text/javascript">
  $(document).ready(function(){
  // function to hide and show password
   function shows() {
    var p = document.getElementById('login-password');
    p.setAttribute('type', 'text');
}

function hides() {
    var p = document.getElementById('login-password');
    p.setAttribute('type', 'password');
}

var pwShowns = 0;

document.getElementById("toggle-passwords").addEventListener("click", function () {
    if (pwShowns == 0) {
        pwShowns = 1;
        shows();
    } else {
        pwShowns = 0;
        hides();
    }
}, false);
});
</script>

@endsection
