@extends('layouts.app')

@section('content')
<h1 align="center">Login</h1>

<form class="" action="{{url('login')}}" method="post">
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
@endsection
