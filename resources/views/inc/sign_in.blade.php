@extends('layouts.app')
@section('content')
<div class="col-lg-6 col-md-6 col-sm-6 col-lg-offset-2 col-md-offset-2 col-sm-offset-1">
  <form class="form-group" action="" method="post">
    <div class="text-center ">
      <h2 class="from-control  btn-success">Log in </h2>
    </div>
    <div class="form-group">
      <label>Phone #:</label>
      <input type="text" class="form-control" name="login_phone" value="" placeholder="Phone Number">
    </div>
    <div class="form-group">
      <label>Password:</label>
      <input type="password" class="form-control" name="login_password" value="">
    </div>
    <div class="text-center">
      <input type="submit" class="btn btn-primary form-control" name="login_btn" value="Log in">
    </div>
  </form>
</div>

@endsection
