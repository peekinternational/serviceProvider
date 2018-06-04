@extends('layouts.app')
@section('content')
<div class="container" id="container">
  <div class="row">
<div class="col-lg-6 col-md-6 col-sm-6 col-lg-offset-2 col-md-offset-2 col-sm-offset-1">
<h1 align="center">Login</h1>
<form class="" action="{{url('Account/login')}}" method="post">
  {{csrf_field()}}
  <div class="form-group">
    <label>Phone Number:</label>
    <input type="number" name="phone" class="form-control" value="" placeholder="Enter Phone">
  </div>
  <div class="form-group">
    <label>Password:</label>
    <input type="password" name="password" class="form-control" value="" placeholder="Enter Password">
  </div>
  <button type="submit" class="btn btn-primary" name="button">Login</button>
</form>
</div>
</div>
</div>

@endsection
