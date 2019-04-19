@extends('layouts.app')
@section('content')
<div class="container" id="container">
  <div class="row">
    <div id="loginBox" class="col-md-6 col-md-offset-3 loginBox">
<!-- <div class="col-lg-6 col-md-6 col-sm-6 col-lg-offset-2 col-md-offset-2 col-sm-offset-1"> -->
<h1 align="center">Verification Code</h1>
@include('inc.messages')
<form class="" action="{{url('/compincode')}}" method="post">
  {{csrf_field()}}
  <div class="form-group" style="text-align:center;">
    <label>Code:</label>
   <input type="number" name="pincode" placeholder="Enter Code">
  </div>
  
  
              
 <div class="row">
    <div class=" col-md-offset-4 col-md-4">
        <button type="submit" class="btn btn-primary btn-block login-btn" name="login">Ok</button>
    </div>
   <!--  <div class="col-md-4">
        <a href="" class="btn btn-default btn-block">cancel</a>
    </div> -->
</div>
</form>
</div>
</div>
</div> 

@endsection
