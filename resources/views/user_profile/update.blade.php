@extends('layouts.app')

@section('content')
<h1 align="center">Create Profile</h1>
<!-- @if(Session ('ses'))
{{Session('ses')}}
@endif -->
<form class="" action="{{url('/update/'. $user->id)}}" method="post">
  {{csrf_field()}}
  <div class="form-group">
    <label>Full Name:</label>
    <input type="text" name="name" class="form-control" value="{{$user->name}}">
  </div>
  <div class="form-group">
    <label>Phone Number:</label>
    <input type="number" name="phone" class="form-control" value="{{$user->phone}}">
  </div>
  <div class="form-group">
    <label>Password:</label>
    <input type="text" name="password" class="form-control" value="{{$user->password}}">
  </div>
  <div class="form-group">
    <label>Skills:</label>
    <input type="text" name="skill" class="form-control" value="{{$user->skill}}" placeholder="Enter Skills">
  </div>
  <div class="form-group">
    <label>Email:</label>
    <input type="email" name="email" class="form-control" value="{{$user->email}}"  placeholder="Enter Email">
  </div>
  <div class="form-group">
    <label>Address:</label>
    <input type="text" name="address" class="form-control" value="{{$user->address}}"  placeholder="Enter Address">
  </div>
  <div class="form-group">
    <label>Fee:</label>
    <input type="number" name="fee" class="form-control" value="{{$user->fee}}"  placeholder="Enter Examination Fee">
  </div>
  <div class="form-group">
    <label>Experience:</label>
    <input type="text" name="experience" class="form-control" value="{{$user->experience}}" placeholder="Enter Experience">
  </div>
  <button type="submit" class="btn btn-primary" name="button">Submit</button>
</form>
@endsection